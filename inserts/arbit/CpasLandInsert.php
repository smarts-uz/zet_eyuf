<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasLand;

class CpasLandInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasLand();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Узбекистан_landing_test';
        $this->model->title = 'landing_test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_item_id = 46;
        $this->model->place_country_id = 229;
        $this->model->type = 'land';
        $this->model->status = 'new';
        $this->model->adaptive = 1;
        $this->model->path = '/render/cpanet/Fatality/UZ/landing_test/';
        $this->model->archive = [
            'land.zip',
        ];
        $this->model->screen = [
            'offer.jpg',
        ];
        $this->model->visit = null;
        $this->model->order = '';
        $this->model->cr = null;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Узбекистан_prelend_test';
        $this->model->title = 'prelend_test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_item_id = 46;
        $this->model->place_country_id = 229;
        $this->model->type = 'trans';
        $this->model->status = 'new';
        $this->model->adaptive = 1;
        $this->model->path = '/render/cpanet/Fatality/UZ-pre/prelend_test/';
        $this->model->archive = [
            'preland.zip',
        ];
        $this->model->screen = [
            'offer.jpg',
        ];
        $this->model->visit = null;
        $this->model->order = '';
        $this->model->cr = null;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Узбекистан_with_form';
        $this->model->title = 'with_form';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_item_id = 46;
        $this->model->place_country_id = 229;
        $this->model->type = 'trans_form';
        $this->model->status = 'new';
        $this->model->adaptive = 1;
        $this->model->path = '/render/cpanet/Fatality/UZ-form/with_form/';
        $this->model->archive = [
            'preland with form.zip',
        ];
        $this->model->screen = [
            'offer.jpg',
        ];
        $this->model->visit = null;
        $this->model->order = '';
        $this->model->cr = null;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Узбекистан_newIdealSim';
        $this->model->title = 'newIdealSim';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_item_id = 47;
        $this->model->place_country_id = 229;
        $this->model->type = 'land';
        $this->model->status = 'new';
        $this->model->adaptive = 1;
        $this->model->path = '/render/cpanet/test/UZ/newIdealSim/';
        $this->model->archive = [
            'fa.zip',
        ];
        $this->model->screen = [
            'offer.jpg',
        ];
        $this->model->visit = null;
        $this->model->order = '';
        $this->model->cr = null;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Узбекистан_Fatality';
        $this->model->title = 'Fatality';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_item_id = 45;
        $this->model->place_country_id = 229;
        $this->model->type = 'land';
        $this->model->status = 'top';
        $this->model->adaptive = null;
        $this->model->path = '/render/cpanet/Fatality/UZ/Fatality/';
        $this->model->archive = [
            'Fatality.rar',
        ];
        $this->model->screen = [
            'Screenshot_12.png',
        ];
        $this->model->visit = null;
        $this->model->order = '';
        $this->model->cr = null;
        $this->save();


    }

}
