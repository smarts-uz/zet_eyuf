<?php

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
$companyId = $this->httpGet('companyId');

$res =  Az::$app->market->banner->getBannerPhotos($companyId);

return $res;
