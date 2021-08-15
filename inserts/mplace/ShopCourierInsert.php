<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCourier;

class ShopCourierInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCourier();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Самарканд';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 10000;
        $this->model->award_order = 35000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'Busy';
        $this->model->rating = 4;
        $this->model->place_region_ids = [
            '46',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 256;
        $this->model->user_id = 275;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'JIZZAX';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 18000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 550000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = [
            '51',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 251;
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
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 25000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 650000;
        $this->model->status = 'offline';
        $this->model->rating = 3;
        $this->model->place_region_ids = [
            '48',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 250;
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
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'offline';
        $this->model->rating = 2;
        $this->model->place_region_ids = [
            '48',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 249;
        $this->model->user_id = 255;
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
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = [
            '54',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 247;
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
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = [
            '53',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 246;
        $this->model->user_id = 274;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Термез';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 35000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'offline';
        $this->model->rating = 1;
        $this->model->place_region_ids = [
            '112',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 245;
        $this->model->user_id = 259;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Ургенч';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 35000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = [
            '55',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 244;
        $this->model->user_id = 260;
        $this->model->auto_id = 3;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'Ахунджанов Даврон';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 20000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = 4;
        $this->model->place_region_ids = [
            '359',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 241;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'Xikmatulla';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '88',
            '359',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 240;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'Shukur';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 30000;
        $this->model->award_order = 30000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '365',
            '370',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 239;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Davron';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 35000;
        $this->model->award_order = 35000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '357',
            '363',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 229;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'Baxtiyor';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 40000;
        $this->model->award_order = 40000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '358',
            '366',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 228;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'Raxmatulla';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '362',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 227;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = 'Jasur';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 35000;
        $this->model->award_order = 35000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '361',
            '373',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 59;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'ANDIJAN';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 20000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = [
            '47',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 58;
        $this->model->user_id = 249;
        $this->model->auto_id = 2;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'Акмал';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 30000000;
        $this->model->award_order = 25000;
        $this->model->award_return = 25253;
        $this->model->award_exchange = 3535353;
        $this->model->bonus = 10;
        $this->model->deposit = 24243;
        $this->model->status = 'Busy';
        $this->model->rating = 3;
        $this->model->place_region_ids = [
            '120',
        ];
        $this->model->region_form = [
            'region_0' => [
                '47',
            ],
            'region_1' => [
                '120',
            ],
        ];
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'NAVOI';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = [
            '50',
            '217',
            '348',
            '356',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 248;
        $this->model->user_id = 278;
        $this->model->auto_id = 4;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'Шералиев Шукур';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 20000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = [
            '47',
            '120',
            '278',
            '363',
        ];
        $this->model->region_form = "";
        $this->model->user_company_id = 243;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'Ойбек';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '47',
        ];
        $this->model->region_form = [
            'region_0' => [
                '47',
            ],
        ];
        $this->model->user_company_id = 65;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'Бунёд';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 20000;
        $this->model->award_order = 20000;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = 'offline';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '47',
        ];
        $this->model->region_form = [
            'region_0' => [
                '47',
            ],
        ];
        $this->model->user_company_id = 225;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'ANDIJAN  BARNO';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 2;
        $this->model->place_region_ids = [
            '120',
        ];
        $this->model->region_form = [
            'region_0' => [
                '47',
            ],
            'region_1' => [
                '120',
            ],
        ];
        $this->model->user_company_id = 254;
        $this->model->user_id = 250;
        $this->model->auto_id = 3;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'QOQOND';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 12000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '215',
        ];
        $this->model->region_form = [
            'region_0' => [
                '50',
                '57',
                '339',
            ],
            'region_1' => [
                '215',
            ],
        ];
        $this->model->user_company_id = 226;
        $this->model->user_id = 270;
        $this->model->auto_id = 5;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Таш.обл. Бобур';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 12000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 4;
        $this->model->place_region_ids = [
            '386',
        ];
        $this->model->region_form = [
            'region_0' => [
                '57',
            ],
            'region_1' => [
                '386',
            ],
        ];
        $this->model->user_company_id = 242;
        $this->model->user_id = 87;
        $this->model->auto_id = 2;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'Тухтахунов Бахтиер';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 20000;
        $this->model->award_return = 10000;
        $this->model->award_exchange = 20000;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = [
            '357',
            '358',
            '359',
            '360',
            '361',
            '362',
            '363',
            '365',
            '366',
            '370',
            '371',
            '373',
            '374',
            '375',
            '376',
            '377',
            '378',
            '379',
            '380',
            '381',
            '382',
            '383',
            '384',
            '385',
            '386',
        ];
        $this->model->region_form = [
            'region_0' => [
                '57',
            ],
            'region_1' => [
                '357',
                '358',
                '359',
                '360',
                '361',
                '362',
                '363',
                '365',
                '366',
                '370',
                '371',
                '373',
                '374',
                '375',
                '376',
                '377',
                '378',
                '379',
                '380',
                '381',
                '382',
                '383',
                '384',
                '385',
                '386',
            ],
        ];
        $this->model->user_company_id = 225;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'FARGONA';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 12000;
        $this->model->award_order = 15000;
        $this->model->award_return = 0;
        $this->model->award_exchange = 12000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'online';
        $this->model->rating = 3;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = 252;
        $this->model->user_id = 252;
        $this->model->auto_id = 6;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = null;
        $this->model->award_order = null;
        $this->model->award_return = null;
        $this->model->award_exchange = null;
        $this->model->bonus = null;
        $this->model->deposit = null;
        $this->model->status = '';
        $this->model->rating = null;
        $this->model->place_region_ids = "";
        $this->model->region_form = "";
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = null;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'SAMARQAND- SARDOR';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 23;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 500000;
        $this->model->status = 'Busy';
        $this->model->rating = 2;
        $this->model->place_region_ids = [
            '57',
        ];
        $this->model->region_form = [
            'region_0' => [
                '57',
            ],
        ];
        $this->model->user_company_id = 255;
        $this->model->user_id = 1;
        $this->model->auto_id = 3;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'SAMARQAND';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->delivery_price = 15000;
        $this->model->award_order = 15000;
        $this->model->award_return = 4454;
        $this->model->award_exchange = 15000;
        $this->model->bonus = null;
        $this->model->deposit = 600000;
        $this->model->status = 'online';
        $this->model->rating = 5;
        $this->model->place_region_ids = [
            '120',
        ];
        $this->model->region_form = [
            'region_0' => [
                '47',
                '50',
            ],
            'region_1' => [
                '120',
            ],
        ];
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->auto_id = 6;
        $this->save();


        $this->model = new ShopCourier();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'ANDIJAN  XURSHID';
        $this->model->code = '';
        $this->model->guid = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
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
        $this->model->user_company_id = 253;
        $this->model->user_id = 251;
        $this->model->auto_id = 5;
        $this->save();


    }

}
