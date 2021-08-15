<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\former\map;

use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\dbitem\data\Event;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\widgets\inputes\ZHInputWidget;



/**
 *
 * Class MapForm2Zoir
 */
class MapForm2Zoir extends ZModel
{

    #region Vars

    /* @var string $place */
    public $place;

    /* @var string $location */
    public $location;



    #endregion

    #region Attrs

    public const attrs = [

        'place',
        'location',
    ];

    #endregion

    #region Const

    #endregion

    ##region Init

    public static ?string $titles = Azl . 'Специальные предложения';

    public function init()
    {
        parent::init();
    }

    #endregion

    #region Config

    /**
     *
     * Function  config
     * @return  \Closure
     */

    public function config()
    {
        return function (Config $config) {

            $config->title = Az::l('Специальные предложения');
            return $config;
        };
    }

    #endregion

    #region Column

    /**
     *
     * Function column
     * @return array
     */
    public function column()
    {
        if (!empty($this->configs->column))
            return $this->configs->column;

        return ZArrayHelper::merge(parent::column(), [
           
            'place' => function (Form $column) {

                $column->title = Az::l('Место');
                $column->options = [
						'id' => 'MapForm2Zoir-49310',
					];
                $column->filterOptions = [
						'id' => 'MapForm2Zoir-49310',
					];


                return $column;
            },
            
           
            'location' => function (Form $column) {

                $column->title = Az::l('Локация');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZGoogleDb22Widget::class;
                $column->options = [
						'config' =>[
							'height' => '500',
							'width' => '900',
							'searchAutoComplete' => true,
							'searchPlaceImageShow' => false,
							'zoom' => '12',
							'matkerCount' => '1',
							'limitWayPoints' => '5',
							'optimizeWaypoints' => true,
							'draggable' => true,
							'mapUseType' => 'read',
							'depend' =>[
								'dependPlace' => true,
								'depend_id' => 'MapForm2Zoir-49310',
							],
						],
					];
                $column->filterOptions = [
						'config' =>[
							'height' => '500',
							'width' => '800',
							'searchAutoComplete' => true,
							'searchPlaceImageShow' => false,
							'zoom' => '12',
							'matkerCount' => '5',
							'limitWayPoints' => '0',
							'optimizeWaypoints' => false,
							'draggable' => true,
							'mapUseType' => 'write',
							'depend' =>[
								'dependPlace' => true,
								'depend_id' => 'MapForm2Zoir-49310',
							],
						],
					];


                return $column;
            },
            

        ], $this->configs->replace);
    }


    #endregion

    #region Blocks

    /**
     *
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
                                'place',
                                'location',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    #endregion

}
