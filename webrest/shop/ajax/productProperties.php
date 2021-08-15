<?php
/**
 * @author: AzimjonToirov
 *
 */

use zetsoft\dbitem\data\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZBootstrapBorderGroupWidgetM;

/** @var ZView $this */
$productId = $this->httpGet('productId');


return Az::$app->market->product->getPropertiesByProduct($productId);
