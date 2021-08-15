<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOrderTest;

class ShopOrderTestInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOrderTest();

        $this->model->id = 1;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->user_id = '152';
        $this->model->date = null;
        $this->model->comment_user = '';
        $this->model->responsible = null;
        $this->model->place_adress_id = null;
        $this->model->distance = null;
        $this->model->user_company_ids = "";
        $this->model->operator = null;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = '';
        $this->model->called_time = null;
        $this->model->call_record = "";
        $this->model->shop_reject_cause_id = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = 'new';
        $this->model->status_autodial = '';
        $this->model->status_logistics = 'new';
        $this->model->status_accept = '';
        $this->model->status_deliver = '';
        $this->model->date_deliver = null;
        $this->model->date_approve = null;
        $this->model->date_return = null;
        $this->model->delayed_deliver_date = null;
        $this->model->shop_delay_id = null;
        $this->model->shop_delay_cause_id = null;
        $this->model->packaging = null;
        $this->model->labelled = '0';
        $this->model->fragile = '0';
        $this->model->weight = null;
        $this->model->weight_plan = null;
        $this->model->volume = null;
        $this->model->shop_shipment_id = null;
        $this->model->price = null;
        $this->model->prepayment = null;
        $this->model->deliver_price = null;
        $this->model->total_price = null;
        $this->model->shop_coupon_id = null;
        $this->model->shop_channel_id = null;
        $this->model->payment_type = '';
        $this->model->additional_payment_type = '';
        $this->model->additional_deliver = null;
        $this->model->additional_received_money = null;
        $this->model->accepted = null;
        $this->model->shop_element_ids = "";
        $this->model->ware_ids = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-14 17:01:00';
        $this->model->modified_at = '2020-09-14 17:04:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopOrderTest();

        $this->model->id = 2;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->user_id = '306';
        $this->model->date = null;
        $this->model->comment_user = '';
        $this->model->responsible = null;
        $this->model->place_adress_id = null;
        $this->model->distance = null;
        $this->model->user_company_ids = "";
        $this->model->operator = null;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = '';
        $this->model->called_time = null;
        $this->model->call_record = "";
        $this->model->shop_reject_cause_id = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = 'new';
        $this->model->status_autodial = '';
        $this->model->status_logistics = 'new';
        $this->model->status_accept = '';
        $this->model->status_deliver = '';
        $this->model->date_deliver = null;
        $this->model->date_approve = null;
        $this->model->date_return = null;
        $this->model->delayed_deliver_date = null;
        $this->model->shop_delay_id = null;
        $this->model->shop_delay_cause_id = null;
        $this->model->packaging = null;
        $this->model->labelled = '0';
        $this->model->fragile = '0';
        $this->model->weight = null;
        $this->model->weight_plan = null;
        $this->model->volume = null;
        $this->model->shop_shipment_id = null;
        $this->model->price = null;
        $this->model->prepayment = null;
        $this->model->deliver_price = null;
        $this->model->total_price = null;
        $this->model->shop_coupon_id = null;
        $this->model->shop_channel_id = null;
        $this->model->payment_type = '';
        $this->model->additional_payment_type = '';
        $this->model->additional_deliver = null;
        $this->model->additional_received_money = null;
        $this->model->accepted = null;
        $this->model->shop_element_ids = "";
        $this->model->ware_ids = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-15 16:58:32';
        $this->model->created_by = null;
        $this->model->modified_by = 406;
        $this->save();


    }

}
