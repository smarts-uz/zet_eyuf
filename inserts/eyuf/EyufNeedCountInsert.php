<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufNeedCount;

class EyufNeedCountInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufNeedCount();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->eyuf_request_id = 76;
        $this->model->program = "";
        $this->model->specialty = '';
        $this->model->count = null;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->eyuf_request_id = 99;
        $this->model->program = "";
        $this->model->specialty = 'ASASD';
        $this->model->count = 22;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->eyuf_request_id = 76;
        $this->model->program = "";
        $this->model->specialty = '1313';
        $this->model->count = 1331;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 0;
        $this->model->eyuf_request_id = 76;
        $this->model->program = "";
        $this->model->specialty = '';
        $this->model->count = null;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->eyuf_request_id = null;
        $this->model->program = "";
        $this->model->specialty = '';
        $this->model->count = null;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->eyuf_request_id = 76;
        $this->model->program = "";
        $this->model->specialty = 'programmer';
        $this->model->count = 11;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->eyuf_request_id = 121;
        $this->model->program = "";
        $this->model->specialty = 'Халқаро ҳуқуқ';
        $this->model->count = 13313;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->eyuf_request_id = 156;
        $this->model->program = "";
        $this->model->specialty = 'hello';
        $this->model->count = 12;
        $this->save();


        $this->model = new EyufNeedCount();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->eyuf_request_id = 156;
        $this->model->program = "";
        $this->model->specialty = 'safdasd';
        $this->model->count = 13;
        $this->save();


    }

}
