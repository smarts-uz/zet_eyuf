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


use zetsoft\system\actives\ZModel;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;


$post = $this->httpPost();
$ids = $this->httpPost('checkKeys');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

$values = ZArrayHelper::getValue($post, 'value');

if (!empty($ids)) {
    foreach ($ids as $id) {
        /** @var ZModel $model */
        $model = $modelClass::findOne($id);


        foreach ($values as $attr => $value) {

            if (ZArrayHelper::keyExists($attr, $model->columns))
                $model->$attr = $value;

        }
        $model->configs->rules = [
            [validatorSafe]
        ];
        $this->paramSet(paramNoEvent, true);
        if (!$model->save())
            return $model->errors();
    }


    /*return $this->urlRedirect([
        '/complect/main/noComplect'
    ]);*/

}

return null;


// $this->notifySuccess('Данные успешно клонированы!');

// return $this->urlRedirect($this->urlGetBack());
