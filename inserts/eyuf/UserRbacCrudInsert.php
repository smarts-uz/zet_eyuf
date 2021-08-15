<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbacCrud;

class UserRbacCrudInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbacCrud();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'safasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->models = [
            'DynaChess',
            'DynaChessItem',
            'DynaChessQuery',
            'DynaDynagrid',
            'UserRbacCrud',
            'UserRbacView',
        ];
        $this->save();


    }

}
