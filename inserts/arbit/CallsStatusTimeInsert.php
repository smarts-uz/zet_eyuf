<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\calls\CallsStatusTime;

class CallsStatusTimeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CallsStatusTime();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'operator2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 103;
        $this->model->date = '2020-07-09';
        $this->model->online = '11:54:31';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:04:12';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'operator2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 103;
        $this->model->date = '2020-07-10';
        $this->model->online = '12:06:20';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 278;
        $this->model->date = '2020-07-10';
        $this->model->online = '00:00:00';
        $this->model->offline = '02:00:18';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:44';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 103;
        $this->model->date = '2020-08-14';
        $this->model->online = '06:30:57';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '09:59:26';
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'operator11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 172;
        $this->model->date = '2020-08-14';
        $this->model->online = '06:53:20';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '10:07:01';
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'operator4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 174;
        $this->model->date = '2020-08-15';
        $this->model->online = '00:00:00';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'operator19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 268;
        $this->model->date = '2020-08-14';
        $this->model->online = '07:47:15';
        $this->model->offline = '00:00:30';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '16:41:17';
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 268;
        $this->model->date = '2020-08-15';
        $this->model->online = '08:54:33';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '08:54:51';
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 268;
        $this->model->date = '2020-08-21';
        $this->model->online = '01:11:39';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '18:31:51';
        $this->save();


    }

}
