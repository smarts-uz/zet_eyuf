<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceAdressZoir2;

class PlaceAdressZoir2Insert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdressZoir2();

        $this->model->id = 1;
        $this->model->place_country_id = 122;
        $this->model->place_region_id = null;
        $this->model->street = 'fwesa';
        $this->model->home = '123';
        $this->model->orientation = 'asf';
        $this->model->postal_code = 0;
        $this->model->place = 'узбекистански ресторантите рядом с Yunusobod-19, Ташкент, Узбекистан';
        $this->model->location = [
            [
                'lat' => '41.3768820335655',
                'lng' => '69.3089890986267',
                'address' => 'Dehkonobod 2-tor ko',
                'place_id' => 'ChIJp5q_pz3zrjgRlCilY6iSMQ4',
                'user_entered_address' => 'HOME',
            ],
        ];
        $this->model->created_at = '2020-06-24 13:11:23';
        $this->model->modified_at = '2020-06-24 13:11:23';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
