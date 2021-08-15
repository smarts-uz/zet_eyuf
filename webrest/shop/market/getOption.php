<?php


use PHPUnit\Util\Log\JSON;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZDilshodBoxWidget;
use zetsoft\widgets\market\ZProductCardWidget;


/** @var ZView $this */



$value = $this->httpPost('depend');


$data = Az::$app->market->product->getOptionsByCategory($value);

echo json_encode($data);
