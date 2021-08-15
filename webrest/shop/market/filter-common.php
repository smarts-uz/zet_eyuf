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

$this->userIdentity()->name;

$market_id = $this->httpGet('marketId');
$category_id = $this->httpGet('categoryId');

return Az::$app->market->filter->filterFormItemsSession($category_id, $market_id);






