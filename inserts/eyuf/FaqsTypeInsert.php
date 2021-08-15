<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\faqs\FaqsType;

class FaqsTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new FaqsType();

        $this->model->id = 1;
        $this->model->sort = 5;
        $this->model->name = 'Гость';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->save();


    }

}
