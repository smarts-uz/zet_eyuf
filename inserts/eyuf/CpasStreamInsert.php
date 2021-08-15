<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'муц';
        $this->model->cpas_offer_id = 1;
        $this->model->user_id = 1;
        $this->model->title = 'verve';
        $this->model->counter = "";
        $this->model->widget = "";
        $this->model->postback = null;
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
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
