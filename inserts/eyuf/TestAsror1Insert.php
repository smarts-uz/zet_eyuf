<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestAsror;

class TestAsror1Insert extends ZInsert
{

    public function run()
    {

        $this->model = new TestAsror();

        $this->model->id = 7;
        $this->model->name = '21121121241241';
        $this->model->icon = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 10;
        $this->model->name = '';
        $this->model->icon = 'gl gl gl';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 8;
        $this->model->name = 'it is name';
        $this->model->icon = 'gl gl gl';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
