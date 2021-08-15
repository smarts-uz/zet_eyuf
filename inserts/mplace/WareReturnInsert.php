<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareReturn;

class WareReturnInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareReturn();

        $this->model->id = 650;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №650';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = [
            '1',
        ];
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 426;
        $this->model->total_price = 99000;
        $this->model->ware_id = 63;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 649;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №649';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = [
            '2210',
        ];
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 163;
        $this->model->total_price = 0;
        $this->model->ware_id = 61;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 652;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №652';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = [
            '58',
        ];
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 459;
        $this->model->total_price = 198000;
        $this->model->ware_id = 59;
        $this->model->status = 'delivered';
        $this->save();


    }

}
