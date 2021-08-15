<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\lang\LangNationality;

class LangNationalityInsert extends ZInsert
{

    public function run()
    {

        $this->model = new LangNationality();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Uzbek';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->lang = '';
        $this->save();


        $this->model = new LangNationality();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->lang = '';
        $this->save();


    }

}
