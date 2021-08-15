<?php

use kartik\grid\DataColumn;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\drag\DragFormDb;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetX;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Заказы';
$action->icon = 'fa fa-pie-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



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

    //require Root . '/webhtm/block/navbar/main.php';

    echo ZSessionGrowlWidget::widget();?>

    <!--<div id="rootModal"></div>-->

    <div id="content" class="content-footer p-3">


        <div class="row">


            <!--DynaWidget begin-->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12 col-12">

                        <?

                        $model = new ShopOrder();

                        $model->configs->nameOff = [
                            'contact_phone',
                            'date_deliver'
                        ];

                        $model->configs->after = [
                            'contact_name' => [
                                [
                                    'class' => ZKDataColumn::class,
                                    'label' => Az::l('звонки'),
                                    'width' => '50px',
                                    'value' => function ($model, $key, $index, DataColumn $dataColumn) {


                                        $clickedNumber = $model->contact_phone;

                                        $code = <<<JS
                                        function (event)
                                        {
                                           e.preventDefault(); 
                                          var phoneNumber = document.getElementById("txtPhoneNumber").value = "306";
                                          sipCall("call-audio");
                                           
                                           var currentId = e.currentTarget.parentNode.parentNode.getAttribute("data-key");
                                     
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log(currentId);
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           console.log('currentId');
                                           
                                           /* $.ajax({
                                                type: "GET",
                                                url: '/render/phone/ZSipml5Widget/clean/clean.php',
                                               
                                        
                                                data:{
                                                  currentId: currentId ,
                                                }, 
                                                success: function (data) {
                                                    console.log(data);
                                                }
                                            });*/
                                            
                                            window.currentId = currentId;
                                        
                                        }
JS;

                                        $code = strtr($code, [
                                            '{number}' => $clickedNumber,
                                        ]);


                                        ZSweetAlert2Widget::begin([
                                            
                                            'config' => [
                                                'grapes' => false,
                                                'funcName' => 'dynaSweetCall',
                                                'width' => '60%',
                                                'height' => '100vh',
                                                'begin' => true,
                                                'title' => Az::l('Редактировать'),
                                                'allowOutsideClick' => false,
                                                'showCloseButton' => true,
                                                'footer' => '',
                                                'padding' => '0',
                                            ]
                                        ]);

                                        ?>

                                        <iframe id="myIframe" src=""></iframe>

                                        <?php


                                        ZSweetAlert2Widget::end();

                                        /*Button*/

                                        return ZButtonWidget::widget([

                                            //'id' => 'settings-widget-' . $key,
                                            'config' => [
                                                'title' => Az::l('Звонить'),
                                                'icon' => 'fa fa-phone fa-2x text-success',
                                                'pjax' => 0,
                                                'btnSize' => ZColor::btnSize['btn-sm'],
                                                'btnRounded' => true,
                                                'btn' => true,
                                                'hasIcon' => true,
                                                'btnType' => ZButtonWidget::btnType['button']
                                                

                                            ],
                                            'event' => [
                                                'click' => $code


                                            ]
                                        ]);


                                    }
                                ],
                            ],

                        ];

                        //$this->require(Root );

                        $model->columns();


                        /** @var ZView $this */
                        echo ZDynaWidget::widget([
                            'model' => $model,
                            'config' => [
                                'hasToolbar' => false,
                                'actionButtons' => ['false'],
                                'columnBefore' => ['false'],
                                'columnAfter' => ['false'],

                                'paginationOptions' => [

                                    'defaultPageSize' => 5,

                                ],
                            ]
                        ]);

                        ?>

                    </div>
                </div>

            </div>


            <?php


            ?>


            <!--SIPML5 begin-->

            <div class="col-md-2">

                <?
                echo $this->require( '/render/phone/ZSipml5Widget/clean/iSIPML5Sherzod.php');
                ?>
            </div>

        </div>

    </div>

</div>

<script>


        function cnsllg(key){
                console.log(key.length);
                console.log(key.length);
                console.log(key.length);
                console.log(key.length);
                console.log(key.length);
        }


    
        var tableBtnCall = document.getElementsByClassName('ovr-button');


        for (var i = 0; i < tableBtnCall.length; i++){
            tableBtnCall[i].addEventListener('click', disableBtnAndGetNames);
        }
        //tableBtnCall.addEventListener("click", disableBtn);
        
        function disableBtnAndGetNames() {
        console.log('clicked');
            for (var m = 0; m < tableBtnCall.length; m++){
                tableBtnCall[m].disabled = true;
            };
            var contactName = this.parentElement.previousElementSibling.firstChild.firstElementChild;
            var userName = contactName.parentElement.parentElement.previousElementSibling.firstChild.firstElementChild;
            document.getElementById('userInfo').classList.remove("d-none");
            document.getElementById("contactName").innerHTML = contactName.innerHTML;
            document.getElementById("userName").innerHTML = userName.innerHTML;

            console.log(userName);
        }
        //telefon olingandagi funksiya

        var btnHangUpDiv = document.getElementById('btnHangupDiv');

        tmedia_session_jsep01.onSetRemoteDescriptionSuccess = function (event) {

        tsk_utils_log_info("onSetRemoteDescriptionSuccess");

        var currentId = window.currentId;

        btnHangUpDiv.classList.remove('d-none');

        dynaSweetCall();


        var iframe = $('#myIframe');

        iframe.attr('src', '/agent/xolmat/update.aspx?id=' + currentId)
        iframe.attr('height', '800px')
        iframe.attr('width', '60%')


        console.log('SUCCESS');

        var b = (tmedia_session_jsep01.mozThis || event);
        if (b) {
            if (!b.b_sdp_ro_pending && b.b_sdp_ro_offer) {
                b.o_sdp_lo = null
            }
        }
    };

</script>

<style>
    .main_block .block_item:last-child {
        width: 100%;
    }

    .main_block .or2 {
        padding-top: 0;
    }

    .main_block .block_item:first-child {
        height: auto;
    }
</style>


<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
