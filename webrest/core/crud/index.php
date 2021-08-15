<?php


use yii\data\ActiveDataProvider;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

try {
    return Az::$app->cores->rest->index();

} catch (Exception $e) {
    Az::$app->response->setStatusCode(500);
    return $e;
}
