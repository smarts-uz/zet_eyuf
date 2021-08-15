<?php


use zetsoft\models\shop\ShopOrderItem;
use zetsoft\models\ware\WareReturn;
use zetsoft\system\Az;

$checkKeys = $this->httpPost('checkKeys');

$ware_return_id = $this->httpGet('ware_return_id');
$ware_return = WareReturn::findOne($ware_return_id);

foreach ($checkKeys as $checkKey) {

    $model = ShopOrderItem::findOne($checkKey);
    $model->ware_return_id = null;
    $model->configs->rules = [
        [
            validatorSafe
        ]
    ];
    $model->save();

}

return $this->urlRedirect($this->urlGetBack(), false);
