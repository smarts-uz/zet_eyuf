<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestOrder;

class TestOrderInsert extends ZInsert
{

    public function run()
    {

        $this->model = new TestOrder();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->code = 'sadf';
        $this->model->user_id = '';
        $this->model->contact_name = '';
        $this->model->contact_phone = '';
        $this->model->called_time = null;
        $this->model->date_deliver = null;
        $this->model->comment_user = '';
        $this->model->place_adress_id = '';
        $this->model->distance = null;
        $this->model->user_company_ids = '';
        $this->model->ware_ids = '';
        $this->model->operator = null;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = '';
        $this->model->shop_reject_cause_id = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = '';
        $this->model->status_autodial = '';
        $this->model->status_logistics = '';
        $this->model->status_accept = '';
        $this->model->date_approve = null;
        $this->model->date_return = null;
        $this->model->delayed_deliver_date = null;
        $this->model->delayed_deliver_cause = '';
        $this->model->packaging = null;
        $this->model->labelled = null;
        $this->model->fragile = null;
        $this->model->weight = null;
        $this->model->weight_plan = null;
        $this->model->size = '';
        $this->model->volume = null;
        $this->model->shop_shipment_id = null;
        $this->model->price = null;
        $this->model->deliver_price = null;
        $this->model->total_price = null;
        $this->model->shop_coupon_id = null;
        $this->model->shop_channel_id = '';
        $this->model->payment_type = '';
        $this->model->additional_payment_type = '';
        $this->model->additional_received_money = null;
        $this->save();


        $this->model = new TestOrder();

        $this->model->id = 4;
        $this->model->name = '';
        $this->model->code = 'sadfasdf';
        $this->model->user_id = '';
        $this->model->contact_name = '';
        $this->model->contact_phone = '';
        $this->model->called_time = null;
        $this->model->date_deliver = null;
        $this->model->comment_user = '';
        $this->model->place_adress_id = '';
        $this->model->distance = null;
        $this->model->user_company_ids = '';
        $this->model->ware_ids = '';
        $this->model->operator = null;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = '';
        $this->model->shop_reject_cause_id = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = '';
        $this->model->status_autodial = '';
        $this->model->status_logistics = '';
        $this->model->status_accept = '';
        $this->model->date_approve = null;
        $this->model->date_return = null;
        $this->model->delayed_deliver_date = null;
        $this->model->delayed_deliver_cause = '';
        $this->model->packaging = null;
        $this->model->labelled = null;
        $this->model->fragile = null;
        $this->model->weight = null;
        $this->model->weight_plan = null;
        $this->model->size = '';
        $this->model->volume = null;
        $this->model->shop_shipment_id = null;
        $this->model->price = null;
        $this->model->deliver_price = null;
        $this->model->total_price = null;
        $this->model->shop_coupon_id = null;
        $this->model->shop_channel_id = '';
        $this->model->payment_type = '';
        $this->model->additional_payment_type = '';
        $this->model->additional_received_money = null;
        $this->save();


    }

}
