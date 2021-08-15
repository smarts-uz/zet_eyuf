<?php


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */


$modelName = $this->httpPost('depend');
$modelName = str_replace('/', '\\', $modelName);

$attributes = Az::$app->smart->widget->getModelAttributesByFiles();

return $attributes[$modelName];

