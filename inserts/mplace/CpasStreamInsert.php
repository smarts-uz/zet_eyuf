<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasStream;

class CpasStreamInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasStream();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'verves';
        $this->model->title = 'verves';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 1;
        $this->model->user_id = 1;
        $this->model->counter = "";
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '1',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => 'cewcecewv',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


    }

}
