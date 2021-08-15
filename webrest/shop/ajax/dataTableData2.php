<?php

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$modelClass = $this->httpGet('modelClass');
$modelClass = $this->bootFull($modelClass);
$model = $modelClass::find()->asArray()->all();

$items['data'] = $model;

return $items;
