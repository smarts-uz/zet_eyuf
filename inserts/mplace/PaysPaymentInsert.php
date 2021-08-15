<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysPayment;

class PaysPaymentInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysPayment();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_id = 130;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyForm';
        $this->model->value = "";
        $this->model->confirm = 1;
        $this->save();


    }

}
