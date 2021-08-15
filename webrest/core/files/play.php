<?php

use Facebook\WebDriver\Exception\UnsupportedOperationException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use zetsoft\service\inputs\Fileinput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;



$path = $this->httpGet('file');
$inline = $this->httpGet('inline', false);



$app = App;
if(!file_exists($path))
    $path = Az::getAlias(Root . $path);

if (!file_exists($path))
    throw new FileNotFoundException($path);

if (ZArrayHelper::isIn(ZFileHelper::extension($path), Fileinput::blocked))
    throw new UnsupportedOperationException('Blocked File');

/*
 *   return $this->alertDanger( $path, Az::l('Файл отсутсвует на сервере'));
 *   return $this->alertDanger( $path, Az::l('Файл заблокирован'));
 **/

$fileName = bname($path);

$response = Az::$app->response;
$response->sendFile($path, $fileName, [
    'inline' => $inline
])->send();

return true;
