<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareAccept;

class WareAcceptInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareAccept();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = 'Приёмка №350 от Тухтахунов Бахтиер';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dc_returns_group = "";
        $this->model->date = '2020-09-29';
        $this->model->status = 'generate_doc';
        $this->model->shop_courier_id = 173;
        $this->model->shop_shipment_id = 259;
        $this->model->responsible = 315;
        $this->model->comment = '';
        $this->model->completed = 1;
        $this->model->completed_all = 1;
        $this->model->total = 2;
        $this->model->exchange = 0;
        $this->model->refusal = 0;
        $this->model->cancel = 0;
        $this->model->date_transfer = 0;
        $this->model->terminal = 0;
        $this->model->add_delivery = 0;
        $this->model->refund = 495000;
        $this->model->bonus = null;
        $this->model->cashless = 0;
        $this->model->sales_amount = 198000;
        $this->model->courier_reward = 20000;
        $this->model->exchange_reward = 0;
        $this->model->refund_reward = 10000;
        $this->model->salary_courier = 30000;
        $this->model->remain = -327000;
        $this->model->in_dollar = null;
        $this->model->currency = null;
        $this->model->converted = null;
        $this->model->closed = 1;
        $this->model->closed_time = '2020-10-03 00:00:00';
        $this->model->source = null;
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
