<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaMulti;

class DynaMultiInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaMulti();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 16';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dyna_config_id = 165;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->group = 'and';
        $this->model->models = 'ShopOrder';
        $this->model->operator = 'between';
        $this->model->val = [
            'value1' => '2020-08-01',
            'value2' => '2020-08-07',
        ];
        $this->save();


        $this->model = new DynaMulti();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 17';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dyna_config_id = 254;
        $this->model->dynaId = 'PlaceCountry-/crud/place-country/index';
        $this->model->group = 'and';
        $this->model->models = 'PlaceCountry';
        $this->model->operator = '=';
        $this->model->val = [
            'value' => '',
        ];
        $this->save();


        $this->model = new DynaMulti();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 18';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dyna_config_id = 255;
        $this->model->dynaId = 'PlaceCountry-/crud/place-country/index';
        $this->model->group = 'and';
        $this->model->models = 'PlaceCountry';
        $this->model->operator = '=';
        $this->model->val = [
            'value' => '2020-08-07',
        ];
        $this->save();


        $this->model = new DynaMulti();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dyna_config_id = 256;
        $this->model->dynaId = 'PlaceCountry-/crud/place-country/index';
        $this->model->group = 'and';
        $this->model->models = 'PlaceCountry';
        $this->model->operator = '=';
        $this->model->val = [
            'value' => '2020-08-14',
        ];
        $this->save();


        $this->model = new DynaMulti();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 20';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dyna_config_id = 258;
        $this->model->dynaId = 'PlaceCountry-/crud/place-country/index';
        $this->model->group = 'and';
        $this->model->models = 'PlaceCountry';
        $this->model->operator = 'between';
        $this->model->val = [
            'value1' => '2020-08-14',
            'value2' => '2020-08-14',
        ];
        $this->save();


        $this->model = new DynaMulti();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->dyna_config_id = 259;
        $this->model->dynaId = 'PlaceCountry-/crud/place-country/index';
        $this->model->group = 'and';
        $this->model->models = 'PlaceCountry';
        $this->model->operator = '=';
        $this->model->val = [
            'value' => '2020-08-14',
        ];
        $this->save();


    }

}
