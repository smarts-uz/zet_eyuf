<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\apisys\apps;


use kartik\form\ActiveForm;
use yii\web\Response;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Modeals;
use zetsoft\system\module\Models;


$request = Az::$app->request;

if ($this->isCLI())
    return true;


$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');

/** @var Models $modelClass */
$modelClass = $this->bootFull($modelClassName);

if (!empty($id))
    $model = $modelClass::findOne($id);
else
    $model = new $modelClass();

$post = $request->post();

if ($request->isPost) {

    if ($request->isAjax && $model->load($post)) {

        Az::$app->response->format = Response::FORMAT_JSON;
        return ActiveForm::validate($model);
    }

    if ($model->load($post)) {

        if ($model->validate()) {
            return true;
        }

        $this->notifyError('Ошибка валидации', $model->errors);
        return false;
    }
}

return false;
