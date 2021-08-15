<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\models\shop;


use Underscore\Types\Number;
use zetsoft\dbdata\auth\WareItems;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\dbitem\data\Event;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\calls\CallsCdr;
use zetsoft\models\calls\CallsCel;
use zetsoft\models\calls\CallsOrder;
use zetsoft\models\calls\CallsRecord;
use zetsoft\models\calls\CallsUserman;
use zetsoft\models\cpas\CpasTracker;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\place\PlaceRegion;
use zetsoft\models\user\User;
use zetsoft\models\user\UserCompany;
use zetsoft\models\ware\Ware;
use zetsoft\system\actives\ZActiveQuery;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputMaskWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\values\ZDateFormatWidget;
use zetsoft\models\shop\ShopRejectCause;
use zetsoft\models\shop\ShopDelay;
use zetsoft\models\shop\ShopDelayCause;
use zetsoft\models\shop\ShopPackaging;
use zetsoft\models\shop\ShopShipment;
use zetsoft\models\shop\ShopCoupon;
use zetsoft\models\shop\ShopChannel;
use zetsoft\models\shop\ShopElement;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\models\shop\ShopPayment;
use zetsoft\dbitem\data\Config;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\incores\ZMCheckboxWidget;



/**
 * Class    ShopOrder
 * @package zetsoft\models\App
 * 
 
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $add_contact_phone
 * @property string $order_date
 * @property string $comment_user
 
 * @property string $region
 * @property string $adress
 * @property jsonb $location
 
 * @property int $operator
 * @property string $comment_agent
 * @property string $called_time
 
 * @property string $status_client
 * @property string $status_callcenter
 * @property string $status_logistics
 * @property string $status_accept
 * @property string $status_deliver
 
 * @property string $date_deliver
 * @property string $time_deliver
 * @property string $date_approve
 
 * @property string $date_return
 * @property string $delayed_deliver_date
 * @property int $shop_delay_id
 * @property int $shop_delay_cause_id
 * @property int $packaging
 * @property string $labelled
 * @property string $fragile
 * @property double $weight
 * @property double $weight_plan
 * @property int $volume
 
 * @property int $shop_shipment_id
 * @property int $price
 * @property int $prepayment
 * @property int $deliver_price
 * @property int $total_price
 * @property int $shop_coupon_id
 * @property int $shop_channel_id
 * @property string $payment_type
 * @property string $additional_payment_type
 * @property int $additional_deliver
 * @property int $additional_received_money
 * @property boolean $accepted
 * @property array $shop_element_ids
 * @property array $ware_ids
 * @property string $deleted_at
 * @property int $deleted_by
 * @property string $deleted_text
 * @property string $created_at
 * @property string $modified_at
 * @property int $created_by
 * @property int $modified_by
 */
class ShopOrder extends ZActiveRecord
{
    #region MVars

    /*
    
    public $id;
    public $sort;
    public $name;
    public $code;
    public $tranz;
    public $accept;
    public $active;
    public $number;
    public $user_id;
    public $parent;
    public $children;
    public $contact_name;
    public $status_universal;
    public $contact_phone;
    public $add_contact_phone;
    public $date;
    public $comment_user;
    public $responsible;
    public $place_adress_id;
    public $place_region_id;
    public $distance;
    public $user_company_ids;
    public $operator;
    public $comment_agent;
    public $tasks;
    public $source;
    public $source_type;
    public $called_time;
    public $shop_reject_cause_id;
    public $cpas_track;
    public $status_client;
    public $status_callcenter;
    public $status_autodial;
    public $status_logistics;
    public $status_accept;
    public $status_deliver;
    public $date_deliver;
    public $time_deliver;
    public $date_approve;
    public $date_return;
    public $delayed_deliver_date;
    public $shop_delay_id;
    public $shop_delay_cause_id;
    public $packaging;
    public $labelled;
    public $fragile;
    public $weight;
    public $weight_plan;
    public $volume;
    public $shop_shipment_id;
    public $price;
    public $prepayment;
    public $deliver_price;
    public $total_price;
    public $shop_coupon_id;
    public $shop_channel_id;
    public $payment_type;
    public $additional_payment_type;
    public $additional_deliver;
    public $additional_received_money;
    public $accepted;
    public $shop_element_ids;
    public $ware_ids;
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
        'code',
        'tranz',
        'accept',
        'active',
        'number',
        'user_id',
        'parent',
        'children',
        'contact_name',
        'status_universal',
        'contact_phone',
        'add_contact_phone',
        'date',
        'comment_user',
        'responsible',
        'place_adress_id',
        'place_region_id',
        'distance',
        'user_company_ids',
        'operator',
        'comment_agent',
        'tasks',
        'source',
        'source_type',
        'called_time',
        'shop_reject_cause_id',
        'cpas_track',
        'status_client',
        'status_callcenter',
        'status_autodial',
        'status_logistics',
        'status_accept',
        'status_deliver',
        'date_deliver',
        'time_deliver',
        'date_approve',
        'date_return',
        'delayed_deliver_date',
        'shop_delay_id',
        'shop_delay_cause_id',
        'packaging',
        'labelled',
        'fragile',
        'weight',
        'weight_plan',
        'volume',
        'shop_shipment_id',
        'price',
        'prepayment',
        'deliver_price',
        'total_price',
        'shop_coupon_id',
        'shop_channel_id',
        'payment_type',
        'additional_payment_type',
        'additional_deliver',
        'additional_received_money',
        'accepted',
        'shop_element_ids',
        'ware_ids',
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

    /* @var array $_status_universal*/
    public $_status_universal;  
    public const status_universal = [
        'change' => 'change',
        'free' => 'free',
        'error' => 'error',
        'cancel' => 'cancel',
    ];

    /* @var array $_source_type*/
    public $_source_type;  
    public const source_type = [
        'basket' => 'basket',
        'offline' => 'offline',
        'onclick' => 'onclick',
        'funnel' => 'funnel',
        'mobile_version' => 'mobile_version',
        'by_call' => 'by_call',
        'concultancy' => 'concultancy',
        'social' => 'social',
        'cheaper' => 'cheaper',
        'abandoned_basket' => 'abandoned_basket',
    ];

    /* @var array $_status_client*/
    public $_status_client;  
    public const status_client = [
        'accepted' => 'accepted',
        'approved' => 'approved',
        'forming' => 'forming',
        'delivering' => 'delivering',
        'delivered' => 'delivered',
        'received' => 'received',
        'not_received' => 'not_received',
        'not_delivered' => 'not_delivered',
    ];

    /* @var array $_status_callcenter*/
    public $_status_callcenter;  
    public const status_callcenter = [
        'new' => 'new',
        'ring' => 'ring',
        'autodial' => 'autodial',
        'approved' => 'approved',
        'cancel' => 'cancel',
        'not_ordered' => 'not_ordered',
        'double' => 'double',
        'incorrect' => 'incorrect',
        'on_performance' => 'on_performance',
        'check' => 'check',
    ];

    /* @var array $_status_autodial*/
    public $_status_autodial;  
    public const status_autodial = [
        'autodial' => 'autodial',
        'answered' => 'answered',
        'busy' => 'busy',
        'not-available' => 'not-available',
        'error' => 'error',
        'success' => 'success',
        'no-answer' => 'no-answer',
        'dial-success' => 'dial-success',
        'dial-failed' => 'dial-failed',
    ];

    /* @var array $_status_logistics*/
    public $_status_logistics;  
    public const status_logistics = [
        'new' => 'new',
        'cancelled' => 'cancelled',
        'complect_wait' => 'complect_wait',
        'on_complecting' => 'on_complecting',
        'notset' => 'notset',
        'shipment_ready' => 'shipment_ready',
        'courier_appointment' => 'courier_appointment',
        'reported' => 'reported',
        'completed' => 'completed',
        'part_paid' => 'part_paid',
        'part_refunded' => 'part_refunded',
        'delivery_failure' => 'delivery_failure',
        'delivery_transfer' => 'delivery_transfer',
        'exchange' => 'exchange',
        'cancel' => 'cancel',
        'annulled' => 'annulled',
    ];

    /* @var array $_status_accept*/
    public $_status_accept;  
    public const status_accept = [
        'completed' => 'completed',
        'part_paid' => 'part_paid',
        'delivery_failure' => 'delivery_failure',
        'delivery_transfer' => 'delivery_transfer',
        'exchange' => 'exchange',
        'cancel' => 'cancel',
    ];

    /* @var array $_status_deliver*/
    public $_status_deliver;  
    public const status_deliver = [
        'delivered' => 'delivered',
        'received' => 'received',
        'completed' => 'completed',
        'part_paid' => 'part_paid',
        'part_refunded' => 'part_refunded',
        'delivery_failure' => 'delivery_failure',
        'delivery_transfer' => 'delivery_transfer',
        'annulled' => 'annulled',
    ];

    /* @var array $_payment_type*/
    public $_payment_type;  
    public const payment_type = [
        'cash' => 'cash',
        'uzcard' => 'uzcard',
        'humo' => 'humo',
        'transfer' => 'transfer',
    ];

    /* @var array $_additional_payment_type*/
    public $_additional_payment_type;  
    public const additional_payment_type = [
        'cash' => 'cash',
        'uzcard' => 'uzcard',
        'humo' => 'humo',
        'transfer' => 'transfer',
    ];

    #endregion

    ##region Init

    public static ?string $dbase = 'db';
    public static ?string $title = Azl . 'Заказы';
    public static ?string $icon = '';
    public static ?bool $menu = true;

    public function init()
    {
        parent::init();

        $this->_status_universal = [
            'change' => Az::l('Обмен'),
            'free' => Az::l('Бесплатный курс'),
            'error' => Az::l('Заказ по ошибке'),
            'cancel' => Az::l('Отказ'),
        ];
        
        $this->_source_type = [
            'basket' => Az::l('Корзина'),
            'offline' => Az::l('Оффлайн'),
            'onclick' => Az::l('В один клик'),
            'funnel' => Az::l('Воронка продаж'),
            'mobile_version' => Az::l('Мобильная версия'),
            'by_call' => Az::l('По телефону'),
            'concultancy' => Az::l('Онлайн консультант'),
            'social' => Az::l('Социальные сети'),
            'cheaper' => Az::l('Нашли дешевле'),
            'abandoned_basket' => Az::l('Брошенные корзины'),
        ];
        
        $this->_status_client = [
            'accepted' => Az::l('Принят'),
            'approved' => Az::l('Одобрен'),
            'forming' => Az::l('Формируется'),
            'delivering' => Az::l('Доставляется'),
            'delivered' => Az::l('Доставлено'),
            'received' => Az::l('Получено'),
            'not_received' => Az::l('Не получено'),
            'not_delivered' => Az::l('Не доставлено'),
        ];
        
        $this->_status_callcenter = [
            'new' => Az::l('Новый'),
            'ring' => Az::l('Обзвон'),
            'autodial' => Az::l('Автообзвон'),
            'approved' => Az::l('Одобрен'),
            'cancel' => Az::l('Отказ'),
            'not_ordered' => Az::l('Не заказывал'),
            'double' => Az::l('Дубль'),
            'incorrect' => Az::l('Треш'),
            'on_performance' => Az::l('На исполнения'),
            'check' => Az::l('Проверка'),
        ];
        
        $this->_status_autodial = [
            'autodial' => Az::l('Идет автодозвон'),
            'answered' => Az::l('Ответил'),
            'busy' => Az::l('Занятый'),
            'not-available' => Az::l('Недоступно'),
            'error' => Az::l('Недоступно'),
            'success' => Az::l('Ответил'),
            'no-answer' => Az::l('Нет ответа'),
            'dial-success' => Az::l('Дозвон успешный'),
            'dial-failed' => Az::l('Дозвон не удался'),
        ];
        
        $this->_status_logistics = [
            'new' => Az::l('Новый'),
            'cancelled' => Az::l('Отменен колл центром'),
            'complect_wait' => Az::l('В ожидании комплектации'),
            'on_complecting' => Az::l('На комплектации'),
            'notset' => Az::l('Не комплект'),
            'shipment_ready' => Az::l('Готов к отгрузке'),
            'courier_appointment' => Az::l('К назначению курьера'),
            'reported' => Az::l('Передан в подотчёт'),
            'completed' => Az::l('Выполнена оплата'),
            'part_paid' => Az::l('Оплачен частично'),
            'part_refunded' => Az::l('Возврат частично'),
            'delivery_failure' => Az::l('Отказ во время доставки'),
            'delivery_transfer' => Az::l('Перенос даты доставки'),
            'exchange' => Az::l('Обмен'),
            'cancel' => Az::l('Отменено'),
            'annulled' => Az::l('Аннулирован'),
        ];
        
        $this->_status_accept = [
            'completed' => Az::l('Выполнена оплата'),
            'part_paid' => Az::l('Частичный выкуп'),
            'delivery_failure' => Az::l('Отказ во время доставки'),
            'delivery_transfer' => Az::l('Перенос дата доставки'),
            'exchange' => Az::l('Обмен'),
            'cancel' => Az::l('Отменено'),
        ];
        
        $this->_status_deliver = [
            'delivered' => Az::l('Доставлено'),
            'received' => Az::l('Получено'),
            'completed' => Az::l('Выполнена оплата'),
            'part_paid' => Az::l('Оплачен частично'),
            'part_refunded' => Az::l('Возврат частично'),
            'delivery_failure' => Az::l('Отказ во время доставки'),
            'delivery_transfer' => Az::l('Перенос дата доставки'),
            'annulled' => Az::l('Аннулирован'),
        ];
        
        $this->_payment_type = [
            'cash' => Az::l('Наличные'),
            'uzcard' => Az::l('Карта UzCard'),
            'humo' => Az::l('Карта Humo'),
            'transfer' => Az::l('Безналичный расчет'),
        ];
        
        $this->_additional_payment_type = [
            'cash' => Az::l('Наличные'),
            'uzcard' => Az::l('Карта UzCard'),
            'humo' => Az::l('Карта Humo'),
            'transfer' => Az::l('Безналичный расчет'),
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
			'code',
			'tranz',
			'accept',
			'active',
			'number',
			'user_id',
			'parent',
			'children',
			'contact_name',
			'status_universal',
			'contact_phone',
			'add_contact_phone',
			'date',
			'comment_user',
			'responsible',
			'place_adress_id',
			'place_region_id',
			'distance',
			'user_company_ids',
			'operator',
			'comment_agent',
			'tasks',
			'source',
			'source_type',
			'called_time',
			'shop_reject_cause_id',
			'cpas_track',
			'status_client',
			'status_callcenter',
			'status_autodial',
			'status_logistics',
			'status_accept',
			'status_deliver',
			'date_deliver',
			'time_deliver',
			'date_approve',
			'date_return',
			'delayed_deliver_date',
			'shop_delay_id',
			'shop_delay_cause_id',
			'packaging',
			'labelled',
			'fragile',
			'weight',
			'weight_plan',
			'volume',
			'shop_shipment_id',
			'price',
			'prepayment',
			'deliver_price',
			'total_price',
			'shop_coupon_id',
			'shop_channel_id',
			'payment_type',
			'additional_payment_type',
			'additional_deliver',
			'additional_received_money',
			'accepted',
			'shop_element_ids',
			'ware_ids',
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

            $config->addTitle = false;
            $config->addCode = true;
            $config->nameValue = 'Заказ клиента №{number} от {created_at}. Ф.И.О {contact_name}';

            $config->hasOne = [
                    'User' => [
                        'user_id' => 'id',
                        'responsible' => 'id',
                        'operator' => 'id',
                        'deleted_by' => 'id',
                        'created_by' => 'id',
                        'modified_by' => 'id',
                    ],
                    'ShopOrder' => [
                        'parent' => 'id',
                        'children' => 'id',
                    ],
                    'PlaceAdress' => [
                        'place_adress_id' => 'id',
                    ],
                    'PlaceRegion' => [
                        'place_region_id' => 'id',
                    ],
                    'UserCompany' => [
                        'source' => 'id',
                    ],
                    'ShopRejectCause' => [
                        'shop_reject_cause_id' => 'id',
                    ],
                    'ShopDelay' => [
                        'shop_delay_id' => 'id',
                    ],
                    'ShopDelayCause' => [
                        'shop_delay_cause_id' => 'id',
                    ],
                    'ShopPackaging' => [
                        'packaging' => 'id',
                    ],
                    'ShopShipment' => [
                        'shop_shipment_id' => 'id',
                    ],
                    'ShopCoupon' => [
                        'shop_coupon_id' => 'id',
                    ],
                    'ShopChannel' => [
                        'shop_channel_id' => 'id',
                    ],
                ];
            $config->hasMulti = [
                    'UserCompany' => [
                        'user_company_ids' => 'id',
                    ],
                    'ShopElement' => [
                        'shop_element_ids' => 'id',
                    ],
                    'Ware' => [
                        'ware_ids' => 'id',
                    ],
                ];
            $config->hasMany = [
                    'ShopOrder' => [
                        'parent' => 'id',
                        'children' => 'id',
                    ],
                    'ShopOrderItem' => [
                        'shop_order_id' => 'id',
                    ],
                    'ShopPayment' => [
                        'shop_order_id' => 'id',
                    ],
                    'CallsCdr' => [
                        'shop_order_id' => 'id',
                    ],
                    'CallsCel' => [
                        'shop_order_id' => 'id',
                    ],
                    'CallsOrder' => [
                        'shop_order_id' => 'id',
                    ],
                    'CallsRecord' => [
                        'shop_order_id' => 'id',
                    ],
                    'CallsUserman' => [
                        'shop_order_id' => 'id',
                    ],
                    'CpasTracker' => [
                        'shop_order_id' => 'id',
                    ],
                ];
            $config->jsonb = [
                    'company_ids',
                ];
            $config->relateMany = [
                    'shop_order_id' => 'ShopOrderItem',
                    'parent' => 'ShopOrder',
                    'id' => 'ShopOrder',
                ];
            $config->relateMulti = [
                    'shop_order_id' => 'ShopOrderItem',
                ];
            $config->title = Az::l('Заказы');

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

            'number' => function (FormDb $column) {

                $column->title = Az::l('Номер заказа');
                $column->tooltip = Az::l('Уникальный номер заказа');
                $column->readonly = true;
                $column->auto = true;
                $column->showDyna = false;
                $column->autoValue = function (ShopOrder $model) {

                    if (empty($model->status_universal))
                        return $model->id;

                    return $model->number;

                };
                $column->width = '100px';

                return $column;
            },


            'user_id' => function (FormDb $column) {

                $column->title = Az::l('Клиент');
                $column->tooltip = Az::l('Клиент - пользователь');
                $column->dbType = dbTypeInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->options = [
                    'config' => [
                        'ajax' => true,
                    ],
                ];
                $column->width = '120px';
                $column->showDyna = false;
                return $column;
            },


            'parent' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Вышестоящий');
                $column->tooltip = Az::l('Связанный вышестоящий заказ');
                $column->dbType = dbTypeInteger;
                $column->readonly = true;
                $column->fkAttr = 'number';
                $column->rules = [
                    [
                        validatorInteger,
                    ],
                ];

                $column->widget = ZKSelect2Widget::class;
                $column->options = [
                    'config' => [
                        'ajax' => true,
                    ],
                ];
                $column->fkTable = 'shop_order';
                //start: MurodovMirbosit 09.10.2020
                $column->fkQuery = [
                    'status_callcenter' => ShopOrder::status_callcenter['approved'],
                ];
                return $column;
                //end
            },


            'children' => function (FormDb $column) {

                $column->title = Az::l('Связанные');
                $column->tooltip = Az::l('Заказы, связанные к этому заказу');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZKSelect2Widget::class;
                $column->fkTable = 'shop_order';
                /*
                 $column->data = [
                     'saf',
                     'saf',
                     'saf',
                 ];
                */
                //start: MurodovMirbosit 09.10.2020
                $column->fkQuery = [
                    'status_callcenter' => ShopOrder::status_callcenter['approved'],
                ];
                //end
                $column->fkAttr = 'number';
                $column->options = [
                    'config' => [
                        'ajax' => true,
                        'multiple' => true,
                    ],
                ];

                return $column;
            },


            'contact_name' => function (FormDb $column) {

                $column->title = Az::l('Контактное имя');
                $column->tooltip = Az::l('Контактное имя клиента');
                $column->rules = [
                    [
                        validatorString,
                    ],
                ];

                return $column;
            },


            'status_universal' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Универсальный статус');
                $column->tooltip = Az::l('Универсальный статус заказа');
                $column->data = [
                    'change' => Az::l('Обмен'),
                    'free' => Az::l('Бесплатный курс'),
                    'error' => Az::l('Заказ по ошибке'),
                    'cancel' => Az::l('Отказ'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'contact_phone' => function (FormDb $column) {

                $column->title = Az::l('Контактный номер');
                $column->tooltip = Az::l('Контактный номер клиента');
                $column->changeSave = false;
                $column->rules = [
                    [
                        'zetsoft\\system\\validate\\ZRequiredValidator',
                    ],
                    [
                        validatorString,
                    ],
                ];
                $column->widget = ZInputMaskWidget::class;
                // $column->widget = ZInputMaskWidget::class;
                $column->filterWidget = ZHInputWidget::class;
                /*    $column->options = [
                          'config' => [
                              'alias' => 'datetime',
                          ],
                    ];*/

                return $column;
            },


            'add_contact_phone' => function (FormDb $column) {

                $column->title = Az::l('Дополнительный контактный номер');
                $column->tooltip = Az::l('Дополнительный контактный номер клиента');
                $column->rules = validatorString;
                $column->widget = ZInputMaskWidget::class;
                $column->filterWidget = ZHInputWidget::class;

                return $column;
            },


            'date' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Дата');
                $column->tooltip = Az::l('Дата когда был создан заказа');
                $column->dbType = dbTypeDate;
                $column->widget = ZKDatepickerWidget::class;
                $column->valueWidget = ZDateFormatWidget::class;
                $column->options = [
                    'config' => [
                        'hour' => true,
                    ]
                ];
                return $column;
            },


            'comment_user' => function (FormDb $column) {

                $column->title = Az::l('Комментарий к заказу');
                $column->tooltip = Az::l('Комментарий оператора');
                $column->rules = validatorString;

                return $column;
            },


            'responsible' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Ответственный');
                $column->tooltip = Az::l('Ответственный заказа');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->fkTable = 'user';
                $column->fkQuery = [

                    'role' => [
                        'manager',
                        'admin',
                        'logistics',
                        'warehouse',
                    ],

                ];

                return $column;
            },


            'place_adress_id' => function (FormDb $column) {

                $column->title = Az::l('Место доставки');
                $column->tooltip = Az::l('Место доставки заказа');
                $column->dbType = dbTypeInteger;
                /*$column->rules = [
                    [
                        validatorInteger,
                    ],
                    [
                        'zetsoft\\system\\validate\\ZRequiredValidator',
                    ]
                ];*/
                $column->widget = ZKSelect2Widget::class;
                $column->width = '220px';

                return $column;
            },


            'place_region_id' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Регион');
                $column->tooltip = Az::l('Регион доставки заказа');
                $column->auto = true;
                $column->autoValue = static function (ShopOrder $order) {

                    /** @var PlaceAdress $adress */

                    if (!$order->place_adress_id)
                        return null;

                    $adress = PlaceAdress::findOne($order->place_adress_id);

                    if ($adress === null)
                        return null;

                    return $adress->place_region_id;

                };

                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'distance' => function (FormDb $column) {

                $column->title = Az::l('Дистанция');
                $column->tooltip = Az::l('Дистанция между покупателем и магазином');
                $column->dbType = dbTypeDouble;
                $column->rules = validatorDouble;

                return $column;
            },


            'user_company_ids' => function (FormDb $column) {

                $column->title = Az::l('Магазины');
                $column->tooltip = Az::l('Магазины откуда заказываются товары');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZKSelect2Widget::class;
                /*  $column->options = */

                $column->options = function (ShopOrder $model) {

                    if (Az::$app->cores->langs->urlArrayStr === '/shop/supervisor/main/index')
                        return [
                            'config' => [
                                'multiple' => true,
                            ],
                        ];
                    else
                        return [
                            'config' => [
                                'multiple' => true,
                            ],
                        ];

                };

                $column->fkQuery = [
                    'type' => 'market',
                ];

                $column->ajax = false;
                $column->auto = true;
                $column->autoValue = function ($model) {
                    $shopOrderItems = ShopOrderItem::find()
                        ->where([
                            'shop_order_id' => $model->id
                        ])
                        ->asArray()
                        ->all();
                    if (empty($model->user_company_ids) || !is_array($model->user_company_ids))
                        $model->user_company_ids = [];

                    $user_company_ids = ZArrayHelper::merge($model->user_company_ids, ZArrayHelper::getColumn($shopOrderItems, 'user_company_id'));

                    $model->shop_element_ids = ZArrayHelper::getColumn($shopOrderItems, 'id');


                    return array_unique($user_company_ids);
                };

                return $column;
            },


            'operator' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Оператор');
                $column->tooltip = Az::l('Отвественный оператор');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->options = [
                    'config' => [
                        //   'ajax' => false,
                    ],
                ];

                $column->fkQuery = [
                    'role' => 'agent',
                ];

                $column->fkTable = 'user';
                $column->fkAttr = 'title';

                return $column;
            },


            'comment_agent' => function (FormDb $column) {

                $column->title = Az::l('Комментарий оператора');
                $column->tooltip = Az::l('Дополнительный комментарий от оператора');
                $column->rules = validatorString;

                return $column;
            },


            'tasks' => function (FormDb $column) {

                $column->title = Az::l('Поручения оператору');
                $column->tooltip = Az::l('Поручения данные оператору');
                $column->rules = validatorString;

                return $column;
            },


            'source' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Источник');
                $column->tooltip = Az::l('Источник откуда идет заказ');
                $column->auto = true;
                $column->dbType = dbTypeInteger;
                $column->rules = [
                    [validatorInteger],
                ];
                $column->widget = ZKSelect2Widget::class;
                $column->fkTable = 'user_company';
                $column->fkQuery = [
                    'type' => 'source'
                ];

                return $column;
            },

            'source_type' => function (FormDb $column) {

                $column->title = Az::l('Тип источника');
                $column->tooltip = Az::l('Тип источника откуда идет заказ');
                $column->data = [
                    'basket' => Az::l('Корзина'),
                    'offline' => Az::l('Оффлайн'),
                    'onclick' => Az::l('В один клик'),
                    'funnel' => Az::l('Воронка продаж'),
                    'mobile_version' => Az::l('Мобильная версия'),
                    'by_call' => Az::l('По телефону'),
                    'concultancy' => Az::l('Онлайн консультант'),
                    'social' => Az::l('Социальные сети'),
                    'cheaper' => Az::l('Нашли дешевле'),
                    'abandoned_basket' => Az::l('Брошенные корзины'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'called_time' => function (FormDb $column) {

                $column->title = Az::l('Время звонка');
                $column->tooltip = Az::l('Время звонка клиенту');
                $column->dbType = dbTypeDateTime;
                $column->widget = ZKDateTimePickerWidget::class;
                /*$column->filterWidget = ZPeriodPickerWidget::class;
                $column->period = true;*/

                return $column;
            },


            /*   'call_record' => function (FormDb $column) {

                   $column->title = Az::l('Аудиозапись звонка');
                   $column->dbType = dbTypeJsonb;
                   $column->widget = ZAudioWidget::class;
                   $column->valueWidget = ZAudioWidget::class;
                   $column->filterWidget = ZHInputWidget::class;
                   $column->valueOptions = [
                       'config' => [
                           'value' => true,
                       ],
                   ];
                   $column->width = '400px';
                   $column->readonly = true;

                   return $column;
               },*/


            'shop_reject_cause_id' => function (FormDb $column) {

                $column->title = Az::l('Причина отказа');
                $column->tooltip = Az::l('Причина отказа заказа');
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'cpas_track' => function (FormDb $column) {

                $column->title = Az::l('Номер заказа СПА');
                $column->tooltip = Az::l('Номер заказа в CPA');
                $column->rules = validatorInteger;
                $column->readonly = true;

                return $column;
            },


            'status_client' => function (FormDb $column) {

                $column->title = Az::l('Статусы клиента');
                $column->tooltip = Az::l('Статусы заказа для клиента');
                $column->data = [
                    'accepted' => Az::l('Принят'),
                    'approved' => Az::l('Одобрен'),
                    'forming' => Az::l('Формируется'),
                    'delivering' => Az::l('Доставляется'),
                    'delivered' => Az::l('Доставлено'),
                    'received' => Az::l('Получено'),
                    'not_received' => Az::l('Не получено'),
                    'not_delivered' => Az::l('Не доставлено'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;
                $column->history = true;

                return $column;
            },


            'status_callcenter' => function (FormDb $column) {

                $column->title = Az::l('Статусы колл центра');
                $column->tooltip = Az::l('Статусы заказа от колл центра');
                $column->value = 'new';

                $column->data = [
                    'new' => Az::l('Новый'),
                    'ring' => Az::l('Обзвон'),
                    'autodial' => Az::l('Автообзвон'),
                    'approved' => Az::l('Одобрен'),
                    'cancel' => Az::l('Отказ'),
                    'not_ordered' => Az::l('Не заказывал'),
                    'double' => Az::l('Дубль'),
                    'incorrect' => Az::l('Треш'),
                    'on_performance' => Az::l('На исполнения'),
                    'check' => Az::l('Проверка'),
                ];
                $column->rules = validatorString;

                $column->event = function (ShopOrder $model) {
                    if (!$model->isNewRecord) {
                        Az::$app->market->order->sendStatusToCpa($model);
                    }

                };
                $column->widget = ZKSelect2Widget::class;
                $column->options = [
                    'active' => [
                        'select' => true
                    ],
                ];
                $column->history = true;

                return $column;
            },


            'status_autodial' => function (FormDb $column) {

                $column->title = Az::l('Статусы автодозвона');
                $column->tooltip = Az::l('Статусы заказа для автодозвона');
                $column->data = [
                    'autodial' => Az::l('Идет автодозвон'),
                    'answered' => Az::l('Ответил'),
                    'busy' => Az::l('Занятый'),
                    'not-available' => Az::l('Недоступно'),
                    'error' => Az::l('Недоступно'),
                    'success' => Az::l('Ответил'),
                    'no-answer' => Az::l('Нет ответа'),
                    'dial-success' => Az::l('Дозвон успешный'),
                    'dial-failed' => Az::l('Дозвон не удался'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'status_logistics' => function (FormDb $column) {


                $column->title = Az::l('Статусы логистики');
                $column->tooltip = Az::l('Статусы заказа логистики');
                $column->value = 'new';

                $column->data = [
                    'new' => Az::l('Новый'),
                    'cancelled' => Az::l('Отменен колл центром'),
                    'complect_wait' => Az::l('В ожидании комплектации'),
                    'on_complecting' => Az::l('На комплектации'),
                    'notset' => Az::l('Не комплект'),
                    'shipment_ready' => Az::l('Готов к отгрузке'),
                    'courier_appointment' => Az::l('К назначению курьера'),
                    'reported' => Az::l('Передан в подотчёт'),
                    'completed' => Az::l('Выполнена оплата'),
                    'part_paid' => Az::l('Оплачен частично'),
                    'part_refunded' => Az::l('Возврат частично'),
                    'delivery_failure' => Az::l('Отказ во время доставки'),
                    'delivery_transfer' => Az::l('Перенос даты доставки'),
                    'exchange' => Az::l('Обмен'),
                    'cancel' => Az::l('Отменено'),
                    'annulled' => Az::l('Аннулирован'),
                ];

                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;
                $column->history = true;

                return $column;
            },


            'status_accept' => function (FormDb $column) {

                $column->title = Az::l('Статусы приемки логистики');
                $column->tooltip = Az::l('Статусы заказа для приемки логистики');
                $column->data = [
                    'completed' => Az::l('Выполнена оплата'),
                    'part_paid' => Az::l('Частичный выкуп'),
                    'delivery_failure' => Az::l('Отказ во время доставки'),
                    'delivery_transfer' => Az::l('Перенос дата доставки'),
                    'exchange' => Az::l('Обмен'),
                    'cancel' => Az::l('Отменено'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;
                $column->history = true;

                return $column;
            },


            'status_deliver' => function (FormDb $column) {

                $column->title = Az::l('Статусы курьера');
                $column->tooltip = Az::l('Статусы заказа для курьера');
                $column->data = [
                    'delivered' => Az::l('Доставлено'),
                    'received' => Az::l('Получено'),
                    'completed' => Az::l('Выполнена оплата'),
                    'part_paid' => Az::l('Оплачен частично'),
                    'part_refunded' => Az::l('Возврат частично'),
                    'delivery_failure' => Az::l('Отказ во время доставки'),
                    'delivery_transfer' => Az::l('Перенос дата доставки'),
                    'annulled' => Az::l('Аннулирован'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;
                $column->history = true;

                return $column;
            },


            'date_deliver' => function (FormDb $column) {

                $column->title = Az::l('Дата доставки');
                $column->tooltip = Az::l('Желаемая дата доставки заказа');
                $column->dbType = dbTypeDate;
                $column->widget = ZKDatepickerWidget::class;
                $column->modalHeight = '500px';

                return $column;
            },

            'time_deliver' => function (FormDb $column) {

                $column->title = Az::l('Время доставки');
                $column->tooltip = Az::l('Желаемая время доставки заказа');
                $column->dbType = dbTypeString;

                //$column->widget = ZKTimePickerWidget::class;
                $column->modalHeight = '500px';

                return $column;
            },


            'date_approve' => function (FormDb $column) {

                $column->title = Az::l('Дата одобрения');
                $column->tooltip = Az::l('Дата одобрения заказа оператором');

                $column->dbType = dbTypeDateTime;

                $column->widget = ZKDatepickerWidget::class;

                return $column;
            },


            'date_return' => function (FormDb $column) {

                $column->title = Az::l('Дата возврата');
                $column->tooltip = Az::l('Дата возврата заказа');
                $column->dbType = dbTypeDate;
                $column->widget = ZKDatepickerWidget::class;

                return $column;
            },


            'delayed_deliver_date' => function (FormDb $column) {

                $column->title = Az::l('Перенесенная дата доставки');
                $column->tooltip = Az::l('Перенесенная дата доставки заказа');
                $column->dbType = dbTypeDate;
                $column->widget = ZKDatepickerWidget::class;

                return $column;
            },


            'shop_delay_id' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Перенос доставки');
                $column->tooltip = Az::l('Связь с таблицей "Перенос доставки"');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->options = [
                    'config' => [
                        'tags' => true,
                    ],
                ];

                return $column;
            },


            'shop_delay_cause_id' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Причина переноса доставки');
                $column->tooltip = Az::l('Причина переноса доставки заказа');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->options = [
                    'config' => [
                        'tags' => true,
                    ],
                ];

                return $column;
            },


            'packaging' => function (FormDb $column) {

                $column->title = Az::l('Тип упаковки');
                $column->tooltip = Az::l('Тип упаковки заказа');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->fkTable = 'shop_packaging';

                return $column;
            },


            'labelled' => function (FormDb $column) {

                $column->title = Az::l('Маркированный');
                $column->tooltip = Az::l('Заказ маркированный или нет?');
                $column->rules = validatorString;
                $column->widget = ZKSwitchInputWidget::class;

                return $column;
            },


            'fragile' => function (FormDb $column) {

                $column->title = Az::l('Хрупкий');
                $column->tooltip = Az::l('Заказ хрупкий или нет?');
                $column->rules = validatorString;
                $column->widget = ZKSwitchInputWidget::class;

                return $column;
            },


            'weight' => function (FormDb $column) {

                $column->title = Az::l('Вес заказа в гр');
                $column->tooltip = Az::l('Вес заказа в граммах');
                $column->dbType = dbTypeDouble;
                $column->rules = validatorDouble;
                $column->changeSave = true;
                return $column;
            },


            'weight_plan' => function (FormDb $column) {

                $column->title = Az::l('Вес по плану');
                $column->tooltip = Az::l('Вес по плану в граммах');
                $column->dbType = dbTypeDouble;
                $column->rules = validatorDouble;

                return $column;
            },


            'volume' => function (FormDb $column) {

                $column->title = Az::l('Объём');
                $column->tooltip = Az::l('Объём заказа');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;

                return $column;
            },


            'shop_shipment_id' => function (FormDb $column) {

                $column->index = true;
                $column->readonly = true;
                $column->title = Az::l('Доставка');
                $column->tooltip = Az::l('Связь с таблицей "Доставка"');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;


                return $column;
            },


            'price' => function (FormDb $column) {

                $column->title = Az::l('Сумма');
                $column->tooltip = Az::l('Общая сумма товаров');
                $column->dbType = dbTypeBigInteger;
                $column->pageSummary = true;
                $column->widget = ZKTouchSpinWidget::class;
                //start: MurodovMirbosit 09.10.2020
                $column->readonly = function ($model) {
                    if (Az::$app->forms->wiData->userRole() === 'dev') {
                        return false;
                    }
                    return true;

                };
                //end
                return $column;
            },


            'prepayment' => function (FormDb $column) {

                $column->defaultValue = 0;
                $column->title = Az::l('Предоплата');
                $column->tooltip = Az::l('Предоплата заказа клиентом');
                $column->dbType = dbTypeBigInteger;
                $column->widget = ZKTouchSpinWidget::class;

                return $column;
            },


            'deliver_price' => function (FormDb $column) {

                $column->defaultValue = 0;
                $column->title = Az::l('Сумма доставки');
                $column->tooltip = Az::l('Сумма доставки заказа');
                $column->dbType = dbTypeInteger;
                $column->rules = [
                    [validatorInteger,],
                ];
                $column->widget = ZKTouchSpinWidget::class;

                return $column;
            },


            'total_price' => function (FormDb $column) {

                $column->title = Az::l('Общая сумма');
                $column->tooltip = Az::l('Общая сумма заказа вместе с доставкой');
                $column->dbType = dbTypeBigInteger;
                $column->widget = ZKTouchSpinWidget::class;
                $column->width = '100px';
                $column->pageSummary = true;
                $column->readonly = true;

                return $column;
            },


            'shop_coupon_id' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Купон');
                $column->tooltip = Az::l('Купон для скидки');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;
                $column->fkTable = 'shop_coupon';

                return $column;
            },


            'shop_channel_id' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Каналы продаж');
                $column->tooltip = Az::l('Каналы продаж от заказа');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'payment_type' => function (FormDb $column) {

                $column->title = Az::l('Cпособ оплаты');
                $column->tooltip = Az::l('Желаемый способ оплаты заказа');
                $column->data = [
                    'cash' => Az::l('Наличные'),
                    'uzcard' => Az::l('Карта UzCard'),
                    'humo' => Az::l('Карта Humo'),
                    'transfer' => Az::l('Безналичный расчет'),
                ];
                $column->rules = [
                    [validatorString],
                ];
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'additional_payment_type' => function (FormDb $column) {

                $column->title = Az::l('Дополнительный способ оплаты');
                $column->tooltip = Az::l('Дополнительный способ оплаты заказа');
                $column->data = [
                    'cash' => Az::l('Наличные'),
                    'uzcard' => Az::l('Карта UzCard'),
                    'humo' => Az::l('Карта Humo'),
                    'transfer' => Az::l('Безналичный расчет'),
                ];
                $column->rules = validatorString;
                $column->widget = ZKSelect2Widget::class;

                return $column;
            },


            'additional_deliver' => function (FormDb $column) {

                $column->title = Az::l('Дополнительная доставка');
                $column->tooltip = Az::l('Сумма оплаченная за дополнительную доставку');
                $column->dbType = dbTypeInteger;
                $column->rules = validatorInteger;

                return $column;
            },


            'additional_received_money' => function (FormDb $column) {

                $column->title = Az::l('Сумма оплаченная дополнительным способом');
                $column->tooltip = Az::l('Сумма оплаченная дополнительным способом');
                $column->rules = validatorInteger;
                $column->dbType = dbTypeBigInteger;
                $column->widget = ZKTouchSpinWidget::class;
                return $column;
            },


            'accepted' => function (FormDb $column) {

                $column->title = Az::l('Принят');
                $column->tooltip = Az::l('Принят');
                $column->dbType = dbTypeBoolean;
                $column->rules = validatorBoolean;

                return $column;
            },


            'shop_element_ids' => function (FormDb $column) {

                $column->title = Az::l('Товары');
                $column->tooltip = Az::l('Заказанные товары');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZKSelect2Widget::class;
                $column->multiple = true;

                $column->readonly = true;

                return $column;
            },


            'ware_ids' => function (FormDb $column) {

                $column->index = true;
                $column->title = Az::l('Склады откуда идет доставка');
                $column->tooltip = Az::l('Склады откуда идет доставка заказа');
                $column->dbType = dbTypeJsonb;
                $column->widget = ZKSelect2Widget::class;
                $column->data = WareItems::class;
                $column->options = [
                    'config' => [
                        'ajax' => true,
                        'multiple' => true,
                    ],
                ];
                $column->readonly = true;

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
        'code',
        'tranz',
        'accept',
        'active',
        'number',
        'user_id',
        'parent',
        'children',
        'contact_name',
        'status_universal',
        'contact_phone',
        'add_contact_phone',
        'date',
        'comment_user',
        'responsible',
        'place_adress_id',
        'place_region_id',
        'distance',
        'user_company_ids',
        'operator',
        'comment_agent',
        'tasks',
        'source',
        'source_type',
        'called_time',
        'shop_reject_cause_id',
        'cpas_track',
        'status_client',
        'status_callcenter',
        'status_autodial',
        'status_logistics',
        'status_accept',
        'status_deliver',
        'date_deliver',
        'time_deliver',
        'date_approve',
        'date_return',
        'delayed_deliver_date',
        'shop_delay_id',
        'shop_delay_cause_id',
        'packaging',
        'labelled',
        'fragile',
        'weight',
        'weight_plan',
        'volume',
        'shop_shipment_id',
        'price',
        'prepayment',
        'deliver_price',
        'total_price',
        'shop_coupon_id',
        'shop_channel_id',
        'payment_type',
        'additional_payment_type',
        'additional_deliver',
        'additional_received_money',
        'accepted',
        'shop_element_ids',
        'ware_ids',
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
                'shows' => true,
                'items' => [
                    [
                        'title' => Az::l('Форма'),
                        'shows' => true,
                        'items' => [
                            [
                                'name',
                                'code',
                            ],
                            [
                                'date',
                                'responsible',
                            ],
                            [
                                'user_id',
                                'contact_name',
                            ],
                            [
                                'contact_phone',
                                'add_contact_phone',
                                'called_time',
                            ],
                            [
                                'comment_user',
                                'place_adress_id',
                            ],
                            [
                                'distance',
                                'user_company_ids',
                            ],
                            [
                                'ware_ids',
                                'operator',
                            ],
                            [
                                'comment_agent',
                                'tasks',
                            ],
                            [
                                'source',
                                'shop_reject_cause_id',
                            ],
                            [
                                'status_client',
                                'status_callcenter',
                            ],
                            [
                                'status_accept',
                                'date_deliver',
                                'time_deliver',
                            ],
                            [
                                'date_approve',
                                'date_return',
                            ],
                            [
                                'delayed_deliver_date',
                                'weight_plan',
                            ],
                            [
                                'shop_delay_id',
                                'shop_delay_cause_id',
                            ],
                            [
                                'packaging',
                                'labelled',
                            ],
                            [
                                'fragile',
                                'weight',
                            ],
                            [
                                'volume',
                                'shop_shipment_id',
                            ],
                            [
                                'price',
                                'deliver_price',
                            ],
                            [
                                'total_price',
                                'shop_coupon_id',
                            ],
                            [
                                'shop_channel_id',
                                'payment_type',
                            ],
                            [
                                'additional_payment_type',
                                'additional_received_money',
                            ],
                            [
                                'additional_deliver',
                                'prepayment',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    #endregion

    #region Value
    public function value(ShopOrder &$model = null)
    {
        if ($model === null) {
            $model = $this;
        }

        $shopOrderItems = ShopOrderItem::find()
            ->where([
                'shop_order_id' => $model->id
            ])
            ->all();

        /*
         $shopOrderItem = new ShopOrderItem();

        $shopCatalog = ShopCatalog::find()->where(['id' => $shopOrderItem->shop_catalog_id])->all();*/

        if (!$this->emptyOrNullable($shopOrderItems) && !$this->emptyOrNullable($model)) {

            if ($model->ware_ids === null)
                $model->ware_ids = [];

            if (empty($model->ware_ids) || !is_array($model->ware_ids))
                $model->ware_ids = [];
            $ware_ids = ZArrayHelper::merge($model->ware_ids, ZArrayHelper::getColumn($shopOrderItems, 'ware_id'));

            $model->ware_ids = array_unique($ware_ids);

        }

        $model->configs->rules = [[validatorSafe]];

        $this->paramSet(paramNoEvent, true);

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

        $event->beforeSave = function (ShopOrder $model) {

            if ($this->isNewRecord) {

                if (empty($model->status_callcenter))
                    $model->status_callcenter = ShopOrder::status_callcenter['new'];

                if (empty($model->status_logistics))
                    $model->status_logistics = ShopOrder::status_logistics['new'];

            }

            $model->code = Number::paddingLeft($model->number, 12);

            //   return null;
            $model = Az::$app->market->order->orderApproved($model);

            Az::$app->market->order->enterOrder($model);

            Az::$app->market->order->exitOrder($model);

            Az::$app->market->wares->addInfo($model->id, $model, false);

            Az::$app->market->order->nullShipment($model);

            $model->total_price = (int)$model->price + (int)$model->deliver_price;
        };

        $event->afterSave = static function (ShopOrder $model) {

            Az::$app->market->wares->changeParent($model);

            //  Az::$app->market->wares->paramSet(paramRelatedOn, true);
            Az::$app->market->wares->changeStatusChilds($model);

        };

        /*$event->beforeDelete = function (ShopOrderItem $model) {

            ShopOrderItem::deleteAll([
                'shop_order_id' => $model->id
            ]);

        };*/

        /*$event->beforeSave = function (ShopOrder $model) {

            // $this->value($model);

            if (ZArrayHelper::keyExists($model->status_accept, self::status_logistics))
                $model->status_logistics = $model->status_accept;

            $model->total_price = Az::$app->menu->orderNorms->setTotalPrice($model);

            if ($this->isNewRecord) {
                $model->status_client = ShopOrder::status_client['accepted'];
                $model->status_logistics = ShopOrder::status_logistics['new'];
                $model->status_callcenter = ShopOrder::status_callcenter['new'];
            } else {
                if ($this->emptyOrNullable($model->shop_shipment_id)) {

                    $shopShipment = ShopShipment::findOne($model->shop_shipment_id);
                    if ($shopShipment !== null) {

                    }
                }
            }

        };*/

        /* if (!$this->isNewRecord) {
             if ($model->oldAttributes['operator_id'] == null and $model->operator_id != null) {
                 $model->status = $this->_status['checking'];
             }
             // For add status history on change status
             if ($model->oldAttributes['status'] != $model->status) {
                 $time = date('Y-m-d h:i:s');
                 $new_status = $model->status;
                 $old_status = $model->oldAttributes['status'];
                 $user_id = $this->userIdentity()->id;

                 $new_json = [
                     'time' => $time,
                     'new_status' => $new_status,
                     'old_status' => $old_status,
                     'user_id' => $user_id,
                 ];

                 $status = $model->oldAttributes['status_history'];
                 $status[] = $new_json;

                 $model->status_history = $status;
             }
         }*/

        /*    $event->beforeSave = function (ShopOrder $model) {
                if (!$this->isNewRecord) {

                    switch ($model->status_logistics) {

                        case ShopOrder::status_logistics['buyed']:
                            Az::$app->market->order->orderBuyed($model);
                            break;

                    }

                }
            };*/

        /*
        $event->beforeDelete = function (UserCompany $model) {
        return null;
        };

        $event->afterDelete = function (UserCompany $model) {
        return null;
        };

        $event->beforeSave = function (UserCompany $model) {
        return null;
        };
          */

        /*
        $event->afterSave = function (ShopOrder $model) {

            $del_price = Az::$app->maps->distance->deliverPrice($model->id, $model->user_company_id);

            $model->deliver_price = $del_price;

            $model->save();

        };
        */

        /*
      $event->beforeValidate = function (UserCompany $model) {
      return null;
      };

      $event->afterValidate = function (UserCompany $model) {
      return null;
      };

      $event->afterRefresh = function (UserCompany $model) {
      return null;
      };

      $event->afterFind = function (UserCompany $model) {
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


    /**
     *
     * Function  getUser
     * @return bool|\yii\db\ActiveRecord|User|null
     */            
    public function getUserOne()
    {
        return $this->getOne(User::class, [
          'id' => 'user_id',
      ]);    
    }
    
     /**
     *
     * Function  getUser
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getUser()
    {
        return $this->hasOne(User::class, [
          'id' => 'user_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getResponsible
     * @return bool|\yii\db\ActiveRecord|User|null
     */            
    public function getResponsibleOne()
    {
        return $this->getOne(User::class, [
          'id' => 'responsible',
      ]);    
    }
    
     /**
     *
     * Function  getResponsible
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getResponsible()
    {
        return $this->hasOne(User::class, [
          'id' => 'responsible',
      ]);    
    }
    
    

    /**
     *
     * Function  getOperator
     * @return bool|\yii\db\ActiveRecord|User|null
     */            
    public function getOperatorOne()
    {
        return $this->getOne(User::class, [
          'id' => 'operator',
      ]);    
    }
    
     /**
     *
     * Function  getOperator
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getOperator()
    {
        return $this->hasOne(User::class, [
          'id' => 'operator',
      ]);    
    }
    
    

    /**
     *
     * Function  getDeletedBy
     * @return bool|\yii\db\ActiveRecord|User|null
     */            
    public function getDeletedByOne()
    {
        return $this->getOne(User::class, [
          'id' => 'deleted_by',
      ]);    
    }
    
     /**
     *
     * Function  getDeletedBy
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getDeletedBy()
    {
        return $this->hasOne(User::class, [
          'id' => 'deleted_by',
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
    
    

    /**
     *
     * Function  getParent
     * @return bool|\yii\db\ActiveRecord|ShopOrder|null
     */            
    public function getParentOne()
    {
        return $this->getOne(ShopOrder::class, [
          'id' => 'parent',
      ]);    
    }
    
     /**
     *
     * Function  getParent
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getParent()
    {
        return $this->hasOne(ShopOrder::class, [
          'id' => 'parent',
      ]);    
    }
    
    

    /**
     *
     * Function  getChildren
     * @return bool|\yii\db\ActiveRecord|ShopOrder|null
     */            
    public function getChildrenOne()
    {
        return $this->getOne(ShopOrder::class, [
          'id' => 'children',
      ]);    
    }
    
     /**
     *
     * Function  getChildren
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getChildren()
    {
        return $this->hasOne(ShopOrder::class, [
          'id' => 'children',
      ]);    
    }
    
    

    /**
     *
     * Function  getPlaceAdress
     * @return bool|\yii\db\ActiveRecord|PlaceAdress|null
     */            
    public function getPlaceAdressOne()
    {
        return $this->getOne(PlaceAdress::class, [
          'id' => 'place_adress_id',
      ]);    
    }
    
     /**
     *
     * Function  getPlaceAdress
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getPlaceAdress()
    {
        return $this->hasOne(PlaceAdress::class, [
          'id' => 'place_adress_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getPlaceRegion
     * @return bool|\yii\db\ActiveRecord|PlaceRegion|null
     */            
    public function getPlaceRegionOne()
    {
        return $this->getOne(PlaceRegion::class, [
          'id' => 'place_region_id',
      ]);    
    }
    
     /**
     *
     * Function  getPlaceRegion
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getPlaceRegion()
    {
        return $this->hasOne(PlaceRegion::class, [
          'id' => 'place_region_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getSource
     * @return bool|\yii\db\ActiveRecord|UserCompany|null
     */            
    public function getSourceOne()
    {
        return $this->getOne(UserCompany::class, [
          'id' => 'source',
      ]);    
    }
    
     /**
     *
     * Function  getSource
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getSource()
    {
        return $this->hasOne(UserCompany::class, [
          'id' => 'source',
      ]);    
    }
    
    

    /**
     *
     * Function  getShopRejectCause
     * @return bool|\yii\db\ActiveRecord|ShopRejectCause|null
     */            
    public function getShopRejectCauseOne()
    {
        return $this->getOne(ShopRejectCause::class, [
          'id' => 'shop_reject_cause_id',
      ]);    
    }
    
     /**
     *
     * Function  getShopRejectCause
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getShopRejectCause()
    {
        return $this->hasOne(ShopRejectCause::class, [
          'id' => 'shop_reject_cause_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getShopDelay
     * @return bool|\yii\db\ActiveRecord|ShopDelay|null
     */            
    public function getShopDelayOne()
    {
        return $this->getOne(ShopDelay::class, [
          'id' => 'shop_delay_id',
      ]);    
    }
    
     /**
     *
     * Function  getShopDelay
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getShopDelay()
    {
        return $this->hasOne(ShopDelay::class, [
          'id' => 'shop_delay_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getShopDelayCause
     * @return bool|\yii\db\ActiveRecord|ShopDelayCause|null
     */            
    public function getShopDelayCauseOne()
    {
        return $this->getOne(ShopDelayCause::class, [
          'id' => 'shop_delay_cause_id',
      ]);    
    }
    
     /**
     *
     * Function  getShopDelayCause
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getShopDelayCause()
    {
        return $this->hasOne(ShopDelayCause::class, [
          'id' => 'shop_delay_cause_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getPackaging
     * @return bool|\yii\db\ActiveRecord|ShopPackaging|null
     */            
    public function getPackagingOne()
    {
        return $this->getOne(ShopPackaging::class, [
          'id' => 'packaging',
      ]);    
    }
    
     /**
     *
     * Function  getPackaging
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getPackaging()
    {
        return $this->hasOne(ShopPackaging::class, [
          'id' => 'packaging',
      ]);    
    }
    
    

    /**
     *
     * Function  getShopShipment
     * @return bool|\yii\db\ActiveRecord|ShopShipment|null
     */            
    public function getShopShipmentOne()
    {
        return $this->getOne(ShopShipment::class, [
          'id' => 'shop_shipment_id',
      ]);    
    }
    
     /**
     *
     * Function  getShopShipment
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getShopShipment()
    {
        return $this->hasOne(ShopShipment::class, [
          'id' => 'shop_shipment_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getShopCoupon
     * @return bool|\yii\db\ActiveRecord|ShopCoupon|null
     */            
    public function getShopCouponOne()
    {
        return $this->getOne(ShopCoupon::class, [
          'id' => 'shop_coupon_id',
      ]);    
    }
    
     /**
     *
     * Function  getShopCoupon
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getShopCoupon()
    {
        return $this->hasOne(ShopCoupon::class, [
          'id' => 'shop_coupon_id',
      ]);    
    }
    
    

    /**
     *
     * Function  getShopChannel
     * @return bool|\yii\db\ActiveRecord|ShopChannel|null
     */            
    public function getShopChannelOne()
    {
        return $this->getOne(ShopChannel::class, [
          'id' => 'shop_channel_id',
      ]);    
    }
    
     /**
     *
     * Function  getShopChannel
     * @return \yii\db\ActiveQuery | ZActiveQuery
     */            
    public function getShopChannel()
    {
        return $this->hasOne(ShopChannel::class, [
          'id' => 'shop_channel_id',
      ]);    
    }
    
    


    #endregion

    #region Multi


    /**
     *
     * Function  getUserCompaniesFromUserCompanyIdsMulti
     * @return  null|\yii\db\ActiveRecord[]|UserCompany
     */            
    public function getUserCompaniesFromUserCompanyIdsMulti()
    {
        return $this->getMulti(UserCompany::class, [
          'id' => 'user_company_ids',
      ]);    
    }

    /**
     *
     * Function  getShopElementsFromShopElementIdsMulti
     * @return  null|\yii\db\ActiveRecord[]|ShopElement
     */            
    public function getShopElementsFromShopElementIdsMulti()
    {
        return $this->getMulti(ShopElement::class, [
          'id' => 'shop_element_ids',
      ]);    
    }

    /**
     *
     * Function  getWaresFromWareIdsMulti
     * @return  null|\yii\db\ActiveRecord[]|Ware
     */            
    public function getWaresFromWareIdsMulti()
    {
        return $this->getMulti(Ware::class, [
          'id' => 'ware_ids',
      ]);    
    }


    #endregion
    
    #region Many


    /**
     *
     * Function  getShopOrdersWithParentMany
     * @return  null|\yii\db\ActiveRecord[]|ShopOrder
     */            
    public function getShopOrdersWithParentMany()
    {
       return $this->getMany(ShopOrder::class, [
            'parent' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getShopOrdersWithParent
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getShopOrdersWithParent()
    {
       return $this->hasMany(ShopOrder::class, [
            'parent' => 'id',
        ]);     
    }

    /**
     *
     * Function  getShopOrdersWithChildrenMany
     * @return  null|\yii\db\ActiveRecord[]|ShopOrder
     */            
    public function getShopOrdersWithChildrenMany()
    {
       return $this->getMany(ShopOrder::class, [
            'children' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getShopOrdersWithChildren
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getShopOrdersWithChildren()
    {
       return $this->hasMany(ShopOrder::class, [
            'children' => 'id',
        ]);     
    }

    /**
     *
     * Function  getShopOrderItemsWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|ShopOrderItem
     */            
    public function getShopOrderItemsWithShopOrderIdMany()
    {
       return $this->getMany(ShopOrderItem::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getShopOrderItemsWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getShopOrderItemsWithShopOrderId()
    {
       return $this->hasMany(ShopOrderItem::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getShopPaymentsWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|ShopPayment
     */            
    public function getShopPaymentsWithShopOrderIdMany()
    {
       return $this->getMany(ShopPayment::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getShopPaymentsWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getShopPaymentsWithShopOrderId()
    {
       return $this->hasMany(ShopPayment::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getCallsCdrsWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|CallsCdr
     */            
    public function getCallsCdrsWithShopOrderIdMany()
    {
       return $this->getMany(CallsCdr::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getCallsCdrsWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getCallsCdrsWithShopOrderId()
    {
       return $this->hasMany(CallsCdr::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getCallsCelsWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|CallsCel
     */            
    public function getCallsCelsWithShopOrderIdMany()
    {
       return $this->getMany(CallsCel::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getCallsCelsWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getCallsCelsWithShopOrderId()
    {
       return $this->hasMany(CallsCel::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getCallsOrdersWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|CallsOrder
     */            
    public function getCallsOrdersWithShopOrderIdMany()
    {
       return $this->getMany(CallsOrder::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getCallsOrdersWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getCallsOrdersWithShopOrderId()
    {
       return $this->hasMany(CallsOrder::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getCallsRecordsWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|CallsRecord
     */            
    public function getCallsRecordsWithShopOrderIdMany()
    {
       return $this->getMany(CallsRecord::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getCallsRecordsWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getCallsRecordsWithShopOrderId()
    {
       return $this->hasMany(CallsRecord::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getCallsUsermenWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|CallsUserman
     */            
    public function getCallsUsermenWithShopOrderIdMany()
    {
       return $this->getMany(CallsUserman::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getCallsUsermenWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getCallsUsermenWithShopOrderId()
    {
       return $this->hasMany(CallsUserman::class, [
            'shop_order_id' => 'id',
        ]);     
    }

    /**
     *
     * Function  getCpasTrackersWithShopOrderIdMany
     * @return  null|\yii\db\ActiveRecord[]|CpasTracker
     */            
    public function getCpasTrackersWithShopOrderIdMany()
    {
       return $this->getMany(CpasTracker::class, [
            'shop_order_id' => 'id',
        ]);     
    }
    
    /**
     *
     * Function  getCpasTrackersWithShopOrderId
     * @return  null|\yii\db\ActiveQuery
     */            
    public function getCpasTrackersWithShopOrderId()
    {
       return $this->hasMany(CpasTracker::class, [
            'shop_order_id' => 'id',
        ]);     
    }


    #endregion


}
