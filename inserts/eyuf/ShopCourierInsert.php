<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCourier;

class ShopCourierInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCourier();

        $this->model->id = 23;
        $this->model->name = 'SAMARQAND';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = 271;
        $this->model->auto_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-02 15:19:13';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 22;
        $this->model->name = 'QOQOND';
        $this->model->code = '';
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 270;
        $this->model->auto_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:56:08';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 30;
        $this->model->name = 'Самарканд';
        $this->model->code = '';
        $this->model->delivery_price = 10000;
        $this->model->award_order = 35000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'Busy';
        $this->model->rating = 4;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 275;
        $this->model->auto_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 11:00:50';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 2;
        $this->model->name = 'SAMARQAND- SARDOR';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 1;
        $this->model->auto_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:43:19';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 8;
        $this->model->name = 'ANDIJAN  BARNO';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 2;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 250;
        $this->model->auto_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:45:13';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 9;
        $this->model->name = 'ANDIJAN  XURSHID';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 251;
        $this->model->auto_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:46:02';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 12;
        $this->model->name = 'FARGONA';
        $this->model->code = '';
        $this->model->delivery_price = 12000;
        $this->model->award_order = 15000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 229;
        $this->model->user_id = 252;
        $this->model->auto_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:48:02';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 13;
        $this->model->name = 'JIZZAX';
        $this->model->code = '';
        $this->model->delivery_price = 18000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 550000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 229;
        $this->model->user_id = 253;
        $this->model->auto_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:48:35';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 14;
        $this->model->name = 'NAMANGAN   ULUGBEK G.';
        $this->model->code = '';
        $this->model->delivery_price = 25000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 650000;
        $this->model->status = 'offline';
        $this->model->rating = 3;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 229;
        $this->model->user_id = 254;
        $this->model->auto_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:50:01';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 15;
        $this->model->name = 'NAMANGAN  NAZARALI  M.';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'offline';
        $this->model->rating = 2;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 229;
        $this->model->user_id = 255;
        $this->model->auto_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:50:29';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 16;
        $this->model->name = 'NAVOI';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 278;
        $this->model->auto_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:51:10';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 19;
        $this->model->name = 'NUKUS';
        $this->model->code = '';
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 280;
        $this->model->auto_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:52:16';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 21;
        $this->model->name = 'QARSHI';
        $this->model->code = '';
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 274;
        $this->model->auto_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 10:54:20';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 32;
        $this->model->name = 'Термез';
        $this->model->code = '';
        $this->model->delivery_price = 12000;
        $this->model->award_order = 35000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'offline';
        $this->model->rating = 1;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 259;
        $this->model->auto_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 11:01:14';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 33;
        $this->model->name = 'Ургенч';
        $this->model->code = '';
        $this->model->delivery_price = 12000;
        $this->model->award_order = 35000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 260;
        $this->model->auto_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 11:01:31';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 173;
        $this->model->name = 'Тухтахунов Бахтиер';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 20000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 225;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-02 15:02:11';
        $this->model->modified_at = '2020-09-12 11:01:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 175;
        $this->model->name = 'Шералиев Шукур';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 20000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 225;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-02 15:08:32';
        $this->model->modified_at = '2020-09-12 11:02:47';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 10;
        $this->model->name = 'Таш.обл. Бобур';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 12000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 87;
        $this->model->auto_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-14 18:32:00';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 7;
        $this->model->name = 'ANDIJAN';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 226;
        $this->model->user_id = 249;
        $this->model->auto_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-17 12:55:21';
        $this->model->created_by = null;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 174;
        $this->model->name = 'Ахунджанов Даврон';
        $this->model->code = '';
        $this->model->delivery_price = 15000;
        $this->model->award_order = 20000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = 4;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = 229;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-02 15:04:40';
        $this->model->modified_at = '2020-09-17 15:09:03';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 178;
        $this->model->name = 'Xikmatulla';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:23:14';
        $this->model->modified_at = '2020-09-17 17:23:14';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 179;
        $this->model->name = 'Shukur';
        $this->model->code = '';
        $this->model->delivery_price = 30000;
        $this->model->award_order = 30000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:25:09';
        $this->model->modified_at = '2020-09-17 17:25:09';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 180;
        $this->model->name = 'Davron';
        $this->model->code = '';
        $this->model->delivery_price = 35000;
        $this->model->award_order = 35000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:26:22';
        $this->model->modified_at = '2020-09-17 17:26:22';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 181;
        $this->model->name = 'Jasur';
        $this->model->code = '';
        $this->model->delivery_price = 35000;
        $this->model->award_order = 35000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:30:35';
        $this->model->modified_at = '2020-09-17 17:30:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 182;
        $this->model->name = 'Baxtiyor';
        $this->model->code = '';
        $this->model->delivery_price = 40000;
        $this->model->award_order = 40000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:31:58';
        $this->model->modified_at = '2020-09-17 17:31:58';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 183;
        $this->model->name = 'Raxmatulla';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:33:03';
        $this->model->modified_at = '2020-09-17 17:33:03';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 184;
        $this->model->name = 'Bobur';
        $this->model->code = '';
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:35:57';
        $this->model->modified_at = '2020-09-17 17:43:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 185;
        $this->model->name = 'Бунёд';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:46:36';
        $this->model->modified_at = '2020-09-17 17:47:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 186;
        $this->model->name = 'Ойбек';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:49:12';
        $this->model->modified_at = '2020-09-17 17:50:16';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 187;
        $this->model->name = 'Акмал';
        $this->model->code = '';
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'Busy';
        $this->model->rating = 5;
        $this->model->place_region_ids = null;
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->model->created_at = '2020-09-17 17:53:21';
        $this->model->modified_at = '2020-09-17 17:53:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
