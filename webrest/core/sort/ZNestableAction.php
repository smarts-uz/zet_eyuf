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

namespace zetsoft\apisys\sort;


use zetsoft\system\Az;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\kernels\ZAction;


$className = str_replace('/', '\\', $this->httpPost('modelClassName'));
Az::$app->menu->nestable->modelClassName = $className;
Az::$app->menu->nestable->parent = $this->httpGet('parent');
Az::$app->menu->nestable->sort = $this->httpGet('sort');
Az::$app->menu->nestable->setNestable($this->httpPost('data'));

