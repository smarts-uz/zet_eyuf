<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Serie 123';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
