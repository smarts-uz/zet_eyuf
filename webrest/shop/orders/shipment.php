<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\system\Az;

$checkKeys = $this->httpPost('checkKeys');
$shop_shipment_id = $this->httpGet('shop_shipment_id');

foreach ($checkKeys as $checkKey) {
    $model = ShopOrder::findOne($checkKey);
    $model->shop_shipment_id = $shop_shipment_id;
    $model->status_logistics = ShopOrder::status_logistics['courier_appointment'];
    $model->configs->rules = [
        [
            validatorSafe
        ]
    ];
    $model->save();

}
