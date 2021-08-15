<?php

/** @var ZView $this */

use zetsoft\models\chat\ChatNotify;
use zetsoft\system\kernels\ZView;

$messageId = $this->httpGet('id');
$userId = $this->userIdentity()->id;

$notify = ChatNotify::find()
    ->where([
        'id' => $messageId,
    ])
    ->one();

/** @var ChatNotify $notify */
$notify->read = true;
return $notify->save();
