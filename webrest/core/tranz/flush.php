<?php

/**
 * Author:  Nurmukhammadov Shakhrizod
 */

use zetsoft\models\core\CoreTransact;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$modelName = $this->httpGet('modelName');
$session = $this->httpGet('session');
if ($modelName) {
   return Az::$app->cores->tranz->flush($modelName, $session);
}
return false;
