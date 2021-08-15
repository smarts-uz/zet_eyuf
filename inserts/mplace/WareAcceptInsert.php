<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareAccept;

class WareAcceptInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareAccept();

        $this->model->id = 397;
        $this->model->sort = null;
        $this->model->name = 'Приёмка №397 от NAMANGAN  NAZARALI  M.';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dc_returns_group = "";
        $this->model->date = '2020-10-29';
        $this->model->status = 'generate_doc';
        $this->model->shop_courier_id = 15;
        $this->model->shop_shipment_id = 342;
        $this->model->responsible = 459;
        $this->model->comment = '';
        $this->model->completed = 0;
        $this->model->completed_all = 0;
        $this->model->total = 0;
        $this->model->exchange = 0;
        $this->model->refusal = 0;
        $this->model->cancel = 0;
        $this->model->date_transfer = 0;
        $this->model->terminal = 0;
        $this->model->add_delivery = 0;
        $this->model->refund = null;
        $this->model->bonus = null;
        $this->model->cashless = 0;
        $this->model->sales_amount = 0;
        $this->model->courier_reward = 0;
        $this->model->exchange_reward = 0;
        $this->model->refund_reward = 0;
        $this->model->salary_courier = 0;
        $this->model->remain = 0;
        $this->model->in_dollar = null;
        $this->model->currency = null;
        $this->model->converted = null;
        $this->model->closed = null;
        $this->model->closed_time = '2020-10-29 00:00:00';
        $this->model->source = null;
        $this->save();


    }

}
