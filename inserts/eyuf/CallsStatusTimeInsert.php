<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\calls\CallsStatusTime;

class CallsStatusTimeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CallsStatusTime();

        $this->model->id = 6;
        $this->model->name = 'operator15';
        $this->model->user_id = 384;
        $this->model->date = '2020-09-07';
        $this->model->online = '00:44:49';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '2020-09-07 16:05:46';
        $this->model->modified_at = '2020-09-07 16:50:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 163;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 7;
        $this->model->name = 'user829,';
        $this->model->user_id = 377;
        $this->model->date = '2020-09-07';
        $this->model->online = '00:38:39';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '2020-09-07 16:16:27';
        $this->model->modified_at = '2020-09-07 16:55:06';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 8;
        $this->model->name = 'user4114,male,fsdfsdf@gmail.com';
        $this->model->user_id = 333;
        $this->model->date = '2020-09-07';
        $this->model->online = '00:32:13';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '16:50:05';
        $this->model->created_at = '2020-09-07 16:38:33';
        $this->model->modified_at = '2020-09-07 17:15:06';
        $this->model->created_by = 333;
        $this->model->modified_by = 333;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 2;
        $this->model->name = 'operator17';
        $this->model->user_id = 332;
        $this->model->date = '2020-09-07';
        $this->model->online = '00:21:13';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '23:41:58';
        $this->model->created_at = '2020-09-07 14:21:49';
        $this->model->modified_at = '2020-09-08 08:56:18';
        $this->model->created_by = 332;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 1;
        $this->model->name = 'operator9';
        $this->model->user_id = 366;
        $this->model->date = '2020-09-07';
        $this->model->online = '05:44:11';
        $this->model->offline = '00:32:45';
        $this->model->away = '00:04:08';
        $this->model->dnd = '00:00:14';
        $this->model->lunch = '00:00:00';
        $this->model->process = '20:01:01';
        $this->model->created_at = '2020-09-07 13:35:42';
        $this->model->modified_at = '2020-09-08 08:59:37';
        $this->model->created_by = 366;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 3;
        $this->model->name = 'operator14';
        $this->model->user_id = 383;
        $this->model->date = '2020-09-07';
        $this->model->online = '00:00:00';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '2020-09-07 15:55:44';
        $this->model->modified_at = '2020-09-07 15:55:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 4;
        $this->model->name = '';
        $this->model->user_id = 319;
        $this->model->date = '2020-09-07';
        $this->model->online = '00:16:30';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '2020-09-07 15:57:12';
        $this->model->modified_at = '2020-09-07 16:13:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 9;
        $this->model->name = '';
        $this->model->user_id = 332;
        $this->model->date = '2020-09-08';
        $this->model->online = '00:00:29';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '19:06:29';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-08 17:00:24';
        $this->model->created_by = null;
        $this->model->modified_by = 332;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 5;
        $this->model->name = '';
        $this->model->user_id = 374;
        $this->model->date = '2020-09-07';
        $this->model->online = '03:17:51';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '00:03:46';
        $this->model->created_at = '2020-09-07 15:58:14';
        $this->model->modified_at = '2020-09-08 17:46:19';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 11;
        $this->model->name = '';
        $this->model->user_id = 374;
        $this->model->date = '2020-09-08';
        $this->model->online = '00:00:00';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '11:32:38';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 10;
        $this->model->name = '';
        $this->model->user_id = 366;
        $this->model->date = '2020-09-08';
        $this->model->online = '18:45:09';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '14:15:13';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-09 13:00:24';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 13;
        $this->model->name = '';
        $this->model->user_id = 396;
        $this->model->date = '2020-09-10';
        $this->model->online = '00:00:00';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '2020-09-10 13:01:01';
        $this->model->modified_at = '2020-09-10 13:01:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 14;
        $this->model->name = 'user5360,,abduvalievbehr.uz1@gmail.com';
        $this->model->user_id = 142;
        $this->model->date = '2020-09-10';
        $this->model->online = '00:00:00';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '2020-09-10 14:42:21';
        $this->model->modified_at = '2020-09-10 14:42:21';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 12;
        $this->model->name = '';
        $this->model->user_id = 366;
        $this->model->date = '2020-09-09';
        $this->model->online = '22:58:50';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '15:01:52';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-10 15:10:04';
        $this->model->created_by = null;
        $this->model->modified_by = 366;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 15;
        $this->model->name = '';
        $this->model->user_id = 366;
        $this->model->date = '2020-09-10';
        $this->model->online = '23:07:20';
        $this->model->offline = '00:03:57';
        $this->model->away = '00:03:43';
        $this->model->dnd = '00:01:03';
        $this->model->lunch = '00:07:17';
        $this->model->process = '16:31:11';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-11 16:07:09';
        $this->model->created_by = null;
        $this->model->modified_by = 366;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 16;
        $this->model->name = 'operator16';
        $this->model->user_id = 366;
        $this->model->date = '2020-09-11';
        $this->model->online = '23:55:47';
        $this->model->offline = '00:00:04';
        $this->model->away = '00:00:02';
        $this->model->dnd = '00:00:03';
        $this->model->lunch = '00:03:52';
        $this->model->process = '16:07:24';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 14:42:29';
        $this->model->created_by = null;
        $this->model->modified_by = 366;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 17;
        $this->model->name = '';
        $this->model->user_id = 366;
        $this->model->date = '2020-09-12';
        $this->model->online = '14:42:29';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-12 14:42:52';
        $this->model->created_by = null;
        $this->model->modified_by = 366;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 18;
        $this->model->name = '';
        $this->model->user_id = 419;
        $this->model->date = '2020-09-12';
        $this->model->online = '00:00:00';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '16:08:09';
        $this->model->created_at = '2020-09-12 15:15:05';
        $this->model->modified_at = '2020-09-12 15:43:12';
        $this->model->created_by = 419;
        $this->model->modified_by = 419;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 19;
        $this->model->name = '';
        $this->model->user_id = 420;
        $this->model->date = '2020-09-12';
        $this->model->online = '00:00:05';
        $this->model->offline = '00:00:03';
        $this->model->away = '00:00:03';
        $this->model->dnd = '00:00:32';
        $this->model->lunch = '00:00:03';
        $this->model->process = '21:52:24';
        $this->model->created_at = '2020-09-12 21:52:11';
        $this->model->modified_at = '2020-09-12 21:53:01';
        $this->model->created_by = 420;
        $this->model->modified_by = 420;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 20;
        $this->model->name = '';
        $this->model->user_id = 419;
        $this->model->date = '2020-09-14';
        $this->model->online = '08:13:15';
        $this->model->offline = '00:00:00';
        $this->model->away = '04:48:49';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '11:44:52';
        $this->model->created_at = '2020-09-14 10:03:08';
        $this->model->modified_at = '2020-09-15 12:39:31';
        $this->model->created_by = 419;
        $this->model->modified_by = 419;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 22;
        $this->model->name = '';
        $this->model->user_id = 419;
        $this->model->date = '2020-09-15';
        $this->model->online = '12:39:31';
        $this->model->offline = '00:00:00';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = null;
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-15 12:39:34';
        $this->model->created_by = null;
        $this->model->modified_by = 419;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 21;
        $this->model->name = 'operator20';
        $this->model->user_id = 426;
        $this->model->date = '2020-09-15';
        $this->model->online = '00:07:59';
        $this->model->offline = '00:00:28';
        $this->model->away = '00:00:18';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '18:53:13';
        $this->model->created_at = '2020-09-15 10:22:50';
        $this->model->modified_at = '2020-09-15 14:46:44';
        $this->model->created_by = 426;
        $this->model->modified_by = 426;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 25;
        $this->model->name = '';
        $this->model->user_id = 427;
        $this->model->date = '2020-09-15';
        $this->model->online = '00:34:30';
        $this->model->offline = '00:00:12';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '14:41:20';
        $this->model->created_at = '2020-09-15 14:38:04';
        $this->model->modified_at = '2020-09-15 15:14:24';
        $this->model->created_by = 427;
        $this->model->modified_by = 427;
        $this->save();


        $this->model = new CallsStatusTime();

        $this->model->id = 24;
        $this->model->name = '';
        $this->model->user_id = 428;
        $this->model->date = '2020-09-15';
        $this->model->online = '00:04:01';
        $this->model->offline = '00:03:22';
        $this->model->away = '00:00:00';
        $this->model->dnd = '00:00:00';
        $this->model->lunch = '00:00:00';
        $this->model->process = '15:23:55';
        $this->model->created_at = '2020-09-15 14:37:03';
        $this->model->modified_at = '2020-09-15 15:27:49';
        $this->model->created_by = 428;
        $this->model->modified_by = 428;
        $this->save();


    }

}
