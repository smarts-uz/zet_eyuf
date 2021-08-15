<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

$checkKeys = $this->httpPost('checkKeys');
$date_delay = $this->httpGet('date_delay');
$shop_delay_id = $this->httpGet('shop_delay_id');

$delayeds = [];
$ids = [];

foreach ($checkKeys as $checkKey) {


    $model = ShopOrder::findOne($checkKey);
    $history = collect($model->status_logistics_history);
    $his = $history->where('name', 'delivery_transfer')->count();

    if ($his > 3) {
        $delayeds[] = $his;
        $ids[] = $model->id;
        continue;
    }

    $model->delayed_deliver_date = $date_delay;
    $model->shop_delay_id = $shop_delay_id;
    $model->status_logistics = ShopOrder::status_logistics['delivery_transfer'];
    $model->configs->rules = [
        [
            validatorSafe
        ]
    ];
    $model->save();

}
    
foreach ($delayeds as $delayed) {

    if ($delayed > 3) {

        $id = implode(',', $ids);
        $title = Az::l("Заказ под номером $id уже был перенесен 3 раза");
        if (count($ids) > 1)
            $title = Az::l("Заказы под номером $id уже были перенесены 3 раза");

        return [
            'error' => $title,
        ];
    }


}
