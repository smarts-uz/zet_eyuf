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
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


/** @var ZActiveRecord $modelClass */
/** @var Models $model */

Az::$app->response->format = \yii\web\Response::FORMAT_JSON;

$modelClassName = $this->httpGet('modelName');
$formName = $this->httpGet('formName');
//$depends = $this->httpGet('depends');
$modelId = $this->httpGet('editableKey');

$params = $this->httpPost($modelClassName);
if (empty($params))
    $params = $this->httpPost($formName);

$isEdit = ZVarDumper::ajaxValue($this->httpGet('hasEdit'));
if ($isEdit) {

    $attribute = $this->httpGet('editableAttribute');
    $value = ZArrayHelper::getValue($params, $attribute);

    if ($this->httpGet('session')) {

        $this->sessionSet($attribute, $value);

        if (is_array($value))
            $value = ZVarDumper::beauty($value);

        return ['output' => $value];

    }

    if (empty($value) && $value != '0') {
        $value = null;
    }

    $modelClass = $this->bootFull($modelClassName);
    $model = $modelClass::findOne($modelId);

    $model->$attribute = $value;
    $model->configs->rules = [
        [
            validatorSafe,
        ]
    ];

    $depends = $model->columnsList();

    if ($model->save()) {

        Az::$app->forms->modelz->upload($model);

        Az::$app->forms->wiData->clean();
        Az::$app->forms->wiData->model = $model;
        Az::$app->forms->wiData->attribute = $attribute;
        $value = Az::$app->forms->wiData->value();

        $dependVals = [];
        if (!empty($depends)) {
            foreach ($depends as $depend) {

                if (!ZArrayHelper::isIn($depend, $model->columnsList()))
                    continue;

                Az::$app->forms->wiData->clean();
                Az::$app->forms->wiData->model = $model;
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
    // vdd($this->modelSave($model));

}
