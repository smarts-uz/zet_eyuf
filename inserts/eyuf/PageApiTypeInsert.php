<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageApiType;

class PageApiTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageApiType();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = '/core/rest/archive';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 48;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = '/core/select';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = '/core/sort';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = '/cpas/lead';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 4;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = '/pays/paysys';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 54;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/archive';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = '/shop/track';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = '/tests/dilshod';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = '/tests/test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 60;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = '/auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '/calls';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '/calls/agent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 1;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = '/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '/cpas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = '/graql';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = '/pays';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '/shop';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = '/shop/cart';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '/shop/catalog';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '/shop/company';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '/shop/currency';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = '/shop/market';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = '/shop/orders';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = '/shop/test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '/tests';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '/tests/abl';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '/tests/app';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '/tests/botman';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '/tests/botman2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = '/tests/bots';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = '/tests/bots/progressReminder';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 36;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '/tests/currency';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropret';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropreturn';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = '/tests/eye';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '/tests/hiajax';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 23;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = '/zofts';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = null;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '/calls/track';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 1;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '/grap/grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 5;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '/shop/cpa';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '/shop/cpas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '/shop/orderItem';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '/shop/test1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = '/shop/graph';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 7;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = '/calls/time';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 1;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = '/core/apps';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = '/core/auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = '/core/crud';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = '/core/dyna';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = '/core/edit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = '/core/files';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = '/core/form';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


        $this->model = new PageApiType();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = '/core/rest';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_api_type_id = 39;
        $this->save();


    }

}
