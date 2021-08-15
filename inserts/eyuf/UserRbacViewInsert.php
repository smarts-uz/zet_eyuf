<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbacView;

class UserRbacViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbacView();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'accounter',
            'user',
        ];
        $this->model->page_view_type_ids = [
            '3241',
            '3273',
            '3324',
            '3325',
        ];
        $this->model->page_view_ids = "";
        $this->save();


    }

}
