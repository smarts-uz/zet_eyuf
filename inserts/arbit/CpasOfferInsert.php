<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasOffer;

class CpasOfferInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasOffer();

        $this->model->id = 19;
        $this->model->name = 'Fatality - 2020-10-01 15:55:58';
        $this->model->title = 'Fatality';
        $this->model->desc = 'Средство для похудения';
        $this->model->company = 'USA';
        $this->model->text = 'Средство для похудения';
        $this->model->substance = 'Таблетки';
        $this->model->catalog = 12352;
        $this->model->source = 247;
        $this->model->composition = 'Fatality';
        $this->model->deliver = [
            '229',
        ];
        $this->model->photo = [
            'fatality.png',
        ];
        $this->model->photos = [
            'fatality.png',
        ];
        $this->model->promo = [
            'fatality.png',
        ];
        $this->model->call_center = [
            '229',
        ];
        $this->model->cpas_company_id = 2;
        $this->model->recommended_trafic = [
            '1',
            '3',
            '5',
            '6',
        ];
        $this->model->not_recommended_traffic = "";
        $this->model->work_time_start = '';
        $this->model->work_time_end = '09:00:00 AM';
        $this->model->api = null;
        $this->model->audience = '';
        $this->model->limit = null;
        $this->model->status = 'new';
        $this->save();


    }

}
