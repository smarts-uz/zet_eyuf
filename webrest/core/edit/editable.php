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

$post = $this->httpPost();
$id = $this->httpGet('id');
$modelClassName = $this->httpGet('modelClassName');

if ($this->httpPost('hasEditable')) {

    $params = ZArrayHelper::getValue($post, $modelClassName);
    $attribute = $this->httpGet('attribute');

    $value = $params[$attribute];

    if ($this->httpGet('session')) {

        $this->sessionSet($attribute, $value);

        if (is_array($value))
            $value = ZVarDumper::beauty($value);

        return returnn($value);

    }

    $modelClass = $this->bootFull($modelClassName);
    $model = $modelClass::findOne($id);
    $model->$attribute = $value;

    $model->configs->rules = [
        [validatorSafe]
    ];
     $model->columns();
    if ($model->save()) {

        Az::$app->forms->wiData->clean();
        Az::$app->forms->wiData->model = $model;
        Az::$app->forms->wiData->attribute = $attribute;
        $value = Az::$app->forms->wiData->value($id);

        Az::$app->forms->modelz->upload($model);
        return returnn($value);
    }
}

function returnn($value)
{

    //if ($this->httpGet('refresh'))

    return ['output' => $value];
}


