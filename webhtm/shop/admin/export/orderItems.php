<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\models\ware\WareAccept;
use zetsoft\models\ware\WareEnterItem;
use zetsoft\models\ware\WareExit;
use zetsoft\models\ware\WareExitItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\ware\WareEnter;
use function Dash\Curry\get;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Редактирование';


$action->icon = 'fal fa-film';
$action->type = WebItem::type['html'];




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

<style>
    .iframe-orders {
        border: none;
        min-height: 600px;
    }
</style>

<div id="page">

    <?
    echo ZSessionGrowlWidget::widget();?>

    <div id="content" class="content-footer p-3">


        <div class="row">
            <div class="col-md-12 col-12">

                <?

                $shop_shipment_id = $this->httpGet('shop_shipment_id');
                $ware_accept_id = $this->httpGet('ware_accept_id');
                $ware_accept = WareAccept::findOne($ware_accept_id);

                $shop_order = ShopOrder::find()
                    ->where([
                        'shop_shipment_id' => $shop_shipment_id
                    ])
                    ->asArray()
                    ->all();

                $shop_order_ids = ZArrayHelper::getColumn($shop_order, 'id');

                $model = new ShopOrderItem();
                $model->configs->query = ShopOrderItem::find()
                    ->where([
                        'shop_order_id' => $shop_order_ids,
                    ]);


                     
                $model->configs->options = [
                    'amount_partial' => [
                        'config' => [
                            'max' => $model->amount,
                        ]
                    ]
                ];

                $model->configs->nameOn = [
                    'id',
                    'name',
                    'shop_catalog_id',
                    'amount',
                    'amount_partial',
                    'amount_return',
                    'price',
                    'price_all_return',
                    'price_all_partial',
                    'price_all',
                ];

                $model->configs->width = [
                    'name' => '500px',
                    'price' => '100px',
                    'price_all_return' => '100px',
                    'price_all_partial' => '100px',
                    'price_all' => '100px',
                    'amount' => '100px',
                    'amount_partial' => '100px',
                    'amount_return' => '100px',
                ];

                $model->columns();

                /** @var ZView $this */
                echo ZDynaWidget::widget([
                    'model' => $model,
                    'rightBtn' => [
                        'add-tabular-clone-delete' => [
                            'content' => '{add}{tabular}',
                            'options' => ['class' => 'btn-group p-1 mr-2 {btnSize} {iconSize}']
                        ],
                    ],

                    'config' => [
                        'isCard' => false,
                        'spa' => true,
                        'hasToolbar' => false,
                        'createUrlAjax' => ZUrl::to([
                            'create-process',
                            'id' => $this->httpGet('order_id'),
                        ]),
                        'createUrl' => 'create-item',
                        'columnBefore' => [
                            'serial',
                            'id',
                            'checkbox',
                        ],
                        'columnAfter' => false,
                        'actionButtons' => [
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
