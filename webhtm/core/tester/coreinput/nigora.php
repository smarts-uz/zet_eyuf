<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;


$action->title = Azl . 'Список core input';
$action->icon = 'fa fa-th';

$model = new CoreInput();
$model->configs->nameOn = [
      
];
/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);










