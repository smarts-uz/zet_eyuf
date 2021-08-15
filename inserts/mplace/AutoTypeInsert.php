<?php

namespace zetsoft\inserts\mplace;

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
        $this->model->sort = null;
        $this->model->name = 'Седан';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Хэтчбек';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Универсал';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Лифтбэк';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new AutoType();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Внедорожник';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
