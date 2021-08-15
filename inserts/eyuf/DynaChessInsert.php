<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChess;

class DynaChessInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChess();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'EyufScholar';
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

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'EyufRequest';
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

        $this->model->id = 6;
        $this->model->sort = 1;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'PageApi';
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

        $this->model->id = 4;
        $this->model->sort = 2;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'PageApi';
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

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'EyufDocumentType';
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
