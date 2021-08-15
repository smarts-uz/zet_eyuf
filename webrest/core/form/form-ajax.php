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



use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


$modelClassName = $this->httpGet('modelClassName');

$form = $this->httpPost($modelClassName);

$modelName = $this->bootFull($modelClassName);
$modelId = $this->httpGet('id');

/** @var Models $model */

$model = $modelName::findOne($modelId);

if (!$model)
    return [];

$configs = $model->configs;
$columns = $model->columns;

$return = [];
foreach ($columns as $key => $column) {

    if (is_callable($column->value) && $configs->autoSave) {

        $func = $column->value;

        $value = $func($model);

        $return[$key] = $value;

    }

}

return $return;

