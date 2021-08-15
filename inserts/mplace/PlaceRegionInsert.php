<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\place\PlaceRegion;

class PlaceRegionInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PlaceRegion();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'Шахрисабзский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Шахрисабзский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'Шафирканский район/Бухара/Узбекистан';
        $this->model->title = 'Шафирканский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'Шахриханский район/Андижан/Узбекистан';
        $this->model->title = 'Шахриханский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'Алтынкульский район/Андижан/Узбекистан';
        $this->model->title = 'Алтынкульский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'город Каган/Бухара/Узбекистан';
        $this->model->title = 'город Каган';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = 'Асакинский район/Андижан/Узбекистан';
        $this->model->title = 'Асакинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'Яккабагский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Яккабагский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'Арнасайский район/Джизак/Узбекистан';
        $this->model->title = 'Арнасайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = 'Галляаральский район/Джизак/Узбекистан';
        $this->model->title = 'Галляаральский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'Джалакудукский (Жалакудукский) район/Андижан/Узбекистан';
        $this->model->title = 'Джалакудукский (Жалакудукский) район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = 'Зафарабадский район/Джизак/Узбекистан';
        $this->model->title = 'Зафарабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Миробод/Узбекистан';
        $this->model->title = 'Миробод';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 56;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'город Шахрисабз/Кашкадарья/Узбекистан';
        $this->model->title = 'город Шахрисабз';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'Кургантепинский район/Андижан/Узбекистан';
        $this->model->title = 'Кургантепинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'Бухара/Узбекистан';
        $this->model->title = 'Бухара';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Навои/Узбекистан';
        $this->model->title = 'Навои';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'Пахтаабадский район/Андижан/Узбекистан';
        $this->model->title = 'Пахтаабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'Бухарский район/Бухара/Узбекистан';
        $this->model->title = 'Бухарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'Пахтакорский район/Джизак/Узбекистан';
        $this->model->title = 'Пахтакорский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'Гиждуванский район/Бухара/Узбекистан';
        $this->model->title = 'Гиждуванский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = 'Фаришский район/Джизак/Узбекистан';
        $this->model->title = 'Фаришский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = 'Каганский район/Бухара/Узбекистан';
        $this->model->title = 'Каганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = 'Карманинский район/Навои/Узбекистан';
        $this->model->title = 'Карманинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = 'город Джизак/Джизак/Узбекистан';
        $this->model->title = 'город Джизак';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'Караулбазарский район/Бухара/Узбекистан';
        $this->model->title = 'Караулбазарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = 'Гузарский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Гузарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = 'Ромитанский район/Бухара/Узбекистан';
        $this->model->title = 'Ромитанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'Камашинский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Камашинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = 'Навбахорский район/Навои/Узбекистан';
        $this->model->title = 'Навбахорский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = 'Китабский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Китабский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'Тамдынский район/Навои/Узбекистан';
        $this->model->title = 'Тамдынский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'Хатырчинский район/Навои/Узбекистан';
        $this->model->title = 'Хатырчинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'город Навои/Навои/Узбекистан';
        $this->model->title = 'город Навои';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'Касансайский район/Наманган/Узбекистан';
        $this->model->title = 'Касансайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Андижан/Узбекистан';
        $this->model->title = 'Андижан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'Наманганский район/Наманган/Узбекистан';
        $this->model->title = 'Наманганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'Нарынский район/Наманган/Узбекистан';
        $this->model->title = 'Нарынский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = 'Бекабад/Tashkent/Узбекистан';
        $this->model->title = 'Бекабад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 56;
        $this->model->delivery_price = 25000;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = 'Папский район/Наманган/Узбекистан';
        $this->model->title = 'Папский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'Асака/Андижан/Узбекистан';
        $this->model->title = 'Асака';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 47;
        $this->model->delivery_price = 25000;
        $this->model->ware_id = 59;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = 'Андижанский район/Андижан/Узбекистан';
        $this->model->title = 'Андижанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'Улугнорский район/Андижан/Узбекистан';
        $this->model->title = 'Улугнорский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Ташкент/Узбекистан';
        $this->model->title = 'Ташкент';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'Балыкчинский район/Андижан/Узбекистан';
        $this->model->title = 'Балыкчинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'Ходжаабадский район/Андижан/Узбекистан';
        $this->model->title = 'Ходжаабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'город Бухара/Бухара/Узбекистан';
        $this->model->title = 'город Бухара';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'город Карши/Кашкадарья/Узбекистан';
        $this->model->title = 'город Карши';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'Джизак/Узбекистан';
        $this->model->title = 'Джизак';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = 'город Андижан/Андижан/Узбекистан';
        $this->model->title = 'город Андижан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'Булакбашинский район/Андижан/Узбекистан';
        $this->model->title = 'Булакбашинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'Канимехский район/Навои/Узбекистан';
        $this->model->title = 'Канимехский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'Караул/Ургенч/Узбекистан';
        $this->model->title = 'Караул';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = '';
        $this->model->parent_id = 55;
        $this->model->delivery_price = 30000;
        $this->model->ware_id = 59;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = 'Кызылтепинский район/Навои/Узбекистан';
        $this->model->title = 'Кызылтепинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = 'город Ханабад/Андижан/Узбекистан';
        $this->model->title = 'город Ханабад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'Избасканский район/Андижан/Узбекистан';
        $this->model->title = 'Избасканский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'Бахмальский район/Джизак/Узбекистан';
        $this->model->title = 'Бахмальский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'Мархаматский район/Андижан/Узбекистан';
        $this->model->title = 'Мархаматский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 47;
        $this->model->delivery_price = null;
        $this->model->ware_id = 69;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'Дустликский район/Джизак/Узбекистан';
        $this->model->title = 'Дустликский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'Нуратинский район/Навои/Узбекистан';
        $this->model->title = 'Нуратинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'Алатский район/Бухара/Узбекистан';
        $this->model->title = 'Алатский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'Зааминский район/Джизак/Узбекистан';
        $this->model->title = 'Зааминский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = 'Зарбдарский район/Джизак/Узбекистан';
        $this->model->title = 'Зарбдарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'Вабкентский район/Бухара/Узбекистан';
        $this->model->title = 'Вабкентский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = 'Учкудукский район/Навои/Узбекистан';
        $this->model->title = 'Учкудукский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'Жондорский район/Бухара/Узбекистан';
        $this->model->title = 'Жондорский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = 'Мирзачульский район/Джизак/Узбекистан';
        $this->model->title = 'Мирзачульский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'Каракульский район/Бухара/Узбекистан';
        $this->model->title = 'Каракульский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'город Зарафшан/Навои/Узбекистан';
        $this->model->title = 'город Зарафшан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 50;
        $this->model->delivery_price = null;
        $this->model->ware_id = 66;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Пешкунский район/Бухара/Узбекистан';
        $this->model->title = 'Пешкунский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 171;
        $this->model->delivery_price = null;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'Наманган/Узбекистан';
        $this->model->title = 'Наманган';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'Мингбулакский район/Наманган/Узбекистан';
        $this->model->title = 'Мингбулакский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'Янгиабадский район/Джизак/Узбекистан';
        $this->model->title = 'Янгиабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'Кашкадарья/Узбекистан';
        $this->model->title = 'Кашкадарья';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'Дехканабадский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Дехканабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'Туракурганский район/Наманган/Узбекистан';
        $this->model->title = 'Туракурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = 'Каршинский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Каршинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = 'Касанский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Касанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = 'Касбийский (Касбинский) район/Кашкадарья/Узбекистан';
        $this->model->title = 'Касбийский (Касбинский) район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'Миришкорский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Миришкорский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = 'Мубарекский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Мубарекский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'Нишанский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Нишанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'Чиракчинский район/Кашкадарья/Узбекистан';
        $this->model->title = 'Чиракчинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 198;
        $this->model->delivery_price = null;
        $this->model->ware_id = 61;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = 'Акалтынский район/Сырдарья/Узбекистан';
        $this->model->title = 'Акалтынский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'Уйчинский район/Наманган/Узбекистан';
        $this->model->title = 'Уйчинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'Учкурганский район/Наманган/Узбекистан';
        $this->model->title = 'Учкурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = 'город Наманган/Наманган/Узбекистан';
        $this->model->title = 'город Наманган';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 357;
        $this->model->sort = null;
        $this->model->name = 'Алмазарский район/Ташкент/Узбекистан';
        $this->model->title = 'Алмазарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = 'Чартакский район/Наманган/Узбекистан';
        $this->model->title = 'Чартакский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'Акдарьинский район/Самарканд/Узбекистан';
        $this->model->title = 'Акдарьинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'Чустский район/Наманган/Узбекистан';
        $this->model->title = 'Чустский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'Самарканд /Узбекистан';
        $this->model->title = 'Самарканд ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = 'Янгикурганский район/Наманган/Узбекистан';
        $this->model->title = 'Янгикурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 224;
        $this->model->delivery_price = null;
        $this->model->ware_id = 71;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'Булунгурский район/Самарканд /Узбекистан';
        $this->model->title = 'Булунгурский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'Джамбайский район/Самарканд /Узбекистан';
        $this->model->title = 'Джамбайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'Иштыханский район/Самарканд /Узбекистан';
        $this->model->title = 'Иштыханский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'Каттакурганский район/Самарканд /Узбекистан';
        $this->model->title = 'Каттакурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'Кошрабадский район/Самарканд /Узбекистан';
        $this->model->title = 'Кошрабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = 'Нарпайский район/Самарканд /Узбекистан';
        $this->model->title = 'Нарпайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'Нурабадский район/Самарканд /Узбекистан';
        $this->model->title = 'Нурабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = 'Пайарыкский район/Самарканд /Узбекистан';
        $this->model->title = 'Пайарыкский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'Пастдаргомский район/Самарканд /Узбекистан';
        $this->model->title = 'Пастдаргомский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = 'Пахтачийский район/Самарканд /Узбекистан';
        $this->model->title = 'Пахтачийский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = 'Самаркандский район/Самарканд /Узбекистан';
        $this->model->title = 'Самаркандский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = 'Тайлакский (Тайлякский) район/Самарканд /Узбекистан';
        $this->model->title = 'Тайлакский (Тайлякский) район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'город Каттакурган/Самарканд /Узбекистан';
        $this->model->title = 'город Каттакурган';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'город Самарканд/Самарканд /Узбекистан';
        $this->model->title = 'город Самарканд';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 237;
        $this->model->delivery_price = null;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = 'Сурхандарья/Узбекистан';
        $this->model->title = 'Сурхандарья';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = 'Алтынсайский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Алтынсайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'Ангорский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Ангорский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = 'Байсунский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Байсунский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'Бандихонский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Бандихонский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = 'Денауский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Денауский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = 'Кизирикский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Кизирикский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'Кумкурганский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Кумкурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = 'Музрабадский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Музрабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'Сариасийский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Сариасийский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = 'Узунский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Узунский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = 'Шерабадский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Шерабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = 'Шурчинский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Шурчинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = 'город Термез/Сурхандарья/Узбекистан';
        $this->model->title = 'город Термез';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 269;
        $this->model->sort = null;
        $this->model->name = 'Сырдарья/Узбекистан';
        $this->model->title = 'Сырдарья';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'Баяутский район/Сырдарья/Узбекистан';
        $this->model->title = 'Баяутский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = 'Гулистанский район/Сырдарья/Узбекистан';
        $this->model->title = 'Гулистанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = 'Узбекистанский район/Фергана/Узбекистан';
        $this->model->title = 'Узбекистанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = 'Мирзаабадский район/Сырдарья/Узбекистан';
        $this->model->title = 'Мирзаабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = 'Сайхунабадский район/Сырдарья/Узбекистан';
        $this->model->title = 'Сайхунабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = 'Учкуприкский район/Фергана/Узбекистан';
        $this->model->title = 'Учкуприкский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = 'Сардобский (Сардобинский) район/Сырдарья/Узбекистан';
        $this->model->title = 'Сардобский (Сардобинский) район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = 'Ферганский район/Фергана/Узбекистан';
        $this->model->title = 'Ферганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = 'Фуркатский район/Фергана/Узбекистан';
        $this->model->title = 'Фуркатский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = 'Сырдарьинский район/Сырдарья/Узбекистан';
        $this->model->title = 'Сырдарьинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'Язъяванский район/Фергана/Узбекистан';
        $this->model->title = 'Язъяванский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = 'Хавастский (Хавасский) район/Сырдарья/Узбекистан';
        $this->model->title = 'Хавастский (Хавасский) район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = 'город Маргилан/Фергана/Узбекистан';
        $this->model->title = 'город Маргилан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = 'Хорезм/Узбекистан';
        $this->model->title = 'Хорезм';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = 'город Гулистан/Сырдарья/Узбекистан';
        $this->model->title = 'город Гулистан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = 'город Ширин/Сырдарья/Узбекистан';
        $this->model->title = 'город Ширин';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = 'Гурленский район/Хорезм/Узбекистан';
        $this->model->title = 'Гурленский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = 'город Янгиер/Сырдарья/Узбекистан';
        $this->model->title = 'город Янгиер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 269;
        $this->model->delivery_price = null;
        $this->model->ware_id = 72;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = 'Кошкупырский район/Хорезм/Узбекистан';
        $this->model->title = 'Кошкупырский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = 'Тупроккалинский район/Хорезм/Узбекистан';
        $this->model->title = 'Тупроккалинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'Ургенчский район/Хорезм/Узбекистан';
        $this->model->title = 'Ургенчский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'Хазараспский район/Хорезм/Узбекистан';
        $this->model->title = 'Хазараспский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = 'Ханкинский район/Хорезм/Узбекистан';
        $this->model->title = 'Ханкинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'Хивинский район/Хорезм/Узбекистан';
        $this->model->title = 'Хивинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = 'Шаватский район/Хорезм/Узбекистан';
        $this->model->title = 'Шаватский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = 'Янгиарыкский район/Хорезм/Узбекистан';
        $this->model->title = 'Янгиарыкский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = 'Янгибазарский район/Хорезм/Узбекистан';
        $this->model->title = 'Янгибазарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = 'город Ургенч/Хорезм/Узбекистан';
        $this->model->title = 'город Ургенч';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = 'город Хива/Хорезм/Узбекистан';
        $this->model->title = 'город Хива';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = 'Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Республика Каракалпакстан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 340;
        $this->model->sort = null;
        $this->model->name = 'Амударьинский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Амударьинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'Берунийский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Берунийский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'Бозатауский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Бозатауский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'Караузякский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Караузякский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'Кегейлийский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Кегейлийский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'Кунградский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Кунградский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'Канлыкульский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Канлыкульский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = 'Нукусский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Нукусский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'Ургутский район/Самарканд /Узбекистан';
        $this->model->title = 'Ургутский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 237;
        $this->model->delivery_price = 0;
        $this->model->ware_id = 67;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = 'Ташкентская область/Узбекистан';
        $this->model->title = 'Ташкентская область';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = 'Аккурганский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Аккурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = 'Ахангаранский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Ахангаранский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = 'Сохский район/Фергана/Узбекистан';
        $this->model->title = 'Сохский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = 'Ташлакский район/Фергана/Узбекистан';
        $this->model->title = 'Ташлакский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 284;
        $this->model->sort = null;
        $this->model->name = 'Бекабадский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Бекабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = 'Бостанлыкский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Бостанлыкский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = 'Букинский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Букинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = 'город Коканд/Фергана/Узбекистан';
        $this->model->title = 'город Коканд';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = 'город Кувасай/Фергана/Узбекистан';
        $this->model->title = 'город Кувасай';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = 'город Фергана/Фергана/Узбекистан';
        $this->model->title = 'город Фергана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = 'Зангиатинский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Зангиатинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = 'Кибрайский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Кибрайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = 'Багатский район/Хорезм/Узбекистан';
        $this->model->title = 'Багатский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 325;
        $this->model->delivery_price = null;
        $this->model->ware_id = 74;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = 'Куйичирчикский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Куйичирчикский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = 'Паркентский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Паркентский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = 'Пскентский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Пскентский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = 'Ташкентский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Ташкентский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = 'Уртачирчикский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Уртачирчикский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = 'Чиназский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Чиназский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = 'Юкоричирчикский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Юкоричирчикский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = 'Янгиюльский район/Ташкентская область/Узбекистан';
        $this->model->title = 'Янгиюльский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = 'город Алмалык/Ташкентская область/Узбекистан';
        $this->model->title = 'город Алмалык';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = 'город Ангрен/Ташкентская область/Узбекистан';
        $this->model->title = 'город Ангрен';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = 'город Ахангаран/Ташкентская область/Узбекистан';
        $this->model->title = 'город Ахангаран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = 'город Бекабад/Ташкентская область/Узбекистан';
        $this->model->title = 'город Бекабад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = 'город Нурафшон/Ташкентская область/Узбекистан';
        $this->model->title = 'город Нурафшон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = 'город Чирчик/Ташкентская область/Узбекистан';
        $this->model->title = 'город Чирчик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = 'город Янгиюль/Ташкентская область/Узбекистан';
        $this->model->title = 'город Янгиюль';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 73;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = 'Фергана/Узбекистан';
        $this->model->title = 'Фергана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'region';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = 'Алтыарыкский район/Фергана/Узбекистан';
        $this->model->title = 'Алтыарыкский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = 'Багдадский район/Фергана/Узбекистан';
        $this->model->title = 'Багдадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = 'Бешарыкский район/Фергана/Узбекистан';
        $this->model->title = 'Бешарыкский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = 'Бувайдинский район/Фергана/Узбекистан';
        $this->model->title = 'Бувайдинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = 'Дангаринский район/Фергана/Узбекистан';
        $this->model->title = 'Дангаринский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = 'Кувинский район/Фергана/Узбекистан';
        $this->model->title = 'Кувинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = 'Куштепинский район/Фергана/Узбекистан';
        $this->model->title = 'Куштепинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = 'Риштанский район/Фергана/Узбекистан';
        $this->model->title = 'Риштанский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 304;
        $this->model->delivery_price = null;
        $this->model->ware_id = 64;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 358;
        $this->model->sort = null;
        $this->model->name = 'Бектемирский район/Ташкент/Узбекистан';
        $this->model->title = 'Бектемирский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = 'Мирзо-Улугбекский район/Ташкент/Узбекистан';
        $this->model->title = 'Мирзо-Улугбекский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'Муйнакский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Муйнакский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = 'Тахиаташский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Тахиаташский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = 'Тахтакупырский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Тахтакупырский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 351;
        $this->model->sort = null;
        $this->model->name = 'Турткульский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Турткульский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = 'Ходжейлийский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Ходжейлийский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 360;
        $this->model->sort = null;
        $this->model->name = 'Сергелийский район/Ташкент/Узбекистан';
        $this->model->title = 'Сергелийский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 353;
        $this->model->sort = null;
        $this->model->name = 'Чимбайский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Чимбайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = 'Шуманайский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Шуманайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 361;
        $this->model->sort = null;
        $this->model->name = 'Учтепинский район/Ташкент/Узбекистан';
        $this->model->title = 'Учтепинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = 'Элликкалинский район/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'Элликкалинский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 362;
        $this->model->sort = null;
        $this->model->name = 'Чиланзарский район/Ташкент/Узбекистан';
        $this->model->title = 'Чиланзарский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 356;
        $this->model->sort = null;
        $this->model->name = 'город Нукус/Республика Каракалпакстан/Узбекистан';
        $this->model->title = 'город Нукус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'city';
        $this->model->parent_id = 339;
        $this->model->delivery_price = null;
        $this->model->ware_id = 68;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 363;
        $this->model->sort = null;
        $this->model->name = 'Шайхантахурский район/Ташкент/Узбекистан';
        $this->model->title = 'Шайхантахурский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 365;
        $this->model->sort = null;
        $this->model->name = 'Яккасарайский район/Ташкент/Узбекистан';
        $this->model->title = 'Яккасарайский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 366;
        $this->model->sort = null;
        $this->model->name = '	Яшнабадский  район /Ташкент/Узбекистан';
        $this->model->title = '	Яшнабадский  район ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 367;
        $this->model->sort = null;
        $this->model->name = 'Джаркурганский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Джаркурганский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 368;
        $this->model->sort = null;
        $this->model->name = 'Термезский район/Сурхандарья/Узбекистан';
        $this->model->title = 'Термезский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 254;
        $this->model->delivery_price = null;
        $this->model->ware_id = 65;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 369;
        $this->model->sort = null;
        $this->model->name = 'Шараф-Рашидовский (Джизакский) район/Джизак/Узбекистан';
        $this->model->title = 'Шараф-Рашидовский (Джизакский) район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 185;
        $this->model->delivery_price = null;
        $this->model->ware_id = 70;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 370;
        $this->model->sort = null;
        $this->model->name = 'Юнусабадский район/Ташкент/Узбекистан';
        $this->model->title = 'Юнусабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 371;
        $this->model->sort = null;
        $this->model->name = 'Мирабадский район/Ташкент/Узбекистан';
        $this->model->title = 'Мирабадский район';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 373;
        $this->model->sort = null;
        $this->model->name = 'Сергели/Ташкент/Узбекистан';
        $this->model->title = 'Сергели';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 57;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 404;
        $this->model->sort = null;
        $this->model->name = '1311 | Тунис';
        $this->model->title = '1311';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 217;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = 1313;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 398;
        $this->model->sort = null;
        $this->model->name = 'sadfsad | город Каган/Бухара/Узбекистан';
        $this->model->title = 'sadfsad';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->type = '';
        $this->model->parent_id = 184;
        $this->model->delivery_price = 13131;
        $this->model->ware_id = 62;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 400;
        $this->model->sort = null;
        $this->model->name = '1313 | Куба';
        $this->model->title = '1313';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 55;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 401;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 403;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = null;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 406;
        $this->model->sort = null;
        $this->model->name = '13 | город Каган/Бухара/Узбекистан';
        $this->model->title = '13';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 55;
        $this->model->type = '';
        $this->model->parent_id = 184;
        $this->model->delivery_price = 1313;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 405;
        $this->model->sort = null;
        $this->model->name = '12341231 | Кипр';
        $this->model->title = '12341231';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 56;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 402;
        $this->model->sort = null;
        $this->model->name = ' | Тунис';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 217;
        $this->model->type = '';
        $this->model->parent_id = null;
        $this->model->delivery_price = null;
        $this->model->ware_id = null;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 385;
        $this->model->sort = null;
        $this->model->name = 'Оккургон/Ташкентская область/Узбекистан';
        $this->model->title = 'Оккургон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 384;
        $this->model->sort = null;
        $this->model->name = 'Чиноз/Ташкентская область/Узбекистан';
        $this->model->title = 'Чиноз';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 383;
        $this->model->sort = null;
        $this->model->name = 'Назарбек/Ташкентская область/Узбекистан';
        $this->model->title = 'Назарбек';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 382;
        $this->model->sort = null;
        $this->model->name = 'Охангорон/Ташкентская область/Узбекистан';
        $this->model->title = 'Охангорон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 381;
        $this->model->sort = null;
        $this->model->name = 'Олмалик/Ташкентская область/Узбекистан';
        $this->model->title = 'Олмалик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 380;
        $this->model->sort = null;
        $this->model->name = 'Газалкент/Ташкентская область/Узбекистан';
        $this->model->title = 'Газалкент';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 379;
        $this->model->sort = null;
        $this->model->name = 'Бустонлик/Ташкентская область/Узбекистан';
        $this->model->title = 'Бустонлик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 378;
        $this->model->sort = null;
        $this->model->name = 'Хасанбой/Ташкентская область/Узбекистан';
        $this->model->title = 'Хасанбой';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 377;
        $this->model->sort = null;
        $this->model->name = 'Келес/Ташкентская область/Узбекистан';
        $this->model->title = 'Келес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 386;
        $this->model->sort = null;
        $this->model->name = 'Дустабод/Ташкентская область/Узбекистан';
        $this->model->title = 'Дустабод';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 376;
        $this->model->sort = null;
        $this->model->name = 'Янгибозор/Ташкентская область/Узбекистан';
        $this->model->title = 'Янгибозор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 375;
        $this->model->sort = null;
        $this->model->name = 'Юкори чирчик/Ташкентская область/Узбекистан';
        $this->model->title = 'Юкори чирчик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


        $this->model = new PlaceRegion();

        $this->model->id = 374;
        $this->model->sort = null;
        $this->model->name = 'Тойтепа/Ташкентская область/Узбекистан';
        $this->model->title = 'Тойтепа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->place_country_id = 229;
        $this->model->type = 'district';
        $this->model->parent_id = 281;
        $this->model->delivery_price = null;
        $this->model->ware_id = 63;
        $this->save();


    }

}
