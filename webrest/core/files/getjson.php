<?php

/**
 *
 *
 * Author:  Bahodir
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;

/** @var ZView $this */
$filepath = $this->httpGet('filepath');

Az::$app->response->sendFile($filepath);
