<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\calls\CallsExtens;

class CallsExtensInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CallsExtens();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '6001';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->password = '6001';
        $this->save();


    }

}
