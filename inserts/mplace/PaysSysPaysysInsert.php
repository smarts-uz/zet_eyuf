<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysSysPaysys;

class PaysSysPaysysInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysSysPaysys();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_region_id = null;
        $this->model->parent_id = null;
        $this->model->vendor_id = null;
        $this->model->payment_id = null;
        $this->model->payment_name = '';
        $this->model->agr_trans_id = null;
        $this->model->merchant_trans_id = null;
        $this->model->merchant_trans_amount = null;
        $this->model->environment = '';
        $this->model->sign_time = null;
        $this->model->sign_string = '';
        $this->model->merchant_trans_data = '';
        $this->model->ware_id = null;
        $this->save();


    }

}
