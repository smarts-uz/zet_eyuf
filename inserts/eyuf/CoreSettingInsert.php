<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreSetting;

class CoreSettingInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreSetting();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\former\\conf\\GeneralSettingsForm';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '_8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\former\\conf\\OAuth2Form';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'fewfeor';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\conf\\ConfOAuth2Form';
        $this->model->value = "";
        $this->model->type = 'user';
        $this->model->user_company_id = 268;
        $this->model->user_id = 91;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\conf\\ConfGeneralSettingsForm';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\conf\\ConfOAuth2Form';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->save();


    }

}
