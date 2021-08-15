<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOffer;

class ShopOfferInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOffer();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_catalog_id = 1466;
        $this->model->type = "";
        $this->model->start = '2020-07-01 04:00:55';
        $this->model->end = '2021-05-04 12:00:55';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
