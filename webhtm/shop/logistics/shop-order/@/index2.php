<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZBanderolWidget;
use zetsoft\widgets\former\ZDynaDialogWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidget2;
use zetsoft\widgets\former\ZExportBtnWidget;
use zetsoft\widgets\former\ZGetChecksWidget;
use zetsoft\widgets\former\ZPdfWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;
use zetsoft\widgets\values\ZDateFormatWidget;


/** @var ZView $this */


/**
 *
 * Action Params
 * @author MurodovMirbosit
 */

$action = new WebItem();

$action->title = Azl . 'Заказы';
$action->icon = 'fal fa-lock';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;
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
if (!$this->httpGet('spa'))
    echo ZMmenuWidget::widget();
?>

<div id="page">

    <?
    if (!$this->httpGet('spa'))
        require Root . '/webhtm/block/navbar/admin.php';

    echo ZSessionGrowlWidget::widget();?>

    <div id="content" class="content-footer p-3">

        <div class="row">
            <div class="col-md-12 col-12">
                <?php
                $this->pjaxBegin();
                $model = new ShopOrder();

                $model->configs->query = ShopOrder::find()
                ->where([
                    'status_callcenter' => ShopOrder::status_callcenter['approved']
                ]);

                $model->configs->nameOn = [
                    'number',
                    'name',
                    'code',
                    'contact_name',
                    'contact_phone',
                    'children',
                    'parent',
                    'status_logistics',
                    'status_callcenter',
                    'status_universal',
                    'status_accept',
                    'shop_shipment_id',
                    'date_deliver',
                    'date_approve',
                    'place_adress_id',
                    'user_company_ids',
                    'ware_ids',
                    'payment_type',
                    'price',
                    'deliver_price',
                    'total_price',
                    'date',
                    'responsible',
                    'user_id',
                    'operator',
                    'comment_agent',
                    'tasks',
                    'source',
                    'shop_reject_cause_id',
                    'status_client',
                    'date_return',
                    'delayed_deliver_date',
                    'weight_plan',
                    'shop_delay_id',
                    'shop_delay_cause_id',
                    'shop_coupon_id',
                    'shop_channel_id',
                    'additional_payment_type',
                    'additional_received_money',
                    'additional_deliver',
                    'prepayment',
                ];

                $dogovor = ZGetChecksWidget::widget([
                    'model' => $model,
                    'config' => [
                        'url' => ZUrl::to([
                            '/api/shop/cart/actOb',
                            'type' => 'multiContract',
                        ]),
                        'noConfirm' => false,
                        'btnOptions' => [
                            'config' => [

                                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
                                'btnSize' => ZExportBtnWidget::btnSize['btn-mini'],
                                'btnRounded' => false,
                                'text' => Az::l('Договор заказа')
                            ]
                        ],
                    ],
                    'event' => [
                        'ajaxSuccess' => <<<JS
            function(data) {
            
                if (data.error) {
                    alert(data.error)
                }
                                   
                
                
                if (data.path)
                    window.open(data.path, '_blank')
                    location.reload()
            }
JS,

                    ]
                ]);

                $copyStatus = ZDynaDialogWidget::widget([
                    'model' => $model,
                    'config' => [
                        'content' => ZHRadioButtonGroupWidget::widget([
                            'name' => 'dialog_value',
                            'data' => [
                                'change' => Az::l('Обмен'),
                                'free' => Az::l('Бесплатный курс'),
                                'error' => Az::l('Заказ по ошибке'),
                                'cancel' => Az::l('Отказ'),
                            ],
                            'config' => [
                                'parentClass' => 'd-flex flex-wrap',
                                'class' => 'w-100',
                            ]
                        ]),
                        'text' => Az::l('Скопировать по статусу')
                    ]
                ]);

                $banderol = ZGetChecksWidget::widget([
                    'model' => $model,
                    'config' => [
                        'url' => ZUrl::to([
                            '/api/shop/cart/banderol',
                            'type' => 'multiBanderol',
                            'attribute' => 'status_logistics',
                            'modelClassName' => $model->className,
                            'value' => 'shipment_ready',
                        ]),
                        'noConfirm' => false,
                        'btnOptions' => [
                            'id' => 'btn-banderol',
                            'config' => [

                                'btnType' => ZButtonWidget::btnType['button'],
                                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-dark'],
                                'btnSize' => ZButtonWidget::btnSize['btn-mini'],
                                'btnRounded' => false,
                                'text' => Az::l('Бандероль')
                            ]
                        ],
                    ],
                    'event' => [
                        'ajaxSuccess' => <<<JS
            function(data) {
            
                if (data.error) {
                    bootbox.confirm({
                        title: 'Ошибка',
                        message: data.error,
                        callback: function (result) {
                            
                        }
                    });
                }
                
                if (data.data) {
                    
                    if (data.redirect) {
                         window.open(data.data, '_blank')
                         location.reload()
                    } else {
                        bootbox.confirm({
                            title: 'Ошибка',
                            message: 'Необходимо заполнить вес заказа!',
                            callback: function (result) {
                                if (result === true)
                                    $('#update-'+ data.id).click();
                            }   
                        });
                    }
                }
            }
JS,
                    ]
                ]);

                $model->columns();
                /** @var ZView $this */
                echo ZDynaWidget2::widget([
                    'model' => $model,
                    'config' => [
                        'pjax'=>false,
                        'updateUrl' => '{fullUrl}/process.aspx?shop_order_id={id}',
                        'actionButtons' => [
                            'update',
                            'delete',
                            'clone',
                            'view',
                        ],
                        'columnBefore' => [
                            'serial',
                            'sort',
                            'checkbox',
                            'action',
                        ],
                        'spaArray' => [
                            'update' => false,
                            'create' => true,
                        ],
                        'spaHeight' => [
                            'create' => '750px',
                            'view' => '618px',
                        ],
                        'columnAfter' => false,
                    ],
                    'rightBtn' => [
                        'update' => [
                            'content' => '',
                            'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
                        ],


                        'system' => [
                            'content' => '',
                            'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
                        ],

                        'add-clone-delete' => [
                            'content' => '',
                            'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
                        ],

                        'filter-sort-id' => [
                            'content' => '',
                            'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
                        ],

                        'statistics' => [
                            'content' => '',
                            'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
                        ],
                        'export' => [
                            'content' => '{export}{exportAll}{jsonExport}{excelExport}',
                            'options' => ['class' => 'btn-group p-1 {btnSize} {iconSize}']
                        ],
                        'toggleData' => [
                            'content' => '',
                            'options' => ['class' => 'btn-group p-1 {btnSize} {iconSize}']
                        ],

                    ]
                ]);
                $this->pjaxEnd();
                ?>

            </div>
        </div>


    </div>

</div>


<?php $this->endBody() ?>


</body>
</html>

<?php $this->endPage() ?>
