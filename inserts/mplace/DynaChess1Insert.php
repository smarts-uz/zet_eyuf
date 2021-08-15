<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChess1;

class DynaChess1Insert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChess1();

        $this->model->id = 1;
        $this->model->sort = 1;
        $this->model->name = 'Для проверки документа ПРИЕМКА ';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->configs->query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->created_at = '2020-09-25 13:37:03';
        $this->model->modified_at = '2020-10-08 11:54:34';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new DynaChess1();

        $this->model->id = 2;
        $this->model->sort = 2;
        $this->model->name = 'Причины отказов';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->configs->query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->created_at = '2020-10-08 18:30:29';
        $this->model->modified_at = '2020-10-08 18:31:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new DynaChess1();

        $this->model->id = 3;
        $this->model->sort = 3;
        $this->model->name = '';
        $this->model->active = null;
        $this->model->models = '';
        $this->model->configs->query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->created_at = '2020-10-09 10:34:57';
        $this->model->modified_at = '2020-10-09 10:34:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
