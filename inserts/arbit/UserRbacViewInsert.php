<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbacView;

class UserRbacViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbacView();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Client';
        $this->model->title = '';
        $this->model->tranz = null;
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
        $this->model->name = 'Guest';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->roles = [
            'user',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Admin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->roles = [
            'admin',
        ];
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


    }

}
