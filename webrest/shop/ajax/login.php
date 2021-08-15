<?php
/**
 * @author: AzimjonToirov
 *
 */

use zetsoft\former\auth\AuthLoginForm;
use zetsoft\former\auth\AuthRegisterForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


$loginForm = new AuthLoginForm();

/** @var ZView $this */
$loginForm->login = $this->httpPost('email');

$loginForm->password = $this->httpPost('password');

return Az::$app->cores->auth->login($loginForm);


