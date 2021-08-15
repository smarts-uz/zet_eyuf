<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufManual;

class EyufManualInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufManual();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'test khr';
        $this->model->title = 'this is test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->save();


        $this->model = new EyufManual();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->save();


        $this->model = new EyufManual();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->save();


        $this->model = new EyufManual();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->save();


        $this->model = new EyufManual();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'fewfswdw,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->save();


    }

}
