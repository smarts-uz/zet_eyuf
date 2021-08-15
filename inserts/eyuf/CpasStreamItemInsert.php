<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasStreamItem;

class CpasStreamItemInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasStreamItem();

        $this->model->id = 2;
        $this->model->name = 'ыфва';
        $this->model->cpas_land_id = '';
        $this->model->cpas_stream_id = '';
        $this->model->user_id = '';
        $this->model->title = '';
        $this->model->link = '';
        $this->model->track = '';
        $this->model->teaser = null;
        $this->model->click = null;
        $this->model->lead = null;
        $this->model->accept = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->model->created_at = '2020-09-07 11:36:46';
        $this->model->modified_at = '2020-09-07 11:36:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 1;
        $this->model->name = 'ыафвывфа';
        $this->model->cpas_land_id = '';
        $this->model->cpas_stream_id = '';
        $this->model->user_id = '';
        $this->model->title = '';
        $this->model->link = '';
        $this->model->track = '';
        $this->model->teaser = null;
        $this->model->click = null;
        $this->model->lead = null;
        $this->model->accept = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->model->created_at = '2020-09-07 11:36:03';
        $this->model->modified_at = '2020-09-07 11:37:07';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->cpas_land_id = '';
        $this->model->cpas_stream_id = '';
        $this->model->user_id = '';
        $this->model->title = '222';
        $this->model->link = '';
        $this->model->track = '';
        $this->model->teaser = "";
        $this->model->click = null;
        $this->model->lead = null;
        $this->model->accept = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->model->created_at = '2020-09-09 09:58:01';
        $this->model->modified_at = '2020-09-09 09:58:01';
        $this->model->created_by = 76;
        $this->model->modified_by = 76;
        $this->save();


    }

}
