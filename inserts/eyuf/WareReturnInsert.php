<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareReturn;

class WareReturnInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareReturn();

        $this->model->id = 162;
        $this->model->name = 'Возврат товаров №162';
        $this->model->date = '2020-09-13';
        $this->model->shop_order_ids = null;
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = null;
        $this->model->ware_id = 62;
        $this->model->status = 'delivered';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-13 16:52:45';
        $this->model->modified_at = '2020-09-16 10:42:25';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 163;
        $this->model->name = 'Возврат товаров №163';
        $this->model->date = '2020-09-13';
        $this->model->shop_order_ids = null;
        $this->model->comment = '4545';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 9900000;
        $this->model->ware_id = 58;
        $this->model->status = 'delivered';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-13 16:54:14';
        $this->model->modified_at = '2020-09-17 14:38:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 164;
        $this->model->name = 'Возврат товаров №164';
        $this->model->date = '2020-09-16';
        $this->model->shop_order_ids = null;
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 406;
        $this->model->total_price = 7128000;
        $this->model->ware_id = 58;
        $this->model->status = 'delivered';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-16 13:59:50';
        $this->model->modified_at = '2020-09-17 16:57:47';
        $this->model->created_by = 406;
        $this->model->modified_by = 315;
        $this->save();


    }

}
