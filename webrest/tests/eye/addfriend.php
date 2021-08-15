<?php

use zetsoft\models\user\UserFriend;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

$person = $this->httpGet('person');
$friend = $this->httpGet('friend');

if (empty($person) || empty($friend))
    return ['ID is required!'];

$request = new UserFriend();
$request->person = $person;
$request->friend = $friend;
$request->status = 0;
$request->remove = false;
$request->save();

return ['addFriend'];
