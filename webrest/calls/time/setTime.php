<?php
/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

$userId = $this->httpGet('userId');


$user = User::findOne($userId);

if (!empty($userId)) {
    $user = User::findOne($userId);
    if ($user !== null) {
        Az::$app->market->operator->callsStatusTime($user);
        return true;
    }
}
return false;



