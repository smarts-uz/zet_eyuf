<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\place\PlaceRegion;
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
 *
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
            <div class="col-md-12">

                <?php


                $id = $this->httpGet('id');
                
                $model = new ShopOrder();
                
                $model->date = Az::$app->cores->date->fbDateTime();

                $model->responsible = $this->userIdentity()->id;

                $model->cards = [
                    [
                        'title' => Az::l('Первый этап'),
                        'shows' => true,
                        'items' => [
                            [
                                'title' => Az::l('Форма'),
                                'shows' => true,
                                'items' => [
                                    [
                                        'date',
                                        'responsible',
                                    ],
                                    [
                                        'user_id',
                                        'contact_name'
                                    ],
                                    [
                                        'comment_user',
                                        'contact_phone',
                                    ],
                                    [
                                        'user_company_ids'
                                    ],
                                    [
                                        'ware_ids',
                                        'source',
                                    ],
                                    [
                                        'tasks',

                                    ],
                                    [
                                        'date_deliver',
                                        'delayed_deliver_cause'
                                    ],
                                    [
                                        'deliver_price',
                                        'shop_channel_id',
                                    ],
                                    [
                                        'shop_coupon_id',
                                        'payment_type',
                                    ],
                                    [
                                        'additional_payment_type',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ];

                $model->status_callcenter = ShopOrder::status_callcenter['approved'];

                $model->configs->options=[
                    'date_deliver'=>[
                        'config'=>[
                            'startDate' => Az::$app->cores->date->dateTime()
                        ]
                    ]
                ];

                $model->columns();

                /** Place Adress Start */

                $place_adress = new PlaceAdress();

//                $place_adress->configs->nameOff = [
//                    'name'
//                ];

                    // pjax 
                $place_adress->configs->changeSave = true;
                $place_adress->configs->container = '#admin-create-pjax';
                $place_adress->configs->changeReload = true;


                $place_adress->columns();


                if ($this->modelSave($place_adress)) {

                    if ($this->modelSave($model)) {

                        $model->place_adress_id = $place_adress->id;
                        $model->configs->rules = [
                            [
                                validatorSafe
                            ]
                        ];
                        $model->save();
                    }

                    /**
                     *
                     * Post save Actions
                     */

                    $this->paramSet(paramIframe, true);

                    /** @var ShopOrder $model */
                    $this->urlRedirect(ZUrl::to([
                        '/shop/admin/shop-order/process',
                        'shop_order_id' => $model->id,
                    ]));
                }

                $active = new Active();
                $active->type = Active::type['vertical'];
                $form = $this->activeBegin($active);

                $isCard = true;

                if ($this->httpGet('spa'))
                    $isCard = false;


                
                echo ZFormBuildWidget::widget([
                    'model' => $place_adress,
                    'form' => $form,
                    'config' => [
                        'topBtn' => false,
                        'botBtn' => false,
                        'stepType' => ZFormBuildWidget::stepType['none'],
                        'blockType' => ZFormBuildWidget::blockType['naked'],
                    ]
                ]);


                

//                echo ZFormBuildWidget::widget([
//                    'model' => $model,
//                    'form' => $form,
//                    'config' => [
//                        'topBtn' => false,
//                        'stepType' => ZFormBuildWidget::stepType['none'],
//                        'blockType' => ZFormBuildWidget::blockType['naked'],
//                    ]
//                ]);

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
