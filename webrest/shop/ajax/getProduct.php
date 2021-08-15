<?php
/**
 * @author: AzimjonToirov
 *
 */
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;                                  

/** @var ZView $this */
$product_id = $this->httpGet('id');
$companyId = $this->httpGet('companyId');

return Az::$app->market->product->product($product_id);
