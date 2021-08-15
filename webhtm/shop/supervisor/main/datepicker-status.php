<?php

use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckDependWidget;
use zetsoft\widgets\former\ZDynaCheckWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZDropDownListWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetX;
use zetsoft\widgets\navigat\ZButtonWidget;


?>


<div class="d-flex flex-wrap">

    <div>
        <?php
        /** @var ZView $this */
        $startRange = $this->sessionGet('rangeDatePeriod');
        $form = $this->ajaxBegin();
        $app = new ALLApp();

        $column = new Form();
        $column->dbType = dbTypeDate;
        $column->widget = ZHHiddenInputWidget::class;
        $app->columns['start'] = $column;

        $column = new Form();
        $column->dbType = dbTypeDate;
        $column->widget = ZHHiddenInputWidget::class;
        $app->columns['end'] = $column;

        $column = new Form();
        $column->title = 'form_id';
        $column->widget = ZPeriodPickerWidgetX::class;
        $column->options = [
            'config' => [
                'timepicker' => true,
            ],
            'value' => $startRange,
        ];


        $app->columns['period'] = $column;

        $column = new Form();
        $column->title = Az::l('Статусы колл центра');
        $column->widget = ZKSelect2Widget::class;
        //$column->data = (new ShopOrder())->_status_callcenter;
        $column->data = [
            'safasd',
            'safasd',
        ];

        $app->columns['status'] = $column;

        $model_d = Az::$app->forms->former->model($app);

        $model_d->configs->hasLabel = true;

        $model = new ShopOrder();
        $users = [];
        $operators = Az::$app->market->operator->getUserByRole('agent');


        $firstSelect = null;
        if (!empty($operators)) {
            $firstSelect = $operators[0]['id'];

            foreach ($operators as $operator)
                $users[$operator['id']] = $operator['title'];

        } else {
            echo '<span class="pl-3">' . Az::l("operators are not fount") . '</span>';
        }

        echo ZFormBuildWidget::widget([
            'model' => $model_d,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ],
        ]);
        ?>
    </div>
    <div>
        <?php
        echo ZButtonWidget::widget([
            'config' => [
                'text' => Az::l('Фильтровать'),
                'btnType' => ZButtonWidget::btnType['submit'],
                'btnRounded' => false,
                'btnStyle' => 'text-success',
                'btnSize' => 'btn-ml',
                'class' => 'p-1 pl-3 pr-3',

            ]
        ]); ?>
        <?php
        echo ZButtonWidget::widget([
            'config' => [
                'text' => Az::l('Очистить фильтр'),
                'btnType' => ZButtonWidget::btnType['button'],
                'btnRounded' => false,
                'btnStyle' => 'text-info',
                'btnSize' => 'btn-ml',
                'class' => 'p-1 pl-3 pr-3',
            ],
            'event' => [
                'click' => <<<JS
                                              
                                  
                                        function() {
        
                                                $.ajax({
                                                    type: 'POST',
                                                    url: '/core/product/rangeClear.aspx',
           
                                                    success: function (response) {
                                                        location.reload();
                                                    },
                                                });
                                            
                                        }
        JS
            ],
        ]);
        $this->ajaxEnd(); ?>

    </div>
    <div class="d-flex">


        <?php

        echo '<div class="ml-2">' . ZDynaCheckWidget::widget([

                'config' => [
                    'inputAttr' => 'operator',
                    'attr' => 'status_callcenter',
                    'value' => 'ring',
                    //'class' => 'simple-Report',
                    'url' => ZUrl::to([
                        '/api/core/app/check-new',
                        'modelClassName' => $model->className,
                    ]),
                    'widgetClass' => ZDropDownListWidget::class,
                    'widgetOptions' => [
                        'data' => $users,
                        'id' => 'operator-dropdown',
                        'config' => [
                            'class' => 'form-control d-block'
                        ],
                    ],

                    'modelClassName' => $model->className,
                    'btnOptions' => [
                        'config' => [
                            'text' => Az::l('На исполнения'),
                            'btnType' => ZButtonWidget::btnType['button'],
                            'btnRounded' => false,
                            'btnStyle' => 'text-info',
                            'btnSize' => 'btn-ml',
                            'class' => 'p-1'
                        ]
                    ]
                ]
            ]) . '</div>';
        echo '<div class="ml-5">' . ZCheckDependWidget::widget([

                'config' => [
                    'attr' => 'status_callcenter',
                    'value' => 'autodial',
                    'dependId' => 'operator-dropdown',
                    'dependAttr' => 'operator',
                    'url' => ZUrl::to([
                        '/api/core/app/check-new',
                        'modelClassName' => $model->className,
                    ]),
                    'widgetClass' => ZDropDownListWidget::class,
                    'widgetOptions' => [
                        'data' => $users,
                        'config' => [
                            'class' => 'form-control w-25'
                        ],
                    ],

                    'modelClassName' => $model->className,
                    'btnOptions' => [
                        'config' => [
                            'text' => Az::l('Автообзвон'),
                            'btnType' => ZButtonWidget::btnType['button'],
                            'btnRounded' => false,
                            'btnStyle' => 'text-success',
                            'btnSize' => 'btn-ml',
                            'class' => 'p-1'
                        ]
                    ]
                ]
            ]) . '</div>';
        ?>

    </div>
</div>
<style>
    #zdynamicmodel-period {
        display: grid;
        padding-top: 4px;
        border-radius: 4px;
    }

    .form-group {
        margin-bottom: 0 !important;
    }
</style>

