<?php

use zetsoft\models\shop\ShopOrderItem;
use zetsoft\models\ware\WareReturn;

$checkKeys = $this->httpPost('checkKeys');

$ware_return_id = $this->httpGet('ware_return_id');
$ware_return = WareReturn::findOne($ware_return_id);

foreach ($checkKeys as $checkKey) {

    $model = ShopOrderItem::findOne($checkKey);
    $model->ware_return_id = $ware_return_id;
    $model->configs->rules = validatorSafe;
    $model->save();

}

