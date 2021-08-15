<?php


namespace zetsoft\apisys\dyna;


use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$checkKeys = $this->httpPost('checkKeys');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

if (!empty($checkKeys))
    foreach ($checkKeys as $checkKey) {
        $this->modelClone($modelClass, $checkKey);
    }
    
return $this->urlRedirect($this->urlGetBack(), true);
