<?php


use PHPUnit\Util\Log\JSON;
use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZDilshodBoxWidget;
use zetsoft\widgets\market\ZProductCardWidget;


/** @var ZView $this */


$value = $this->httpPost('depend');
$model = $this->httpPost('dependModel');
$column = $this->httpPost('dependAttr');

return Az::$app->smart->widget->getDependColumns($value, $model, $column);
