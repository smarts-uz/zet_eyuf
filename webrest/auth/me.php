<?php
/** @var ZView $this */

use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;

$token = $this->httpGet('token');

return Az::$app->cores->auth->getUserByToken($token);
