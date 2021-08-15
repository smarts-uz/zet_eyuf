<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Гофра 24';
        $this->model->created_at = '2020-08-16 09:45:35';
        $this->model->modified_at = '2020-08-16 09:45:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopPackaging();

        $this->model->id = 3;
        $this->model->name = 'Гофра 55';
        $this->model->created_at = '2020-08-16 09:46:24';
        $this->model->modified_at = '2020-08-16 09:46:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopPackaging();

        $this->model->id = 4;
        $this->model->name = 'Гофра 42';
        $this->model->created_at = '2020-08-16 09:46:55';
        $this->model->modified_at = '2020-08-16 09:46:55';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopPackaging();

        $this->model->id = 5;
        $this->model->name = 'Гофра 11';
        $this->model->created_at = '2020-08-16 09:47:26';
        $this->model->modified_at = '2020-08-16 09:47:26';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
