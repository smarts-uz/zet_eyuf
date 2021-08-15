<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\chat\ChatNotify;
use zetsoft\system\Az;

if ($this->httpIsGet()) {
    $data = Az::$app->utility->notify->notifiesRead();
    return true;
}


