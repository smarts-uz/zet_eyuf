<?php

namespace zetsoft\inserts\market;

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
        $this->model->sort = null;
        $this->model->name = 'Github';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'github';
        $this->model->client_id = 0;
        $this->model->client_secret = '725152ea62887fe69fd47045b26ffcd0a45cf13c';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
