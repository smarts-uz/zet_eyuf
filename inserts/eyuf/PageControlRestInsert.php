<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageControlRest;

class PageControlRestInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageControlRest();

        $this->model->id = 14;
        $this->model->name = 'eyuf/ravshan';
        $this->model->data = 'eyuf/ravshan';
        $this->model->input = 'ravshan';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 15;
        $this->model->name = 'eyuf/test';
        $this->model->data = 'eyuf/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 1;
        $this->model->name = 'ALL/abl';
        $this->model->data = 'ALL/abl';
        $this->model->input = 'abl';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 2;
        $this->model->name = 'ALL/app';
        $this->model->data = 'ALL/app';
        $this->model->input = 'app';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 3;
        $this->model->name = 'ALL/currency';
        $this->model->data = 'ALL/currency';
        $this->model->input = 'currency';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 4;
        $this->model->name = 'ALL/depdropret';
        $this->model->data = 'ALL/depdropret';
        $this->model->input = 'depdropret';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 5;
        $this->model->name = 'ALL/depdropreturn';
        $this->model->data = 'ALL/depdropreturn';
        $this->model->input = 'depdropreturn';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 6;
        $this->model->name = 'ALL/eye';
        $this->model->data = 'ALL/eye';
        $this->model->input = 'eye';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 8;
        $this->model->name = 'ALL/hiajax';
        $this->model->data = 'ALL/hiajax';
        $this->model->input = 'hiajax';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 9;
        $this->model->name = 'ALL/restjson';
        $this->model->data = 'ALL/restjson';
        $this->model->input = 'restjson';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 19;
        $this->model->name = 'eyuf/ajax';
        $this->model->data = 'eyuf/ajax';
        $this->model->input = 'ajax';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 16;
        $this->model->name = 'eyuf/cart';
        $this->model->data = 'eyuf/cart';
        $this->model->input = 'cart';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 10;
        $this->model->name = 'eyuf/catalog';
        $this->model->data = 'eyuf/catalog';
        $this->model->input = 'catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 20;
        $this->model->name = 'eyuf/cpa';
        $this->model->data = 'eyuf/cpa';
        $this->model->input = 'cpa';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 11;
        $this->model->name = 'eyuf/currency';
        $this->model->data = 'eyuf/currency';
        $this->model->input = 'currency';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 12;
        $this->model->name = 'eyuf/depdrop';
        $this->model->data = 'eyuf/depdrop';
        $this->model->input = 'depdrop';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 22;
        $this->model->name = 'eyuf/graph';
        $this->model->data = 'eyuf/graph';
        $this->model->input = 'graph';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 13;
        $this->model->name = 'eyuf/market';
        $this->model->data = 'eyuf/market';
        $this->model->input = 'market';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 21;
        $this->model->name = 'eyuf/orderItem';
        $this->model->data = 'eyuf/orderItem';
        $this->model->input = 'orderItem';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControlRest();

        $this->model->id = 18;
        $this->model->name = 'eyuf/orders';
        $this->model->data = 'eyuf/orders';
        $this->model->input = 'orders';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
