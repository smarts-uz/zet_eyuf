<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\chat\ChatGroup;

class ChatGroupInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ChatGroup();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->owner = null;
        $this->model->photo = "";
        $this->model->user_ids = "";
        $this->save();


    }

}
