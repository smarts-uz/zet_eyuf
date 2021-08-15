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


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\page\PageAction;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;


/** @var ZView $this */
$this->type = WebItem::type['ajaxFilePreg'];
$action->icon =false;

Az::$app->params['grape'] = true;

$service = Az::$app->smart->widget;
$widget = str_replace('/', '\\', $this->httpGet('param'));
$id = $this->httpGet('blockId');
$widgetObj = new $widget();
$options = $this->httpGet('ZDynamicModel') ?? $widgetObj->_config;

$getOpts = $this->httpGet('configs');
if (!empty($getOpts))
    $options = json_decode($getOpts, true);

$configs = $service->settings($widget, $options);
$configs['grapesWrap'] = false;

if ($id)
    $configs['id'] = $id;

echo $widget::widget($configs);
