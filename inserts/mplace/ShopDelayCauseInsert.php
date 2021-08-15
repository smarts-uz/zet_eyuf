<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopDelayCause;

class ShopDelayCauseInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopDelayCause();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Shop Namevcvc';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
