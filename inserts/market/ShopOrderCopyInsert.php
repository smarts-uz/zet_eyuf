<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOrderCopy;

class ShopOrderCopyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOrderCopy();

        $this->model->id = 11732;
        $this->model->name = 'Заказ клиента № от 2020-10-05 17:33:42. Ф.И.О contact_name';
        $this->model->code = '000000000000';
        $this->model->number = '';
        $this->model->user_id = 14;
        $this->model->parent = null;
        $this->model->children = "";
        $this->model->contact_name = 'contact_name';
        $this->model->status_universal = '';
        $this->model->contact_phone = 'contact_phone';
        $this->model->add_contact_phone = '';
        $this->model->date = null;
        $this->model->comment_user = '';
        $this->model->responsible = null;
        $this->model->place_adress_id = null;
        $this->model->place_region_id = null;
        $this->model->distance = null;
        $this->model->user_company_ids = "";
        $this->model->operator = null;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = null;
        $this->model->source_type = '';
        $this->model->called_time = null;
        $this->model->shop_reject_cause_id = '';
        $this->model->cpas_track = '';
        $this->model->status_client = '';
        $this->model->status_client_history = "";
        $this->model->status_callcenter = '';
        $this->model->status_callcenter_history = "";
        $this->model->status_autodial = '';
        $this->model->status_logistics = '';
        $this->model->status_logistics_history = "";
        $this->model->status_accept = '';
        $this->model->status_accept_history = "";
        $this->model->status_deliver = '';
        $this->model->status_deliver_history = "";
        $this->model->date_deliver = null;
        $this->model->date_approve = null;
        $this->model->date_return = null;
        $this->model->delayed_deliver_date = null;
        $this->model->shop_delay_id = null;
        $this->model->shop_delay_cause_id = null;
        $this->model->packaging = null;
        $this->model->labelled = '';
        $this->model->fragile = '';
        $this->model->weight = null;
        $this->model->weight_plan = null;
        $this->model->volume = null;
        $this->model->shop_shipment_id = null;
        $this->model->price = 324234324;
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
        $this->model->created_at = '2020-10-05 17:33:42';
        $this->model->modified_at = '2020-10-05 17:33:42';
        $this->model->created_by = 76;
        $this->model->modified_by = 76;
        $this->save();


    }

}
