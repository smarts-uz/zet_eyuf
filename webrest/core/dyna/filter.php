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


use zetsoft\models\dyna\DynaFilter;
use zetsoft\models\auto\ChatNotify;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\actives\ZActiveRecord;
use yii\base\Action;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use zetsoft\system\module\Models;

$post = $this->httpGet('DynaFilterForm');
$type = ZArrayHelper::getValue($post, 'type');
$dynaId = ZArrayHelper::getValue($post, 'dynaId');
$name = ZArrayHelper::getValue($post, 'name');
$modelName = ZArrayHelper::getValue($post, 'model');
$url = ZArrayHelper::getValue($post, 'url');

$params = $this->httpPost($modelName);


$coreDynaFilter = DynaFilter::findOne([
    'dynaId' => $dynaId,
    'name' => $name,
    'type' => 'filter'
]);

$fixParams = [];
if (!empty($params))
    foreach ($params as $key => $param) {
        if (!empty($param))
            $fixParams[$key] = $param;
    }

if (!$coreDynaFilter) {
    $coreDynaFilter = new DynaFilter();
    $coreDynaFilter->name = $name;
    $coreDynaFilter->type = $type;
    $coreDynaFilter->data = $fixParams;
    $coreDynaFilter->dynaId = $dynaId;
    $coreDynaFilter->save();
}

if (!empty($coreDynaFilter->data))
    $fixParams = $coreDynaFilter->data;


$url .= '?';


foreach ($fixParams as $attribute => $param) {
    $url .= $modelName . '[' . $attribute . "]=$param&";
}

return $this->urlRedirect($url);

