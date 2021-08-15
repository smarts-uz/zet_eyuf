<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopShipment;

class ShopShipmentInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopShipment();

        $this->model->id = 237;
        $this->model->name = 'Передача заказов в подотчет курьеру 237 от 2020-09-17 16:42:19';
        $this->model->code = '000000000237';
        $this->model->date = null;
        $this->model->date_deliver = '2020-09-30';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = '315';
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-17 16:42:19';
        $this->model->modified_at = '2020-09-17 16:43:18';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 239;
        $this->model->name = 'Передача заказов в подотчет курьеру 239 от 2020-09-18 18:38:46';
        $this->model->code = '000000000239';
        $this->model->date = null;
        $this->model->date_deliver = '2026-02-10';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 2;
        $this->model->responsible = '370';
        $this->model->comment = 'as';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-18 18:38:46';
        $this->model->modified_at = '2020-09-18 18:38:46';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 241;
        $this->model->name = 'Передача заказов в подотчет курьеру 241 от 2020-09-18 18:41:43';
        $this->model->code = '000000000241';
        $this->model->date = null;
        $this->model->date_deliver = '2019-02-10';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = '406';
        $this->model->comment = 'asd';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-18 18:41:43';
        $this->model->modified_at = '2020-09-18 18:41:43';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 240;
        $this->model->name = 'Передача заказов в подотчет курьеру 240 от 2020-09-18 18:40:57';
        $this->model->code = '000000000240';
        $this->model->date = null;
        $this->model->date_deliver = '2026-02-10';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 7;
        $this->model->responsible = '406';
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-18 18:40:57';
        $this->model->modified_at = '2020-09-18 18:40:57';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


    }

}
