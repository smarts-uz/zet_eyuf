<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\menu\Menu;

class MenuInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Menu();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'cpi';
        $this->model->title = 'CPA';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = 'fas fa-address-book';
        $this->model->role = "";
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Справочник';
        $this->model->title = 'Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = "";
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Панель Логистики';
        $this->model->title = 'Панель Логистики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'logistics',
            'logistics_region',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Панель Супервайзора';
        $this->model->title = 'Панель Супервайзора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'supervisor',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Панель Менеджер склада';
        $this->model->title = 'Панель Менеджер склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'warehouse',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Справочник';
        $this->model->title = 'Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = "";
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Панель Администратора';
        $this->model->title = 'Панель Администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'admin',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Оператор';
        $this->model->title = 'Оператор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'agent',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Комплектовщик';
        $this->model->title = 'Комплектовщик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'complect',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Справочник';
        $this->model->title = 'Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'cpa',
            'seller',
            'logistics',
            'logistics_region',
            'deliver',
            'complect',
            'complect_region',
            'warehouse',
            'warehouse_region',
            'client',
            'agent',
            'supervisor',
            'clientcpa',
            'moder',
            'dev',
            'user',
            'admin',
        ];
        $this->model->json = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new Menu();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Продавец';
        $this->model->title = 'Продавец';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '';
        $this->model->icon = '';
        $this->model->role = [
            'seller',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Продукты',
                'action' => '/crud/shop-product/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Элементы продукта',
                'action' => '/crud/shop-element/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Каталог магазина',
                'action' => '/crud/shop-catalog/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Категории',
                'action' => '/crud/shop-category/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Склады',
                'action' => '/crud/ware/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Каталог магазина распределенный по складам',
                'action' => '/crud/shop-catalog-ware/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Бренды',
                'action' => '/crud/shop-brand/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Заказы',
                'action' => '/crud/shop-order/index',
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
                'text' => 'Специальные предложения',
                'action' => '/crud/shop-offer/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Категории параметров',
                'action' => '/crud/shop-option-branch/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Параметры продукта',
                'action' => '/crud/shop-option-type/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Значения параметров',
                'action' => '/crud/shop-option/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'text' => 'Доставка заказов',
                'action' => '/crud/shop-shipment/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
