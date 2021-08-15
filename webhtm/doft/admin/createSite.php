<?php

use FontLib\Table\Type\name;
use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\cpas\CpasOffer;
use zetsoft\models\cpas\CpasOfferItem;
use zetsoft\models\cpas\CpasLand;
use zetsoft\models\cpas\CpasStream;
use zetsoft\models\cpas\CpasWidgets;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopBrand;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZCheckDependWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetactioncolor;
use zetsoft\widgets\former\ZDynaWidgetbackup_2020_07_02;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\navigat\ZBreadcrumbsWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\navigat\ZDownloadWidget;
use function GuzzleHttp\Psr7\str;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Создание Сайт';
$action->icon = 'fa fa-globe';
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

require Root . '/webhtm/block/navbar/mainArbit.php';;


echo ZNProgressWidget::widget([]);

echo ZNProgressWidget::widget([]);


//$sit = $this->httpPost('sites');

?>

<div id="page">

    <?

    echo ZSessionGrowlWidget::widget();?>
    <div class="container-fluid bg-light">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <?
                    $form = $this->activeBegin();
                    $model = new CpasLand();
                    $model->configs->hasLabel = true;
                    $model->configs->nameOff = [
                        'name'
                    ];
                    $model->columns();
                    $this->modelSave($model);
                    echo ZFormBuildWidget::widget([
                        'model' => $model,
                        'form' => $form,
                        'config' => [
                            'stepType' => ZFormBuildWidget::stepType['none'],
                            'blockType' => ZFormBuildWidget::blockType['card'],
                            'stepOptions' => [],
                            'blockOptions' => [
                                'config' => [
                                    'headerColor' => ZColor::color['green-special'],
                                    'classHeadColor' => 'bg-white text-dark px-3 pb-3',
                                ]
                            ],
                            'isStepsVertical' => false,
                            'topBtn' => false,
                            'botBtn' => true,
                            'btnTitle' => null,
                            'isCard' => true,
                            'btnClass' => '',
                            'btnStyle' => ZButtonWidget::btnStyle['btn-outline-default'],
                        ]
                    ]);
                    $this->activeEnd();
                    $url = ZUrl::to([
                        '/cpas/admin/offer',
                    ]);
                    if ($this->modelSave($model)) {
                        $path = Root . '/upload/uploaz/cpas/' . $model->className . '/path/' . $model->id . '/' . ZArrayHelper::getValue($model->path,0);

                        $topath = Root . '/render/cpanet/' . CpasOffer::findOne(CpasOfferItem::findOne($model->cpas_offer_item_id)->cpas_offer_id)->title . '/' . PlaceCountry::findOne(CpasOfferItem::findOne($model->cpas_offer_item_id)->place_country_id)->alpha2 . '/' . $model->type;

                        Az::$app->office->zipArchive->unzip($path, $topath);

//                        Az::$app->office->zipArchive->replase($topath.'/call.php', $model->id);


                        return $this->urlRedirect($url);
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
<?php $this->endPage() ?>
