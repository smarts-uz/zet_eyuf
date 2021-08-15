<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserContact;

class UserContactInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserContact();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 91;
        $this->model->friend = 87;
        $this->model->time = '30-10-2020 13:11:38';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 91;
        $this->model->friend = 86;
        $this->model->time = '30-10-2020 13:22:07';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 91;
        $this->model->friend = 81;
        $this->model->time = '01-11-2020 19:22:28';
        $this->model->blocked = 0;
        $this->model->text = '';
        $this->model->status = 'accepted';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 109;
        $this->model->friend = 91;
        $this->model->time = '04-11-2020 15:01:23';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 109;
        $this->model->friend = 112;
        $this->model->time = '04-11-2020 15:01:23';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 109;
        $this->model->friend = 135;
        $this->model->time = '04-11-2020 15:01:25';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 109;
        $this->model->friend = 104;
        $this->model->time = '04-11-2020 15:01:30';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


        $this->model = new UserContact();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->person = 109;
        $this->model->friend = 90;
        $this->model->time = '04-11-2020 15:01:30';
        $this->model->blocked = null;
        $this->model->text = '';
        $this->model->status = 'await';
        $this->save();


    }

}
