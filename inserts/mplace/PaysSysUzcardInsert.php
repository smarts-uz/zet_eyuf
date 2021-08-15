<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysSysUzcard;

class PaysSysUzcardInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysSysUzcard();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_region_id = 184;
        $this->model->parent_id = null;
        $this->model->ware_id = 59;
        $this->save();


    }

}
