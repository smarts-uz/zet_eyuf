<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysPayment;

class PaysPaymentInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysPayment();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'my web money WMR';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 348;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMRForm';
        $this->model->value = [
            'WMR' => '1243124235325',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'my wmr';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 341;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMRForm';
        $this->model->value = [
            'WMR' => '1243124235325',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'my webmoney wmr';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 350;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMRForm';
        $this->model->value = [
            'WMR' => '446464646',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'ada';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 358;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMZForm';
        $this->model->value = [
            'WMZ' => 'Z1212121212121212',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 360;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMRForm';
        $this->model->value = [
            'WMR' => '1243124235325',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 360;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMZForm';
        $this->model->value = [
            'WMZ' => '26346286498623864',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 358;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMZForm';
        $this->model->value = [
            'WMZ' => 'Z1212121212121212',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'my webMoney Wmz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 350;
        $this->model->form = 'zetsoft\\former\\pays\\PaysWebMoneyWMRForm';
        $this->model->value = [
            'WMR' => '1243124235325',
        ];
        $this->model->confirm = null;
        $this->save();


        $this->model = new PaysPayment();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_id = 350;
        $this->model->form = 'zetsoft\\former\\pays\\PaysYandexMoneyForm';
        $this->model->value = [
            'wallet' => '12321424523532',
        ];
        $this->model->confirm = null;
        $this->save();


    }

}
