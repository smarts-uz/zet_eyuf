<?php

/**
 *
 *
 * Author:  Nurmukhammadov Shakhrizod
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\form\ActiveForm;
use yii\web\Response;
use zetsoft\system\Az;


$request = Az::$app->request;
$model = new \zetsoft\models\user\User();
$post = $this->httpPost();
if ($request->isAjax && !$request->isPjax && $model->load($post)) {
    Az::$app->response->format = Response::FORMAT_JSON;
    return ActiveForm::validate($model);
}
//return ['user-title' => ['error']];
