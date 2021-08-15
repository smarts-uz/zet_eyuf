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

use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\models\drag\DragFormDb;
use zetsoft\service\forms\Active;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZCollapsesWidget;
use zetsoft\widgets\navigat\ZAccLayWidget;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZGAccordionWidget;

$action = new WebItem();
$action->title = Azl . 'Grapes';
$action->icon = 'fal fa-calendar-edit';
$action->type = WebItem::type['ajax'];
$action->csrf = true;
$action->cache = false;
$action->toolbar = false;
$action->debug = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();


$getConfigs = $this->httpGet('configs');

$widget = str_replace('/', '\\', $this->httpGet('param'));

if (!$widget) {
    echo('Виджет не Выбран!');
    die;
}

$service = Az::$app->smart->widget;

$configs = json_decode($getConfigs, true) ?? (new $widget())->_config;
$optionsForm = $service->allOptions($widget, $configs);


?>

<div class="container">
    <h4 class="title-option">Настройка опций виджетов</h4>
    <?

    $formOptions = new Active();
    $formOptions->id = 'activeFormGrapes';
    $form = $this->activeBegin($formOptions);

    $basename = bname($widget);

    //КНОПКА SUBMIT ДЛЯ ФОРМЫ

    echo ZButtonWidget::widget([
        'id' => 'sendOptions',
        'config' => [
            'hidden' => true,
        ]
    ]);
    foreach ($optionsForm as $key => $model) { //$app
        /*   $model->setAttributes($configs);*/

        echo ZGAccordionWidget::widget([
            'config' => [
                'title' => $key,
                'content' => ZFormWidget::widget([
                    'config' => [
                        'isCnt' => false,
                        'topBtn' => false,
                        'botBtn' => false,
                        'title' => false,
                        'type' => ZFormWidget::type['allbl'],
                    ],
                    'model' => $model,
                    'form' => $form,
                ]),
            ]
        ]);

    }

    $this->activeEnd();

    ?>

</div>

<style>

    #sendOptions {
        visibility: hidden;
    }

    .container-fluid {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .title-option {
        margin-left: 10px;

    }

</style>

<script>
    $(document).on('change', '#activeFormGrapes', function () {
        $('#sendOptions').click();
    });
</script>
