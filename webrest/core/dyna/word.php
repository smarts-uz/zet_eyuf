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


use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;


$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');
$namespace = $this->httpGet('namespace');
$service = $this->httpGet('service');
$method = $this->httpGet('method');


$file = Az::$app->$namespace->$service->$method($ids);


$this->urlRedirect('/' . $file, false);

