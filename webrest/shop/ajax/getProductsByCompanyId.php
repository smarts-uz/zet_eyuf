<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$action = new WebItem();

$action->debug = false;
$action->csrf = false;
$action->type = WebItem::type['ajax'];


$this->paramSet(paramAction, $action);


$this->title();
$this->toolbar();

$return = [];

$market_id = $this->httpGet('id');

$discount = Az::$app->market->offer->catalogByStatus('discount', $market_id, 12);


$new = Az::$app->market->offer->catalogByStatus('new', $market_id, 12);


$popular = Az::$app->market->offer->catalogByStatus('popular', $market_id, 12);
//foreach ($new as $k => $v){
//    if ($k === 'images'){
//
//
//    }
//}
$return['new'] = $new;
$return['discount'] = $discount;
$return['popular'] = $popular;

return $return;
