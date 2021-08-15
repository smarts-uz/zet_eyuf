<?php


use League\CLImate\Decorator\Component\Format;
use yii\web\Response;
use zetsoft\dbitem\core\WebItem;
use zetsoft\former\chart\ChartForm;
use zetsoft\former\order\OperatorForm;
use zetsoft\former\order\OrderForm;
use zetsoft\former\order\PayBackCCForm;
use zetsoft\former\order\PortionFormForm;
use zetsoft\former\reports\ReportsCourierForm;
use zetsoft\former\reports\ReportsSoldProductsForm;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\themes\ZCardWidget;

/**
 * @author Daho
 */
/** @var ZView $this */

Az::$app->response->format = Response::FORMAT_JSON;

$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');
$type = $this->httpGet('type');

$attr = $this->httpGet('attribute');
$val = $this->httpGet('value');

$modelClassName = $this->httpGet('modelClassName');
$requiredClassName = $this->httpGet('requiredClassName');
$modelClass = $this->bootFull($modelClassName);
$requiredClass = $requiredClassName ? $this->bootFull($requiredClassName) : null;

$dirtyIds = [];
$cleanIds = [];

//start|DavlatovRavshan|2020.10.10
foreach ($ids as $id) {

    $order = ShopOrder::findOne($id);

    if (!empty($order->parent))
        $dirtyIds[] = $id;
    else
        $cleanIds[] = $id;

}

if (empty($cleanIds))
    return [
        'error' => Az::l('Выберите корректный заказ. Эти заказы являются дочерними')
    ];

$orders = ShopOrder::find()
    ->where([
        'id' => $cleanIds
    ])
    ->all();

/** @var ShopOrder $order */

$path = Az::$app->office->wordpdf->universalDocument($cleanIds, 'multiContract');

foreach ($orders as $order) {
    $order->status_logistics = ShopOrder::status_logistics['on_complecting'];
    $order->configs->rules = validatorSafe;
    $order->save();
}

$errors = null;
if (!empty($dirtyIds)) {
    $strings = implode(',', $dirtyIds);
    $errors = Az::l("Заказ(ы) $strings является дочерним(и)");
}

$domain = $this->urlGetBase();

return [
    'path' => $domain . $path,
    'error' => $errors
];
//end | DavlatovRavshan | 10.10.2020


