<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\calls\CallsStatus;

class CallsStatusInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CallsStatus();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'operator103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 103;
        $this->model->time = '00:00:46';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'operator103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 103;
        $this->model->time = '00:00:27';
        $this->model->status = 'dnd';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'operator103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 103;
        $this->model->time = '00:00:00';
        $this->model->status = 'away';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:00';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:00';
        $this->model->status = 'away';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:00';
        $this->model->status = 'dnd';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:02';
        $this->model->status = 'away';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:10';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:18';
        $this->model->status = 'away';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:31';
        $this->model->status = 'dnd';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:21';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:51';
        $this->model->status = 'dnd';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '00:00:00';
        $this->model->status = 'offline';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '03:00:43';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '03:00:00';
        $this->model->status = 'dnd';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '03:00:18';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '03:00:38';
        $this->model->status = 'offline';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '03:00:42';
        $this->model->status = 'away';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 124;
        $this->model->time = '13:00:09';
        $this->model->status = 'online';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 306;
        $this->model->time = '00:00:00';
        $this->model->status = '';
        $this->save();


        $this->model = new CallsStatus();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_id = 307;
        $this->model->time = '00:00:00';
        $this->model->status = '';
        $this->save();


    }

}
