<?php
/**
 * @author: AzimjonToirov
 *
 */

use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$currency = $this->httpPost('currency');
vdd($currency);
$this->sessionSet('currency', $currency);

