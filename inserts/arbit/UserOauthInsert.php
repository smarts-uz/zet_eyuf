<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserOauth;

class UserOauthInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserOauth();

        $this->model->id = 1;
        $this->model->name = 'Google';
        $this->model->active = 1;
        $this->model->type = 'google';
        $this->model->client_id = '625308498860-falu54un6j1s0vkptir9qn8qdnhs9pqo.apps.googleusercontent.com';
        $this->model->client_secret = 'H04B5M46NoN-YXvWwkKQYdtF';
        $this->save();


    }

}
