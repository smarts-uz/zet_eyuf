<?php

/**
 * Author:  Nurmukhammadov Shakhrizod
 */

use kartik\form\ActiveForm;
use yii\web\Response;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$request = Az::$app->request;
$post = $this->httpPost();

$keys = array_keys($post);
$key = $keys[1];
$modelClassName =  $this->bootFull($key);
if (!class_exists($modelClassName)){
    $modelClassName = $this->bootFullForm($key);
}
$model = new $modelClassName;

if ($request->isAjax && !$request->isPjax && $model->load($post)) {
    Az::$app->response->format = Response::FORMAT_JSON;
    return ActiveForm::validate($model);
}
