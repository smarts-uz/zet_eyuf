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

$market_id = $this->httpGet('id');

return Az::$app->market->offer->catalogByStatus('discount', $market_id, 12);
