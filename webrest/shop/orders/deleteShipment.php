<?php

use zetsoft\models\shop\ShopOrder;

$checkKeys = $this->httpPost('checkKeys');

foreach ($checkKeys as $checkKey) {

    $model = ShopOrder::findOne($checkKey);
    $model->shop_shipment_id = null;
    $model->status_logistics = ShopOrder::status_logistics['shipment_ready'];
    $model->configs->rules = [
        [
            validatorSafe
        ]
    ];

    $model->save();

}

return $this->urlRedirect($this->urlGetBack());
