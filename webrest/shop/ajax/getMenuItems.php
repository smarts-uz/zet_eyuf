<?php
/**
 * @author: AzimjonToirov
 *
 */


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$companyId = $this->httpGet('companyId');

return Az::$app->market->category->menuItemsVue($companyId);
