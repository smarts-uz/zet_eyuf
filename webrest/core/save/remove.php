<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\rest;

use Yii;
use yii\base\Model;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use function zetsoft\apisys\edit\returnn;

/**
 * CreateAction implements the API endpoint for creating a new model from the given data.
 *
 * For more details and usage information on CreateAction, see the [guide article on rest controllers](guide:rest-controllers).
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

/** @var ZView $this */

$index = $this->httpPost('index');
$tranz = $this->httpPost('tranz');
$parentAttr = $this->httpPost('parentAttr');
$parentId = $this->httpPost('parentId');
$parentClass = $this->httpPost('parentClass');

if (!empty($tranz))
    $this->paramSet(paramTransact, true);

return Az::$app->forms->ajaxData->multiRemove($index,
    $parentAttr, $parentId, $parentClass);

