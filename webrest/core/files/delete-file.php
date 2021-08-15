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

namespace zetsoft\apisys\files;


use zetsoft\system\Az;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\kernels\ZAction;

$data = $this->httpGet();
$dataJson = json_encode($data);
$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');
$attribute = $this->httpGet('attribute');
$key = Az::$app->request->post('key');

Az::$app->inputs->fileinput->key = $key;
Az::$app->inputs->fileinput->id = $id;
Az::$app->inputs->fileinput->modelClassName = $modelClassName;
Az::$app->inputs->fileinput->attribute = $attribute;

return Az::$app->inputs->fileinput->delete();
