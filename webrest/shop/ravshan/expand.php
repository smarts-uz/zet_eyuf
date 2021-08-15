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


use yii\web\JsExpression;

use zetsoft\models\ALL\test;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjax2Widget;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$this->init();

$action->title = Azl . 'Настройка Опций Виджета';
$action->icon = 'fa fa-rocket rss';
$this->type = WebItem::type['ajax'];

$id = $this->httpPost('expandRowKey');

$widgetClass = CoreFormDb::findOne($id);

$widget = $widgetClass->widget;
$model = Az::$app->smart->widget->options($widget);

if ($this->httpIsPost()) {
    $widgetClass->options = $this->httpPost('ZDynamicModel');
    $widgetClass->save();
}

?>


<div class="row">

    <div class="col-md-6">
        <div class="col-md-12">

            <?

            $form = ZAjaxForm::begin([
                'id' => 'classActive',
                'method' => 'post',
                'action' => [
                    '/core/widget/widget',
                    'widgetClass' => $widget,
                    'options' => $this->httpPost('ZDynamicModel')
                ],
                'ajaxSubmitOptions' => [
                    'success' => new JsExpression('function(response) {
                       $("#widget").html(response); 
                    }'),
                ]
            ]);

            ZCardWidget::begin([
                'config' => [
                    'title' => $this->title,
                    'type' => ZCardWidget::type['dynCard'],
                ]
            ]);

            echo ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
            ]);


            ZCardWidget::end();

            ZAjaxForm::end();


            ?>

        </div>

    </div>

    <div class="col-md-6">

        <div id="widget" class="col-md-12">

            <?

            ZCardWidget::begin([
                'config' => [
                    'title' => Az::l('Виджет'),
                    'type' => ZCardWidget::type['dynCard'],
                ]
            ]);


            $class = new $widget();
            $dbType = $class->dbType;

            $modelWidget = new CoreInput();
            $attribute = $dbType . '_2';

            echo $widget::widget([
                'model' => $modelWidget,
                'attribute' => $attribute,
                'config' => $model->attributes,
            ]);


            ZCardWidget::end();


            ?>


        </div>
    </div>
</div>


<script>

    var inputs = $('input[type=text]');

    inputs.on('change', function () {
        $('#secondary').click();
    });
</script>

