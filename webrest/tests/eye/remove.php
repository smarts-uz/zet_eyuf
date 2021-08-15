<?php


/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\chat\ChatNotify;

$id = $this->httpGet('id');
if (empty($id))
    return ['ID is required!'];

$mess = ChatNotify::findOne($id);

if ($mess === null)
    return ['Notify is empty!'];


$mess->remove = true;
$mess->read = true;
$mess->save();
return ['remove'];
