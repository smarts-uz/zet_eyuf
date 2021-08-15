<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\Ware;

class WareInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Ware();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'Склад Узбекистан (Товар просроченный)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Склад Узбекистан (Товар)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'outdated';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'Кашкадарья';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'Бухара';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Ташкент';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Фергана';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Сурхандарья';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Навои';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Самарканд';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Склад Узбекистан (Брак)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = 263;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'defected';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Наманган';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Джизак';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Андижан';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Республика Каракалпакстан';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Сырдарья';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Ташкентская область';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'regional';
        $this->model->place_adress_id = null;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Хорезм';
        $this->model->title = 'cdfdfdf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 263;
        $this->model->text = '<p>dsdfddgftgt</p>';
        $this->model->phone = 'dsdsdsdsfdvf';
        $this->model->email = 'dcdcdc@mail.ru';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 1166;
        $this->save();


    }

}
