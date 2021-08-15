<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/**
 *
 * @author JaloliddinovSalohiddin
 * @author OtabekNosirov
 * @author AkromovAzizjon
 *
 */

/** @var ZView $this */
$action = new WebItem();

$action->debug = false;
$action->csrf = false;
$action->type = WebItem::type['ajax'];


$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$category_id = $this->httpGet('id');
$max_price = $this->httpGet('max_price');
$min_price = $this->httpGet('min_price');
$brands = $this->httpGet('brands');
$properties = $this->httpGet('properties');

$products = Az::$app->market->filter->filterProduct($category_id, $min_price, $max_price, $brands, $properties);

return $products;
