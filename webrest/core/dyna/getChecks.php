<?php


/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\apisys\dyna;


use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$sessionKey = $this->httpGet('sessionKey');

$return = null;
if (!empty($this->sessionGet($sessionKey)))
    $return = $this->sessionGet($sessionKey);

return $return;
