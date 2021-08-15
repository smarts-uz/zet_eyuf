<?php

/**
 * @param Models $model
 * @param $attribute
 * @return  bool
 * @throws \yii\base\Exception
 * @author: DavlatovRavshan
 *
 * Function  run
 * @author Umid Muminov
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var Models $model */

/** @var ZView $this */
$modelClassName = $this->httpPost('modelClassName');
$modelClass = $this->bootFull($modelClassName);
$checkKeys = $this->httpPost('checkKeys');

//start: MurodovMirbosit 12.10.2020
$type = $this->httpPost('type');
$url = $this->httpPost('action');

$userId = $this->userIdentity()->id;
$sessionKey = "Provider-$modelClassName-$url-$userId";

$provider = $this->sessionGet($sessionKey);

$model = null;
if ($type === 'model') {
    $model = new $modelClass();
    $provider = Az::$app->smart->dyna->getProviderFromArray($provider);
}
     
Az::$app->office->excel->checkkeys = $checkKeys;
Az::$app->office->excel->model = $model;
Az::$app->office->excel->provider = $provider;
Az::$app->office->excel->modelClass = $model;
Az::$app->office->excel->type = $type;
Az::$app->office->excel->run();
//end: MurodovMirbosit 12.10.2020  lines 18
