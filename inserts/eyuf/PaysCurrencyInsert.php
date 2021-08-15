<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysCurrency;

class PaysCurrencyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysCurrency();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Test_2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cbu = [
            'chf' => '13',
            'gbp' => '13',
            'jpy' => '13',
            'kzt' => '13',
            'rub' => '1313',
            'sum' => '1313',
            'usd' => '1313133133',
            'euro' => '1313',
        ];
        $this->model->cbu_sell = [
            'chf' => '13',
            'gbp' => '13',
            'jpy' => '13',
            'kzt' => '1313',
            'rub' => '113',
            'usd' => '13',
            'euro' => '13',
        ];
        $this->model->bank = [
            'chf' => '13',
            'gbp' => '13',
            'jpy' => '13',
            'kzt' => '131313',
            'rub' => '13',
            'sum' => '1313',
            'usd' => '1313',
            'euro' => '13',
        ];
        $this->model->bank_sell = [
            'chf' => '13',
            'gbp' => '13',
            'jpy' => '13',
            'kzt' => '13',
            'rub' => '1313',
            'usd' => '1313',
            'euro' => '13',
        ];
        $this->save();


    }

}
