<?php

namespace zetsoft\inserts\mplace;

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
        $this->model->name = 'Artodex/ИП Камалов Д.Д./1000/99000№12384';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_catalog_id = 12384;
        $this->model->type = [
            'discount',
        ];
        $this->model->start = '2020-07-01 04:00:55';
        $this->model->end = '2021-05-04 12:00:55';
        $this->save();


        $this->model = new ShopOffer();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_catalog_id = null;
        $this->model->type = "";
        $this->model->start = null;
        $this->model->end = null;
        $this->save();


    }

}
