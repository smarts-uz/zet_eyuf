<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\models\dyna;


use zetsoft\dbdata\chess\ChessColumnData;
use zetsoft\dbdata\wdg\WidgetData;
use zetsoft\dbitem\core\SessionItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\dbitem\data\Event;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\data\FormDb;
use zetsoft\former\core\CoreServiceForm;
use zetsoft\models\dyna\DynaChess1;
use zetsoft\models\dyna\DynaChess;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZDepdropWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\system\actives\ZModel;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZActiveQuery;
use zetsoft\widgets\values\ZFormViewWidget;



/**
 * Class    DynaChessItem1
 * @package zetsoft\models\App
 * 
 * @property int $id
 * @property int $sort
 * @property string $name
 * @property string $title
 * @property string $dyna_chess_id
 * @property array $service
 * @property string $type
 * @property string $formula
 * @property string $models
 * @property string $relate_attr
 * @property string $attrib
 * @property string $process
 * @property boolean $active
 * @property boolean $filter
 * @property string $filter_widget
 * @property string $column_data
 * @property boolean $group
 * @property boolean $grouped_row
 * @property boolean $sorting
 * @property string $item_class
 * @property string $item_attr
 * @property string $created_at
 * @property string $modified_at
 * @property int $created_by
 * @property int $modified_by
 */
class DynaChessItem1 extends ZActiveRecord
{
    #region MVars

    /*
    
    public $id;
    public $sort;
    public $name;
    public $title;
    public $dyna_chess_id;
    public $service;
    public $type;
    public $formula;
    public $models;
    public $relate_attr;
    public $attrib;
    public $process;
    public $active;
    public $filter;
    public $filter_widget;
    public $column_data;
    public $group;
    public $grouped_row;
    public $sorting;
    public $item_class;
    public $item_attr;
    public $created_at;
    public $modified_at;
    public $created_by;
    public $modified_by;
    */

    #endregion

    #region Names

    #endregion

    #region Const

    /* @var array $_type*/
    public $_type;  
    public const type = [
        'native' => 'native',
        'hasOne' => 'hasOne',
        'formula' => 'formula',
        'hasMany' => 'hasMany',
        'hasMulti' => 'hasMulti',
    ];

    /* @var array $_process*/
    public $_process;  
    public const process = [
        'sum' => 'sum',
        'max' => 'max',
        'min' => 'min',
        'count' => 'count',
        'average' => 'average',
    ];

    #endregion

    ##region Init

    public static ?string $dbase = 'db';

    public function init()
    {
        parent::init();

        $this->_type = [
            'native' => Az::l('Нативный'),
            'hasOne' => Az::l('One'),
            'formula' => Az::l('Формула'),
            'hasMany' => Az::l('Many'),
            'hasMulti' => Az::l('Multi'),
        ];
        
        $this->_process = [
            'sum' => Az::l('Сумма'),
            'max' => Az::l('Максималние'),
            'min' => Az::l('Минималние'),
            'count' => Az::l('Количество'),
            'average' => Az::l('Среднее'),
        ];
        

    }

    #endregion

    #region Fields
    
   public function fields()
   {
       return [
			'id',
			'sort',
			'name',
			'title',
			'dyna_chess_id',
			'service',
			'type',
			'formula',
			'models',
			'relate_attr',
			'attrib',
			'process',
			'active',
			'filter',
			'filter_widget',
			'column_data',
			'group',
			'grouped_row',
			'sorting',
			'item_class',
			'item_attr',
			'created_at',
			'modified_at',
			'created_by',
			'modified_by',

       ];
   }

    #endregion

    #region Config
    
    /**
     * Function  config
     * @return  \Closure
     */

    public function config()
    {
        return static function (ConfigDB $config) {

            $config->addSort = true;
            $config->hasOne = [
                    'DynaChess' => [
                        'dyna_chess_id' => 'id',
                    ],
                    'User' => [
                        'created_by' => 'id',
                        'modified_by' => 'id',
                    ],
                ];
            $config->title = Az::l('Конфигурации универсального фильтра');
            $config->icon = 'fal fa-list-alt';


            return $config;
        };
    }


    #endregion

    #region Column

    /**
     * Function column
     * @return array
     */
    public function column()
    {
        if (!empty($this->configs->column))
            return $this->configs->column;

        return ZArrayHelper::merge(parent::column(), [
        

            
            'dyna_chess_id' => function (FormDb $column) {

                $column->title = Az::l('Универсальный отчет');
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },

            'service' => function (FormDb $column) {

                $column->title = Az::l('Сервис');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZFormWidget::class;
                $column->valueWidget = ZFormViewWidget::class;
                $column->options = [
                    'config' => [
                        'formClass' => 'zetsoft\former\core\CoreServiceForm',
                    ],
                ];
                $column->valueOptions = [
                    'config' => [
                        'formClass' => 'zetsoft\former\core\CoreServiceForm',
                    ],
                ];

                return $column;
            },


            'type' => function (FormDb $column) {

                $column->title = Az::l('Тип');
                $column->value = 'native';
                $column->data = [
                    'native' => Az::l('Нативный'),
                    'hasOne' => Az::l('One'),
                    'formula' => Az::l('Формула'),
                    'hasMany' => Az::l('Many'),
                    'hasMulti' => Az::l('Multi'),
                ];
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },

            'formula' => function (FormDb $column) {

                $column->title = Az::l('Расчёт значения');
                $column->dbType = dbTypeString;

                return $column;
            },


            'models' => function (FormDb $column) {

                $column->title = Az::l('Модель');
                $column->widget = ZDepdropWidget::class;
                $column->options = [
                    'config' => [
                        'depend' => [
                            '0' => 'dyna_chess_id',
                            '1' => 'type',
                        ],
                        'service' => 'chess',
                        'namespace' => 'cores',
                        'method' => 'depModels',
                    ],
                ];

                return $column;
            },


            'relate_attr' => function (FormDb $column) {

                $column->title = Az::l('Связанный аттрибут');
                $column->widget = ZDepdropWidget::class;
                $column->options = [
                    'config' => [
                        'depend' => [
                            '0' => 'dyna_chess_id',
                            '1' => 'type',
                            '2' => 'models',
                        ],
                        'service' => 'chess',
                        'namespace' => 'cores',
                        'method' => 'getRelateAttr',
                    ],
                ];

                return $column;
            },


            'attrib' => function (FormDb $column) {

                $column->title = Az::l('Аттрибут');
                $column->widget = ZDepdropWidget::class;
                $column->options = [
                    'config' => [
                        'depend' => [
                            '0' => 'dyna_chess_id',
                            '1' => 'type',
                            '2' => 'models',
                        ],
                        'service' => 'chess',
                        'namespace' => 'cores',
                        'method' => 'depAttribs',
                    ],
                ];

                return $column;
            },


            'process' => function (FormDb $column) {

                $column->title = Az::l('Операторы');
                $column->value = '=';
                $column->data = [
                    'sum' => Az::l('Сумма'),
                    'max' => Az::l('Максималние'),
                    'min' => Az::l('Минималние'),
                    'count' => Az::l('Количество'),
                    'average' => Az::l('Среднее'),
                ];
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'filter' => function (FormDb $column) {

                $column->title = Az::l('Фильтрация');
                $column->dbType = dbTypeBoolean;
                $column->value = false;
                $column->widget = ZKSwitchInputWidget::class;

                return $column;
            },

            'filter_widget' => function (FormDb $column) {

                $column->title = Az::l('Виджет фильтра');
                $column->widget = ZKSelect2Widget::class;
                $column->data = WidgetData::class;

                return $column;
            },

            'column_data' => function (FormDb $column) {

                $column->title = Az::l('Дата колонка');
                $column->widget = ZKSelect2Widget::class;
                $column->data = ChessColumnData::class;

                return $column;
            },


            'group' => function (FormDb $column) {

                $column->title = Az::l('Группировать');
                $column->dbType = dbTypeBoolean;
                $column->widget = ZKSwitchInputWidget::class;


                return $column;
            },

            'grouped_row' => function (FormDb $column) {

                $column->title = Az::l('Сгруппированная строка');
                $column->dbType = dbTypeBoolean;
                $column->widget = ZKSwitchInputWidget::class;


                return $column;
            },

            'sorting' => function (FormDb $column) {

                $column->title = Az::l('Сортировка');
                $column->dbType = dbTypeBoolean;
                $column->widget = ZKSwitchInputWidget::class;


                return $column;
            },

            'item_class' => function (FormDb $column) {

                $column->title = Az::l('Итем модел');
                $column->dbType = dbTypeString;
                $column->widget = ZKSelect2Widget::class;
                $column->data = function ($model){
                    return [];
                };


                return $column;
            },

            'item_attr' => function (FormDb $column) {

                $column->title = Az::l('Связанный аттрибут дочерней модели');
                $column->dbType = dbTypeString;
                $column->widget = ZDepdropWidget::class;
                $column->data = function ($model){
                    return [];
                };


                return $column;
            },





        ], $this->configs->replace);
    }



    #endregion


    #region Props

    /*

    
        'id',
        'sort',
        'name',
        'title',
        'dyna_chess_id',
        'service',
        'type',
        'formula',
        'models',
        'relate_attr',
        'attrib',
        'process',
        'active',
        'filter',
        'filter_widget',
        'column_data',
        'group',
        'grouped_row',
        'sorting',
        'item_class',
        'item_attr',
        'created_at',
        'modified_at',
        'created_by',
        'modified_by',

    */

    #endregion


    #region Cards

    /**
     * Function  blocks
     * @return  array
     */

    public function card()
    {
        return [
            [
                'title' => Az::l('Первый этап'),
                'shows' => true,
                'items' => [
                    [
                        'title' => Az::l('Форма'),
                        'shows' => true,
                        'items' => [
                            [
                                'id',
                                'sort',
                                'name',
                                'title',
                                'dyna_chess_id',
                                'type',
                                'models',
                                'relate_attr',
                                'attrib',
                                'process',
                                'active',
                                'filter',
                                'service',
                                'group',
                                'grouped_row',
                                'sorting',
                                'created_at',
                                'modified_at',
                                'created_by',
                                'modified_by',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    #endregion

    #region Value
    public function value(DynaMulti &$model = null)
    {
        if ($model === null)
            $model = $this;

        // Todo: MyCode

        $model->save();
    }


    ##endregion

    #region Events

    /**
     * Function column
     * @return ZEvent
     */
    public function event()
    {

        $event = new Event();
        /*
            $event->beforeDelete = function (DynaMulti $model) {
                return null;
            };

            $event->afterDelete = function (DynaMulti $model) {
                return null;
            };

            $event->beforeSave = function (DynaMulti $model) {
                return null;
            };

            $event->afterSave = function (DynaMulti $model) {
                return null;
            };

            $event->beforeValidate = function (DynaMulti $model) {
                return null;
            };

            $event->afterValidate = function (DynaMulti $model) {
                return null;
            };

            $event->afterRefresh = function (DynaMulti $model) {
                return null;
            };

            $event->afterFind = function (DynaMulti $model) {
                return null;
            };
    */
        return $event;

    }


    #endregion


    #region Faker

    /**
     * Function column
     * @return bool
     */
    public function faker()
    {
        return null;
    }


    #endregion

    #region One


    /**
     *
     * Function  getDynaChess
     * @return bool|\yii\db\ActiveRecord|DynaChess|null
     */            
    public function getDynaChessOne()
    {
        return $this->getOne(DynaChess::class, [
          'id' => 'dyna_chess_id',
      ]);    
    }
    
     /**
     *
     * Function  getDynaChess
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getDynaChess()
    {
        return $this->hasOne(DynaChess::class, [
          'id' => 'dyna_chess_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getCreatedBy
     * @return bool|\yii\db\ActiveRecord|User|null
     */            
    public function getCreatedByOne()
    {
        return $this->getOne(User::class, [
          'id' => 'created_by',
      ]);    
    }
    
     /**
     *
     * Function  getCreatedBy
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, [
          'id' => 'created_by',
      ]);    
    }
    
    

    /**
     *
     * Function  getModifiedBy
     * @return bool|\yii\db\ActiveRecord|User|null
     */            
    public function getModifiedByOne()
    {
        return $this->getOne(User::class, [
          'id' => 'modified_by',
      ]);    
    }
    
     /**
     *
     * Function  getModifiedBy
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getModifiedBy()
    {
        return $this->hasOne(User::class, [
          'id' => 'modified_by',
      ]);    
    }
    
    


    #endregion

    #region Multi



    #endregion
    
    #region Many



    #endregion


}
