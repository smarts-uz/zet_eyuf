<?php
/** @var ZView $this */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

$session = $this->cookieGet('session');
vd($session);

$cookie = Az::$app->cores->session->getCookieSession();
vd($cookie);

vdd([
    $session,
    $cookie
]) ;
