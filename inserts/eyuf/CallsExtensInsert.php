<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = '6001';
        $this->model->password = '6001';
        $this->model->created_at = '2020-09-04 14:29:16';
        $this->model->modified_at = '2020-09-04 14:29:16';
        $this->model->created_by = 163;
        $this->model->modified_by = 163;
        $this->save();


    }

}
