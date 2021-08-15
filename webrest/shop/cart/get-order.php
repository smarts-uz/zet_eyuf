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
        //added by ob
        'user_company_ids'=>$user_company->id
    ]);
    if ($order !== null){                                                                                                                              
        $order = collect($order);
        $order->forget(
            [
                'id',
                'name',
                'distance',
                'user_company_id',
                'place_adress_id',
                'warehouse',
                'shop_channel_id',
                'shop_coupon_id',
                'total_price',
                'deliver_price',
                'shop_courier_id',
                'tasks',
                'packaging',
                'labelled',
                'fragile'
            ]
        );
        return  $order->all();
    }

    //added by ob
    return Azl.('Заказы отсуствуют');
}
else{
    return  [
        'error'=>'UNAUTHORIZED',
        'status'=>'401'
    ];
}



