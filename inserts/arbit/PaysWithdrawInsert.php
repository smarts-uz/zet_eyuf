<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysWithdraw;

class PaysWithdrawInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysWithdraw();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 350;
        $this->model->pays_payment_id = 15;
        $this->model->amount = '1000';
        $this->model->status = 'ok';
        $this->model->confirm = null;
        $this->model->transaction = '';
        $this->save();


        $this->model = new PaysWithdraw();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 350;
        $this->model->pays_payment_id = 15;
        $this->model->amount = '1000';
        $this->model->status = 'ok';
        $this->model->confirm = null;
        $this->model->transaction = '';
        $this->save();


        $this->model = new PaysWithdraw();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 350;
        $this->model->pays_payment_id = 15;
        $this->model->amount = '10';
        $this->model->status = 'ok';
        $this->model->confirm = null;
        $this->model->transaction = '';
        $this->save();


        $this->model = new PaysWithdraw();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 341;
        $this->model->pays_payment_id = 14;
        $this->model->amount = '100';
        $this->model->status = 'no';
        $this->model->confirm = null;
        $this->model->transaction = '';
        $this->save();


        $this->model = new PaysWithdraw();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 346;
        $this->model->pays_payment_id = 12;
        $this->model->amount = '10';
        $this->model->status = 'ok';
        $this->model->confirm = null;
        $this->model->transaction = '';
        $this->save();


        $this->model = new PaysWithdraw();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 350;
        $this->model->pays_payment_id = 15;
        $this->model->amount = '10';
        $this->model->status = 'hold';
        $this->model->confirm = null;
        $this->model->transaction = '';
        $this->save();


    }

}
