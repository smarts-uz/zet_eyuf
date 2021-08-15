<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceAdressTwo;

class PlaceAdressTwoInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdressTwo();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->home = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


    }

}
