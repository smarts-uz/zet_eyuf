<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceAdress;

class PlaceAdressInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdress();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.41514848009119',
                'lng' => '69.20231887817383',
                'address' => 'R - 4, Uzbekistan',
                'place_id' => 'ChIJVfWx8ASSrjgRLOW0NQYh0mY',
                'user_entered_address' => 'erg',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'jhhj';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.32465770158453',
                'lng' => '69.30872018403569',
                'address' => '15/16 Korabulok Ko',
                'place_id' => 'ChIJdQAKaML0rjgRiAWfag9l7r8',
                'user_entered_address' => 'home',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'wwww_213';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Toshkent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 25;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'saf';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'San Fernando International Airport, Сан-Фернандо, Буэнос-Айрес, Аргентина';
        $this->model->location = [
            [
                'lat' => '41.31347386492398',
                'lng' => '69.2527534368974',
                'address' => '1 A Botir Zokirov ko',
                'place_id' => 'ChIJ-wfQLxCLrjgRyK5AFoiBbpQ',
                'user_entered_address' => 'Buxoro kafe',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'wwww_214';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '12145';
        $this->model->home = '564';
        $this->model->orientation = 'fdsdfdsf';
        $this->model->postal_code = '545645454';
        $this->model->place = 'Toshkent teleminorasi, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Buxoro';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = 17;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'Fergana, Узбекистан';
        $this->model->location = [
            [
                'lat' => '41.344490857597755',
                'lng' => '69.22669479370117',
                'address' => 'Фарфоровый завод, Тошкент, Узбекистан',
                'place_id' => 'ChIJ45U-63qMrjgRpp_SdZrjYrw',
                'user_entered_address' => '1313',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'Navoiy shoh ko\'chasi, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 2;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'rerrdteewr';
        $this->model->home = 'try';
        $this->model->orientation = 'ty';
        $this->model->postal_code = '54335';
        $this->model->place = 'cvhj';
        $this->model->location = [
            [
                'lat' => '41.41514848009119',
                'lng' => '69.20231887817383',
                'address' => 'R - 4, Uzbekistan',
                'place_id' => 'ChIJVfWx8ASSrjgRLOW0NQYh0mY',
                'user_entered_address' => 'erg',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'test07';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 682;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'test';
        $this->model->home = 'test';
        $this->model->orientation = '';
        $this->model->postal_code = '130100';
        $this->model->place = 'Buxoro ko\'chasi, Tashkent, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '41.311500820961896',
                'lng' => '69.27553653717041',
                'address' => '9 Matbuotchilar ko',
                'place_id' => 'ChIJa0TS-SWLrjgRpvF8VxhUuOI',
                'user_entered_address' => 'buxoRo',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 2;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Y';
        $this->model->home = 'test';
        $this->model->orientation = 'test';
        $this->model->postal_code = '130100';
        $this->model->place = 'Queens, Taras Shevchenko Street, Tashkent, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '41.313094170281595',
                'lng' => '68.92851898193359',
                'address' => 'Unnamed Road, Koshkarata, Kazakhstan',
                'place_id' => 'ChIJ91_kvWCCrjgR_LLWLO1isCc',
                'user_entered_address' => 'test 1111',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '40.53823184319133',
                'lng' => '64.04788965722652',
                'address' => 'Shafirkan District, Uzbekistan',
                'place_id' => 'ChIJDSvxbFwRWj8RZDZniSmIdD8',
                'user_entered_address' => 'Shofirkon',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
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
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.3322175449006',
                'lng' => '69.28125436372319',
                'address' => '77 Kichik Xalqa Yo',
                'place_id' => 'ChIJfaD_m06LrjgRv5uosdD-P0I',
                'user_entered_address' => 'home1',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = [
            [
                'lat' => '41.32465770158453',
                'lng' => '69.30872018403569',
                'address' => '15/16 Korabulok Ko',
                'place_id' => 'ChIJdQAKaML0rjgRiAWfag9l7r8',
                'user_entered_address' => 'home',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = [
            [
                'lat' => '39.76822121464338',
                'lng' => '64.45423118378642',
                'address' => 'Bakhowuddin Nakshbandi St, Bukhara, Узбекистан',
                'place_id' => 'ChIJ55xluuoFUD8RAhhKPhJtMSk',
                'user_entered_address' => 'Buxoro',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = [
            [
                'lat' => '41.26470868348893',
                'lng' => '69.12850448608398',
                'address' => 'Unnamed Road, Uzbekistan',
                'place_id' => 'ChIJgS87lkaIrjgRMLxrd1DBTO0',
                'user_entered_address' => 'home',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = 36;
        $this->model->street = 'Mustaqillikm ko\'chasi';
        $this->model->home = '25, 3, 24';
        $this->model->orientation = 'Navoiy bog\'i';
        $this->model->postal_code = '285674';
        $this->model->place = 'Shofirkon tumani, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '40.53823184319133',
                'lng' => '64.04788965722652',
                'address' => 'Shafirkan District, Uzbekistan',
                'place_id' => 'ChIJDSvxbFwRWj8RZDZniSmIdD8',
                'user_entered_address' => 'Shofirkon',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'maniki';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = 4;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'wwww';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'fsdfsdf';
        $this->model->home = 'fdsf';
        $this->model->orientation = 'fsdfsd';
        $this->model->postal_code = '210012';
        $this->model->place = 'London, ON, Canada';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = 33;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.31347386492398',
                'lng' => '69.2527534368974',
                'address' => '1 A Botir Zokirov ko',
                'place_id' => 'ChIJ-wfQLxCLrjgRyK5AFoiBbpQ',
                'user_entered_address' => 'Buxoro kafe',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'ofis';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '21313';
        $this->model->home = '123123';
        $this->model->orientation = 'asda';
        $this->model->postal_code = '213123';
        $this->model->place = 'Mirzo Ulug\'bek nomli bog\'i, Khamidulla Oripov Street, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


    }

}
