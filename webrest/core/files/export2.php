<?php

/**
 *
 * Function  run
 * @param Models $model
 * @param $attribute
 * @return  bool
 * @throws \yii\base\Exception
 */

use zetsoft\widgets\former\ZExportMenu;
use kartik\export\ExportMenu;
use zetsoft\system\helpers\ZJsonHelper;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\Az;
/**
 *
 *
 * @license Shahzod Gulomqodirov
 */

/** @var Models $model */

$dataProvider = $this->httpPost('dataProvider');

$provider = str_replace('\\', '\\\\', $dataProvider);
$dataProvider = ZJsonHelper::decode($provider);
$exportType = $this->httpGet('exportType');
/*
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'exportType' => $exportType,
    'folder' => Root . '/upload/uploaz/market/json_temp/',


    'triggerDownload' => true,
    'filename' => $modelClassName . '_' . date('Y-m-d_H-i-s'),
]);*/

$filePath = Az::$app->jsonb->exportToJson->modelToJsonM($dataProvider);

$this->urlRedirect([
    'getjson',
    'filepath' => $filePath
]);






