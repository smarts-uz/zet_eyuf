<?php

/**
 * @author: AzimjonToirov
 *
 */
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
$category_id = $this->httpGet('id');


return Az::$app->market->product->allProducts();


