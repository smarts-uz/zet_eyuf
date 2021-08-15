<?php



/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;


use zetsoft\models\shop\ShopCatalog;

use zetsoft\system\Az;



$action = new WebItem();

$action->type = WebItem::type['ajax'];
$action->csrf = false;
$action->debug = false;


$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$user  = Az::$app->cores->auth->getUserByParam();

if($user !== null){
    
    $catalogs = ShopCatalog::find()->where(['user_company_id' => $user->user_company_id])->all();
    $catalogs_elements = [];

    foreach ($catalogs as $catalog){
        $catalogs_elements [] = Az::$app->market->product->productItemByCatalogId($catalog->id);
    }
    $data = collect($catalogs_elements);
    $data = $data->map(function ($item, $key){
        $item = collect($item);
        $item->forget('price_old');
        $item->forget('text');
        return $item;
    });

    return $data->all();
}

return false;




