<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$checkKeys = $this->httpPost('checkKeys');
$shop_delay_id = $this->httpGet('shop_delay_id');

foreach ($checkKeys as $checkKey) {

    $model = ShopOrder::findOne($checkKey);
    $model->delayed_deliver_date = null;
    $model->shop_delay_id = null;

    $history = [];
    if ($model->status_logistics_history)
        $history = $model->status_logistics_history;

    $model->status_logistics = ZArrayHelper::getValue(end($history), 'name');
    $model->configs->rules = [
        [
            validatorSafe
        ]
    ];
    $model->save();

}

return $this->urlRedirect($this->urlGetBack());
