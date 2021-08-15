<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreAnalytics;

class CoreAnalyticsInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreAnalytics();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->value = "";
        $this->model->user_company_id = null;
        $this->save();


    }

}
