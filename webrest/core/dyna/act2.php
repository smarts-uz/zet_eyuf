<?php


use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\ZWebApp;


$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');
$namespace = $this->httpGet('namespace');
$service = $this->httpGet('service');
$method = $this->httpGet('method');

$attr = $this->httpGet('attribute');
$val = $this->httpGet('value');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

/** @var ZWebApp $this */
vdd($this->httpGet());

