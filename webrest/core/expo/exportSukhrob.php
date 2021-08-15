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
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZExportMenu;
use Yii;


/**
 *
 *
 * @license Shahzod Gulomqodirov
 */

/** @var Models $model */

$modelClassName = $this->httpGet('modelClassName');
$exportType = $this->httpGet('exportType');
$configs = $this->httpGet('configs');
$modelClass = $this->bootFull($modelClassName);

/** @var ZActiveRecord $model */
$model = new $modelClass();
$model->configs->rules = [[
    validatorSafe
]];
$model->configs->nameOn = ZArrayHelper::getValue($configs, 'nameOn');
$model->configs->nameShowEx = ZArrayHelper::getValue($configs, 'nameShowEx');
$model->configs->nameOff = ZArrayHelper::getValue($configs, 'namesEX');

$model->columns();


$provider = $model->search();

$provider->pagination = false;
$columns = $model->columnsList([dbTypeJsonb]);

if ($session->has('dataProv')) {
//    $dataProv = $session->get('dataProv');
//    $provider = $dataProv;
    $item = new \zetsoft\system\module\ZSession();
    $provider = sessionGet('dataProv');
}

echo ZExportMenu::widget([
    'dataProvider' => $provider,
    'columns' => $columns,
    'triggerDownload' => true,
    'exportType' => $exportType,
    'filename' => $modelClassName . '_' . date('Y-m-d_H-i-s'),
]);



