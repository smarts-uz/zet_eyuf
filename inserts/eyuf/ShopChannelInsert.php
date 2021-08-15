<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Chanel Name';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
