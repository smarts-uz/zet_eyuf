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
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


/** @var ZActiveRecord $modelClass */
/** @var Models $model */

Az::$app->response->format = \yii\web\Response::FORMAT_JSON;

$post = $this->httpPost();
$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');
//vdd($post);
//  if ($this->httpPost('hasEditable')) {

$params = ZArrayHelper::getValue($post, $modelClassName);

$modelClass = $this->bootFull($modelClassName);
$model = $modelClass::findOne($id);
$attribute = array_keys($params)[0];
$value = $params[$attribute];

$model->$attribute = $value;

if ($model->save()) {

    Az::$app->forms->widata->clean();
    Az::$app->forms->widata->model = $model;
    Az::$app->forms->widata->attribute = $attribute;
    $value = Az::$app->forms->wiData->value($id);

    Az::$app->forms->modelz->upload($model);

    $this->urlRedirect($this->urlGetBack());
    return true;
}
