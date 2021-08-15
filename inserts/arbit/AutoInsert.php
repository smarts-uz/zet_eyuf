<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\auto\Auto;

class AutoInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Auto();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Lacetti';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->number = 354;
        $this->model->year = 2020;
        $this->model->color = 'Black';
        $this->model->auto_type_id = 5;
        $this->model->auto_model_id = 6;
        $this->save();


        $this->model = new Auto();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Cobalt';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->number = 265;
        $this->model->year = 2014;
        $this->model->color = 'Black';
        $this->model->auto_type_id = 7;
        $this->model->auto_model_id = 7;
        $this->save();


        $this->model = new Auto();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Matiz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->number = 144;
        $this->model->year = 2019;
        $this->model->color = 'Black';
        $this->model->auto_type_id = 4;
        $this->model->auto_model_id = 4;
        $this->save();


        $this->model = new Auto();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Spark';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->number = 255;
        $this->model->year = 2017;
        $this->model->color = 'red';
        $this->model->auto_type_id = 4;
        $this->model->auto_model_id = 5;
        $this->save();


        $this->model = new Auto();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Nexia';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->number = 576;
        $this->model->year = 2018;
        $this->model->color = 'Qora';
        $this->model->auto_type_id = 3;
        $this->model->auto_model_id = 8;
        $this->save();


    }

}
