<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserOauth;

class UserOauthInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserOauth();

        $this->model->id = 3;
        $this->model->name = 'Github';
        $this->model->active = 1;
        $this->model->type = 'github';
        $this->model->client_id = 'c68031a73cdd7418c2ab';
        $this->model->client_secret = '725152ea62887fe69fd47045b26ffcd0a45cf13c';
        $this->save();


        $this->model = new UserOauth();

        $this->model->id = 4;
        $this->model->name = 'Instagram';
        $this->model->active = 1;
        $this->model->type = 'instagram';
        $this->model->client_id = '924700988040738';
        $this->model->client_secret = '33330771889d2c789b47423b4b497135';
        $this->save();


        $this->model = new UserOauth();

        $this->model->id = 1;
        $this->model->name = 'Google';
        $this->model->active = 1;
        $this->model->type = 'google';
        $this->model->client_id = '625308498860-falu54un6j1s0vkptir9qn8qdnhs9pqo.apps.googleusercontent.com';
        $this->model->client_secret = 'tP-xBj5Ghe8wcalabL6M1zr_';
        $this->save();


        $this->model = new UserOauth();

        $this->model->id = 6;
        $this->model->name = 'Facebook';
        $this->model->active = 1;
        $this->model->type = 'facebook';
        $this->model->client_id = '1743074685843877';
        $this->model->client_secret = '36ff261bf02d59b8b5e57b935ba89c0e';
        $this->save();


    }

}
