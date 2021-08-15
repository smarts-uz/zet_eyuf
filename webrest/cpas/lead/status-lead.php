<?php
/** @var ZView $this */


use zetsoft\dbitem\core\RestItem;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\cpas\CpasLead;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\user\User;
use zetsoft\service\cores\Rbac;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/*$item = new RestItem();

$item->authType = Rbac::authType['bearer'];

$this->paramSet(paramAction, $item);*/

/*$headers = Yii::$app->request->headers;
return $headers;*/

if ($this->httpIsGet()){

//return $this->httpGet();
$subId = (int)$this->httpGet('track_id');
$status = strip_tags($this->httpGet('status'));

if (Az::$app->cpas->cpa->updateStatus($subId, $status))
    return [
        'status' => 'ok'
    ];

}
return null;

