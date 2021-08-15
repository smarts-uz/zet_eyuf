<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageActionRest;

class PageActionRestInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageActionRest();

        $this->model->id = 68;
        $this->model->name = 'eyuf/ravshan/session';
        $this->model->data = 'eyuf/ravshan/session';
        $this->model->input = 'session';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'session';
        $this->model->icon = 'fal fa-keyboard';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 14;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 93;
        $this->model->name = 'eyuf/cpa/get-ip';
        $this->model->data = 'eyuf/cpa/get-ip';
        $this->model->input = 'get-ip';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-ip';
        $this->model->icon = 'fal fa-barcode';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 20;
        $this->model->name = 'ALL/eye/messages';
        $this->model->data = 'ALL/eye/messages';
        $this->model->input = 'messages';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'messages';
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 54;
        $this->model->name = 'eyuf/depdrop/depend';
        $this->model->data = 'eyuf/depdrop/depend';
        $this->model->input = 'depend';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'depend';
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 12;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 55;
        $this->model->name = 'eyuf/depdrop/deptest';
        $this->model->data = 'eyuf/depdrop/deptest';
        $this->model->input = 'deptest';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'deptest';
        $this->model->icon = 'fal fa-shield';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 12;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 58;
        $this->model->name = 'eyuf/depdrop/reset';
        $this->model->data = 'eyuf/depdrop/reset';
        $this->model->input = 'reset';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'reset';
        $this->model->icon = 'fal fa-gears';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 12;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 1;
        $this->model->name = 'ALL/abl/abl2';
        $this->model->data = 'ALL/abl/abl2';
        $this->model->input = 'abl2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'abl2';
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 1;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 59;
        $this->model->name = 'eyuf/market/getBrands';
        $this->model->data = 'eyuf/market/getBrands';
        $this->model->input = 'getBrands';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'getBrands';
        $this->model->icon = 'fal fa-area-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 76;
        $this->model->name = 'eyuf/cart/get-user';
        $this->model->data = 'eyuf/cart/get-user';
        $this->model->input = 'get-user';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-user';
        $this->model->icon = 'fal fa-eye';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 16;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 61;
        $this->model->name = 'eyuf/market/infinite';
        $this->model->data = 'eyuf/market/infinite';
        $this->model->input = 'infinite';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'infinite';
        $this->model->icon = 'fal fa-folder-open';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 62;
        $this->model->name = 'eyuf/market/infinite_1';
        $this->model->data = 'eyuf/market/infinite_1';
        $this->model->input = 'infinite_1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'infinite_1';
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 85;
        $this->model->name = 'eyuf/orders/delay';
        $this->model->data = 'eyuf/orders/delay';
        $this->model->input = 'delay';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'delay';
        $this->model->icon = 'fal fa-shield';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 87;
        $this->model->name = 'eyuf/orders/deleteReturn';
        $this->model->data = 'eyuf/orders/deleteReturn';
        $this->model->input = 'deleteReturn';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'deleteReturn';
        $this->model->icon = 'fal fa-cc-visa';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 21;
        $this->model->name = 'ALL/eye/notify';
        $this->model->data = 'ALL/eye/notify';
        $this->model->input = 'notify';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'notify';
        $this->model->icon = 'fal fa-industry';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 22;
        $this->model->name = 'ALL/eye/remove';
        $this->model->data = 'ALL/eye/remove';
        $this->model->input = 'remove';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'remove';
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 23;
        $this->model->name = 'ALL/eye/removefriend';
        $this->model->data = 'ALL/eye/removefriend';
        $this->model->input = 'removefriend';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'removefriend';
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 24;
        $this->model->name = 'ALL/eye/sendmessage';
        $this->model->data = 'ALL/eye/sendmessage';
        $this->model->input = 'sendmessage';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'sendmessage';
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 25;
        $this->model->name = 'ALL/eye/viewall';
        $this->model->data = 'ALL/eye/viewall';
        $this->model->input = 'viewall';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'viewall';
        $this->model->icon = 'fal fa-desktop';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 44;
        $this->model->name = 'ALL/hiajax/salom';
        $this->model->data = 'ALL/hiajax/salom';
        $this->model->input = 'salom';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'salom';
        $this->model->icon = 'fal fa-desktop';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 45;
        $this->model->name = 'ALL/restjson/api1';
        $this->model->data = 'ALL/restjson/api1';
        $this->model->input = 'api1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'api1';
        $this->model->icon = 'fal fa-address-card';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 46;
        $this->model->name = 'ALL/restjson/api2';
        $this->model->data = 'ALL/restjson/api2';
        $this->model->input = 'api2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'api2';
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 47;
        $this->model->name = 'ALL/restjson/api3';
        $this->model->data = 'ALL/restjson/api3';
        $this->model->input = 'api3';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'api3';
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 48;
        $this->model->name = 'ALL/restjson/api4';
        $this->model->data = 'ALL/restjson/api4';
        $this->model->input = 'api4';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'api4';
        $this->model->icon = 'fal fa-address-book';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 49;
        $this->model->name = 'ALL/restjson/test';
        $this->model->data = 'ALL/restjson/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test';
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 50;
        $this->model->name = 'ALL/restjson/widget';
        $this->model->data = 'ALL/restjson/widget';
        $this->model->input = 'widget';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'widget';
        $this->model->icon = 'fal fa-globe';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 88;
        $this->model->name = 'eyuf/orders/deleteShipment';
        $this->model->data = 'eyuf/orders/deleteShipment';
        $this->model->input = 'deleteShipment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'deleteShipment';
        $this->model->icon = 'fal fa-landmark';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 67;
        $this->model->name = 'eyuf/ravshan/sess';
        $this->model->data = 'eyuf/ravshan/sess';
        $this->model->input = 'sess';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'sess';
        $this->model->icon = 'fal fa-power-off';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 14;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 5;
        $this->model->name = 'ALL/app/test';
        $this->model->data = 'ALL/app/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test';
        $this->model->icon = 'fal fa-lock';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 6;
        $this->model->name = 'ALL/currency/currency';
        $this->model->data = 'ALL/currency/currency';
        $this->model->input = 'currency';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'currency';
        $this->model->icon = 'fal fa-print-slash';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 7;
        $this->model->name = 'ALL/depdropret/ajax';
        $this->model->data = 'ALL/depdropret/ajax';
        $this->model->input = 'ajax';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax';
        $this->model->icon = 'fal fa-router';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 9;
        $this->model->name = 'ALL/depdropret/ajax2';
        $this->model->data = 'ALL/depdropret/ajax2';
        $this->model->input = 'ajax2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax2';
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 10;
        $this->model->name = 'ALL/depdropret/ajax3';
        $this->model->data = 'ALL/depdropret/ajax3';
        $this->model->input = 'ajax3';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax3';
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 11;
        $this->model->name = 'ALL/depdropret/ajax_bk';
        $this->model->data = 'ALL/depdropret/ajax_bk';
        $this->model->input = 'ajax_bk';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax_bk';
        $this->model->icon = 'fal fa-print';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 12;
        $this->model->name = 'ALL/depdropreturn/ajax';
        $this->model->data = 'ALL/depdropreturn/ajax';
        $this->model->input = 'ajax';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax';
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 13;
        $this->model->name = 'ALL/depdropreturn/ajax1';
        $this->model->data = 'ALL/depdropreturn/ajax1';
        $this->model->input = 'ajax1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax1';
        $this->model->icon = 'fal fa-google-pay';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 14;
        $this->model->name = 'ALL/depdropreturn/ajax2';
        $this->model->data = 'ALL/depdropreturn/ajax2';
        $this->model->input = 'ajax2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax2';
        $this->model->icon = 'fal fa-area-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 15;
        $this->model->name = 'ALL/depdropreturn/ajax3';
        $this->model->data = 'ALL/depdropreturn/ajax3';
        $this->model->input = 'ajax3';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax3';
        $this->model->icon = 'fal fa-industry';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 5;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 16;
        $this->model->name = 'ALL/eye/accept';
        $this->model->data = 'ALL/eye/accept';
        $this->model->input = 'accept';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'accept';
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 18;
        $this->model->name = 'ALL/eye/addfriend';
        $this->model->data = 'ALL/eye/addfriend';
        $this->model->input = 'addfriend';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'addfriend';
        $this->model->icon = 'fal fa-images';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 19;
        $this->model->name = 'ALL/eye/allmessages';
        $this->model->data = 'ALL/eye/allmessages';
        $this->model->input = 'allmessages';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'allmessages';
        $this->model->icon = 'fal fa-cogs';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 92;
        $this->model->name = 'eyuf/ajax/form';
        $this->model->data = 'eyuf/ajax/form';
        $this->model->input = 'form';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'form';
        $this->model->icon = 'fal fa-certificate';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 74;
        $this->model->name = 'eyuf/cart/get-order';
        $this->model->data = 'eyuf/cart/get-order';
        $this->model->input = 'get-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-order';
        $this->model->icon = 'fal fa-save';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 16;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 84;
        $this->model->name = 'eyuf/orders/editAmount';
        $this->model->data = 'eyuf/orders/editAmount';
        $this->model->input = 'editAmount';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'editAmount';
        $this->model->icon = 'fal fa-download';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 101;
        $this->model->name = 'eyuf/orders/getAllPrice';
        $this->model->data = 'eyuf/orders/getAllPrice';
        $this->model->input = 'getAllPrice';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'getAllPrice';
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 102;
        $this->model->name = 'eyuf/orders/getPrice';
        $this->model->data = 'eyuf/orders/getPrice';
        $this->model->input = 'getPrice';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'getPrice';
        $this->model->icon = 'fal fa-images';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 89;
        $this->model->name = 'eyuf/orders/measure';
        $this->model->data = 'eyuf/orders/measure';
        $this->model->input = 'measure';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'measure';
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 90;
        $this->model->name = 'eyuf/orders/return';
        $this->model->data = 'eyuf/orders/return';
        $this->model->input = 'return';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'return';
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 91;
        $this->model->name = 'eyuf/orders/shipment';
        $this->model->data = 'eyuf/orders/shipment';
        $this->model->input = 'shipment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'shipment';
        $this->model->icon = 'fal fa-at';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 66;
        $this->model->name = 'eyuf/ravshan/option';
        $this->model->data = 'eyuf/ravshan/option';
        $this->model->input = 'option';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'option';
        $this->model->icon = 'fal fa-eye';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 14;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 3;
        $this->model->name = 'ALL/app/abl2';
        $this->model->data = 'ALL/app/abl2';
        $this->model->input = 'abl2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'abl2';
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 4;
        $this->model->name = 'ALL/app/index';
        $this->model->data = 'ALL/app/index';
        $this->model->input = 'index';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'index';
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 8;
        $this->model->name = 'ALL/depdropret/ajax1';
        $this->model->data = 'ALL/depdropret/ajax1';
        $this->model->input = 'ajax1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ajax1';
        $this->model->icon = 'fal fa-cash-register';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 17;
        $this->model->name = 'ALL/eye/acceptall';
        $this->model->data = 'ALL/eye/acceptall';
        $this->model->input = 'acceptall';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'acceptall';
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 75;
        $this->model->name = 'eyuf/cart/get-status';
        $this->model->data = 'eyuf/cart/get-status';
        $this->model->input = 'get-status';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-status';
        $this->model->icon = 'fal fa-router';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 16;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 77;
        $this->model->name = 'eyuf/cart/order';
        $this->model->data = 'eyuf/cart/order';
        $this->model->input = 'order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'order';
        $this->model->icon = 'fal fa-save';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 16;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 51;
        $this->model->name = 'eyuf/catalog/catalog';
        $this->model->data = 'eyuf/catalog/catalog';
        $this->model->input = 'catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'catalog';
        $this->model->icon = 'fal fa-cc-visa';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 10;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 78;
        $this->model->name = 'eyuf/catalog/my-catalog';
        $this->model->data = 'eyuf/catalog/my-catalog';
        $this->model->input = 'my-catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'my-catalog';
        $this->model->icon = 'fal fa-cubes';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 10;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 94;
        $this->model->name = 'eyuf/cpa/get-ip1';
        $this->model->data = 'eyuf/cpa/get-ip1';
        $this->model->input = 'get-ip1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-ip1';
        $this->model->icon = 'fal fa-power-off';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 95;
        $this->model->name = 'eyuf/cpa/get-ip2';
        $this->model->data = 'eyuf/cpa/get-ip2';
        $this->model->input = 'get-ip2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-ip2';
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 52;
        $this->model->name = 'eyuf/currency/index';
        $this->model->data = 'eyuf/currency/index';
        $this->model->input = 'index';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'index';
        $this->model->icon = 'fal fa-gears';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 53;
        $this->model->name = 'eyuf/depdrop/depdrop';
        $this->model->data = 'eyuf/depdrop/depdrop';
        $this->model->input = 'depdrop';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'depdrop';
        $this->model->icon = 'fal fa-print-slash';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 12;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 2;
        $this->model->name = 'ALL/abl/test';
        $this->model->data = 'ALL/abl/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test';
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 1;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 63;
        $this->model->name = 'eyuf/ravshan/class';
        $this->model->data = 'eyuf/ravshan/class';
        $this->model->input = 'class';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'class';
        $this->model->icon = 'fal fa-router';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 14;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 79;
        $this->model->name = 'eyuf/market/addToCompare';
        $this->model->data = 'eyuf/market/addToCompare';
        $this->model->input = 'addToCompare';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'addToCompare';
        $this->model->icon = 'fal fa-tools';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 80;
        $this->model->name = 'eyuf/market/addToWish';
        $this->model->data = 'eyuf/market/addToWish';
        $this->model->input = 'addToWish';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'addToWish';
        $this->model->icon = 'fal fa-router';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 81;
        $this->model->name = 'eyuf/market/deleteAllFromCart';
        $this->model->data = 'eyuf/market/deleteAllFromCart';
        $this->model->input = 'deleteAllFromCart';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'deleteAllFromCart';
        $this->model->icon = 'fal fa-barcode';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 60;
        $this->model->name = 'eyuf/market/getOption';
        $this->model->data = 'eyuf/market/getOption';
        $this->model->input = 'getOption';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'getOption';
        $this->model->icon = 'fal fa-tools';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 82;
        $this->model->name = 'eyuf/market/setToCart';
        $this->model->data = 'eyuf/market/setToCart';
        $this->model->input = 'setToCart';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'setToCart';
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 13;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 105;
        $this->model->name = 'eyuf/orders/accept';
        $this->model->data = 'eyuf/orders/accept';
        $this->model->input = 'accept';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'accept';
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 86;
        $this->model->name = 'eyuf/orders/deleteDelay';
        $this->model->data = 'eyuf/orders/deleteDelay';
        $this->model->input = 'deleteDelay';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'deleteDelay';
        $this->model->icon = 'fal fa-laptop';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 106;
        $this->model->name = 'eyuf/orders/ravshan';
        $this->model->data = 'eyuf/orders/ravshan';
        $this->model->input = 'ravshan';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'ravshan';
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 18;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 64;
        $this->model->name = 'eyuf/ravshan/core-form-db';
        $this->model->data = 'eyuf/ravshan/core-form-db';
        $this->model->input = 'core-form-db';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'Колонки форма';
        $this->model->icon = 'fa fa-database';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 14;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 65;
        $this->model->name = 'eyuf/ravshan/expand';
        $this->model->data = 'eyuf/ravshan/expand';
        $this->model->input = 'expand';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'Настройка Опций Виджета';
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 14;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 69;
        $this->model->name = 'eyuf/test/abl';
        $this->model->data = 'eyuf/test/abl';
        $this->model->input = 'abl';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'abl';
        $this->model->icon = 'fal fa-certificate';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 15;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 70;
        $this->model->name = 'eyuf/test/asror';
        $this->model->data = 'eyuf/test/asror';
        $this->model->input = 'asror';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'asror';
        $this->model->icon = 'fal fa-landmark';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 15;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 71;
        $this->model->name = 'eyuf/test/salom';
        $this->model->data = 'eyuf/test/salom';
        $this->model->input = 'salom';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'salom';
        $this->model->icon = 'fal fa-chrome';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 15;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 72;
        $this->model->name = 'eyuf/test/test';
        $this->model->data = 'eyuf/test/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test';
        $this->model->icon = 'fal fa-images';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 15;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 98;
        $this->model->name = 'eyuf/test/test_order';
        $this->model->data = 'eyuf/test/test_order';
        $this->model->input = 'test_order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test_order';
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 15;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 103;
        $this->model->name = 'eyuf/ajax/dataTableData';
        $this->model->data = 'eyuf/ajax/dataTableData';
        $this->model->input = 'dataTableData';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'dataTableData';
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 104;
        $this->model->name = 'eyuf/ajax/dataTableData2';
        $this->model->data = 'eyuf/ajax/dataTableData2';
        $this->model->input = 'dataTableData2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'dataTableData2';
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 73;
        $this->model->name = 'eyuf/cart/add-order';
        $this->model->data = 'eyuf/cart/add-order';
        $this->model->input = 'add-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'add-order';
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 16;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 96;
        $this->model->name = 'eyuf/cpa/get-order';
        $this->model->data = 'eyuf/cpa/get-order';
        $this->model->input = 'get-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'get-order';
        $this->model->icon = 'fal fa-institution';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 56;
        $this->model->name = 'eyuf/depdrop/getFilter';
        $this->model->data = 'eyuf/depdrop/getFilter';
        $this->model->input = 'getFilter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'getFilter';
        $this->model->icon = 'fal fa-database';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 12;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 57;
        $this->model->name = 'eyuf/depdrop/getFilter2';
        $this->model->data = 'eyuf/depdrop/getFilter2';
        $this->model->input = 'getFilter2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'getFilter2';
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 12;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 99;
        $this->model->name = 'eyuf/graph/test';
        $this->model->data = 'eyuf/graph/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test';
        $this->model->icon = 'fal fa-credit-card';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 22;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageActionRest();

        $this->model->id = 100;
        $this->model->name = 'eyuf/graph/test_order';
        $this->model->data = 'eyuf/graph/test_order';
        $this->model->input = 'test_order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->title = 'test_order';
        $this->model->icon = 'fal fa-industry';
        $this->model->cache = null;
        $this->model->cacheHttp = null;
        $this->model->page_control_id = 22;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
