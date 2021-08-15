<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageViewType;

class PageViewTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageViewType();

        $this->model->id = 2704;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth/verify';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2703;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2705;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2706;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2707;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/ajax';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2708;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2709;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2710;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2711;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2677;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/v0-9-0/bs-iconpicker';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2676;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2678;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/v0-9-0/bs-iconpicker/css';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2677;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2679;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/v0-9-0/bs-iconpicker/js';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2677;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2712;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2713;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/map';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2714;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2715;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/notify';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2716;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2705;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2717;
        $this->model->sort = null;
        $this->model->name = '/shop/cores';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2718;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2717;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2680;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/v0-9-0/bs-iconpicker/js/iconset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2679;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2681;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/JqueryMenu';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2669;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2682;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/JqueryMenu/bin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2681;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2683;
        $this->model->sort = null;
        $this->model->name = '/core/pond';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2684;
        $this->model->sort = null;
        $this->model->name = '/core/product';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2685;
        $this->model->sort = null;
        $this->model->name = '/core/read';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2686;
        $this->model->sort = null;
        $this->model->name = '/core/read/1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2687;
        $this->model->sort = null;
        $this->model->name = '/core/region';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2688;
        $this->model->sort = null;
        $this->model->name = '/core/report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2689;
        $this->model->sort = null;
        $this->model->name = '/core/view';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2690;
        $this->model->sort = null;
        $this->model->name = '/core/widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2691;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2692;
        $this->model->sort = null;
        $this->model->name = '/core/word';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2693;
        $this->model->sort = null;
        $this->model->name = '/cpas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2694;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2693;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2695;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/action';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2696;
        $this->model->sort = null;
        $this->model->name = '/cpas/client';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2693;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2697;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/action';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2698;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/payment';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2719;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2717;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2720;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2717;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2721;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2717;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2722;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/able';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2699;
        $this->model->sort = null;
        $this->model->name = '/cpas/faq';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2693;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2700;
        $this->model->sort = null;
        $this->model->name = '/cpas/redirect';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2693;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2701;
        $this->model->sort = null;
        $this->model->name = '/cpas/track';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2693;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2702;
        $this->model->sort = null;
        $this->model->name = '/cpas/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2693;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2723;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2717;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2724;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2717;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2725;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat/assets';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2724;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2729;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2651;
        $this->model->sort = null;
        $this->model->name = '/core/crud/1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2652;
        $this->model->sort = null;
        $this->model->name = '/core/dyna';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2653;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2654;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2646;
        $this->model->sort = null;
        $this->model->name = '/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2647;
        $this->model->sort = null;
        $this->model->name = '/core/agent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2648;
        $this->model->sort = null;
        $this->model->name = '/core/asror';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2649;
        $this->model->sort = null;
        $this->model->name = '/core/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2650;
        $this->model->sort = null;
        $this->model->name = '/core/crud';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2655;
        $this->model->sort = null;
        $this->model->name = '/core/edit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2656;
        $this->model->sort = null;
        $this->model->name = '/core/elfind';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2657;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2658;
        $this->model->sort = null;
        $this->model->name = '/core/error';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2659;
        $this->model->sort = null;
        $this->model->name = '/core/error/cleans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2658;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2660;
        $this->model->sort = null;
        $this->model->name = '/core/error_old';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2661;
        $this->model->sort = null;
        $this->model->name = '/core/files';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2662;
        $this->model->sort = null;
        $this->model->name = '/core/filter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2663;
        $this->model->sort = null;
        $this->model->name = '/core/fop';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2664;
        $this->model->sort = null;
        $this->model->name = '/core/grape';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2665;
        $this->model->sort = null;
        $this->model->name = '/core/grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2666;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/images';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2726;
        $this->model->sort = null;
        $this->model->name = '/core/help';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2727;
        $this->model->sort = null;
        $this->model->name = '/core/help/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2726;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2667;
        $this->model->sort = null;
        $this->model->name = '/core/lists';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2668;
        $this->model->sort = null;
        $this->model->name = '/core/menu';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2646;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2669;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2670;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/editor';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2669;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2671;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2669;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2672;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/bootstrap-iconpicker';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2671;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2673;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/bootstrap-iconpicker/css';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2672;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2674;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/bootstrap-iconpicker/js';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2672;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2675;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/bootstrap-iconpicker/js/iconset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2674;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2676;
        $this->model->sort = null;
        $this->model->name = '/core/menu/assets/jQuery-Menu-Editor-master/v0-9-0';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2671;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2728;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/forget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 2703;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


    }

}
