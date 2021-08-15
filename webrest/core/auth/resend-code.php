<?php

/**
 *
 *
 * Author:  Shakhrizod Nurmukhammadov
 *
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

return Az::$app->cores->auth->resendPhoneCode();
