<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageTheme;

class PageThemeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageTheme();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'createSite';
        $this->model->title = 'Создание Сайт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->desc = '';
        $this->model->check = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->path = '/eshop-uz/createSite';
        $this->model->tags = "";
        $this->model->data = "";
        $this->model->image = "";
        $this->model->author = null;
        $this->model->page_theme_type_id = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageTheme();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'createOffer';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->desc = '';
        $this->model->check = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->path = '/eshop-uz/createOffer';
        $this->model->tags = "";
        $this->model->data = "";
        $this->model->image = "";
        $this->model->author = null;
        $this->model->page_theme_type_id = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageTheme();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'createItem';
        $this->model->title = 'Создание Item';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->desc = '';
        $this->model->check = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->path = '/eshop-uz/createItem';
        $this->model->tags = "";
        $this->model->data = "";
        $this->model->image = "";
        $this->model->author = null;
        $this->model->page_theme_type_id = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageTheme();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'createFlow';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->desc = '';
        $this->model->check = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->path = '/eshop-uz/createFlow';
        $this->model->tags = "";
        $this->model->data = "";
        $this->model->image = "";
        $this->model->author = null;
        $this->model->page_theme_type_id = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageTheme();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'card';
        $this->model->title = 'card';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->desc = '';
        $this->model->check = 1;
        $this->model->icon = 'fa fa-calendar-plus-o';
        $this->model->path = '/eshop-uz/card';
        $this->model->tags = "";
        $this->model->data = "";
        $this->model->image = "";
        $this->model->author = null;
        $this->model->page_theme_type_id = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageTheme();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'accept';
        $this->model->title = 'Создание Сайт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->desc = '';
        $this->model->check = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->path = '/eshop-uz/accept';
        $this->model->tags = "";
        $this->model->data = "";
        $this->model->image = "";
        $this->model->author = null;
        $this->model->page_theme_type_id = 1;
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
