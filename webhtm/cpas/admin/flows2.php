<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\former\cpas\CpasTrackForm;
use zetsoft\models\cpas\CpasStream;
use zetsoft\models\cpas\CpasStreamStats;
use zetsoft\models\cpas\CpasTracker;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetJahongir;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Потоки';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = false;
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
    require Root . '/webhtm/block/assets/App/main_arbit.php';

    $this->head();

    ?>

</head>


<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

echo $this->require('\webhtm\cpas\blocks\header.php');


?>

<div id="page">

    <?


    $date = date('d-m-Y H:i:s');
    
    echo ZSessionGrowlWidget::widget();



    ?>

    <div id="content" class="content-footer p-3">

        <div class="row">
            <div class="mt-2 bg-white d-block py-3 px-1 w-100">
                <h2 class="text-muted"><?= Az::l('Потоки') ?></h2>
                <div>
                    <a href="/cpas/admin/statistic.aspx" style="font-size: small"><?= Az::l('Главная') ?></a>
                    <span style="font-size: small">/ <?= Az::l('Потоки') ?></span>
                </div>
            </div>
            <div class="mt-5 col-12 col-md-12">

                <?php

                $model = new ShopOrder();
                /*$model->configs->nameOn = [
                    'id',
                    'name',
                    'cpas_offer_id',
                    'user_id',
                    'title',
                ];*/

                $model->columns();

                echo ZDynaWidget::widget([
                    'model' => $model,
                    'config' => [
                        'showFooter' => false,
                        'titleSummary' => true,
                        'isCard' => false,
                        'columnBefore' => [
                            'action',
                            //'relation'
                        ],
                        'actionButtons' => [
                            'delete',
                            'view'
                        ],

                        'viewUrl' => '{fullUrl}/viewflowdyna.aspx?id={id}',
                        'columnAfter' => false,
                        'hasToolbar' => false,
                        'search' => false,
                        'heighbody' => '100%',
                        'summary' => true,
                        'perfectScrollbar' => true,
                        'striped' => false,
                        'hasWidth' => false,
                        'panelTemplate' => "{items}",
                        'relations' => true
                        //'filter' => false

                    ]
                ])

                ?>

            </div>

        </div>


    </div>

</div>


<? echo $this->require('\webhtm\cpas\blocks\footer.php'); ?>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
