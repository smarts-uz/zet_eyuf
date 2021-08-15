<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestFile2;

class TestFile2Insert extends ZInsert
{

    public function run()
    {

        $this->model = new TestFile2();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->file = '';
        $this->model->cbu = '';
        $this->model->single = [
            'Screenshot_1 — копия.png',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
