<?php
/** @var ZView $this */


use zetsoft\dbitem\core\RestItem;
use zetsoft\service\cores\Rbac;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;


$item = new RestItem();

$item->authType = Rbac::authType['none'];
$item->cache = false;
$item->cacheHttp = false;

$this->paramSet(paramAction, $item);

$id = $this->httpGet('id');
if ($this->emptyVar($id))
    return [
        'ID is Required'
    ];
$data = Az::$app->market->catalog->options($id);

return $data;




