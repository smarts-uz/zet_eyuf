<?php
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$product_id = $this->httpGet('id');

return Az::$app->market->review->getReviewByProductId($product_id);
