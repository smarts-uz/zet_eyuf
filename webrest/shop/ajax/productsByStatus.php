<?php

/**
 * @author: AzimjonToirov
 * 
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

$return['new'] = Az::$app->market->offer->productByStatus('new', 12);
$return['popular'] = Az::$app->market->offer->productByStatus('popular', 12);
$return['discount'] = Az::$app->market->offer->productByStatus('discount', 12);

return $return;
