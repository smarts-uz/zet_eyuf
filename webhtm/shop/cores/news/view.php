<?php


use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

$form = $this->activeBegin();
ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 12
    ]
]);

echo ZFormWizardWidget::widget([
    'model' => $form,
    'config' => [
        'viewMode' => true
    ]
]);

ZColWidget::end();
ZRowWidget::end();
$this->activeEnd();


