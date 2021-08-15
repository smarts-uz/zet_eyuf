<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = '1';
        $this->model->shop_option_branch_id = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
