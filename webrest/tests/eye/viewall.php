<?php

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

$notifies = ChatNotify::find()
    ->where(['user_id' => $id ,'read' => false])
    ->all();

if ($notifies === null)
    return ['Notify is empty!'];

foreach ($notifies as $notify){
    $notify->read = true;
    $notify->save();
}

return ['save'];
