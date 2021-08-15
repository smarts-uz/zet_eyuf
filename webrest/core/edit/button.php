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
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


/** @var ZActiveRecord $modelClass */
/** @var Models $model */

$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

if (!empty($ids))
    foreach ($ids as $id) {
        $model = $this->modelClone($modelClass, $id);
        $this->modelSave($model);
    }

$keys = implode(',', $ids);
$this->notifySuccess('Данные успешно клонированы!', $keys);


$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');

/** @var Models $modelClass */
$modelClass = $this->bootFull($modelClassName);

$model = $this->modelClone($modelClass, $id);


