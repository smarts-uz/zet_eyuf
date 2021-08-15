<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopOrder;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZInflector;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\ware\WareEnter;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Новое поступление товаров в склад';
$action->icon = 'fal fa-film';
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
    /*    if (!$this->httpGet('spa')) {
            require Root . '/webhtm/block/navbar/mainAdmin.php';
            require Root . '/webhtm/block/menu/menu-m_old.php';
        }*/

    echo ZSessionGrowlWidget::widget(); ?>

    <div id="content" class="content-footer p-3">

        <div class="row">
            <div class="mx-auto col-md-11 col-11">

                <?

                $id = $this->httpGet('id');

                $modelClass = $this->bootFullUrl();

                /** @var ZActiveRecord $modelClass */
                $model = $modelClass::findOne($id);

                $userid = $this->userIdentity()->id;
                $class = $model->className;
                $action = $this->urlArrayStr;

                $sessionKey = "Cancel-$class-$action-$userid";

                $this->paramSet(paramChangeReloadId, 'crud-create-pjax');
                
                $request = Az::$app->request;
                if (!$request->isAjax && !$request->isPost)
                    $this->sessionSet($sessionKey, $model->attributes);

       /*         $model->configs->changeSave = true;*/

                $model->columns();

                if ($this->modelSave($model)) {

                    $this->sessionDel($sessionKey);

                    $this->paramSet(paramIframe, true);
                    $this->urlRedirect([
                        '/' . $this->prelastUrl() . '/index'
                    ]);

                }

                
                $active = new Active();
                $active->method = Active::method['post'];
                $active->type = Active::type['vertical'];
                $active->childClass = 'my-3';

                $form = $this->activeBegin($active);


                $this->pjaxBegin(function (ZPjax $pjax) {
                    $pjax->id = 'crud-create-pjax';
                    return $pjax;
                });

                echo ZFormBuildWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'topBtn' => true,
                        'botBtn' => true,
                        'stepType' => ZFormBuildWidget::stepType['none'],
                        'blockType' => ZFormBuildWidget::blockType['naked']
                    ]
                ]);
                $this->pjaxEnd();
                $this->activeEnd();


                ?>

            </div>
        </div>


    </div>

</div>

<?
/*if (!$this->httpGet('spa'))
    require(Root . '/webhtm/block\footer\mplace\footerAll.php')*/

?>


<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
