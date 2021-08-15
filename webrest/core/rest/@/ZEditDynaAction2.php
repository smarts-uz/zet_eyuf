<?php

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\apisys\rest;


use Yii;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;

class ZEditDynaAction2 extends ZAction
{

    public function run()
    {

        /** @var ZActiveRecord $modelClass */
        /** @var Models $model */

        Az::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $post = $this->httpPost();
        $get = $this->httpGet();

        $modelClassName = ZArrayHelper::getValue($get, 'modelName');
        $formName = ZArrayHelper::getValue($get, 'formName');
        $modelId = ZArrayHelper::getValue($get, 'editableKey');
        $dependsJson = ZArrayHelper::getValue($get, 'depends');

        /*$depends = [];
        if (!empty($dependsJson))
            $depends = json_decode($dependsJson, true, 512, JSON_THROW_ON_ERROR);*/

        $params = ZArrayHelper::getValue($post, $modelClassName);
        if (empty($params))
            $params = ZArrayHelper::getValue($post, $formName);

        $isEdit = ZVarDumper::ajaxValue($this->httpGet('hasEdit'));
        if ($isEdit) {

            $attribute = ZArrayHelper::getValue($get, 'editableAttribute');
            $value = ZArrayHelper::getValue($params, $attribute);

            if ($this->httpGet('session')) {

                $this->sessionSet($attribute, $value);

                if (is_array($value))
                    $value = ZVarDumper::beauty($value);

                return ['output' => $value];

            }

            $modelClass = $this->bootFull($modelClassName);

            $model = $modelClass::findOne($modelId);

            $model->$attribute = $value;
            $model->configs->rules = [
                [
                    validatorSafe,
                ]
            ];

            /*$dependVals = [];
            foreach ($depends as $depend) {
                $model->$depend .= $value;
                $dependVals[$depend] = $model->$depend;
            }*/

            if ($model->save()) {

                Az::$app->forms->wiData->clean();
                Az::$app->forms->wiData->model = $model;
                Az::$app->forms->wiData->attribute = $attribute;

                $value = Az::$app->forms->wiData->value();

                return [
                    'output' => $value,
                    'depends' => []
                ];

            }

        }

        return false;

    }

}
