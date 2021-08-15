<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopChannel;

class ShopChannelInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopChannel();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Chanel Name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
