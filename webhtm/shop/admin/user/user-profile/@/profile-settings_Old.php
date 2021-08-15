<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\core\WebItem;
use zetsoft\former\auth\AuthPassChangeForm;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\navigat\ZButtonIconsWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\user\User;


/** @var ZView $this */



/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Создание Пользователь';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;




$pass = new AuthPassChangeForm();

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

    $this->require ( Root . '/webhtm/block/metas/main.php');
    $this->require ( Root . '/webhtm/block/assets/main.php');

    $this->head();

    ?>

</head>
<style>-->
    input {
        border-bottom: none !important;
    }

    .font-family {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>


<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

echo ZNProgressWidget::widget([]);



require Root . '/webhtm/block/header/main.php';
require Root . '/webhtm/block/navbar/main.php';


?>

<div id="page">
    <div id="content" class="content-footer p-3">

        <div class="container-fluid">
            <?

            $id = $this->userIdentity()->id;
            //vdd($id);

            //  $id = $this->httpGet('id');

            if ($id === null)
                $id = 1;

            if ($this->userIsGuest()) {
                $user = new User;

                $user->id = 1;
                $user->code = 1;
                $user->name = 'Farrukh';
                $user->password = '1234';
                $user->role = 'Admin';
                $user->gender = 'male';
                $user->lang = 'Uz';
                $user->phone = '+999992121';
                $user->number = '2';
                $user->email = 'sample@gmail.com';
                $user->website = 'sample.uz';
                $user->photo = [];
                $user->status = 'active';
                $user->lastseen = 'дата рождения';
                $user->blocked = false;
                /*$user->verify_code = ;
                $user->verified_email = ;
                $user->auth_key = ;
                $user->oauth = ;
                $user->oauth_type = ;
                $user->user_company_id = ;
                $user->place_adress_ids = ;
                $user->created_at = ;
                $user->modified_at = ;
                $user->created_by = ;
                $user->modified_by = ;*/

                $model = $user;
            }else {

                $model = User::findOne($id);
                $model->configs->nameAuto = false;
                $model->columns();
            }
//            vdd($model);

            if ($this->modelSave($model)) {
                //$this->modelPost();

                /**
                 *
                 * Post save Actions
                 */
                /*
                                 */
                $this->urlRedirect($this->urlGetBack());
            }


            $active = new Active();
            //$active->class = 'row';

            $form = $this->activeBegin($active);

            ?>
            <div class="row">
                <div class="col-12 border rounded">

                    <div class="row p-1 ">
                        <div class="col-md-6 px-3">
                            <!--                            <h3 class="text-muted">Lichnie informatsiya</h3>-->

                            <h3 class="font-family ">Личная информация</h3>

                            <div class="row">
                                <div class="col-12 ">

                                    <div class="col-md-12 mt-2 border h-75 rounded">
                                        <?
                                          
                                        $model->configs->nameOn = [
                                            'name',
                                        ];

                                        $model->columns();


                                        echo ZFormWidget::widget([
                                            'model' => $model,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,

                                            ]
                                        ]);


                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-5">
                                <div class="col-md-6">
                                    <h5>Пол</h5>
                                    <?

                                    $model->configs->nameOn = [
                                        'lang',
                                    ];

                                    $model->columns();


                                    echo ZKSelect2Widget::widget([
                                        'model' => $model,
                                        'attribute' => 'attribute',
                                        'data' => [
                                            'men' => Az::l('Мужской'),
                                            'women' => Az::l('Женский'),
                                        ],
                                        'config' => [
                                            'theme' => ZKSelect2Widget::theme['bootstrap'],
                                            'size' => ZKSelect2Widget::size['md'],
                                            'placeholder' => 'Пол',
                                        ]
                                    ]);

                                    ?>

                                </div>
                                <div class="col-md-6">
                                    <h5>Дата рождения</h5>

                                        <?

                                        $model->configs->nameOn = [
                                            'lastseen',
                                        ];

                                        $model->columns();


                                        echo ZFormWidget::widget([
                                            'model' => $model,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,
                                            ]
                                        ]);

                                        ?>
                                </div>
                            </div>
                            <h4>Контактная информация</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Телефон</h5>
                                    <div class="border rounded">
                                        <?

                                        $model->configs->nameOn = [
                                            'phone',
                                            'contact',

                                        ];
                                        $model->columns();

                                        echo ZFormWidget::widget([
                                            'model' => $model,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,
                                            ]
                                        ]);


                                        ?>
                                    </div>





                                </div>
                                <div class="col-md-6">
                                    <h5>Электронная почта</h5>
                                    <div class="border rounded p-0 pl-2">
                                        <?

                                        $model->configs->nameOn = [
                                            'email',

                                        ];
                                        $model->columns();

                                        echo ZFormWidget::widget([
                                            'model' => $model,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,
                                            ]
                                        ]);


                                        ?>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 p-2 ">
                            <h3>Фото профиля</h3>
                            <?

                            $model->configs->nameOn = [
                                'photo',
                            ];
                            $model->columns();

                            echo ZFormWidget::widget([
                                'model' => $model,
                                'form' => $form,
                                'config' => [
                                    'botBtn' => false,
                                    'topBtn' => false,
                                ]
                            ]);

                            ?>
                            <div class="d-flex
                            pb-2 justify-content-end">
                                <?
                                echo ZButtonWidget::widget([
                                    'config' => [
                                        'text' => 'Сохранить',
                                        'btnType' => 'submit',
                                        'class' => 'border-0 rounded success-color white-text',
                                    ],
                                ]);
                                ?>
                            </div>
                        </div>

                    </div>

              
                    
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<?php
                        $this->activeEnd();

echo $this->require( '/webhtm/block/SingleProduct/footer.php');
$this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
