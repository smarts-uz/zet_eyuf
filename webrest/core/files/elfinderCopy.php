<?php


use zetsoft\system\Az;


$path = $this->httpPost('path');
$dst = $this->httpPost('dst');

return Az::$app->filemanager->elfinderTools->copyPasteFile($path, $dst);
