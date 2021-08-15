<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaConfig;

class DynaConfigInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaConfig();

        $this->model->id = 261;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/main/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/main/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 263;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/crud/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 265;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для CpasOffer-/arbit/user/dyna';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dynaId = 'CpasOffer-/arbit/user/dyna';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 266;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PaysPayment-/arbit/client/payment/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PaysPayment-/arbit/client/payment/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


    }

}
