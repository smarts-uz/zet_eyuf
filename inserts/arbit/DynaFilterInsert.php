<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaFilter;

class DynaFilterInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaFilter();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'asasdasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'filter';
        $this->model->data = "";
        $this->model->dynaId = 'PageAction-0';
        $this->save();


    }

}
