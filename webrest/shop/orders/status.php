<?php

use yii\web\Response;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\market\ZFooterAllWidgetOrg;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;


/** @var ZView $this */


$checkKeys = $this->httpPost('checkKeys');
$data = $this->httpGet('dialog_value');
$url = $this->httpPost('url');

$statuses = [
    'change' => 1,
    'free' => 2,
    'error' => 8,
    'cancel' => 9,
];

$prefix = $statuses[$data];

$error = null;
foreach ($checkKeys as $checkKey) {

    $model = ShopOrder::findOne($checkKey);

    if ($model->status_universal === ShopOrder::status_universal['change']) {
        $errors = Az::l("Данный заказ №$model->id уже имеет универсальный статус 'Обмен'");
        continue;
    }

    if ($model->status_logistics !== ShopOrder::status_logistics['completed'] && $prefix === 1) {
        $error = Az::l("Чтобы скопировать заказ для обмена, статус заказа должен быть 'Выполнена оплата'");
        continue;
    }

    /** @var ShopOrder $newModel */
    $newModel = $this->modelClone(ShopOrder::class, $checkKey);

    $newModel->number = $prefix . '-' . $model->number;
    $newModel->status_universal = $data;
    $newModel->children = null;
    $newModel->status_logistics = ShopOrder::status_logistics['complect_wait'];
    $newModel->configs->rules = validatorSafe;
    $newModel->save();

    Az::$app->market->wares->cloneOrderItems($model->id, $newModel->id);

}

if (!empty($error))
    return [
        'error' => $error
    ];
else {
    $this->urlRedirect([
        $url . '/process',
        'shop_order_id' => $newModel->id
    ]);
}
