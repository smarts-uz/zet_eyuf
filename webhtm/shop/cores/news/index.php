<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\news\News;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZInstantclickWidget;
use yii\data\ActiveDataProvider;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\navigat\ZNewsCardWidget;
use zetsoft\widgets\navigat\ZNewsCardWidget_Axror;
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Новости';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;



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
<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

require Root . '/webhtm/block/header/main.php';
require Root . '/webhtm/block/navbar/main.php';

ZCardWidget::begin([
    'config' => [
        'title' => $this->title,
        'type' => ZCardWidget::type['dynCard'],
    ]
]);
?>
<!--<div class="container-fluid">-->
<div class="row ml-1 mr-2">
    <div class="col-lg-7">
        <div class="row shadow">
        <div class="col-12 mb-3">
            <?php

            $news = News::find()
                ->all();

            $text = null;
            foreach ($news as $new) {
                if ($text === null)
                    $text = $new;
            }

            echo ZNewsCardWidget::widget([
                'config' => [
                    'type' => ZNewsCardWidget::type['three'],
                    'id' => $text->id,
                    'title' => $text->text,
                    'imgUrl' => '/uploaz/eyuf/corenews/news/' . $text->id . '/' . ZArrayHelper::getValue($text->image, 0),
                    'subTitle' => $text->name,
                    'time' => $text->created_at,
                ]
            ]);
            ?>
        </div>
        </div>

        <?

        $centers = News::find()
            ->where([
                'position' => 'center'
            ])
            ->all();

        foreach ($centers as $center) {


            echo ZNewsCardWidget::widget([
                'config' => [
                    'type' => ZNewsCardWidget::type['one'],
                    'id' => $center->id,
                    'title' => $center->text,
                    'imgUrl' => '/uploaz/eyuf/corenews/news/' . $center->id . '/' . ZArrayHelper::getValue($center->image, 0),
                    'subTitle' => $center->name,
                    'time' => $center->created_at,
                ]
            ]);

        }

        ?>
    </div>


    <div class="col-lg-5">
        <div class="row">

            <?php
            $text = News::find()
                ->where([
                    'position' => 'right'
                ])
                ->all();

            foreach ($text as $t) {
                ?>

                <div class="col-12 px-0">
                    <?php
                    echo ZNewsCardWidget::widget([
                        'config' => [
                            'id' => $t->id,
                            'type' => ZNewsCardWidget::type['two'],
                            'title' => $t->name,
                            'imgUrl' => '/uploaz/eyuf/corenews/news/' . $t->id . '/' . ZArrayHelper::getValue($t->image, 0),
                            'time' => $t->created_at,
                            'text' => $t->title,
                        ]
                    ]);
                    ?>

                </div>
                <?
            }
            ?>
        </div>
    </div>
</div>
<?
ZCardWidget::end();

echo ZInstantclickWidget::widget();
?>
<?= ZFooterAllWidget::widget(); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>













