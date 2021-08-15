<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopShipment;

class ShopShipmentInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopShipment();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 342 от 2020-10-29 15:23:25';
        $this->model->code = '000000000342';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-29';
        $this->model->date_deliver = '2020-10-30';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 13;
        $this->model->responsible = 459;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 344 от 2020-10-29 17:48:28';
        $this->model->code = '000000000344';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-30';
        $this->model->date_deliver = '2020-10-30';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 173;
        $this->model->responsible = 0;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 347 от 2020-11-02 15:56:22';
        $this->model->code = '000000000347';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-31';
        $this->model->date_deliver = '2020-11-01';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 15;
        $this->model->responsible = 459;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 345 от 2020-10-31 09:11:32';
        $this->model->code = '000000000345';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->date_deliver = '2021-01-11';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 15;
        $this->model->responsible = 459;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


        $this->model = new ShopShipment();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'Передача заказов в подотчет курьеру 346 от 2020-10-31 09:14:01';
        $this->model->code = '000000000346';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-31';
        $this->model->date_deliver = '2020-11-01';
        $this->model->shipment_type = 'based_on_table';
        $this->model->shop_courier_id = 19;
        $this->model->responsible = 459;
        $this->model->comment = '';
        $this->model->ware_place_ids = "";
        $this->model->user_place_ids = "";
        $this->save();


    }

}
