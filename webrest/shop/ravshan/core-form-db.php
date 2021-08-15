<?php


use kartik\grid\DataColumn;
use rmrevin\yii\fontawesome\FA;
use zetsoft\dbdata\data\DbTypeData;
use zetsoft\dbdata\core\RuleData;
use zetsoft\dbdata\wdg\WidgetData;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\drag\DragFormDb;
use zetsoft\models\ALL\test;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

/** @var ZView $this */

$action->title = Azl . 'Колонки форма';

$action->icon = 'fa fa-database';
$action->icon =true;
$action->type = WebItem::type['html'];


/*
 *  $app = new FormDB();

        $vars = get_object_vars($app);

        $return = [
            'table' => function (FormDb $column) {

                $column->dbType = dbTypeString;
                $column->title = Az::l('Модель');
                $column->widget = ZKSelect2Widget::class;
                $column->fkTable = 'drag_config_db';

                return $column;
            },

            'name' => function (FormDb $column) {

                $column->title = Az::l('Название колонки');
                $column->widget = ZHInputWidget::class;

                return $column;
            }

        ];

        foreach ($vars as $key => $var) {

            $excludes = [
                'readonly',
            ];

            $usesVars = [];

            $usesVars['options'] = [];
            $usesVars['widget'] = ZHInputWidget::class;
            $usesVars['type'] = dbTypeString;
            $usesVars['showForm'] = true;
            $usesVars['data'] = [];
            $usesVars['showDyna'] = true;
            $usesVars['validator'] = [];

            switch (true) {

                case (is_array($var)):
                    $usesVars['type'] = dbTypeJsonb;
                    $usesVars['widget'] = ZKSelect2Widget::class;
                    $usesVars['options'] = [
                        'config' => [
                            'multiple' => true,
                        ]
                    ];
                    break;

                case (is_bool($var)):
                    $usesVars['widget'] = ZKSwitchInputWidget::class;
                    $usesVars['type'] = dbTypeBoolean;
                    break;

                case (is_int($var)):
                    $usesVars['widget'] = ZKTouchSpinWidget::class;
                    $usesVars['type'] = dbTypeInteger;
                    break;
            }


            switch ($key) {

                case 'options':
                    $usesVars['showDyna'] = false;
                    $usesVars['showForm'] = false;
                    $usesVars['type'] = dbTypeJsonb;
                    break;

               case 'rules':

                    $usesVars['data'] = RuleData::class;
                    $usesVars[' type'] = dbTypeJsonb;
                    $usesVars['widget'] = ZKSelect2Widget::class;
                    $usesVars['options'] = [
                        'config' => [
                            'multiple' => true,
                        ]
                    ];
                    break;

                case 'data':
                    $usesVars['type'] = dbTypeJsonb;
                    break;


                case 'name':
                    $usesVars['data'] = RuleData::class;
                    $usesVars['validator'] = [
                        ['zetsoft\\system\\validate\\ZRequiredValidator']
                    ];
                    break;

                case 'format':
                    $usesVars['data'] = Form::format;
                    $usesVars['widget'] = ZKSelect2Widget::class;
                    break;

                case 'dbType':
                    $usesVars['data'] = DbTypeData::class;
                    $usesVars['widget'] = ZKSelect2Widget::class;
                    break;

                case 'widget':
                case 'filterWidget':
                    $usesVars['data'] = WidgetData::class;
                    $usesVars['widget'] = ZKSelect2Widget::class;
                    break;

                default:
                    $usesVars['data'] = [];
                    break;

            }

            if (ZArrayHelper::isIn($key, $excludes))
                continue;

            $titles = ALLData::labels();

            if (empty($titles[$key]))
                $titles[$key] = $key;

            $return[$key] = function (FormDb $column) use ($usesVars, $var, $titles, $key) {

                $column->title = $titles[$key];
                $column->dbType = $usesVars['type'];
                $column->widget = $usesVars['widget'];
                $column->rules = $usesVars['validator'];
                $column->showForm = $usesVars['showForm'];
                $column->showDyna = $usesVars['showDyna'];
                $column->data = $usesVars['data'];
                $column->options = $usesVars['options'];

                return $column;
            };

        }


        return $return;*/





$model = new test();

$model->configs->nameOn = [
    'table',
    'name',
    'widget'
];

$model->configs->before = [
    'widget' => [
        [
            'class' => ZKDataColumn::class,
            'label' => Az::l('Перейти к настройкам Виджетов'),
            'width' => '50px',
            'value' => function ($model, $key, $index, DataColumn $dataColumn) {

                $widget = DragFormDb::findOne($key)->widget;

                return ZButtonWidget::widget([
                    'id' => 'settings-widget-' . $key,
                    'config' => [
                        'title' => Az::l('Настроить Виджет'),
                        'icon' => 'fas fa-edit',
                        'pjax' => 0,
                        'url' => '/core/widget/settings.aspx?widgetClass=' . $widget . '&modelId=' . $key,
                        'btnRounded' => false,
                        'btn' => false,
                        'hasIcon' => true,
                    ],
                    'event' => [
                        'click' => 'function (event){e.preventDefault(); window.open(this.href, "_blank")}',
                    ]
                ]);
            }
        ],
    ]
];


/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'columnExpand' => false
    ]
]);

?>


<script>
    /*
        $('.kv-editable-submit').on('click', function () {
            $('.kv-expand-icon').click();
        });

    */

</script>











