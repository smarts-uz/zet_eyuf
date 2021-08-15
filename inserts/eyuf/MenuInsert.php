<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\menu\Menu;

class MenuInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Menu();

        $this->model->id = 32;
        $this->model->sort = 4;
        $this->model->name = 'moderator';
        $this->model->title = 'Модератор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'moderator',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Окно модератора',
                'action' => '/eyuf/logics/moderator/index',
                'role[]' => [],
                'target' => '_blank',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Документы на подтверждение',
                'action' => '/eyuf/logics/moderator/docs',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Документы на подтверждение',
                'action' => '/eyuf/logics/moderator/doc-check',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запрос потребностей по количеству',
                'action' => '/eyuf/logics/moderator/need-count-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запросы к стипендиантам',
                'action' => '/eyuf/logics/moderator/need-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запрос к cоотечественникам',
                'action' => '/eyuf/logics/moderator/need-compatriot-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => 'id=117',
                'icon' => '',
                'text' => 'Список Потребности',
                'action' => '/eyuf/logics/moderator/need-count-index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Просмотр  Потребности',
                'action' => '/eyuf/logics/moderator/need-compatriot-view',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список потребностей по соотечественникам',
                'action' => '/eyuf/logics/moderator/need-compatriot-index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/eyuf/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 28;
        $this->model->sort = 2;
        $this->model->name = 'guest';
        $this->model->title = 'Гость';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'user',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Соотечественники';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'compatriot',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Соотечественники',
                'action' => '/eyuf/logics/compatriot/index-compatriot',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список',
                'action' => '/eyuf/logics/compatriot/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список Потребности',
                'action' => '/eyuf/logics/needer/need-all-index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запрос потребностей по количеству',
                'action' => '/eyuf/logics/moderator/need-count-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запрос к соотечественникам',
                'action' => '/eyuf/logics/needer/need-compatriot-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Форма соотечественников',
                'action' => '/eyuf/logics/compatriot/setting',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Создание Соотечественники',
                'action' => '/eyuf/logics/compatriot/form',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/core/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Отдель мониторинг';
        $this->model->title = 'Отдель мониторинг';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'monitor',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Основная Страница',
                'action' => '/eyuf/logics/monitor/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список Стипендиант',
                'action' => '/eyuf/logics/admin/scholars',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список Документ',
                'action' => '/eyuf/logics/monitor/report-list',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/core/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Interqua';
        $this->model->title = 'Interqua';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'interqua',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Основное окно',
                'action' => '/eyuf/logics/interqua/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'text' => 'Чат',
                'action' => '/core/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Отдель потребностей';
        $this->model->title = 'Отдель потребностей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'needer',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Стипендианты',
                'action' => '/eyuf/logics/monitor/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список потребности к соотечественникам',
                'action' => '/eyuf/logics/needer/need-compatriot-index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Потребности по колличеству',
                'action' => '/eyuf/logics/needer/need-count-index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запрос к соотечественникам',
                'action' => '/eyuf/logics/needer/need-compatriot-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запросы к стипендиантам',
                'action' => '/eyuf/logics/needer/need-request',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список Потребности',
                'action' => '/eyuf/logics/needer/need-all-index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Запросы',
                'action' => '/eyuf/logics/needer/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/core/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Macdoc';
        $this->model->title = 'Macdoc';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'masdoc',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Основное окно',
                'action' => '/eyuf/logics/masdoc/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 29;
        $this->model->sort = 3;
        $this->model->name = 'Admin';
        $this->model->title = 'Администратор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'admin',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Админ панель',
                'action' => '/eyuf/logics/admin/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Окно модератора',
                'action' => '/eyuf/logics/moderator/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Список Стипендиант',
                'action' => '/eyuf/logics/admin/scholars',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Организации',
                'action' => '/eyuf/logics/admin/organizations',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/eyuf/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'accounter';
        $this->model->title = 'Отдель бухгалтерии';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'accounter',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Стипендианты',
                'action' => '/eyuf/logics/accounter/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Таблица с расходом',
                'action' => '/eyuf/logics/accounter/index-full',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Настройки',
                'action' => '/eyuf/logics/accounter/settings',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/eyuf/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'text' => 'Список Валюты',
                'action' => '/ru/crud/pays-currency/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 34;
        $this->model->sort = 1;
        $this->model->name = 'Стипендиант';
        $this->model->title = 'Стипендиант';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->target = '_self';
        $this->model->icon = '';
        $this->model->role = [
            'scholar',
        ];
        $this->model->json = [
            [
                'args' => '',
                'icon' => '',
                'text' => 'Мои документы',
                'action' => '/eyuf/logics/scholar/docs',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Мои отчеты',
                'action' => '/eyuf/logics/scholar/reports',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Информация',
                'action' => '/eyuf/logics/scholar/add-info',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Измененить пароль',
                'action' => '/core/user/change-password/edit',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Новости',
                'action' => '/eyuf/cores/news/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Чат',
                'action' => '/core/chat/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'ЧАВО',
                'action' => '/eyuf/cores/faqs/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Карта',
                'action' => '/eyuf/cores/map/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'args' => '',
                'icon' => '',
                'text' => 'Адрес',
                'action' => '/eyuf/cores/address/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


    }

}
