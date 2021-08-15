<?php

/**
 *
 * @author OtabekNosirov
 * @author JaloliddinovSalohiddin
 * @author AkromovAzizjon
 *
 * Word Pdf generatsiyasi uchun @api
 *
 * /shop/complect/on-complect/index.aspx#
 * /shop/admin/ware-send/index.aspx#
 * /shop/admin/ware-return/index.aspx#
 */

use zetsoft\dbitem\core\WebItem;
use zetsoft\former\chart\ChartForm;
use zetsoft\former\order\OperatorForm;
use zetsoft\former\order\OrderForm;
use zetsoft\former\order\PayBackCCForm;
use zetsoft\former\order\PortionFormForm;
use zetsoft\former\reports\ReportsCourierForm;
use zetsoft\former\reports\ReportsSoldProductsForm;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */

$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');

$getId = $this->httpGet('modelId');

if (!empty($getId)) {
    $ids = [$getId];
}

$type = $this->httpGet('type');

$attr = $this->httpGet('attribute');
$val = $this->httpGet('value');

$modelClassName = $this->httpGet('modelClassName');
$requiredClassName = $this->httpGet('requiredClassName');
$modelClass = $this->bootFull($modelClassName);
$requiredClass = $this->bootFull($requiredClassName);

$dirtyIds = [];
$cleanIds = [];

foreach ($ids as $id) {

    $order = ShopOrder::findOne($id);

    if (!empty($order->parent))
        $dirtyIds[] = $id;
    else
        $cleanIds[] = $id;
}

if (empty($cleanIds)) {

    return [
        'error' => Az::l('Выберите корректный заказ. Данный(е) заказ(ы) является(ются) дочерним(и)')
    ];
}

$path = Az::$app->office->wordpdf->universalDocument($cleanIds, $type);

$domain = $this->urlGetBase();

$errors = null;
if (!empty($dirtyIds)) {
    $strings = implode(',', $dirtyIds);
    $errors = Az::l("Заказ(ы) $strings является дочерним(и)");
}

//start: MurodovMirbosit 01.10.2020
/*$order_items = ShopOrderItem::find()->where(['shop_order_id' => $cleanIds])->all();

foreach ($order_items as $order_item){
    
    if (empty($order_item))
        return [];

    $check_return = null;

    if ($order_item->check_return){
        $check_return = Az::l("Товар №$order_item->id добавлен в возврат товаров");
    }

    return [
        'check_return' => $check_return,
    ];

}*/
//end

return [
    'path' => $domain . $path,
    'error' => $errors,

];
