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
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;


ZArrayHelper::setValue(Az::$app->params, 'is_clone', true);

$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');
   
/** @var Models $modelClass */
$modelClass = $this->bootFull($modelClassName);

/** @var ZView $this */
$model = $this->modelClone($modelClass, $id);
       
if ($this->modelSave($model)){
    $this->notifySuccess('Данные успешно склонированы!', $this->modelInfo($model));
}

else
    $this->notifyError('Ошибка при клонировании данных!', $this->modelInfo($model));

/** @var ZView $this**/
$url = $this->urlGoIndex() . 'index.aspx';

return $this->urlRedirect([$url], false);

