<?php

use zetsoft\models\shop\ShopOrderItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */

$amount = $this->httpGet('amount');

$post = $this->httpPost();
$get = $this->httpGet();

$modelClassName = ZArrayHelper::getValue($get, 'modelName');
$formName = ZArrayHelper::getValue($get, 'formName');
$modelId = ZArrayHelper::getValue($get, 'editableKey');

$params = ZArrayHelper::getValue($post, $modelClassName);
if (empty($params))
    $params = ZArrayHelper::getValue($post, $formName);

$isEdit = ZVarDumper::ajaxValue($this->httpGet('hasEdit'));
$attribute = ZArrayHelper::getValue($get, 'editableAttribute');
$value = ZArrayHelper::getValue($params, $attribute);

if ($isEdit) {

    $modelClass = $this->bootFull($modelClassName);
    $model = $modelClass::findOne($modelId);

    /** @var ShopOrderItem $model */

    /*
     * 'amount',
     'amount_return',
     'price',
     'price_all_return',
     'price_all',*/

    $amount = $model->amount;

    $model->amount_return = (int)$amount - (int)$value;
    $model->price_all_return = $model->amount_return * $model->price;
    $model->price_all -= $model->price_all_return;

    $model->amount = (int)$value;

          //vdd($model->attributes);
    if ($model->save()) {

        return [
            'output' => $value,
            'amount_return' => $model->amount_return,
            'price_all_return' => $model->price_all_return,
            'price_all' => $model->price_all,
        ];

    }


}
