<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChess;

class DynaChessInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChess();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Статистика по тракинг';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'CpasTracker';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Статистика по оффера';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'CpasStream';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
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
