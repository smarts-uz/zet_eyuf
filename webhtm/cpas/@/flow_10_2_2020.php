<?php

use kartik\grid\DataColumn;
use zetsoft\models\cpas\CpasOffer;
use zetsoft\models\cpas\CpasStream;
use zetsoft\models\cpas\CpasStreamItem;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;



$model = CpasStream::findOne($id);

/** @var ZView $this * */


$viewUrl = ZUrl::to([
    '/cpas/client/viewFlow',
    'id' => $id,
]);

$urlupdate = ZUrl::to([
    '/cpas/admin/updateFlow',
    'id' => $id,
]);

$cloneaction = ZUrl::to([
    '/cpas/admin/action/c',
    'modelClassName' => $model->className,
    'id' => $id,
]);
//webhtm/cpas/blocks/d.php
$delaction = ZUrl::to([
    '/cpas/admin/action/d',
    'modelClassName' => $model->className,
    'id' => $id,
]);

$title = $model->title;
$offer_id = $model->cpas_offer_id;
$offer = CpasOffer::findOne($offer_id);
//vdd($offer);
$offerPhoto = '';
if ($offer)
    $offerPhoto = $offer->photo;

?>

    <div class="card card-flow my-4">
        <div class="card-header card-flow-header">
            <div class="d-flex">
                <h5 class="card-flow-text ml-3"><?= $title?></h5>

                <div class="btn-group ml-auto" role="group">
                    <a href="<?= $viewUrl?>" class="card-flow-btn--link">
                        Просмотр
                    </a>
                    <a href="<?= $urlupdate?>" class="card-flow-btn--edit">
                        <i class="fal fa-pencil"></i>
                    </a>
                    <a href="<?= $cloneaction?>" class="card-flow-btn--copy">
                        <i class="fal fa-copy"></i>
                    </a>
                    <a href="<?= $delaction?>" class="card-flow-btn--trash">
                        <i class="fal fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 px-4 py-2 text-center">

                    <a href="<?= $viewUrl ?>">
                        <img class="rounded img-fluid" style="height: 110px;"
                             src="<?= '/upload/uploaz/' . App . '/CpasOffer/' . 'photo/' . $offer->id . '/' . ZArrayHelper::getValue($offerPhoto, 0)?>"
                             alt="img">
                    </a>

                </div>
                <div class="col-md-9">
                    <?

                    $items = CpasStreamItem::find()
                        ->where([
                            'cpas_stream_id' => $id
                            ])
                        ->limit(10)
                        ->all();
                    //vd($items);
                    ?>

                    <table class="table table-hover text-center table-borderless">
                        <thead>
                        <th><?= Az::l('Название')?></th>
                        <th><?= Az::l('Трекинг ссылка')?></th>
                        </thead>
                        <tbody class="text-dark font-weight-bold">
                        <?php
                        foreach ($items as $item)
                        {
                            $url = $item->track;
                            $button =  ZButtonWidget::widget([
                                'config' => [
                                    'url' => $url,
                                    'title' => Az::l('Трекинг ссылка'),
                                    'hasIcon' => true,
                                    'isPjax' => false,
                                    'pjax' => false,
                                    'icon' => 'fal fa-external-link',
                                    'btn' => false,
                                    'target' => ZButtonWidget::target['_blank'],
                                ]
                            ]);
                            ?>
                            <tr>
                                <th class="text-dark"><?= $item->title?></th>
                                <td><?= $button?></td>
                            </tr>
                            <?php
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


