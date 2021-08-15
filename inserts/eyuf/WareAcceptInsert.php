<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareAccept;

class WareAcceptInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareAccept();

        $this->model->id = 321;
        $this->model->name = 'Приёмка №321 от ANDIJAN';
        $this->model->dc_returns_group = null;
        $this->model->date = null;
        $this->model->status = 'accept';
        $this->model->shop_courier_id = 7;
        $this->model->shop_shipment_id = 237;
        $this->model->responsible = 315;
        $this->model->comment = '';
        $this->model->completed = 3;
        $this->model->total = 6;
        $this->model->exchange = 0;
        $this->model->refusal = 0;
        $this->model->cancel = 0;
        $this->model->date_transfer = 0;
        $this->model->terminal = 750000;
        $this->model->add_delivery = 0;
        $this->model->refund = 7128000;
        $this->model->bonus = null;
        $this->model->cashless = 0;
        $this->model->sales_amount = 7128000;
        $this->model->courier_reward = 45000;
        $this->model->exchange_reward = 0;
        $this->model->refund_reward = 20000;
        $this->model->salary_courier = 65000;
        $this->model->remain = -2874000;
        $this->model->in_dollar = 200;
        $this->model->currency = 10295;
        $this->model->converted = 2059000;
        $this->model->closed = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-17 16:46:45';
        $this->model->modified_at = '2020-09-17 19:49:32';
        $this->model->created_by = 315;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new WareAccept();

        $this->model->id = 323;
        $this->model->name = 'Приёмка №323 от ANDIJAN';
        $this->model->dc_returns_group = "";
        $this->model->date = null;
        $this->model->status = '';
        $this->model->shop_courier_id = 7;
        $this->model->shop_shipment_id = 240;
        $this->model->responsible = 406;
        $this->model->comment = 'asd';
        $this->model->completed = 15;
        $this->model->total = 25;
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
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-18 18:43:29';
        $this->model->modified_at = '2020-09-18 18:43:31';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


    }

}
