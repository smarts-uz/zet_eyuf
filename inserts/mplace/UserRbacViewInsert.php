<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbacView;

class UserRbacViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbacView();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Guest';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'guest',
            'client',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'supervisor';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'supervisor',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'agent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'agent',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'komplektatsiya';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'complect',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Клиент';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'client',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'admin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'admin',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'logistiks';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'logistics',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


    }

}
