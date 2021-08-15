<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestDilshod;

class TestDilshodInsert extends ZInsert
{

    public function run()
    {

        $this->model = new TestDilshod();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->user_id = '';
        $this->model->user_ids = '';
        $this->model->data2 = "";
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestDilshod();

        $this->model->id = 2;
        $this->model->name = '';
        $this->model->user_id = '';
        $this->model->user_ids = '';
        $this->model->data2 = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestDilshod();

        $this->model->id = 1;
        $this->model->name = '';
        $this->model->user_id = '';
        $this->model->user_ids = '';
        $this->model->data2 = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestDilshod();

        $this->model->id = 4;
        $this->model->name = '';
        $this->model->user_id = '';
        $this->model->user_ids = '';
        $this->model->data2 = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
