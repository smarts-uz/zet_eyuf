<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareTrans;

class WareTransInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareTrans();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 6;
        $this->model->responsible = null;
        $this->model->comment = 'jljl';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Навоийская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 8;
        $this->model->responsible = null;
        $this->model->comment = 'test Dilshod';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Андижанская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-14';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 4;
        $this->model->responsible = null;
        $this->model->comment = 'ggdfsadfsafsdaf';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Андижанская Область в Склад Джизакская Область ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-09';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 4;
        $this->model->warehouse_to = 7;
        $this->model->responsible = null;
        $this->model->comment = 'aaaaaaaaaaaaaaaaa';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с  Склад Республика Каракалпакстан в Склад Бухарская  Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-09';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 16;
        $this->model->warehouse_to = 5;
        $this->model->responsible = null;
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Андижанская Область в Склад Бухарская  Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-10';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 4;
        $this->model->warehouse_to = 5;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 6;
        $this->model->responsible = null;
        $this->model->comment = 'jljl';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Бухарская  Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 5;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Навоийская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 8;
        $this->model->responsible = null;
        $this->model->comment = 'test Dilshod';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Андижанская Область в Склад Бухарская  Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 4;
        $this->model->warehouse_to = 5;
        $this->model->responsible = null;
        $this->model->comment = 'sfds';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Джизакская Область ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 7;
        $this->model->responsible = null;
        $this->model->comment = 'Dilshod';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Навоийская Область в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 8;
        $this->model->warehouse_to = 6;
        $this->model->responsible = null;
        $this->model->comment = 'Dilshod';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Андижанская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 4;
        $this->model->responsible = null;
        $this->model->comment = '123';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Бухарская  Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 5;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Андижанская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-16';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 4;
        $this->model->responsible = null;
        $this->model->comment = 'ssssss';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Джизакская Область ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-16';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 7;
        $this->model->responsible = null;
        $this->model->comment = 'sssss';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 6;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Не задано в Не задано';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->user_company_id = null;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = null;
        $this->model->warehouse_to = null;
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 6;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Джизакская Область  в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-07-24';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 7;
        $this->model->warehouse_to = 6;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Навоийская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 8;
        $this->model->responsible = 0;
        $this->model->comment = 'asd';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Андижанская Область в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-11';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 4;
        $this->model->warehouse_to = 6;
        $this->model->responsible = 180;
        $this->model->comment = 'asd';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Бухарская  Область в Склад Кашкадарьинская Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-11';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 5;
        $this->model->warehouse_to = 6;
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Андижанская Область в Склад Бухарская  Область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->date = '2020-08-05';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = null;
        $this->model->ware_exit_id = null;
        $this->model->warehouse_from = 4;
        $this->model->warehouse_to = 5;
        $this->model->responsible = 180;
        $this->model->comment = 'asd';
        $this->save();


    }

}
