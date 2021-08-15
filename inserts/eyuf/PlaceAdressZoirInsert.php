<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\PlaceAdressZoir;

class PlaceAdressZoirInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdressZoir();

        $this->model->id = 1;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = 'SAFC Office, Sector 1, Chopasni Housing Board, Джодхпур, Раджастан, Индия';
        $this->model->location = '';
        $this->model->created_at = '2020-06-20 18:48:18';
        $this->model->modified_at = '2020-06-20 18:48:18';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new PlaceAdressZoir();

        $this->model->id = 2;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = 'Sadfeh, Семнан, Иран';
        $this->model->location = '';
        $this->model->created_at = '2020-06-21 10:30:13';
        $this->model->modified_at = '2020-06-21 10:30:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
