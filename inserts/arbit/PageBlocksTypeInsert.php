<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageBlocksType;

class PageBlocksTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageBlocksType();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'assets';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'counts';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'footer';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'header';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'market';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'menu';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'metas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'navbar';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'register';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'SingleProduct';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


        $this->model = new PageBlocksType();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'userapp';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->check = 1;
        $this->save();


    }

}
