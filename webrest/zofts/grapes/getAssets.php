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
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\page\PageAction;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;


/** @var ZView $this */
$this->init();
$this->type = WebItem::type['ajax'];
$action->icon =false;


$param = str_replace('/', '\\', $this->httpGet('param'));

$model = Az::$app->smart->widget->modelFix($param);
$attribute = Az::$app->smart->widget->attributeFix($param, $model);

echo $param::widget([
    'model' => new $model(),
    'attribute' => $attribute
]);

