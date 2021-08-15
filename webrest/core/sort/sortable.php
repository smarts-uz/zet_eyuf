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

namespace zetsoft\apisys\sort;


use zetsoft\apisys\apps\rest;
use zetsoft\system\Az;

use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\module\Models;
use zetsoft\system\kernels\ZAction;


/**
 * @return string
 */


$page = (int)$this->httpPost('page');
$pageSize = (int)$this->httpPost('pageSize');
$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

Az::$app->response->format = Az::$app->response::FORMAT_JSON;
$positions = $this->httpPost('positions');

foreach ($positions as $position) {

    $positionInPage = ZArrayHelper::getValue($position, 1);

    $pageIndex = $pageSize * ($page - 1);

    $result = $pageIndex + $positionInPage;

    $modelId = ZArrayHelper::getValue($position, 0);
    $model = $modelClass::findOne($modelId);
    $model->sort = $result;
    $model->configs->rules = [
        [
            validatorSafe
        ]
    ];
    $model->save();

}

return $positions;
