<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\webs\lists;


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\system\Az;
use zetsoft\system\except\ZException;
use zetsoft\system\kernels\ZAction;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

$page = $this->httpGet('page');
$limit = $this->httpGet('limit');
$requireUrl = $this->httpGet('requireUrl');
$isTest = $this->httpGet('test');
$isCommon = $this->httpGet('isCommon');
$isAjax = $this->httpGet('ajax');
$pager = $this->httpGet('pager');
$namespace = $this->httpGet('namespace');
$service = $this->httpGet('service');
$method = $this->httpGet('method');
$args = $this->httpGet('args');
$skip = 0;



//        vd($limit);
//        vdd($page);
$serviceItem = Az::$app->utility->execs->itemHttp();
//vdd($serviceItem);
//$items = Az::$app->market->product->testProd();

#region Fake
$items_test = [];

$item = new SingleProductItem();
$item->id = $this->myId();
$item->name = 'Арахисовая паста с медом 200г';
$item->title = 'Test Desc';
$item->new_price = '14825920';
$item->price_old = '188920';
$item->barcode = '34234234';
$item->exist = ProductItem::exists['not'];
$item->images = [
    'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
];
$item->currency = 'сум';
$item->currencyType = 'after';
$item->measure = 'шт';
$item->rating = 3.5;
$item->discount = -10;
$item->catalogId = 19;
$item->sale = 'sdadsa';
$item->is_multi = false;
$item->in_wish = true;
$item->in_compare = false;

$items_test[] = $item;

$item = new SingleProductItem();
$item->id = $this->myId();
$item->name = 'Арахисовая паста с медом 200г';
$item->title = 'Test Desc';
$item->new_price = '14825920';
$item->price_old = '188920';
$item->barcode = '34234234';
$item->exist = ProductItem::exists['not'];
$item->images = [
    'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
];
$item->currency = 'сум';
$item->currencyType = 'after';
$item->measure = 'шт';
$item->rating = 3.5;
$item->discount = -10;
$item->catalogId = 19;
$item->sale = 'sdadsa';
$item->is_multi = false;
$item->in_wish = true;
$item->in_compare = false;

$items_test[] = $item;

$item = new SingleProductItem();
$item->id = $this->myId();
$item->name = 'Арахисовая паста с медом 200г';
$item->title = 'Test Desc';
$item->new_price = '14825920';
$item->price_old = '188920';
$item->barcode = '34234234';
$item->exist = ProductItem::exists['not'];
$item->images = [
    'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
];
$item->currency = 'сум';
$item->currencyType = 'after';
$item->measure = 'шт';
$item->rating = 3.5;
$item->discount = -10;
$item->catalogId = 19;
$item->sale = 'sdadsa';
$item->is_multi = false;
$item->in_wish = true;
$item->in_compare = false;

$items_test[] = $item;

#endregion


$items = Az::$app->utility->execs->service($serviceItem);

$exploded = explode('|', $args);

foreach ($exploded as $key => $item1) {
    $item1 !== 'null' ? $exploded[$key] = (int)$item1 : $exploded[$key] = null;
}
$category_id = $exploded[0];
$market_id = $exploded[1];

$args1 = [$category_id, $market_id, (int)$page, (int)$limit, 0, 0];

//$items = Az::$app->$namespace->$service->$method(...$args1);


//vdd($category_id, $market_id, (int)$page, (int)$limit) ;
$items = Az::$app->market->product->allElements($category_id, $market_id, (int)$page, (int)$limit);
$items = Az::$app->market->product->allElements(978, null, 1, 12);

if ($isTest)
    $items = $items_test;

$html = null;

foreach ($items as $item) {

// vd($item);

    //  vdd($item);
    $html .= $this->require( $requireUrl, [
        'item' => $item,
        'isCommon' => $isCommon
    ], 'key11' .$item->id);


}


if (!$isAjax)
    return $this->requireHtmPart($html);

return $this->requireHtmAjax($html);

