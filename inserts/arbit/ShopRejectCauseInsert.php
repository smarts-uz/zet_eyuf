<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopRejectCause;

class ShopRejectCauseInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopRejectCause();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Отмена';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


    }

}
