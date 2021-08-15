<?php

/**
 * @author AzimjonToirov
 *
 */

/** @var ZView $this */

use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;

$company_id = $this->httpGet('id');

return Az::$app->market->product->getCompany($company_id);
