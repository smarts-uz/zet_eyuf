<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbac;

class UserRbacInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbac();

        $this->model->id = 6;
        $this->model->name = 'user';
        $this->model->roles = [
            'user',
        ];
        $this->model->active = null;
        $this->model->target = 'module';
        $this->model->page_module_ids = [
            '2',
            '3',
            '4',
            '6',
            '7',
            '8',
            '9',
            '10',
            '13',
            '17',
            '19',
            '20',
            '23',
            '24',
        ];
        $this->model->page_control_ids = '';
        $this->model->page_action_ids = '';
        $this->model->common = '';
        $this->save();


        $this->model = new UserRbac();

        $this->model->id = 7;
        $this->model->name = 'moderator';
        $this->model->roles = [
            'moder',
        ];
        $this->model->active = null;
        $this->model->target = 'module';
        $this->model->page_module_ids = [
            '2',
            '3',
            '4',
            '6',
            '7',
            '8',
            '9',
            '10',
            '17',
            '19',
            '20',
            '23',
            '24',
        ];
        $this->model->page_control_ids = '';
        $this->model->page_action_ids = '';
        $this->model->common = '';
        $this->save();


        $this->model = new UserRbac();

        $this->model->id = 5;
        $this->model->name = 'admin';
        $this->model->roles = [
            'admin',
        ];
        $this->model->active = null;
        $this->model->target = 'module';
        $this->model->page_module_ids = '';
        $this->model->page_control_ids = '';
        $this->model->page_action_ids = '';
        $this->model->common = '';
        $this->save();


    }

}
