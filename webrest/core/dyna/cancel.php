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


use zetsoft\system\Az;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;

$modelName = $this->httpGet('modelName');
$modelId = $this->httpGet('modelId');
$sessionKey = $this->httpGet('sessionKey');
$isNew = ZVarDumper::grapesValue($this->httpGet('isNew'));

/** @var Models $modelClass */
/** @var ZView $this */
$attributes = $this->sessionGet($sessionKey);
$modelClass = $this->bootFull($modelName);

if (!empty($modelId)) {
    $model = $modelClass::findOne($modelId);
    
    if ($model === null)
        return [
            Az::l('Модель пустой')
        ];

    if ($isNew) {
        $model->deleteParent();
    } else {
        $model->setAttributes($attributes);
        $model->configs->rules = validatorSafe;
        
        $model->save();
    }
}

