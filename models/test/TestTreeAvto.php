<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\models\test;


use zetsoft\dbitem\data\ConfigDB;
use zetsoft\dbitem\data\Event;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZActiveQuery;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\dbitem\data\Config;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\incores\ZMCheckboxWidget;



/**
 * Class    TestTreeAvto
 * @package zetsoft\models\App
 * 
 * @property int $id
 * @property int $sort
 * @property string $name
 * @property string $title
 * @property boolean $tranz
 * @property boolean $accept
 * @property boolean $active
 * @property int $root
 * @property int $lft
 * @property int $rgt
 * @property int $lvl
 * @property string $icon
 * @property boolean $icon_type
 * @property boolean $activeOrig
 * @property boolean $selected
 * @property boolean $disabled
 * @property boolean $readonly
 * @property boolean $visible
 * @property boolean $collapsed
 * @property boolean $movable_u
 * @property boolean $movable_d
 * @property boolean $movable_l
 * @property boolean $movable_r
 * @property boolean $removable
 * @property boolean $removable_all
 * @property boolean $child_allowed
 * @property string $deleted_at
 * @property int $deleted_by
 * @property string $deleted_text
 * @property string $created_at
 * @property string $modified_at
 * @property int $created_by
 * @property int $modified_by
 */
class TestTreeAvto extends ZActiveRecord
{
    #region MVars

    /*
    
    public $id;
    public $sort;
    public $name;
    public $title;
    public $tranz;
    public $accept;
    public $active;
    public $root;
    public $lft;
    public $rgt;
    public $lvl;
    public $icon;
    public $icon_type;
    public $activeOrig;
    public $selected;
    public $disabled;
    public $readonly;
    public $visible;
    public $collapsed;
    public $movable_u;
    public $movable_d;
    public $movable_l;
    public $movable_r;
    public $removable;
    public $removable_all;
    public $child_allowed;
    public $deleted_at;
    public $deleted_by;
    public $deleted_text;
    public $created_at;
    public $modified_at;
    public $created_by;
    public $modified_by;
    */

    #endregion

    #region Attrs

    public const attrs = [

        'id',
        'sort',
        'name',
        'title',
        'tranz',
        'accept',
        'active',
        'root',
        'lft',
        'rgt',
        'lvl',
        'icon',
        'icon_type',
        'activeOrig',
        'selected',
        'disabled',
        'readonly',
        'visible',
        'collapsed',
        'movable_u',
        'movable_d',
        'movable_l',
        'movable_r',
        'removable',
        'removable_all',
        'child_allowed',
        'deleted_at',
        'deleted_by',
        'deleted_text',
        'created_at',
        'modified_at',
        'created_by',
        'modified_by',
    ];

    #endregion

    #region Names

    #endregion

    #region Const

    #endregion

    ##region Init

    public static ?string $dbase = 'db';
    public static ?string $title = Azl . 'TestTreeAvto';
    public static ?string $icon = '';
    public static ?bool $menu = true;

    public function init()
    {
        parent::init();


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
			'tranz',
			'accept',
			'active',
			'root',
			'lft',
			'rgt',
			'lvl',
			'icon',
			'icon_type',
			'activeOrig',
			'selected',
			'disabled',
			'readonly',
			'visible',
			'collapsed',
			'movable_u',
			'movable_d',
			'movable_l',
			'movable_r',
			'removable',
			'removable_all',
			'child_allowed',
			'deleted_at',
			'deleted_by',
			'deleted_text',
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
        return function (ConfigDB $config) {

            $config->name = 'Потребности';

            $config->title = Az::l('TestTreeAvto');

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

            'root' => function (FormDb $column) {

                $column->title = Az::l('root');
                $column->dbType = dbTypeInteger;

                return $column;
            },


            'lft' => function (FormDb $column) {

                $column->title = Az::l('lft');
                $column->dbType = dbTypeInteger;
                $column->rules = [
                    [
                        'zetsoft\\system\\validate\\ZRequiredValidator',
                    ],
                ];

                return $column;
            },


            'rgt' => function (FormDb $column) {

                $column->title = Az::l('rgt');
                $column->dbType = dbTypeInteger;
                $column->rules = [
                    [
                        'zetsoft\\system\\validate\\ZRequiredValidator',
                    ],
                ];

                return $column;
            },


            'lvl' => function (FormDb $column) {

                $column->title = Az::l('lvl');
                $column->dbType = dbTypeInteger;
                $column->rules = [
                    [
                        'zetsoft\\system\\validate\\ZRequiredValidator',
                    ],
                ];

                return $column;
            },


            'icon' => function (FormDb $column) {

                $column->title = Az::l('icon');

                return $column;
            },


            'icon_type' => function (FormDb $column) {

                $column->defaultValue = '1';
                $column->title = Az::l('icon_type');
                $column->dbType = dbTypeBoolean;
                $column->rules = [
                    [
                        'zetsoft\\system\\validate\\ZRequiredValidator',
                    ],
                ];

                return $column;
            },





            'activeOrig' => function (FormDb $column) {

                $column->title = Az::l('activeOrig');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'selected' => function (FormDb $column) {

                $column->title = Az::l('selected');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'disabled' => function (FormDb $column) {

                $column->title = Az::l('disabled');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'readonly' => function (FormDb $column) {

                $column->title = Az::l('readonly');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'visible' => function (FormDb $column) {

                $column->title = Az::l('visible');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'collapsed' => function (FormDb $column) {

                $column->title = Az::l('collapsed');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'movable_u' => function (FormDb $column) {

                $column->title = Az::l('movable_u');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'movable_d' => function (FormDb $column) {

                $column->title = Az::l('movable_d');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'movable_l' => function (FormDb $column) {

                $column->title = Az::l('movable_l');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'movable_r' => function (FormDb $column) {

                $column->title = Az::l('movable_r');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'removable' => function (FormDb $column) {

                $column->title = Az::l('removable');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'removable_all' => function (FormDb $column) {

                $column->title = Az::l('removable_all');
                $column->dbType = dbTypeBoolean;

                return $column;
            },


            'child_allowed' => function (FormDb $column) {

                $column->title = Az::l('child_allowed');
                $column->dbType = dbTypeBoolean;

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
        'tranz',
        'accept',
        'active',
        'root',
        'lft',
        'rgt',
        'lvl',
        'icon',
        'icon_type',
        'activeOrig',
        'selected',
        'disabled',
        'readonly',
        'visible',
        'collapsed',
        'movable_u',
        'movable_d',
        'movable_l',
        'movable_r',
        'removable',
        'removable_all',
        'child_allowed',
        'deleted_at',
        'deleted_by',
        'deleted_text',
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
                'items' => [
                    [
                        'title' => Az::l('Форма'),
                        'items' => [
                            [
                                'name',
                                'root',
                                'lft',
                                'rgt',
                                'lvl',
                                'icon',
                                'icon_type',
                                'active',
                                'activeOrig',
                                'selected',
                                'disabled',
                                'readonly',
                                'visible',
                                'collapsed',
                                'movable_u',
                                'movable_d',
                                'movable_l',
                                'movable_r',
                                'removable',
                                'removable_all',
                                'child_allowed',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    #endregion

    #region Value
    public function value(TestTreeAvto &$model = null)
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
            $event->beforeDelete = function (TestTreeAvto $model) {
                return null;
            };

            $event->afterDelete = function (TestTreeAvto $model) {
                return null;
            };

            $event->beforeSave = function (TestTreeAvto $model) {
                return null;
            };

            $event->afterSave = function (TestTreeAvto $model) {
                return null;
            };

            $event->beforeValidate = function (TestTreeAvto $model) {
                return null;
            };

            $event->afterValidate = function (TestTreeAvto $model) {
                return null;
            };

            $event->afterRefresh = function (TestTreeAvto $model) {
                return null;
            };

            $event->afterFind = function (TestTreeAvto $model) {
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


    #endregion

    #region One



    #endregion

    #region Multi



    #endregion
    
    #region Many



    #endregion


}
