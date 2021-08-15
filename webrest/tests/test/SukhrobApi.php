<?php

use zetsoft\models\shop\ShopCatalog;

$shop_catalog_id = $this->httpGet('shop_catalog_id');
$amount = $this->httpGet('amount');

if (empty($shop_catalog_id) || empty($amount))
    return null;

$shop_catalog = ShopCatalog::findOne($shop_catalog_id);

return [
    'price_all' => (int)$shop_catalog->price * (int)$amount
];