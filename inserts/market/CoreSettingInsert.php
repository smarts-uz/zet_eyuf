<?php

namespace zetsoft\inserts\market;

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
        $this->model->name = 'zetsoft\\former\\conf\\ConfOAuth2Form';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\conf\\ConfGeneralSettingsForm';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'defaultWare2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\conf\\ConfWareForm';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'defaultWare';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\conf\\ConfGeneralSettingsForm';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = 15;
        $this->model->user_id = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreSetting();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\former\\conf\\ConfGeneralSettingsForm';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->type = '';
        $this->model->user_company_id = null;
        $this->model->user_id = null;
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
