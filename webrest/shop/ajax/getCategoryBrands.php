<?php
/**
 * @author AzimjonToirov
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$categoryId = $this->httpGet('categoryId');

return Az::$app->market->filter->getCategoryBrandsVue($categoryId);
