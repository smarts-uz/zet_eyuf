<?php
/**
 * @author: AzimjonToirov
 *
 * data tablega modelni ajax orqali chiqarish uchun
 * WiDatani ishlatmagan holda
 */
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$modelClass = $this->httpGet('modelClass');
$modelClass = $this->bootFull($modelClass);
$model = $modelClass::find()->asArray()->all();

$items['data'] = $model;

return $items;

