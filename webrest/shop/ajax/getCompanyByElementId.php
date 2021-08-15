<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$product_id = $this->httpGet('product_id');
$option_ids = $this->httpGet('option_ids');


return Az::$app->market->cart->getCatalogsByElement($product_id, $option_ids);
