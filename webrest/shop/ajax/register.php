<?php
/**
 * @author: AzimjonToirov
 *
 */

use zetsoft\former\auth\AuthRegisterForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


$registerForm = new AuthRegisterForm();

/** @var ZView $this */
$registerForm->login = $this->httpPost('email');

$registerForm->password = $this->httpPost('password');

$registerForm->role = $this->httpPost('role');

return Az::$app->cores->auth->register($registerForm);


