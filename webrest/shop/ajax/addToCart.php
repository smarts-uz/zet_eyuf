<?php
/**
 * @author: AzimjonToirov
 *
 */


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$catalog_id = (int)$this->httpGet('catalogId');
$amount = (int)$this->httpGet('amount');
$type = $this->httpGet('type');

return Az::$app->market->cart->addOrSetCart($catalog_id, $amount, $type);
