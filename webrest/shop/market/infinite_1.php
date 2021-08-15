<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


/** @var ZView $this */

use Illuminate\Support\Collection;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopProduct;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\incores\ZDynaCheckboxWidget;

$action = new WebItem();

$action->title = Azl . 'Веб-действия';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$page = $this->httpPost('page');
$limit = $this->httpPost('limit');
$requireUrl = $this->httpPost('requireUrl');
$itemAttribute = $this->httpPost('itemAttribute');

$model = Az::$app->market->product->allProducts();
/** @var Collection $model */
$model = collect($model);
if ($page !== 0){
    $skip = $page * $limit;
}

$model = $model->skip(0)->take(11);
//$html = null;
//foreach ($model as $item){
//    $html .= $this->require( $requireUrl,[
//        'item' => $item
//    ]);
//}
// echo $html;
return count($model);


