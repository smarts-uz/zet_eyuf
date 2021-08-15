<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;


/** @var ZView $this */


/**
 *
 * Action Params
 * @license  MurodovMirbosit
 */

$action = new WebItem();

$action->title = Azl . 'Новый заказ';
$action->icon = 'fa fa-line-chart';
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

    //require Root . '/webhtm/block/metas/mainM.php';
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

    <?php

    if (!$this->httpGet('spa'))
        require Root . '/webhtm/block/navbar/main.php';

    echo ZSessionGrowlWidget::widget(); ?>

    <div id="content" class="content-footer p-3 ">
        <h3 class="font-family">Личная информация</h3>
        <div class="row border rounded mx-auto">
            <div class="col-md-6 col-6 ">

                <?

                $id = $this->userIdentity()->id;

                $model = User::findOne($id);


                if ($model === null)
                    return $this->urlRedirect('/core/user/user-auth/login-register.aspx');

                $model->configs->nameAuto = false;

                $model->columns();

                $model->configs->widget = [
                    'gender' => ZKSelect2Widget::class,
                ];
                
                $model->cards = [
                    [
                        'title' => Az::l('Первый этап'),
                        'shows' => true,
                        'items' => [
                            [
                                'title' => Az::l('Форма'),
                                'shows' => true,
                                'items' => [
                                    [
                                        'name',
                                        'gender',
                                    ],
                                    [
                                        'lastseen',
                                        'phone',
                                    ],
                                    [
                                        'contact',
                                        'email',
                                    ],
                                    [
                                        'social',

                                    ]
                                ],
                            ],
                        ],
                    ],
                ];
                $model->columns();


                $active = new Active();

                $active->type = Active::type['vertical'];
                $form = $this->activeBegin($active);


                echo ZFormBuildWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'topBtn' => false,
                        'botBtn' => false,

                        'stepType' => ZFormBuildWidget::stepType['none'],
                        'blockType' => ZFormBuildWidget::blockType['naked'],
                    ]
                ]);

                ?>

            </div>
            <div class="col-md-6 col-6 ">

                <?

                $model->cards = [
                    [
                        'title' => Az::l('Первый этап'),
                        'shows' => true,
                        'items' => [
                            [
                                'title' => Az::l('Форма'),
                                'shows' => true,
                                'items' => [
                                    [
                                        'photo',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ];
                $model->columns();

                if ($this->modelSave($model)) {
                    $this->urlGetBack();
                }

                $model1 = User::findOne($id);

                $model1->configs->nameAuto = false;
                $model1->configs->nameOff = [
                    'role',
                    'name',
                    'gender',
                    'lastseen',
                    'phone',
                    'contact',
                    'email',
                    'social',
                ];

                $model->columns();

                echo ZFormBuildWidget::widget([
                    'model' => $model1,
                    'form' => $form,
                    'config' => [
                        'topBtn' => false,
                        'stepType' => ZFormBuildWidget::stepType['none'],
                        'blockType' => ZFormBuildWidget::blockType['naked'],
                        'btnClass' => 'border-0 rounded success-color white-text',
                        'btnStyle' => '',
                    ]
                ]);

                $this->activeEnd();

                ?>

            </div>
        </div>
    </div>
</div>

<?php
echo $this->require('/webhtm/block/SingleProduct/footer.php');

$this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
