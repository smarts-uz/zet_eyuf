<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

/** @var ZView  $this */
$modelClassName = $this->httpGet('modelClass');
$attribute = $this->httpGet('attribute');
$fkQuery = $this->httpGet('fkQuery');
$fkAndQuery = $this->httpGet('fkAndQuery');
$fkOrQuery = $this->httpGet('fkOrQuery');

$modelClass = $this->bootFull($modelClassName);

/** @var ZActiveRecord $modelClass */
$data = $modelClass::find();

$Q = $modelClass::find();
if (!empty($fkQuery))
    $Q->where($fkQuery);

if (!empty($fkAndQuery))
    $Q->where($fkAndQuery);

if (!empty($fkOrQuery))
    $Q->where($fkOrQuery);

$data = $Q->asArray()->all();

return ZArrayHelper::map($data, 'id', 'name');
