<?php
/** @var ZView $this */


use zetsoft\dbitem\core\RestItem;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\cpas\CpasLead;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\user\User;
use zetsoft\service\cores\Rbac;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;

$item = new RestItem();

$item->authType = Rbac::authType['bearer'];

$this->paramSet(paramAction, $item);


if ($this->httpIsPost()){


    $cpas_stream_item_id = ZArrayHelper::getValue($this->httpPost(), 'item_id');
    $ip = ZArrayHelper::getValue($this->httpPost(), 'ip');
    $user_agent = ZArrayHelper::getValue($this->httpPost(), 'user_agent');
    if (!empty($cpas_stream_item_id)){
        $track_id = Az::$app->cpas->cpasStats->createStats(false, $cpas_stream_item_id, $ip, $user_agent);
        return [
            'track_id' => $track_id
        ];
    }

    return [
        'message' => 'error'
    ];

}

