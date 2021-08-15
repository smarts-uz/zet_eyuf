<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\doft\DoftShippers;

class DoftShippersInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DoftShippers();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->origin = '';
        $this->model->destination = '';
        $this->model->pickup_date = null;
        $this->model->equipment = '';
        $this->model->max_weight = null;
        $this->model->size = null;
        $this->model->max_distance = null;
        $this->model->price = null;
        $this->save();


    }

}
