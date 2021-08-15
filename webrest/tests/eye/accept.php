<?php

use zetsoft\models\user\UserFriend;
use zetsoft\models\auto\ChatNotify;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

$id = $this->httpGet('id');

if (empty($id))
    return ['ID is required!'];

$mess = UserFriend::findOne($id);

if ($mess === null)
    return ['Notify is empty!'];

    
$mess->status = 1;
$mess->save();
return ['accept'];
