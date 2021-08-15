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


//start|DavlatovRavshan|2020.10.11

$checkeds = $this->httpPost('checkKeys');
$modelClassName = $this->httpPost('modelClassName');

$excludes = ZArrayHelper::merge([
    'id',
], excludedColumn);

$action = $this->httpPost('action');
$userId = $this->userIdentity()->id;

$sessionKey = "Provider-$modelClassName-$action-$userId";

$provider = $this->sessionGet($sessionKey);
$provider = Az::$app->smart->dyna->getProviderFromArray($provider);

$query = $provider->query->where;

/** @var ZActiveRecord $modelName */
$modelName = $this->bootFull($modelClassName);

foreach ($checkeds as $checked) {


    $model = $modelName::findOne($checked);

    foreach ($query as $attribute => $value) {

        if (ZArrayHelper::isIn($attribute, $excludes))
            continue;

        $model->$attribute = $value;
        $model->configs->rules = validatorSafe;
        $model->save();
    }
}
//end|DavlatovRavshan|2020.10.11
