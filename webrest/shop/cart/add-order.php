<?php
/** @var ZView $this */


use zetsoft\dbitem\core\RestItem;
use zetsoft\service\cores\Rbac;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;




$item = new RestItem();

$item->authType = Rbac::authType['bearer'];
$item->cache = false;
$item->cacheHttp = false;

$this->paramSet(paramAction, $item);



//return $this->httpGet();
if ($this->httpGet())
{
    $catalog_id = (int)ZArrayHelper::getValue($this->httpGet(), 'shop_catalog_id');
    $source_id = (int)ZArrayHelper::getValue($this->httpGet(), 'source_id');
    $cpas_track_id = (int)ZArrayHelper::getValue($this->httpGet(), 'cpas_track_id');
    $offer_id = (int)ZArrayHelper::getValue($this->httpGet(), 'offer_id');
    $source_id = (int)ZArrayHelper::getValue($this->httpGet(), 'source_id');


    if (!$catalog_id)
        $catalog_id = $offer_id;

    $user_name = $this->httpGet('user_name');
    $user_phone = $this->httpGet('user_phone');
    $amount = (int)$this->httpGet('amount');

    $responce = Az::$app->market->order->saveOrderFromCpaApi($user_name, $user_phone, $catalog_id, $amount, $cpas_track_id, $source_id);

    return [
        'cpas_track_id' => $cpas_track_id,
        'order_id' => $responce
    ];

}




