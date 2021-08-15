<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
$action = new WebItem();

$action->debug = false;
$action->csrf = false;
$action->type = WebItem::type['ajax'];


$this->paramSet(paramAction, $action);


$this->title();
$this->toolbar();

$return = [];
$company_id = $this->httpGet('id');
if (empty($company_id) || $company_id = '')
    return null;

$res = Az::$app->market->company->getCompanyById($company_id);

$return['name'] = $res->name;
$return['title'] = $res->title;
$return['text'] = $res->text;

return $return;
