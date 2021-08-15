<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareSeries;

class WareSeriesInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareSeries();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Serie 123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


    }

}
