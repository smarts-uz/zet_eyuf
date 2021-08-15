<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreSetting;

class CoreSettingInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreSetting();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\former\\conf\\OAuth2Form';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = [
            'name' => '',
            'enable' => '1',
            'client_id' => '11313',
            'client_secret' => '131313',
        ];
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\former\\conf\\GeneralSettingsForm';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


    }

}
