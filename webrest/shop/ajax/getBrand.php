<?php
/*
 * Author: Axrorbek Nisonboyev
 */
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$brandId = $this->httpGet('id');

return Az::$app->market->brand->getBrand($brandId);
