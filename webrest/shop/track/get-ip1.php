<?php
/** @var ZView $this */


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\track\CpasTeaser;
use zetsoft\system\Az;
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

$keyword = $this->httpGet('keyword');
$cost = $this->httpGet('cost');
$externalId = $this->httpGet('external_id');
$creativeId = $this->httpGet('creative_id');
$adCampaignId = $this->httpGet('campaign_id');
$source = $this->httpGet('source');
$currency = $this->httpGet('currency');

$model = new CpasTracker();
$model->keyword = $keyword;
$model->cost = $cost;
$model->creativeId = $creativeId;
$model->adCampaignId = $adCampaignId;
$model->source = $source;
$model->currency = $currency;
$model->externalId = $externalId;
$model->save();




