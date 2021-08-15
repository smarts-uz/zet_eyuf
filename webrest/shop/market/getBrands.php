<?php


use PHPUnit\Util\Log\JSON;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\page\PageAction;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZDilshodBoxWidget;
use zetsoft\widgets\market\ZProductCardWidget;



/** @var ZView $this */

$seletedId = $this->httpPost('depend');
$model = $this->httpPost('dependModel');
$column = $this->httpPost('dependAttr');
$data = Az::$app->market->category->getBrands($seletedId);

echo $data;
