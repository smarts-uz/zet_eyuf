<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceAdressThree;

class PlaceAdressThreeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdressThree();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '',
        ];
        $this->model->home = [
            [
                'text' => 'adaad',
                'is_combination' => '1',
                'shop_option_type_id' => '331',
                'shop_option_branch_id' => '9',
            ],
            [
                'text' => 'asdf',
                'is_combination' => '0',
                'shop_option_type_id' => '69',
                'shop_option_branch_id' => '18',
            ],
        ];
        $this->model->place_region_id = null;
        $this->model->street = 'safssdafsadfasdfsafsaf';
        $this->model->orientation = 'sadfsdafsdafasf';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdressThree();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан | asdfda';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->home = [
            [
                'shop_option_branch_id' => '6',
            ],
        ];
        $this->model->place_region_id = 217;
        $this->model->street = 'asdfda';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'sadf';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdressThree();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->home = [
            [
                'text' => 'sadf',
                'is_combination' => '1',
                'shop_option_type_id' => '4',
                'shop_option_branch_id' => '5',
            ],
        ];
        $this->model->place_region_id = 361;
        $this->model->street = '';
        $this->model->orientation = 'asdf';
        $this->model->postal_code = 'gds';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


    }

}
