<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopDelay;

class ShopDelayInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopDelay();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-05';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-23';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-05';
        $this->model->comment = 'asasdsadsdadsa';
        $this->model->date_delay = '2020-07-25';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №12';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-05';
        $this->model->comment = 'nakonec';
        $this->model->date_delay = '2020-08-08';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-05';
        $this->model->comment = 'asddsadsasdadsadas';
        $this->model->date_delay = '2020-08-01';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №9';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-05';
        $this->model->comment = 'ccccccccccccccc';
        $this->model->date_delay = '2020-08-05';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №13';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-05';
        $this->model->comment = 'adssadsdasadsda';
        $this->model->date_delay = '2020-07-16';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №15';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-21';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №16';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-23';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №17';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-12';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-28';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-21';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №20';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-13';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №18';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-28';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №22';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-22';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-14';
        $this->model->comment = 'dsdsdsdsdsds';
        $this->model->date_delay = '2020-07-28';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №41';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №42';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №44';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №26';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-08-01';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №25';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-31';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №27';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №28';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №29';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №30';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №31';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №32';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №33';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №34';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №35';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №36';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №37';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №38';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №39';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №40';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №24';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №51';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->comment = '123';
        $this->model->date_delay = '2020-07-23';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №50';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №57';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->comment = 'dfgds';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №49';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №48';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-17';
        $this->model->comment = 'asd';
        $this->model->date_delay = '2020-07-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №47';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-16';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-23';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №46';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №45';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №53';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №54';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №56';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->comment = 'fdsf';
        $this->model->date_delay = '2020-07-31';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №55';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №52';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->comment = 'dasd';
        $this->model->date_delay = '2020-07-30';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №63';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-10';
        $this->model->comment = '';
        $this->model->date_delay = '2020-08-28';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-04';
        $this->model->comment = 'Заказ перенесён ';
        $this->model->date_delay = '2020-07-31';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №64';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-07';
        $this->model->comment = 'dsf';
        $this->model->date_delay = '2020-08-26';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-11';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №67';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-11';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №73';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-16';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №75';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-19';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-22';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №74';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-22';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №72';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №71';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-23';
        $this->model->comment = 'sds';
        $this->model->date_delay = '2020-09-25';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №69';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №77';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №78';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-24';
        $this->model->comment = 'dsf';
        $this->model->date_delay = '2020-08-26';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №79';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-11';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №80';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-29';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-29';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №81';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-05';
        $this->model->comment = '';
        $this->model->date_delay = '2020-10-06';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-05';
        $this->model->comment = 'asdfghjk';
        $this->model->date_delay = '2020-09-24';
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Перенесённый заказ №82';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-10-22';
        $this->model->comment = 'vcvcvc1';
        $this->model->date_delay = '2020-10-17';
        $this->save();


    }

}
