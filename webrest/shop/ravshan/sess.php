<?php


use yii\helpers\Url;
use yii\web\JsExpression;
use zetsoft\system\actives\ZModel;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZInflector;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;


/** @var ZView $this */
/** @var ZModel $model */


/** @var ZView $this */
/** @var ZModel $model */

$this->sessionSet([
    'dm' => "11",
]);

$s = $this->sessionGet('dm');
vd($sdf);
$sdf = $this->sessionGet('country');
vdd($sdf);

if ($this->httpGet('id'))
    $id = $this->httpGet('id');
else
    $id = 364;

if ($this->httpGet('control'))
    $control = $this->httpGet('control');
else
    $control = 'core-form';

if (Az::$app->request->post('expandRowKey'))
    $modelId = (Az::$app->request->post('expandRowKey'));
else
    $modelId = $id;

$modelClass = 'zetsoft\models\ALL\\' . ZInflector::camelize($control);
$dbClass = $modelClass::findOne($modelId)->widget;

if (empty($dbClass))
    $dbClass = ZKSelect2Widget::class;

$model = Az::$app->smart->widget->form($dbClass, $modelId, $modelClass);

$model->configs->nameOn = [
    'class'
];

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">

            <?php

            /** @var int $modelId */
            /** @var string $control */
            $form = ZAjaxForm::begin([
                'id' => 'classActive',
                'action' => [
                    '/core/widget/option',
                    'id' => $modelId,
                    'control' => $control
                ],
                'ajaxSubmitOptions' => [
                    'success' => new JsExpression('function(response) {
                        console.log(response)
                        $("#option").html(response); 
                }'),
                ]
            ]);

            ?>

            <?= ZFormWidget::widget([
                'id' => 'class',
                'model' => $model,
                'form' => $form,

            ]);

            ZAjaxForm::end();

            ?>

            <div id="option"></div>
        </div>

        <div class="col-6">
            <div id="widget"></div>
        </div>
    </div>

</div>
