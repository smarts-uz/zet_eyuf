<?php
/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopCatalog;
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

$catalog_id = $this->httpGet('catalog_id');

$user_name = $this->httpGet('user_name');

$user_phone = $this->httpGet('user_phone');

$amount = $this->httpGet('amount');

$user_password = '';

$user = User::findOne(
    [
        'name' => $user_name,
        'phone' => $user_phone,
        'apiclient' => 't'
    ]
);
  
$data = [];   
$catalog = ShopCatalog::findOne($catalog_id);

if ($company !== null && $user_company->is_cpa === true) {

    if ($user !== null) {
        $order = Az::$app->market->order->saveOrderFromApi($catalog, $amount, $user, $user_company/*$company*/);
        $data['order_id'] = $order->id;
        return $data;
    }

    $user = new User();
    $user->configs->nameAuto = false;
    $user->columns();
    $user->name = $user_name;
    $user->phone = $user_phone;
    $user_password = generateRandomString();
    $user->password = $user_password;
    $user->apiclient = true;
    $user->save();
    $order = Az::$app->market->order->saveOrderFromApi($catalog, $amount, $user, $company);
    $data['order_id'] = $order->id;
    $data['user_name'] = $user->name;
    $data['password'] = $user_password;
    return $data;

}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



