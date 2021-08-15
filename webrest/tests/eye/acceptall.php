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

$notifies = UserFriend::find()
    ->where(['friend' => $id ,'status' => 0])
    ->all();

if ($notifies === null)
    return ['Notify is empty!'];

foreach ($notifies as $notify){
    $notify->status = 1;
    $notify->save();
}

return ['acceptAll'];
