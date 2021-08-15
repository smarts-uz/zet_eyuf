<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\calls\CallsAdmin;

class CallsAdminInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CallsAdmin();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'admin1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->password = '123';
        $this->model->ext_name = 'extention';
        $this->model->ext_password = '321';
        $this->save();


        $this->model = new CallsAdmin();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'admin test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->password = 'admin123';
        $this->model->ext_name = 'testextension';
        $this->model->ext_password = 'ext123';
        $this->save();


        $this->model = new CallsAdmin();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'admin test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->password = 'admin123';
        $this->model->ext_name = 'testextension';
        $this->model->ext_password = 'ext123';
        $this->save();


        $this->model = new CallsAdmin();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'admin2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->password = 'admin2';
        $this->model->ext_name = 'test';
        $this->model->ext_password = 'test';
        $this->save();


    }

}
