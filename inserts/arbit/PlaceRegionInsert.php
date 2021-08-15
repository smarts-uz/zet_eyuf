<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceRegion;

class PlaceRegionInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceRegion();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = '/Узбекистан';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 4;
        $this->model->delivery_price = 0;
        $this->model->ware_id = 7;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Бухара/Узбекистан';
        $this->model->title = 'Бухара';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = 23;
        $this->model->ware_id = 5;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан';
        $this->model->title = 'Андижан';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = 0;
        $this->model->ware_id = 4;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Ромитан/Бухара/Узбекистан';
        $this->model->title = 'Ромитан';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 35;
        $this->model->delivery_price = 0;
        $this->model->ware_id = 5;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Шафиркан/Бухара/Узбекистан';
        $this->model->title = 'Шафиркан';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 35;
        $this->model->delivery_price = 0;
        $this->model->ware_id = 5;
        $this->save();


    }

}
