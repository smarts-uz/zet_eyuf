<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    11.06.2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\service\cores;

use yii\caching\TagDependency;
use yii\helpers\FileHelper;
use zetsoft\models\core\CoreSetting;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageBlocks;
use zetsoft\models\page\PageBlocksType;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZInflector;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZFrame;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;

class System extends ZFrame
{
    public string $mainControllerPath = Root . '/cncmd/ZetController.php';

    /**
     *
     * Function  generateActions
     * @throws \ReflectionException
     * @status this will generate return for cncmd/ZetController actions function
     */
    public function generateActions(): void
    {
        $return = [];
        $files = ZFileHelper::scanFilesPHP(Root . '/cncmd/cores');
        foreach ($files as $file) {
            $className = str_replace('.php', '', basename($file));
            $class = 'zetsoft\cncmd\cores\\' . $className;
            $class = new \ReflectionClass($class);
            $methods = $class->getMethods();
            $controllerName = ZInflector::actionize(str_replace('Controller', '', $className));
            $inner = [];
            foreach ($methods as $method) {
                if (ZStringHelper::startsWith($method->name, 'action') && !ZStringHelper::startsWith($method->name, 'actions')) {
                    $doc = $class->getMethod($method->name)->getDocComment();
                    preg_match_all('#@status(.*?)\r\n#s', $doc, $text);
                    $val = ZArrayHelper::getValue($text, [1, 0]);
                    if ($val === null) {
                        $val = '';
                    }
                    $actionName = ZInflector::actionize(str_ireplace('action', '', $method->name));
                    if ($actionName === '') {
                        $actionName = 'action';
                    }
                    $inner[] = [
                        $actionName => $val
                    ];
                }
            }
            if (!empty($inner)) {
                $res = array_reduce($inner, 'array_merge', array());
                $return[$controllerName] = $res;
            }
        }
        $file = file_get_contents($this->mainControllerPath);
        $new_return = 'return ' . ZVarDumper::value($return, 8) . ';';
        $new_file = preg_replace('#return \[(.*?);#s', $new_return, $file);
        file_put_contents($this->mainControllerPath, $new_file);
    }

    /**
     * @status Generate value for name column if `nameAuto = true` for all Models
     */
    public function generateNameValue(){
        if ($this->paramGet('smartClass')) {
            $models = $this->paramGet('smartClass');
        } else {
            $models = Az::$app->smart->migra->scan();
        }
        foreach ($models as $model){
            if ($this->paramGet('smartClass'))
                $model = $this->bootFull($model);
            /** @var ZActiveRecord $object */
            $objects = $model::find()->all();
            foreach ($objects as $object) {
                if (!$object->configs->nameAuto || !property_exists($object,'name'))
                    continue;
                $auto = $object->configs->nameValue;

                if (is_callable($auto))
                    $object->name = $auto($object);
                else {
                    $list = $object->columnsList();
                    $replace = [];
                    foreach ($list as $item) {
                        //    '{name} - {user_ids} / {user_ids}';
                        $replace['{' . $item . '}'] = $object->$item;
                    }
                    $object->name = strtr($auto, $replace);
                }
                $object->configs->rules = validatorSafe;
                $object->save();
            }
        }
    }
}
