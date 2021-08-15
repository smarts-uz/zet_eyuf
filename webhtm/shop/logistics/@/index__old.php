<?php

use kartik\builder\Form;
use yii\data\Pagination;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\maps\MapsTrack;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZFormWidgetJ;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopShipment;
use yii\widgets\LinkPager;



/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();
//Отслеживание товаров

$action->title = Azl . 'Отслеживание товаров';
$action->icon = 'fa fa-wifi';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
$items = Az::$app->forms->modelz->data();
vd("hhhhhhhhhhhhh");
//vd($coors = Az::$app->market->wares->coordinatesTarget(31));
vd($coors1 = Az::$app->market->wares->coordinates(14));


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

require Root . '/webhtm/block/header/main.php';
echo ZMmenuWidget::widget([
    //'data' => $this->cores->menus->create('mmenu'),
    'config' => [
        'theme' => 'white',
        'content.img.width' => 230,
        'iconbar.top' => [
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
        ],
        'iconbar.bottom' => [
            "<a href='#/'><i class='fa fa-home'></i>aa</a>",
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
        ],
        'all.border' => ZMmenuWidget::border['border-full'],
        'menu-effect-slide' => true,
    ],
]);
?>

<div id="page">

    <!---->

    <div id="content" class="content-footer p-3">




        <div class="row">
            <div class="col-md-12">

                <?
                $model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
                $items = Az::$app->forms->modelz->data();
                /*
                  $model = new MapsTrack();

                /** @var ZView $this */
               /* echo ZDynaWidget::widget([
                    'model' => $model,
                ]);   */

                echo ZFormWidgetJ::widget([
                    'model' => $model,
                    
                    'rows' => [
                        [
                            'attributes' => [

                                'jsonb_6' => [
                                    'type' => Form::INPUT_WIDGET,
                                    'widgetClass' => \zetsoft\widgets\places\ZGoogleZoirNavigation::className(),
                                    'options' => [
                                        'config' => [
                                            'data' => [3,16],
                                           /* 'data' => file_get_contents("/api/core/app/service.aspx?namespace=market&service=wares&method=coordinates&args=24"),     */
                                            'height'                 => 500,
                                            'width'                  => 800,
                                            'searchAutoComplete'     => true,
                                            'searchPlaceImageShow'   => false,
                                            'zoom'                   => 12,
                                            'markerCount'            => 5,
                                            'limitWayPoints' => 10,
                                            'draggable' => true,
                                            'mapUseType' => 'read',
                                            'depend' => 'coreinput-string_9',
                                        ]
                                    ]
                                ],
                            ]
                        ],



                    ],

                ]);

                ?>

            </div>
        </div>


    </div>

</div>

<?
 require Root . '\webhtm\block\footer\footerAdmin.php'
?>
<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
