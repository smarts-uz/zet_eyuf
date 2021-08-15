<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\auto\AutoModel;

class AutoModelInsert extends ZInsert
{

    public function run()
    {

        $this->model = new AutoModel();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Lacetti';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Spark';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Matiz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Cobalt';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Nexia';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
