<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareReturn;

class WareReturnInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareReturn();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №12';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = 0;
        $this->model->total_price = 10445678;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 170;
        $this->model->responsible = 118;
        $this->model->total_price = 5222839;
        $this->model->ware_id = 7;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №69';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №17';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №62';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №18';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №70';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №68';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №20';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №13';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 7;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №22';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №24';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №71';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'dddd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №25';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №67';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №26';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №27';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №28';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №29';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №30';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №31';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №32';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №33';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №34';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №35';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №36';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №37';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №38';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №39';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №40';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №41';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №42';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 156;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №44';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №45';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №46';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 7;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №47';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-01';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 7;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №48';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №49';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №50';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №51';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №52';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №53';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №54';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №55';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №56';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №57';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №58';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №59';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №60';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №61';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 5;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №63';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №64';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №94';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 9;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №86';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'assadasdsdasad';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №93';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 9;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №92';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №85';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'assad';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №91';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №90';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №84';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'assa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №89';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'assadasdsdasad';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 8;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №88';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'assadasdsdasad';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 8;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №83';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №87';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'assadasdsdasad';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №82';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'dsadsadsa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №81';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'dsadsa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №80';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №79';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №78';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №77';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №75';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №74';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 6;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №109';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 9;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №104';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aassasasasasaas';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 8;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №98';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aas';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aassasasasasaas';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №102';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aassasasasasaas';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №97';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aas';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №101';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aassasasasasaas';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №100';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aassasasasa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №99';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aassa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №108';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 9;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №107';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №111';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 7;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №113';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'sddddddddddddddddddddddddddddd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №110';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 8;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №112';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №115';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'xxxxxxxxxxxxxxxxxxxxxx';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №114';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'xxxxxxxxxxxxxxxxxxxxxx';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №116';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiii';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №106';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'sssssssssssssssssssssssssssssss';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №117';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = null;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №118';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = null;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №105';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'xcvvvvvvvvvvvvvvvvvvvvvvvvvvvvv';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №119';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = null;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №120';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'tttttttttttttttttttttttt';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №96';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'xxxxxxxxxx,';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №95';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'xxxx';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №72';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'pppppppppppppppppppppppp';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №122';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №121';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №140';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 6;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'fggggggggggggggggggggggs';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №134';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'rrrrrrrrrrttttttttttttttttttt';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №126';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrr';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №125';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrr';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №73';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'ddddddddddddddddddddddd';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 6;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №133';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'qqqqqqqqqqqq';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №132';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'qqqqqqqqqqqq';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №130';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №135';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'zxxxxxxxxxxxxxxxx';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №129';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №139';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №128';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №127';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-02';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №138';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №136';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №137';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->shop_order_ids = "";
        $this->model->comment = 'asd';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = 16;
        $this->model->responsible = 118;
        $this->model->total_price = 5222839;
        $this->model->ware_id = 27;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №143';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-11';
        $this->model->shop_order_ids = "";
        $this->model->comment = '4545';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №144';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-11';
        $this->model->shop_order_ids = "";
        $this->model->comment = '4545';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №142';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-11';
        $this->model->shop_order_ids = "";
        $this->model->comment = '454545';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 0;
        $this->model->total_price = 0;
        $this->model->ware_id = 4;
        $this->model->status = 'delivered';
        $this->save();


        $this->model = new WareReturn();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №149';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-24';
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 154;
        $this->model->total_price = null;
        $this->model->ware_id = null;
        $this->model->status = 'new';
        $this->save();


    }

}
