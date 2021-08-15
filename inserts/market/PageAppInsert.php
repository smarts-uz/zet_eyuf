<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageApp;

class PageAppInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageApp();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '';
        $this->model->keyword = '';
        $this->model->created = null;
        $this->model->homeurl = '';
        $this->model->domain = '';
        $this->model->page_theme_id = null;
        $this->model->user_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageApp();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'arpit';
        $this->model->title = 'СПА систем';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = 'СПА систем';
        $this->model->keyword = 'спа';
        $this->model->created = 1;
        $this->model->homeurl = '';
        $this->model->domain = '';
        $this->model->page_theme_id = 2;
        $this->model->user_id = 140;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageApp();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'dilshod';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '';
        $this->model->keyword = '';
        $this->model->created = null;
        $this->model->homeurl = '';
        $this->model->domain = '';
        $this->model->page_theme_id = null;
        $this->model->user_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageApp();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'able';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '';
        $this->model->keyword = '';
        $this->model->created = null;
        $this->model->homeurl = '';
        $this->model->domain = 'ables.com';
        $this->model->page_theme_id = null;
        $this->model->user_id = null;
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
