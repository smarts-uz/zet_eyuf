<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\ware\WareEnterItem;
use zetsoft\models\ware\WareExitItem;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputBtnWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\ware\WareEnter;
use zetsoft\widgets\inputes\ZLibraInputWidget;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();
$action->loader = false;
$action->title = Azl . 'Создание прихода в склад';
$action->icon = 'fal fa-film';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();


/**
 *
 * Start Page
 */

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?php

    require Root . '/webhtm/block/metas/main.php';
    require Root . '/webhtm/block/assets/main.php';

    $this->head();

    ?>

</head>


<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

echo ZNProgressWidget::widget([]);

?>

<div id="page">

    <?

    echo ZSessionGrowlWidget::widget();?>

    <div id="content" class="content-footer p-3">

        <div class="row">
            <div class="mx-auto pt-5 col-md-11 col-11">

                <?
                
                $ware_id = $this->httpGet('ware_id');
                $ware_exit_id = $this->httpGet('ware_exit_id');
                $user_company_id = $this->httpGet('user_company_id');

                $model = new WareExitItem();

                if ($this->modelSave($model)) {

                    $this->paramSet(paramIframe, true);

                    $this->urlRedirect([
                        'process',
                        'ware_exit_id' => $ware_exit_id,
                    ]);
                }

                $model->ware_exit_id = $ware_exit_id;

                $readonly = $model->configs->readonlyWidget = [
                    'ware_exit_id'
                ];

                $model->configs->widget = [
                    'weight' => ZHInputWidget::class
                ];

                $model->configs->options = [
                    'weight' => [
                        'config' => [
                            'buttonText' => Az::l('Установить вес'),
                            'buttonWeight' => true,
                            'classMain' => 'd-flex',
                        ],
                        'event' => [
                            'buttonClick' => <<<JS
                                function() {
                                    libra.updateWeight();
                                }
                            JS,
                        ],
                    ],
                    'shop_catalog_id' => [
                        'data' => Az::$app->market->order->getElementFormUserCompany($ware_id, $user_company_id),
                    ]
                ];
                $model->cards = [
                    [
                        'title' => Az::l('Создание продуктов для списания со склада'),
                        'shows' => true,
                        'items' => [
                            [
                                'title' => Az::l('Создание продуктов для списания со склада'),
                                'shows' => true,
                                'items' => [
                                    [
                                        'ware_exit_id',
                                    ],
                                    [
                                        'shop_catalog_id',
                                        'best_before'
                                    ],
                                    [
                                        'amount',
                                        'weight',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ];
                $model->columns();

                $active = new Active();
                $active->type = Active::type['vertical'];
                $active->childClass = 'my-3';

                $form = $this->activeBegin($active);

                echo ZLibraInputWidget::widget([
                    'config' => [
                        'objectName' => 'libra',
                        'mode' => ZLibraInputWidget::mode['manual'],
                        'inputSelector' => '#wareexititem-weight',
                        'autorun' => true,
                    ],
                ]);

                echo ZFormBuildWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'cols' => 2,
                        'topBtn' => false,
                        'stepType' => ZFormBuildWidget::stepType['none'],
                        'blockType' => ZFormBuildWidget::blockType['naked']
                    ]
                ]);

                $this->activeEnd();

                ?>

            </div>
        </div>


    </div>

</div>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
