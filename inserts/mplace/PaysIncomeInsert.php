<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysIncome;

class PaysIncomeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysIncome();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'tests';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_id = null;
        $this->model->pays_payment_id = null;
        $this->model->amount = '300000';
        $this->model->transaction = '';
        $this->save();


    }

}
