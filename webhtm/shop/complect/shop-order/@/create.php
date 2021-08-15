<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\shop\ShopOrder;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Новый заказ';
$action->icon = 'fa fa-line-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;

if ($this->httpGet('spa'))
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

    if (!$this->httpGet('spa'))
        require Root . '/webhtm/block/navbar/main.php';

    echo ZSessionGrowlWidget::widget();?>

    <div id="content" class="content-footer p-3">

        <div class="row">
            <div class="col-md-12 col-12">

                <?


                $id = $this->httpGet('id');
                $model = new ShopOrder();
                /*$model->configs->readonlyWidget = [
                  'user_id'
                ];*/
                 $model->configs->nameOff = [
                     'id',
                     'name',
                     'code',
                     'deliver_price',
                     'total_price',
                     'distance',
                     'ware_ids',
                     'called_time',
                     'call_record',
                     'shop_reject_cause_id',
                     'date_return',
                     'delayed_deliver_date',
                     'shop_delay_id',
                     'shop_delay_cause_id',
                     'additional_received_money',
                     'shop_shipment_id',
                     'weight',
                     'weight_plan',
                     'size',
                     'volume',
                     'status_client',
                     'status_callcenter',
                     'status_autodial',
                     'status_logistics',
                     'status_accept',
                 ];

                $model->configs->widget = [
                    'date' => ZInputWidget::class,
                ];

                $model->date = Az::$app->cores->date->dateTime();

                $model->configs->readonlyWidget = [
                    'date',
                    'responsible'
                ];

                $model->columns();
                if ($this->modelSave($model)) {

                    /**
                     *
                     * Post save Actions
                     */
                    $this->paramSet(paramIframe, true);

                    $this->paramSet(paramIframe, true);

                    /** @var ShopOrder $model */
                    /*$this->urlRedirect(ZUrl::to([
                        'process',
                        'shop_order_id' => $model->id
                    ]));*/
                    $this->urlRedirect(ZUrl::to([
                        'index',
                        'sort' => '-id'
                    ]));
                }



                $active = new Active();
                $active->type = Active::type['vertical'];
                $form = $this->activeBegin($active);

                $isCard = true;
                if ($this->httpGet('spa'))
                    $isCard = false;

                echo ZFormBuildWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'isCard' => $isCard,
                        'cols' => 2,
                        'topBtn' => false,
                        'stepType' => ZFormBuildWidget::stepType['none'],
                        'blockType' => ZFormBuildWidget::blockType['naked'],
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
