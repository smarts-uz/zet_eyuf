<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZASwitchInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZICheckCheckboxListWidget;
use zetsoft\widgets\inputes\ZDynaCheckboxWidget;
use zetsoft\widgets\inputes\ZICheckMaterialWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
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
                'zicheckcheckboxlistwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZASwitchInputWidget::class,
                    'options' => [
                        'data' => [
                            1,
                            2,
                            3,
                        ],
                    ]
                ),
            ]
        ]
    ]
]);


$this->activeEnd();


