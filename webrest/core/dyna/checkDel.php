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

namespace zetsoft\apisys\dyna;


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;

/** @var ZView $this */
/** @var Models $model */

//start|DavlatovRavshan|2020.10.10
$modelClassName = $this->httpGet('modelClassName');
$url = $this->httpGet('url');
$value = $this->httpGet('modelId');
$userId = $this->userIdentity()->id;

$key = "Checkdyna-$modelClassName-$url-$userId";

$array = $this->sessionGet($key);
if (empty($array))
    $array = [];

$children = [];
if ($modelClassName === 'ShopOrder') {
    $shop_order = ShopOrder::findOne($value);
    if (!empty($shop_order->children)) {
        $children = ShopOrder::findAll($shop_order->children);
    }
}

foreach ($children as $child) {
    if (ZArrayHelper::isIn((int)$child->id, $array))
        ZArrayHelper::removeValue($array, (int)$child->id);
}

ZArrayHelper::removeValue($array, (int)$value);
$this->sessionSet($key, $array);

return $array;
//end | DavlatovRavshan | 10.10.2020
