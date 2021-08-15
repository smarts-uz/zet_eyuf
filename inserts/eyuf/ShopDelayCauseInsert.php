<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Shop Name';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
