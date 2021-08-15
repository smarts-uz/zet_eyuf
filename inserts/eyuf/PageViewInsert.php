<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageView;

class PageViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageView();

        $this->model->id = 15495;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/relation';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15496;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetFilter';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15497;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetSetting';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15498;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetSort';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15500;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/saveUpdate';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15501;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/setActive';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15503;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sorting2';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15506;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/stat_chart';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15507;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/stat_view';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15508;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/test';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15509;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/variant';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15448;
        $this->model->sort = null;
        $this->model->name = '/core/crud/choose';
        $this->model->title = 'Подобрать Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15450;
        $this->model->sort = null;
        $this->model->name = '/core/crud/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15533;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-2';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15531;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-copy_1';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15558;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getOptionsAbl';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15563;
        $this->model->sort = null;
        $this->model->name = '/core/grape/main';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15491;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter2';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15462;
        $this->model->sort = null;
        $this->model->name = '/core/crud/tabular';
        $this->model->title = 'Изменить все - Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15490;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15948;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/add-report';
        $this->model->title = 'Добавить новый отчет';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17920;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/index2';
        $this->model->title = 'Окно администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15534;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-context';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15536;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15473;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_clear_filter';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15973;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/help';
        $this->model->title = 'Помощь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15645;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyAZ';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15460;
        $this->model->sort = null;
        $this->model->name = '/core/crud/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15482;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentSh';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15478;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15480;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentD';
        $this->model->title = 'contentD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15521;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3243;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15485;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/delete';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15476;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/columns';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15484;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content_';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15562;
        $this->model->sort = null;
        $this->model->name = '/core/grape/index_';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15539;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other/htm';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3245;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15494;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/related';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17936;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editableabl';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3243;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17925;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/doc-list-accept-report';
        $this->model->title = 'Список Документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17923;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/index-full_old';
        $this->model->title = 'Таблица с расходом';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15648;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany_s_sh';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17927;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/index-report';
        $this->model->title = 'Стипендианты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15532;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-editor';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17924;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/ticket-index';
        $this->model->title = 'Список авиабилетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15646;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyD';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15453;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15550;
        $this->model->sort = null;
        $this->model->name = '/core/fop/fop';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3251;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15565;
        $this->model->sort = null;
        $this->model->name = '/core/grape/save';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17926;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/doc-list-accept-report';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15571;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getAssets';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15582;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesMain';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15606;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/saveEski';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15520;
        $this->model->sort = null;
        $this->model->name = '/core/edit/edit';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3243;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17921;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/index222';
        $this->model->title = 'index222';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17897;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/doc-update';
        $this->model->title = 'Добавить документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15604;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/reset';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15581;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesCards2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15537;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15538;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/viewOb';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15732;
        $this->model->sort = null;
        $this->model->name = '/core/word/banderol';
        $this->model->title = 'banderol';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15556;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getBlocks';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15690;
        $this->model->sort = null;
        $this->model->name = '/core/report/getReport';
        $this->model->title = 'getReport';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3276;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15628;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToCart';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15555;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getBlockAssets';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15659;
        $this->model->sort = null;
        $this->model->name = '/core/product/saveOrder';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17933;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor';
        $this->model->title = 'Модификации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15561;
        $this->model->sort = null;
        $this->model->name = '/core/grape/indexBosya';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15597;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15529;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/user';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15530;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-copy';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15527;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/render-php-grape';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15552;
        $this->model->sort = null;
        $this->model->name = '/core/grape/block';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15553;
        $this->model->sort = null;
        $this->model->name = '/core/grape/edit';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15600;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRustam';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15566;
        $this->model->sort = null;
        $this->model->name = '/core/grape/selected';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15560;
        $this->model->sort = null;
        $this->model->name = '/core/grape/index';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15577;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getOptions';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'partFile';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15719;
        $this->model->sort = null;
        $this->model->name = '/core/widget/settings';
        $this->model->title = 'Настройка Опций Виджета ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15573;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBlocks';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15568;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/cleanGrapes';
        $this->model->title = 'ZetGrapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15625;
        $this->model->sort = null;
        $this->model->name = '/core/menu/view';
        $this->model->title = 'Просмотр  Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15591;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexFozil';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15897;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/ALL/docListAlert';
        $this->model->title = 'docListAlert';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3312;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15596;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15643;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15528;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/render-php';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15554;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getAssets';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15695;
        $this->model->sort = null;
        $this->model->name = '/core/widget/accordion2';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15559;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getWidget';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15601;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexSherzod';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15713;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormS2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15715;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm_';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17938;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editableOff';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3243;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15662;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFilter';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15603;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/main';
        $this->model->title = 'Конструктор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15609;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/temps';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15620;
        $this->model->sort = null;
        $this->model->name = '/core/menu/index2';
        $this->model->title = 'Список Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15615;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editor';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15687;
        $this->model->sort = null;
        $this->model->name = '/core/read/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15551;
        $this->model->sort = null;
        $this->model->name = '/core/fop/fop1';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3251;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15664;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFiltertest';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15605;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/save';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15525;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/api';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17934;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexAbl';
        $this->model->title = 'indexAbl';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15523;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/admin';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15599;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRavBasic';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16036;
        $this->model->sort = null;
        $this->model->name = '/core/report/cdk-report-n';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3276;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17937;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editableabltwo';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3243;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15686;
        $this->model->sort = null;
        $this->model->name = '/core/read/update';
        $this->model->title = 'Редактирование Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15720;
        $this->model->sort = null;
        $this->model->name = '/core/widget/shahzod';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15524;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/all';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15974;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/oferta-m';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15621;
        $this->model->sort = null;
        $this->model->name = '/core/menu/indexCategory';
        $this->model->title = 'Список Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15622;
        $this->model->sort = null;
        $this->model->name = '/core/menu/update-ajax';
        $this->model->title = 'Редактирование Курьеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15978;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/payment-m';
        $this->model->title = 'Оплата';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15593;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMaladoy-khusan';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15594;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMaladoy';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15644;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyAbl';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15654;
        $this->model->sort = null;
        $this->model->name = '/core/product/like';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15658;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClearSupervisor';
        $this->model->title = 'rangeClearSupervisor';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15661;
        $this->model->sort = null;
        $this->model->name = '/core/product/setCurrencyRadio';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15665;
        $this->model->sort = null;
        $this->model->name = '/core/product/setLang';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15667;
        $this->model->sort = null;
        $this->model->name = '/core/product/setReview';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15829;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/logout';
        $this->model->title = 'Logout';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16030;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register_2';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15660;
        $this->model->sort = null;
        $this->model->name = '/core/product/setCurrency';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15876;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address/index';
        $this->model->title = 'Адрес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15684;
        $this->model->sort = null;
        $this->model->name = '/core/read/system';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15907;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/view';
        $this->model->title = 'eyuf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15706;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15707;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm2';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gift';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15681;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_2';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15683;
        $this->model->sort = null;
        $this->model->name = '/core/read/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15638;
        $this->model->sort = null;
        $this->model->name = '/core/product/dislike';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15672;
        $this->model->sort = null;
        $this->model->name = '/core/read/create';
        $this->model->title = 'Создание Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15830;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register-frame';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15709;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormAziz';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15930;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/report-list';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15704;
        $this->model->sort = null;
        $this->model->name = '/core/widget/reset';
        $this->model->title = 'Сохранение Настроек Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15710;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormOb';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15711;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormRav';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15712;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormS';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15890;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/admin/scholars';
        $this->model->title = 'Список Стипендиант';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3311;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15632;
        $this->model->sort = null;
        $this->model->name = '/core/product/afterEditCoreCategory';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15602;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexSherzod1';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15929;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/index';
        $this->model->title = 'Основное окно';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15636;
        $this->model->sort = null;
        $this->model->name = '/core/product/compare';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15921;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-index';
        $this->model->title = 'Список Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15937;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/index';
        $this->model->title = 'Запросы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15642;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCartProductItems';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15613;
        $this->model->sort = null;
        $this->model->name = '/core/menu/create';
        $this->model->title = 'Проверка покупки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15505;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/statistics';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15871;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/index';
        $this->model->title = 'Users';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3308;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15909;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/doc-check';
        $this->model->title = 'Cписок документов на подтверждение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-file';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15623;
        $this->model->sort = null;
        $this->model->name = '/core/menu/update';
        $this->model->title = 'Редактирование  Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15982;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/support-service';
        $this->model->title = 'Служба поддержки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15988;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/index';
        $this->model->title = 'EyufManual';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3323;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16009;
        $this->model->sort = null;
        $this->model->name = '/core/user/verify/need-verify-email';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15873;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/add-invoice';
        $this->model->title = 'Добавить расходы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15624;
        $this->model->sort = null;
        $this->model->name = '/core/menu/view-ajax';
        $this->model->title = 'Просмотр тестовых компонентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15612;
        $this->model->sort = null;
        $this->model->name = '/core/menu/create-ajax';
        $this->model->title = 'Создание Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15969;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/about';
        $this->model->title = 'О нашем сервисе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15637;
        $this->model->sort = null;
        $this->model->name = '/core/product/deleteAddress';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15938;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-all-index';
        $this->model->title = 'Список Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15842;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/index';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3302;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15980;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/shipping-m';
        $this->model->title = 'Доставка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15698;
        $this->model->sort = null;
        $this->model->name = '/core/widget/dilshod';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16047;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/items';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15943;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-index';
        $this->model->title = 'Список Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15979;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/payment';
        $this->model->title = 'Оплата';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16025;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/restore';
        $this->model->title = 'Восстановление пароля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3334;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15472;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessUniversalReportTest';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16055;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/full';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16010;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_query';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15972;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/contacts';
        $this->model->title = 'Наши контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15959;
        $this->model->sort = null;
        $this->model->name = '/core/user/verify/verify';
        $this->model->title = 'Scholar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15858;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/map/index';
        $this->model->title = 'Карта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3305;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15869;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/edit';
        $this->model->title = 'Измененить пароль';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3308;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15820;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address/index';
        $this->model->title = 'Адрес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3298;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15589;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexAziz';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15849;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/statistics';
        $this->model->title = 'Статистика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16005;
        $this->model->sort = null;
        $this->model->name = '/core/report/cdk-report';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3276;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15946;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/view';
        $this->model->title = 'Просмотр  Запрос потребностей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15910;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/doc-list-accept';
        $this->model->title = 'Список Документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15467;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/index';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15671;
        $this->model->sort = null;
        $this->model->name = '/core/read/choose';
        $this->model->title = 'Подобрать Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16008;
        $this->model->sort = null;
        $this->model->name = '/core/help/view-orders';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3328;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16053;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/DynaChessItemcreate';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15902;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/detail';
        $this->model->title = 'Детали Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15958;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/update_report';
        $this->model->title = 'Список Расходы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15882;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/index';
        $this->model->title = 'Стипендианты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16037;
        $this->model->sort = null;
        $this->model->name = '/core/report/completed-report';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3276;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16028;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report/report_view';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3335;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15975;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/oferta';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15968;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/about-m';
        $this->model->title = 'О нашем сервисе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16056;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-bekzod';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15918;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-count-index';
        $this->model->title = 'Список Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15971;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/contacts-m';
        $this->model->title = 'Наши контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15919;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-count-request';
        $this->model->title = 'Запрос потребностей по количеству';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15629;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToCompare';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16043;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/statistics';
        $this->model->title = 'Статистика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15941;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-count-index';
        $this->model->title = 'Потребности по колличеству';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16019;
        $this->model->sort = null;
        $this->model->name = '/core/help/api/status';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3333;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15587;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexA';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15991;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/view';
        $this->model->title = 'Просмотр  Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3323;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16007;
        $this->model->sort = null;
        $this->model->name = '/core/help/view-order-item';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3328;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15904;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/index';
        $this->model->title = 'Стипендианты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15663;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFilter2';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15861;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/index';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15989;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/testajax';
        $this->model->title = 'Создание Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3323;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15922;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-request';
        $this->model->title = 'Запросы к стипендиантам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15924;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-view';
        $this->model->title = 'Просмотр  Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15860;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/detail';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15583;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesMainV2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15908;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/compatriot';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16061;
        $this->model->sort = null;
        $this->model->name = '/core/crud/item';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15588;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexAbror';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15947;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/add-info';
        $this->model->title = 'Информация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15942;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-count-request';
        $this->model->title = 'Потребности по количеству';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15944;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-request';
        $this->model->title = 'Запросы к стипендиантам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15953;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/index';
        $this->model->title = 'Стипендиант';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15976;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/ofertaAjax';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15981;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/shipping';
        $this->model->title = 'Доставка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15617;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editorBosya';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16004;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view2';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15471;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessTest';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15708;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormA';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16049;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_chart';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15990;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/update';
        $this->model->title = 'Редактирование  Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3323;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16050;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_item1';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15535;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-test';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15983;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/warranty-m';
        $this->model->title = 'Гарантии';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16052;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view1';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15499;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sartirovka';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15965;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/index';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3321;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15915;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-compatriot-request';
        $this->model->title = 'Запрос к cоотечественникам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16026;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report/reports';
        $this->model->title = 'отчеты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3335;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15831;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15940;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-compatriot-request';
        $this->model->title = 'Запрос к соотечественникам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16051;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_query1';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15995;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/index';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16048;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess1';
        $this->model->title = 'Страны 1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16027;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report/report_item';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3335;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16054;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sortingBackup';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15703;
        $this->model->sort = null;
        $this->model->name = '/core/widget/option_ilyas';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15584;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesTemplates';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16062;
        $this->model->sort = null;
        $this->model->name = '/core/crud/itemMulti';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16035;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/view';
        $this->model->title = 'eyuf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15735;
        $this->model->sort = null;
        $this->model->name = '/core/word/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-atlas';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15985;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/create';
        $this->model->title = 'Создание Справочника';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3323;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15912;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/index';
        $this->model->title = 'Окно модератора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15992;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15511;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/configs';
        $this->model->title = 'configs';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15700;
        $this->model->sort = null;
        $this->model->name = '/core/widget/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15928;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/doc-reject';
        $this->model->title = 'doc-reject';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15515;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaform';
        $this->model->title = 'dynaform';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15999;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16021;
        $this->model->sort = null;
        $this->model->name = '/eyuf/mailer/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3338;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16012;
        $this->model->sort = null;
        $this->model->name = '/core/product/cdk_clear_filter';
        $this->model->title = 'cdk_clear_filter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15716;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sample_2';
        $this->model->title = 'sample_2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15833;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify-scholar';
        $this->model->title = 'verify-scholar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15572;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBlockAssets';
        $this->model->title = 'getBlockAssets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15526;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/blocks';
        $this->model->title = 'blocks';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15865;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test3';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15446;
        $this->model->sort = null;
        $this->model->name = '/core/core/return';
        $this->model->title = 'return';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15733;
        $this->model->sort = null;
        $this->model->name = '/core/word/clear-session';
        $this->model->title = 'clear-session';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15717;
        $this->model->sort = null;
        $this->model->name = '/core/widget/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15718;
        $this->model->sort = null;
        $this->model->name = '/core/widget/selectModel';
        $this->model->title = 'selectModel';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15590;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15898;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/ALL/scholarObject';
        $this->model->title = 'scholarObject';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3312;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15731;
        $this->model->sort = null;
        $this->model->name = '/core/word/actObReturn';
        $this->model->title = 'actObReturn';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15850;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/table';
        $this->model->title = 'table';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15626;
        $this->model->sort = null;
        $this->model->name = '/core/pond/pond-delete';
        $this->model->title = 'pond-delete';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3271;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15488;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/dynaform';
        $this->model->title = 'dynaform';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-chart-pie-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15699;
        $this->model->sort = null;
        $this->model->name = '/core/widget/getAssets';
        $this->model->title = 'getAssets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-microphone';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15542;
        $this->model->sort = null;
        $this->model->name = '/core/error/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3246;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15657;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClearCalls';
        $this->model->title = 'rangeClearCalls';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15834;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17916;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15518;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/sorting';
        $this->model->title = 'sorting';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15964;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/main';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3320;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15548;
        $this->model->sort = null;
        $this->model->name = '/core/filter/dynaFilter';
        $this->model->title = 'dynaFilter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16024;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/password_restore';
        $this->model->title = 'password_restore';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3334;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15651;
        $this->model->sort = null;
        $this->model->name = '/core/product/getStatByDay';
        $this->model->title = 'getStatByDay';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-microphone';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15729;
        $this->model->sort = null;
        $this->model->name = '/core/word/act';
        $this->model->title = 'act';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15872;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/ZUsersDataList';
        $this->model->title = 'ZUsersDataList';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3308;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15633;
        $this->model->sort = null;
        $this->model->name = '/core/product/autodial';
        $this->model->title = 'autodial';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15875;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/add-ticket';
        $this->model->title = 'Добавить авиабилет';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15966;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/indexTest';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3321;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15864;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test2';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15650;
        $this->model->sort = null;
        $this->model->name = '/core/product/getOption';
        $this->model->title = 'getOption';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15442;
        $this->model->sort = null;
        $this->model->name = '/core/core/exit';
        $this->model->title = 'exit';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15434;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setOnline';
        $this->model->title = 'setOnline';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3235;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15734;
        $this->model->sort = null;
        $this->model->name = '/core/word/contract';
        $this->model->title = 'contract';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15696;
        $this->model->sort = null;
        $this->model->name = '/core/widget/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15543;
        $this->model->sort = null;
        $this->model->name = '/core/error/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3246;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15493;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/norms';
        $this->model->title = 'norms';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15441;
        $this->model->sort = null;
        $this->model->name = '/core/core/error';
        $this->model->title = 'error';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15867;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15693;
        $this->model->sort = null;
        $this->model->name = '/core/widget/1';
        $this->model->title = '1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16065;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/forVveb';
        $this->model->title = 'forVveb';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15514;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaContent';
        $this->model->title = 'dynaContent';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15431;
        $this->model->sort = null;
        $this->model->name = '/core/agent/callStatusTime';
        $this->model->title = 'callStatusTime';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3235;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15892;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/admin/table';
        $this->model->title = 'table';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3311;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15652;
        $this->model->sort = null;
        $this->model->name = '/core/product/getStatByDay1';
        $this->model->title = 'getStatByDay1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15510;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/columns';
        $this->model->title = 'columns';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16001;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat/sample';
        $this->model->title = 'sample';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3326;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16000;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15726;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/sampleWidgetNorm';
        $this->model->title = 'sampleWidgetNorm';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3279;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15900;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/ALL/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3312;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15570;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/depdropData3';
        $this->model->title = 'depdropData3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15540;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other/video';
        $this->model->title = 'video';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3245;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17904;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessD';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15610;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/widgets';
        $this->model->title = 'widgets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16002;
        $this->model->sort = null;
        $this->model->name = '/core/user/verify/verify-email';
        $this->model->title = 'verify-email';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16044;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/table';
        $this->model->title = 'table';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-truck-container';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15639;
        $this->model->sort = null;
        $this->model->name = '/core/product/disVote';
        $this->model->title = 'disVote';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15475;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view';
        $this->model->title = 'chess_view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15640;
        $this->model->sort = null;
        $this->model->name = '/core/product/getByScroll';
        $this->model->title = 'getByScroll';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15963;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index3';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3320;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16039;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/contacts';
        $this->model->title = 'contacts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16022;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/new_password';
        $this->model->title = 'new_password';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3334;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15844;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3302;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15823;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/accept';
        $this->model->title = 'accept';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15676;
        $this->model->sort = null;
        $this->model->name = '/core/read/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15437;
        $this->model->sort = null;
        $this->model->name = '/core/asror/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3236;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15576;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getGeneral';
        $this->model->title = 'getGeneral';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15724;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3279;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15728;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/widget2';
        $this->model->title = 'widget2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3279;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15545;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3248;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15607;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/selected';
        $this->model->title = 'selected';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15697;
        $this->model->sort = null;
        $this->model->name = '/core/widget/class2';
        $this->model->title = 'class2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15851;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15616;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editor2';
        $this->model->title = 'editor2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15586;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16020;
        $this->model->sort = null;
        $this->model->name = '/eyuf/mailer/confirm';
        $this->model->title = 'confirm';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-chart-pie-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3338;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15843;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/indexTest';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3302;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15432;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setCallDate';
        $this->model->title = 'setCallDate';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3235;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15438;
        $this->model->sort = null;
        $this->model->name = '/core/asror/testing';
        $this->model->title = 'testing';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3236;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15444;
        $this->model->sort = null;
        $this->model->name = '/core/core/oauth_';
        $this->model->title = 'oauth_';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15439;
        $this->model->sort = null;
        $this->model->name = '/core/asror/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3236;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15489;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/dynawidget';
        $this->model->title = 'dynawidget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15447;
        $this->model->sort = null;
        $this->model->name = '/core/core/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15730;
        $this->model->sort = null;
        $this->model->name = '/core/word/actOb';
        $this->model->title = 'actOb';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3280;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15859;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16042;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/profile';
        $this->model->title = 'profile';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16013;
        $this->model->sort = null;
        $this->model->name = '/core/read/asexport';
        $this->model->title = 'asexport';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15723;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget3';
        $this->model->title = 'widget3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15564;
        $this->model->sort = null;
        $this->model->name = '/core/grape/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15722;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget2';
        $this->model->title = 'widget2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15705;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleIlyas';
        $this->model->title = 'sampleIlyas';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15670;
        $this->model->sort = null;
        $this->model->name = '/core/product/sort';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17914;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/item';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15998;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/test2';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16059;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index_o';
        $this->model->title = 'index_o';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16070;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3330;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15682;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_U';
        $this->model->title = 'index_U';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15832;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/user-check';
        $this->model->title = 'user-check';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15967;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3321;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15863;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15668;
        $this->model->sort = null;
        $this->model->name = '/core/product/setToCart';
        $this->model->title = 'setToCart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15997;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15827;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login-o2';
        $this->model->title = 'Вход в систему';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15911;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/docs';
        $this->model->title = 'Список документов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-file';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15952;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/docs';
        $this->model->title = 'Мои документы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15440;
        $this->model->sort = null;
        $this->model->name = '/core/core/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15679;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexR';
        $this->model->title = 'indexR';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15433;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setInProsess';
        $this->model->title = 'setInProsess';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3235;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15585;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15825;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15519;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/visualdyna';
        $this->model->title = 'visualdyna';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15689;
        $this->model->sort = null;
        $this->model->name = '/core/region/getRegion';
        $this->model->title = 'getRegion';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-truck-container';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3275;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15984;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/warranty';
        $this->model->title = 'warranty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16015;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_U2';
        $this->model->title = 'index_U2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15862;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/search';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15544;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3248;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15512;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/content';
        $this->model->title = 'content';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15477;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/configs';
        $this->model->title = 'configs';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15631;
        $this->model->sort = null;
        $this->model->name = '/core/product/addVote';
        $this->model->title = 'addVote';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15435;
        $this->model->sort = null;
        $this->model->name = '/core/agent/superviserStats';
        $this->model->title = 'superviserStats';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3235;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15677;
        $this->model->sort = null;
        $this->model->name = '/core/read/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15569;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/depdropData';
        $this->model->title = 'depdropData';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15977;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/ofertaCheck-Out';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15656;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClear';
        $this->model->title = 'rangeClear';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15592;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexJahongir';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15845;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/contacts';
        $this->model->title = 'contacts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15445;
        $this->model->sort = null;
        $this->model->name = '/core/core/queue';
        $this->model->title = 'queue';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15899;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/ALL/statusScholar';
        $this->model->title = 'statusScholar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3312;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15961;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3320;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15666;
        $this->model->sort = null;
        $this->model->name = '/core/product/setOrderToAgent';
        $this->model->title = 'setOrderToAgent';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15870;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/edit_OLD';
        $this->model->title = 'edit_OLD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3308;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15549;
        $this->model->sort = null;
        $this->model->name = '/core/filter/setFilter';
        $this->model->title = 'setFilter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15701;
        $this->model->sort = null;
        $this->model->name = '/core/widget/Mirbosit';
        $this->model->title = 'Mirbosit';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15954;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/manual';
        $this->model->title = 'manual';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15557;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getOptions';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFile';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15960;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/view-report';
        $this->model->title = 'eyuf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15541;
        $this->model->sort = null;
        $this->model->name = '/core/error/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3246;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15721;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16032;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify_old';
        $this->model->title = 'verify_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15516;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaSettings';
        $this->model->title = 'dynaSettings';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15461;
        $this->model->sort = null;
        $this->model->name = '/core/crud/system';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17898;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/index2';
        $this->model->title = 'Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16046;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/form';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15866;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3306;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15826;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login-frame';
        $this->model->title = 'login-frame';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17915;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/itemMulti';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15517;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynawidget';
        $this->model->title = 'dynawidget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16069;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3330;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17941;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexX';
        $this->model->title = 'indexX';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16058;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexQ';
        $this->model->title = 'indexQ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15479;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content123';
        $this->model->title = 'content123';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15970;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/behruz_support';
        $this->model->title = 'behruz_support';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3322;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15608;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/templates';
        $this->model->title = 'templates';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15443;
        $this->model->sort = null;
        $this->model->name = '/core/core/oauth';
        $this->model->title = 'oauth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3237;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15502;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sorting';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17940;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/doc-list';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15567;
        $this->model->sort = null;
        $this->model->name = '/core/grape/templates';
        $this->model->title = 'templates';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-save';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3252;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15688;
        $this->model->sort = null;
        $this->model->name = '/core/read/1/indexAs2';
        $this->model->title = 'indexAs2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3274;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15630;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToWish';
        $this->model->title = 'addToWish';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15727;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3279;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15575;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getForm';
        $this->model->title = 'getForm';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15824;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/fast-register-frame';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17899;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/index1';
        $this->model->title = 'Users';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3308;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15962;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index2';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3320;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15678;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexAs';
        $this->model->title = 'indexAs';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15649;
        $this->model->sort = null;
        $this->model->name = '/core/product/getMarkets';
        $this->model->title = 'getMarkets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-google-pay';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15578;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getWidget';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15469;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/apply';
        $this->model->title = 'apply';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15470;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess';
        $this->model->title = 'Конструктор отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15481;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contents';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17919;
        $this->model->sort = null;
        $this->model->name = '/core/read/multiRelateItems';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15449;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16016;
        $this->model->sort = null;
        $this->model->name = '/core/read/items';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15702;
        $this->model->sort = null;
        $this->model->name = '/core/widget/option';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15957;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/statistics';
        $this->model->title = 'Статистика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15634;
        $this->model->sort = null;
        $this->model->name = '/core/product/clearFilterFromSession';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15956;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/reports';
        $this->model->title = 'Мои отчеты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15883;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/invoice-index';
        $this->model->title = 'Список Расходы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16045;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15903;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/form';
        $this->model->title = 'Создание Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16034;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/update';
        $this->model->title = 'Добавить документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15483;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentShahzod';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15464;
        $this->model->sort = null;
        $this->model->name = '/core/crud/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15547;
        $this->model->sort = null;
        $this->model->name = '/core/files/play';
        $this->model->title = 'play';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15828;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login';
        $this->model->title = 'Вход в систему';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15846;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/index';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17939;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/index-compatriot';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15901;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/create';
        $this->model->title = 'Создание Соотечественников';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15598;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav3';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15914;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-compatriot-index';
        $this->model->title = 'Список потребностей по соотечественникам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15595;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMirbosit';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15955;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/register';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16017;
        $this->model->sort = null;
        $this->model->name = '/core/read/multiItems';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15619;
        $this->model->sort = null;
        $this->model->name = '/core/menu/index';
        $this->model->title = 'Список Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17922;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/index_old';
        $this->model->title = 'Панель Администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15680;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexRav';
        $this->model->title = 'indexRav';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15669;
        $this->model->sort = null;
        $this->model->name = '/core/product/setToCartByElementId';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17896;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/doc-add';
        $this->model->title = 'Добавить документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15927;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/doc-list-accept';
        $this->model->title = 'Список Документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15920;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-create';
        $this->model->title = 'Добавление потребностей к стипендиантам по запросу';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15923;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-update';
        $this->model->title = 'Редактирование  Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15436;
        $this->model->sort = null;
        $this->model->name = '/core/asror/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3236;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15468;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/universe';
        $this->model->title = 'universe';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16014;
        $this->model->sort = null;
        $this->model->name = '/core/read/asukhrob';
        $this->model->title = 'Salam';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17942;
        $this->model->sort = null;
        $this->model->name = '/core/error/exception_old';
        $this->model->title = 'exception_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3246;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17950;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/detailsWareAccept';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15635;
        $this->model->sort = null;
        $this->model->name = '/core/product/clearViewedSession';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17971;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/doc-accept';
        $this->model->title = 'Принять';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17978;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/doc-accept';
        $this->model->title = 'Принять';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15725;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/option';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3279;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15513;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/content_old';
        $this->model->title = 'content_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15627;
        $this->model->sort = null;
        $this->model->name = '/core/pond/pond-upload';
        $this->model->title = 'pond-upload';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3271;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17954;
        $this->model->sort = null;
        $this->model->name = '/core/chat/index2';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3590;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15546;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3248;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15848;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/profile';
        $this->model->title = 'profile';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15917;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-count-create';
        $this->model->title = 'Новый потребност по количеству на запрос';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17946;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor_';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17947;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor_old';
        $this->model->title = 'Изменение данных';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17948;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor_щдч';
        $this->model->title = 'Изменение данных';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17953;
        $this->model->sort = null;
        $this->model->name = '/core/chat/index';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3590;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17979;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/doc-list-accept-report';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17951;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/processWareAccept';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17949;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/formBuild';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3240;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15579;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getWidgetPart';
        $this->model->title = 'getWidgetPart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'ajax\'];::type[\'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17945;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor-auto';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17955;
        $this->model->sort = null;
        $this->model->name = '/core/chat/indexA';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3590;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17956;
        $this->model->sort = null;
        $this->model->name = '/core/chat/indexAbl';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3590;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17957;
        $this->model->sort = null;
        $this->model->name = '/core/chat/index_J';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3590;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17958;
        $this->model->sort = null;
        $this->model->name = '/core/chat/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3590;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17960;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17961;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17962;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/create';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17963;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/indexToshkent';
        $this->model->title = 'Заказы Узбекистан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17964;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17966;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17967;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17968;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17969;
        $this->model->sort = null;
        $this->model->name = '/core/tranz/flush';
        $this->model->title = 'flush';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3593;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17970;
        $this->model->sort = null;
        $this->model->name = '/core/tranz/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3593;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15714;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormUmid';
        $this->model->title = 'sampleWidgetNormUmid';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17972;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/doc-list-accept-report';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17973;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/doc-list-accept';
        $this->model->title = 'Список Документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17974;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/doc-list';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17975;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/doc-reject';
        $this->model->title = 'doc-reject';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17976;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/index';
        $this->model->title = 'Основное окно';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17977;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/interqua/report-list';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3594;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16033;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/scholar/create';
        $this->model->title = 'Добавить документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3318;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17980;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/doc-list-accept';
        $this->model->title = 'Список Документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15913;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-compatriot-create';
        $this->model->title = 'Добавление потребностей к соотечественникам по запросу';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15611;
        $this->model->sort = null;
        $this->model->name = '/core/lists/infinity-all';
        $this->model->title = 'infinity-all';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3255;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16071;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3330;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15574;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBranch';
        $this->model->title = 'getBranch';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15580;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesCards';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3253;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15926;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/monitor/doc-accept';
        $this->model->title = 'Принять';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3316;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15694;
        $this->model->sort = null;
        $this->model->name = '/core/widget/accordion';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3278;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15847;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/main';
        $this->model->title = 'Статистика в формате стран по программам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3303;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15673;
        $this->model->sort = null;
        $this->model->name = '/core/read/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15685;
        $this->model->sort = null;
        $this->model->name = '/core/read/tabular';
        $this->model->title = 'Изменить все - Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15996;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/search';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3325;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15905;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/setting';
        $this->model->title = 'Форма соотечественников';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15906;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/compatriot/update';
        $this->model->title = 'Редактирование  Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3313;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16023;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/password_res';
        $this->model->title = 'Восстановление пароля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3334;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16040;
        $this->model->sort = null;
        $this->model->name = '/eyuf/admin/main/index';
        $this->model->title = 'Окно администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3336;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15618;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editorRav';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3256;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15641;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCartOrders';
        $this->model->title = 'getCartOrders';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15647;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany_abl';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15653;
        $this->model->sort = null;
        $this->model->name = '/core/product/infinity';
        $this->model->title = 'infinity';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15655;
        $this->model->sort = null;
        $this->model->name = '/core/product/modalContent';
        $this->model->title = 'modalContent';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 16031;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register_old';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3300;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17981;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/doc-list';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17982;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/doc-reject';
        $this->model->title = 'doc-reject';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17983;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/index';
        $this->model->title = 'Основное окно';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17984;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/masdoc/report-list';
        $this->model->title = 'Список отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3595;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15916;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/moderator/need-compatriot-view';
        $this->model->title = 'Просмотр  Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3315;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15881;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/accounter/index-full';
        $this->model->title = 'Таблица с расходом';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3310;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15939;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/needer/need-compatriot-index';
        $this->model->title = 'Список потребности к соотечественникам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-dashboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3317;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15474;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_item';
        $this->model->title = 'chess_item';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17917;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/details';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15492;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter_';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15504;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sortingOld';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17985;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create_2';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17986;
        $this->model->sort = null;
        $this->model->name = '/core/crud/import';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17987;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexzoir';
        $this->model->title = 'indexzoir';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17959;
        $this->model->sort = null;
        $this->model->name = '/core/error/templates/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-save';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3591;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17965;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3592;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 15886;
        $this->model->sort = null;
        $this->model->name = '/eyuf/logics/admin/index';
        $this->model->title = 'Админ панель';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3311;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17988;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/main';
        $this->model->title = 'Создание Пользователь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3597;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17989;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/login-register';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17990;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/login';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17991;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/loginCRM';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17992;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/loginPage';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17993;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/loginPageFozil';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17994;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/logout';
        $this->model->title = 'Logout';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17995;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/registerCRM';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3598;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17996;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify/need-verify-email';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3599;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17997;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify/verify-email';
        $this->model->title = 'verify-email';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3599;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17998;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify/verify-phone';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3599;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 17999;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-profile/profile-settings';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3600;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 18000;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-profile/profile-settings_Old';
        $this->model->title = 'Создание Пользователь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 3600;
        $this->save();


    }

}
