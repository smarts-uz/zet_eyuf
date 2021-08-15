<?php

namespace zetsoft\apisys\select;

use yii\db\ActiveRecord;
use yii\web\Response;
use zetsoft\models\user\User;
use zetsoft\system\Az;


$id = $this->httpGet('id');
$status = $this->httpGet('status');

$user = User::findOne($id);
if ($user !== null) {
    Az::$app->market->operator->callsStatusTime($user);
    $user->status = $status;
    $user->configs->rules = validatorSafe;
    $user->save();
}



return $user->status;



