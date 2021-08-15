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


$get = $this->httpGet('DynaSort');

$dynaId = ZArrayHelper::getValue($get, 'dynaId');
$name = ZArrayHelper::getValue($get, 'name');
$modelName = ZArrayHelper::getValue($get, 'model');
$url = ZArrayHelper::getValue($get, 'url');

$params = $this->httpPost('sort');

$coreDynaFilter = DynaFilter::findOne([
    'dynaId' => $dynaId,
    'name' => $name,
    'type' => 'sort'
]);

if (!$coreDynaFilter) {
    $coreDynaFilter = new DynaFilter();
    $coreDynaFilter->name = $name;
    $coreDynaFilter->type = 'sort';
    $coreDynaFilter->data = $params;
    $coreDynaFilter->dynaId = $dynaId;
    $coreDynaFilter->save();
}

if (!empty($coreDynaFilter->data))
    $fixParams = $coreDynaFilter->data;

if (!empty($fixParams))
    $url .= '?sort=' . $fixParams;

return $this->urlRedirect($url);

