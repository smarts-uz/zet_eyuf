<?php


use zetsoft\system\kernels\ZView;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\serice\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
use zetsoft\system\kernels\ZWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Описание';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;

$action->cache = false;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php
    require Root . '/webhtm/block/metas/main.php';
    require Root . '/webhtm/block/assets/main.php';
    $this->fileCss('/render/asrorz/css/loader.css');

    $this->head();
    ?>
</head>
<body class="<?= ZWidget::skin['white-skin'] ?>">
<?php
$this->beginBody();
require Root . '/webhtm/block/header/mainM.php';
require Root . '/webhtm/block/navbar/main.php';

$product_id = $this->httpGet('id');
$get = $this->httpGet();
$productId = ZArrayHelper::getValue($get, 'product_id');

/** @var ProductItem[] $product */
Az::$app->market->wish->writeViewed($product_id);

$product = Az::$app->market->product->product($product_id, null, true);

//vdd($product);
?>

<div class="container-fluid">

    <?

    if (empty($product_id && $product)) {
        echo $this->require( '/render/market/NotFound/main.php',/* ['item' => $item]*/);
    } else {
        echo $this->require( '/render/market/ZYandexSingleProductHeaderWidget/ready/single-product-header.php', [
            'product_id' => $product_id ?? ''
        ]);

        echo $this->require( '/webhtm/shop/user/product-single/block/yandexTab.php', [
            'id' => $product_id,
            'type' => 'product'
        ]);

        if (empty($product_id)) {
            $item = "К сожалению, данные отсутствуют";
            echo $this->require( '/render/market/NotFound/main.php', ['item' => $item]);
        }
        ?>

      <div id="content" class="content-footer p-3">
        <div class="row">
          <div class="col-md-12">
            <div class="card-title">
              <div class="row p-1">
                <div class="col-lg-4 col-sm-12 pt-3">
                    <?php

                    /*
                     * Oddiy zoom
                     *
                     * if (!empty($product))
                        echo $this->require( '/render/cards/ZZoomWidget/clean/behruz_zoom.php', [
                            'data' => $product->images
                        ]);*/

                    /*
                     * Galereyali Zoom
                     *
                     * */
                    if (!empty($product))
                        echo ZZoomWpWidget::widget([
                            'data' => $product->images,
                            'config' => [
                                'width' => '50px',
                                'height' => '50px'
                            ]
                        ]);
                    ?>
                </div>
                <div class="col-lg-8 col-sm-12">
                  <div class="row">
                    <div class="col-md-8 col-sm-12 my-3 overflow-hidden">
                      <div class="fp-26 text-center"><?= Az::l('Свойства товара'); ?></div>
                        <?

                        if (!empty($product->properties)) {
                            echo $this->require( '/webhtm/shop/user/product-single/block/components/PropertyCheckbox.php', [
                                'product' => $product,
                                'get' => $get
                            ]);


                        } else {
                            ?>
                          <div class="d-flex flex-column align-items-center mt-5">
                            <div class="d-flex justify-content-center">
                              <i class="fas fa-shopping-basket fa-7x text-light mb-4"></i>
                            </div>
                            <div class="fp-20 d-flex justify-content-center text-muted">
                                <?= Az::l('Свойства товара отсутствуют') ?>
                            </div>
                          </div>
                            <?= $this->require( '/webhtm/shop/user/product-single/block/components/PropertyCheckbox.php', ['product' => $product, 'get' => $get,]);
                        } ?>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                      <div class="fp-26 d-flex justify-content-center">
                          <?php echo Az::l('Коротко о товаре'); ?>

                      </div>
                        <?

                        if (!empty($product->properties)) {
                            ?>

                          <ul class="my-3 mx-3 p-0">
                              <?
                              $count = 0;
                              foreach ($product->properties as $key => $value):

                                  ?>

                                <li class="fp-16">
                                    <?= $value->name . ' - ';
                                    echo implode(', ', $value->items);
                                    ?>
                                </li>

                              <? endforeach; ?>
                          </ul>
                            <?
                        } else {
                            ?>
                          <div class="d-flex flex-column align-items-center mt-5">
                            <div class="d-flex justify-content-center"><i
                                class="fas fa-info-circle fa-7x text-light mb-4"></i></div>
                            <div class="fp-16 d-flex justify-content-center text-muted">

                                <?= Az::l('Информация о
                                                    товаре отсутствует'); ?>
                            </div>
                          </div>
                            <?
                        }
                        ?>
                    </div>
                  </div>
                </div>
                <div class="col-12 my-2 text-center">
                  <div class="font-weight-normal h3 my-3">
                      <?= Az::l('Популярные предложения магазинов'); ?></div>

                  <div id="market" class="d-flex flex-wrap text-muted"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <? } ?>
</div>
<script>
$(document).ready(function () {
  $.ajax({
    method: 'POST',
    url: '/core/product/getCompanyD.aspx',
    data: $('#formModal').serialize(),
    beforeSend: function () {
      $('.lds-roller').show();
    },
    success: function (response) {
      $('#market').html(response);
    }
  });
});


</script>
<?php
/*echo $this->require( '/webhtm/block/footer/mainNew.php');*/
$this->endBody()
?>
</body>
</html>
<?php $this->endPage() ?>
<script>
$('.lds-roller').hide()
</script>

