<?php
/** @var ZView $this */

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


   vdd("hello");
$company = Az::$app->cores->auth->getUserByParam();
$user_company = $company->getUserCompanyOne();
//vdd($company);
$catalog_id = $this->httpGet('catalog_id');

$user_name= $this->httpGet('user_name');

$user_phone = $this->httpGet('user_phone');

$amount = $this->httpGet('amount');

$user_password = '';
$user = User::findOne(
    [
        'name'=>$user_name,
        'phone'=>$user_phone,
        'apiclient'=>'t'
    ]
);



