<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$action = new WebItem();

$action->csrf = true;
$action->debug = true;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$action->type = WebItem::type['ajax'];


$this->paramSet(paramAction, $action);

$this->sessionDel('cart');

$result=false;

if(!$this->sessionGet('cart'))
    return true;

return false;
