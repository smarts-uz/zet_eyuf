<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Перемещение с 5 в 6';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '6';
        $this->model->responsible = null;
        $this->model->comment = 'jljl';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 60;
        $this->model->name = 'Перемещение с 7 в 8';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '8';
        $this->model->responsible = null;
        $this->model->comment = 'test Dilshod';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 64;
        $this->model->name = 'Перемещение с 7 в 4';
        $this->model->date = '2020-07-14';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '4';
        $this->model->responsible = null;
        $this->model->comment = 'ggdfsadfsafsdaf';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 33;
        $this->model->name = 'Перемещение с 4 в 7';
        $this->model->date = '2020-07-09';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '4';
        $this->model->warehouse_to = '7';
        $this->model->responsible = null;
        $this->model->comment = 'aaaaaaaaaaaaaaaaa';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 32;
        $this->model->name = 'Перемещение с 16 в 5';
        $this->model->date = '2020-07-09';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '16';
        $this->model->warehouse_to = '5';
        $this->model->responsible = null;
        $this->model->comment = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 34;
        $this->model->name = 'Перемещение с 4 в 5';
        $this->model->date = '2020-07-10';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '4';
        $this->model->warehouse_to = '5';
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 36;
        $this->model->name = 'Перемещение с 5 в 6';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '6';
        $this->model->responsible = null;
        $this->model->comment = 'jljl';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 40;
        $this->model->name = 'Перемещение с 5 в 5';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '5';
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 44;
        $this->model->name = 'Перемещение с 7 в 8';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '8';
        $this->model->responsible = null;
        $this->model->comment = 'test Dilshod';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 35;
        $this->model->name = 'Перемещение с 4 в 5';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '4';
        $this->model->warehouse_to = '5';
        $this->model->responsible = null;
        $this->model->comment = 'sfds';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 45;
        $this->model->name = 'Перемещение с 5 в 7';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '7';
        $this->model->responsible = null;
        $this->model->comment = 'Dilshod';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 46;
        $this->model->name = 'Перемещение с 8 в 6';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '8';
        $this->model->warehouse_to = '6';
        $this->model->responsible = null;
        $this->model->comment = 'Dilshod';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 51;
        $this->model->name = 'Перемещение с 5 в 4';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '4';
        $this->model->responsible = null;
        $this->model->comment = '123';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 53;
        $this->model->name = 'Перемещение с 7 в 5';
        $this->model->date = '2020-07-13';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '5';
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 67;
        $this->model->name = 'Перемещение с 5 в 4';
        $this->model->date = '2020-07-16';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '4';
        $this->model->responsible = null;
        $this->model->comment = 'ssssss';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 68;
        $this->model->name = 'Перемещение с 5 в 7';
        $this->model->date = '2020-07-16';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '7';
        $this->model->responsible = null;
        $this->model->comment = 'sssss';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 69;
        $this->model->name = 'Перемещение с 7 в 6';
        $this->model->date = '2020-07-24';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '6';
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 77;
        $this->model->name = 'Перемещение с Не задано в Не задано';
        $this->model->date = null;
        $this->model->user_company_id = null;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '';
        $this->model->warehouse_to = '';
        $this->model->responsible = null;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 71;
        $this->model->name = 'Перемещение с 7 в 6';
        $this->model->date = '2020-07-24';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '6';
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 70;
        $this->model->name = 'Перемещение с 7 в 6';
        $this->model->date = '2020-07-24';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '7';
        $this->model->warehouse_to = '6';
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 79;
        $this->model->name = 'Перемещение с 5 в 8';
        $this->model->date = '2020-08-05';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '8';
        $this->model->responsible = 0;
        $this->model->comment = 'asd';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 80;
        $this->model->name = 'Перемещение с 4 в 6';
        $this->model->date = '2020-08-11';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '4';
        $this->model->warehouse_to = '6';
        $this->model->responsible = 180;
        $this->model->comment = 'asd';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 81;
        $this->model->name = 'Перемещение с 5 в 6';
        $this->model->date = '2020-08-11';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '6';
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 78;
        $this->model->name = 'Перемещение с 4 в 5';
        $this->model->date = '2020-08-05';
        $this->model->user_company_id = 4;
        $this->model->ware_enter_id = '';
        $this->model->ware_exit_id = '';
        $this->model->warehouse_from = '4';
        $this->model->warehouse_to = '5';
        $this->model->responsible = 180;
        $this->model->comment = 'asd';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 82;
        $this->model->name = 'Перемещение с 5 в 6';
        $this->model->date = '2020-08-11';
        $this->model->user_company_id = 133;
        $this->model->ware_enter_id = '209';
        $this->model->ware_exit_id = '159';
        $this->model->warehouse_from = '5';
        $this->model->warehouse_to = '6';
        $this->model->responsible = 156;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-07 13:22:02';
        $this->model->modified_at = '2020-09-07 13:22:53';
        $this->model->created_by = 314;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 83;
        $this->model->name = 'Перемещение с Склад Узбекистан (Товар) в Самарканд';
        $this->model->date = '2020-09-07';
        $this->model->user_company_id = 233;
        $this->model->ware_enter_id = '218';
        $this->model->ware_exit_id = '197';
        $this->model->warehouse_from = '59';
        $this->model->warehouse_to = '67';
        $this->model->responsible = 314;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-07 18:05:28';
        $this->model->modified_at = '2020-09-07 18:06:30';
        $this->model->created_by = 314;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 84;
        $this->model->name = 'Перемещение с Склад Узбекистан (Товар) в Самарканд';
        $this->model->date = '2020-09-07';
        $this->model->user_company_id = 233;
        $this->model->ware_enter_id = '221';
        $this->model->ware_exit_id = '200';
        $this->model->warehouse_from = '59';
        $this->model->warehouse_to = '67';
        $this->model->responsible = 348;
        $this->model->comment = 'fffff';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-08 10:34:27';
        $this->model->modified_at = '2020-09-08 10:35:32';
        $this->model->created_by = 348;
        $this->model->modified_by = 348;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 87;
        $this->model->name = 'Перемещение с Склад Узбекистан (Товар) в Кашкадарья №87';
        $this->model->date = '2020-09-16';
        $this->model->user_company_id = 263;
        $this->model->ware_enter_id = '275';
        $this->model->ware_exit_id = '691';
        $this->model->warehouse_from = '59';
        $this->model->warehouse_to = '61';
        $this->model->responsible = 406;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-16 14:03:05';
        $this->model->modified_at = '2020-09-16 14:03:05';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new WareTrans();

        $this->model->id = 89;
        $this->model->name = 'Перемещение с Кашкадарья в Бухара №89';
        $this->model->date = null;
        $this->model->user_company_id = 263;
        $this->model->ware_enter_id = '278';
        $this->model->ware_exit_id = '2011';
        $this->model->warehouse_from = '61';
        $this->model->warehouse_to = '62';
        $this->model->responsible = 406;
        $this->model->comment = 'add';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-18 18:51:48';
        $this->model->modified_at = '2020-09-18 18:51:48';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


    }

}
