<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\apisys\rest;


use zetsoft\system\Az;
use zetsoft\system\kernels\ZAction;


$serviceItem = Az::$app->utility->execs->itemHttp();

$value = $this->httpGet('depend');
$parentValue = $this->httpGet('parentDepend');
if (empty($value)){
    $value = null;
}
return Az::$app->utility->execs->service($serviceItem, $value, $parentValue);
