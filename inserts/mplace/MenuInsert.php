<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\menu\Menu;

class MenuInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Menu();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'supervisor';
        $this->model->title = 'Панель Супервайзора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'supervisor',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Создание Заказы',
                'action' => '/shop/supervisor/main/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Пользователи',
                'action' => '/shop/supervisor/user/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Управление статусом оператора',
                'action' => '/shop/supervisor/stats/status-operator',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Статистика по времени работы операторов',
                'action' => '/shop/supervisor/stats/stats-worked',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Статусы звонков',
                'action' => '/shop/supervisor/stats/stats-calls',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Звонки колл центра',
                'action' => '/shop/supervisor/calls-cdr/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'text' => 'Детализация звонков',
                'action' => '/shop/supervisor/calls-cel/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'ware-house';
        $this->model->title = 'Панель Менеджер склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'warehouse',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Заказы',
                'action' => '/shop/warehouse/shop-order/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => 'fa fal-film',
                'text' => 'Поступление товаров в склад',
                'action' => '/shop/warehouse/ware-enter/index',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Отгрузка товаров со склада',
                'action' => '/shop/warehouse/ware-exit/index',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Перемещение между складами',
                'action' => '/shop/warehouse/ware-trans/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Возврат товаров от клиентов',
                'action' => '/shop/warehouse/ware-return/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'text' => 'Заказы Узбекистан',
                'action' => '/core/help/indexToshkent',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'admin';
        $this->model->title = 'Панель Администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'admin',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Заказы',
                'action' => '/shop/admin/shop-order/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Назначение заказов курьеру',
                'action' => '/shop/admin/shop-shipment/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Передача заказов в подотчёт курьеру',
                'action' => '/shop/admin/ware-send/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Приёмка от курьера',
                'action' => '/shop/admin/ware-accept/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Поступление товаров в склад',
                'action' => '/shop/admin/ware-enter/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Отгрузка товаров со склада',
                'action' => '/shop/admin/ware-exit/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Перенос даты доставки',
                'action' => '/shop/admin/shop-delay/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Возврат товаров от клиентов',
                'action' => '/shop/admin/ware-return/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Пользователи',
                'action' => '/shop/admin/user/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Универсальный отчёт',
                'action' => '/shop/admin/universal-report/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Ежедневный отчёт',
                'action' => '/shop/admin/daily-report/dailyreport',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'all admin_16';
        $this->model->title = 'Все страницы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'admin',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Заказы',
                'action' => '/shop/admin/shop-order/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Назначение заказов курьеру',
                'action' => '/shop/admin/shop-shipment/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Поступление товаров в склад',
                'action' => '/shop/admin/ware-enter/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Отгрузка товаров со склада',
                'action' => '/shop/admin/ware-exit/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Перемещение между складами',
                'action' => '/shop/admin/ware-trans/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Приёмка от курьера',
                'action' => '/shop/admin/ware-accept/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Перенос даты доставки',
                'action' => '/shop/admin/shop-delay/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'logistics';
        $this->model->title = 'Панель Логистики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'logistics',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Заказы',
                'action' => '/shop/logistics/shop-order/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Назначение заказов курьеру',
                'action' => '/shop/logistics/shop-shipment/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Приёмка от курьера',
                'action' => '/shop/logistics/ware-accept/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Возврат товаров от клиентов',
                'action' => '/shop/logistics/ware-return/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Универсальный отчёт',
                'action' => '/shop/admin/universal-report/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Заказы Узбекистан',
                'action' => '/core/help/order-toshkent/indexToshkent',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'seller_18asdf';
        $this->model->title = 'Организация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'cpa',
            'seller',
            'logistics',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Панель организации',
                'action' => '/shop/seller/main/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Продукты',
                'action' => '/shop/seller/shop-product/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Элементы',
                'action' => '/shop/seller/shop-element/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Каталог магазина',
                'action' => '/shop/seller/shop-catalog/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Заказы',
                'action' => '/shop/seller/shop-order/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Элементы заказа',
                'action' => '/shop/seller/shop-order-item/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Вопросы и ответы',
                'action' => '/shop/seller/shop-question/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Назначение заказов курьеру',
                'action' => '/shop/seller/shop-shipment/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


    }

}
