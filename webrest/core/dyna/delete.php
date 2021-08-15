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


use yii\web\View;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;


$post = $this->httpPost();

$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

/** @var Models $model */
$model = $modelClass::findOne($id);

if ($model === null)
    return [
        Az::l('Данные пустые')
    ];

$model->configs->showDeleted = $this->httpGet('isTrash');
$model->columns();

if ($model->configs->addDel) {
    $model->deleted_text = ZArrayHelper::getValue($post, 'comment');
    $model->configs->rules = [[validatorSafe]];
    $model->columns();
    $model->save();
}
$model->delete();


// todo remove files from system if model has file column | by AD

if ($model->delete()) {
    $this->notifySuccess('Данные успешно удалены!', $this->modelInfo($model));
} else
    $this->notifyError('Ошибка прим удалении', $model->errors);


//$url = $this->prelastUrl() . 'index.aspx';
//
//return $this->urlRedirect([$url]);
