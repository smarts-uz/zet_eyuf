<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopReviewOption;

class ShopReviewOptionInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopReviewOption();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->save();


    }

}
