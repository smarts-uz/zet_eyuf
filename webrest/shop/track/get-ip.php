<?php

/**
 *
 * @author OtabekNosirov
 * @author JaloliddinovSalohiddin
 * @author AkromovAzizjon
 *
 */

/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\track\CpasTeaser;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZJsonHelper;
use zetsoft\system\kernels\ZView;


$action = new WebItem();
$action->type = WebItem::type['ajax'];
$action->csrf = false;
$action->debug = false;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$user_ip = Az::$app->request->userIP;

$product_id = $this->httpGet('product_id');
$keyword = $this->httpGet('keyword');
$cost = $this->httpGet('cost');
$externalId = $this->httpGet('external_id');
$creativeId = $this->httpGet('creative_id');
$adCampaignId = $this->httpGet('campaign_id');
$source = $this->httpGet('source');
$currency = $this->httpGet('currency');

//$model = Az::$app->https->guzzle->request('GET', 'https://ipinfo.io/' . $user_ip . '/json');
//$model = Az::$app->https->guzzle->request('GET', 'https://ipinfo.io/185.139.137.10/json');

vdd('asdasdas');
try {
    $model = Az::$app->geo->geodecoder->getInfosById($user_ip);
} catch (\GeoIp2\Exception\AddressNotFoundException $e) {
} catch (\MaxMind\Db\Reader\InvalidDatabaseException $e) {
}
//$model = Az::$app->geo->geodecoder->getOs($user_ip);

vdd($model) ;


$user_str = $_SERVER['HTTP_USER_AGENT'];

$device_os = Az::$app->geo->geodecoder->getOs($user_str);

$device_model = Az::$app->geo->geodecoder->getModelPhone($user_str)['device_model'];

//$ip_cons = ZJsonHelper::decode($model->getBody());

$browser = Az::$app->geo->geodecoder->getBrowser($user_str);

$data['ip'] = $model->traits->ipAddress??'';
$data['city'] = $model->city->name??'';
$data['region'] = $model->mostSpecificSubdivision->name??'' ;
$data['country'] = $model->country->isoCode??'';
$data['timezone'] = $model->location->timeZone??'';
$data['device_model'] = $device_model??'';
$data['device_os'] = $device_os??'';
$data['browser'] = $browser??'';

vdd($data);
$subid = Az::$app->geo->geodecoder->subidGenerate();

$redirect_url = '/shop/user/cpa/a20.aspx?keyword='.$keyword.'&cost='.$cost.'&external_id='.$externalId.'&creative_id='.$creativeId.'&ad_campaign_id='.$adCampaignId.'&source='.$source.'&subid='.$subid.'&';

$cpa_tracker = new CpasTeaser();
$cpa_tracker->location = $data['country'].' , '.$data['city'];
$cpa_tracker->ip = $data['ip'];
$cpa_tracker->device_model = $device_model;
$cpa_tracker->device_os = $device_os;
$cpa_tracker->browser = $browser;
$cpa_tracker->keyword = $keyword;
$cpa_tracker->redirect_url = $redirect_url;
$cpa_tracker->cost = $cost;
$cpa_tracker->subId = $subid;
$cpa_tracker->creativeId = $creativeId;
$cpa_tracker->adCampaignId = $adCampaignId;
$cpa_tracker->source = $source;
$cpa_tracker->currency = $currency;
$cpa_tracker->externalId = $externalId;

$cpa_tracker->save();

$this->urlRedirect($redirect_url);






