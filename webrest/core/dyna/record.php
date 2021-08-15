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


use zetsoft\models\auto\ChatNotify;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\actives\ZActiveRecord;
use yii\base\Action;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use zetsoft\system\module\Models;


$modelClassName = $this->httpGet('modelClassName');
$newValues = $this->httpGet('newRecordValues');
$modelClass = $this->bootFull($modelClassName);

/** @var Models $model */
$model = new $modelClass();
$model->configs->rules = validatorSafe;

$values = ZArrayHelper::merge($newValues, $model->configs->newRecordValues);

$model->configs->nameValue = 'Новая запись {id}';

if (!empty($values))
    foreach ($values as $attr => $value)
        $model->$attr = $value;
        
//$model->columns();

$model->save();

