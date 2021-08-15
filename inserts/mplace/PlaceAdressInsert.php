<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceAdress;

class PlaceAdressInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceAdress();

        $this->model->id = 1589;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, Beruniy, 43 №336';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Beruniy';
        $this->model->home = '43';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1146;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан, Мед городок, дом 45, кв 5 №1146';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мед городок';
        $this->model->home = 'дом 45, кв 5';
        $this->model->orientation = 'Таш ми';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1032;
        $this->model->sort = null;
        $this->model->name = 'Булакбашинский район/Андижан/Узбекистан, Sohil, 34 №1032';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Sohil';
        $this->model->home = '34';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Зиёлилар 9, дом 8 , этаж 3, кв 54 №315';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Зиёлилар 9';
        $this->model->home = 'дом 8 , этаж 3, кв 54';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1555;
        $this->model->sort = null;
        $this->model->name = 'Кора Камиш 2/4/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1131;
        $this->model->sort = null;
        $this->model->name = 'Охангорон/Ташкент/Узбекистан, Mustaqillik, 23 №1131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Katta xirmon tepa, 41, 5, 86 №319';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Katta xirmon tepa';
        $this->model->home = '41, 5, 86';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1550;
        $this->model->sort = null;
        $this->model->name = 'Не задано, А. Навоий , дом 45, кв 501 №1550';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1024;
        $this->model->sort = null;
        $this->model->name = 'Мархаматский район/Андижан/Узбекистан, A.Navoiy, 23 №1024';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '23';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1027;
        $this->model->sort = null;
        $this->model->name = 'Асака/Андижан/Узбекистан, Mustaqillik, 54 №1027';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '54';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1025;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Алгоритм, 29 №1025';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Алгоритм';
        $this->model->home = '29';
        $this->model->orientation = 'ГАСТРОНОМ супермаркет';
        $this->model->postal_code = '';
        $this->model->place = 'Алгоритм Сити, Zargarlik Street, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1029;
        $this->model->sort = null;
        $this->model->name = 'Мархаматский район/Андижан/Узбекистан, Shaxriston, 45 №1029';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Shaxriston';
        $this->model->home = '45';
        $this->model->orientation = 'korzinka torgoviy centr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1148;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан, Бектимир ул, дом 45, кв 555 №1148';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Бектимир ул';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1603;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
        ];
        $this->model->place_region_id = 171;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1136;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан, 23 квартал, дом 45, кв 5 №1136';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '23 квартал';
        $this->model->home = 'дом 45, кв 5';
        $this->model->orientation = 'кафе грин';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1141;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан, А. Навоий , дом 45, кв 512 №1141';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 512';
        $this->model->orientation = 'Мега планет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1137;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан, А. Навоий  улица, дом 523 №1137';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий  улица';
        $this->model->home = 'дом 523';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1150;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан, ул Алишер навоий, дом 45, кв 555 №1150';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Алишер навоий';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1163;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан, Водник, Дом15 №1163';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Водник';
        $this->model->home = 'Дом15';
        $this->model->orientation = 'Круг рохат';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1159;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Кадешева, дом 5 №1159';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Кадешева';
        $this->model->home = 'дом 5';
        $this->model->orientation = 'Базар';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1168;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Кадешева улица, дом 522 №1168';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Кадешева улица';
        $this->model->home = 'дом 522';
        $this->model->orientation = 'Крестик';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1152;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, улица Ташкент, дом 45, кв 555 №1152';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'улица Ташкент';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1561;
        $this->model->sort = null;
        $this->model->name = 'Нуратинский район/Навои/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '218',
        ];
        $this->model->place_region_id = 218;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1149;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан, А. Норынов, дом 45, кв 555 №1149';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Норынов';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1162;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан, М.Улугбек улица, дом 5 кв 45 №1162';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'М.Улугбек улица';
        $this->model->home = 'дом 5 кв 45';
        $this->model->orientation = 'МВД';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1144;
        $this->model->sort = null;
        $this->model->name = 'Яккасарайский район/Ташкент/Узбекистан, А. Темура, дом 45, кв 530 №1144';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Темура';
        $this->model->home = 'дом 45, кв 530';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1156;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, Сергели 5, дом 526 №1156';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Сергели 5';
        $this->model->home = 'дом 526';
        $this->model->orientation = 'Машина базар';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1496;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан, A.Navoiy, 23 №1496';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '23';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1497;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, A.Navoiy, 23 №1497';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1499;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, Коракамиш 2/4, 19 №1499';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '19';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1214;
        $this->model->sort = null;
        $this->model->name = 'Шахриханский район/Андижан/Узбекистан, ,  №1214';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1034;
        $this->model->sort = null;
        $this->model->name = 'Миробод/Узбекистан, Beruniy, 8 №1034';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Beruniy';
        $this->model->home = '8';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '21212';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, Бобур, 52/5/2 №346';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Бобур';
        $this->model->home = '52/5/2';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, A.Navoiy, 3 №331';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '3';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1279;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1279';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1688;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1946;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 217;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1857;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1866;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1942;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1917;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 217;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1280;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1280';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Сухайл, 9 A №333';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Сухайл';
        $this->model->home = '9 A';
        $this->model->orientation = 'Университет ИНХА';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1026;
        $this->model->sort = null;
        $this->model->name = 'Караул/Ургенч/Узбекистан, A.Navoiy, 23 №1026';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1961;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1020;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан, Navnihol kochasi, 3 proyezd, 7 uy №1020';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '3 proyezd, 7 uy';
        $this->model->orientation = '';
        $this->model->postal_code = '100010';
        $this->model->place = 'Toshkent shahri, Mirzo Ulug\'bek tumani, Navnihol kochasi, 3 proyezd, 7 uy';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1142;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Кадешева , дом 45, кв 555 №1142';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Кадешева ';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Базар кадешева';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, мажнунтол, 87б дом №341';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'мажнунтол';
        $this->model->home = '87б дом';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Чиланзар, 65д, 1 №343';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Чиланзар';
        $this->model->home = '65д, 1';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.27393614529452',
                'lng' => '69.20373916625977',
                'address' => 'Chilonzor, Тошкент, Uzbekistan',
                'place_id' => 'ChIJPQKpRwaDrjgRoNDBkpqJodA',
                'user_entered_address' => '',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1186;
        $this->model->sort = null;
        $this->model->name = 'Яккасарайский район/Ташкент/Узбекистан, Башлык 552, дом 47 №1186';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Башлык 552';
        $this->model->home = 'дом 47';
        $this->model->orientation = 'Яккасарай тойхона';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1579;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1169;
        $this->model->sort = null;
        $this->model->name = 'город Бекабад/Ташкентская область/Узбекистан, Каримова А. , Дом 5 кв 485 №1169';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Каримова А. ';
        $this->model->home = 'Дом 5 кв 485';
        $this->model->orientation = 'центр города';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1057;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, Сергели 5, дом 526 №1057';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Сергели 5';
        $this->model->home = 'дом 526';
        $this->model->orientation = 'Машина базар';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1562;
        $this->model->sort = null;
        $this->model->name = 'Не задано,А. Навоий ,дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1604;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
        ];
        $this->model->place_region_id = 47;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Иззат, 87б дом №359';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Иззат';
        $this->model->home = '87б дом';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 363;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, минг урик , дом 5, этаж 1, №363';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'минг урик ';
        $this->model->home = 'дом 5, этаж 1,';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 364;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, Ibn Sino, 9 №364';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn Sino';
        $this->model->home = '9';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 964;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, Андижан, 24,1,1 №964';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Андижан';
        $this->model->home = '24,1,1';
        $this->model->orientation = 'Дом2';
        $this->model->postal_code = '134000';
        $this->model->place = 'Andijan, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1164;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, А. Навоий , дом 45, кв 501 №1164';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 374;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Rohat, 15 №374';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Rohat';
        $this->model->home = '15';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1182;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан, Квартал 5, дом 45, кв 555 №1182';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Квартал 5';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Мирабад, 38 №347';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мирабад';
        $this->model->home = '38';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.27716142963713',
                'lng' => '69.29308891296387',
                'address' => 'Kudus Str, Тошкент, Uzbekistan',
                'place_id' => 'ChIJibno6VP1rjgRNBjZPGPIyhg',
                'user_entered_address' => '',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1185;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, ул Навнихол, дом 45, кв 5 №1185';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Навнихол';
        $this->model->home = 'дом 45, кв 5';
        $this->model->orientation = 'Чимган кафе';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1023;
        $this->model->sort = null;
        $this->model->name = 'Миробод/Узбекистан, Mustaqillik, 43 №1023';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '43';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 368;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Oybek, Дом 45, 2 Этаж, 14 №368';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Oybek';
        $this->model->home = 'Дом 45, 2 Этаж, 14';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 461;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, shaxriston, 12 №461';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'shaxriston';
        $this->model->home = '12';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1138;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан, А. Навоий , дом 506 №1138';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 506';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1153;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, Ташкент  улица, дом 45, кв 501 №1153';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ташкент  улица';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Мега планет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1184;
        $this->model->sort = null;
        $this->model->name = 'Газалкент/Ташкент/Узбекистан, А. Навоий , дом 455 №1184';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 455';
        $this->model->orientation = 'автовокзал';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1151;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан, Шоира улица, дом 45, кв 400 №1151';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Шоира улица';
        $this->model->home = 'дом 45, кв 400';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1195;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан, Ibn sino, 12 №1195';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn sino';
        $this->model->home = '12';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1147;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан, Мукимий улица , квартаол 1 №1147';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мукимий улица ';
        $this->model->home = 'квартаол 1';
        $this->model->orientation = 'узбек фильм';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1161;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан, Квартал 30 , дом 789 №1161';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Квартал 30 ';
        $this->model->home = 'дом 789';
        $this->model->orientation = 'Алгоритм';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1191;
        $this->model->sort = null;
        $this->model->name = 'Газалкент/Ташкент/Узбекистан, Ibn sino, 12 №1191';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn sino';
        $this->model->home = '12';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1065;
        $this->model->sort = null;
        $this->model->name = 'Джизак/Узбекистан, ул И. Каримов, 12 дом, 58 кв №1065';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул И. Каримов';
        $this->model->home = '12 дом, 58 кв';
        $this->model->orientation = 'центр города';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1173;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, Ibn sino, 12 №1173';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn sino';
        $this->model->home = '12';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Кибрайский район/Ташкентская область/Узбекистан, Mustaqillikm ko\'chasi, 25, 3, 24 №144';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillikm ko\'chasi';
        $this->model->home = '25, 3, 24';
        $this->model->orientation = 'Navoiy bog\'i';
        $this->model->postal_code = '285674';
        $this->model->place = 'Shofirkon tumani, Uzbekistan';
        $this->model->location = [
            [
                'lat' => '40.53823184319133',
                'lng' => '64.04788965722652',
                'address' => 'Shafirkan District, Uzbekistan',
                'place_id' => 'ChIJDSvxbFwRWj8RZDZniSmIdD8',
                'user_entered_address' => 'Shofirkon',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1140;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан, ул Саракулька, дом 45 №1140';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Саракулька';
        $this->model->home = 'дом 45';
        $this->model->orientation = 'роддом 4';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 375;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Чиланзар, 145а, 1 №375';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Чиланзар';
        $this->model->home = '145а, 1';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.297357179230936',
                'lng' => '69.18720411786843',
                'address' => '28 В Foziltepa ko\'chasi, Тошкент 100138, Uzbekistan',
                'place_id' => 'ChIJ-VbRNfCKrjgRiaI0s8cZ0Xo',
                'user_entered_address' => '',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1570;
        $this->model->sort = null;
        $this->model->name = ',Yunusobod,46';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Yunusobod';
        $this->model->home = '46';
        $this->model->orientation = 'korzinka torgoviy centr';
        $this->model->postal_code = '100000';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2085;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2098;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 462;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, yunisabad, 25.5.6 №462';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'yunisabad';
        $this->model->home = '25.5.6';
        $this->model->orientation = 'Shifo nur';
        $this->model->postal_code = '10256487';
        $this->model->place = 'Tashkent';
        $this->model->location = [
            [
                'lat' => '41.30215483601233',
                'lng' => '69.24771551917249',
                'address' => '171 Furqat ko',
                'place_id' => 'ChIJB5FGUAKLrjgRJpePgGHdwD0',
                'user_entered_address' => 'yunusobod',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 443;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, ул Алишер навоий, 5 кв, дом 56 №443';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Алишер навоий';
        $this->model->home = '5 кв, дом 56';
        $this->model->orientation = 'Кафе Лук';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1154;
        $this->model->sort = null;
        $this->model->name = 'Яккасарайский район/Ташкент/Узбекистан, А. Навоий , дом 555 кв 5 №1154';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 555 кв 5';
        $this->model->orientation = 'Хокимият';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1183;
        $this->model->sort = null;
        $this->model->name = 'Газалкент/Ташкент/Узбекистан, А. Навоий , дом 455 №1183';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 455';
        $this->model->orientation = 'автовокзал';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 520;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, ул Афрасиёб, дом5, кв 78 №520';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Афрасиёб';
        $this->model->home = 'дом5, кв 78';
        $this->model->orientation = 'Базар ';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 735;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Tashkent, 24,1,1 №735';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Tashkent';
        $this->model->home = '24,1,1';
        $this->model->orientation = 'Дом2';
        $this->model->postal_code = '134000';
        $this->model->place = '129 Amir Temur Avenue, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1193;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, Ibn sino, 12 №1193';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn sino';
        $this->model->home = '12';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1563;
        $this->model->sort = null;
        $this->model->name = 'Янгибозор/Ташкент/Узбекистан,Коракамиш 2/4,23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '23';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 723;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, ул Алишер навоий, дом 5, кв 55 №723';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Алишер навоий';
        $this->model->home = 'дом 5, кв 55';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1189;
        $this->model->sort = null;
        $this->model->name = 'город Алмалык/Ташкентская область/Узбекистан, центр , дом 5 №1189';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'центр ';
        $this->model->home = 'дом 5';
        $this->model->orientation = 'Театр центральный';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1030;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Ок-тепа, 32 №1030';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ок-тепа';
        $this->model->home = '32';
        $this->model->orientation = 'lavash centre';
        $this->model->postal_code = '';
        $this->model->place = 'OQ-TEPA LAVASH, Lutfi Street, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1039;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Заргарлик, 56 №1039';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Заргарлик';
        $this->model->home = '56';
        $this->model->orientation = 'Ройсон';
        $this->model->postal_code = '';
        $this->model->place = 'Roison-Electronics Service Center, Sugalliota Street, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1028;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Гулистан, 55 №1028';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Гулистан';
        $this->model->home = '55';
        $this->model->orientation = 'Гулистон кафе';
        $this->model->postal_code = '';
        $this->model->place = 'Guliston ko\'chasi, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1036;
        $this->model->sort = null;
        $this->model->name = 'Алтынкульский район/Андижан/Узбекистан, Mustaqillik, 56 №1036';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '56';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1044;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, asaka, 76 №1044';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'asaka';
        $this->model->home = '76';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1196;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, выаы, ываы №1196';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'выаы';
        $this->model->home = 'ываы';
        $this->model->orientation = 'ываы';
        $this->model->postal_code = '0';
        $this->model->place = 'ыаыв';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1043;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан, zarafshon, 13 №1043';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'zarafshon';
        $this->model->home = '13';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1033;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Кушбеги, 14 №1033';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Кушбеги';
        $this->model->home = '14';
        $this->model->orientation = 'qushbegi';
        $this->model->postal_code = '';
        $this->model->place = 'улица Кушбеги, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1040;
        $this->model->sort = null;
        $this->model->name = 'Бекабад/Tashkent/Узбекистан, Bekobod, 34 №1040';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Bekobod';
        $this->model->home = '34';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1041;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Изза, 16 №1041';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Изза';
        $this->model->home = '16';
        $this->model->orientation = 'Метан заправка';
        $this->model->postal_code = '';
        $this->model->place = 'улица Изза, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1042;
        $this->model->sort = null;
        $this->model->name = 'Бухарский район/Бухара/Узбекистан, Qorakol, 65 №1042';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Qorakol';
        $this->model->home = '65';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1035;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, малая кальцевая , 5 №1035';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'малая кальцевая ';
        $this->model->home = '5';
        $this->model->orientation = 'кафе';
        $this->model->postal_code = '';
        $this->model->place = 'Малая кольцевая дорога, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1060;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан, Chinobod, Дом 45, Этаж 3, квартира 34 №1060';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Chinobod';
        $this->model->home = 'Дом 45, Этаж 3, квартира 34';
        $this->model->orientation = '';
        $this->model->postal_code = '110012';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.362482555844004',
                'lng' => '69.23113890299166',
                'address' => 'Universam, Тошкент, Uzbekistan',
                'place_id' => 'ChIJ96xIDFuMrjgRYWmDFXQuz_g',
                'user_entered_address' => '',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1061;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Salam, Дом 55 №1061';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Salam';
        $this->model->home = 'Дом 55';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1165;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, A.Navoiy, 45 №1165';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '45';
        $this->model->orientation = 'korzinka torgoviy centrtr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1170;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан, М.Улугбек 25, дом 45, кв 562 №1170';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'М.Улугбек 25';
        $this->model->home = 'дом 45, кв 562';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1172;
        $this->model->sort = null;
        $this->model->name = 'Охангорон/Ташкент/Узбекистан, НАбиева улица, дом 45, кв 501 №1172';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'НАбиева улица';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'центр города';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1129;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан, малая кальцевая , 56 №1129';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'малая кальцевая ';
        $this->model->home = '56';
        $this->model->orientation = 'кафе';
        $this->model->postal_code = '';
        $this->model->place = 'Азербайджанский культурный центр, Geydar Aliev Street, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1192;
        $this->model->sort = null;
        $this->model->name = 'Оккургон/Ташкент/Узбекистан, Ibn sino, 12 №1192';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn sino';
        $this->model->home = '12';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1076;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, А. Темура, 50 дом №1076';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Темура';
        $this->model->home = '50 дом';
        $this->model->orientation = 'Кафе СОЙ';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1613;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '325',
            'region_1' => '329',
        ];
        $this->model->place_region_id = 329;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1071;
        $this->model->sort = null;
        $this->model->name = 'Джизак/Узбекистан, ул. И Каримов, 22 дом , 58 кв №1071';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул. И Каримов';
        $this->model->home = '22 дом , 58 кв';
        $this->model->orientation = 'центр города';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1937;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1070;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, А. Навоий , 22 дом, 51 кв №1070';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = '22 дом, 51 кв';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1051;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан, А. Навоий , 22 дом, кв 51 №1051';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = '22 дом, кв 51';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1022;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, A.Navoiy, 23 №1022';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1187;
        $this->model->sort = null;
        $this->model->name = 'город Ангрен/Ташкентская область/Узбекистан, А. Навоий , дом 45, кв 500 №1187';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 500';
        $this->model->orientation = 'центр города';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1246;
        $this->model->sort = null;
        $this->model->name = 'Турткульский район/Республика Каракалпакстан/Узбекистан, ,  №1246';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1069;
        $this->model->sort = null;
        $this->model->name = 'Гулистанский район/Сырдарья/Узбекистан, Амир темура ул, 23 квартал №1069';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Амир темура ул';
        $this->model->home = '23 квартал';
        $this->model->orientation = 'Базар';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1068;
        $this->model->sort = null;
        $this->model->name = 'город Термез/Сурхандарья/Узбекистан, Термез улица, дом 56 №1068';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Термез улица';
        $this->model->home = 'дом 56';
        $this->model->orientation = 'центр города';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1079;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан, Мироншох улица, переулок - 6 дом 569 №1079';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мироншох улица';
        $this->model->home = 'переулок - 6 дом 569';
        $this->model->orientation = 'Супер маркет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1103;
        $this->model->sort = null;
        $this->model->name = 'Асака/Андижан/Узбекистан, test street , 24 dom  №1103';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'test street ';
        $this->model->home = '24 dom ';
        $this->model->orientation = 'orianter';
        $this->model->postal_code = '';
        $this->model->place = 'Вафливафли Лайт, Ulitsa Krasnaya, Krasnodar, Russia';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1077;
        $this->model->sort = null;
        $this->model->name = 'Джизак/Узбекистан, И. Каримов, микра район - 5 №1077';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'И. Каримов';
        $this->model->home = 'микра район - 5';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1078;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан, Мироншох улица, переулок - 6 , дом 589 №1078';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мироншох улица';
        $this->model->home = 'переулок - 6 , дом 589';
        $this->model->orientation = 'Супер маркет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1073;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан, Саракульская улица, дом 54 №1073';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Саракульская улица';
        $this->model->home = 'дом 54';
        $this->model->orientation = 'Роддом';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1064;
        $this->model->sort = null;
        $this->model->name = 'город Ургенч/Хорезм/Узбекистан, Ал Хоразмий, 9 микра район №1064';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Ал Хоразмий';
        $this->model->home = '9 микра район';
        $this->model->orientation = 'суд';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1564;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1120;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, beruniy 56, 69 квартиры №1120';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'beruniy 56';
        $this->model->home = '69 квартиры';
        $this->model->orientation = 'Kafe Beruniy';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1130;
        $this->model->sort = null;
        $this->model->name = 'Чиноз/Ташкент/Узбекистан, малая кальцевая , 56 №1130';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'малая кальцевая ';
        $this->model->home = '56';
        $this->model->orientation = 'кафе';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1111;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, test ulitsa, ibn sino 24 №1111';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'test ulitsa';
        $this->model->home = 'ibn sino 24';
        $this->model->orientation = 'registon';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1188;
        $this->model->sort = null;
        $this->model->name = 'Зангиатинский район/Ташкентская область/Узбекистан, Нурафшан, дом18 №1188';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Нурафшан';
        $this->model->home = 'дом18';
        $this->model->orientation = 'Зангиота зиёратгох';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1175;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан, Квартал 30, дом 78, кв 56 №1175';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Квартал 30';
        $this->model->home = 'дом 78, кв 56';
        $this->model->orientation = 'Авто мойка';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1119;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан, ibn sino 24, 45 квартиры №1119';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ibn sino 24';
        $this->model->home = '45 квартиры';
        $this->model->orientation = 'center Andijan';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1167;
        $this->model->sort = null;
        $this->model->name = 'город Гулистан/Сырдарья/Узбекистан, И. Каримов, микра район - 5 №1167';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'И. Каримов';
        $this->model->home = 'микра район - 5';
        $this->model->orientation = 'Рынок';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1124;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, чиланзар, 6а дом 6а №1124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'чиланзар';
        $this->model->home = '6а дом 6а';
        $this->model->orientation = 'базар';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1181;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан, квартал 5, дом 45, кв 562 №1181';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'квартал 5';
        $this->model->home = 'дом 45, кв 562';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1134;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан, Сергели 7, дом 45, кв 501 №1134';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Сергели 7';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Машина базар';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1498;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, A.Navoiy, 23 №1498';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1202;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан, Mustaqillik, 11 №1202';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'korzinka torgoviy centr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = [
            [
                'lat' => '41.30916952795574',
                'lng' => '69.28093978881836',
                'address' => '4 Istiqbol ko',
                'place_id' => 'ChIJ26B1hSmLrjgRDsv1hf3_ETs',
                'user_entered_address' => 'мустакиллик',
            ],
        ];
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1143;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Кадешева, дом 45, кв 555 №1143';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Кадешева';
        $this->model->home = 'дом 45, кв 555';
        $this->model->orientation = 'Базар Кадешева';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1689;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1222;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан, Shaxriston, 23 №1222';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Shaxriston';
        $this->model->home = '23';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1569;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан,AAAA,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = 'AAAA';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1588;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан,Yunusobod,46';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '370',
        ];
        $this->model->place_region_id = 370;
        $this->model->street = 'Yunusobod';
        $this->model->home = '46';
        $this->model->orientation = '';
        $this->model->postal_code = '100000';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1199;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, 123123, 8888 №1199';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '123123';
        $this->model->home = '8888';
        $this->model->orientation = '124124';
        $this->model->postal_code = '124124';
        $this->model->place = '124';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1200;
        $this->model->sort = null;
        $this->model->name = 'Назарбек/Ташкент/Узбекистан, Mustaqillik, 11 №1200';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1596;
        $this->model->sort = null;
        $this->model->name = 'Кора Камиш 2/4/Узбекистан,Navnihol kochasi,232 dom';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '392',
        ];
        $this->model->place_region_id = 392;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '232 dom';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1201;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, Mustaqillik, 11 №1201';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1701;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1194;
        $this->model->sort = null;
        $this->model->name = 'Назарбек/Ташкент/Узбекистан, qoraqamish, 4 №1194';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'qoraqamish';
        $this->model->home = '4';
        $this->model->orientation = 'makro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1157;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан, САракулька улица, дом 489 №1157';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'САракулька улица';
        $this->model->home = 'дом 489';
        $this->model->orientation = 'роддом 4 ';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1301;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1301';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1554;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '362',
        ];
        $this->model->place_region_id = 362;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = 'fsdf';
        $this->model->postal_code = '';
        $this->model->place = 'f';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1607;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан,Mustaqillik,76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '76';
        $this->model->orientation = 'metro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1560;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1245;
        $this->model->sort = null;
        $this->model->name = 'Турткульский район/Республика Каракалпакстан/Узбекистан, ,  №1245';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2099;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1247;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1247';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1248;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, У,  №1248';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'У';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1249;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1249';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1250;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВ,  №1250';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВ';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1251;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвы,  №1251';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвы';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1580;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан,Ibn Sino,55 dom 9kv';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '',
        ];
        $this->model->place_region_id = null;
        $this->model->street = 'Ibn Sino';
        $this->model->home = '55 dom 9kv';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1252;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыф,  №1252';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1253;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыфв,  №1253';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыфв';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1254;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыфвфы,  №1254';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыфвфы';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1255;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыфвфы ф,  №1255';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыфвфы ф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1256;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыфвфы фв,  №1256';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыфвфы фв';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1257;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыфвфы фвфывфывфы,  №1257';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыфвфы фвфывфывфы';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1258;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ФЫВфвыыфвфы фвфывфывфы,  №1258';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ФЫВфвыыфвфы фвфывфывфы';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1259;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1259';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1260;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1260';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1261;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1261';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1262;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1262';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1614;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан,Mustaqillik,23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '23';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1263;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1263';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1264;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1264';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1265;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1265';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1266;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1266';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1615;
        $this->model->sort = null;
        $this->model->name = 'Чиноз/Ташкент/Узбекистан,Mustaqillik,23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1267;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1267';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1581;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1268;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1268';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1269;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1269';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1270;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1270';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1271;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1271';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1272;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1272';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1273;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1273';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1274;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1274';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1275;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1275';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1276;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1276';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1277;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1277';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1278;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1278';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1717;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1943;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1281;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1281';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1282;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1282';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1283;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1283';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1302;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1302';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1284;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1284';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1285;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1285';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1303;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1303';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1286;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1286';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1287;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан, ,  №1287';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1304;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1304';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1305;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1305';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1608;
        $this->model->sort = null;
        $this->model->name = 'Чиноз/Ташкент/Узбекистан,фывфв,фывфывф';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'фывфв';
        $this->model->home = 'фывфывф';
        $this->model->orientation = 'фывфй';
        $this->model->postal_code = '1531';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1306;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывы,  №1306';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывы';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2100;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2101;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1293;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1293';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1307;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф,  №1307';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1294;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1294';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1295;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1295';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1308;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфв №1308';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфв';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1296;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1296';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1297;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1297';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1309;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфв №1309';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфв';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1298;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1298';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1299;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1299';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1310;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфв №1310';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфв';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1300;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ,  №1300';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1311;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1311';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1312;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1312';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фыв';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1537;
        $this->model->sort = null;
        $this->model->name = 'Кора Камиш 2/4/Узбекистан, ,  №1537';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '392',
        ];
        $this->model->place_region_id = 392;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1313;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфы';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1314;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1314';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1315;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1315';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1316;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1316';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1317;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1317';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1318;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1318';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1319;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1319';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1609;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1320;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1320';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = '213';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1321;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1321';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = '213';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1702;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1992;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1926;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1929;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1322;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1322';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фыв';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1139;
        $this->model->sort = null;
        $this->model->name = ',А. Навоий  улица,дом 45, кв 500';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий  улица';
        $this->model->home = 'дом 45, кв 500';
        $this->model->orientation = 'Машина базар';
        $this->model->postal_code = '100000';
        $this->model->place = 'ФЦВопФЦПВофцвопофцв';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1691;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1323;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1323';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфыв';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1567;
        $this->model->sort = null;
        $this->model->name = ',,дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе РЕгистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1495;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, Сухайл, 9 №1495';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Сухайл';
        $this->model->home = '9';
        $this->model->orientation = 'Университет ИНХА';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1289;
        $this->model->sort = null;
        $this->model->name = 'Нукусский район/Республика Каракалпакстан/Узбекистан, Мирзо Улугбек, 18 дом, 3 квартира №1289';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мирзо Улугбек';
        $this->model->home = '18 дом, 3 квартира';
        $this->model->orientation = 'Кафе ';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, шота руставели, дом 5, этаж 4б, кв 47 №320';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'шота руставели';
        $this->model->home = 'дом 5, этаж 4б, кв 47';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1503;
        $this->model->sort = null;
        $this->model->name = 'Чиноз/Ташкент/Узбекистан, dfhggfываыв, 1333 №1503';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'dfhggfываыв';
        $this->model->home = '1333';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1492;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкент/Узбекистан, Mustaqillik, 22 №1492';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '22';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1324;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1324';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Сухайл 8, 6а дом №344';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Сухайл 8';
        $this->model->home = '6а дом';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'Yunusobod-19, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, минг урик, 6а дом №324';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'минг урик';
        $this->model->home = '6а дом';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1325;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1325';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1215;
        $this->model->sort = null;
        $this->model->name = 'Багатский район/Хорезм/Узбекистан, Мирзо Улугбек, 18 дом, 3 квартира №1215';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Мирзо Улугбек';
        $this->model->home = '18 дом, 3 квартира';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1500;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан, Mustaqillik, 23 №1500';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '23';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1326;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1326';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1522;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан, Navnihol kochasi, 23 №1522';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1493;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан,Alisher Navoi ko`chasi,дом 66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Alisher Navoi ko`chasi';
        $this->model->home = 'дом 66';
        $this->model->orientation = 'Grand restoran';
        $this->model->postal_code = '1011101';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, Novza, 1212 №330';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Novza';
        $this->model->home = '1212';
        $this->model->orientation = 'фывапр';
        $this->model->postal_code = '78';
        $this->model->place = 'фывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1624;
        $this->model->sort = null;
        $this->model->name = ',цук,куцкуц';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = 'цук';
        $this->model->home = 'куцкуц';
        $this->model->orientation = 'прпар';
        $this->model->postal_code = '41651';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1583;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1519;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан, А. Навоий , дом 45, кв 501 №1519';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1526;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, А. Навоий , дом 45, кв 501 №1526';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1530;
        $this->model->sort = null;
        $this->model->name = 'Янгибозор/Ташкент/Узбекистан, ,  №1530';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'Yunusobod tumani, Ташкент, Узбекистан';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1531;
        $this->model->sort = null;
        $this->model->name = 'Газалкент/Ташкент/Узбекистан, , sadad №1531';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = 'sadad';
        $this->model->orientation = 'asdad';
        $this->model->postal_code = '100001';
        $this->model->place = 'Samarqand Darvoza, улица Самарканд Дарвоза, Ташкент, Узбекистан';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1568;
        $this->model->sort = null;
        $this->model->name = ',Mustaqillik,76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => [
                '57',
            ],
        ];
        $this->model->place_region_id = 1;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '76';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1327;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1327';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1515;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Коракамиш 2/4, 11 №1515';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '11';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1529;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан, А. Навоий , дом 45, кв 500 №1529';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 500';
        $this->model->orientation = 'Кафе Региста';
        $this->model->postal_code = '';
        $this->model->place = '4';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1520;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан, ул Монарх, дом 45, кв 501 №1520';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ул Монарх';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1523;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Mustaqillik, 11 №1523';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1527;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, Mustaqillik, 11 №1527';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1328;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1328';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1714;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1840;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1630;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '215',
        ];
        $this->model->place_region_id = 215;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1329;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1329';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1542;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан, u, 23 №1542';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 167;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = 'u';
        $this->model->home = '23';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1330;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1330';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1331;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1331';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1511;
        $this->model->sort = null;
        $this->model->name = 'Нукусский район/Республика Каракалпакстан/Узбекистан, аываыв, ываыва №1511';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'аываыв';
        $this->model->home = 'ываыва';
        $this->model->orientation = 'ывывывывывыв';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1332;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1332';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1333;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1333';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1334;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1334';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1335;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1335';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1336;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1336';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1718;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1627;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1337;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1337';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1338;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1338';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1339;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1339';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1340;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1340';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1341;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1341';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1342;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1342';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1343;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1343';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1344;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1344';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1345;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1345';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1346;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1346';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1347;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1347';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1348;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1348';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1349;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1349';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1350;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1350';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1351;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1351';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1352;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1352';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1353;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1353';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1751;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1706;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 109;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1798;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1354;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1354';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1355;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1355';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1356;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1356';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1357;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1357';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1358;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1358';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1359;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1359';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1360;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1360';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1361;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1361';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1362;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1362';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1363;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1363';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1364;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1364';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1365;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1365';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1658;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '214',
        ];
        $this->model->place_region_id = 214;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1366;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1366';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1367;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1367';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1368;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1368';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1369;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1369';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1600;
        $this->model->sort = null;
        $this->model->name = ',А. Навоий ,дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Мега планет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1370;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1370';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1566;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан,Yunusobod,46';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '370',
        ];
        $this->model->place_region_id = 370;
        $this->model->street = 'Yunusobod';
        $this->model->home = '46';
        $this->model->orientation = 'korzinka torgoviy centr';
        $this->model->postal_code = '100000';
        $this->model->place = 'Юнусабад';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1371;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1371';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1373;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1373';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1374;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1374';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1375;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1375';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1376;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1376';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1377;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1377';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1378;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1378';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1379;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1379';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1380;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1380';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1715;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1965;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1381;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1381';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1382;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1382';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1383;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1383';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1384;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1384';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1385;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1385';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'фывфывфы';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1386;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1386';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = 'фывфывфы';
        $this->model->postal_code = '213123';
        $this->model->place = 'Tashkent';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1611;
        $this->model->sort = null;
        $this->model->name = 'Джизак/Узбекистан,,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '190',
        ];
        $this->model->place_region_id = 190;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1601;
        $this->model->sort = null;
        $this->model->name = ',,';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1462;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ,  №1462';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1463;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф,  №1463';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1464;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф,  №1464';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1465;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф,  №1465';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1466;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1466';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1467;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1467';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1468;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1468';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1469;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1469';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1470;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1470';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1471;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1471';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1472;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1472';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1473;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1473';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1474;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1474';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1475;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1475';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1476;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1476';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1477;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1477';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1478;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1478';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1479;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1479';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1480;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1480';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1481;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1481';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1482;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1482';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1483;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1483';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1484;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, ыфвфывыф, вфывыфвыфвфы №1484';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ыфвфывыф';
        $this->model->home = 'вфывыфвыфвфы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1176;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан, , 888 №1176';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '888';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1623;
        $this->model->sort = null;
        $this->model->name = ',Navnihol kochasi,23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '23';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '100000';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1719;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 55;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1800;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1625;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан | Shaxriston | 12 дом ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = 'Shaxriston';
        $this->model->home = '12 дом ';
        $this->model->orientation = 'Ориентир';
        $this->model->postal_code = '106565';
        $this->model->place = 'Вместе в месте  ';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1626;
        $this->model->sort = null;
        $this->model->name = 'Асака/Андижан/Узбекистан | Коракамиш 2/4 | 76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '120',
        ];
        $this->model->place_region_id = 120;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '76';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1743;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'Yturria, TX, USAas';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1836;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1692;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1720;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1782;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1723;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1656;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1693;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1632;
        $this->model->sort = null;
        $this->model->name = 'Зааминский район/Джизак/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '190',
        ];
        $this->model->place_region_id = 190;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1699;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Ibn sino | 13';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Ibn sino';
        $this->model->home = '13';
        $this->model->orientation = 'Metro do\'stlik';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1766;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1724;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1778;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1725;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1698;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан | Mustaqillik | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1697;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан | Ibn sino | 15-uy';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '362',
        ];
        $this->model->place_region_id = 362;
        $this->model->street = 'Ibn sino';
        $this->model->home = '15-uy';
        $this->model->orientation = 'makro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1690;
        $this->model->sort = null;
        $this->model->name = 'Дустликский район/Джизак/Узбекистан | нррп | раправ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '189',
        ];
        $this->model->place_region_id = 189;
        $this->model->street = 'нррп';
        $this->model->home = 'раправ';
        $this->model->orientation = 'длоло';
        $this->model->postal_code = '14541';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1694;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1713;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан | 432323534253425 | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = '432323534253425';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1629;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1695;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан | Ibn sino | Дом  24 ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Ibn sino';
        $this->model->home = 'Дом  24 ';
        $this->model->orientation = 'Yangi Hayot';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1696;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан | акуцак | цукц';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '363',
        ];
        $this->model->place_region_id = 363;
        $this->model->street = 'акуцак';
        $this->model->home = 'цукц';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1654;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '216',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1684;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1685;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1726;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан | sadfsadf | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
        ];
        $this->model->place_region_id = 171;
        $this->model->street = 'sadfsadf';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1704;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '214',
        ];
        $this->model->place_region_id = 214;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1703;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан | еннннннннн | еееееен';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '363',
        ];
        $this->model->place_region_id = 363;
        $this->model->street = 'еннннннннн';
        $this->model->home = 'еееееен';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1700;
        $this->model->sort = null;
        $this->model->name = ' | qoraqamish | 65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'qoraqamish';
        $this->model->home = '65';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1660;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | Коракамиш 2/4 | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1686;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | апра | парар';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'апра';
        $this->model->home = 'парар';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1666;
        $this->model->sort = null;
        $this->model->name = 'Бухарский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '173',
        ];
        $this->model->place_region_id = 173;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1687;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1681;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | Mustaqillik | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1645;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан |  | wqww';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '215',
        ];
        $this->model->place_region_id = 215;
        $this->model->street = '';
        $this->model->home = 'wqww';
        $this->model->orientation = 'wwwq';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1663;
        $this->model->sort = null;
        $this->model->name = 'Канимехский район/Навои/Узбекистан | fdsdf | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '214',
        ];
        $this->model->place_region_id = 214;
        $this->model->street = 'fdsdf';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1662;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1682;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | Mustaqillik | 23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '23';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1683;
        $this->model->sort = null;
        $this->model->name = 'Вабкентский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '174',
        ];
        $this->model->place_region_id = 174;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1709;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан | 131313 | 1313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '216',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = '131313';
        $this->model->home = '1313';
        $this->model->orientation = '131313';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1710;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1667;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | Mustaqillik | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1711;
        $this->model->sort = null;
        $this->model->name = 'Асака/Андижан/Узбекистан | 4234234 | 234dfasdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '120',
        ];
        $this->model->place_region_id = 120;
        $this->model->street = '4234234';
        $this->model->home = '234dfasdf';
        $this->model->orientation = 'asdfasdf';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1807;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан |  | fsdasdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = '';
        $this->model->home = 'fsdasdf';
        $this->model->orientation = 'sdfaf';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1849;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1938;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1787;
        $this->model->sort = null;
        $this->model->name = 'Бухарский район/Бухара/Узбекистан | Ibn sino | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '173',
        ];
        $this->model->place_region_id = 173;
        $this->model->street = 'Ibn sino';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1762;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан | asaka | 33';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = 'asaka';
        $this->model->home = '33';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1707;
        $this->model->sort = null;
        $this->model->name = 'город Зарафшан/Навои/Узбекистан |  | ы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = '';
        $this->model->home = 'ы';
        $this->model->orientation = 'ы';
        $this->model->postal_code = '123';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1919;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1818;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1740;
        $this->model->sort = null;
        $this->model->name = ' | 1313 | 13113';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '1313';
        $this->model->home = '13113';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1721;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1748;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1871;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан | улица/пр | 23,3,43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'улица/пр';
        $this->model->home = '23,3,43';
        $this->model->orientation = 'Mediapark';
        $this->model->postal_code = '0';
        $this->model->place = 'Shahrisabz, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1827;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1716;
        $this->model->sort = null;
        $this->model->name = 'Алтынкульский район/Андижан/Узбекистан | adfasdf | ewrwerweradfasdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '',
        ];
        $this->model->place_region_id = null;
        $this->model->street = 'adfasdf';
        $this->model->home = 'ewrwerweradfasdf';
        $this->model->orientation = 'weradfaf';
        $this->model->postal_code = '234234';
        $this->model->place = 'adf';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1744;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yunusobot';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1815;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан |  | sdfsf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '216',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = '';
        $this->model->home = 'sdfsf';
        $this->model->orientation = 'sfdsdf';
        $this->model->postal_code = '213123';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1712;
        $this->model->sort = null;
        $this->model->name = 'Балыкчинский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '155',
        ];
        $this->model->place_region_id = 155;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = 'ыфвафыва';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1879;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | Shaxriston | 45';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'Shaxriston';
        $this->model->home = '45';
        $this->model->orientation = 'metro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1797;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1931;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1754;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1833;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан | мустакиллик | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = 'мустакиллик';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1760;
        $this->model->sort = null;
        $this->model->name = 'Галляаральский район/Джизак/Узбекистан | Mustaqillik | 21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '188',
        ];
        $this->model->place_region_id = 188;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '21';
        $this->model->orientation = 'Metro do\'stlik';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1757;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '363',
        ];
        $this->model->place_region_id = 363;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1733;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = 'asdfasdf';
        $this->model->postal_code = '0';
        $this->model->place = 'fdsfasdf';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1874;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан | улица/пр | 23,3,43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'улица/пр';
        $this->model->home = '23,3,43';
        $this->model->orientation = 'Mediapark';
        $this->model->postal_code = '0';
        $this->model->place = 'Shahrisabz, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1736;
        $this->model->sort = null;
        $this->model->name = 'Бухарский район/Бухара/Узбекистан |  | 12';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '173',
        ];
        $this->model->place_region_id = 173;
        $this->model->street = '';
        $this->model->home = '12';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1793;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | 12 | 12';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = '12';
        $this->model->home = '12';
        $this->model->orientation = '12';
        $this->model->postal_code = '12';
        $this->model->place = '12';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1837;
        $this->model->sort = null;
        $this->model->name = ' | saa | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'saa';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1884;
        $this->model->sort = null;
        $this->model->name = 'Тойтепа/Ташкент/Узбекистан | A.Navoiy | 66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '374',
        ];
        $this->model->place_region_id = 374;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '66';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1767;
        $this->model->sort = null;
        $this->model->name = ' | Navnihol kochasi | 19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '19';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '8988787';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1779;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1830;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан | ывфа | 8ш7е';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = 'ывфа';
        $this->model->home = '8ш7е';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1783;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1785;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1888;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 109;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1801;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1804;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1877;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Shaxriston | 545';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Shaxriston';
        $this->model->home = '545';
        $this->model->orientation = 'metro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1813;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | ьгы | 1212';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'ьгы';
        $this->model->home = '1212';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1844;
        $this->model->sort = null;
        $this->model->name = 'Джизак/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
        ];
        $this->model->place_region_id = 185;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yuu';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1875;
        $this->model->sort = null;
        $this->model->name = 'Кора Камиш 2/4/Узбекистан | Mustaqillik | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '392',
        ];
        $this->model->place_region_id = 392;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '11';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1810;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1881;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | A.Navoiy | 98';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '98';
        $this->model->orientation = 'korzinka torgoviy centr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1788;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1819;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1835;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1828;
        $this->model->sort = null;
        $this->model->name = ' | fdssfd | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'fdssfd';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1708;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан | fdssfd | fsdfsdsdafdsffds';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '215',
        ];
        $this->model->place_region_id = 215;
        $this->model->street = 'fdssfd';
        $this->model->home = 'fsdfsdsdafdsffds';
        $this->model->orientation = 'asd';
        $this->model->postal_code = '23434';
        $this->model->place = 'sfa';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1739;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 109;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1811;
        $this->model->sort = null;
        $this->model->name = 'Зааминский район/Джизак/Узбекистан | fdssfd | sdfsf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '190',
        ];
        $this->model->place_region_id = 190;
        $this->model->street = 'fdssfd';
        $this->model->home = 'sdfsf';
        $this->model->orientation = 'wer';
        $this->model->postal_code = '23423432';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1749;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1745;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'chorsu';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1784;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1816;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1752;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан | 12 | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '',
        ];
        $this->model->place_region_id = null;
        $this->model->street = '12';
        $this->model->home = '';
        $this->model->orientation = '123';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1796;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '362',
        ];
        $this->model->place_region_id = 362;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе РЕгистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1737;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = 'kafe';
        $this->model->postal_code = '222222';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1763;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1764;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1734;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан |  | asfsadfsdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '214',
        ];
        $this->model->place_region_id = 214;
        $this->model->street = '';
        $this->model->home = 'asfsadfsdf';
        $this->model->orientation = 'asdfasdf';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1838;
        $this->model->sort = null;
        $this->model->name = ' | saa | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'saa';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1870;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | улица/пр | 23,3,43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'улица/пр';
        $this->model->home = '23,3,43';
        $this->model->orientation = 'Mediapark';
        $this->model->postal_code = '0';
        $this->model->place = 'Sergeli Moshina Bozor, Tashkent, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1842;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
        ];
        $this->model->place_region_id = 50;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1755;
        $this->model->sort = null;
        $this->model->name = 'Булакбашинский район/Андижан/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '157',
        ];
        $this->model->place_region_id = 157;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1932;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1197;
        $this->model->sort = null;
        $this->model->name = ' | ваы | ваы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'ваы';
        $this->model->home = 'ваы';
        $this->model->orientation = 'выаы';
        $this->model->postal_code = '0';
        $this->model->place = 'ываыва';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1852;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1848;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '154',
        ];
        $this->model->place_region_id = 154;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1802;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1854;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1776;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1780;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1855;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1858;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1850;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | Mustaqillik | 4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '4';
        $this->model->orientation = 'Kafe';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1831;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1786;
        $this->model->sort = null;
        $this->model->name = 'Бухарский район/Бухара/Узбекистан |  | sdfsf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '173',
        ];
        $this->model->place_region_id = 173;
        $this->model->street = '';
        $this->model->home = 'sdfsf';
        $this->model->orientation = 'sfdsdf';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1805;
        $this->model->sort = null;
        $this->model->name = 'Алатский район/Бухара/Узбекистан |  | fdgdfgfd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '172',
        ];
        $this->model->place_region_id = 172;
        $this->model->street = '';
        $this->model->home = 'fdgdfgfd';
        $this->model->orientation = '345435';
        $this->model->postal_code = '345345';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1860;
        $this->model->sort = null;
        $this->model->name = ' | Mustaqillik | 65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '65';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1808;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1758;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1878;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | Navnihol kochasi | 76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '76';
        $this->model->orientation = 'metro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1861;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1872;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | A.Navoiy | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '11';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1847;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | 42341241224 | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '42341241224';
        $this->model->home = '';
        $this->model->orientation = '124';
        $this->model->postal_code = '';
        $this->model->place = '124';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1794;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '371',
        ];
        $this->model->place_region_id = 371;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1834;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | Мирзо Улугбек | 18 дом, 3 квартира';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = 'Мирзо Улугбек';
        $this->model->home = '18 дом, 3 квартира';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1864;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1867;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1868;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1882;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1845;
        $this->model->sort = null;
        $this->model->name = 'Кора Камиш 2/4/Узбекистан | 131 | 13113';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '392',
        ];
        $this->model->place_region_id = 392;
        $this->model->street = '131';
        $this->model->home = '13113';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1862;
        $this->model->sort = null;
        $this->model->name = ' | Mustaqillik | 76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '76';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'ыв';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1869;
        $this->model->sort = null;
        $this->model->name = 'город Каган/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '',
        ];
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1705;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1732;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1761;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1789;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1817;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1790;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1851;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1820;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1873;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1853;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1939;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1856;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1859;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1742;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан | qoraqamish | 21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = 'qoraqamish';
        $this->model->home = '21';
        $this->model->orientation = 'makro';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1746;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yu';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1791;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | ыфав | ыфав';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'ыфав';
        $this->model->home = 'ыфав';
        $this->model->orientation = 'фыаыфваыфва';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1750;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1735;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1832;
        $this->model->sort = null;
        $this->model->name = 'Галляаральский район/Джизак/Узбекистан | проп | авыаы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '188',
        ];
        $this->model->place_region_id = 188;
        $this->model->street = 'проп';
        $this->model->home = 'авыаы';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1722;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан | asdfaadffsd | 23423423';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = 'asdfaadffsd';
        $this->model->home = '23423423';
        $this->model->orientation = 'asdfsadasdf';
        $this->model->postal_code = '234';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1727;
        $this->model->sort = null;
        $this->model->name = 'Алтынкульский район/Андижан/Узбекистан | 131313131 | 1313131313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '152',
        ];
        $this->model->place_region_id = 152;
        $this->model->street = '131313131';
        $this->model->home = '1313131313';
        $this->model->orientation = '13131313';
        $this->model->postal_code = '13';
        $this->model->place = '13';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1765;
        $this->model->sort = null;
        $this->model->name = 'Вабкентский район/Бухара/Узбекистан | A.Navoiy | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '174',
        ];
        $this->model->place_region_id = 174;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '11';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '8988787';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1839;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1863;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1738;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Mustaqillik | 22';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '22';
        $this->model->orientation = 'Metro do\'stlik';
        $this->model->postal_code = '666666';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1753;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1756;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1728;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | ыфваыфаыфваыфафыфыаваыфвфыа | аыфваыфваыфаыыфвафаыыфыафыавыфаыфваыфваваывфафва';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'ыфваыфаыфваыфафыфыаваыфвфыа';
        $this->model->home = 'аыфваыфваыфаыыфвафаыыфыафыавыфаыфваыфваваывфафва';
        $this->model->orientation = 'ыфваыфвыфааыаыфвафыфва';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1759;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1777;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1880;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан | Navnihol kochasi | 454';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '373',
        ];
        $this->model->place_region_id = 373;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '454';
        $this->model->orientation = 'korzinka torgoviy centr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1781;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1823;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1843;
        $this->model->sort = null;
        $this->model->name = 'Галляаральский район/Джизак/Узбекистан | нихол | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '188',
        ];
        $this->model->place_region_id = 188;
        $this->model->street = 'нихол';
        $this->model->home = '11';
        $this->model->orientation = 'кафе';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1821;
        $this->model->sort = null;
        $this->model->name = ' | 1313 | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 58;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '216',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = '1313';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1795;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | 12 | 1212';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = '12';
        $this->model->home = '1212';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1799;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1803;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1806;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1809;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1729;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан | ваыфваыфваывфаыфва | ыфвафыфыавыфываыфвафав';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = 'ваыфваыфваывфаыфва';
        $this->model->home = 'ыфвафыфыавыфываыфвафав';
        $this->model->orientation = 'ыфаыфваыыфаыфвафва';
        $this->model->postal_code = '0';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1812;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1876;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | A.Navoiy | 76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '76';
        $this->model->orientation = 'Teatr';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1822;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1824;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = 'yunusobot';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1865;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан | Mustaqillik | 8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '8';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1825;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1814;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 109;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1826;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1829;
        $this->model->sort = null;
        $this->model->name = 'Балыкчинский район/Андижан/Узбекистан |  | Дом  24 ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '154',
        ];
        $this->model->place_region_id = 154;
        $this->model->street = '';
        $this->model->home = 'Дом  24 ';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1940;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1885;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан | A.Navoiy | 90';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '362',
        ];
        $this->model->place_region_id = 362;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '90';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1947;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '152',
        ];
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = 'Нуратинский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1933;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1941;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1886;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан | asaka | 78';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '362',
        ];
        $this->model->place_region_id = 362;
        $this->model->street = 'asaka';
        $this->model->home = '78';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1916;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1912;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 217;
        $this->model->region_form = [
            'region_0' => '403',
        ];
        $this->model->place_region_id = 403;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1887;
        $this->model->sort = null;
        $this->model->name = 'Олмалик/Ташкент/Узбекистан | Shaxriston | 88';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '381',
        ];
        $this->model->place_region_id = 381;
        $this->model->street = 'Shaxriston';
        $this->model->home = '88';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2034;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1925;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1889;
        $this->model->sort = null;
        $this->model->name = 'Оккургон/Ташкент/Узбекистан | Mustaqillik | 56';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '385',
        ];
        $this->model->place_region_id = 385;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '56';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1928;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1934;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1893;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан | улица/пр | 23,3,43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'улица/пр';
        $this->model->home = '23,3,43';
        $this->model->orientation = 'Mediapark';
        $this->model->postal_code = '0';
        $this->model->place = 'Shahrisabz, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1883;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан | Shaxriston | 66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = 'Shaxriston';
        $this->model->home = '66';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1892;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан | A.Navoiy | 99';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '99';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1935;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1966;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1968;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1970;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1945;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1918;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1927;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = [
            'region_0' => '405',
        ];
        $this->model->place_region_id = 405;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1909;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан | улица/пр | 23,3,43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'улица/пр';
        $this->model->home = '23,3,43';
        $this->model->orientation = 'Mediapark';
        $this->model->postal_code = '0';
        $this->model->place = 'Shahrisabz, Uzbekistan';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1930;
        $this->model->sort = null;
        $this->model->name = ' |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2008;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2012;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1944;
        $this->model->sort = null;
        $this->model->name = 'Республика Каракалпакстан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '339',
            'region_1' => '341',
        ];
        $this->model->place_region_id = 341;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2014;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 55;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1990;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 55;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2016;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1964;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Mustaqillik | 23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '23';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2018;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1967;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2021;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1963;
        $this->model->sort = null;
        $this->model->name = 'Яккасарайский район/Ташкент/Узбекистан | Mustaqillik | 34';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '365',
        ];
        $this->model->place_region_id = 365;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '34';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1969;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1952;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1962;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2003;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2004;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1948;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2025;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1949;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1936;
        $this->model->sort = null;
        $this->model->name = 'город Каган/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = 'sdf';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1950;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1951;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '392',
        ];
        $this->model->place_region_id = 392;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1971;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1953;
        $this->model->sort = null;
        $this->model->name = 'Кора Камиш 2/4/Узбекистан | Mustaqillik | 44';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
            'region_2' => '392',
        ];
        $this->model->place_region_id = 392;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '44';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1972;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1956;
        $this->model->sort = null;
        $this->model->name = 'Янгибозор/Ташкент/Узбекистан | Shaxriston | 55';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '376',
        ];
        $this->model->place_region_id = 376;
        $this->model->street = 'Shaxriston';
        $this->model->home = '55';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1975;
        $this->model->sort = null;
        $this->model->name = 'Шафирканский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1954;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Shaxriston | 23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Shaxriston';
        $this->model->home = '23';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1974;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1976;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1955;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Navnihol kochasi | 67';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '67';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1977;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1978;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1979;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1980;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1957;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан | asaka | 66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '363',
        ];
        $this->model->place_region_id = 363;
        $this->model->street = 'asaka';
        $this->model->home = '66';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1958;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан | Mustaqillik | 89';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '363',
        ];
        $this->model->place_region_id = 363;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '89';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1982;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | A.Navoiy | 88';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '88';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1959;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | A.Navoiy | 12';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '12';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1983;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Shaxriston | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Shaxriston';
        $this->model->home = '11';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1960;
        $this->model->sort = null;
        $this->model->name = 'Тойтепа/Ташкент/Узбекистан | asaka | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '374',
        ];
        $this->model->place_region_id = 374;
        $this->model->street = 'asaka';
        $this->model->home = '11';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1986;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1987;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1985;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан | asaka | 12';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '371',
        ];
        $this->model->place_region_id = 371;
        $this->model->street = 'asaka';
        $this->model->home = '12';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2006;
        $this->model->sort = null;
        $this->model->name = 'город Бухара/Бухара/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '183',
        ];
        $this->model->place_region_id = 183;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1989;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2009;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1998;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | A.Navoiy | 44';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '44';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1996;
        $this->model->sort = null;
        $this->model->name = 'Асакинский район/Андижан/Узбекистан |  | 215';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '154',
        ];
        $this->model->place_region_id = 154;
        $this->model->street = '';
        $this->model->home = '215';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2026;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан | Mustaqillik | 43';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '371',
        ];
        $this->model->place_region_id = 371;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '43';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1993;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан | A.Navoiy | 22';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '373',
        ];
        $this->model->place_region_id = 373;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '22';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2011;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 109;
        $this->model->region_form = [
            'region_0' => '50',
        ];
        $this->model->place_region_id = 50;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2027;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | Navnihol kochasi | 23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '23';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2019;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2013;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2029;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан | Коракамиш 2/4 | 89';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '362',
        ];
        $this->model->place_region_id = 362;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '89';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2015;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2017;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2028;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан | Mustaqillik | 19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '363',
        ];
        $this->model->place_region_id = 363;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '19';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2030;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан | Mustaqillik | 66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '371',
        ];
        $this->model->place_region_id = 371;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '66';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2001;
        $this->model->sort = null;
        $this->model->name = 'город Нукус/Республика Каракалпакстан/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '339',
            'region_1' => '356',
        ];
        $this->model->place_region_id = 356;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1995;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан | Navnihol kochasi | 78';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '371',
        ];
        $this->model->place_region_id = 371;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '78';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2010;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1997;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | Shaxriston | 54';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'Shaxriston';
        $this->model->home = '54';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1981;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан | Mustaqillik | 55';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '55';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2020;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1984;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | Navnihol kochasi | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '11';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1994;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '140100';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2000;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан | Navnihol kochasi | 54';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = 'Navnihol kochasi';
        $this->model->home = '54';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1999;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | asaka | 09';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'asaka';
        $this->model->home = '09';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2002;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2005;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1991;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан | Коракамиш 2/4 | 78';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '370',
        ];
        $this->model->place_region_id = 370;
        $this->model->street = 'Коракамиш 2/4';
        $this->model->home = '78';
        $this->model->orientation = 'Мега планет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 1988;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | Сергели ул | 13';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = 'Сергели ул';
        $this->model->home = '13';
        $this->model->orientation = 'bowling';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2007;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
        ];
        $this->model->place_region_id = 50;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2022;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | A.Navoiy | 45';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'A.Navoiy';
        $this->model->home = '45';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2024;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан | Shaxriston | 44';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = 'Shaxriston';
        $this->model->home = '44';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2104;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2023;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2038;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2035;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе РЕгистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2050;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2103;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '',
        ];
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2045;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | Mustaqillik | 3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '3';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2040;
        $this->model->sort = null;
        $this->model->name = 'Асакинский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 109;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2052;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2054;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2056;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2032;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2049;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '154',
        ];
        $this->model->place_region_id = 154;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2058;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2059;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2105;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2106;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан | 13 | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '216',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = '13';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2109;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2033;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | mustaqillik | 34';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = 'mustaqillik';
        $this->model->home = '34';
        $this->model->orientation = 'Кафе Регистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2036;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2051;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
        ];
        $this->model->place_region_id = 171;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2046;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан | Mustaqillik | 44';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '361',
        ];
        $this->model->place_region_id = 361;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '44';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2067;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2068;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
        ];
        $this->model->place_region_id = 57;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2055;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2057;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2069;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2070;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2071;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2053;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан | аывф | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '153',
        ];
        $this->model->place_region_id = 153;
        $this->model->street = 'аывф';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2060;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2061;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2062;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2072;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2073;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2074;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2041;
        $this->model->sort = null;
        $this->model->name = 'Шафирканский район/Бухара/Узбекистан | Mustaqillik | 19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = 'Mustaqillik';
        $this->model->home = '19';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2063;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 55;
        $this->model->region_form = [
            'region_0' => '400',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2078;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2076;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2064;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '357',
        ];
        $this->model->place_region_id = 357;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2077;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = 'ыфваывфыфваыфваф';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2043;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2042;
        $this->model->sort = null;
        $this->model->name = 'Шахриханский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2039;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан |  | sadfsadfsafsfdsfdassasafsadfdfadfas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '360',
        ];
        $this->model->place_region_id = 360;
        $this->model->street = '';
        $this->model->home = 'sadfsadfsafsfdsfdassasafsadfdfadfas';
        $this->model->orientation = 'sfdgsafsadfsdgdsgsd';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2079;
        $this->model->sort = null;
        $this->model->name = 'Вабкентский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2065;
        $this->model->sort = null;
        $this->model->name = 'Асакинский район/Андижан/Узбекистан | 1313 | 1313131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '152',
        ];
        $this->model->place_region_id = 152;
        $this->model->street = '1313';
        $this->model->home = '1313131';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2047;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2031;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан | А. Навоий  | 55 дом кв 15';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '366',
        ];
        $this->model->place_region_id = 366;
        $this->model->street = 'А. Навоий ';
        $this->model->home = '55 дом кв 15';
        $this->model->orientation = 'Мега планет';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2080;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '358',
        ];
        $this->model->place_region_id = 358;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2044;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '216',
        ];
        $this->model->place_region_id = 216;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2082;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '215',
        ];
        $this->model->place_region_id = 215;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2066;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '174',
        ];
        $this->model->place_region_id = 174;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2083;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '217',
        ];
        $this->model->place_region_id = 217;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2081;
        $this->model->sort = null;
        $this->model->name = 'Вабкентский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 58;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '174',
        ];
        $this->model->place_region_id = 174;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2084;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2086;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2087;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2088;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2089;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
        ];
        $this->model->place_region_id = 171;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2091;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2090;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2092;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2093;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2094;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '57',
            'region_1' => '359',
        ];
        $this->model->place_region_id = 359;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2095;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2097;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2102;
        $this->model->sort = null;
        $this->model->name = 'Избасканский район/Андижан/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '176',
        ];
        $this->model->place_region_id = 176;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 366;
        $this->model->sort = null;
        $this->model->name = ' | Algaritm | 14, 2, 4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 13131;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = 'Algaritm';
        $this->model->home = '14, 2, 4';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2107;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2108;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '50',
            'region_1' => '215',
        ];
        $this->model->place_region_id = 215;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2048;
        $this->model->sort = null;
        $this->model->name = 'Асакинский район/Андижан/Узбекистан | А. Навоий  | дом 45, кв 501';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '185',
            'region_1' => '154',
        ];
        $this->model->place_region_id = 154;
        $this->model->street = 'А. Навоий ';
        $this->model->home = 'дом 45, кв 501';
        $this->model->orientation = 'Кафе РЕгистан';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2096;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = 'sadf';
        $this->model->postal_code = '';
        $this->model->place = 'Yunusobod tumani, Ташкент, Узбекистан';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2110;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан | navoiy | 11';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '47',
            'region_1' => '152',
        ];
        $this->model->place_region_id = 152;
        $this->model->street = 'navoiy';
        $this->model->home = '11';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2112;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан | 11111313 | asdfsdfasaf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = '11111313';
        $this->model->home = 'asdfsdfasaf';
        $this->model->orientation = '';
        $this->model->postal_code = '0';
        $this->model->place = 'sadfsdaf';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2111;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '175',
        ];
        $this->model->place_region_id = 175;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2113;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2114;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->region_form = "";
        $this->model->place_region_id = null;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2115;
        $this->model->sort = null;
        $this->model->name = 'Вабкентский район/Бухара/Узбекистан |  | ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->region_form = [
            'region_0' => '171',
            'region_1' => '174',
        ];
        $this->model->place_region_id = 174;
        $this->model->street = '';
        $this->model->home = '';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


        $this->model = new PlaceAdress();

        $this->model->id = 2116;
        $this->model->sort = null;
        $this->model->name = 'Асакинский район/Андижан/Узбекистан | asdfsadf | sadfsadf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 217;
        $this->model->region_form = [
            'region_0' => '402',
            'region_1' => '154',
        ];
        $this->model->place_region_id = 154;
        $this->model->street = 'asdfsadf';
        $this->model->home = 'sadfsadf';
        $this->model->orientation = '';
        $this->model->postal_code = '';
        $this->model->place = '';
        $this->model->location = "";
        $this->save();


    }

}
