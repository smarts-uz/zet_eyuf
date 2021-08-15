<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageApi;

class PageApiInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageApi();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/form';
        $this->model->title = 'form';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getAllProducts';
        $this->model->title = 'getAllProducts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCategoryBrands';
        $this->model->title = 'getCategoryBrands';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getMenuItems';
        $this->model->title = 'getMenuItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getProduct';
        $this->model->title = 'getProduct';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getProductsByCompanyId';
        $this->model->title = 'getProductsByCompanyId';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/graph';
        $this->model->title = 'graph';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/add-order';
        $this->model->title = 'add-order';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/banderol';
        $this->model->title = 'banderol';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/get-order';
        $this->model->title = 'get-order';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/get-status';
        $this->model->title = 'get-status';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/get-user';
        $this->model->title = 'get-user';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/order';
        $this->model->title = 'order';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = '/tests/currency/currency';
        $this->model->title = 'currency';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 26;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = '/shop/catalog/my-catalog';
        $this->model->title = 'my-catalog';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 10;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = '/shop/company/getAllCompanies';
        $this->model->title = 'getAllCompanies';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 11;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = '/shop/company/getCompany';
        $this->model->title = 'getCompany';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 11;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop/depdrop';
        $this->model->title = 'depdrop';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 15;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop/depend';
        $this->model->title = 'depend';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 15;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop/deptest';
        $this->model->title = 'deptest';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 15;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop/getFilter';
        $this->model->title = 'getFilter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 15;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop/getFilter2';
        $this->model->title = 'getFilter2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 15;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = '/shop/depdrop/reset';
        $this->model->title = 'reset';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 15;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = '/shop/market/addToCompare';
        $this->model->title = 'addToCompare';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = '/shop/market/filter-common';
        $this->model->title = 'filter-common';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = '/shop/market/getBrands';
        $this->model->title = 'getBrands';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = '/shop/market/getOption';
        $this->model->title = 'getOption';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = '/shop/market/infinite';
        $this->model->title = 'infinite';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = '/shop/market/infinite_1';
        $this->model->title = 'infinite_1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = '/shop/market/setToCart';
        $this->model->title = 'setToCart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/accept';
        $this->model->title = 'accept';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/delay';
        $this->model->title = 'delay';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/deleteReturn';
        $this->model->title = 'deleteReturn';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/deleteShipment';
        $this->model->title = 'deleteShipment';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/editAmount';
        $this->model->title = 'editAmount';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/getAllPrice';
        $this->model->title = 'getAllPrice';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/getPrice';
        $this->model->title = 'getPrice';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/shipment';
        $this->model->title = 'shipment';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = '/tests/abl/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 24;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = '/tests/app/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 25;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/notify';
        $this->model->title = 'notify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/remove';
        $this->model->title = 'remove';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/removefriend';
        $this->model->title = 'removefriend';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson/api2';
        $this->model->title = 'api2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 31;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = '/tests/botman/progress';
        $this->model->title = 'progress';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 34;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropret/ajax';
        $this->model->title = 'ajax';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 27;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropret/ajax1';
        $this->model->title = 'ajax1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 27;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropret/ajax3';
        $this->model->title = 'ajax3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 27;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/messages';
        $this->model->title = 'messages';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/filter';
        $this->model->title = 'filter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropret/ajax_bk';
        $this->model->title = 'ajax_bk';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 27;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropreturn/ajax';
        $this->model->title = 'ajax';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 28;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropreturn/ajax1';
        $this->model->title = 'ajax1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 28;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropreturn/ajax2';
        $this->model->title = 'ajax2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 28;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropreturn/ajax3';
        $this->model->title = 'ajax3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 28;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/accept';
        $this->model->title = 'accept';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/acceptall';
        $this->model->title = 'acceptall';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/addfriend';
        $this->model->title = 'addfriend';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson/api3';
        $this->model->title = 'api3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 31;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 31;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 31;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = '/tests/botman2/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 35;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = '/tests/botman2/RegisterConversationZoir';
        $this->model->title = 'RegisterConversationZoir';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 35;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/compare';
        $this->model->title = 'compare';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = '/tests/hiajax/salom';
        $this->model->title = 'salom';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 30;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/get-order-one';
        $this->model->title = 'get-order-one';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 9;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = '/shop/currency/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 14;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = '/shop/market/addToWish';
        $this->model->title = 'addToWish';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 20;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan/core-form-db';
        $this->model->title = 'core-form-db';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 20;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-atlas';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 20;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan/sess';
        $this->model->title = 'sess';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 20;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan/session';
        $this->model->title = 'session';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-truck-container';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 20;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = '/tests/abl/abl2';
        $this->model->title = 'abl2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 24;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = '/shop/catalog/catalog';
        $this->model->title = 'catalog';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 10;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = '/shop/test/salom';
        $this->model->title = 'salom';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 21;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = '/shop/test/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 21;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = '/shop/test/test1';
        $this->model->title = 'test1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 21;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = '/shop/track/create-order';
        $this->model->title = 'create-order';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 57;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = '/tests/botman/botman';
        $this->model->title = 'botman';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 34;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = '/auth/login';
        $this->model->title = 'login';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 32;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/viewall';
        $this->model->title = 'viewall';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson/api1';
        $this->model->title = 'api1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 31;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = '/tests/restjson/api4';
        $this->model->title = 'api4';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 31;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = '/core/select/depdrop-db';
        $this->model->title = 'depdrop-db';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 50;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/currencies';
        $this->model->title = 'currencies';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getAllBrands';
        $this->model->title = 'getAllBrands';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getAllCompanies';
        $this->model->title = 'getAllCompanies';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getBanner';
        $this->model->title = 'getBanner';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCompany';
        $this->model->title = 'getCompany';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCompanyDiscountProducts';
        $this->model->title = 'getCompanyDiscountProducts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCompanyPopularProducts';
        $this->model->title = 'getCompanyPopularProducts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/productProperties';
        $this->model->title = 'productProperties';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/productsByStatus';
        $this->model->title = 'productsByStatus';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/propertiesByCategory';
        $this->model->title = 'propertiesByCategory';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/register';
        $this->model->title = 'register';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/writeCurrencyToSession';
        $this->model->title = 'writeCurrencyToSession';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/sendmessage';
        $this->model->title = 'sendmessage';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/ravshan';
        $this->model->title = 'ravshan';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/return';
        $this->model->title = 'return';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = '/shop/ravshan/expand';
        $this->model->title = 'expand';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 20;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = '/shop/test/asror';
        $this->model->title = 'asror';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 21;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = '/tests/app/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-chart-pie-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 25;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = '/core/select/depdrop';
        $this->model->title = 'depdrop';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 50;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = '/core/select/select2';
        $this->model->title = 'select2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 50;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = '/core/select/ZDepdropActionNew';
        $this->model->title = 'ZDepdropActionNew';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 50;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = '/core/sort/sortable';
        $this->model->title = 'sortable';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 51;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCatalogsByElement';
        $this->model->title = 'getCatalogsByElement';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = '/shop/orders/deleteDelay';
        $this->model->title = 'deleteDelay';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 19;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = '/core/sort/ZNestableAction';
        $this->model->title = 'ZNestableAction';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 51;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = '/pays/paysys/info';
        $this->model->title = 'info';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 55;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = '/cpas/lead/create-lead';
        $this->model->title = 'create-lead';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 52;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = '/cpas/lead/set-lead';
        $this->model->title = 'set-lead';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 52;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = '/cpas/lead/status-lead';
        $this->model->title = 'status-lead';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 52;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = '/tests/dilshod/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 58;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = '/pays/paysys/pay';
        $this->model->title = 'pay';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 55;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/breadcrumbItems';
        $this->model->title = 'breadcrumbItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = '/shop/track/get-ip';
        $this->model->title = 'get-ip';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 57;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = '/shop/track/get-ip1';
        $this->model->title = 'get-ip1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 57;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = '/shop/track/get-ip2';
        $this->model->title = 'get-ip2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 57;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = '/cpas/lead/add-lead';
        $this->model->title = 'add-lead';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 52;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = '/tests/test/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 59;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = '/tests/test/SukhrobApi';
        $this->model->title = 'SukhrobApi';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 59;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/depdropData';
        $this->model->title = 'depdropData';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/depdropData3';
        $this->model->title = 'depdropData3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getAssets';
        $this->model->title = 'getAssets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getBlocks';
        $this->model->title = 'getBlocks';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getBranch';
        $this->model->title = 'getBranch';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getForm';
        $this->model->title = 'getForm';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getGeneral';
        $this->model->title = 'getGeneral';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-microphone';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getOptions';
        $this->model->title = 'getOptions';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getWidget';
        $this->model->title = 'getWidget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getWidgetPart';
        $this->model->title = 'getWidgetPart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/mine';
        $this->model->title = 'mine';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/reset';
        $this->model->title = 'reset';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/selected';
        $this->model->title = 'selected';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = '/tests/app/abl2';
        $this->model->title = 'abl2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 25;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = '/auth/session';
        $this->model->title = 'session';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 32;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '/calls/agent/send';
        $this->model->title = 'send';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 2;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = '/shop/market/deleteAllFromCart';
        $this->model->title = 'deleteAllFromCart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/addToCart';
        $this->model->title = 'addToCart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/dataTableData2';
        $this->model->title = 'dataTableData2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getBrand';
        $this->model->title = 'getBrand';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCartFromSession';
        $this->model->title = 'getCartFromSession';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCompanyByElementId';
        $this->model->title = 'getCompanyByElementId';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getCompanyNewProducts';
        $this->model->title = 'getCompanyNewProducts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getItemByType';
        $this->model->title = 'getItemByType';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getQuestionByProductId';
        $this->model->title = 'getQuestionByProductId';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getReviewsByProductId';
        $this->model->title = 'getReviewsByProductId';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/login';
        $this->model->title = 'login';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/randomIcons';
        $this->model->title = 'randomIcons';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/roleData';
        $this->model->title = 'roleData';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/saveOrder';
        $this->model->title = 'saveOrder';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/setReviews';
        $this->model->title = 'setReviews';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/userIdentity';
        $this->model->title = 'userIdentity';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = '/tests/eye/allmessages';
        $this->model->title = 'allmessages';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 29;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = '/shop/market/infinity_test';
        $this->model->title = 'infinity_test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 17;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = '/shop/test/abl';
        $this->model->title = 'abl';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 21;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = '/tests/botman2/GiveInfoConversationZoir';
        $this->model->title = 'GiveInfoConversationZoir';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 35;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = '/core/apps/rest';
        $this->model->title = 'rest';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 40;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = '/core/apps/validate';
        $this->model->title = 'validate';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 40;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = '/core/auth/resend-code';
        $this->model->title = 'resend-code';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 41;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = '/core/auth/resend-email';
        $this->model->title = 'resend-email';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-microphone';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 41;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = '/core/auth/verify-phone';
        $this->model->title = 'verify-phone';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 41;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 42;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = '/core/crud/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 42;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 42;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = '/core/crud/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 42;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = '/core/crud/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 42;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/act';
        $this->model->title = 'act';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/act2';
        $this->model->title = 'act2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/banderol';
        $this->model->title = 'banderol';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/check-new';
        $this->model->title = 'check-new';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/check';
        $this->model->title = 'check';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/checkDel';
        $this->model->title = 'checkDel';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/checkSet';
        $this->model->title = 'checkSet';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/choose-dyna';
        $this->model->title = 'choose-dyna';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/clone-all';
        $this->model->title = 'clone-all';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/clone';
        $this->model->title = 'clone';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/delete-all';
        $this->model->title = 'delete-all';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/deleteSession';
        $this->model->title = 'deleteSession';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/filter';
        $this->model->title = 'filter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/getChecks';
        $this->model->title = 'getChecks';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/no-complect';
        $this->model->title = 'no-complect';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/record';
        $this->model->title = 'record';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/restore-all';
        $this->model->title = 'restore-all';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/saveUpdate';
        $this->model->title = 'saveUpdate';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/sort';
        $this->model->title = 'sort';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/word';
        $this->model->title = 'word';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = '/core/edit/button';
        $this->model->title = 'button';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 45;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = '/core/edit/edit';
        $this->model->title = 'edit';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 45;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable';
        $this->model->title = 'editable';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-save';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 45;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = '/core/edit/modal-edit';
        $this->model->title = 'modal-edit';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 45;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = '/core/files/delete-file';
        $this->model->title = 'delete-file';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = '/core/files/elfinder';
        $this->model->title = 'elfinder';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = '/core/files/elfinder2';
        $this->model->title = 'elfinder2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = '/core/files/elfinderCopy';
        $this->model->title = 'elfinderCopy';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '/core/files/excel';
        $this->model->title = 'excel';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = '/core/files/export';
        $this->model->title = 'export';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = '/core/files/play';
        $this->model->title = 'play';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = '/core/files/upload';
        $this->model->title = 'upload';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = '/core/form/form-ajax';
        $this->model->title = 'form-ajax';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 47;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = '/core/rest/edit-dyna';
        $this->model->title = 'edit-dyna';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 48;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = '/core/rest/service';
        $this->model->title = 'service';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-chart-pie-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 48;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = '/core/rest/sorting';
        $this->model->title = 'sorting';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 48;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = '/pays/payme';
        $this->model->title = 'payme';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 54;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = '/shop/company/getAllCompanies2';
        $this->model->title = 'getAllCompanies2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 11;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = '/tests/botman2/ChooseLanguageConversationZoir';
        $this->model->title = 'ChooseLanguageConversationZoir';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 35;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = '/calls/time/setTime';
        $this->model->title = 'setTime';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-atlas';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 38;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getAllReviews';
        $this->model->title = 'getAllReviews';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/getFromCart';
        $this->model->title = 'getFromCart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = '/shop/cart/@/add-order-user';
        $this->model->title = 'add-order-user';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_api_type_id = 65;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = '/tests/test/paysysendpoint_info';
        $this->model->title = 'paysysendpoint_info';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 59;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = '/zofts/grapes/getBlockAssets';
        $this->model->title = 'getBlockAssets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 61;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = '/calls/time/cdr';
        $this->model->title = 'cdr';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 38;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/cancel';
        $this->model->title = 'cancel';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/checkAll';
        $this->model->title = 'checkAll';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/checkAllDel';
        $this->model->title = 'checkAllDel';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 43;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable-session';
        $this->model->title = 'editable-session';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 45;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = '/core/files/export_U';
        $this->model->title = 'export_U';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = '/core/files/getjson';
        $this->model->title = 'getjson';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 269;
        $this->model->sort = null;
        $this->model->name = '/core/files/json';
        $this->model->title = 'json';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 46;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = '/core/select/select2Xolmat';
        $this->model->title = 'select2Xolmat';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 50;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = '/core/select/testSelect2';
        $this->model->title = 'testSelect2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 50;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '/shop/ajax/dataTableData';
        $this->model->title = 'dataTableData';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 8;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = '/tests/depdropret/ajax2';
        $this->model->title = 'ajax2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 27;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = '/core/apps/@/ZIndexAjaxAction';
        $this->model->title = 'ZIndexAjaxAction';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 62;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = '/core/market/agent_status';
        $this->model->title = 'agent_status';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 63;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = '/core/rest/@/ZEditDynaAction2';
        $this->model->title = 'ZEditDynaAction2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 64;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = '/core/rest/@/ZEditDynaActionBackup';
        $this->model->title = 'ZEditDynaActionBackup';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 64;
        $this->save();


        $this->model = new PageApi();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = '/core/rest/@/ZSorting2Action';
        $this->model->title = 'ZSorting2Action';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_api_type_id = 64;
        $this->save();


    }

}
