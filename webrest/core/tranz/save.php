<?php

/**
 * Author:  Nurmukhammadov Shakhrizod
 */

use zetsoft\models\core\CoreTransact;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$modelName = $this->httpGet('modelName');
$session = $this->httpGet('session');

if ($modelName) {
    $this->paramSet(paramTransact, false);
    Az::$app->cores->tranz->save($modelName, $session);
    return true;
}
return false;
