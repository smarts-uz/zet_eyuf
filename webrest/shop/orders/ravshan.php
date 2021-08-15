<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
$query = $this->httpPost('query');

$andQuery = $this->httpPost('andQuery');
$orQuery = $this->httpPost('orQuery');
$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

$query = ZVarDumper::arrayFilterCheck($query);
$andQuery = ZVarDumper::arrayFilterCheck($andQuery);
$orQuery = ZVarDumper::arrayFilterCheck($orQuery);

$Q = $modelClass::find()
    ->where($query);

if (!empty($andQuery))
    $Q->andWhere($andQuery);

if (!empty($orQuery))
    $Q->orWhere($orQuery);

$orders = ZArrayHelper::map($Q->all(), 'id', 'id');

$numbers = [];
foreach ($orders as $order) {
    $numbers[] = $order;
}

return [
    'numbers' => $numbers
];
