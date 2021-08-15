<?php

use zetsoft\dbitem\core\NotifyItem;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\auto\ChatNotify;
use zetsoft\system\helpers\ZJsonHelper;
use zetsoft\system\kernels\ZView;

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

$mess = ChatMessage::findOne($id);

if ($mess === null)
    return ['Message is empty!'];

$mess->read = true;
$mess->save();
return ['save'];
