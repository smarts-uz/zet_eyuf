<?php

use zetsoft\models\user\UserFriend;
use zetsoft\models\auto\ChatMessage;
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


$messages = ChatMessage::find()
    ->where([
        'receiver' => $id,
        'read' => false,
    ])
    ->all();

if ($messages === null)
    return ['Notify is empty!'];

foreach ($messages as $message){
    $message->read = true;
    $message->save();
}

return ['viewAllMessages'];
