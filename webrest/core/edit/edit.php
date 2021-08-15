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

namespace zetsoft\apisys\edit;


use Yii;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


/** @var ZActiveRecord $modelClass */
/** @var Models $model */

//vdd($this->httpPost());

Az::$app->response->format = \yii\web\Response::FORMAT_JSON;

$post = $this->httpPost();

$modelClassName = $this->httpGet('modelClassName');

if ($this->httpPost('hasEditable')) {

    $key = $this->httpPost('editableKey');
    $index = $this->httpPost('editableIndex');

    if (!isset($post[$modelClassName]))
        return ['output' => '-'];

    $postModel = $post[$modelClassName][$index];
    $attribute = $post['editableAttribute'];

    $modelClass = $this->bootFull($modelClassName);

    $model = $modelClass::findOne($key);

    $model[$attribute] = ZVarDumper::ajaxValue($postModel[$attribute]);

    $model->search = true;

    // vdd($model->attributes);

    if ($model->save()) {

        Az::$app->forms->widata->clean();
        Az::$app->forms->widata->model = $model;
        Az::$app->forms->widata->attribute = $attribute;
        $value = Az::$app->forms->widata->value();

        Az::$app->forms->modelz->upload($model);

        return ['output' => $value];
    }
}

