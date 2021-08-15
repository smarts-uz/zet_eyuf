<?php

namespace zetsoft\inserts\market;

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
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'filter';
        $this->model->data = "";
        $this->model->dynaId = 'PageAction-0';
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
