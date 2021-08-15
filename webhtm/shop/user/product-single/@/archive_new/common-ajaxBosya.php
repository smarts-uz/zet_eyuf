<?php

use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\shop\MultiProductItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\former\shop\ShopCompanyCardForm;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidgetAz;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxGroupWidgetM;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZView;
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

$product_id = $this->httpGet('id');

if ($product_id === null) {
    echo Az::l('Вам нужно перейти на эту страницу, выбрав определенный продукт. Пожалуйста, выберите продукт обратно на главную страницу.');
    return null;
}

/** @var ProductItem[] $product */

$product = Az::$app->market->product->product($product_id, null, true);

if ($product === null) {
    echo Az::l('В настоящее время невозможно отобразить информацию об этом продукте. Пожалуйста, вернитесь на домашнюю страницу и попробуйте выбрать продукт снова.');
    return null;
}

/** @var ZView $this */

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

require Root . '/webhtm/block/header/main.php';
require Root . '/webhtm/block/navbar/main.php';


echo $this->require( '/render/market/ZYandexSingleProductHeaderWidget/ready/single-product-header.php', [
    'product_id' => $product_id ?? ''
]);

echo $this->require( '/webhtm/shop/user/product-single/block/yandexTab.php', [
    'id' => $product_id,
    'type' => 'product'
]);


?>
<div class="row">

    <div class="col-md-12">

        <div class="card-title">

            <div class="row p-1">

                <div class="col-4">

                    <?php

                    echo $this->require( '/render/cards/ZZoomWidget/ready/zoom.php', [
                        'product' => $product
                    ])

                    ?>

                </div>

                <div class="row">


                    <div class="col-6">

                        <h5 class="text-left">
                        <?=Az::l('Коротко о товаре')?>
                        </h5>

                        <ul class="pl-4 mb-0">
                            <?
                            $count = 0;
                            foreach ($product->properties as $key => $value):

                                ?>

                                <li class="font-weight-normal text-muted fp-16">
                                    <?= $value->name . ' - ';
                                    echo implode(', ', $value->items);
                                    ?>
                                </li>

                            <? endforeach; ?>
                        </ul>
                        <a href="<?= $product->categoryUrl ?>">
                            <div style='height: 50px; background-image: url("<?= $product->brandImage ?>"); background-size: contain; background-repeat: no-repeat'
                                 class="brand-image"></div>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="font-weight-normal fp-20">Популярные предложения из магазинов</div>
                    <div id="market">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

echo $this->require( '/webhtm/block/SingleProduct/footer.php');
?>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
