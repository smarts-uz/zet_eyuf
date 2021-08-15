<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageViewType;

class PageViewTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageViewType();

        $this->model->id = 3324;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/able';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3323;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3273;
        $this->model->sort = null;
        $this->model->name = '/core/read';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3312;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/ALL';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3325;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3319;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3326;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3319;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3274;
        $this->model->sort = null;
        $this->model->name = '/core/read/1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3313;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3276;
        $this->model->sort = null;
        $this->model->name = '/core/report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3334;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3282;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3281;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3336;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3282;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3255;
        $this->model->sort = null;
        $this->model->name = '/core/lists';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3256;
        $this->model->sort = null;
        $this->model->name = '/core/menu';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3297;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3281;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3298;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3272;
        $this->model->sort = null;
        $this->model->name = '/core/product';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3300;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3303;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3314;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/guest';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3595;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3315;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3320;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3319;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3322;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3319;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3327;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat/assets';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3326;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3271;
        $this->model->sort = null;
        $this->model->name = '/core/pond';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3275;
        $this->model->sort = null;
        $this->model->name = '/core/region';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3335;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3277;
        $this->model->sort = null;
        $this->model->name = '/core/view';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3280;
        $this->model->sort = null;
        $this->model->name = '/core/word';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3305;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/map';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3323;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3319;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3281;
        $this->model->sort = null;
        $this->model->name = '/eyuf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3306;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3308;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3302;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3297;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3250;
        $this->model->sort = null;
        $this->model->name = '/core/filter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3309;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3281;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3310;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3330;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3331;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/cleans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3330;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3248;
        $this->model->sort = null;
        $this->model->name = '/core/error_old';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3332;
        $this->model->sort = null;
        $this->model->name = '/core/expo';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3251;
        $this->model->sort = null;
        $this->model->name = '/core/fop';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3252;
        $this->model->sort = null;
        $this->model->name = '/core/grape';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3253;
        $this->model->sort = null;
        $this->model->name = '/core/grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3328;
        $this->model->sort = null;
        $this->model->name = '/core/help';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3333;
        $this->model->sort = null;
        $this->model->name = '/core/help/api';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3328;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3316;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3317;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3319;
        $this->model->sort = null;
        $this->model->name = '/shop/cores';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3514;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3242;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3243;
        $this->model->sort = null;
        $this->model->name = '/core/edit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3244;
        $this->model->sort = null;
        $this->model->name = '/core/elfind';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3249;
        $this->model->sort = null;
        $this->model->name = '/core/files';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3246;
        $this->model->sort = null;
        $this->model->name = '/core/error';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3241;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3240;
        $this->model->sort = null;
        $this->model->name = '/core/dyna';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3238;
        $this->model->sort = null;
        $this->model->name = '/core/crud';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3237;
        $this->model->sort = null;
        $this->model->name = '/core/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3236;
        $this->model->sort = null;
        $this->model->name = '/core/asror';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3338;
        $this->model->sort = null;
        $this->model->name = '/eyuf/mailer';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3281;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3321;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3319;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3235;
        $this->model->sort = null;
        $this->model->name = '/core/agent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3234;
        $this->model->sort = null;
        $this->model->name = '/core';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = null;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3590;
        $this->model->sort = null;
        $this->model->name = '/core/chat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3245;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3247;
        $this->model->sort = null;
        $this->model->name = '/core/error/cleans';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3246;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3591;
        $this->model->sort = null;
        $this->model->name = '/core/error/templates';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3246;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3254;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/images';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3592;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3328;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3593;
        $this->model->sort = null;
        $this->model->name = '/core/tranz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3278;
        $this->model->sort = null;
        $this->model->name = '/core/widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3279;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3311;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/admin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3594;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3318;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3309;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3596;
        $this->model->sort = null;
        $this->model->name = '/core/user';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3234;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3597;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3596;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3598;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3596;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3599;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageViewType();

        $this->model->id = 3600;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-profile';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->model->page_view_type_id = 3596;
        $this->save();


    }

}
