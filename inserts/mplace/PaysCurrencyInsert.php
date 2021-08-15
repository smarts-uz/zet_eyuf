<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysCurrency;

class PaysCurrencyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysCurrency();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cbu = [
            'chf' => '15',
            'gbp' => '15',
            'jpy' => '15',
            'kzt' => '15',
            'rub' => '15',
            'usd' => '15',
            'euro' => '15',
        ];
        $this->model->cbu_sell = "";
        $this->model->bank = [
            'chf' => '20',
            'gbp' => '20',
            'jpy' => '20',
            'kzt' => '20',
            'rub' => '20',
            'usd' => '20',
            'euro' => '20',
        ];
        $this->model->bank_sell = "";
        $this->save();


    }

}
