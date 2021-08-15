<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageViewType;

class PageViewTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageViewType();

        $this->model->id = 1613;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1621;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1622;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1624;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1628;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1629;
        $this->model->sort = null;
        $this->model->name = '/shop/agent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1642;
        $this->model->sort = null;
        $this->model->name = '/shop/calls';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1643;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1642;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1645;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1642;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1648;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1645;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1651;
        $this->model->sort = null;
        $this->model->name = '/shop/client/adress';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1650;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1659;
        $this->model->sort = null;
        $this->model->name = '/shop/client/order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1650;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1660;
        $this->model->sort = null;
        $this->model->name = '/shop/client/settings';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1650;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1674;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1668;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1676;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1668;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1677;
        $this->model->sort = null;
        $this->model->name = '/shop/courier';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1680;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1618;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/tracker';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1668;
        $this->model->sort = null;
        $this->model->name = '/shop/cores';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1669;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1668;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1670;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1668;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1671;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1668;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1681;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1680;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1834;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1835;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1834;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1901;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1909;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1911;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1912;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1916;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/analytics';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1920;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1930;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-question';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1931;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1936;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1939;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1942;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1943;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1664;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1663;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1667;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shipment-ready';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1663;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2084;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/able';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1674;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1678;
        $this->model->sort = null;
        $this->model->name = '/shop/courier/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1677;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1910;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1913;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2085;
        $this->model->sort = null;
        $this->model->name = '/shop/paysys';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1915;
        $this->model->sort = null;
        $this->model->name = '/shop/seller';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1929;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2086;
        $this->model->sort = null;
        $this->model->name = '/shop/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2089;
        $this->model->sort = null;
        $this->model->name = '/shop/user/category-index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2102;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-question';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2107;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2133;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2134;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2135;
        $this->model->sort = null;
        $this->model->name = '/shop/user/search';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2141;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-wish';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2147;
        $this->model->sort = null;
        $this->model->name = '/shop/user/wish-viewed';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2070;
        $this->model->sort = null;
        $this->model->name = '/core/view';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1606;
        $this->model->sort = null;
        $this->model->name = '/shop';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1607;
        $this->model->sort = null;
        $this->model->name = '/shop/admin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1612;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1614;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1615;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1626;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1631;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2082;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main/App';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1631;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1632;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1633;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1634;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1644;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1642;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1647;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other/cell';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1645;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1649;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1642;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1650;
        $this->model->sort = null;
        $this->model->name = '/shop/client';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1661;
        $this->model->sort = null;
        $this->model->name = '/shop/client/settings/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1660;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1663;
        $this->model->sort = null;
        $this->model->name = '/shop/complect';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2148;
        $this->model->sort = null;
        $this->model->name = '/shop/user/wish-viewed/empty';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2147;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1946;
        $this->model->sort = null;
        $this->model->name = '/shop/vue';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1977;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1957;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2250;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2094;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-catalog';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2099;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2104;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2111;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main/empty';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2107;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2113;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2119;
        $this->model->sort = null;
        $this->model->name = '/shop/user/market-index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2121;
        $this->model->sort = null;
        $this->model->name = '/shop/user/market-index/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2119;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2131;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/css';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2132;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/empty';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2137;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-basket/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2136;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2138;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-compare';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1948;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1606;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1956;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2056;
        $this->model->sort = null;
        $this->model->name = '/core/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2057;
        $this->model->sort = null;
        $this->model->name = '/core/crud';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2060;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2061;
        $this->model->sort = null;
        $this->model->name = '/core/elfind';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2062;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2063;
        $this->model->sort = null;
        $this->model->name = '/core/files';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2218;
        $this->model->sort = null;
        $this->model->name = '/core/fop';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2064;
        $this->model->sort = null;
        $this->model->name = '/core/grape';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2067;
        $this->model->sort = null;
        $this->model->name = '/core/lists';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2068;
        $this->model->sort = null;
        $this->model->name = '/core/pond';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2232;
        $this->model->sort = null;
        $this->model->name = '/core/word';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2239;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2163;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2244;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/order-report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2246;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2083;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1663;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1675;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1668;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1682;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/redirect';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1680;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1836;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1834;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1837;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1834;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1975;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2255;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-element';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2249;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2272;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1901;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2247;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1925;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1926;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2088;
        $this->model->sort = null;
        $this->model->name = '/shop/user/brand-index/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2087;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2091;
        $this->model->sort = null;
        $this->model->name = '/shop/user/category-index/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2089;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2093;
        $this->model->sort = null;
        $this->model->name = '/shop/user/cpa';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2096;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-catalog/empty';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2094;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2106;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/modal';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2273;
        $this->model->sort = null;
        $this->model->name = '/shop/user/report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2136;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-basket';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2139;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-viewed';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2274;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-courier';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2275;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1476;
        $this->model->sort = null;
        $this->model->name = '/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2209;
        $this->model->sort = null;
        $this->model->name = '/core/asror';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2058;
        $this->model->sort = null;
        $this->model->name = '/core/dyna';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2211;
        $this->model->sort = null;
        $this->model->name = '/core/edit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2214;
        $this->model->sort = null;
        $this->model->name = '/core/error/cleans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2212;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2215;
        $this->model->sort = null;
        $this->model->name = '/core/error_old';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2217;
        $this->model->sort = null;
        $this->model->name = '/core/filter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2220;
        $this->model->sort = null;
        $this->model->name = '/core/grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2223;
        $this->model->sort = null;
        $this->model->name = '/core/menu';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2225;
        $this->model->sort = null;
        $this->model->name = '/core/product';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2227;
        $this->model->sort = null;
        $this->model->name = '/core/region';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2143;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2734;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2146;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-profile';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2734;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2229;
        $this->model->sort = null;
        $this->model->name = '/core/widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2230;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1609;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2269;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2297;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/App';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2245;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1630;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/dashboard';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1636;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1646;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other/cdr';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1645;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1654;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1650;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1666;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/on-complect';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1663;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2208;
        $this->model->sort = null;
        $this->model->name = '/core/agent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2059;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2212;
        $this->model->sort = null;
        $this->model->name = '/core/error';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2373;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2375;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2378;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2381;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/map';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2382;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2385;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1608;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/agent_stat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2165;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/daily-report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1610;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/jamshid_AdminMain';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1617;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2164;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/App';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2242;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/catalog-ware';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1620;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1657;
        $this->model->sort = null;
        $this->model->name = '/shop/client/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1650;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2271;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main/help';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1664;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2123;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2126;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1947;
        $this->model->sort = null;
        $this->model->name = '/shop/vue/components';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1946;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2370;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2571;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2372;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2669;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1635;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/progressive';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1665;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/no-complect';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1663;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2430;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat/assets';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1676;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2431;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1927;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1926;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1941;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2432;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/assets';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2433;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1954;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1948;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1619;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2736;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/user-profile';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1928;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order-item';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2737;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop_option';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2738;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop_option_branch';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2739;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop_option_type';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1915;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1940;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2087;
        $this->model->sort = null;
        $this->model->name = '/shop/user/brand-index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2097;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2103;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-question/asset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2102;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2112;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2118;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/empty';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2730;
        $this->model->sort = null;
        $this->model->name = '/core/chat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2731;
        $this->model->sort = null;
        $this->model->name = '/core/error/templates';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2212;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2567;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2568;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/cleans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2567;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2569;
        $this->model->sort = null;
        $this->model->name = '/core/expo';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2222;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/images';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2411;
        $this->model->sort = null;
        $this->model->name = '/core/help';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2412;
        $this->model->sort = null;
        $this->model->name = '/core/help/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2411;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2732;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2411;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2427;
        $this->model->sort = null;
        $this->model->name = '/core/read';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2428;
        $this->model->sort = null;
        $this->model->name = '/core/read/1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2228;
        $this->model->sort = null;
        $this->model->name = '/core/report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2570;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2733;
        $this->model->sort = null;
        $this->model->name = '/core/tranz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2734;
        $this->model->sort = null;
        $this->model->name = '/core/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1476;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2735;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2734;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2251;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2379;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2372;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2327;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2328;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2238;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2429;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 1616;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2572;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1607;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2241;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2243;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/courier-report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
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
