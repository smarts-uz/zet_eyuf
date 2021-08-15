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


use zetsoft\models\dyna\DynaFilter;
use zetsoft\models\auto\ChatNotify;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\actives\ZActiveRecord;
use yii\base\Action;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use zetsoft\system\module\Models;

$modelName = $this->httpGet('modelName');
$modelId = $this->httpGet('modelId');
$attribute = $this->httpGet('attribute');
$radioKey = $this->httpPost('radioKey');

$modelClass = $this->bootFull($modelName);

/** @var Models $model */

$model = new $modelClass();
if (!empty($modelId))
    $model = $modelClass::findOne($modelId);

$model->$attribute = $radioKey;
$model->configs->rules = [
    [
        validatorSafe
    ]
];

if ($model->save()) {
    return [
        'value' => $model->$attribute
    ];
}

/*
$returnUrl = $this->httpGet('fullWebId') . '&id=' . $model->id;

$this->urlRedirect($returnUrl);*/
