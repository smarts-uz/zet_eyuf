<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZTinyCloudWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTinyCloudWidget::class,
                    'options'=>[
                        'data' => $items,

                    ]
                ],

            ]
        ],


    ]
]);

$this->activeEnd();

