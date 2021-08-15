<?php

use zetsoft\models\shop\ShopCatalog;

$shop_catalog_id = $this->httpGet('shop_catalog_id');
    
if (empty($shop_catalog_id))
    return null;

$shop_catalog = ShopCatalog::findOne($shop_catalog_id);

return [
    'price' => (int)$shop_catalog->price
];
