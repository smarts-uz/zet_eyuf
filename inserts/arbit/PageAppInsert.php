<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageApp;

class PageAppInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageApp();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'able';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '';
        $this->model->keyword = '';
        $this->model->created = null;
        $this->model->homeurl = '';
        $this->model->domain = 'ables.com';
        $this->model->page_theme_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new PageApp();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'dilshod';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '';
        $this->model->keyword = '';
        $this->model->created = null;
        $this->model->homeurl = '';
        $this->model->domain = '';
        $this->model->page_theme_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new PageApp();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'arpit';
        $this->model->title = 'СПА систем';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'СПА систем';
        $this->model->keyword = 'спа';
        $this->model->created = 1;
        $this->model->homeurl = '';
        $this->model->domain = '';
        $this->model->page_theme_id = 2;
        $this->model->user_id = 140;
        $this->save();


    }

}
