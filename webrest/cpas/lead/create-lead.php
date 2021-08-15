<?php
/** @var ZView $this */

/**
 * @author JakhongirKudratov
 */

use zetsoft\dbitem\core\RestItem;
use zetsoft\models\cpas\CpasLead;
use zetsoft\models\cpas\CpasTracker;
use zetsoft\service\cores\Rbac;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;



$item = new RestItem();

$item->authType = Rbac::authType['bearer'];
$item->cache = false;
$item->cacheHttp = false;

$this->paramSet(paramAction, $item);


if ($this->httpIsPost())
{
    $shop_catalog_id = (int)$this->httpPost('shop_catalog_id');
    $cpasTrack = new CpasTracker();
    $cpas_track_id = (int)ZArrayHelper::getValue($this->httpPost(), 'cpas_track_id');
    $cpasTrack->contact_name = $this->httpPost('user_name');
    $cpasTrack->contact_phone = $this->httpPost('user_phone');
    $amount = (int)ZArrayHelper::getValue($this->httpPost(), 'amount');
    $user_agent = ZArrayHelper::getValue($this->httpPost(), 'user_agent');
    $cpasTrack->ip = ZArrayHelper::getValue($this->httpPost(), 'ip');
    $cpasTrack->amount = $amount? $amount : 1;
    $cpasTrack->cpas_stream_item_id = (int)$this->httpPost('item_id');
    $cpasTrack->contact_phone = str_replace('%2B', '', $cpasTrack->contact_phone);
    $isPhone = Az::$app->cores->auth->isPhone($cpasTrack->contact_phone);
    if ($isPhone)
    {
        if (!$cpas_track_id){
            $track_id = Az::$app->cpas->cpasLead->createTrack($cpasTrack, $user_agent);
        }
        else{
            $cpasTrack->id = $cpas_track_id;
            $track_id = Az::$app->cpas->cpasLead->saveTrackLand($cpasTrack);
            if ($track_id === null){
                return false;
            }
        }
        $request = Az::$app->cpas->cpasLead->addNewOrder($track_id, $shop_catalog_id);
        $track_id = $request->cpas_track_id;
        $order_id = $request->order_id;
        if (Az::$app->cpas->cpa->updateTrack($track_id, $order_id)){
            $requestWeb = Az::$app->cpas->cpasLead->userPostback($track_id);
            if($requestWeb)
                return true;

            return true;
        }
    }
}






