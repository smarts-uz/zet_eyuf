<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\news\NewsType;

class NewsTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new NewsType();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Политика';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new NewsType();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Спорт';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new NewsType();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Информационные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
