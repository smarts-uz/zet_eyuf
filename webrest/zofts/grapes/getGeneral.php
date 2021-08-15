<?php


use kartik\form\ActiveForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
$this->type = WebItem::type['ajax'];

$model = new CoreInput();

$form = ActiveForm::begin();

echo \zetsoft\widgets\former\ZFormWidget::widget([
    'model' => $model,
    'form' => $form
]);

ActiveForm::end();
