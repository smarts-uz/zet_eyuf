<?php

/**
 *
 * Function  run
 * @param Models $model
 * @param $attribute
 * @return  bool
 * @throws \yii\base\Exception
 */

use yii\grid\GridView;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFormatter;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZExportMenu;

/**
 *
 *
 * @license Shahzod Gulomqodirov
 */

/** @var Models $model */

$modelClassName = $this->httpGet('modelClassName');
$exportType = $this->httpGet('exportType');
$configs = $this->httpGet('configs');
$url = $this->httpGet('urlArrayStr');
$type = $this->httpGet('type');

$modelClass = $this->bootFull($modelClassName);

/** @var ZActiveRecord $model */
         
$userId = $this->userIdentity()->id;
$sessionKey = "Provider-$modelClassName-$url-$userId";
/** @var ZView $this */
$provider = $this->sessionGet($sessionKey);
$provider = Az::$app->smart->dyna->getProviderFromArray($provider);

$columns = [];
if ($type === 'model') {
    $model = new $modelClass();
    $model->configs->rules = [[
        validatorSafe
    ]];
    $model->configs->nameOn = ZArrayHelper::getValue($configs, 'nameOn');
    $model->configs->nameShowEx = ZArrayHelper::getValue($configs, 'nameShowEx');
    $model->configs->nameOff = ZArrayHelper::getValue($configs, 'namesEX');

    $model->columns();
    $columns = $model->columnsList([dbTypeJsonb]);

    //   vdd($provider);
    echo ZExportMenu::widget([
        'dataProvider' => $provider,
        'columns' => $columns,
        'triggerDownload' => true,
        'exportType' => $exportType,
        'filename' =>  $modelClassName . '_' . date('Y-m-d_H-i-s'),
    ]);


}

//start: MurodovMirbosit 10.10.2020



