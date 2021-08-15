<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'admin1';
        $this->model->password = '123';
        $this->model->ext_name = 'extention';
        $this->model->ext_password = '321';
        $this->model->created_at = '2020-09-04 14:08:07';
        $this->model->modified_at = '2020-09-04 14:08:07';
        $this->model->created_by = 76;
        $this->model->modified_by = 76;
        $this->save();


        $this->model = new CallsAdmin();

        $this->model->id = 5;
        $this->model->name = 'admin test';
        $this->model->password = 'admin123';
        $this->model->ext_name = 'testextension';
        $this->model->ext_password = 'ext123';
        $this->model->created_at = '2020-09-04 14:38:08';
        $this->model->modified_at = '2020-09-04 14:38:08';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsAdmin();

        $this->model->id = 6;
        $this->model->name = 'admin test';
        $this->model->password = 'admin123';
        $this->model->ext_name = 'testextension';
        $this->model->ext_password = 'ext123';
        $this->model->created_at = '2020-09-04 14:38:13';
        $this->model->modified_at = '2020-09-04 14:38:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsAdmin();

        $this->model->id = 7;
        $this->model->name = 'admin2';
        $this->model->password = 'admin2';
        $this->model->ext_name = 'test';
        $this->model->ext_password = 'test';
        $this->model->created_at = '2020-09-04 15:35:41';
        $this->model->modified_at = '2020-09-04 15:35:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
