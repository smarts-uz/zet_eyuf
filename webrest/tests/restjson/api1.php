<?php


/** @var ZView $this */

use zetsoft\models\shop\ShopElement;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

$modelClassname = $this->httpGet('model');
$term = $this->httpGet('term');

$elements = ShopElement::find()
    ->asArray()
    ->all();

$count = ShopElement::find()
    ->count();

$page = $this->httpGet('page');
$page = intval($page);
if ($page > 1)
    $page *= 100;

$return = [];
if (!empty($term)) {

    $elements = ShopElement::find()
        ->where(['like', 'name', $term])
        ->asArray()
        ->all();

    $count = ShopElement::find()
        ->where(['like', 'name', $term])
        ->count();

}


$limit = 100;
if ($count < $limit)
    $limit = $count - 1;


for ($i = $page; $i <= $page + $limit; $i++) {

    if ($i >= $count) {
        return [
            'results' => [
                [
                    'id' => 'end',
                    'text' => Az::l('Товары закончились!'),
                    'children' => []
                ]
            ]
        ];
    }

    $return[$i] = [
        'id' => $elements[$i]['id'],
        'text' => $elements[$i]['name'],
    ];

}

$result = [];
foreach ($return as $value) {
    $result[] = $value;
}

$out['results'] = $result;
$out['pagination'] = [
    'more' => true
];

return $out;

