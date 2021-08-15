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
use zetsoft\models\App\eyuf\EyufNeed;
use zetsoft\widgets\former\ZViewWidget;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\dbitem\core\WebItem;

/** @var ZView $this */


$action = new WebItem();

$action->title = Azl . 'Просмотр  Потребности';
$action->icon = 'fa fa-dashboard';


$action->layout = true; $action->debug = false;


$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();




$id = $this->httpGet('id');
$model = EyufNeed::findOne($id);

echo ZViewWidget::widget([
    'model' => $model,
    
]);
