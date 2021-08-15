<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestMirshod2;

class TestMirshod2Insert extends ZInsert
{

    public function run()
    {

        $this->model = new TestMirshod2();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'sdfkljsdf';
        $this->model->code = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->number = '';
        $this->model->email = 'dkfjsjld@gmail.com';
        $this->model->username = '';
        $this->save();


        $this->model = new TestMirshod2();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Заказ клиента № от 2020-10-21 11:38:29. Ф.И.О ';
        $this->model->code = '000000000000';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->number = '';
        $this->model->email = 'dkfjsjld@gmail.com';
        $this->model->username = '';
        $this->save();


    }

}
