<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareTrans;

class WareTransInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareTrans();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Склад Узбекистан (Товар) в Бухара №103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->user_company_id = 263;
        $this->model->ware_enter_id = 393;
        $this->model->ware_exit_id = 2054;
        $this->model->warehouse_from = 59;
        $this->model->warehouse_to = 62;
        $this->model->responsible = 348;
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

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Ташкент в Кашкадарья №100';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->user_company_id = 263;
        $this->model->ware_enter_id = 390;
        $this->model->ware_exit_id = 2051;
        $this->model->warehouse_from = 63;
        $this->model->warehouse_to = 61;
        $this->model->responsible = 406;
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

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = 'Перемещение с Наманган в Склад Узбекистан (Товар просроченный) №98';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = '2020-09-28';
        $this->model->user_company_id = 263;
        $this->model->ware_enter_id = 386;
        $this->model->ware_exit_id = 2047;
        $this->model->warehouse_from = 71;
        $this->model->warehouse_to = 58;
        $this->model->responsible = 315;
        $this->model->comment = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
