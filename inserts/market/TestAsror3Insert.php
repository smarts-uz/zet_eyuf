<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestAsror3;

class TestAsror3Insert extends ZInsert
{

    public function run()
    {

        $this->model = new TestAsror3();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->number = 'null';
        $this->model->phone_number = '';
        $this->model->user_name = '';
        $this->model->email = 'fsffsfsfasdf';
        $this->model->region = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
