<?php

use kcfinder\type_img;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
$this->type = WebItem::type['ajax'];

$values = $this->httpPost('values');
$data = $this->httpPost('data');

foreach ($values as $value)  {
    ZArrayHelper::removeValue($data, $value);
}

echo json_encode($data);
