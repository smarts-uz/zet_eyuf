<?php



/** @var ZView $this */

use zetsoft\models\shop\ShopElement;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\kernels\ZView;

$merchant_id = $this->httpGet('MERCHANT_TRANS_ID') ;
$sign_time = $this->httpGet('SIGN_TIME');
$sign_string = $this->httpGet('SIGN_STRING');

$order = ShopOrder::findOne($merchant_id);
$sign_string_generated = Az::$app->payer->paysys->generateSignString($merchant_id, $sign_time);

if ( $merchant_id == $order->id && $sign_string == $sign_string_generated ){
    $response = [
        "ERROR" => 0,
        "ERROR_NOTE" => "Success",
        "PARAMETERS" => [
            "name" => "bahodir",
            "contact_phone" => "qodirov"
        ]
    ];
    return $response;
}
else{
    $response = [
        "ERROR" => -1,
        "ERROR_NOTE" => "Not found",
        "PARAMETERS" => [
            "name" => "not found",
            "last_name" => "not found"
        ]
    ];
    return $response;
}


//return ['111'=>'1111'];

//$modelClassname = $this->httpGet('model');
//$term = $this->httpGet('term');
//
//$elements = ShopElement::find()
//    ->asArray()
//    ->all();
//
//$count = ShopElement::find()
//    ->count();
//
//$page = $this->httpGet('page');
//$page = intval($page);
//if ($page > 1)
//    $page *= 100;
//
//$return = [];
//if (!empty($term)) {
//
//    $elements = ShopElement::find()
//        ->where(['like', 'name', $term])
//        ->asArray()
//        ->all();
//
//    $count = ShopElement::find()
//        ->where(['like', 'name', $term])
//        ->count();
//
//}
//
//
//$limit = 100;
//if ($count < $limit)
//    $limit = $count - 1;
//
//
//for ($i = $page; $i <= $page + $limit; $i++) {
//
//    if ($i >= $count) {
//        return [
//            'results' => [
//                [
//                    'id' => 'end',
//                    'text' => Az::l('Товары закончились!'),
//                    'children' => []
//                ]
//            ]
//        ];
//    }
//
//    $return[$i] = [
//        'id' => $elements[$i]['id'],
//        'text' => $elements[$i]['name'],
//    ];
//
//}
//
//$result = [];
//foreach ($return as $value) {
//    $result[] = $value;
//}
//
//$out['results'] = $result;
//$out['pagination'] = [
//    'more' => true
//];
//
//return $out;

