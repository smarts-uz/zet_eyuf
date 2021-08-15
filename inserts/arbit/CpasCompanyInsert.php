<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasCompany;

class CpasCompanyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasCompany();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Crm market place';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->auth_code = 'JyV52tQVB6rQs7wh7Ts3cQTBu5MW8smQVHRPrsFvuSgj7JPj9eQC3MhqSDrkCVwm';
        $this->model->auth_type = 'bearer';
        $this->model->postback = [
            'new' => 'http://mplace.zetsoft.uz/api/shop/cart/add-order.aspx',
            'trash' => 'http://mplace.zetsoft.uz/api/shop/cart/add-order.aspx',
            'cancel' => 'http://mplace.zetsoft.uz/api/shop/cart/add-order.aspx',
            'method' => 'get',
            'approve' => 'http://mplace.zetsoft.uz/api/shop/cart/add-order.aspx',
        ];
        $this->model->service = "";
        $this->save();


    }

}
