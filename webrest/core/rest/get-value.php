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

namespace zetsoft\apisys\rest;


use Yii;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\control\ZCoreTrait;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


/** @var ZActiveRecord $modelClass */
/** @var Models $model */

$modelName = $this->httpGet('modelName');
$formName = $this->httpGet('formName');
$modelId = $this->httpGet('editableKey');
$attribute = $this->httpGet('editableAttribute');

$params = $this->bootFull($modelName);

if (empty($params))
    $params = $this->bootFull($this->httpPost($formName));

$isEdit = ZVarDumper::ajaxValue($this->httpGet('hasEdit'));
             
if ($isEdit) {
           
    $value = ZArrayHelper::getValue($params, $attribute);

    $modelClass = $this->bootFull($modelName);
    $model = $modelClass::findOne($modelId);

    $modelAttrs = $modelClass::find()
        ->where([
            'id' => $modelId
        ])
        ->asArray()
        ->one();

    $model->$attribute = $value;
    $model->configs->rules =  validatorSafe;

    if (empty($depends)){
        $depends = $model->columnsList();
    }

    Az::$app->forms->modelz->upload($model);

    Az::$app->forms->wiData->clean();
    Az::$app->forms->wiData->model = $model;
    Az::$app->forms->wiData->modelAttrs = $modelAttrs;
    Az::$app->forms->wiData->attribute = $attribute;

    $value = Az::$app->forms->wiData->value();

    $dependVals = [];
    if (!empty($depends)) {
        foreach ($depends as $depend) {

            if (!ZArrayHelper::isIn($depend, $model->columnsList()))
                continue;

            Az::$app->forms->wiData->clean();
            Az::$app->forms->wiData->model = $model;
            Az::$app->forms->wiData->modelAttrs = $modelAttrs;
            Az::$app->forms->wiData->attribute = $depend;
            $val = Az::$app->forms->wiData->value();

            $dependVals[$depend] = $val;
        }
    }

    return [
        'output' => $value,
        'depends' => $dependVals
    ];
}
