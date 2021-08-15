<?php

namespace zetsoft\inserts\market;

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
        $this->model->user_id = 366;
        $this->model->form = 'zetsoft\\former\\pays\\PaysYandexMoneyForm';
        $this->model->value = "";
        $this->model->confirm = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
