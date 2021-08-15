<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Перенесённый заказ №7';
        $this->model->date = '2020-07-05';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-23';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 8;
        $this->model->name = 'Перенесённый заказ №8';
        $this->model->date = '2020-07-05';
        $this->model->comment = 'asasdsadsdadsa';
        $this->model->date_delay = '2020-07-25';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 12;
        $this->model->name = 'Перенесённый заказ №12';
        $this->model->date = '2020-07-05';
        $this->model->comment = 'nakonec';
        $this->model->date_delay = '2020-08-08';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 11;
        $this->model->name = 'Перенесённый заказ №11';
        $this->model->date = '2020-07-05';
        $this->model->comment = 'asddsadsasdadsadas';
        $this->model->date_delay = '2020-08-01';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 9;
        $this->model->name = 'Перенесённый заказ №9';
        $this->model->date = '2020-07-05';
        $this->model->comment = 'ccccccccccccccc';
        $this->model->date_delay = '2020-08-05';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 13;
        $this->model->name = 'Перенесённый заказ №13';
        $this->model->date = '2020-07-05';
        $this->model->comment = 'adssadsdasadsda';
        $this->model->date_delay = '2020-07-16';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 15;
        $this->model->name = 'Перенесённый заказ №15';
        $this->model->date = '2020-07-12';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-21';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 16;
        $this->model->name = 'Перенесённый заказ №16';
        $this->model->date = '2020-07-12';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-23';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 17;
        $this->model->name = 'Перенесённый заказ №17';
        $this->model->date = '2020-07-12';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-28';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 19;
        $this->model->name = 'Перенесённый заказ №19';
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-21';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 20;
        $this->model->name = 'Перенесённый заказ №20';
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-13';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 18;
        $this->model->name = 'Перенесённый заказ №18';
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-28';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 22;
        $this->model->name = 'Перенесённый заказ №22';
        $this->model->date = '2020-07-13';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-22';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 21;
        $this->model->name = 'Перенесённый заказ №21';
        $this->model->date = '2020-07-14';
        $this->model->comment = 'dsdsdsdsdsds';
        $this->model->date_delay = '2020-07-28';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 41;
        $this->model->name = 'Перенесённый заказ №41';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 42;
        $this->model->name = 'Перенесённый заказ №42';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 43;
        $this->model->name = 'Перенесённый заказ №43';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 44;
        $this->model->name = 'Перенесённый заказ №44';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 26;
        $this->model->name = 'Перенесённый заказ №26';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-08-01';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 25;
        $this->model->name = 'Перенесённый заказ №25';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-31';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 27;
        $this->model->name = 'Перенесённый заказ №27';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 28;
        $this->model->name = 'Перенесённый заказ №28';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 29;
        $this->model->name = 'Перенесённый заказ №29';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 30;
        $this->model->name = 'Перенесённый заказ №30';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-29';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 31;
        $this->model->name = 'Перенесённый заказ №31';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 32;
        $this->model->name = 'Перенесённый заказ №32';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 33;
        $this->model->name = 'Перенесённый заказ №33';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 34;
        $this->model->name = 'Перенесённый заказ №34';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 35;
        $this->model->name = 'Перенесённый заказ №35';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 36;
        $this->model->name = 'Перенесённый заказ №36';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 37;
        $this->model->name = 'Перенесённый заказ №37';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 38;
        $this->model->name = 'Перенесённый заказ №38';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 39;
        $this->model->name = 'Перенесённый заказ №39';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 40;
        $this->model->name = 'Перенесённый заказ №40';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 24;
        $this->model->name = 'Перенесённый заказ №24';
        $this->model->date = '2020-07-15';
        $this->model->comment = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 51;
        $this->model->name = 'Перенесённый заказ №51';
        $this->model->date = '2020-07-23';
        $this->model->comment = '123';
        $this->model->date_delay = '2020-07-23';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 50;
        $this->model->name = 'Перенесённый заказ №50';
        $this->model->date = '2020-07-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 57;
        $this->model->name = 'Перенесённый заказ №57';
        $this->model->date = '2020-07-24';
        $this->model->comment = 'dfgds';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 49;
        $this->model->name = 'Перенесённый заказ №49';
        $this->model->date = '2020-07-23';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 48;
        $this->model->name = 'Перенесённый заказ №48';
        $this->model->date = '2020-07-17';
        $this->model->comment = 'asd';
        $this->model->date_delay = '2020-07-24';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 47;
        $this->model->name = 'Перенесённый заказ №47';
        $this->model->date = '2020-07-16';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-23';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 46;
        $this->model->name = 'Перенесённый заказ №46';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 45;
        $this->model->name = 'Перенесённый заказ №45';
        $this->model->date = '2020-07-15';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 53;
        $this->model->name = 'Перенесённый заказ №53';
        $this->model->date = '2020-07-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 54;
        $this->model->name = 'Перенесённый заказ №54';
        $this->model->date = '2020-07-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 56;
        $this->model->name = 'Перенесённый заказ №56';
        $this->model->date = '2020-07-24';
        $this->model->comment = 'fdsf';
        $this->model->date_delay = '2020-07-31';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 55;
        $this->model->name = 'Перенесённый заказ №55';
        $this->model->date = '2020-07-24';
        $this->model->comment = '';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 52;
        $this->model->name = 'Перенесённый заказ №52';
        $this->model->date = '2020-07-24';
        $this->model->comment = 'dasd';
        $this->model->date_delay = '2020-07-30';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 63;
        $this->model->name = 'Перенесённый заказ №63';
        $this->model->date = '2020-08-10';
        $this->model->comment = '';
        $this->model->date_delay = '2020-08-28';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 4;
        $this->model->name = 'Перенесённый заказ №4';
        $this->model->date = '2020-07-04';
        $this->model->comment = 'Заказ перенесён ';
        $this->model->date_delay = '2020-07-31';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 64;
        $this->model->name = 'Перенесённый заказ №64';
        $this->model->date = '2020-09-07';
        $this->model->comment = 'dsf';
        $this->model->date_delay = '2020-08-26';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-09-09 16:01:38';
        $this->model->created_by = null;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 65;
        $this->model->name = 'Перенесённый заказ №65';
        $this->model->date = '2020-09-11';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-11 12:39:37';
        $this->model->modified_at = '2020-09-11 12:41:08';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 69;
        $this->model->name = 'Перенесённый заказ №69';
        $this->model->date = '2020-09-14';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-14 11:49:06';
        $this->model->modified_at = '2020-09-14 11:51:28';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 71;
        $this->model->name = 'Перенесённый заказ №71';
        $this->model->date = '2020-09-15';
        $this->model->comment = 'sds';
        $this->model->date_delay = '2020-09-25';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-15 14:54:10';
        $this->model->modified_at = '2020-09-15 14:54:10';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopDelay();

        $this->model->id = 72;
        $this->model->name = 'Перенесённый заказ №72';
        $this->model->date = '2020-09-16';
        $this->model->comment = '';
        $this->model->date_delay = '2020-09-24';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-16 14:00:34';
        $this->model->modified_at = '2020-09-16 16:43:53';
        $this->model->created_by = 406;
        $this->model->modified_by = 0;
        $this->save();


    }

}
