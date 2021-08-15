<?php

use zetsoft\models\page\PageAction;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;

/** @var ZView $this */

$action->icon =false;
$this->csrf = false;

$data = $this->httpPost('content');
$actionId = $this->httpPost('actionId');
$file = str_replace('/', '\\', $this->httpPost('file'));
$css = $this->httpPost('css');

$css = str_replace(['"', ',', '<style>', '{', '}', ';'], ['', ';', "\n<style>\n", "{\n\t", "\n}\n", ";\n\t"], $css);


$service = Az::$app->smart->widget;
$PageAction = null;

if (!empty($actionId))
    $PageAction = PageAction::findOne($actionId);

$content = $service->pregMatchFix($data);

if ($PageAction)
    $content = $service->writeFile($PageAction,$content,$css);
else
    $content = $content . $css;


file_put_contents($file, $content);
