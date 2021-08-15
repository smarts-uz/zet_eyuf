 <?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\market\ZFooterAllWidgetOrg;
use zetsoft\widgets\navigat\ZBreadcrumbsWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\page\PageBlocks;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Наши контакты';
$action->icon = 'fa fa-industry';
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
    require Root . '/webhtm/block/header/main.php';
    require Root . '/webhtm/block/navbar/main.php';

    echo ZSessionGrowlWidget::widget();?>

    <div id="content" class="content-footer p-3">




        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 media-category ml-3 mt-3">
                <?
                echo zetsoft\widgets\market\ZMenuWidget::widget([
                    'config' => [
                        'open' => true,
                        'mode' => 'shop'
                    ],
                ]);
                ?>
            </div>
            <div class="col-xl-8 col-lg-8">
                <h1 class="mt-0 p-2"><?= $action->title ?></h1>
                <p class="fp-17 p-2" style="font-family: 'Times New Roman';">город Ташкент, улица Афросиаб 12б. Ориентир метро Ойбек. тел: +998 78 150 8 150 email: info@bozorboy.com</p>
            <div class="row ml-2">
                <a href="https://vk.com/"><i class="fab fa-vk" style="font-size: 30px; color:#0a73bb "></i></a>
                <a href="https://www.facebook.com/" style="margin-left: 7px"><i class="fab fa-facebook-square" style="font-size: 30px; color:#0a73bb"></i></a>
                <a href="https://ok.ru/" style="margin-left: 7px"><i class="fab fa-odnoklassniki-square" style="font-size: 30px; color: orange"></i></a>
                <a href="https://twitter.com/explore" style="margin-left: 7px"><i class="fab fa-twitter-square" style="font-size: 30px; color:#0a73bb "></i></a>
                <a href="https://www.pinterest.com/" style="margin-left: 7px"><i class="fab fa-pinterest-square" style="font-size: 30px; color: red"></i></a>
            </div>
            </div>
        </div>
    </div>

</div>

<? echo ZFooterAllWidgetOrg::widget()?>
<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
