<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\menus\ZMetisMenuWidget;

$action = new WebItem();

$action->title = Azl . 'Категория';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

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
<body class="<?= ZWidget::skin['white-skin'] ?> borderzz">
<?php

$this->beginBody();
require Root . '/webhtm/block/header/main.php';
require Root . '/webhtm/block/navbar/main.php';
?>

<div class="container-fluid bg-white">

    <div class="row py-3">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <?
            echo \zetsoft\widgets\menus\ZMetisMenuWidget::widget([
                'config' => [
                    'MenuOpen' => true,
                    'type' => ZMetisMenuWidget::type['Category'],
                ],
            ]);
            ?>
        </div>


        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row">
                <h3 class="text-center">Наши Компании</h3>
                <div class="col-md-12 d-flex flex-wrap">

                    <?
                    $items = Az::$app->market->product->allCompanies();
                    //vdd($items);
                    foreach ($items as $item) {
                        ?>
                        <div class="col-md-4 d-flex justify-content-center">
                        <?
                        echo $this->require( '/render/cards/ZCompanyCardWidget/ready/main.php', ['product' => $item]);
                        ?>
                        </div>
                        <?
                    }
                    ?>
                </div>
            </div>
        </div>

        
    </div>

    

</div>

<?php $this->endBody() ?>

</body>
</html>

<?php
$this->endPage()
?>



