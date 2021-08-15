<?php

/**
 *
 *
 * Author:  Shakhrizod Nurmukhammadov
 *
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$code = $this->httpPost('code');
$session = $this->sessionGetAll('phoneRegisterCode');
//vd(strtotime($session->expire));
//vdd(time());


switch (true) {
    case $session:
        if ($session->value === $code) {
            if ($session->expire > time()) {
                return 'expired';
            }
            if ($session->user_id) {
                $user = \zetsoft\models\user\User::findOne($session->user_id);
                if ($user) {
                    $user->verified_email = true;
                    if ($user->save()) {
                        $this->sessionDel('phoneRegisterCode');
                        $this->sessionDel('phoneRegister');
                        Az::$app->cores->session->set('login', true, 0, $user->id);
                        return true;
                    }
                }
            }
        }
        return false;
        break;
    default:

        return false;
        break;
}


