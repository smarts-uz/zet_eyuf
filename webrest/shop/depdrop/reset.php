<?php


use PHPUnit\Util\Log\JSON;
use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZDilshodBoxWidget;
use zetsoft\widgets\market\ZProductCardWidget;


/** @var ZView $this */

$this->type = WebItem::type['ajax'];

$value = $this->httpPost('values');
$value = explode('|', $value);

//$data = Az::$app->smart->widget->getDependColumns($value, $model, $column);
//echo json_encode($data);
