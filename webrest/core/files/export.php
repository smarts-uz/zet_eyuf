<?php

/**
 *  @author: DavlatovRavshan
 * 
 * Function  run
 * @param Models $model
 * @param $attribute
 * @return  bool
 * @throws \yii\base\Exception
 * @author Umid Muminov
 */

use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use zetsoft\system\actives\ZActiveData;
use zetsoft\system\actives\ZActiveQuery;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\actives\ZDynamicModel;
use zetsoft\system\kernels\ZView;

/** @var Models $model */

/** @var ZView $this */
$exportType = $this->httpGet('exportType');
$modelClassName = $this->httpPost('modelClassName');
$checkKeys = $this->httpPost('checkKeys');
$method = $this->httpPost('method');

$type = $this->httpPost('type');
$modelClass = $this->bootFull($modelClassName);
$url = $this->httpPost('action');

//start|DavlatovRavshan|2020.10.10
$userId = $this->userIdentity()->id;
$sessionKey = "Provider-$modelClassName-$url-$userId";

$provider = $this->sessionGet($sessionKey);

if ($type === 'model')
    $provider = Az::$app->smart->dyna->getProviderFromArray($provider);

//end | DavlatovRavshan | 10.10.2020

//start: MurodovMirbosit 10.10.2020
$model = null;
if ($type === 'model')
    $model = new $modelClass();
//end

//start|DavlatovRavshan|2020.10.10
Az::$app->forms->export->clean();
Az::$app->forms->export->provider = $provider;
Az::$app->forms->export->type = $type;
Az::$app->forms->export->checkKeys = $checkKeys;
Az::$app->forms->export->model = $model;
$filePath = Az::$app->forms->export->$method();

$this->urlRedirect([
    'getjson',
    'filepath' => $filePath
]);
//end | DavlatovRavshan | 10.10.2020






