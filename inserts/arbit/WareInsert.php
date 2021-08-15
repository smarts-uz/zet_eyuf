<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\Ware;

class WareInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Ware();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Склад Навоийская Область';
        $this->model->title = 'Навоийская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '<p>	Навоийская область Описание</p>';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = ' Склад Республика Каракалпакстан';
        $this->model->title = 'Республика Каракалпакстан Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '<pРеспублика Каракалпакстан Описание</p>';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Склад Самаркандская Область ';
        $this->model->title = 'Самаркандская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Самаркандская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Склад  Ташкентская Область';
        $this->model->title = 'Ташкентская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Ташкентская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Склад Город Ташкент';
        $this->model->title = 'Город Ташкент Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '<p>	Город Ташкент Описание</p>';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Склад Сурхандарьинская Область';
        $this->model->title = 'Сурхандарьинская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Сурхандарьинская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Склад Кашкадарьинская Область';
        $this->model->title = 'Кашкадарьинская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '<p>Кашкадарьинся область&nbsp;Описание</p>';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Склад Наманганская Область ';
        $this->model->title = 'Наманганская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Наманганская областьОписание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = ' Склад Сырдарьинская Область';
        $this->model->title = 'Сырдарьинская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Сырдарьинская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = ' Склад Ферганская Область ';
        $this->model->title = 'Ферганская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Ферганская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'Склад город Самарканд';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Склад Джизакская Область ';
        $this->model->title = 'Джизакская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Бухарская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 127;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Склад Хорезмская Область ';
        $this->model->title = 'Хорезмская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '<p>	Хорезмская область Описание</p>';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_30';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_31';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Склад город Самарканд_32';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_33';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Склад город Самарканд_34';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->place_adress_id = 3;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_35';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_36';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_37';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_38';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_39';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_40';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_41';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_42';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_43';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_44';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_45';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_46';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_47';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_48';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_49';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_50';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_51';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_52';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Makro sklad_53';
        $this->model->title = 'Makro sklad';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = '';
        $this->model->phone = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = 'primary';
        $this->model->place_adress_id = 139;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Склад Андижанская Область';
        $this->model->title = 'Андижанская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Андижанская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 6;
        $this->save();


        $this->model = new Ware();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Склад Бухарская  Область';
        $this->model->title = 'Бухарская область Подробное название';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->text = 'Бухарская область Описание';
        $this->model->phone = '+998909999999';
        $this->model->email = '';
        $this->model->photo = [
            '',
        ];
        $this->model->type = 'regional';
        $this->model->place_adress_id = 206;
        $this->save();


    }

}
