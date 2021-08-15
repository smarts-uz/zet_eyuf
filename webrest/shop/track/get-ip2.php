<?php
/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\track\CpasTeaser;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZJsonHelper;
use zetsoft\system\kernels\ZView;
use function Spatie\SslCertificate\length;


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


$model = Az::$app->https->guzzle->request('GET', 'https://ipinfo.io/' . $user_ip . '/json');
//$model = Az::$app->https->guzzle->request('GET', 'https://ipinfo.io/185.139.137.10/json');

$user_str = $_SERVER['HTTP_USER_AGENT'];

$device_os = Az::$app->geo->geodecoder->getOs($user_str);

$device_model = Az::$app->geo->geodecoder->getModelPhone($user_str)['device_model'];

$ip_cons = ZJsonHelper::decode($model->getBody());

$browser = Az::$app->geo->geodecoder->getBrowser($user_str);

$data['ip'] = $ip_cons['ip'];
$data['city'] = $ip_cons['city'] ?? null;
$data['region'] = $ip_cons['region'] ?? null;
$data['country'] = $ip_cons['country'] ?? null;
$data['timezone'] = $ip_cons['timezone'] ?? null;

$cpa_tracker = new CpasTracker();
$cpa_tracker->location = $data['country'].' , '.$data['city'];
$cpa_tracker->ip = $data['ip'];
$cpa_tracker->device_model = $device_model;
$cpa_tracker->device_os = $device_os;
$cpa_tracker->browser = $browser;
$cpa_tracker->keyword = $keyword;
$cpa_tracker->cost = $cost;
$cpa_tracker->creativeId = $creativeId;
$cpa_tracker->adCampaignId = $adCampaignId;
$cpa_tracker->source = $source;
$cpa_tracker->currency = $currency;
$cpa_tracker->externalId = $externalId;
$cpa_tracker->save();



vdd($cpa_tracker);





