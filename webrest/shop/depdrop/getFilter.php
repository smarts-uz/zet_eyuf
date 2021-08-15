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

if (empty($value))
    die;

$attributes = Az::$app->smart->widget->getModelAttributes();

if (empty($value))
    $value = PageAction::class;

return $attributes[$value];

