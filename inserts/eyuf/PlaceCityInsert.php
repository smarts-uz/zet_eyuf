<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceCity;

class PlaceCityInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceCity();

        $this->model->id = 11;
        $this->model->name = '';
        $this->model->place_region_id = null;
        $this->model->parent_id = null;
        $this->model->ware_id = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
