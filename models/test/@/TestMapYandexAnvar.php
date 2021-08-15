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


use zetsoft\dbitem\data\Event;
use zetsoft\dbitem\data\FormDb;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\places\ZYandexWidget;
use zetsoft\widgets\values\ZMultiViewWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\system\actives\ZModel;
use zetsoft\models\user\User;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\dbitem\data\Form;



/**
 * Class    TestMapYandexAnvar
 * @package zetsoft\models\App
 * 
 * @property int $id
 * @property string $name
 * @property array $multi
 * @property array $form
 * @property array $single
 * @property string $created_at
 * @property string $modified_at
 * @property int $created_by
 * @property int $modified_by
 */
class TestMapYandexAnvar extends ZActiveRecord
{
    #region MVars

    /*
    
    public $id;
    public $name;
    public $multi;
    public $form;
    public $single;
    public $created_at;
    public $modified_at;
    public $created_by;
    public $modified_by;
    */

    #endregion

    #region Names

    #endregion

    #region Const

    #endregion

    ##region Init

    public static ?string $dbase = 'db';

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
			'name',
			'multi',
			'form',
			'single',
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

            $config->name = 'Сектор образования';

            $config->title = Az::l('TestFile2');

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
           
            'multi' => function (FormDb $column) {

                $column->title = Az::l('Multi');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZMultiWidget::class;
                $column->valueWidget = ZMultiViewWidget::class;
                $column->options = [
						'config' =>[
							'formClass' => 'zetsoft\former\map\MapYandexFormAnvar',
						],
					];
                $column->valueOptions = [
						'config' =>[
							'formClass' => 'zetsoft\former\map\MapYandexFormAnvar',
						],
					];
                $column->filterOptions = [
						'config' =>[
							'formClass' => 'zetsoft\former\map\MapYandexFormAnvar',
						],
					];

                return $column;
            },
            
           
            'form' => function (FormDb $column) {

                $column->title = Az::l('Form');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZFormWidget::class;
                $column->filterWidget = ZFormWidget::class;
                $column->options = [
						'config' =>[
							'formClass' => 'zetsoft\former\map\MapYandexFormAnvar',
						],
					];
                $column->filterOptions = [
						'config' =>[
							'formClass' => 'zetsoft\former\map\MapYandexFormAnvar',
						],
					];

                return $column;
            },
            
           
            'single' => function (FormDb $column) {

                $column->title = Az::l('Single');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZYandexWidgetA::class;
                $column->filterWidget = ZYandexWidgetA::class;

                return $column;
            },
            

        ], $this->configs->replace);
    }



    #endregion


    #region Props

    /*

    
        'id',
        'name',
        'multi',
        'form',
        'single',
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
                                'name',
                            ],
                            [
                                'multi',
                            ],
                            [
                                'form',
                            ],
                            [
                                'single',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    #endregion

    #region Value
    public function value(TestMapYandexAnvar &$model = null)
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
        $event->beforeDelete = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->afterDelete = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->beforeSave = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->afterSave = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->beforeValidate = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->afterValidate = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->afterRefresh = function (TestMapYandexAnvar $model) {
            return null;
        };

        $event->afterFind = function (TestMapYandexAnvar $model) {
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



    #endregion

    #region Multi



    #endregion
    
    #region Many



    #endregion


}
