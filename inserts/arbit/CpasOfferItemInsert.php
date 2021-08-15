<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasOfferItem;

class CpasOfferItemInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasOfferItem();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Узбекистан_Fatality';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->place_country_id = 229;
        $this->model->pay = 8;
        $this->model->pay_currency = 'USD';
        $this->model->cost = 18000;
        $this->model->cost_currency = 'UZS';
        $this->model->aproove = '40';
        $this->save();


    }

}
