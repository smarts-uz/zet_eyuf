<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestMapGoogleZoir;

class TestMapGoogleZoirInsert extends ZInsert
{

    public function run()
    {

        $this->model = new TestMapGoogleZoir();

        $this->model->id = 2;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.26470868348893',
                'lng' => '69.12850448608398',
                'address' => 'Unnamed Road, Uzbekistan',
                'place_id' => 'ChIJgS87lkaIrjgRMLxrd1DBTO0',
                'user_entered_address' => 'home',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestMapGoogleZoir();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '39.76822121464338',
                'lng' => '64.45423118378642',
                'address' => 'Bakhowuddin Nakshbandi St, Bukhara, Узбекистан',
                'place_id' => 'ChIJ55xluuoFUD8RAhhKPhJtMSk',
                'user_entered_address' => 'Buxoro',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestMapGoogleZoir();

        $this->model->id = 4;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = 'Yunusabad District, Tashkent, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '41.32465770158453',
                'lng' => '69.30872018403569',
                'address' => '15/16 Korabulok Ko',
                'place_id' => 'ChIJdQAKaML0rjgRiAWfag9l7r8',
                'user_entered_address' => 'home',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestMapGoogleZoir();

        $this->model->id = 6;
        $this->model->name = 'test';
        $this->model->place_country_id = 12;
        $this->model->place_region_id = null;
        $this->model->street = 'test';
        $this->model->home = 'test';
        $this->model->orientation = 'test';
        $this->model->postal_code = 0;
        $this->model->place = 'Yunusobod Universam, Tashkent, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '41.3322175449006',
                'lng' => '69.28125436372319',
                'address' => '77 Kichik Xalqa Yo',
                'place_id' => 'ChIJfaD_m06LrjgRv5uosdD-P0I',
                'user_entered_address' => 'home1',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestMapGoogleZoir();

        $this->model->id = 5;
        $this->model->name = '';
        $this->model->place_country_id = null;
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = null;
        $this->model->place = 'Uzbekistan GTL Plant, Guzar Street, Yunusabad District, Tashkent, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '39.76822121464338',
                'lng' => '64.45423118378642',
                'address' => 'Bakhowuddin Nakshbandi St, Bukhara, Узбекистан',
                'place_id' => 'ChIJ55xluuoFUD8RAhhKPhJtMSk',
                'user_entered_address' => 'Buxoro',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
