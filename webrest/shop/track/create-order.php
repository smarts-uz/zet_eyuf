<?php
/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\track\CpasStatistic;
use zetsoft\models\track\CpasTeaser;
//use zetsoft\models\track\TizerTrackerStats; // bu yoq ekan, shunga TrackStats ni uladik
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


$action = new WebItem();
$action->type = WebItem::type['ajax'];
$action->csrf = false;
$action->debug = false;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$gets = $this->httpGet();
$cpas_track_stats_id = $gets['statId'];
$contact_name = $gets['name'];
$contact_phone = $gets['number'];
$amount = $gets['amount'];
//$TrackStats2 = new $TrackStats();

$cpasTrackerStats = CpasStatistic::findOne($cpas_track_stats_id);
$cpasTracker = CpasTeaser::findOne($cpasTrackerStats->track_id);


if ($cpasTrackerStats->shop_order_id) {
    die('Something went wrong');
}
if ($cpasTrackerStats === null) {
    return false;
}
$shop_order = new ShopOrder();
$shop_order->contact_name = $contact_name;
$shop_order->contact_phone = $contact_phone;


if ($shop_order->save()) {
    $order_id = $shop_order->id;

    $order_item = new ShopOrderItem();

    $order_item->shop_order_id = $order_id;
    $order_item->amount = $amount;
    $order_item->save();

    $cpasTrackerStats->shop_order_id = $order_id;

    return $cpasTrackerStats->save();
}








