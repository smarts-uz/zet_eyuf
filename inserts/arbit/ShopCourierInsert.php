<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCourier;

class ShopCourierInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCourier();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'TERMEZ';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'offline';
        $this->model->rating = 1;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 223;
        $this->model->user_id = 259;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'URGENCH';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 225;
        $this->model->user_id = 260;
        $this->model->auto_id = 3;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'SAMARQAND-NUSRATILLO';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 10000;
        $this->model->award_order = 10000;
        $this->model->award_return = 125;
        $this->model->award_exchange = 10000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'Busy';
        $this->model->rating = 4;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 224;
        $this->model->user_id = 275;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'ANDIJAN';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 206;
        $this->model->user_id = 249;
        $this->model->auto_id = 2;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'ANDIJAN  XURSHID';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 2;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 206;
        $this->model->user_id = 251;
        $this->model->auto_id = 5;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'FARGONA';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 209;
        $this->model->user_id = 252;
        $this->model->auto_id = 6;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'JIZZAX';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 18000;
        $this->model->award_order = 18000;
        $this->model->award_return = 25000;
        $this->model->award_exchange = 25000;
        $this->model->bonus = null;
        $this->model->deposit = 550000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 212;
        $this->model->user_id = 253;
        $this->model->auto_id = 6;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'NAMANGAN   ULUGBEK G.';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 25000;
        $this->model->award_order = 25000;
        $this->model->award_return = 35000;
        $this->model->award_exchange = 35000;
        $this->model->bonus = null;
        $this->model->deposit = 650000;
        $this->model->status = 'offline';
        $this->model->rating = 3;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 210;
        $this->model->user_id = 254;
        $this->model->auto_id = 5;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'NAMANGAN  NAZARALI  M.';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = 35000;
        $this->model->award_exchange = 35000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'offline';
        $this->model->rating = 2;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 213;
        $this->model->user_id = 255;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'NAVOI';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = 35000;
        $this->model->award_exchange = 35000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 208;
        $this->model->user_id = 278;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'NUKUS';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 217;
        $this->model->user_id = 280;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'QARSHI';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 20000;
        $this->model->award_return = 12000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 218;
        $this->model->user_id = 274;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'QOQOND';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 219;
        $this->model->user_id = 270;
        $this->model->auto_id = 5;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'SAMARQAND';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 15000;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 220;
        $this->model->user_id = 271;
        $this->model->auto_id = 6;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'ANDIJAN  FAHRIDDIN';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 2;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 209;
        $this->model->user_id = 250;
        $this->model->auto_id = 3;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'Courier #2';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 100;
        $this->model->award_order = 2000;
        $this->model->award_return = 1000;
        $this->model->award_exchange = 10;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 221;
        $this->model->user_id = 41;
        $this->model->auto_id = 0;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'SAMARQAND- SARDOR';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 221;
        $this->model->user_id = 1;
        $this->model->auto_id = 3;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Курер Юнусабад';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->delivery_price = 10000;
        $this->model->award_order = 12000;
        $this->model->award_return = 123;
        $this->model->award_exchange = 11000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 206;
        $this->model->user_id = 87;
        $this->model->auto_id = 2;
        $this->save();


    }

}
