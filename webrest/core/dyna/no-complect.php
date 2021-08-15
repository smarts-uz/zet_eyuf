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
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZModel;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;


$ids = [];
if (!empty($this->httpPost('checkKeys')))
    $ids = $this->httpPost('checkKeys');

$status = ShopOrder::status_logistics['notset'];
if ($this->httpGet('bool'))
    $status = ShopOrder::status_logistics['on_complecting'];

foreach ($ids as $id) {
    $model = ShopOrder::findOne($id);
    $model->status_logistics = $status;
    $model->configs->rules = validatorSafe;
    $model->save();

}

