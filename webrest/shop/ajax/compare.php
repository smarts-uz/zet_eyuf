<?php

use zetsoft\system\Az;

$product_id = $this->httpGet('productId') ?? '';

Az::$app->market->wish->writeCompare($product_id);
return $this->sessionGet('compare');
