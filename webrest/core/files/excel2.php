<?php

/**
 * @param Models $model
 * @param $attribute
 * @return  bool
 * @throws \yii\base\Exception
 * @author: DavlatovRavshan
 *
 * Function  run
 * @author Umid Muminov
 */

use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

/** @var Models $model */

/** @var ZView $this */
$modelClassName = $this->httpPost('modelClassName');
$modelClass = $this->bootFull($modelClassName);
$checkKeys = $this->httpPost('checkKeys');
$query = '';
if (!empty($query)) {
    $query = $this->httpGet('query');
}

Az::$app->office->excel->modelClass = $modelClass;
Az::$app->office->excel->query = $query;
Az::$app->office->excel->checkkeys = $checkKeys;
Az::$app->office->excel->run();

