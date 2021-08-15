<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopBrand;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Бренды';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;

$action->cache = false;

$action->call = false;
$action->cacheHttp = false;

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

    /*require Root . '/webhtm/block/navbar/mainAdmin.php';
    require Root . '/webhtm/block/menu/menu-m.php';*/

    require Root . '/webhtm/block/navbar/admin.php';
    require Root . '/webhtm/block/menu/menu-m-j.php';

    echo ZSessionGrowlWidget::widget();?>
    <nav id="menu"></nav>
    <div id="page">
    <div id="content" class="content-footer p-3">


        <div class="row">
            <div class="col-md-12">

                <?

                //$model = new ShopBrand();

                /** @var ZView $this */
                /*echo ZDynaWidget::widget([
                    'model' => $model,
                    'config' => [
                      
                    ],
                ]);*/

                ?>

            </div>



        </div>
        <?php

        ?>

    </div>

</div>


<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
