<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\auto\AutoModel;

class AutoModelInsert extends ZInsert
{

    public function run()
    {

        $this->model = new AutoModel();

        $this->model->id = 6;
        $this->model->name = 'Lacetti';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 5;
        $this->model->name = 'Spark';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 4;
        $this->model->name = 'Matiz';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 7;
        $this->model->name = 'Cobalt';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoModel();

        $this->model->id = 8;
        $this->model->name = 'Nexia';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
