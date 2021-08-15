<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbacApi;

class UserRbacApiInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbacApi();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'guest';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'guest',
        ];
        $this->model->page_api_ids = [
            '127',
        ];
        $this->save();


        $this->model = new UserRbacApi();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_api_ids = "";
        $this->save();


    }

}
