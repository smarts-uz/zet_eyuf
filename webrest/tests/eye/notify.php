<?php

use zetsoft\models\auto\ChatNotify;

$id = $this->httpGet('id');
if (empty($id))
    return ['ID is required!'];




$mess = ChatNotify::findOne($id);

if ($mess === null)
    return ['Message is empty!'];

$mess->read = true;
$mess->save();
return ['save'];
