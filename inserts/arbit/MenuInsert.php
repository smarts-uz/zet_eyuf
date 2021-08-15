<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\menu\Menu;

class MenuInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Menu();

        $this->model->id = 22;
        $this->model->sort = 2;
        $this->model->name = 'user';
        $this->model->title = 'user';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'user',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Офферы',
                'action' => '/arbit/user/offer',
                'role[]' => [],
                'target' => '_top',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Потоки',
                'action' => '/arbit/user/flows',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Cтатистика',
                'action' => '/arbit/user/statistic',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Финансы',
                'action' => '/arbit/user/finance',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Настройки профиля',
                'action' => '/arbit/user/profile-settings',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 21;
        $this->model->sort = 1;
        $this->model->name = 'adminstrator';
        $this->model->title = 'admin';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'admin',
        ];
        $this->model->json = [
            [
                'icon' => 'fa-trophy',
                'text' => 'Офферы',
                'action' => '/cpas/admin/offer',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => 'fa-sitemap',
                'text' => 'Потоки',
                'action' => '/cpas/admin/flows',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => 'fa-chart-bar',
                'text' => 'Cтатистика',
                'action' => '/cpas/admin/statistic',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'text' => 'Контроль заказа',
                'action' => '/cpas/admin/track',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => 'fa-user',
                'text' => 'Настройки профиля',
                'action' => '/cpas/admin/profile-settings',
                'role[]' => [],
                'target' => '_self',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => 'fa-sack-dollar',
                'text' => 'Управление выплатами',
                'action' => '/cpas/admin/payout',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => 'fa-envelope-open-dollar',
                'text' => 'История выплат',
                'action' => '/cpas/admin/payoutHistory',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Управление компании',
                'action' => '/cpas/admin/company',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
        ];
        $this->save();


        $this->model = new Menu();

        $this->model->id = 23;
        $this->model->sort = 3;
        $this->model->name = 'client';
        $this->model->title = 'client';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->inline = 1;
        $this->model->icon = '';
        $this->model->role = [
            'client',
        ];
        $this->model->json = [
            [
                'icon' => '',
                'text' => 'Офферы',
                'action' => '/cpas/client/offer',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Потоки',
                'action' => '/cpas/client/flows',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Cтатистика',
                'action' => '/cpas/client/statistic',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'text' => 'Faq',
                'action' => '/cpas/faq/index',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'undefined' => '',
            ],
            [
                'icon' => '',
                'text' => 'Финансы',
                'action' => '/cpas/client/payment/payment',
                'role[]' => [],
                'target' => '',
                'class[]' => [],
                'children' => [
                    [
                        'icon' => '',
                        'text' => 'Реквизиты',
                        'action' => '/cpas/client/payment/index',
                        'role[]' => [],
                        'target' => '',
                        'class[]' => [],
                        'undefined' => '',
                    ],
                    [
                        'icon' => '',
                        'text' => 'Заказать выплату',
                        'action' => '/cpas/client/payment/payout',
                        'role[]' => [],
                        'target' => '',
                        'class[]' => [],
                        'undefined' => '',
                    ],
                ],
                'undefined' => '',
            ],
        ];
        $this->save();


    }

}
