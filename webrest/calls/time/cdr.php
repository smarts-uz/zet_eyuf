<?php


/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\apisys\dyna;


use zetsoft\models\App\market\db2\Cdr;

use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\control\ZCoreTrait;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;

/** @var ZActiveRecord $modelClass */


$orderId = $this->httpGet('updateValue');
$srcValue = $this->httpGet('srcNumber');
//$dstValue = $this->httpGet('dstNumber');

$maxdate = Cdr::find()->max('calldate');

$model = Cdr::find()
    ->select('calldate')
    ->where("calldate = :date", [":date" => $maxdate])
    ->andWhere([
        'src' => $srcValue,
  //      'dst' => $dstValue,
    ])
    ->one();



echo Az::$app->db2->createCommand()->update('cdr',
    ['userfield' => $orderId,],
    ['calldate' => $model,]
)
    ->execute();
