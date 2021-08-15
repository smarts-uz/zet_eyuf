<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageView;

class PageViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageView();

        $this->model->id = 13367;
        $this->model->sort = null;
        $this->model->name = '/core/core/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13368;
        $this->model->sort = null;
        $this->model->name = '/core/core/error';
        $this->model->title = 'error';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13369;
        $this->model->sort = null;
        $this->model->name = '/core/core/exit';
        $this->model->title = 'exit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13370;
        $this->model->sort = null;
        $this->model->name = '/core/core/oauth';
        $this->model->title = 'oauth';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13371;
        $this->model->sort = null;
        $this->model->name = '/core/core/oauth_';
        $this->model->title = 'oauth_';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13372;
        $this->model->sort = null;
        $this->model->name = '/core/core/queue';
        $this->model->title = 'queue';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13373;
        $this->model->sort = null;
        $this->model->name = '/core/core/return';
        $this->model->title = 'return';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13374;
        $this->model->sort = null;
        $this->model->name = '/core/core/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13375;
        $this->model->sort = null;
        $this->model->name = '/core/crud/choose';
        $this->model->title = 'choose';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13376;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13377;
        $this->model->sort = null;
        $this->model->name = '/core/crud/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13378;
        $this->model->sort = null;
        $this->model->name = '/core/crud/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13379;
        $this->model->sort = null;
        $this->model->name = '/core/crud/expand';
        $this->model->title = 'expand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13380;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13381;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13383;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexC';
        $this->model->title = 'indexC';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13384;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexR';
        $this->model->title = 'indexR';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13385;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexRav';
        $this->model->title = 'indexRav';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13386;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index_2';
        $this->model->title = 'index_2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13387;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index_U';
        $this->model->title = 'index_U';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13388;
        $this->model->sort = null;
        $this->model->name = '/core/crud/relate';
        $this->model->title = 'relate';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13389;
        $this->model->sort = null;
        $this->model->name = '/core/crud/system';
        $this->model->title = 'system';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13390;
        $this->model->sort = null;
        $this->model->name = '/core/crud/tabular';
        $this->model->title = 'tabular';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13391;
        $this->model->sort = null;
        $this->model->name = '/core/crud/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13392;
        $this->model->sort = null;
        $this->model->name = '/core/crud/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13394;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/expand';
        $this->model->title = 'expand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2652;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13395;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2652;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13396;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/universe';
        $this->model->title = 'universe';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2652;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13397;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/apply';
        $this->model->title = 'apply';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13398;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess';
        $this->model->title = 'chess';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13399;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessTest';
        $this->model->title = 'chessTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13401;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_clear_filter';
        $this->model->title = 'chess_clear_filter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13402;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_item';
        $this->model->title = 'chess_item';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13403;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view';
        $this->model->title = 'chess_view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13404;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view2';
        $this->model->title = 'chess_view2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13405;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/columns';
        $this->model->title = 'columns';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13406;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/configs';
        $this->model->title = 'configs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13407;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content';
        $this->model->title = 'content';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13408;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content123';
        $this->model->title = 'content123';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13409;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentD';
        $this->model->title = 'contentD';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13410;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contents';
        $this->model->title = 'contents';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13411;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentSh';
        $this->model->title = 'contentSh';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13412;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentShahzod';
        $this->model->title = 'contentShahzod';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13413;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content_';
        $this->model->title = 'content_';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13414;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13415;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13416;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/details';
        $this->model->title = 'details';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13417;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/dynaform';
        $this->model->title = 'dynaform';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13418;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/dynawidget';
        $this->model->title = 'dynawidget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13419;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter';
        $this->model->title = 'filter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13420;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter2';
        $this->model->title = 'filter2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13421;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter_';
        $this->model->title = 'filter_';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13422;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/norms';
        $this->model->title = 'norms';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13423;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/related';
        $this->model->title = 'related';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13424;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/relation';
        $this->model->title = 'relation';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13425;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetFilter';
        $this->model->title = 'resetFilter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13426;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetSetting';
        $this->model->title = 'resetSetting';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13427;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetSort';
        $this->model->title = 'resetSort';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13428;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sartirovka';
        $this->model->title = 'sartirovka';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13429;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/saveUpdate';
        $this->model->title = 'saveUpdate';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13430;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/setActive';
        $this->model->title = 'setActive';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13431;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sorting';
        $this->model->title = 'sorting';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13432;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sorting2';
        $this->model->title = 'sorting2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13433;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sortingOld';
        $this->model->title = 'sortingOld';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13434;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/statistics';
        $this->model->title = 'statistics';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13435;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/stat_chart';
        $this->model->title = 'stat_chart';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13436;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/stat_view';
        $this->model->title = 'stat_view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13359;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setCallDate';
        $this->model->title = 'setCallDate';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2647;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13363;
        $this->model->sort = null;
        $this->model->name = '/core/asror/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2648;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13366;
        $this->model->sort = null;
        $this->model->name = '/core/asror/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2648;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13365;
        $this->model->sort = null;
        $this->model->name = '/core/asror/testing';
        $this->model->title = 'testing';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2648;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13364;
        $this->model->sort = null;
        $this->model->name = '/core/asror/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2648;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13362;
        $this->model->sort = null;
        $this->model->name = '/core/agent/superviserStats';
        $this->model->title = 'superviserStats';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2647;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13361;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setOnline';
        $this->model->title = 'setOnline';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2647;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13393;
        $this->model->sort = null;
        $this->model->name = '/core/crud/1/indexAs2';
        $this->model->title = 'indexAs2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2651;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13446;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynawidget';
        $this->model->title = 'dynawidget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13447;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/sorting';
        $this->model->title = 'sorting';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13448;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/visualdyna';
        $this->model->title = 'visualdyna';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13449;
        $this->model->sort = null;
        $this->model->name = '/core/edit/edit';
        $this->model->title = 'edit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2655;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13450;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2655;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13451;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable2';
        $this->model->title = 'editable2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2655;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13452;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/admin';
        $this->model->title = 'admin';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13453;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/all';
        $this->model->title = 'all';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13454;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/api';
        $this->model->title = 'api';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13455;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/blocks';
        $this->model->title = 'blocks';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13456;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/render-php-grape';
        $this->model->title = 'render-php-grape';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13457;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/render-php';
        $this->model->title = 'render-php';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13458;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/user';
        $this->model->title = 'user';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13459;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-copy';
        $this->model->title = 'view-copy';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13460;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-copy_1';
        $this->model->title = 'view-copy_1';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13461;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-editor';
        $this->model->title = 'view-editor';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13462;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-2';
        $this->model->title = 'view-grape-2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13463;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-context';
        $this->model->title = 'view-grape-context';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13464;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-test';
        $this->model->title = 'view-grape-test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13465;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape';
        $this->model->title = 'view-grape';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13466;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13467;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/viewOb';
        $this->model->title = 'viewOb';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2656;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13468;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other/htm';
        $this->model->title = 'htm';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2657;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13469;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other/video';
        $this->model->title = 'video';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2657;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13470;
        $this->model->sort = null;
        $this->model->name = '/core/error/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2658;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13471;
        $this->model->sort = null;
        $this->model->name = '/core/error/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2658;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13473;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2660;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13443;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaContent';
        $this->model->title = 'dynaContent';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13474;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2660;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13475;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2660;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13476;
        $this->model->sort = null;
        $this->model->name = '/core/files/play';
        $this->model->title = 'play';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2661;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13477;
        $this->model->sort = null;
        $this->model->name = '/core/filter/dynaFilter';
        $this->model->title = 'dynaFilter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2662;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13478;
        $this->model->sort = null;
        $this->model->name = '/core/filter/setFilter';
        $this->model->title = 'setFilter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2662;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13479;
        $this->model->sort = null;
        $this->model->name = '/core/fop/fop';
        $this->model->title = 'fop';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2663;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13480;
        $this->model->sort = null;
        $this->model->name = '/core/fop/fop1';
        $this->model->title = 'fop1';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2663;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13481;
        $this->model->sort = null;
        $this->model->name = '/core/grape/block';
        $this->model->title = 'block';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13483;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getAssets';
        $this->model->title = 'getAssets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13484;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getBlockAssets';
        $this->model->title = 'getBlockAssets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13485;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getBlocks';
        $this->model->title = 'getBlocks';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13486;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getOptions';
        $this->model->title = 'getOptions';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFile';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13487;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getOptionsAbl';
        $this->model->title = 'getOptionsAbl';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13488;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getWidget';
        $this->model->title = 'getWidget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13489;
        $this->model->sort = null;
        $this->model->name = '/core/grape/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13490;
        $this->model->sort = null;
        $this->model->name = '/core/grape/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13491;
        $this->model->sort = null;
        $this->model->name = '/core/grape/index_';
        $this->model->title = 'index_';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13492;
        $this->model->sort = null;
        $this->model->name = '/core/grape/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13493;
        $this->model->sort = null;
        $this->model->name = '/core/grape/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13494;
        $this->model->sort = null;
        $this->model->name = '/core/grape/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13495;
        $this->model->sort = null;
        $this->model->name = '/core/grape/selected';
        $this->model->title = 'selected';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13496;
        $this->model->sort = null;
        $this->model->name = '/core/grape/templates';
        $this->model->title = 'templates';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13497;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/cleanGrapes';
        $this->model->title = 'cleanGrapes';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13498;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/depdropData';
        $this->model->title = 'depdropData';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13499;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/depdropData3';
        $this->model->title = 'depdropData3';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13500;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getAssets';
        $this->model->title = 'getAssets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13501;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBlockAssets';
        $this->model->title = 'getBlockAssets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13502;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBlocks';
        $this->model->title = 'getBlocks';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13503;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBranch';
        $this->model->title = 'getBranch';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13504;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getForm';
        $this->model->title = 'getForm';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13506;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getOptions';
        $this->model->title = 'getOptions';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'partFile';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13507;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getWidget';
        $this->model->title = 'getWidget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13508;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getWidgetPart';
        $this->model->title = 'getWidgetPart';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13509;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesCards';
        $this->model->title = 'grapesCards';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13510;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesCards2';
        $this->model->title = 'grapesCards2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13511;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesMain';
        $this->model->title = 'grapesMain';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13512;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesMainV2';
        $this->model->title = 'grapesMainV2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13513;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesTemplates';
        $this->model->title = 'grapesTemplates';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13440;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/configs';
        $this->model->title = 'configs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13444;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaform';
        $this->model->title = 'dynaform';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13441;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/content';
        $this->model->title = 'content';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13442;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/content_old';
        $this->model->title = 'content_old';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13472;
        $this->model->sort = null;
        $this->model->name = '/core/error/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2658;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13439;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/columns';
        $this->model->title = 'columns';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13438;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/variant';
        $this->model->title = 'variant';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13523;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMaladoy';
        $this->model->title = 'indexMaladoy';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13524;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMirbosit';
        $this->model->title = 'indexMirbosit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13525;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav';
        $this->model->title = 'indexRav';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13526;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav2';
        $this->model->title = 'indexRav2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13527;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav3';
        $this->model->title = 'indexRav3';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13528;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRavBasic';
        $this->model->title = 'indexRavBasic';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13529;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRustam';
        $this->model->title = 'indexRustam';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13530;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexSherzod';
        $this->model->title = 'indexSherzod';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13531;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexSherzod1';
        $this->model->title = 'indexSherzod1';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13532;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13533;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/reset';
        $this->model->title = 'reset';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13534;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13535;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/saveEski';
        $this->model->title = 'saveEski';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13536;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/selected';
        $this->model->title = 'selected';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13537;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/templates';
        $this->model->title = 'templates';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13538;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/temps';
        $this->model->title = 'temps';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13539;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/widgets';
        $this->model->title = 'widgets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13540;
        $this->model->sort = null;
        $this->model->name = '/core/lists/infinity-all';
        $this->model->title = 'infinity-all';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2667;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13541;
        $this->model->sort = null;
        $this->model->name = '/core/menu/create-ajax';
        $this->model->title = 'create-ajax';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13542;
        $this->model->sort = null;
        $this->model->name = '/core/menu/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13544;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editor';
        $this->model->title = 'editor';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13546;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editorBosya';
        $this->model->title = 'editorBosya';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13547;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editorRav';
        $this->model->title = 'editorRav';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13548;
        $this->model->sort = null;
        $this->model->name = '/core/menu/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13549;
        $this->model->sort = null;
        $this->model->name = '/core/menu/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13550;
        $this->model->sort = null;
        $this->model->name = '/core/menu/indexCategory';
        $this->model->title = 'indexCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13551;
        $this->model->sort = null;
        $this->model->name = '/core/menu/update-ajax';
        $this->model->title = 'update-ajax';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13552;
        $this->model->sort = null;
        $this->model->name = '/core/menu/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13553;
        $this->model->sort = null;
        $this->model->name = '/core/menu/view-ajax';
        $this->model->title = 'view-ajax';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13554;
        $this->model->sort = null;
        $this->model->name = '/core/menu/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13560;
        $this->model->sort = null;
        $this->model->name = '/core/product/addVote';
        $this->model->title = 'addVote';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13521;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexJahongir';
        $this->model->title = 'indexJahongir';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13520;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexFozil';
        $this->model->title = 'indexFozil';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13519;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13561;
        $this->model->sort = null;
        $this->model->name = '/core/product/afterEditCoreCategory';
        $this->model->title = 'afterEditCoreCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13562;
        $this->model->sort = null;
        $this->model->name = '/core/product/autodial';
        $this->model->title = 'autodial';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13563;
        $this->model->sort = null;
        $this->model->name = '/core/product/clearFilterFromSession';
        $this->model->title = 'clearFilterFromSession';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13564;
        $this->model->sort = null;
        $this->model->name = '/core/product/clearViewedSession';
        $this->model->title = 'clearViewedSession';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13565;
        $this->model->sort = null;
        $this->model->name = '/core/product/compare';
        $this->model->title = 'compare';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13566;
        $this->model->sort = null;
        $this->model->name = '/core/product/deleteAddress';
        $this->model->title = 'deleteAddress';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13567;
        $this->model->sort = null;
        $this->model->name = '/core/product/dislike';
        $this->model->title = 'dislike';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13568;
        $this->model->sort = null;
        $this->model->name = '/core/product/disVote';
        $this->model->title = 'disVote';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13569;
        $this->model->sort = null;
        $this->model->name = '/core/product/getByScroll';
        $this->model->title = 'getByScroll';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-save';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13570;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCartOrders';
        $this->model->title = 'getCartOrders';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13571;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCartProductItems';
        $this->model->title = 'getCartProductItems';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13572;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany';
        $this->model->title = 'getCompany';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13573;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyAbl';
        $this->model->title = 'getCompanyAbl';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13574;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyAZ';
        $this->model->title = 'getCompanyAZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13575;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyD';
        $this->model->title = 'getCompanyD';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13576;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany_abl';
        $this->model->title = 'getCompany_abl';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13577;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany_s_sh';
        $this->model->title = 'getCompany_s_sh';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13578;
        $this->model->sort = null;
        $this->model->name = '/core/product/getMarkets';
        $this->model->title = 'getMarkets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13579;
        $this->model->sort = null;
        $this->model->name = '/core/product/getOption';
        $this->model->title = 'getOption';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13580;
        $this->model->sort = null;
        $this->model->name = '/core/product/getStatByDay';
        $this->model->title = 'getStatByDay';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13582;
        $this->model->sort = null;
        $this->model->name = '/core/product/infinity';
        $this->model->title = 'infinity';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13583;
        $this->model->sort = null;
        $this->model->name = '/core/product/like';
        $this->model->title = 'like';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13584;
        $this->model->sort = null;
        $this->model->name = '/core/product/modalContent';
        $this->model->title = 'modalContent';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13585;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClear';
        $this->model->title = 'rangeClear';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13586;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClearCalls';
        $this->model->title = 'rangeClearCalls';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13587;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClearSupervisor';
        $this->model->title = 'rangeClearSupervisor';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13588;
        $this->model->sort = null;
        $this->model->name = '/core/product/saveOrder';
        $this->model->title = 'saveOrder';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13589;
        $this->model->sort = null;
        $this->model->name = '/core/product/setCurrency';
        $this->model->title = 'setCurrency';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13515;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13516;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexA';
        $this->model->title = 'indexA';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13517;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexAbror';
        $this->model->title = 'indexAbror';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13518;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexAziz';
        $this->model->title = 'indexAziz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13559;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToWish';
        $this->model->title = 'addToWish';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13558;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToCompare';
        $this->model->title = 'addToCompare';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13545;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editor2';
        $this->model->title = 'editor2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13557;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToCart';
        $this->model->title = 'addToCart';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13555;
        $this->model->sort = null;
        $this->model->name = '/core/pond/pond-delete';
        $this->model->title = 'pond-delete';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2683;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13599;
        $this->model->sort = null;
        $this->model->name = '/core/product/sort';
        $this->model->title = 'sort';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13600;
        $this->model->sort = null;
        $this->model->name = '/core/read/choose';
        $this->model->title = 'choose';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13601;
        $this->model->sort = null;
        $this->model->name = '/core/read/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13602;
        $this->model->sort = null;
        $this->model->name = '/core/read/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13603;
        $this->model->sort = null;
        $this->model->name = '/core/read/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13604;
        $this->model->sort = null;
        $this->model->name = '/core/read/expand';
        $this->model->title = 'expand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13605;
        $this->model->sort = null;
        $this->model->name = '/core/read/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13606;
        $this->model->sort = null;
        $this->model->name = '/core/read/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13607;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexAs';
        $this->model->title = 'indexAs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13608;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexR';
        $this->model->title = 'indexR';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13609;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexRav';
        $this->model->title = 'indexRav';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13610;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_2';
        $this->model->title = 'index_2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13611;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_U';
        $this->model->title = 'index_U';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13612;
        $this->model->sort = null;
        $this->model->name = '/core/read/relate';
        $this->model->title = 'relate';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13613;
        $this->model->sort = null;
        $this->model->name = '/core/read/system';
        $this->model->title = 'system';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13614;
        $this->model->sort = null;
        $this->model->name = '/core/read/tabular';
        $this->model->title = 'tabular';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13615;
        $this->model->sort = null;
        $this->model->name = '/core/read/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13616;
        $this->model->sort = null;
        $this->model->name = '/core/read/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2685;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13617;
        $this->model->sort = null;
        $this->model->name = '/core/read/1/indexAs2';
        $this->model->title = 'indexAs2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2686;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13618;
        $this->model->sort = null;
        $this->model->name = '/core/region/getRegion';
        $this->model->title = 'getRegion';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2687;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13619;
        $this->model->sort = null;
        $this->model->name = '/core/report/getReport';
        $this->model->title = 'getReport';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2688;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13620;
        $this->model->sort = null;
        $this->model->name = '/core/view/detail-edit';
        $this->model->title = 'detail-edit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2689;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13621;
        $this->model->sort = null;
        $this->model->name = '/core/view/detail-remove';
        $this->model->title = 'detail-remove';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2689;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13622;
        $this->model->sort = null;
        $this->model->name = '/core/widget/1';
        $this->model->title = '1';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13624;
        $this->model->sort = null;
        $this->model->name = '/core/widget/accordion2';
        $this->model->title = 'accordion2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13625;
        $this->model->sort = null;
        $this->model->name = '/core/widget/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13626;
        $this->model->sort = null;
        $this->model->name = '/core/widget/class2';
        $this->model->title = 'class2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13627;
        $this->model->sort = null;
        $this->model->name = '/core/widget/dilshod';
        $this->model->title = 'dilshod';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13628;
        $this->model->sort = null;
        $this->model->name = '/core/widget/getAssets';
        $this->model->title = 'getAssets';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13629;
        $this->model->sort = null;
        $this->model->name = '/core/widget/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13630;
        $this->model->sort = null;
        $this->model->name = '/core/widget/Mirbosit';
        $this->model->title = 'Mirbosit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13631;
        $this->model->sort = null;
        $this->model->name = '/core/widget/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13633;
        $this->model->sort = null;
        $this->model->name = '/core/widget/reset';
        $this->model->title = 'reset';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13634;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleIlyas';
        $this->model->title = 'sampleIlyas';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13635;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm';
        $this->model->title = 'sampleWidgetNorm';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13636;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm2';
        $this->model->title = 'sampleWidgetNorm2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gift';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13637;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormA';
        $this->model->title = 'sampleWidgetNormA';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13638;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormAziz';
        $this->model->title = 'sampleWidgetNormAziz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13639;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormOb';
        $this->model->title = 'sampleWidgetNormOb';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13640;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormRav';
        $this->model->title = 'sampleWidgetNormRav';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13641;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormS';
        $this->model->title = 'sampleWidgetNormS';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13642;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormS2';
        $this->model->title = 'sampleWidgetNormS2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13643;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormUmid';
        $this->model->title = 'sampleWidgetNormUmid';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13644;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm_';
        $this->model->title = 'sampleWidgetNorm_';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13645;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sample_2';
        $this->model->title = 'sample_2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13646;
        $this->model->sort = null;
        $this->model->name = '/core/widget/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13647;
        $this->model->sort = null;
        $this->model->name = '/core/widget/selectModel';
        $this->model->title = 'selectModel';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13648;
        $this->model->sort = null;
        $this->model->name = '/core/widget/settings';
        $this->model->title = 'settings';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13649;
        $this->model->sort = null;
        $this->model->name = '/core/widget/shahzod';
        $this->model->title = 'shahzod';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13650;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13652;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget3';
        $this->model->title = 'widget3';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13653;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2691;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13654;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2691;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13655;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/sampleWidgetNorm';
        $this->model->title = 'sampleWidgetNorm';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2691;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13656;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2691;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13657;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/widget2';
        $this->model->title = 'widget2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2691;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13658;
        $this->model->sort = null;
        $this->model->name = '/core/word/act';
        $this->model->title = 'act';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13659;
        $this->model->sort = null;
        $this->model->name = '/core/word/actOb';
        $this->model->title = 'actOb';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13660;
        $this->model->sort = null;
        $this->model->name = '/core/word/actObReturn';
        $this->model->title = 'actObReturn';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13661;
        $this->model->sort = null;
        $this->model->name = '/core/word/banderol';
        $this->model->title = 'banderol';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13662;
        $this->model->sort = null;
        $this->model->name = '/core/word/clear-session';
        $this->model->title = 'clear-session';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13663;
        $this->model->sort = null;
        $this->model->name = '/core/word/contract';
        $this->model->title = 'contract';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13664;
        $this->model->sort = null;
        $this->model->name = '/core/word/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2692;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13665;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/acceptPay';
        $this->model->title = 'acceptPay';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13666;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/cancelPay';
        $this->model->title = 'cancelPay';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13667;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/card';
        $this->model->title = 'card';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13594;
        $this->model->sort = null;
        $this->model->name = '/core/product/setLang';
        $this->model->title = 'setLang';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13598;
        $this->model->sort = null;
        $this->model->name = '/core/product/setToCartByElementId';
        $this->model->title = 'setToCartByElementId';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13597;
        $this->model->sort = null;
        $this->model->name = '/core/product/setToCart';
        $this->model->title = 'setToCart';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13596;
        $this->model->sort = null;
        $this->model->name = '/core/product/setReview';
        $this->model->title = 'setReview';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13593;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFiltertest';
        $this->model->title = 'setFiltertest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13592;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFilter2';
        $this->model->title = 'setFilter2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13591;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFilter';
        $this->model->title = 'setFilter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13677;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/payout';
        $this->model->title = 'payout';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13678;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/payoutHistory';
        $this->model->title = 'payoutHistory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13679;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/process';
        $this->model->title = 'process';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13680;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/processFlow';
        $this->model->title = 'processFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13681;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/processItem';
        $this->model->title = 'processItem';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13682;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/profile-settings';
        $this->model->title = 'profile-settings';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13683;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/statistic';
        $this->model->title = 'statistic';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13684;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/updateFlow';
        $this->model->title = 'updateFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13685;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/updateOffer';
        $this->model->title = 'updateOffer';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13686;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13687;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/viewFlow';
        $this->model->title = 'viewFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13688;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/action/c';
        $this->model->title = 'c';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2695;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13690;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/balance';
        $this->model->title = 'balance';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13676;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/offer';
        $this->model->title = 'offer';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13691;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/card';
        $this->model->title = 'card';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13692;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/cardflow';
        $this->model->title = 'cardflow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13693;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/create-process';
        $this->model->title = 'create-process';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13694;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/createFlow';
        $this->model->title = 'createFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13695;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/flow';
        $this->model->title = 'flow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13696;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/flows';
        $this->model->title = 'flows';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13697;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/offer';
        $this->model->title = 'offer';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13698;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/offerSh';
        $this->model->title = 'offerSh';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13699;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/offerTest';
        $this->model->title = 'offerTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13700;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/processFlow';
        $this->model->title = 'processFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13702;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/profile-settingsD';
        $this->model->title = 'profile-settingsD';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13703;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/statistic';
        $this->model->title = 'statistic';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13704;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/statisticAbl2';
        $this->model->title = 'statisticAbl2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13705;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/updateFlow';
        $this->model->title = 'updateFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13706;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13707;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/viewFlow';
        $this->model->title = 'viewFlow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13708;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/action/c';
        $this->model->title = 'c';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2697;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13709;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/action/d';
        $this->model->title = 'd';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2697;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13710;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/payment/createPayout';
        $this->model->title = 'createPayout';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2698;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13711;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/payment/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2698;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13712;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/payment/payment';
        $this->model->title = 'payment';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2698;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13719;
        $this->model->sort = null;
        $this->model->name = '/cpas/track/teaser';
        $this->model->title = 'teaser';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2701;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13714;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/payment/payout';
        $this->model->title = 'payout';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2698;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13715;
        $this->model->sort = null;
        $this->model->name = '/cpas/faq/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2699;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13716;
        $this->model->sort = null;
        $this->model->name = '/cpas/redirect/404';
        $this->model->title = '404';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2700;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13717;
        $this->model->sort = null;
        $this->model->name = '/cpas/redirect/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2700;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13672;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/createSite';
        $this->model->title = 'createSite';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13675;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/flows';
        $this->model->title = 'flows';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13720;
        $this->model->sort = null;
        $this->model->name = '/cpas/track/track';
        $this->model->title = 'track';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2701;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13721;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13722;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13723;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/indexAbl';
        $this->model->title = 'indexAbl';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13724;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/login-register';
        $this->model->title = 'login-register';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13725;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/login-register2';
        $this->model->title = 'login-register2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13726;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/redirect';
        $this->model->title = 'redirect';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13727;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/testdyna';
        $this->model->title = 'testdyna';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13728;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth/login';
        $this->model->title = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2703;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13729;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth/logout';
        $this->model->title = 'logout';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2703;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13732;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth/verify/verify-phone';
        $this->model->title = 'verify-phone';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2704;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13733;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address/index';
        $this->model->title = 'Адрес';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2706;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13734;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/ajax/alexei';
        $this->model->title = 'alexei';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2707;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13735;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/ajax/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2707;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13736;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/accept';
        $this->model->title = 'accept';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13737;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/fast-register-frame';
        $this->model->title = 'fast-register-frame';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13738;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13739;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login-frame';
        $this->model->title = 'login-frame';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13740;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login-o2';
        $this->model->title = 'login-o2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13741;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login';
        $this->model->title = 'Вход в систему';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13742;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/logout';
        $this->model->title = 'logout';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13743;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register-frame';
        $this->model->title = 'register-frame';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13744;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register';
        $this->model->title = 'register';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13745;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/user-check';
        $this->model->title = 'user-check';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13746;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify-scholar';
        $this->model->title = 'verify-scholar';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13747;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2708;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13669;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/createItem';
        $this->model->title = 'createItem';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13670;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/createLand';
        $this->model->title = 'createLand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13713;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/payment/paymentUpdate';
        $this->model->title = 'paymentUpdate';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2698;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13718;
        $this->model->sort = null;
        $this->model->name = '/cpas/track/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2701;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13671;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/createOffer';
        $this->model->title = 'createOffer';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13689;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/action/d';
        $this->model->title = 'd';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2695;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13731;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth/verify/verify-email';
        $this->model->title = 'verify-email';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2704;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13757;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2710;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13758;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/contacts';
        $this->model->title = 'contacts';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13759;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/index';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13760;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13761;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/profile';
        $this->model->title = 'profile';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13762;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/statistics';
        $this->model->title = 'statistics';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13763;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/table';
        $this->model->title = 'table';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13764;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2711;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13765;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2712;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13766;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2712;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13767;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2712;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13768;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man/testajax';
        $this->model->title = 'testajax';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2712;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13769;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2712;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13770;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/man/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2712;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13771;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/map/index';
        $this->model->title = 'Карта';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2713;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13773;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13775;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/search';
        $this->model->title = 'search';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13755;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/index';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2710;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13776;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13777;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test2';
        $this->model->title = 'test2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13778;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test3';
        $this->model->title = 'test3';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13779;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13780;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13781;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/notify/view';
        $this->model->title = 'Просмотр  Уведомления';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2715;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13782;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/edit';
        $this->model->title = 'edit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2716;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13783;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/edit_OLD';
        $this->model->title = 'edit_OLD';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2716;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13784;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/index';
        $this->model->title = 'Users';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2716;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13785;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/ZUsersDataList';
        $this->model->title = 'ZUsersDataList';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2716;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13786;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2718;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13787;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2718;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13788;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index3';
        $this->model->title = 'index3';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2718;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13789;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2718;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13790;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2719;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13791;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/indexTest';
        $this->model->title = 'indexTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2719;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13792;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-microphone';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2719;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13793;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/about-m';
        $this->model->title = 'about-m';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13794;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/about';
        $this->model->title = 'about';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13796;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/contacts-m';
        $this->model->title = 'contacts-m';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13797;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/contacts';
        $this->model->title = 'contacts';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13798;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/help';
        $this->model->title = 'help';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13799;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/oferta-m';
        $this->model->title = 'oferta-m';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13800;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/oferta';
        $this->model->title = 'oferta';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13801;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/ofertaAjax';
        $this->model->title = 'ofertaAjax';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13802;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/ofertaCheck-Out';
        $this->model->title = 'ofertaCheck-Out';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13803;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/payment-m';
        $this->model->title = 'payment-m';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13804;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/payment';
        $this->model->title = 'payment';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13805;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/shipping-m';
        $this->model->title = 'shipping-m';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13806;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/shipping';
        $this->model->title = 'shipping';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13807;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/support-service';
        $this->model->title = 'support-service';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13808;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/warranty-m';
        $this->model->title = 'warranty-m';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13809;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/warranty';
        $this->model->title = 'warranty';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13810;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13811;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13812;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/expand';
        $this->model->title = 'expand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13813;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13814;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/testajax';
        $this->model->title = 'testajax';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13815;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13816;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2721;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13817;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13818;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13819;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/detailOld';
        $this->model->title = 'detailOld';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13820;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13822;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13823;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/test2';
        $this->model->title = 'test2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13824;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13825;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13826;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat/sample';
        $this->model->title = 'sample';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2724;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13752;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/mainAxror';
        $this->model->title = 'mainAxror';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13756;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/indexTest';
        $this->model->title = 'indexTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2710;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13753;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/mainSaid';
        $this->model->title = 'mainSaid';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13754;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/musoxon';
        $this->model->title = 'musoxon';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13774;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/index';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13751;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13748;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/file';
        $this->model->title = 'file';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13514;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13522;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMaladoy-khusan';
        $this->model->title = 'indexMaladoy-khusan';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13795;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/behruz_support';
        $this->model->title = 'behruz_support';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2720;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13581;
        $this->model->sort = null;
        $this->model->name = '/core/product/getStatByDay1';
        $this->model->title = 'getStatByDay1';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13842;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/password_res';
        $this->model->title = 'password_res';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13843;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/restore';
        $this->model->title = 'restore';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2702;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13839;
        $this->model->sort = null;
        $this->model->name = '/core/help/view-order-item';
        $this->model->title = 'view-order-item';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2726;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13840;
        $this->model->sort = null;
        $this->model->name = '/core/help/view-orders';
        $this->model->title = 'view-orders';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2726;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13590;
        $this->model->sort = null;
        $this->model->name = '/core/product/setCurrencyRadio';
        $this->model->title = 'setCurrencyRadio';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13595;
        $this->model->sort = null;
        $this->model->name = '/core/product/setOrderToAgent';
        $this->model->title = 'setOrderToAgent';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13821;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/search';
        $this->model->title = 'search';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2723;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13849;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/new_password';
        $this->model->title = 'new_password';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2729;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13850;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/password_res';
        $this->model->title = 'password_res';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2729;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13851;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/password_restore';
        $this->model->title = 'password_restore';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2729;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13852;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/restore';
        $this->model->title = 'restore';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2729;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13853;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/items';
        $this->model->title = 'items';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2652;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13400;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessUniversalReportTest';
        $this->model->title = 'chessUniversalReportTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13836;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_query';
        $this->model->title = 'chess_query';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13437;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2653;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13841;
        $this->model->sort = null;
        $this->model->name = '/core/help/api/status';
        $this->model->title = 'status';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2727;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13543;
        $this->model->sort = null;
        $this->model->name = '/core/menu/detail';
        $this->model->title = 'detail';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2668;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13838;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/forget/forget';
        $this->model->title = 'forget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2728;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13845;
        $this->model->sort = null;
        $this->model->name = '/core/report/cdk-report-n';
        $this->model->title = 'cdk-report-n';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2688;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13827;
        $this->model->sort = null;
        $this->model->name = '/core/report/cdk-report';
        $this->model->title = 'cdk-report';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2688;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13847;
        $this->model->sort = null;
        $this->model->name = '/core/report/completed-report';
        $this->model->title = 'completed-report';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2688;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13445;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaSettings';
        $this->model->title = 'dynaSettings';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13358;
        $this->model->sort = null;
        $this->model->name = '/core/agent/callStatusTime';
        $this->model->title = 'callStatusTime';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2647;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13360;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setInProsess';
        $this->model->title = 'setInProsess';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2647;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13382;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexAs';
        $this->model->title = 'indexAs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2650;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13837;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable_29-09-2020';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2655;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13482;
        $this->model->sort = null;
        $this->model->name = '/core/grape/edit';
        $this->model->title = 'edit';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13505;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getGeneral';
        $this->model->title = 'getGeneral';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13730;
        $this->model->sort = null;
        $this->model->name = '/cpas/user/user-auth/verify/need-verify-email';
        $this->model->title = 'need-verify-email';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2704;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13749;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/index';
        $this->model->title = 'ЧАТ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13623;
        $this->model->sort = null;
        $this->model->name = '/core/widget/accordion';
        $this->model->title = 'accordion';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13632;
        $this->model->sort = null;
        $this->model->name = '/core/widget/option_ilyas';
        $this->model->title = 'option_ilyas';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13651;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget2';
        $this->model->title = 'widget2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2690;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13828;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/company';
        $this->model->title = 'Управление компании';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13668;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/create-process';
        $this->model->title = 'create-process';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fal-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13829;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/createCompany';
        $this->model->title = 'createCompany';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13674;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/flowadmin';
        $this->model->title = 'flowadmin';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13830;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/testApi';
        $this->model->title = 'testApi';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13831;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/testApi2';
        $this->model->title = 'testApi2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13846;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/track';
        $this->model->title = 'track';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13750;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/chat/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2709;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13832;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/updateCompany';
        $this->model->title = 'updateCompany';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13833;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/viewCompany';
        $this->model->title = 'viewCompany';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13848;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/viewflowdyna';
        $this->model->title = 'viewflowdyna';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2694;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13834;
        $this->model->sort = null;
        $this->model->name = '/cpas/admin/action/deleteOffer';
        $this->model->title = 'deleteOffer';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2695;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13772;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2714;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13556;
        $this->model->sort = null;
        $this->model->name = '/core/pond/pond-upload';
        $this->model->title = 'pond-upload';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-chart-pie-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2683;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13844;
        $this->model->sort = null;
        $this->model->name = '/core/product/cdk_clear_filter';
        $this->model->title = 'cdk_clear_filter';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2684;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13701;
        $this->model->sort = null;
        $this->model->name = '/cpas/client/profile-settings';
        $this->model->title = 'profile-settings';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2696;
        $this->save();


    }

}
