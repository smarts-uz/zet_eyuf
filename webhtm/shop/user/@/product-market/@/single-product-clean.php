﻿<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Главная страница';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;

$action->cache = false;

$action->call = [
//    TagDependency::invalidate()
];
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$item = new ProductItem();

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

<?
$this->beginBody();


require Root . '/webhtm/block/header/main.php';
require Root . '/webhtm/block/navbar/main.php';
//require Root . '/render/menus/ZSidebarWidget/ZSidebarClean.php';

$product_id = $this->httpGet('id');

$reviews = Az::$app->market->review->getReviewByProductId($product_id);
$reviewItem = '';
foreach ($reviews as $review) {
    $reviewItem = $review;
}


/** @var ProductItem[] $product */
$product = Az::$app->market->product->product($product_id);

Az::$app->market->wish->writeViewed($product_id);

?>

<div class="container-fluid bg-white">
    <div class="row py-5">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row ">
                <div class="col-md-6 col-xl-6 col-sm-12 px-3">
                    <?=
                    $this->require( '/webhtm/block/SingleProduct/category_menu.php');
                    ?>
                </div>
                <div class="col-md-6 col-xl-6 col-sm-12 ">
                    <div class="d-flex justify-content-center px-5">
                        <?= $this->require( '/webhtm/block/SingleProduct/imageZoom.php') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row mb-2">
                <div class="col-md-6 col-xl-6 col-sm-12 ">
                    <div class="row px-3">
                        <div class="col-md-12">
                            <h6 class="text-uppercase text-left font-weight-bold fp-20"><?php echo $product->name ?></h6>
                        </div>
                        <div class="col-md-12">
                            <?
                            echo $this->require( '/webhtm/block/SingleProduct/stars.php', ['product' => $product]);
                            ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <?
                            echo $this->require( '/webhtm/block/SingleProduct/properties.php', ['product' => $product]);
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 col-sm-12 px-2">

                    <div class="d-flex justify-content-center flex-column" id="market_list">
                        <h1 class="bold fp-30 text-center"> <?= Azl . 'Цены в магазинах' ?></h1>
                    </div>
                    <div class="d-flex justify-content-center align-items-center ">
                        <?
                        echo $this->require( '/webhtm/block/SingleProduct/slim.php', ['product' => $product]);
                        ?>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 my-2 col-md-12">
            <?
            echo $this->require( '/webhtm/block/SingleProduct/tabItem.php', ['product' => $product, 'reviews' => $reviews])
            ?>
        </div>
    </div>
</div>
<div>
    <?=
    $this->require( '/webhtm/block/SingleProduct/footer.php');
    ?>
</div>

<script>
    window.onload = () => {
        let temp = "<div class='text-danger text-center ' id='market-alert'>Для начала необходимо выбрать свойства продукта</div>";
        $('#market_list').append(temp);
        //loadData();
        console.log(temp);
    };

    let radioBtns = document.querySelectorAll('input[type="radio"]');
    radioBtns.forEach(item => {
        item.addEventListener('click', (event) => {
            loadData();
        })
    });

    function loadData() {
        $.ajax({
            url: '/core/product/getCompany_s_sh.aspx',
            type: 'GET',
            data: $("#formModal").serialize(),
            success: function (data) {
                $('#market-alert').remove();
                $('.data').html(data);
                $('.market-company').removeClass('d-none');
                $('.data').addClass('d-none');
                setTimeout(function () {
                    $('.market-company').addClass('d-none');
                    $('.data').removeClass('d-none');
                }, 3000)

                console.log(data);
            },
            error: function (e) {
                console.log(e);
            }

        });
    }


</script>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
