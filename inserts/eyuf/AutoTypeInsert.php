<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\auto\AutoType;

class AutoTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new AutoType();

        $this->model->id = 7;
        $this->model->name = 'Седан';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 6;
        $this->model->name = 'Хэтчбек';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 5;
        $this->model->name = 'Универсал';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 4;
        $this->model->name = 'Лифтбэк';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 3;
        $this->model->name = 'Внедорожник';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
