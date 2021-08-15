<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceAdressTwo;

class PlaceAdressTwoInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdressTwo();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан | фываы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '216',
        ];
        $this->model->home = [
            'text' => 'asdfasdsadsafdsaffsadf',
            'is_combination' => '1',
            'shop_option_type_id' => '12',
            'shop_option_branch_id' => '4',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = 'фываы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdressTwo();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | safdsafsa';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->home = [
            'text' => 'safsda',
            'is_combination' => '1',
            'shop_option_type_id' => '2',
            'shop_option_branch_id' => '4',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'safdsafsa';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdressTwo();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->home = [
            'text' => 'afs',
            'is_combination' => '1',
            'shop_option_type_id' => '339',
            'shop_option_branch_id' => '6',
        ];
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


    }

}
