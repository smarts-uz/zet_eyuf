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


use zetsoft\system\helpers\ZArrayHelper;

$post = $this->httpPost();

$ids = ZArrayHelper::getValue($post, 'checkKeys');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

$value = $this->httpPost('value');
if (strrpos($value, '=') > 0)
    $value = substr($value, strrpos($value, "=") + 1);

$attr = $post['attribute'];

if (empty($value))
    $value = null;

if (!empty($ids))

    foreach ($ids as $id) {

        $model = $modelClass::find()->where(['id' => $id])->one();
        $this->paramSet(paramNoEvent, true);
        $model->configs->rules = [
            'name' => [
                [validatorSafe]
            ]
        ];
        $model->$attr = $value;
        /* $this->modelSave($model);*/
        if (!$model->save())
            vdd($model->error());
    }


$this->notifySuccess('Данные успешно клонированы!');

// return $this->urlRedirect($this->urlGetBack());

