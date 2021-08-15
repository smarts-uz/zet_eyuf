<?php

/**
 * @author AzimjonToirov
 * 
 */

use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
$get = $this->httpGet();
$productId = $this->httpGet('productId');

Az::$app->market->cart->getcatalogsByElement($productId, $get);
