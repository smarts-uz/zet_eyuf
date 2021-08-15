<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestAsror;

class TestAsrorInsert extends ZInsert
{

    public function run()
    {

        $this->model = new TestAsror();

        $this->model->id = 111;
        $this->model->name = '';
        $this->model->number = '1234';
        $this->model->email = '1234';
        $this->model->created_at = '2020-10-05 23:10:03';
        $this->model->modified_at = '2020-10-07 13:48:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 112;
        $this->model->name = '';
        $this->model->number = '';
        $this->model->email = '';
        $this->model->created_at = '2020-10-07 19:39:36';
        $this->model->modified_at = '2020-10-07 19:39:36';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 113;
        $this->model->name = '';
        $this->model->number = '';
        $this->model->email = '';
        $this->model->created_at = '2020-10-07 19:39:42';
        $this->model->modified_at = '2020-10-07 19:39:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 114;
        $this->model->name = '';
        $this->model->number = 'sadfsa';
        $this->model->email = 'sadfsa';
        $this->model->created_at = '2020-10-07 19:40:22';
        $this->model->modified_at = '2020-10-07 19:40:26';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 115;
        $this->model->name = '';
        $this->model->number = '';
        $this->model->email = '';
        $this->model->created_at = '2020-10-07 19:42:19';
        $this->model->modified_at = '2020-10-07 19:42:19';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 116;
        $this->model->name = '';
        $this->model->number = '';
        $this->model->email = '';
        $this->model->created_at = '2020-10-07 19:42:25';
        $this->model->modified_at = '2020-10-07 19:42:25';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 117;
        $this->model->name = '';
        $this->model->number = '';
        $this->model->email = '';
        $this->model->created_at = '2020-10-07 20:00:59';
        $this->model->modified_at = '2020-10-07 20:01:02';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new TestAsror();

        $this->model->id = 118;
        $this->model->name = '';
        $this->model->number = '';
        $this->model->email = '';
        $this->model->created_at = '2020-10-07 20:01:06';
        $this->model->modified_at = '2020-10-07 20:01:06';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
