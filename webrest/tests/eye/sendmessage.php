<?php

use zetsoft\models\user\UserFriend;
use zetsoft\models\auto\ChatMessage;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

$sender = $this->httpGet('sender');
$receiver = $this->httpGet('receiver');

if (empty($receiver) || empty($sender)){
    return ['ID is required!'];
}



$chack = ChatMessage::find()
    ->where(['sender' => $sender, 'receiver' => $receiver])
    ->all();

if(!($chack)){

    $message = new ChatMessage();
    $message->sender = $sender;
    $message->receiver = $receiver;
    $message->read = false;
    $message->time = date('h:i');
    $message->text = '<img src="/render/images/assets/image/hand.gif" class="img-fluid">';
    $message->save();
    return ['send'];
}
else
    return ['send'];

