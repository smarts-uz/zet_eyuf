<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\govs\GovsDegree;

class GovsDegreeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new GovsDegree();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Профессор';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new GovsDegree();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Доктор наук';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new GovsDegree();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Доктор философии';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
