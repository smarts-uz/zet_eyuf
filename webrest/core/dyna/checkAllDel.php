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
use zetsoft\system\module\Models;

/** @var ZView $this */
/** @var Models $model */

//start|DavlatovRavshan|2020.10.10
$checks = $this->httpGet('checks');

if (empty($checks))
    return null;
    
$modelClassName = $this->httpGet('modelClassName');
$url = $this->httpGet('url');
$userId = $this->userIdentity()->id;

$key = "Checkdyna-$modelClassName-$url-$userId";

$session = $this->sessionGet($key);
if (empty($session))
    $session = [];

foreach ($checks as $check) {
    if (ZArrayHelper::isIn((int)$check, $session))
        ZArrayHelper::removeValue($session, (int)$check);
}

$this->sessionSet($key, $session);
//end | DavlatovRavshan | 10.10.2020
