<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopShipment;

class ShopShipmentInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopShipment();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 70 от ';
        $this->model->code = '000000000070';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-10';
        $this->model->date_deliver = '2020-07-23';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'ttytfyy';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 71 от ';
        $this->model->code = '000000000071';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-10';
        $this->model->date_deliver = '2020-07-21';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 9;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 72 от ';
        $this->model->code = '000000000072';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-21';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'dd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 73 от ';
        $this->model->code = '000000000073';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-29';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 74 от ';
        $this->model->code = '000000000074';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-12';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = null;
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 75 от ';
        $this->model->code = '000000000075';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-23';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 9;
        $this->model->responsible = null;
        $this->model->comment = '645';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 77 от ';
        $this->model->code = '000000000077';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-15';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 9;
        $this->model->responsible = null;
        $this->model->comment = '7474';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 78 от ';
        $this->model->code = '000000000078';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-16';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 24 от ';
        $this->model->code = '000000000024';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-09';
        $this->model->shipment_type = 'inter_company';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = 'sdfsdsddddddddddddddddddddddddddddddddd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 25 от ';
        $this->model->code = '000000000025';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-12-18';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = 'saddddddddddddddddddddddddddddddddddddddddddd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 34 от ';
        $this->model->code = '000000000034';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = 'asdasdasdasdasdasasddsdsasaddssd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 35 от ';
        $this->model->code = '000000000035';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = 'asdasdasdasdasdasasddsdsasaddssd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 80 от ';
        $this->model->code = '000000000080';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-29';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 82 от ';
        $this->model->code = '000000000082';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-28';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 76 от ';
        $this->model->code = '000000000076';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-12';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 83 от ';
        $this->model->code = '000000000083';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-28';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 84 от ';
        $this->model->code = '000000000084';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-28';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 64 от ';
        $this->model->code = '000000000064';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = null;
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 38 от ';
        $this->model->code = '000000000038';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 85 от ';
        $this->model->code = '000000000085';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->date_deliver = '2020-07-14';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 31 от ';
        $this->model->code = '000000000031';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-31';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'sadddddddddddddddddddddddddddddd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 26 от ';
        $this->model->code = '000000000026';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-29';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 41 от ';
        $this->model->code = '000000000041';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-31';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 29 от ';
        $this->model->code = '000000000029';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-31';
        $this->model->shipment_type = 'inter_company';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 39 от ';
        $this->model->code = '000000000039';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 65 от ';
        $this->model->code = '000000000065';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = null;
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 66 от ';
        $this->model->code = '000000000066';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = null;
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 33 от ';
        $this->model->code = '000000000033';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-08';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'kukljkl';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 32 от ';
        $this->model->code = '000000000032';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-08';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'kukljkl';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 67 от ';
        $this->model->code = '000000000067';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-08';
        $this->model->date_deliver = null;
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 68 от ';
        $this->model->code = '000000000068';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-09';
        $this->model->date_deliver = '2020-07-10';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 81 от ';
        $this->model->code = '000000000081';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-12';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 86 от ';
        $this->model->code = '000000000086';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->date_deliver = '2020-07-30';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 79 от ';
        $this->model->code = '000000000079';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->date_deliver = '2020-07-17';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = 'dastavka,';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 88 от ';
        $this->model->code = '000000000088';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-14';
        $this->model->date_deliver = '2020-07-17';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = null;
        $this->model->comment = 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 87 от ';
        $this->model->code = '000000000087';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->date_deliver = '2020-07-16';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 90 от ';
        $this->model->code = '000000000090';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->date_deliver = '2020-07-29';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 91 от ';
        $this->model->code = '000000000091';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-16';
        $this->model->date_deliver = '2020-07-22';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = null;
        $this->model->comment = '124124';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 53 от ';
        $this->model->code = '000000000053';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-30';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = null;
        $this->model->comment = 'asddddddddddddddddddddddddddd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 92 от ';
        $this->model->code = '000000000092';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-16';
        $this->model->date_deliver = '2020-07-19';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 93 от ';
        $this->model->code = '000000000093';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-16';
        $this->model->date_deliver = '2020-07-24';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 89 от ';
        $this->model->code = '000000000089';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-14';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 94 от ';
        $this->model->code = '000000000094';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 37 от ';
        $this->model->code = '000000000037';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-31';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = null;
        $this->model->comment = 'Test';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 95 от ';
        $this->model->code = '000000000095';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 96 от ';
        $this->model->code = '000000000096';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 0;
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 97 от ';
        $this->model->code = '000000000097';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 98 от ';
        $this->model->code = '000000000098';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 99 от ';
        $this->model->code = '000000000099';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 27 от ';
        $this->model->code = '000000000027';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-10';
        $this->model->shipment_type = 'inter_company';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'obdev Test Order Log';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 21 от ';
        $this->model->code = '000000000021';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-02';
        $this->model->shipment_type = 'inter_company';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'sdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 23 от ';
        $this->model->code = '000000000023';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'inter_company';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'asdasdsadsadasdasdasdasdsd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 100 от ';
        $this->model->code = '000000000100';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = null;
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 36 от ';
        $this->model->code = '000000000036';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = null;
        $this->model->comment = 'asdasdasdasdasdasasddsdsasaddssd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 104 от ';
        $this->model->code = '000000000104';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 32;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 103 от ';
        $this->model->code = '000000000103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 102 от ';
        $this->model->code = '000000000102';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 105 от ';
        $this->model->code = '000000000105';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-04';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = 156;
        $this->model->comment = 'ewrewrewrrrrrrr';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 106 от ';
        $this->model->code = '000000000106';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-21';
        $this->model->shipment_type = 'local';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 107 от ';
        $this->model->code = '000000000107';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-21';
        $this->model->shipment_type = 'local';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 108 от ';
        $this->model->code = '000000000108';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-21';
        $this->model->shipment_type = 'local';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 109 от ';
        $this->model->code = '000000000109';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-21';
        $this->model->shipment_type = 'local';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 101 от ';
        $this->model->code = '000000000101';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->date_deliver = '2020-07-25';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 156;
        $this->model->comment = '45454545';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 110 от ';
        $this->model->code = '000000000110';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-21';
        $this->model->shipment_type = 'local';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 111 от ';
        $this->model->code = '000000000111';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-28';
        $this->model->shipment_type = '2';
        $this->model->shop_courier_id = 1;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 112 от ';
        $this->model->code = '000000000112';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-19';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 113 от ';
        $this->model->code = '000000000113';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 114 от ';
        $this->model->code = '000000000114';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 115 от ';
        $this->model->code = '000000000115';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 116 от ';
        $this->model->code = '000000000116';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 117 от ';
        $this->model->code = '000000000117';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 118 от ';
        $this->model->code = '000000000118';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 119 от ';
        $this->model->code = '000000000119';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 120 от ';
        $this->model->code = '000000000120';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 128;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 121 от 2020-08-21 11:43:54';
        $this->model->code = '000000000121';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-19';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 122 от 2020-08-21 11:43:59';
        $this->model->code = '000000000122';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-19';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 123 от 2020-08-21 11:44:04';
        $this->model->code = '000000000123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-19';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 124 от 2020-08-21 11:44:07';
        $this->model->code = '000000000124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-19';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 125 от 2020-08-21 11:44:46';
        $this->model->code = '000000000125';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-09-05';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 126 от 2020-08-21 11:50:53';
        $this->model->code = '000000000126';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-13';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 127 от 2020-08-21 11:50:55';
        $this->model->code = '000000000127';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-13';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 128 от 2020-08-21 11:50:56';
        $this->model->code = '000000000128';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-13';
        $this->model->shipment_type = 'international';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 129 от 2020-08-21 11:54:34';
        $this->model->code = '000000000129';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 130 от 2020-08-21 11:54:41';
        $this->model->code = '000000000130';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-05';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 131 от 2020-08-21 11:54:43';
        $this->model->code = '000000000131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-05';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 132 от 2020-08-21 11:54:44';
        $this->model->code = '000000000132';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-05';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 8;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 133 от 2020-08-21 12:03:59';
        $this->model->code = '000000000133';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-28';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 134 от 2020-08-21 12:08:40';
        $this->model->code = '000000000134';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-14';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 180;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 135 от 2020-08-21 12:09:18';
        $this->model->code = '000000000135';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-13';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 180;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 136 от 2020-08-21 12:10:43';
        $this->model->code = '000000000136';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-29';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = 0;
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 137 от 2020-08-21 13:14:55';
        $this->model->code = '000000000137';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 138 от 2020-08-21 14:41:49';
        $this->model->code = '000000000138';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-21';
        $this->model->date_deliver = '2020-08-20';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = 154;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 139 от 2020-08-24 13:48:22';
        $this->model->code = '000000000139';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-08';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 140 от 2020-08-24 14:22:12';
        $this->model->code = '000000000140';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2020-07-27';
        $this->model->shipment_type = 'express';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


    }

}
