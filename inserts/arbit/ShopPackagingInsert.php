<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopPackaging;

class ShopPackagingInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopPackaging();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Гофра 24';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopPackaging();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Гофра 55';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopPackaging();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Гофра 42';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopPackaging();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Гофра 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


    }

}
