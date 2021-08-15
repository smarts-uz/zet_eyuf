<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestZPlaceAdressZoir2;

class TestZPlaceAdressZoir2Insert extends ZInsert
{

    public function run()
    {

        $this->model = new TestZPlaceAdressZoir2();

        $this->model->id = 1;
        $this->model->name = 'qwe';
        $this->model->place_country_id = 59;
        $this->model->place_region_id = null;
        $this->model->street = 'qwe';
        $this->model->home = 'qwe';
        $this->model->orientation = 'qwe';
        $this->model->postal_code = 1233421;
        $this->model->place = 'ASDFish, RT.01/RW.17, Bening, Merdikorejo, Sleman Regency, Special Region of Yogyakarta, Indonesia';
        $this->model->location = [
            [
                'lat' => '-7.591956800064507',
                'lng' => '110.18399633768004',
                'address' => 'tidaran,kembanglimus, Bumenjelapan, Kembanglimus, Kec. Borobudur, Magelang, Jawa Tengah 56553, Индонезия',
                'place_id' => 'ChIJS8_iTqyNei4R5_lCPTQgzXI',
                'user_entered_address' => 'homr',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestZPlaceAdressZoir2();

        $this->model->id = 2;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = 'Yukon, Канада';
        $this->model->location = [
            [
                'lat' => '62.726749666894776',
                'lng' => '-112.01076895000004',
                'address' => 'Форт Смит, Юнорганизед, Северо-западные территории X0E, Канада',
                'place_id' => 'ChIJ8W5LMpX-e1ER4qTMIGVvPMA',
                'user_entered_address' => 'asd',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
