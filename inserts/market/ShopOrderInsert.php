<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOrder;

class ShopOrderInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOrder();

        $this->model->id = 2009;
        $this->model->sort = null;
        $this->model->name = 'Заказ клиента №2009 от 2020-10-13 10:35:12. Ф.И.О ';
        $this->model->code = '000000002009';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->number = '2009';
        $this->model->user_id = 383;
        $this->model->parent = null;
        $this->model->children = null;
        $this->model->contact_name = '';
        $this->model->status_universal = 'free';
        $this->model->contact_phone = '';
        $this->model->add_contact_phone = '';
        $this->model->date = null;
        $this->model->comment_user = '';
        $this->model->responsible = null;
        $this->model->place_adress_id = null;
        $this->model->place_region_id = null;
        $this->model->distance = null;
        $this->model->user_company_ids = "";
        $this->model->operator = 419;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = null;
        $this->model->source_type = '';
        $this->model->called_time = null;
        $this->model->shop_reject_cause_id = null;
        $this->model->cpas_track = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = 'ring';
        $this->model->status_autodial = '';
        $this->model->status_logistics = 'new';
        $this->model->status_accept = '';
        $this->model->status_deliver = '';
        $this->model->date_deliver = null;
        $this->model->time_deliver = '';
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
        $this->model->price = null;
        $this->model->prepayment = null;
        $this->model->deliver_price = null;
        $this->model->total_price = 0;
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
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopOrder();

        $this->model->id = 2006;
        $this->model->sort = null;
        $this->model->name = 'Заказ клиента №2006 от 2020-10-12 14:57:01. Ф.И.О Axrorbekaa';
        $this->model->code = '000000002006';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->number = '2006';
        $this->model->user_id = 450;
        $this->model->parent = null;
        $this->model->children = null;
        $this->model->contact_name = 'Axrorbekaa';
        $this->model->status_universal = '';
        $this->model->contact_phone = '99-019-54-92';
        $this->model->add_contact_phone = '';
        $this->model->date = '2020-10-12';
        $this->model->comment_user = 'test mobile version';
        $this->model->responsible = null;
        $this->model->place_adress_id = 1197;
        $this->model->place_region_id = null;
        $this->model->distance = null;
        $this->model->user_company_ids = "";
        $this->model->operator = 419;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = null;
        $this->model->source_type = '';
        $this->model->called_time = '2020-10-12 00:00:00';
        $this->model->shop_reject_cause_id = null;
        $this->model->cpas_track = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = 'ring';
        $this->model->status_autodial = '';
        $this->model->status_logistics = 'new';
        $this->model->status_accept = '';
        $this->model->status_deliver = '';
        $this->model->date_deliver = null;
        $this->model->time_deliver = '';
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
        $this->model->price = 113210000;
        $this->model->prepayment = null;
        $this->model->deliver_price = null;
        $this->model->total_price = 113210000;
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
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopOrder();

        $this->model->id = 2007;
        $this->model->sort = null;
        $this->model->name = 'Заказ клиента №2007 от . Ф.И.О Axrorbek';
        $this->model->code = '000000002007';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->number = '2007';
        $this->model->user_id = 450;
        $this->model->parent = null;
        $this->model->children = null;
        $this->model->contact_name = 'Axrorbek';
        $this->model->status_universal = '';
        $this->model->contact_phone = '99-019-54-92';
        $this->model->add_contact_phone = '';
        $this->model->date = null;
        $this->model->comment_user = 'test mobile version 2';
        $this->model->responsible = null;
        $this->model->place_adress_id = 324;
        $this->model->place_region_id = 328;
        $this->model->distance = null;
        $this->model->user_company_ids = [
            267 => 267,
        ];
        $this->model->operator = 419;
        $this->model->comment_agent = 'blah-blah-blah';
        $this->model->tasks = '';
        $this->model->source = null;
        $this->model->source_type = '';
        $this->model->called_time = null;
        $this->model->shop_reject_cause_id = null;
        $this->model->cpas_track = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = 'ring';
        $this->model->status_autodial = '';
        $this->model->status_logistics = 'new';
        $this->model->status_accept = '';
        $this->model->status_deliver = '';
        $this->model->date_deliver = '2020-10-24';
        $this->model->time_deliver = '';
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
        $this->model->price = 50777772;
        $this->model->prepayment = null;
        $this->model->deliver_price = null;
        $this->model->total_price = 50777772;
        $this->model->shop_coupon_id = null;
        $this->model->shop_channel_id = null;
        $this->model->payment_type = '';
        $this->model->additional_payment_type = '';
        $this->model->additional_deliver = null;
        $this->model->additional_received_money = null;
        $this->model->accepted = null;
        $this->model->shop_element_ids = [
            1991,
            1994,
            1993,
        ];
        $this->model->ware_ids = [
            66 => 66,
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopOrder();

        $this->model->id = 2008;
        $this->model->sort = null;
        $this->model->name = 'Заказ клиента №2008 от . Ф.И.О ';
        $this->model->code = '000000002008';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->number = '2008';
        $this->model->user_id = null;
        $this->model->parent = null;
        $this->model->children = null;
        $this->model->contact_name = '';
        $this->model->status_universal = '';
        $this->model->contact_phone = '';
        $this->model->add_contact_phone = '';
        $this->model->date = '2020-10-08';
        $this->model->comment_user = '';
        $this->model->responsible = null;
        $this->model->place_adress_id = null;
        $this->model->place_region_id = null;
        $this->model->distance = null;
        $this->model->user_company_ids = "";
        $this->model->operator = 419;
        $this->model->comment_agent = '';
        $this->model->tasks = '';
        $this->model->source = null;
        $this->model->source_type = '';
        $this->model->called_time = null;
        $this->model->shop_reject_cause_id = null;
        $this->model->cpas_track = '';
        $this->model->status_client = '';
        $this->model->status_callcenter = 'ring';
        $this->model->status_autodial = '';
        $this->model->status_logistics = 'new';
        $this->model->status_accept = '';
        $this->model->status_deliver = '';
        $this->model->date_deliver = null;
        $this->model->time_deliver = '';
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
        $this->model->price = null;
        $this->model->prepayment = null;
        $this->model->deliver_price = null;
        $this->model->total_price = 0;
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
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
