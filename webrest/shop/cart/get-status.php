<?php
/** @var ZView $this */


use yii\bootstrap\Collapse;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


$action = new WebItem();
$action->type = WebItem::type['ajax'];
$action->csrf = false;
$action->debug = false;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$company = Az::$app->cores->auth->getUserByParam();
$user_company = $company->getUserCompanyOne();
//vdd($company);
$data = [];

if ($company !== null && $user_company->is_cpa === true) {

    $order_id = $this->httpGet('order_id');
    $order = ShopOrder::findOne([
        'id'=>$order_id,
        'user_company_ids'=>$user_company->id
    ]);
    if ($order !== null){
        $order = collect($order);
        $order = $order->only(['status_callcenter', 'status_logistics', 'history_callcenter', 'history_logistics']);
        return  $order->all();
    }else{
        return ['message'=>'Order not found'];
    }
}else{
    return  [
        'error'=>'UNAUTHORIZED',
        'status'=>'401'
    ];
}



