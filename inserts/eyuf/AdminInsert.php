<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\db3\Admin;

class AdminInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Admin();

        $this->model->variable = 'ALLOW_SIP_ANON';
        $this->model->value = 'no';
        $this->save();


        $this->model = new Admin();

        $this->model->variable = 'default_directory';
        $this->model->value = '1';
        $this->save();


        $this->model = new Admin();

        $this->model->variable = 'directory28_migrated';
        $this->model->value = '1';
        $this->save();


        $this->model = new Admin();

        $this->model->variable = 'need_reload';
        $this->model->value = 'false';
        $this->save();


        $this->model = new Admin();

        $this->model->variable = 'version';
        $this->model->value = '15.0.16.42';
        $this->save();


    }

}
