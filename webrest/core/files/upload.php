<?php

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use Ramsey\Uuid\Exception\UnsupportedOperationException;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;

/**
 *
 * Function  run
 * @param Models $model
 * @param $attribute
 * @return  bool
 * @throws \yii\base\Exception
 */

$modelClassName = $this->httpGet('modelClassName');
$attribute = $this->httpGet('attribute'); // 0
$id = $this->httpGet('id'); // 0
$upload = Az::$app->inputs->fileinput->upload($modelClassName, $attribute);

return $upload;


        
