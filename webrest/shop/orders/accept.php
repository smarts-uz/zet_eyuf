<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

$value = $this->httpGet('value');
$currency = $this->httpGet('currency');

return [
    'value' => (int)$value * (int)$currency
];
