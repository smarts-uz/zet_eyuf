<?php


use zetsoft\models\shop\ShopCatalog;

$companyId = $this->httpPost('companyId');
$elementId = $this->httpPost('elementId');

$catalog = ShopCatalog::findOne([
    'user_company_id' => $companyId,
    'shop_element_id' => $elementId
]);

$return = [];

$return['amount'] = $catalog->amount;
$return['price'] = $catalog->price;
$return['oldPrice'] = $catalog->price_old;

return $return;
