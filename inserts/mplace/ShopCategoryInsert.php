<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCategory;

class ShopCategoryInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCategory();

        $this->model->id = 727;
        $this->model->sort = 215;
        $this->model->name = ' Лечение кожи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 690;
        $this->model->sort = 221;
        $this->model->name = 'Суперфуды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 686;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 726;
        $this->model->sort = 223;
        $this->model->name = 'Лечение глаз и ушей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 719;
        $this->model->sort = 225;
        $this->model->name = ' Лечение боли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 673;
        $this->model->sort = 228;
        $this->model->name = '  Горчица и хрен';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 679;
        $this->model->sort = 230;
        $this->model->name = 'Томатная паста';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 670;
        $this->model->sort = 233;
        $this->model->name = 'Выпечка и сдоба';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 668;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 714;
        $this->model->sort = 236;
        $this->model->name = 'Лечение пищеварительной системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1722;
        $this->model->sort = 239;
        $this->model->name = 'Бассейны и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 722;
        $this->model->sort = 241;
        $this->model->name = 'Лечение нервной системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1224;
        $this->model->sort = 243;
        $this->model->name = 'Жидкости';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1064;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 757;
        $this->model->sort = 246;
        $this->model->name = 'Футляры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 770;
        $this->model->sort = 249;
        $this->model->name = 'Ортопедические матрасы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 750;
        $this->model->sort = 250;
        $this->model->name = 'Оптика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 744;
        $this->model->sort = 252;
        $this->model->name = 'Стетоскопы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 721;
        $this->model->sort = 257;
        $this->model->name = 'Лечение вен';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 715;
        $this->model->sort = 258;
        $this->model->name = 'Лечение аллергии';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 674;
        $this->model->sort = 260;
        $this->model->name = 'Кетчуп';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 754;
        $this->model->sort = 264;
        $this->model->name = 'Очки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 769;
        $this->model->sort = 266;
        $this->model->name = 'Ортопедические подушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1660;
        $this->model->sort = 269;
        $this->model->name = 'Наборы посуды для готовки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1645;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1661;
        $this->model->sort = 272;
        $this->model->name = '4K-гейминг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 781;
        $this->model->sort = 273;
        $this->model->name = 'Гигиена';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 936;
        $this->model->sort = 274;
        $this->model->name = ' Мебель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 788;
        $this->model->sort = 279;
        $this->model->name = ' Средства ухода за стомой';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 789;
        $this->model->sort = 281;
        $this->model->name = 'Специализированные одежда и белье';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 796;
        $this->model->sort = 283;
        $this->model->name = 'Медицинские материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 798;
        $this->model->sort = 286;
        $this->model->name = 'Вата';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 799;
        $this->model->sort = 288;
        $this->model->name = ' Пластыри';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 804;
        $this->model->sort = 291;
        $this->model->name = 'Повязки раневые';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 806;
        $this->model->sort = 292;
        $this->model->name = 'Лекарственные растения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 827;
        $this->model->sort = 297;
        $this->model->name = '  Конструкторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 822;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 645;
        $this->model->sort = 300;
        $this->model->name = ' Зелень, салаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 643;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 808;
        $this->model->sort = 306;
        $this->model->name = 'Диагностические тесты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 806;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 837;
        $this->model->sort = 309;
        $this->model->name = 'Детские книги и пособия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 842;
        $this->model->sort = 312;
        $this->model->name = 'Хранение игрушек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 850;
        $this->model->sort = 314;
        $this->model->name = 'Слинги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 859;
        $this->model->sort = 320;
        $this->model->name = 'Конверты и спальные мешки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 867;
        $this->model->sort = 323;
        $this->model->name = 'Подгузники и приучение к горшку';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 866;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1036;
        $this->model->sort = 500;
        $this->model->name = 'Уличное освещение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 952;
        $this->model->sort = 334;
        $this->model->name = ' Сервировка стола';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 784;
        $this->model->sort = 336;
        $this->model->name = 'Приспособления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 848;
        $this->model->sort = 339;
        $this->model->name = ' Велокресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 876;
        $this->model->sort = 344;
        $this->model->name = 'Все для сна';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 874;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 887;
        $this->model->sort = 349;
        $this->model->name = 'Товары для мам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 899;
        $this->model->sort = 352;
        $this->model->name = 'Уборка в детской';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 901;
        $this->model->sort = 355;
        $this->model->name = 'Слинги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 897;
        $this->model->sort = 357;
        $this->model->name = 'Сумки для мам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 894;
        $this->model->sort = 360;
        $this->model->name = 'Накладки для груди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 891;
        $this->model->sort = 363;
        $this->model->name = 'Хранение грудного молока';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 943;
        $this->model->sort = 365;
        $this->model->name = 'Мягкая мебель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 992;
        $this->model->sort = 367;
        $this->model->name = 'Брови';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 983;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 996;
        $this->model->sort = 369;
        $this->model->name = 'Уход за волосами';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 983;
        $this->model->sort = 371;
        $this->model->name = 'Макияж';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 896;
        $this->model->sort = 374;
        $this->model->name = 'Бандажи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 945;
        $this->model->sort = 376;
        $this->model->name = ' Мебель для кухни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2542;
        $this->model->sort = 2542;
        $this->model->name = ' Квадрокоптеры с камерой';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '6',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2535;
        $this->model->image = [
            'Picturesimg0.jpg',
        ];
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 921;
        $this->model->sort = 382;
        $this->model->name = 'Карты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 948;
        $this->model->sort = 389;
        $this->model->name = 'Комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 957;
        $this->model->sort = 392;
        $this->model->name = ' Хранение продуктов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1215;
        $this->model->sort = 590;
        $this->model->name = 'Таблички';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 958;
        $this->model->sort = 398;
        $this->model->name = 'Термосы и термокружки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 965;
        $this->model->sort = 401;
        $this->model->name = 'Инвентарь для уборки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 969;
        $this->model->sort = 403;
        $this->model->name = 'Хранение вещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 961;
        $this->model->sort = 405;
        $this->model->name = 'Самовары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 908;
        $this->model->sort = 406;
        $this->model->name = ' Доски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 919;
        $this->model->sort = 409;
        $this->model->name = 'Учебная литература';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 931;
        $this->model->sort = 411;
        $this->model->name = ' Сумки и рюкзаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 937;
        $this->model->sort = 415;
        $this->model->name = 'Готовые комплекты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 975;
        $this->model->sort = 418;
        $this->model->name = 'Безмены';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 873;
        $this->model->sort = 342;
        $this->model->name = 'Зимний спорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 870;
        $this->model->image = [
            'Зимний спорт.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 829;
        $this->model->sort = 332;
        $this->model->name = 'Конструкторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = [
            'Конструкторы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 823;
        $this->model->sort = 295;
        $this->model->name = 'Коляски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 822;
        $this->model->image = [
            'Коляски.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 879;
        $this->model->sort = 346;
        $this->model->name = 'Развитие и обучение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = [
            'Развитие и обучение.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 927;
        $this->model->sort = 386;
        $this->model->name = 'Обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = [
            'Обувь.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 924;
        $this->model->sort = 384;
        $this->model->name = ' Для девочек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = [
            'Для девочек.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1028;
        $this->model->sort = 420;
        $this->model->name = 'Маски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 977;
        $this->model->sort = 422;
        $this->model->name = 'Бумажные полотенца и салфетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1001;
        $this->model->sort = 424;
        $this->model->name = 'Сухие шампуни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1059;
        $this->model->sort = 427;
        $this->model->name = 'Дезодоранты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2150;
        $this->model->sort = 429;
        $this->model->name = 'Краны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 543;
        $this->model->sort = 432;
        $this->model->name = ' Зефир, пастила';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 741;
        $this->model->sort = 433;
        $this->model->name = 'Термометры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 985;
        $this->model->sort = 437;
        $this->model->name = 'Лампочки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 574;
        $this->model->sort = 440;
        $this->model->name = 'Другие крупы для проращивания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 560;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1004;
        $this->model->sort = 443;
        $this->model->name = 'Для химической завивки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1064;
        $this->model->sort = 445;
        $this->model->name = 'Уход за ногами';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1035;
        $this->model->sort = 448;
        $this->model->name = 'Скрабы и пилинги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1027;
        $this->model->sort = 451;
        $this->model->name = ' Интерьерная подсветка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 825;
        $this->model->sort = 453;
        $this->model->name = 'Подгузники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 822;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1043;
        $this->model->sort = 455;
        $this->model->name = 'BB, CC и DD кремы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1053;
        $this->model->sort = 458;
        $this->model->name = 'Уход за телом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1076;
        $this->model->sort = 461;
        $this->model->name = ' Одеяла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1073;
        $this->model->sort = 503;
        $this->model->name = 'Пена, соль, масло';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1016;
        $this->model->sort = 506;
        $this->model->name = 'Лакомства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1089;
        $this->model->sort = 508;
        $this->model->name = 'Скатерти и салфетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1130;
        $this->model->sort = 512;
        $this->model->name = 'Унисекс парфюмерия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1120;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1117;
        $this->model->sort = 513;
        $this->model->name = 'Глобусы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1068;
        $this->model->sort = 517;
        $this->model->name = 'Переноски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1097;
        $this->model->sort = 520;
        $this->model->name = ' Мужские халаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1122;
        $this->model->sort = 522;
        $this->model->name = 'Зеркала';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1390;
        $this->model->sort = 523;
        $this->model->name = 'Фильтры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1161;
        $this->model->sort = 525;
        $this->model->name = 'Шампуни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1167;
        $this->model->sort = 527;
        $this->model->name = 'Вазы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1178;
        $this->model->sort = 530;
        $this->model->name = 'Уход за ногтями';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1058;
        $this->model->sort = 464;
        $this->model->name = 'Текстиль';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1078;
        $this->model->sort = 466;
        $this->model->name = 'Подушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 865;
        $this->model->sort = 470;
        $this->model->name = 'Принадлежности для кормления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 862;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1041;
        $this->model->sort = 471;
        $this->model->name = 'Уход за губами';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1009;
        $this->model->sort = 474;
        $this->model->name = 'Бигуди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1012;
        $this->model->sort = 475;
        $this->model->name = 'Заколки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1032;
        $this->model->sort = 479;
        $this->model->name = 'Встраиваемые светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1045;
        $this->model->sort = 480;
        $this->model->name = 'Защита от солнца';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1750;
        $this->model->sort = 484;
        $this->model->name = 'Игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 917;
        $this->model->sort = 380;
        $this->model->name = 'Рисование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1090;
        $this->model->sort = 491;
        $this->model->name = 'Товары для собак';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1003;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1109;
        $this->model->sort = 493;
        $this->model->name = 'Игрушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1123;
        $this->model->sort = 496;
        $this->model->name = 'Сувениры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1042;
        $this->model->sort = 499;
        $this->model->name = 'Туалеты, пеленки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1162;
        $this->model->sort = 534;
        $this->model->name = 'Комнатные растения и горшки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1103;
        $this->model->sort = 536;
        $this->model->name = 'Туалеты, пеленки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1100;
        $this->model->sort = 538;
        $this->model->name = 'Лакомства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1102;
        $this->model->sort = 541;
        $this->model->name = 'Лежаки и домики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1132;
        $this->model->sort = 544;
        $this->model->name = 'Лакомства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1124;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1158;
        $this->model->sort = 547;
        $this->model->name = 'Дезодоранты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1210;
        $this->model->sort = 549;
        $this->model->name = 'Камины и печи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1146;
        $this->model->sort = 552;
        $this->model->name = 'Игрушки и декор';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1124;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1144;
        $this->model->sort = 554;
        $this->model->name = 'Сувениры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1391;
        $this->model->sort = 556;
        $this->model->name = 'Омыватель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1165;
        $this->model->sort = 560;
        $this->model->name = 'Воск и паста';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1206;
        $this->model->sort = 562;
        $this->model->name = 'Дизайн ногтей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1235;
        $this->model->sort = 565;
        $this->model->name = 'Эпиляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1196;
        $this->model->sort = 569;
        $this->model->name = 'Аквариумная химия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1197;
        $this->model->sort = 570;
        $this->model->name = 'Адаптеры для ноутбуков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1221;
        $this->model->sort = 572;
        $this->model->name = 'Масло для кутикулы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1172;
        $this->model->sort = 574;
        $this->model->name = 'Радар-детекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1139;
        $this->model->sort = 577;
        $this->model->name = 'Мотошины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1155;
        $this->model->sort = 580;
        $this->model->name = 'Камеры и ободные ленты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1190;
        $this->model->sort = 582;
        $this->model->name = 'Пилки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1466;
        $this->model->sort = 719;
        $this->model->name = 'Прицепы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1462;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1203;
        $this->model->sort = 584;
        $this->model->name = 'База и верхнее покрытие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1342;
        $this->model->sort = 588;
        $this->model->name = 'Защита';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1336;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1214;
        $this->model->sort = 589;
        $this->model->name = 'Декорации для аквариума';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1128;
        $this->model->sort = 591;
        $this->model->name = 'Шины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1241;
        $this->model->sort = 595;
        $this->model->name = 'Машинки для стрижки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2297;
        $this->model->sort = 597;
        $this->model->name = 'Шоу';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1234;
        $this->model->sort = 599;
        $this->model->name = 'Товары для грызунов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1003;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 692;
        $this->model->sort = 1529;
        $this->model->name = 'Супы, бульоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 691;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1248;
        $this->model->sort = 603;
        $this->model->name = 'Миски, кормушки и поилки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1189;
        $this->model->sort = 606;
        $this->model->name = 'Алкотестеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1249;
        $this->model->sort = 608;
        $this->model->name = 'Средства для посуды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1186;
        $this->model->sort = 611;
        $this->model->name = 'Автомобильные радиостанции';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1884;
        $this->model->sort = 615;
        $this->model->name = 'Дрова';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1265;
        $this->model->sort = 617;
        $this->model->name = 'Уход за малышом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1259;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1263;
        $this->model->sort = 622;
        $this->model->name = 'Шлейки и поводки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1283;
        $this->model->sort = 624;
        $this->model->name = 'Антенны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1267;
        $this->model->sort = 627;
        $this->model->name = 'Игрушки и декор';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1279;
        $this->model->sort = 629;
        $this->model->name = 'Автомагнитолы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1269;
        $this->model->sort = 633;
        $this->model->name = 'Детям';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1285;
        $this->model->sort = 634;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1307;
        $this->model->sort = 636;
        $this->model->name = '  Зимние виды спорта';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1311;
        $this->model->sort = 638;
        $this->model->name = 'Велосипеды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1320;
        $this->model->sort = 640;
        $this->model->name = 'Детские автокресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1308;
        $this->model->sort = 645;
        $this->model->name = 'Воронки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1317;
        $this->model->sort = 648;
        $this->model->name = 'Щетки стеклоочистителей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1328;
        $this->model->sort = 654;
        $this->model->name = 'Автомобильные холодильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1335;
        $this->model->sort = 657;
        $this->model->name = 'Инвентарь для ухода';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1341;
        $this->model->sort = 659;
        $this->model->name = 'Алкотестеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1349;
        $this->model->sort = 661;
        $this->model->name = 'Лебедки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1095;
        $this->model->sort = 489;
        $this->model->name = ' Мужские халаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1305;
        $this->model->sort = 644;
        $this->model->name = 'Присадки и промывки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1291;
        $this->model->sort = 651;
        $this->model->name = 'Популярные категории';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1354;
        $this->model->sort = 663;
        $this->model->name = 'Ключи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1339;
        $this->model->sort = 673;
        $this->model->name = 'Лебедки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1318;
        $this->model->sort = 676;
        $this->model->name = 'Спортивные очки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1331;
        $this->model->sort = 681;
        $this->model->name = '  Защита';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1329;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1336;
        $this->model->sort = 683;
        $this->model->name = 'Скейтбординг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1671;
        $this->model->sort = 685;
        $this->model->name = 'Игровые комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1406;
        $this->model->sort = 687;
        $this->model->name = 'Трансмиссия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1397;
        $this->model->sort = 689;
        $this->model->name = 'Салон';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1435;
        $this->model->sort = 691;
        $this->model->name = 'GPS-навигаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1440;
        $this->model->sort = 694;
        $this->model->name = 'Технические очистители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1399;
        $this->model->sort = 696;
        $this->model->name = 'Сигналы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1377;
        $this->model->sort = 699;
        $this->model->name = 'Брелоки и чехлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1370;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1316;
        $this->model->sort = 701;
        $this->model->name = '  Велоперчатки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1382;
        $this->model->sort = 704;
        $this->model->name = 'Запчасти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1400;
        $this->model->sort = 706;
        $this->model->name = 'Система выпуска';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1314;
        $this->model->sort = 710;
        $this->model->name = ' Велорюкзаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1394;
        $this->model->sort = 712;
        $this->model->name = 'Рулевое управление';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1403;
        $this->model->sort = 713;
        $this->model->name = 'Топливная система';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1464;
        $this->model->sort = 718;
        $this->model->name = 'Квадрокоптеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1431;
        $this->model->sort = 721;
        $this->model->name = 'Спутниковые телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1455;
        $this->model->sort = 723;
        $this->model->name = '  Компасы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1765;
        $this->model->sort = 726;
        $this->model->name = 'Входные двери';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1499;
        $this->model->sort = 728;
        $this->model->name = 'Ручные стабилизаторы и стедикамы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1491;
        $this->model->sort = 732;
        $this->model->name = 'Калькуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2152;
        $this->model->sort = 1071;
        $this->model->name = ' Сварочные аппараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1395;
        $this->model->sort = 736;
        $this->model->name = 'Чехлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1460;
        $this->model->sort = 738;
        $this->model->name = 'Надувные лодки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1321;
        $this->model->sort = 739;
        $this->model->name = 'Самокаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1407;
        $this->model->sort = 742;
        $this->model->name = 'Внешние аккумуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1672;
        $this->model->sort = 745;
        $this->model->name = 'Охота и рыбалка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1537;
        $this->model->sort = 747;
        $this->model->name = 'Души и душевые кабины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1535;
        $this->model->sort = 749;
        $this->model->name = 'Ванны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1475;
        $this->model->sort = 752;
        $this->model->name = 'Диктофоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1550;
        $this->model->sort = 753;
        $this->model->name = 'Краны для холодной воды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1552;
        $this->model->sort = 755;
        $this->model->name = 'Материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1469;
        $this->model->sort = 758;
        $this->model->name = 'Сварочное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1488;
        $this->model->sort = 759;
        $this->model->name = 'Ручные инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1553;
        $this->model->sort = 764;
        $this->model->name = 'Отделочные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1552;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1556;
        $this->model->sort = 765;
        $this->model->name = 'Строительные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1552;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1561;
        $this->model->sort = 768;
        $this->model->name = 'Провода, кабели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1574;
        $this->model->sort = 771;
        $this->model->name = 'Электроустановочные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1643;
        $this->model->sort = 773;
        $this->model->name = 'Зарядные устройства для аккумуляторов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1630;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1484;
        $this->model->sort = 774;
        $this->model->name = 'Радиоприемники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1472;
        $this->model->sort = 776;
        $this->model->name = 'Электронные книги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1673;
        $this->model->sort = 780;
        $this->model->name = 'Велоспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1525;
        $this->model->sort = 782;
        $this->model->name = 'Холодильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1518;
        $this->model->sort = 784;
        $this->model->name = 'Телескопы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1500;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1526;
        $this->model->sort = 786;
        $this->model->name = 'Обогреватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1530;
        $this->model->sort = 787;
        $this->model->name = 'Соковыжималки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1296;
        $this->model->sort = 791;
        $this->model->name = ' Самокаты и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2153;
        $this->model->sort = 1069;
        $this->model->name = 'Глубинные вибраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1276;
        $this->model->sort = 669;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1269;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1312;
        $this->model->sort = 671;
        $this->model->name = ' Защита';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1363;
        $this->model->sort = 679;
        $this->model->name = 'Фонари';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1593;
        $this->model->sort = 805;
        $this->model->name = 'Смесители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1019;
        $this->model->sort = 816;
        $this->model->name = 'Настольные лампы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1757;
        $this->model->sort = 817;
        $this->model->name = 'Бадминтон';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1761;
        $this->model->sort = 819;
        $this->model->name = 'Сквош';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1760;
        $this->model->sort = 820;
        $this->model->name = 'Дартс';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1603;
        $this->model->sort = 823;
        $this->model->name = 'DVD и Blu-ray плееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1513;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1769;
        $this->model->sort = 828;
        $this->model->name = 'Ворота';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1847;
        $this->model->sort = 830;
        $this->model->name = 'Беговые лыжи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1775;
        $this->model->sort = 836;
        $this->model->name = 'Почтовые ящики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1779;
        $this->model->sort = 838;
        $this->model->name = 'Рольставни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1793;
        $this->model->sort = 840;
        $this->model->name = 'Затирочные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1792;
        $this->model->sort = 842;
        $this->model->name = 'Строительные вибраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1795;
        $this->model->sort = 844;
        $this->model->name = 'Погрузчики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2123;
        $this->model->sort = 1073;
        $this->model->name = 'Досуг и развлечения';
        $this->model->icon = 'fas fa-gamepad';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1731;
        $this->model->sort = 847;
        $this->model->name = 'Наручные часы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1714;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1715;
        $this->model->sort = 849;
        $this->model->name = 'Альпинизм';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1700;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1575;
        $this->model->sort = 851;
        $this->model->name = 'Принтеры и МФУ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1564;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1777;
        $this->model->sort = 853;
        $this->model->name = 'Ринги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1764;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1755;
        $this->model->sort = 856;
        $this->model->name = 'Большой теннис';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1588;
        $this->model->sort = 857;
        $this->model->name = 'Шуруповерты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1848;
        $this->model->sort = 859;
        $this->model->name = 'Горные лыжи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1860;
        $this->model->sort = 861;
        $this->model->name = 'Детям';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1855;
        $this->model->sort = 863;
        $this->model->name = 'Коллекторные шкафы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1818;
        $this->model->sort = 865;
        $this->model->name = 'Коллекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1783;
        $this->model->sort = 867;
        $this->model->name = 'Удилища';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1786;
        $this->model->sort = 869;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1798;
        $this->model->sort = 871;
        $this->model->name = 'Кобуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1796;
        $this->model->sort = 874;
        $this->model->name = 'Кейсы и чехлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1894;
        $this->model->sort = 877;
        $this->model->name = 'Компьютерные кресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1886;
        $this->model->sort = 881;
        $this->model->name = 'Стриминг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1854;
        $this->model->sort = 883;
        $this->model->name = 'Коньки и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1743;
        $this->model->sort = 887;
        $this->model->name = 'Газонокосилки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1736;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1785;
        $this->model->sort = 890;
        $this->model->name = 'Рыболовные принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1809;
        $this->model->sort = 892;
        $this->model->name = 'Баки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1816;
        $this->model->sort = 894;
        $this->model->name = 'Мини-тракторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1834;
        $this->model->sort = 896;
        $this->model->name = 'Дровоколы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1846;
        $this->model->sort = 899;
        $this->model->name = 'Пикник, барбекю, гриль';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2157;
        $this->model->sort = 1075;
        $this->model->name = 'Вибрационные плиты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1850;
        $this->model->sort = 903;
        $this->model->name = 'Грили, барбекю, коптильни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1459;
        $this->model->sort = 1634;
        $this->model->name = 'GPS-трекеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1451;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1758;
        $this->model->sort = 795;
        $this->model->name = 'Игровые столы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1605;
        $this->model->sort = 798;
        $this->model->name = 'Вентиляция';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1538;
        $this->model->sort = 800;
        $this->model->name = 'Роботы-пылесосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1614;
        $this->model->sort = 801;
        $this->model->name = 'Тепловые насосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1536;
        $this->model->sort = 804;
        $this->model->name = 'Посудомоечные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1594;
        $this->model->sort = 808;
        $this->model->name = 'ИБП для отопительных котлов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1598;
        $this->model->sort = 810;
        $this->model->name = 'Газовые баллоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1589;
        $this->model->sort = 812;
        $this->model->name = 'Теплоаккумуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1766;
        $this->model->sort = 832;
        $this->model->name = 'Дверные коробки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1920;
        $this->model->sort = 932;
        $this->model->name = 'Лестницы и поручни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1919;
        $this->model->sort = 933;
        $this->model->name = 'Семена и саженцы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1954;
        $this->model->sort = 936;
        $this->model->name = 'Карты памяти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1925;
        $this->model->sort = 939;
        $this->model->name = 'Сауны и бани';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1928;
        $this->model->sort = 940;
        $this->model->name = 'Луковичные растения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1919;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1962;
        $this->model->sort = 942;
        $this->model->name = 'Штативы и моноподы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1888;
        $this->model->sort = 945;
        $this->model->name = 'Скамейки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1885;
        $this->model->sort = 947;
        $this->model->name = 'Садовые качели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1979;
        $this->model->sort = 950;
        $this->model->name = 'Фотопринтеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1985;
        $this->model->sort = 952;
        $this->model->name = 'Тату оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2035;
        $this->model->sort = 954;
        $this->model->name = 'GPS-навигаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2034;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2053;
        $this->model->sort = 1077;
        $this->model->name = 'Телевизоры и мониторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1935;
        $this->model->sort = 958;
        $this->model->name = 'Бочки и купели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2029;
        $this->model->sort = 960;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2011;
        $this->model->sort = 963;
        $this->model->name = 'Робототехника и конструкторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2008;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1900;
        $this->model->sort = 965;
        $this->model->name = 'Подвесные кресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1912;
        $this->model->sort = 967;
        $this->model->name = 'Аксессуары для качелей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1904;
        $this->model->sort = 971;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1902;
        $this->model->sort = 972;
        $this->model->name = 'Бассейны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1938;
        $this->model->sort = 973;
        $this->model->name = 'Двери';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1955;
        $this->model->sort = 976;
        $this->model->name = 'Парники и дуги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1952;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1957;
        $this->model->sort = 979;
        $this->model->name = 'Теплицы и каркасы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1952;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2000;
        $this->model->sort = 981;
        $this->model->name = 'Климат';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1989;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1998;
        $this->model->sort = 983;
        $this->model->name = 'Безопасность';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1989;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2037;
        $this->model->sort = 985;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2034;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2070;
        $this->model->sort = 988;
        $this->model->name = ' Солярии';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2073;
        $this->model->sort = 989;
        $this->model->name = 'Оборудование для автосервисов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2072;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2077;
        $this->model->sort = 994;
        $this->model->name = ' Развлекательное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2072;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2089;
        $this->model->sort = 996;
        $this->model->name = 'Насосы промышленные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2007;
        $this->model->sort = 999;
        $this->model->name = 'Лопаты и буры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1974;
        $this->model->sort = 1000;
        $this->model->name = 'Вилы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2015;
        $this->model->sort = 1002;
        $this->model->name = 'Квадрокоптеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2008;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1929;
        $this->model->sort = 1004;
        $this->model->name = 'Печи для бань';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1945;
        $this->model->sort = 1006;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1965;
        $this->model->sort = 1009;
        $this->model->name = 'Средства от грызунов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2045;
        $this->model->sort = 1037;
        $this->model->name = 'FM-трансмиттеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1869;
        $this->model->sort = 907;
        $this->model->name = 'Очаги для костра';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1881;
        $this->model->sort = 910;
        $this->model->name = 'Тандыры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1947;
        $this->model->sort = 915;
        $this->model->name = 'Квадрокоптеры с камерой';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1944;
        $this->model->sort = 917;
        $this->model->name = 'Видеокамеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1949;
        $this->model->sort = 918;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1890;
        $this->model->sort = 920;
        $this->model->name = 'Вертела';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1893;
        $this->model->sort = 922;
        $this->model->name = 'Противни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1910;
        $this->model->sort = 925;
        $this->model->name = 'Столы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2022;
        $this->model->sort = 927;
        $this->model->name = 'Души';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2019;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1292;
        $this->model->sort = 1627;
        $this->model->name = 'Моторные масла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1939;
        $this->model->sort = 912;
        $this->model->name = 'Экшн-камеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = [
            'Экшн-камеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2079;
        $this->model->sort = 1053;
        $this->model->name = '  Сейфы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2100;
        $this->model->sort = 1055;
        $this->model->name = '  Пищевое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2120;
        $this->model->sort = 1058;
        $this->model->name = 'Головные уборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2118;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2097;
        $this->model->sort = 1026;
        $this->model->name = 'Упаковочные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2099;
        $this->model->sort = 1028;
        $this->model->name = 'Индустриальные масла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2105;
        $this->model->sort = 1030;
        $this->model->name = ' Прочее оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2106;
        $this->model->sort = 1032;
        $this->model->name = 'Пароконвектоматы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2046;
        $this->model->sort = 1034;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 735;
        $this->model->sort = 1530;
        $this->model->name = 'Медицинские приборы и изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2138;
        $this->model->sort = 1068;
        $this->model->name = 'Строительство';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2151;
        $this->model->sort = 1070;
        $this->model->name = 'Затирочные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2148;
        $this->model->sort = 1072;
        $this->model->name = 'Растворосмесители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2054;
        $this->model->sort = 1074;
        $this->model->name = 'Устройства громкой связи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2051;
        $this->model->sort = 1076;
        $this->model->name = 'Радиостанции';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2058;
        $this->model->sort = 1079;
        $this->model->name = 'Телескопы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2088;
        $this->model->sort = 1081;
        $this->model->name = 'Промышленное производство';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1996;
        $this->model->sort = 1083;
        $this->model->name = 'Готовые пруды и чаши';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2013;
        $this->model->sort = 1086;
        $this->model->name = 'Насадки и изливы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2023;
        $this->model->sort = 1087;
        $this->model->name = 'Свернуть';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2017;
        $this->model->sort = 1089;
        $this->model->name = 'Подсветка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2161;
        $this->model->sort = 1091;
        $this->model->name = ' Расходные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2158;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2162;
        $this->model->sort = 1093;
        $this->model->name = 'Режущие плоттеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2158;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2168;
        $this->model->sort = 1096;
        $this->model->name = 'Гитары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2145;
        $this->model->sort = 1098;
        $this->model->name = 'Смычковые инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2155;
        $this->model->sort = 1099;
        $this->model->name = 'Ударные инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2171;
        $this->model->sort = 1102;
        $this->model->name = 'Книги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2191;
        $this->model->sort = 1103;
        $this->model->name = 'Журналы и газеты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2173;
        $this->model->sort = 1105;
        $this->model->name = 'Аудиокниги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2184;
        $this->model->sort = 1107;
        $this->model->name = 'Медицина';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2139;
        $this->model->sort = 1109;
        $this->model->name = 'Строительство';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2177;
        $this->model->sort = 1112;
        $this->model->name = 'Бизнес и экономика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2193;
        $this->model->sort = 1115;
        $this->model->name = 'Прочее';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2206;
        $this->model->sort = 1116;
        $this->model->name = 'ККИ и ЖКИ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 869;
        $this->model->sort = 1702;
        $this->model->name = 'Принадлежности для купания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 866;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2012;
        $this->model->sort = 1041;
        $this->model->name = 'Ледорубы и скребки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2014;
        $this->model->sort = 1042;
        $this->model->name = 'Плодосборники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2019;
        $this->model->sort = 1052;
        $this->model->name = 'Души и умывальники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2239;
        $this->model->sort = 1143;
        $this->model->name = '   Прочие комплектующие ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1402;
        $this->model->sort = 1390;
        $this->model->name = 'Стекла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1966;
        $this->model->sort = 1013;
        $this->model->name = 'Компостеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1986;
        $this->model->sort = 1015;
        $this->model->name = 'Биотуалеты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1977;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2083;
        $this->model->sort = 1018;
        $this->model->name = 'ИК-прожекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1423;
        $this->model->sort = 1019;
        $this->model->name = 'Запчасти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2101;
        $this->model->sort = 1022;
        $this->model->name = 'Тестомесильные и тестораскаточные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2047;
        $this->model->sort = 1025;
        $this->model->name = 'Антенны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2257;
        $this->model->sort = 1148;
        $this->model->name = '  Веб-камеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2300;
        $this->model->sort = 1153;
        $this->model->name = 'Флаги и гербы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2302;
        $this->model->sort = 1155;
        $this->model->name = 'Игровые приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2186;
        $this->model->sort = 1159;
        $this->model->name = 'Юридическая литература';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2213;
        $this->model->sort = 1163;
        $this->model->name = 'Домино и лото';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2267;
        $this->model->sort = 1175;
        $this->model->name = 'Ламинаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2296;
        $this->model->sort = 1176;
        $this->model->name = 'Цирк';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2313;
        $this->model->sort = 1178;
        $this->model->name = 'Лепка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2271;
        $this->model->sort = 1181;
        $this->model->name = 'Брошюровщики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2346;
        $this->model->sort = 1183;
        $this->model->name = 'Вытяжки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2374;
        $this->model->sort = 1186;
        $this->model->name = 'Утюги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2372;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 708;
        $this->model->sort = 1707;
        $this->model->name = 'Маски медицинские';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2358;
        $this->model->sort = 1189;
        $this->model->name = 'Фильтры для вытяжек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2373;
        $this->model->sort = 1192;
        $this->model->name = 'Стиральные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2372;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2372;
        $this->model->sort = 1195;
        $this->model->name = 'Техника для дома';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2339;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2314;
        $this->model->sort = 1196;
        $this->model->name = 'Аппликация и декорирование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2318;
        $this->model->sort = 1198;
        $this->model->name = 'Валяние';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2309;
        $this->model->sort = 1200;
        $this->model->name = 'Декупаж';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2307;
        $this->model->sort = 1202;
        $this->model->name = 'Вязание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2264;
        $this->model->sort = 1204;
        $this->model->name = '   Факсы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2324;
        $this->model->sort = 1207;
        $this->model->name = 'Картриджи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2336;
        $this->model->sort = 1209;
        $this->model->name = 'Уголь для кальянов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2329;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2345;
        $this->model->sort = 1213;
        $this->model->name = 'Плиты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2389;
        $this->model->sort = 1216;
        $this->model->name = 'Осушители воздуха';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2394;
        $this->model->sort = 1217;
        $this->model->name = 'Обогреватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2395;
        $this->model->sort = 1221;
        $this->model->name = 'Отопительные котлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2375;
        $this->model->sort = 1225;
        $this->model->name = 'Парогенераторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2372;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2263;
        $this->model->sort = 1227;
        $this->model->name = ' Сканеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2380;
        $this->model->sort = 1229;
        $this->model->name = 'Отпариватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2372;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2284;
        $this->model->sort = 1232;
        $this->model->name = '  Оборудование для АТС';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2392;
        $this->model->sort = 1237;
        $this->model->name = 'Ионизаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2436;
        $this->model->sort = 1247;
        $this->model->name = 'Мясорубки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2488;
        $this->model->sort = 1251;
        $this->model->name = 'DVD и Blu-ray плееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2445;
        $this->model->sort = 1253;
        $this->model->name = 'Техника для красоты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2339;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2401;
        $this->model->sort = 1219;
        $this->model->name = 'Духовые шкафы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = [
            'Духовые шкафы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2386;
        $this->model->sort = 1239;
        $this->model->name = 'Вентиляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = [
            'Вентиляторы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2385;
        $this->model->sort = 1233;
        $this->model->name = 'Водонагреватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = [
            'Водонагреватели.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2387;
        $this->model->sort = 1235;
        $this->model->name = 'Климатизаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = [
            'Климатизаторы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2427;
        $this->model->sort = 1246;
        $this->model->name = 'Блендеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = [
            'Блендеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2208;
        $this->model->sort = 1137;
        $this->model->name = 'RPG';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2234;
        $this->model->sort = 1139;
        $this->model->name = 'Материнские платы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2220;
        $this->model->sort = 1140;
        $this->model->name = 'Сувениры Яндекс';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2217;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2238;
        $this->model->sort = 1142;
        $this->model->name = 'Видеозахват';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2203;
        $this->model->sort = 1145;
        $this->model->name = 'Настольный футбол, хоккей, бильярд';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2224;
        $this->model->sort = 1165;
        $this->model->name = 'Настольные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2210;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2294;
        $this->model->sort = 1166;
        $this->model->name = 'Спорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2273;
        $this->model->sort = 1170;
        $this->model->name = ' Калькуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2329;
        $this->model->sort = 1173;
        $this->model->name = 'Кальяны и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2459;
        $this->model->sort = 1258;
        $this->model->name = 'Приборы для ухода за телом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2420;
        $this->model->sort = 1261;
        $this->model->name = 'Стабилизаторы напряжения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2344;
        $this->model->sort = 1270;
        $this->model->name = 'USB Flash drive';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2331;
        $this->model->sort = 1273;
        $this->model->name = '    Чернила, тонеры, фотобарабаны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2352;
        $this->model->sort = 1276;
        $this->model->name = '  USB-концентраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2494;
        $this->model->sort = 1278;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2434;
        $this->model->sort = 1279;
        $this->model->name = 'USB-концентраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2430;
        $this->model->sort = 1281;
        $this->model->name = '   Аксессуары для серверов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2464;
        $this->model->sort = 1283;
        $this->model->name = '3G/4G LTE и ADSL модемы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2421;
        $this->model->sort = 1286;
        $this->model->name = ' Аккумуляторные батареи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2469;
        $this->model->sort = 1289;
        $this->model->name = 'Принт-серверы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2470;
        $this->model->sort = 1291;
        $this->model->name = ' Кабели и разъемы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1838;
        $this->model->sort = 1406;
        $this->model->name = 'Группы безопасности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 904;
        $this->model->sort = 1787;
        $this->model->name = 'Книги по уходу за ребенком';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2482;
        $this->model->sort = 1295;
        $this->model->name = '  Антивирусы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2474;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1422;
        $this->model->sort = 1299;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2504;
        $this->model->sort = 1300;
        $this->model->name = 'Документ-камеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2475;
        $this->model->sort = 1303;
        $this->model->name = 'Освещение и электрика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2472;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2416;
        $this->model->sort = 1304;
        $this->model->name = ' Клавиатуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1007;
        $this->model->sort = 1306;
        $this->model->name = 'Сухие корма';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2419;
        $this->model->sort = 1308;
        $this->model->name = 'Коврики для мыши';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2431;
        $this->model->sort = 1313;
        $this->model->name = 'Чехлы для планшетов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1250;
        $this->model->sort = 1316;
        $this->model->name = 'Электрические щетки для лица';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2510;
        $this->model->sort = 1318;
        $this->model->name = '     Компьютерные столы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2506;
        $this->model->sort = 1320;
        $this->model->name = 'Организация рабочего места';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2507;
        $this->model->sort = 1322;
        $this->model->name = '            Бейджи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 733;
        $this->model->sort = 1326;
        $this->model->name = 'Анестезия, растворители и контрастные вещества';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 710;
        $this->model->sort = 1328;
        $this->model->name = 'Лекарственны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1011;
        $this->model->sort = 1330;
        $this->model->name = 'Расчески и щетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 173;
        $this->model->sort = 1332;
        $this->model->name = 'Посудомоечные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 110;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 496;
        $this->model->sort = 1334;
        $this->model->name = 'Электронные книги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 508;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2478;
        $this->model->sort = 1336;
        $this->model->name = 'Безопасность';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2472;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1020;
        $this->model->sort = 1339;
        $this->model->name = 'Уход за лицом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 759;
        $this->model->sort = 1340;
        $this->model->name = 'Бинты эластичные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 596;
        $this->model->sort = 1343;
        $this->model->name = 'Сухие ингредиенты для выпечки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 592;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 172;
        $this->model->sort = 1345;
        $this->model->name = 'Холодильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 110;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2078;
        $this->model->sort = 1354;
        $this->model->name = 'Охрана и сигнализация';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2298;
        $this->model->sort = 1356;
        $this->model->name = 'Нумизматика и филателия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 946;
        $this->model->sort = 1359;
        $this->model->name = ' Надувная, плетеная и прочая мебель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2335;
        $this->model->sort = 1361;
        $this->model->name = 'Кальяны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2329;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1233;
        $this->model->sort = 1363;
        $this->model->name = ' Чистящие и моющие средства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2448;
        $this->model->sort = 1256;
        $this->model->name = 'Машинки для стрижки и триммеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = [
            'Машинки для стрижки и триммеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2231;
        $this->model->sort = 1160;
        $this->model->name = ' Процессоры (CPU)';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = [
            'Процессоры (CPU).png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2458;
        $this->model->sort = 1263;
        $this->model->name = 'Напольные весы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2460;
        $this->model->sort = 1264;
        $this->model->name = 'Солярии';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2456;
        $this->model->sort = 1265;
        $this->model->name = 'Массажеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2440;
        $this->model->sort = 1268;
        $this->model->name = '  Аксессуары для принтеров и МФУ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1369;
        $this->model->sort = 1371;
        $this->model->name = 'Аксессуары, расходные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1353;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1243;
        $this->model->sort = 1377;
        $this->model->name = 'Напольные весы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 666;
        $this->model->sort = 1379;
        $this->model->name = 'Мороженое';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 661;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1346;
        $this->model->sort = 1383;
        $this->model->name = 'Автомобильные инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1866;
        $this->model->sort = 1384;
        $this->model->name = 'Защита и экипировка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1465;
        $this->model->sort = 1387;
        $this->model->name = 'Автомобили';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1462;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 484;
        $this->model->sort = 1392;
        $this->model->name = 'Спутниковые телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 502;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1293;
        $this->model->sort = 1394;
        $this->model->name = 'Велосипеды для взрослых и детей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2531;
        $this->model->sort = 1400;
        $this->model->name = 'Компьютерные кресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2532;
        $this->model->sort = 1401;
        $this->model->name = '  Игровые столы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1807;
        $this->model->sort = 1403;
        $this->model->name = 'Водоснабжение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1608;
        $this->model->sort = 1405;
        $this->model->name = 'Теплоноситель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1555;
        $this->model->sort = 1410;
        $this->model->name = 'Лакокрасочные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1552;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1764;
        $this->model->sort = 1413;
        $this->model->name = 'Бокс и единоборства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1653;
        $this->model->sort = 1415;
        $this->model->name = 'Игровые компьютеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 652;
        $this->model->sort = 1417;
        $this->model->name = 'Фарш';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 649;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1023;
        $this->model->sort = 1422;
        $this->model->name = 'Очищение и снятие макияжа';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1416;
        $this->model->sort = 1424;
        $this->model->name = 'Ветровые стекла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2039;
        $this->model->sort = 1427;
        $this->model->name = 'Техника для авто';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1385;
        $this->model->sort = 1429;
        $this->model->name = 'Автосвет';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1649;
        $this->model->sort = 1431;
        $this->model->name = 'Люстры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1645;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 516;
        $this->model->sort = 1433;
        $this->model->name = 'Спутниковые телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 477;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 547;
        $this->model->sort = 1436;
        $this->model->name = 'Сухари, баранки, сушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 658;
        $this->model->sort = 1438;
        $this->model->name = 'Пресервы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 655;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 537;
        $this->model->sort = 1441;
        $this->model->name = ' Конфеты в коробках, подарочные наборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 856;
        $this->model->sort = 1448;
        $this->model->name = 'Подгузники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1183;
        $this->model->sort = 1449;
        $this->model->name = 'Камеры заднего вида';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 935;
        $this->model->sort = 1453;
        $this->model->name = 'Рации_935';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 492;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1424;
        $this->model->sort = 1454;
        $this->model->name = 'Радиотелефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1557;
        $this->model->sort = 1456;
        $this->model->name = 'Крепеж и фурнитура';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1552;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2200;
        $this->model->sort = 1458;
        $this->model->name = 'Игры в дорогу';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1428;
        $this->model->sort = 1462;
        $this->model->name = 'Рации';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1427;
        $this->model->sort = 1464;
        $this->model->name = 'Фонари';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1379;
        $this->model->sort = 1465;
        $this->model->name = ' Палатки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 607;
        $this->model->sort = 1532;
        $this->model->name = 'Мед и продукты пчеловодства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 604;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1425;
        $this->model->sort = 1469;
        $this->model->name = 'Рюкзаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1696;
        $this->model->sort = 1471;
        $this->model->name = 'Ортопедические изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1690;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2523;
        $this->model->sort = 1473;
        $this->model->name = 'Мобильный гейминг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1448;
        $this->model->sort = 1475;
        $this->model->name = ' Коврики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1692;
        $this->model->sort = 1477;
        $this->model->name = 'Медицинские приборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1690;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 656;
        $this->model->sort = 1479;
        $this->model->name = ' Икра';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 655;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 498;
        $this->model->sort = 1480;
        $this->model->name = 'Магнитолы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 497;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2586;
        $this->model->sort = 1484;
        $this->model->name = '   GPS-навигаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2584;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2589;
        $this->model->sort = 1485;
        $this->model->name = 'GPS-трекеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2584;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2599;
        $this->model->sort = 1488;
        $this->model->name = 'Бортовые компьютеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1811;
        $this->model->sort = 1491;
        $this->model->name = 'Водяные насосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2588;
        $this->model->sort = 1492;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2584;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2598;
        $this->model->sort = 1495;
        $this->model->name = ' Антенны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2513;
        $this->model->sort = 1368;
        $this->model->name = ' Источники бесперебойного питания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1177;
        $this->model->sort = 1373;
        $this->model->name = '  Декоративные телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 954;
        $this->model->sort = 1376;
        $this->model->name = 'Сервировка стола';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 934;
        $this->model->sort = 1420;
        $this->model->name = '  Посуда и кухонные принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1907;
        $this->model->sort = 1504;
        $this->model->name = 'Павильоны для бассейнов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1956;
        $this->model->sort = 1505;
        $this->model->name = 'Удобрения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2103;
        $this->model->sort = 1513;
        $this->model->name = 'Жарочные и пекарские шкафы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2600;
        $this->model->sort = 1515;
        $this->model->name = 'Камеры заднего вида';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2602;
        $this->model->sort = 1517;
        $this->model->name = 'Алкотестеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 980;
        $this->model->sort = 1520;
        $this->model->name = 'Маски и сыворотки для волос';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 968;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2608;
        $this->model->sort = 1528;
        $this->model->name = '  Бинокли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2607;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 767;
        $this->model->sort = 1531;
        $this->model->name = 'Обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 761;
        $this->model->sort = 1533;
        $this->model->name = 'Лечебные согревающие изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2609;
        $this->model->sort = 1527;
        $this->model->name = ' Телескопы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2607;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 780;
        $this->model->sort = 1537;
        $this->model->name = ' Уход за больными';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1174;
        $this->model->sort = 1540;
        $this->model->name = 'Косметические наборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2594;
        $this->model->sort = 1542;
        $this->model->name = '   Радар-детекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 526;
        $this->model->sort = 1545;
        $this->model->name = 'Растворимый кофе';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1120;
        $this->model->sort = 1548;
        $this->model->name = 'Парфюмерия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2360;
        $this->model->sort = 1549;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2496;
        $this->model->sort = 1553;
        $this->model->name = 'Спутниковое и кабельное телевидение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1370;
        $this->model->sort = 1556;
        $this->model->name = 'Противоугонные устройства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1353;
        $this->model->sort = 1558;
        $this->model->name = 'Ветаптека';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1003;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1545;
        $this->model->sort = 1560;
        $this->model->name = ' Спортивное питание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1539;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1437;
        $this->model->sort = 1562;
        $this->model->name = 'Проводные телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2592;
        $this->model->sort = 1565;
        $this->model->name = '   Автомагнитолы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2244;
        $this->model->sort = 1567;
        $this->model->name = '      Периферийные устройства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1564;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1990;
        $this->model->sort = 1569;
        $this->model->name = 'Аксессуары и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1977;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2081;
        $this->model->sort = 1572;
        $this->model->name = 'Замки и фурнитура';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1483;
        $this->model->sort = 1574;
        $this->model->name = 'Погрузчики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1473;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2156;
        $this->model->sort = 1576;
        $this->model->name = 'Вибротрамбовки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2209;
        $this->model->sort = 1578;
        $this->model->name = 'Варгеймы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2291;
        $this->model->sort = 1579;
        $this->model->name = 'Сувениры Авто.ру';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2217;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 686;
        $this->model->sort = 1585;
        $this->model->name = 'Орехи, семена, сухофрукты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 523;
        $this->model->sort = 1588;
        $this->model->name = 'Кофе в зернах';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1697;
        $this->model->sort = 1594;
        $this->model->name = 'Оптика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1690;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 504;
        $this->model->sort = 1596;
        $this->model->name = 'Аксессуары для цифровых плееров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 492;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1685;
        $this->model->sort = 1598;
        $this->model->name = 'Хоккей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1675;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 805;
        $this->model->sort = 1601;
        $this->model->name = 'Одноразовая одежда и материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 48;
        $this->model->sort = 1604;
        $this->model->name = 'для iPhone 8';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 52;
        $this->model->sort = 1605;
        $this->model->name = 'Мини PC';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 512;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 357;
        $this->model->sort = 1609;
        $this->model->name = 'Ноутбуки, компьютеры, мониторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 215;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 655;
        $this->model->sort = 1613;
        $this->model->name = 'Рыбная гастрономия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 11;
        $this->model->sort = 1615;
        $this->model->name = 'Apple';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 505;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1008;
        $this->model->sort = 1617;
        $this->model->name = 'Электробигуди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1636;
        $this->model->sort = 1620;
        $this->model->name = 'Радар-детекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1630;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1198;
        $this->model->sort = 1621;
        $this->model->name = 'Лак для ногтей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1245;
        $this->model->sort = 1625;
        $this->model->name = ' Для ухода за бытовой техникой';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1651;
        $this->model->sort = 1611;
        $this->model->name = 'Игровые ноутбуки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = [
            'Игровые ноутбуки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1357;
        $this->model->sort = 1630;
        $this->model->name = 'Пассатижи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1359;
        $this->model->sort = 1631;
        $this->model->name = 'Прочие инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1602;
        $this->model->sort = 1499;
        $this->model->name = 'Унитазы, писсуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1272;
        $this->model->sort = 1502;
        $this->model->name = 'Уход за кожей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1269;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1418;
        $this->model->sort = 1507;
        $this->model->name = ' Спальные мешки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2584;
        $this->model->sort = 1510;
        $this->model->name = '   GPS-навигация';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2451;
        $this->model->sort = 1666;
        $this->model->name = 'Уход за полостью рта';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2425;
        $this->model->sort = 1668;
        $this->model->name = 'Держатели для проводов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1254;
        $this->model->sort = 1671;
        $this->model->name = 'Аксессуары для электробритв и эпиляторов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 734;
        $this->model->sort = 1674;
        $this->model->name = 'Борьба с вредными привычками';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1304;
        $this->model->sort = 1676;
        $this->model->name = ' Ножи и мультитулы для туризма';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 968;
        $this->model->sort = 1679;
        $this->model->name = 'Популярное';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1533;
        $this->model->sort = 1680;
        $this->model->name = 'Блендеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1832;
        $this->model->sort = 1682;
        $this->model->name = 'Женские кроссовки и кеды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1915;
        $this->model->sort = 1686;
        $this->model->name = 'Тенты и подстилки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1806;
        $this->model->sort = 1689;
        $this->model->name = 'Сумки и ящики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1749;
        $this->model->sort = 1691;
        $this->model->name = 'Воздуходувки и садовые пылесосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1736;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1862;
        $this->model->sort = 1694;
        $this->model->name = 'Канализационные трубы и фитинги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2308;
        $this->model->sort = 1697;
        $this->model->name = 'Скрапбукинг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1981;
        $this->model->sort = 1700;
        $this->model->name = 'Для косметологов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2400;
        $this->model->sort = 1703;
        $this->model->name = 'Варочные панели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1373;
        $this->model->sort = 1706;
        $this->model->name = 'Механические блокираторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1370;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1419;
        $this->model->sort = 1710;
        $this->model->name = 'Мотоциклы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 994;
        $this->model->sort = 1712;
        $this->model->name = 'Наборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 983;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1800;
        $this->model->sort = 1715;
        $this->model->name = 'Подсумки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1481;
        $this->model->sort = 1717;
        $this->model->name = 'Коммунальная техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1473;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1453;
        $this->model->sort = 1722;
        $this->model->name = ' Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1435;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1774;
        $this->model->sort = 1725;
        $this->model->name = 'Двери для саун и бань';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1562;
        $this->model->sort = 1727;
        $this->model->name = 'Электромонтажные работы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 540;
        $this->model->sort = 1728;
        $this->model->name = 'Торты, пирожные, бисквиты, коржи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2612;
        $this->model->sort = 1733;
        $this->model->name = '  Лупы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2607;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2611;
        $this->model->sort = 1734;
        $this->model->name = 'Приборы ночного видени';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2607;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1808;
        $this->model->sort = 1735;
        $this->model->name = 'Мотоблоки и культиваторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1799;
        $this->model->sort = 1736;
        $this->model->name = 'Коммунальная техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1804;
        $this->model->sort = 1737;
        $this->model->name = 'Электрогенераторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1611;
        $this->model->sort = 1738;
        $this->model->name = 'Детский транспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1609;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 707;
        $this->model->sort = 1641;
        $this->model->name = 'Антибактериальные средства для рук';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 915;
        $this->model->sort = 1643;
        $this->model->name = ' Школьная форма и сменка для мальчиков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 998;
        $this->model->sort = 1647;
        $this->model->name = 'Маски и сыворотки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1546;
        $this->model->sort = 1649;
        $this->model->name = 'Водонагреватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1247;
        $this->model->sort = 1652;
        $this->model->name = 'Уход за полостью рта';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1959;
        $this->model->sort = 1655;
        $this->model->name = 'Садовый инвентарь и инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2009;
        $this->model->sort = 1658;
        $this->model->name = 'Декоративные фонтаны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2119;
        $this->model->sort = 1660;
        $this->model->name = '  Обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2118;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2158;
        $this->model->sort = 1662;
        $this->model->name = '  Издательство и полиграфия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2371;
        $this->model->sort = 1664;
        $this->model->name = 'Мойки высокого давления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2365;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1833;
        $this->model->sort = 1719;
        $this->model->name = 'Счетчики воды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1682;
        $this->model->sort = 1749;
        $this->model->name = 'Маски и сыворотки для волос';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1677;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 326;
        $this->model->sort = 1750;
        $this->model->name = 'Приготовление блюд';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 170;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1815;
        $this->model->sort = 1771;
        $this->model->name = 'Аксессуары для эхолотов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2418;
        $this->model->sort = 1773;
        $this->model->name = 'Комплекты клавиатур и мышей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1988;
        $this->model->sort = 1774;
        $this->model->name = 'Ручные секаторы, высоторезы, сучкорезы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 535;
        $this->model->sort = 1776;
        $this->model->name = 'Шоколадная плитка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 743;
        $this->model->sort = 1782;
        $this->model->name = 'Слуховые аппараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1740;
        $this->model->sort = 1784;
        $this->model->name = 'Наборы и аксессуары для каминов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 963;
        $this->model->sort = 1789;
        $this->model->name = ' Хозяйственные товары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1029;
        $this->model->sort = 1791;
        $this->model->name = 'Светодиодные ленты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1086;
        $this->model->sort = 1793;
        $this->model->name = 'Текстиль с электроподогревом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1164;
        $this->model->sort = 1796;
        $this->model->name = 'Оттеночные и камуфлирующие средства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1222;
        $this->model->sort = 1799;
        $this->model->name = 'Маникюрные и педикюрные принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1287;
        $this->model->sort = 1801;
        $this->model->name = 'Переходные рамки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1375;
        $this->model->sort = 1805;
        $this->model->name = 'Иммобилайзеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1370;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1494;
        $this->model->sort = 1807;
        $this->model->name = 'Прочие инструменты и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1814;
        $this->model->sort = 1811;
        $this->model->name = 'Расширительные баки и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2625;
        $this->model->sort = 1747;
        $this->model->name = 'Смартфоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '2',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2619;
        $this->model->image = [
            'Смартфоны.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1940;
        $this->model->sort = 1813;
        $this->model->name = 'Аксессуары для рассады';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1980;
        $this->model->sort = 1815;
        $this->model->name = 'Жидкости и наполнители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1977;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2122;
        $this->model->sort = 1817;
        $this->model->name = ' Чистящая и моющая техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2354;
        $this->model->sort = 1823;
        $this->model->name = 'Морозильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2288;
        $this->model->sort = 1826;
        $this->model->name = ' Резаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2383;
        $this->model->sort = 1827;
        $this->model->name = 'Климатическая техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2339;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2414;
        $this->model->sort = 1832;
        $this->model->name = 'Мелкая техника для кухни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2339;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2107;
        $this->model->sort = 1834;
        $this->model->name = 'Промышленные посудомоечные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2629;
        $this->model->sort = 1746;
        $this->model->name = 'Портативная техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '2',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = [
            [
                'shop_option_branch_id' => '9',
            ],
        ];
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1211;
        $this->model->sort = 1743;
        $this->model->name = 'Гроты для аквариумов и террариумов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2486;
        $this->model->sort = 1756;
        $this->model->name = 'Аудио- и видеотехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2056;
        $this->model->sort = 1759;
        $this->model->name = 'Оптические приборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 984;
        $this->model->sort = 1761;
        $this->model->name = 'Лицо';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 983;
        $this->model->image = [
            'orig.webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 990;
        $this->model->sort = 1763;
        $this->model->name = 'Глаза';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 983;
        $this->model->image = [
            'orig.webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2043;
        $this->model->sort = 1764;
        $this->model->name = 'Радар-детекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 964;
        $this->model->sort = 1765;
        $this->model->name = 'Товары для красоты';
        $this->model->icon = 'fas fa-atom';
        $this->model->shop_brand_ids = [
            '4',
            '5',
            '6',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1452;
        $this->model->sort = 1767;
        $this->model->name = 'Строительство и ремонт';
        $this->model->icon = 'fas fa-building';
        $this->model->shop_brand_ids = [
            '9',
            '11',
            '17',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 599;
        $this->model->sort = 1871;
        $this->model->name = 'Сахарозаменители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 592;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 364;
        $this->model->sort = 1770;
        $this->model->name = 'Микроволновые печи';
        $this->model->icon = 'fas fa-address-book';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 170;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2347;
        $this->model->sort = 1829;
        $this->model->name = '   Карты памяти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1531;
        $this->model->sort = 1850;
        $this->model->name = 'Раковины, пьедесталы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1849;
        $this->model->sort = 1852;
        $this->model->name = 'Насосы и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1711;
        $this->model->sort = 1854;
        $this->model->name = 'Замороженные продукты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1708;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2533;
        $this->model->sort = 1863;
        $this->model->name = '  Стриминг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 356;
        $this->model->sort = 1866;
        $this->model->name = 'Системные блоки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 504;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 485;
        $this->model->sort = 1868;
        $this->model->name = 'Проводные телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 494;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 555;
        $this->model->sort = 1870;
        $this->model->name = 'Лимонады и газированные напитки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 552;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 728;
        $this->model->sort = 1874;
        $this->model->name = 'Лечение щитовидной железы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 902;
        $this->model->sort = 1880;
        $this->model->name = 'Радио- и видеоняни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 993;
        $this->model->sort = 1881;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 983;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 989;
        $this->model->sort = 1884;
        $this->model->name = ' Настенно-потолочные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1015;
        $this->model->sort = 1887;
        $this->model->name = 'Резинки, ободки, повязки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1213;
        $this->model->sort = 1890;
        $this->model->name = 'Грунты для аквариумов и террариумов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1180;
        $this->model->sort = 1893;
        $this->model->name = 'Бортовые компьютеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1408;
        $this->model->sort = 1896;
        $this->model->name = 'Подшипники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1519;
        $this->model->sort = 1898;
        $this->model->name = 'Сантехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1892;
        $this->model->sort = 923;
        $this->model->name = 'Гамаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2067;
        $this->model->sort = 1901;
        $this->model->name = 'Хна и трафареты для мехенди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2111;
        $this->model->sort = 1903;
        $this->model->name = 'Световое и сценическое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2174;
        $this->model->sort = 1906;
        $this->model->name = 'Художественная литература';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2175;
        $this->model->sort = 1907;
        $this->model->name = ' Наука и образование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2217;
        $this->model->sort = 1909;
        $this->model->name = 'Сувенирная продукция';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2362;
        $this->model->sort = 1912;
        $this->model->name = 'Средства для чистки кухонных плит';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2438;
        $this->model->sort = 1914;
        $this->model->name = 'Измельчение и смешивание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 404;
        $this->model->sort = 1917;
        $this->model->name = ' Телефоны и аксессуары';
        $this->model->icon = 'fas fa-mobile-alt';
        $this->model->shop_brand_ids = [
            '5',
            '6',
            '8',
            '10',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 505;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 949;
        $this->model->sort = 1919;
        $this->model->name = 'Посуда и кухонные принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1654;
        $this->model->sort = 1924;
        $this->model->name = 'Сковороды и сотейники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1645;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2250;
        $this->model->sort = 1821;
        $this->model->name = '  Клавиатуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = [
            'Клавиатуры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2247;
        $this->model->sort = 1840;
        $this->model->name = ' Мониторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = [
            'Мониторы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2519;
        $this->model->sort = 1836;
        $this->model->name = '  Игровые компьютеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = [
            'Игровые компьютеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2246;
        $this->model->sort = 1928;
        $this->model->name = '      Периферийные устройства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2348;
        $this->model->sort = 1930;
        $this->model->name = ' Устройства для чтения карт памяти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1456;
        $this->model->sort = 1933;
        $this->model->name = 'Карты и программы GPS-навигации';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1435;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 724;
        $this->model->sort = 1936;
        $this->model->name = 'Мочеполовая система и половые гормоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1026;
        $this->model->sort = 1938;
        $this->model->name = 'Наполнители для туалетов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1899;
        $this->model->sort = 970;
        $this->model->name = 'Бассейны и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1871;
        $this->model->sort = 1942;
        $this->model->name = 'Принтеры чеков, этикеток, штрих-кода';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = [
            'orig.webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 791;
        $this->model->sort = 282;
        $this->model->name = 'Питание для лечения и профилактики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 790;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 794;
        $this->model->sort = 284;
        $this->model->name = 'Шейкеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 790;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1154;
        $this->model->sort = 1842;
        $this->model->name = 'Копилки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 624;
        $this->model->sort = 1845;
        $this->model->name = 'Крепкий алкоголь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 618;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1819;
        $this->model->sort = 1847;
        $this->model->name = 'Вертикуттеры и аэраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 999;
        $this->model->sort = 1857;
        $this->model->name = 'Бальзамы и ополаскиватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1590;
        $this->model->sort = 1859;
        $this->model->name = 'Системы центрального кондиционирования';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2085;
        $this->model->sort = 1902;
        $this->model->name = 'Огнетушители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1667;
        $this->model->sort = 449;
        $this->model->name = 'Игровые аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1137;
        $this->model->sort = 545;
        $this->model->name = 'Кормушки, поилки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1124;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1223;
        $this->model->sort = 563;
        $this->model->name = 'Часы напольные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1280;
        $this->model->sort = 618;
        $this->model->name = 'Автоакустика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2227;
        $this->model->sort = 1130;
        $this->model->name = 'Серверы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2210;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2243;
        $this->model->sort = 1131;
        $this->model->name = ' Блоки питания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2619;
        $this->model->sort = 1944;
        $this->model->name = 'Смартфоны и умные часы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = [
            'Мобильные телефоны.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2265;
        $this->model->sort = 1205;
        $this->model->name = ' Проекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2326;
        $this->model->sort = 1206;
        $this->model->name = 'Чистящие принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2483;
        $this->model->sort = 1297;
        $this->model->name = 'Графические редакторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2474;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 779;
        $this->model->sort = 1346;
        $this->model->name = 'Массажные столы и стулья';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 773;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2269;
        $this->model->sort = 1389;
        $this->model->name = '     Расходные материалы для 3D печати';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 506;
        $this->model->sort = 1444;
        $this->model->name = 'Ручные стабилизаторы и стедикамы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 475;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2601;
        $this->model->sort = 1486;
        $this->model->name = ' Устройства громкой связи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2616;
        $this->model->sort = 1587;
        $this->model->name = 'newCaterogyr';
        $this->model->icon = 'fab fa-accusoft';
        $this->model->shop_brand_ids = [
            '3',
            '5',
            '17',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1278;
        $this->model->sort = 1591;
        $this->model->name = 'Аудио- и видеотехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 966;
        $this->model->sort = 1639;
        $this->model->name = 'Аксессуары для ухода за обувью';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1330;
        $this->model->sort = 1653;
        $this->model->name = 'Необходимый набор автомобилиста';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1745;
        $this->model->sort = 1685;
        $this->model->name = 'Серфинг и водные лыжи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 824;
        $this->model->sort = 1729;
        $this->model->name = ' Автокресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 822;
        $this->model->image = [
            'orig (3).webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 517;
        $this->model->sort = 1751;
        $this->model->name = 'Продукты';
        $this->model->icon = 'fas fa-apple-alt';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 797;
        $this->model->sort = 285;
        $this->model->name = 'Бинты и салфетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1138;
        $this->model->sort = 1946;
        $this->model->name = 'Спорт и отдых';
        $this->model->icon = 'fas fa-passport';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '20',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 681;
        $this->model->sort = 218;
        $this->model->name = 'Снэки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 740;
        $this->model->sort = 254;
        $this->model->name = 'Физиотерапевтические аппараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1691;
        $this->model->sort = 330;
        $this->model->name = 'Флорбол';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1675;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1326;
        $this->model->sort = 677;
        $this->model->name = ' Моноколеса и гироскутеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1524;
        $this->model->sort = 779;
        $this->model->name = 'Смесители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1587;
        $this->model->sort = 813;
        $this->model->name = 'Обогреватели электрические';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1836;
        $this->model->sort = 826;
        $this->model->name = 'Рюкзаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1873;
        $this->model->sort = 909;
        $this->model->name = 'Аксессуары для грилей и мангалов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2126;
        $this->model->sort = 1060;
        $this->model->name = 'Аксессуары и принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2122;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2131;
        $this->model->sort = 1063;
        $this->model->name = ' Банковское оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2116;
        $this->model->sort = 1122;
        $this->model->name = 'Промышленное климатическое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2059;
        $this->model->sort = 1123;
        $this->model->name = 'Микроскопы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2062;
        $this->model->sort = 1126;
        $this->model->name = 'Aксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2057;
        $this->model->sort = 1128;
        $this->model->name = 'Бинокли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1865;
        $this->model->sort = 1940;
        $this->model->name = 'Кассовые аппараты и POS системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 604;
        $this->model->sort = 267;
        $this->model->name = ' Консервация';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1237;
        $this->model->sort = 592;
        $this->model->name = 'Электробритвы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 729;
        $this->model->sort = 216;
        $this->model->name = 'Лечение астмы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 689;
        $this->model->sort = 220;
        $this->model->name = 'Семечки и семена';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 686;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 703;
        $this->model->sort = 232;
        $this->model->name = 'Кухни мира';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 671;
        $this->model->sort = 234;
        $this->model->name = 'Хлеб, лаваши, лепешки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 668;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 669;
        $this->model->sort = 235;
        $this->model->name = 'Хлеб и хлебобулочные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 668;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1659;
        $this->model->sort = 237;
        $this->model->name = 'Хозяйственные товары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1657;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1688;
        $this->model->sort = 238;
        $this->model->name = 'Регби и гандбол';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1675;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 739;
        $this->model->sort = 240;
        $this->model->name = 'Инфузионные помпы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 774;
        $this->model->sort = 242;
        $this->model->name = 'Гидромассажеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 773;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 755;
        $this->model->sort = 244;
        $this->model->name = 'Оправы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 756;
        $this->model->sort = 245;
        $this->model->name = 'Линзы для очков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 747;
        $this->model->sort = 247;
        $this->model->name = 'Миостимуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 749;
        $this->model->sort = 248;
        $this->model->name = 'Приборы для улучшения дыхания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 753;
        $this->model->sort = 251;
        $this->model->name = ' Увлажняющие капли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 745;
        $this->model->sort = 253;
        $this->model->name = 'Алкотестеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 732;
        $this->model->sort = 255;
        $this->model->name = 'Вакцины, сыворотки, фаги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 718;
        $this->model->sort = 256;
        $this->model->name = 'Лечение травм, болей в мышцах и суставах';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 716;
        $this->model->sort = 259;
        $this->model->name = 'Лечение грибка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 676;
        $this->model->sort = 261;
        $this->model->name = 'Уксус';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 742;
        $this->model->sort = 262;
        $this->model->name = 'Электрические грелки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 746;
        $this->model->sort = 263;
        $this->model->name = 'Миостимуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 773;
        $this->model->sort = 265;
        $this->model->name = 'Массажеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1712;
        $this->model->sort = 268;
        $this->model->name = 'Мотоспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1700;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1723;
        $this->model->sort = 270;
        $this->model->name = 'Женские сапоги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1714;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1050;
        $this->model->sort = 276;
        $this->model->name = 'Текстиль';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 783;
        $this->model->sort = 277;
        $this->model->name = 'Прокладки урологические';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 787;
        $this->model->sort = 278;
        $this->model->name = 'Ходунки, костыли и трости';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 792;
        $this->model->sort = 280;
        $this->model->name = 'Аксессуары и средства для обеспечения питания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 790;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2316;
        $this->model->sort = 1822;
        $this->model->name = 'Выжигание и выпиливание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1498;
        $this->model->sort = 1848;
        $this->model->name = 'Пневмоинструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1961;
        $this->model->sort = 1900;
        $this->model->name = 'Укрывной материал и пленка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1968;
        $this->model->sort = 1925;
        $this->model->name = 'Отпугиватели и ловушки для птиц и грызунов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1933;
        $this->model->sort = 1935;
        $this->model->name = 'Фотоаппараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 712;
        $this->model->sort = 222;
        $this->model->name = 'Лечение гриппа и простуды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 683;
        $this->model->sort = 224;
        $this->model->name = 'Сухарики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 681;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 765;
        $this->model->sort = 226;
        $this->model->name = ' Корсеты и корректоры осанки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 677;
        $this->model->sort = 227;
        $this->model->name = 'Аджика, маринады';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 678;
        $this->model->sort = 229;
        $this->model->name = 'Майонез';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 680;
        $this->model->sort = 231;
        $this->model->name = 'Свернуть';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 672;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1629;
        $this->model->sort = 271;
        $this->model->name = 'Товары для мам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1609;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 802;
        $this->model->sort = 289;
        $this->model->name = '  Бахилы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 807;
        $this->model->sort = 293;
        $this->model->name = 'Народная медицина';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 806;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 822;
        $this->model->sort = 294;
        $this->model->name = 'Популярные категории';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 826;
        $this->model->sort = 296;
        $this->model->name = 'Детский транспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 822;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 782;
        $this->model->sort = 298;
        $this->model->name = 'Подгузники, пеленки, трусы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 704;
        $this->model->sort = 301;
        $this->model->name = ' Лапша, макаронные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 703;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 684;
        $this->model->sort = 302;
        $this->model->name = 'Снэки, закуски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 681;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 795;
        $this->model->sort = 305;
        $this->model->name = 'Медицинские изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 890;
        $this->model->sort = 351;
        $this->model->name = 'Молокоотсосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 840;
        $this->model->sort = 310;
        $this->model->name = ' Игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 841;
        $this->model->sort = 311;
        $this->model->name = ' Мягкие игрушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 849;
        $this->model->sort = 313;
        $this->model->name = 'Рюкзаки и сумки-кенгуру';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 831;
        $this->model->sort = 315;
        $this->model->name = 'Для девочек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 844;
        $this->model->sort = 316;
        $this->model->name = 'гровые приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 857;
        $this->model->sort = 318;
        $this->model->name = 'Влажные салфетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 858;
        $this->model->sort = 319;
        $this->model->name = 'Сумки для мам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 860;
        $this->model->sort = 321;
        $this->model->name = ' С малышом на дачу';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 862;
        $this->model->sort = 322;
        $this->model->name = 'Детское питание и кормление';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 868;
        $this->model->sort = 324;
        $this->model->name = 'Здоровье и уход';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 866;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 871;
        $this->model->sort = 326;
        $this->model->name = 'Детский транспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 870;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 872;
        $this->model->sort = 327;
        $this->model->name = 'Игровая площадка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 870;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 950;
        $this->model->sort = 331;
        $this->model->name = ' Приготовление пищи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1724;
        $this->model->sort = 333;
        $this->model->name = 'Подводное плавание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 997;
        $this->model->sort = 335;
        $this->model->name = 'Шампуни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 832;
        $this->model->sort = 337;
        $this->model->name = 'Для мальчиков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 839;
        $this->model->sort = 338;
        $this->model->name = 'Деревянные игрушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 852;
        $this->model->sort = 340;
        $this->model->name = 'Базы для автокресел';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 863;
        $this->model->sort = 341;
        $this->model->name = 'Детское питание и кормление';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 862;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 951;
        $this->model->sort = 343;
        $this->model->name = ' Приготовление пищи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 880;
        $this->model->sort = 350;
        $this->model->name = 'Раннее развитие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 878;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 941;
        $this->model->sort = 353;
        $this->model->name = 'Столы и стулья';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 905;
        $this->model->sort = 354;
        $this->model->name = 'Питание для мам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 900;
        $this->model->sort = 356;
        $this->model->name = 'Рюкзаки и сумки-кенгуру';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 895;
        $this->model->sort = 359;
        $this->model->name = 'Нижнее белье';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 893;
        $this->model->sort = 361;
        $this->model->name = 'Прокладки для груди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 892;
        $this->model->sort = 362;
        $this->model->name = 'Подушки и кресла для мам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 942;
        $this->model->sort = 364;
        $this->model->name = 'Мебель для спальни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1663;
        $this->model->sort = 366;
        $this->model->name = 'Коньки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 981;
        $this->model->sort = 370;
        $this->model->name = 'Маски для лица';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 968;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 906;
        $this->model->sort = 372;
        $this->model->name = 'Товары для школы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 866;
        $this->model->sort = 373;
        $this->model->name = 'Подгузники и гигиена';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 932;
        $this->model->sort = 375;
        $this->model->name = 'Зимняя одежда и обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 911;
        $this->model->sort = 377;
        $this->model->name = 'Канцелярские товары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 914;
        $this->model->sort = 378;
        $this->model->name = 'Школьная форма и сменка для девочек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 920;
        $this->model->sort = 381;
        $this->model->name = 'Школьные глобусы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 928;
        $this->model->sort = 387;
        $this->model->name = 'Школьная одежда и обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 955;
        $this->model->sort = 390;
        $this->model->name = 'Приготовление напитков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 956;
        $this->model->sort = 391;
        $this->model->name = 'Кухонные аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 775;
        $this->model->sort = 393;
        $this->model->name = 'Вибромассажеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 773;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 477;
        $this->model->sort = 394;
        $this->model->name = 'Ремешки для умных часов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 492;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 979;
        $this->model->sort = 395;
        $this->model->name = 'Наборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 968;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 776;
        $this->model->sort = 396;
        $this->model->name = 'Массажные кресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 773;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 907;
        $this->model->sort = 397;
        $this->model->name = ' Рюкзаки, ранцы, сумки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 959;
        $this->model->sort = 399;
        $this->model->name = 'Одноразовая посуда';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 953;
        $this->model->sort = 1378;
        $this->model->name = 'Приготовление пищи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1521;
        $this->model->sort = 1466;
        $this->model->name = ' Мачете и кукри';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1747;
        $this->model->sort = 1603;
        $this->model->name = 'Воздухоотводчики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2270;
        $this->model->sort = 1698;
        $this->model->name = ' 3D-ручки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1088;
        $this->model->sort = 1797;
        $this->model->name = 'Полотенца';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 881;
        $this->model->sort = 347;
        $this->model->name = ' Книги для детей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 878;
        $this->model->image = [
            'Книги для детей.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 883;
        $this->model->sort = 348;
        $this->model->name = 'Пазлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 878;
        $this->model->image = [
            'Пазлы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 925;
        $this->model->sort = 385;
        $this->model->name = ' Для мальчиков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = [
            'Для мальчиков.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 970;
        $this->model->sort = 404;
        $this->model->name = 'Аксессуары для ванной и туалета';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 909;
        $this->model->sort = 407;
        $this->model->name = 'Тетради, блокноты, дневники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 910;
        $this->model->sort = 408;
        $this->model->name = 'Пеналы и письменные принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 962;
        $this->model->sort = 412;
        $this->model->name = 'Территория кофе';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 778;
        $this->model->sort = 414;
        $this->model->name = 'Массажные матрасы и подушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 773;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 974;
        $this->model->sort = 416;
        $this->model->name = ' Ножницы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1006;
        $this->model->sort = 417;
        $this->model->name = 'Фены и фен-щётки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1025;
        $this->model->sort = 419;
        $this->model->name = 'Увлажнение и питание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1040;
        $this->model->sort = 421;
        $this->model->name = 'Управление освещением';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1000;
        $this->model->sort = 423;
        $this->model->name = 'Окрашивание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1002;
        $this->model->sort = 425;
        $this->model->name = 'Укладка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1057;
        $this->model->sort = 426;
        $this->model->name = 'Скрабы и пилинги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1061;
        $this->model->sort = 428;
        $this->model->name = 'Депиляция';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 982;
        $this->model->sort = 430;
        $this->model->name = '  Освещение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1635;
        $this->model->sort = 431;
        $this->model->name = 'Домашние кинотеатры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 510;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 696;
        $this->model->sort = 435;
        $this->model->name = 'Запеканки, сырники, каши';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 691;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 217;
        $this->model->sort = 438;
        $this->model->name = 'Мультиварки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 110;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 538;
        $this->model->sort = 439;
        $this->model->name = ' Шоколадные яйца и фигурный шоколад';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 760;
        $this->model->sort = 441;
        $this->model->name = 'Компрессионный трикотаж';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 973;
        $this->model->sort = 442;
        $this->model->name = ' Лестницы и стремянки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1021;
        $this->model->sort = 446;
        $this->model->name = 'Бра и настенные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1071;
        $this->model->sort = 447;
        $this->model->name = 'Средства для душа';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1030;
        $this->model->sort = 450;
        $this->model->name = 'Ночники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 737;
        $this->model->sort = 452;
        $this->model->name = 'Ингаляторы и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1039;
        $this->model->sort = 454;
        $this->model->name = 'Уход за кожей вокруг глаз';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1046;
        $this->model->sort = 456;
        $this->model->name = 'Шнуры и плафоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1048;
        $this->model->sort = 457;
        $this->model->name = 'Переносные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1072;
        $this->model->sort = 459;
        $this->model->name = ' Постельное белье';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1074;
        $this->model->sort = 460;
        $this->model->name = 'Пледы и покрывала';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1084;
        $this->model->sort = 462;
        $this->model->name = 'Мочалки и щетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 847;
        $this->model->sort = 463;
        $this->model->name = 'Автокресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1085;
        $this->model->sort = 465;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1037;
        $this->model->sort = 467;
        $this->model->name = 'Тонизирование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1067;
        $this->model->sort = 468;
        $this->model->name = 'Уход за руками';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1024;
        $this->model->sort = 469;
        $this->model->name = 'Торшеры и напольные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 888;
        $this->model->sort = 472;
        $this->model->name = ' Уход за лицом и телом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1005;
        $this->model->sort = 473;
        $this->model->name = ' Товары для кошек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1003;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1014;
        $this->model->sort = 476;
        $this->model->name = 'Парики и шиньоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 657;
        $this->model->sort = 477;
        $this->model->name = 'Крабовое мясо и палочки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 655;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1017;
        $this->model->sort = 478;
        $this->model->name = 'Щипцы, плойки и выпрямители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 996;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1051;
        $this->model->sort = 481;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1070;
        $this->model->sort = 482;
        $this->model->name = 'Римские и рулонные шторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1081;
        $this->model->sort = 483;
        $this->model->name = 'Наматрасники и чехлы для матрасов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1038;
        $this->model->sort = 487;
        $this->model->name = 'Прожекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1108;
        $this->model->sort = 488;
        $this->model->name = 'Транспортировка, переноски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1092;
        $this->model->sort = 490;
        $this->model->name = 'Сухие корма';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1087;
        $this->model->sort = 492;
        $this->model->name = 'Средства от глистов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1110;
        $this->model->sort = 494;
        $this->model->name = 'Груминг и уход';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 967;
        $this->model->sort = 402;
        $this->model->name = ' Товары для ухода за одеждой и бельем';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1022;
        $this->model->sort = 501;
        $this->model->name = 'Витамины и добавки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1062;
        $this->model->sort = 504;
        $this->model->name = 'Груминг и уход';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1116;
        $this->model->sort = 507;
        $this->model->name = 'Ошейники и средства от блох и клещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1094;
        $this->model->sort = 509;
        $this->model->name = 'Женские халаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1096;
        $this->model->sort = 510;
        $this->model->name = ' Мужские халаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1112;
        $this->model->sort = 511;
        $this->model->name = 'Ювелирная посуда и сувениры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1118;
        $this->model->sort = 514;
        $this->model->name = 'Средства от глистов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1013;
        $this->model->sort = 516;
        $this->model->name = 'Лакомства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1010;
        $this->model->sort = 518;
        $this->model->name = 'Влажные корма';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1091;
        $this->model->sort = 519;
        $this->model->name = 'Рукавицы, прихватки, фартуки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1114;
        $this->model->sort = 521;
        $this->model->name = 'Клетки и вольеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1160;
        $this->model->sort = 524;
        $this->model->name = ' Цифровые фоторамки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1166;
        $this->model->sort = 526;
        $this->model->name = 'Аквариумы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1169;
        $this->model->sort = 528;
        $this->model->name = 'Электробритвы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1153;
        $this->model->sort = 529;
        $this->model->name = 'Уход за лицом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1193;
        $this->model->sort = 531;
        $this->model->name = 'Наращивание ногтей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1195;
        $this->model->sort = 532;
        $this->model->name = 'Гель-лак';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1173;
        $this->model->sort = 533;
        $this->model->name = ' Метеостанции, термометры, барометры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1150;
        $this->model->sort = 535;
        $this->model->name = 'Наполнители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1124;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1145;
        $this->model->sort = 537;
        $this->model->name = 'Средства для бритья';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1104;
        $this->model->sort = 540;
        $this->model->name = 'Амуниция для собак';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1157;
        $this->model->sort = 542;
        $this->model->name = 'Декоративные свечи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1129;
        $this->model->sort = 543;
        $this->model->name = 'Корма и витамины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1124;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1151;
        $this->model->sort = 546;
        $this->model->name = 'Декоративная посуда';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1142;
        $this->model->sort = 548;
        $this->model->name = 'Бритвы и лезвия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1217;
        $this->model->sort = 550;
        $this->model->name = 'Для снятия лака';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1124;
        $this->model->sort = 551;
        $this->model->name = 'Товары для птиц';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1003;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1098;
        $this->model->sort = 553;
        $this->model->name = 'Влажные корма';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1141;
        $this->model->sort = 557;
        $this->model->name = 'Мужчинам';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1149;
        $this->model->sort = 558;
        $this->model->name = 'Шторы и жалюзи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1159;
        $this->model->sort = 559;
        $this->model->name = 'Товары для рыб и рептилий';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1003;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1244;
        $this->model->sort = 566;
        $this->model->name = 'Электробигуди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1219;
        $this->model->sort = 567;
        $this->model->name = 'Удаление кутикулы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1201;
        $this->model->sort = 571;
        $this->model->name = 'Автомобильные инверторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1131;
        $this->model->sort = 573;
        $this->model->name = 'Колесные диски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1192;
        $this->model->sort = 575;
        $this->model->name = 'Корма для рептилий';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1136;
        $this->model->sort = 576;
        $this->model->name = 'Грузовые шины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 889;
        $this->model->sort = 1418;
        $this->model->name = 'Сборы в роддом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1143;
        $this->model->sort = 578;
        $this->model->name = 'Цепи противоскольжения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1148;
        $this->model->sort = 579;
        $this->model->name = 'Колесные болты и секретки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1126;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1204;
        $this->model->sort = 581;
        $this->model->name = 'Интерьерные наклейки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1208;
        $this->model->sort = 583;
        $this->model->name = ' Плетеные корзины и коробки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1187;
        $this->model->sort = 585;
        $this->model->name = 'Корма для рыб';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1252;
        $this->model->sort = 586;
        $this->model->name = 'Приборы для ухода за лицом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1253;
        $this->model->sort = 587;
        $this->model->name = 'Приборы для ухода за телом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2048;
        $this->model->sort = 1039;
        $this->model->name = 'Бортовые компьютеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2005;
        $this->model->sort = 1043;
        $this->model->name = 'Катки для газонов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1978;
        $this->model->sort = 1045;
        $this->model->name = 'Косы и серпы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1125;
        $this->model->sort = 497;
        $this->model->name = 'Женская парфюмерия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1120;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2113;
        $this->model->sort = 1036;
        $this->model->name = ' Аксессуары для перевозки и хранения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2003;
        $this->model->sort = 1046;
        $this->model->name = 'Черенки и ручки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1982;
        $this->model->sort = 1048;
        $this->model->name = 'Сеялки для семян';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1970;
        $this->model->sort = 1050;
        $this->model->name = 'Грабли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1975;
        $this->model->sort = 1051;
        $this->model->name = 'Биотуалеты и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2118;
        $this->model->sort = 1057;
        $this->model->name = 'Рабочая одежда и обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1200;
        $this->model->sort = 593;
        $this->model->name = 'Аквариумные рыбки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1259;
        $this->model->sort = 596;
        $this->model->name = 'Средства и предметы гигиены';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1256;
        $this->model->sort = 598;
        $this->model->name = 'Туалеты и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1238;
        $this->model->sort = 600;
        $this->model->name = 'Корма и витамины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1240;
        $this->model->sort = 601;
        $this->model->name = 'Лакомства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1246;
        $this->model->sort = 602;
        $this->model->name = ' Для ухода за бытовой техникой';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1236;
        $this->model->sort = 605;
        $this->model->name = ' Средства для стирки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1242;
        $this->model->sort = 607;
        $this->model->name = '  Средства против насекомых';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1227;
        $this->model->sort = 609;
        $this->model->name = 'Техника для красоты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 964;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1191;
        $this->model->sort = 610;
        $this->model->name = 'Устройства громкой связи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1695;
        $this->model->sort = 612;
        $this->model->name = 'Футбол';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1675;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1668;
        $this->model->sort = 614;
        $this->model->name = 'Палатки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1271;
        $this->model->sort = 616;
        $this->model->name = 'Средства для купания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1269;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1281;
        $this->model->sort = 619;
        $this->model->name = 'Усилители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1262;
        $this->model->sort = 621;
        $this->model->name = 'Женская гигиена';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1259;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1275;
        $this->model->sort = 623;
        $this->model->name = 'Ароматерапия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1269;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1288;
        $this->model->sort = 625;
        $this->model->name = 'Шумоизоляция';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1289;
        $this->model->sort = 626;
        $this->model->name = 'Автомобильные инверторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1277;
        $this->model->sort = 628;
        $this->model->name = 'Эфирные масла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1269;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1284;
        $this->model->sort = 630;
        $this->model->name = 'FM-трансмиттеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1251;
        $this->model->sort = 631;
        $this->model->name = 'Клетки и домики для грызунов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1264;
        $this->model->sort = 632;
        $this->model->name = 'Туалетная бумага, салфетки, ватные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1259;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1286;
        $this->model->sort = 635;
        $this->model->name = 'Акустические полки, короба и подиумы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1309;
        $this->model->sort = 637;
        $this->model->name = '  Велоспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1478;
        $this->model->sort = 639;
        $this->model->name = 'Магнитолы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1323;
        $this->model->sort = 641;
        $this->model->name = 'Коврики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1298;
        $this->model->sort = 642;
        $this->model->name = 'Смазки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1301;
        $this->model->sort = 643;
        $this->model->name = ' Протеины для спортсменов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1310;
        $this->model->sort = 646;
        $this->model->name = 'Свернуть';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1313;
        $this->model->sort = 647;
        $this->model->name = 'Аксессуары и оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1669;
        $this->model->sort = 650;
        $this->model->name = 'Спальные мешки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1367;
        $this->model->sort = 652;
        $this->model->name = 'Средства от глистов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1353;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1327;
        $this->model->sort = 653;
        $this->model->name = 'Защита и внешний тюнинг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1332;
        $this->model->sort = 655;
        $this->model->name = 'Обустройство салона';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1334;
        $this->model->sort = 656;
        $this->model->name = 'Обогреватели двигателя и салона';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1340;
        $this->model->sort = 658;
        $this->model->name = 'Цепи противоскольжения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1348;
        $this->model->sort = 660;
        $this->model->name = 'Домкраты и подставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1352;
        $this->model->sort = 662;
        $this->model->name = 'Толщиномеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1355;
        $this->model->sort = 664;
        $this->model->name = 'Отвертки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1295;
        $this->model->sort = 666;
        $this->model->name = 'Антифризы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1297;
        $this->model->sort = 667;
        $this->model->name = 'Тренажеры и фитнес';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1300;
        $this->model->sort = 668;
        $this->model->name = ' Рюкзаки спортивные и городские';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1306;
        $this->model->sort = 670;
        $this->model->name = 'Специальные масла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1325;
        $this->model->sort = 672;
        $this->model->name = 'Багажные системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1350;
        $this->model->sort = 674;
        $this->model->name = 'Манометры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1364;
        $this->model->sort = 675;
        $this->model->name = 'Средства от блох и клещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1353;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1344;
        $this->model->sort = 678;
        $this->model->name = 'Аксессуары и запчасти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1336;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1329;
        $this->model->sort = 680;
        $this->model->name = 'Моноколеса и гироскутеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1326;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2137;
        $this->model->sort = 1056;
        $this->model->name = 'Инкассаторское оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2131;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2128;
        $this->model->sort = 1061;
        $this->model->name = ' Противогололедные реагенты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2122;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2136;
        $this->model->sort = 1064;
        $this->model->name = 'Рекламные сувениры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2131;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2146;
        $this->model->sort = 1065;
        $this->model->name = ' Бетономешалки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1338;
        $this->model->sort = 711;
        $this->model->name = 'Скейтборды и лонгборды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1336;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1412;
        $this->model->sort = 714;
        $this->model->name = 'Кузовные детали';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1474;
        $this->model->sort = 716;
        $this->model->name = ' Одноразовая посуда';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1467;
        $this->model->sort = 720;
        $this->model->name = 'Надувная мебель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1432;
        $this->model->sort = 722;
        $this->model->name = 'Походная мебель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1457;
        $this->model->sort = 724;
        $this->model->name = 'Лодочные моторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1487;
        $this->model->sort = 725;
        $this->model->name = 'Портативные рекордеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1507;
        $this->model->sort = 727;
        $this->model->name = 'Аксессуары для наушников и гарнитур';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1493;
        $this->model->sort = 730;
        $this->model->name = 'Аксессуары для электронных книг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1401;
        $this->model->sort = 735;
        $this->model->name = 'Защитные пленки и стекла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1404;
        $this->model->sort = 737;
        $this->model->name = 'Зарядные устройства и адаптеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1324;
        $this->model->sort = 740;
        $this->model->name = ' Аксессуары и запчасти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1321;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1371;
        $this->model->sort = 741;
        $this->model->name = 'Автосигнализации';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1370;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1461;
        $this->model->sort = 744;
        $this->model->name = 'Надувные лодки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1527;
        $this->model->sort = 746;
        $this->model->name = 'Кухонные мойки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1489;
        $this->model->sort = 748;
        $this->model->name = 'Измерительный инструмент';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1541;
        $this->model->sort = 750;
        $this->model->name = 'Тумбы под раковину';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1549;
        $this->model->sort = 751;
        $this->model->name = 'Фильтры и умягчители для воды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1505;
        $this->model->sort = 754;
        $this->model->name = 'Штукатурно-малярные инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1476;
        $this->model->sort = 756;
        $this->model->name = 'Электроинструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1496;
        $this->model->sort = 757;
        $this->model->name = 'Элементы крепежа и фурнитура';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1547;
        $this->model->sort = 760;
        $this->model->name = 'ТВ-приставки и медиаплееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1513;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1528;
        $this->model->sort = 761;
        $this->model->name = 'Тренажеры и фитнес';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1563;
        $this->model->sort = 763;
        $this->model->name = 'ТВ-приставки и медиаплееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1513;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1896;
        $this->model->sort = 860;
        $this->model->name = 'Манекены';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1554;
        $this->model->sort = 767;
        $this->model->name = 'Напольные покрытия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1552;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1559;
        $this->model->sort = 769;
        $this->model->name = 'Электрика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1573;
        $this->model->sort = 770;
        $this->model->name = 'Электрические щиты и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1596;
        $this->model->sort = 772;
        $this->model->name = 'Электрический теплый пол и терморегуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1523;
        $this->model->sort = 775;
        $this->model->name = 'Аудиотехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1513;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1485;
        $this->model->sort = 777;
        $this->model->name = 'Электро- и бензопилы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1501;
        $this->model->sort = 778;
        $this->model->name = 'Мотобуры и оснастка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1333;
        $this->model->sort = 682;
        $this->model->name = ' Аксессуары и запчасти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1329;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1405;
        $this->model->sort = 686;
        $this->model->name = 'Подвеска';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1396;
        $this->model->sort = 688;
        $this->model->name = 'Салонные зеркала заднего вида';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1433;
        $this->model->sort = 690;
        $this->model->name = 'Уход за салоном';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1436;
        $this->model->sort = 692;
        $this->model->name = 'Уход за шинами и дисками';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1438;
        $this->model->sort = 693;
        $this->model->name = 'Уход за кузовом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1443;
        $this->model->sort = 695;
        $this->model->name = 'Для малярных работ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1462;
        $this->model->sort = 697;
        $this->model->name = 'Транспорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1376;
        $this->model->sort = 698;
        $this->model->name = 'Противоугонные комплексы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1370;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1315;
        $this->model->sort = 700;
        $this->model->name = ' Велокресла для малышей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1380;
        $this->model->sort = 702;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1370;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1365;
        $this->model->sort = 703;
        $this->model->name = 'Насосы для подкачки шин';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1388;
        $this->model->sort = 705;
        $this->model->name = 'Электрика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1393;
        $this->model->sort = 707;
        $this->model->name = 'Привод';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1470;
        $this->model->sort = 733;
        $this->model->name = 'Туристическая посуда';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1322;
        $this->model->sort = 734;
        $this->model->name = '    Защита';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1321;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1449;
        $this->model->sort = 743;
        $this->model->name = ' Коврики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1409;
        $this->model->sort = 708;
        $this->model->name = 'Свечи зажигания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1606;
        $this->model->sort = 792;
        $this->model->name = 'Газовые конвекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1595;
        $this->model->sort = 793;
        $this->model->name = 'Камины и печи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1604;
        $this->model->sort = 796;
        $this->model->name = 'Тепловые пушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1610;
        $this->model->sort = 797;
        $this->model->name = 'Газовые обогреватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1612;
        $this->model->sort = 799;
        $this->model->name = 'Полотенцесушители и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1570;
        $this->model->sort = 807;
        $this->model->name = 'Системы безопасности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1578;
        $this->model->sort = 809;
        $this->model->name = 'Отопление и вентиляция';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1581;
        $this->model->sort = 811;
        $this->model->name = 'Камины и печи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1580;
        $this->model->sort = 814;
        $this->model->name = 'Отопительные котлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1584;
        $this->model->sort = 815;
        $this->model->name = 'Радиаторы отопления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1597;
        $this->model->sort = 818;
        $this->model->name = 'Душевые кабины и уголки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1756;
        $this->model->sort = 821;
        $this->model->name = 'Системы управления для котлов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1583;
        $this->model->sort = 822;
        $this->model->name = 'Отопительные системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1844;
        $this->model->sort = 827;
        $this->model->name = 'Зимние виды спорта';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1840;
        $this->model->sort = 829;
        $this->model->name = 'Чемоданы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1821;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1768;
        $this->model->sort = 831;
        $this->model->name = 'Окна';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1776;
        $this->model->sort = 833;
        $this->model->name = 'Проекты домов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1739;
        $this->model->sort = 835;
        $this->model->name = 'Снегоуборщики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1736;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1889;
        $this->model->sort = 837;
        $this->model->name = 'Игровые столы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1787;
        $this->model->sort = 839;
        $this->model->name = 'Бетоносмесители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1801;
        $this->model->sort = 841;
        $this->model->name = 'Сварочные аппараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1698;
        $this->model->sort = 845;
        $this->model->name = 'Баскетбол';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1675;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1735;
        $this->model->sort = 846;
        $this->model->name = 'Водное поло';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1772;
        $this->model->sort = 848;
        $this->model->name = 'Готовые конструкции';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1572;
        $this->model->sort = 850;
        $this->model->name = 'Мониторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1564;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1600;
        $this->model->sort = 854;
        $this->model->name = 'Ванны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1599;
        $this->model->sort = 855;
        $this->model->name = 'Отопительные котлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1601;
        $this->model->sort = 858;
        $this->model->name = 'Электрогенераторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1861;
        $this->model->sort = 906;
        $this->model->name = 'Шампуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1841;
        $this->model->sort = 862;
        $this->model->name = 'Мотопомпы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1825;
        $this->model->sort = 864;
        $this->model->name = 'Ревизионные люки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1780;
        $this->model->sort = 866;
        $this->model->name = 'Охота и рыбалка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1781;
        $this->model->sort = 868;
        $this->model->name = 'Эхолоты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1789;
        $this->model->sort = 870;
        $this->model->name = 'Прицелы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1788;
        $this->model->sort = 872;
        $this->model->name = 'Подводная охота';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1790;
        $this->model->sort = 873;
        $this->model->name = 'Приборы ночного видения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1791;
        $this->model->sort = 875;
        $this->model->name = 'Палатки для рыбалки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2167;
        $this->model->sort = 1100;
        $this->model->name = 'DJ оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1347;
        $this->model->sort = 783;
        $this->model->name = 'Автомобильные компрессоры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1516;
        $this->model->sort = 785;
        $this->model->name = 'Цифровые плееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1500;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1571;
        $this->model->sort = 788;
        $this->model->name = 'Устройства электропитания и электростанции';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1529;
        $this->model->sort = 789;
        $this->model->name = 'Микроволновые печи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1543;
        $this->model->sort = 790;
        $this->model->name = 'Варочные панели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1763;
        $this->model->sort = 802;
        $this->model->name = 'Межкомнатные двери';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1762;
        $this->model->sort = 803;
        $this->model->name = 'Двери, окна и скобяные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1751;
        $this->model->sort = 806;
        $this->model->name = 'Настольный теннис';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1794;
        $this->model->sort = 843;
        $this->model->name = 'Краны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1823;
        $this->model->sort = 895;
        $this->model->name = 'Садовые измельчители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1826;
        $this->model->sort = 897;
        $this->model->name = 'Снегоуборщики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1842;
        $this->model->sort = 898;
        $this->model->name = 'Электрические и бензиновые опрыскиватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1858;
        $this->model->sort = 900;
        $this->model->name = 'Решетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1845;
        $this->model->sort = 902;
        $this->model->name = 'Мойки высокого давления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1856;
        $this->model->sort = 904;
        $this->model->name = 'Тенты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1878;
        $this->model->sort = 911;
        $this->model->name = 'Печи для казанов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1872;
        $this->model->sort = 913;
        $this->model->name = 'Аксессуары для спортсменов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1923;
        $this->model->sort = 916;
        $this->model->name = 'Рекламные дисплеи и интерактивные панели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1911;
        $this->model->sort = 919;
        $this->model->name = 'Расходные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1879;
        $this->model->sort = 921;
        $this->model->name = 'Садовая мебель';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1898;
        $this->model->sort = 924;
        $this->model->name = 'Шатры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1868;
        $this->model->sort = 926;
        $this->model->name = 'Запорная арматура';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1946;
        $this->model->sort = 928;
        $this->model->name = 'Для маникюра и педикюра';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1813;
        $this->model->sort = 930;
        $this->model->name = 'Газонокосилки и триммеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1820;
        $this->model->sort = 931;
        $this->model->name = 'Воздуходувки и садовые пылесосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1976;
        $this->model->sort = 934;
        $this->model->name = 'Веб-камеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1951;
        $this->model->sort = 935;
        $this->model->name = 'Сумки и чехлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1921;
        $this->model->sort = 938;
        $this->model->name = 'Семена овощей, ягод и цветов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1919;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1971;
        $this->model->sort = 941;
        $this->model->name = 'Пленочные фотоаппараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1958;
        $this->model->sort = 943;
        $this->model->name = 'Фотовспышки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1918;
        $this->model->sort = 944;
        $this->model->name = 'Химические средства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1994;
        $this->model->sort = 946;
        $this->model->name = 'Освещение и электрика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1989;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1987;
        $this->model->sort = 948;
        $this->model->name = 'Видеоняни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1983;
        $this->model->sort = 951;
        $this->model->name = 'Специальное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2036;
        $this->model->sort = 953;
        $this->model->name = 'Карты и программы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2034;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2026;
        $this->model->sort = 955;
        $this->model->name = 'Игры и приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2028;
        $this->model->sort = 956;
        $this->model->name = 'Рули, джойстики, геймпады';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2032;
        $this->model->sort = 957;
        $this->model->name = 'Карты оплаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2027;
        $this->model->sort = 959;
        $this->model->name = 'Игровые приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2031;
        $this->model->sort = 961;
        $this->model->name = 'Ретро консоли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2030;
        $this->model->sort = 962;
        $this->model->name = 'Игры для приставок и ПК';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1895;
        $this->model->sort = 964;
        $this->model->name = 'Зонты от солнца';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1908;
        $this->model->sort = 966;
        $this->model->name = 'Комплекты садовой мебели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1917;
        $this->model->sort = 968;
        $this->model->name = 'Диваны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1914;
        $this->model->sort = 969;
        $this->model->name = 'Аксессуары для шатров, зонтов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1805;
        $this->model->sort = 880;
        $this->model->name = 'Садовая техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1828;
        $this->model->sort = 882;
        $this->model->name = 'Насосные группы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1882;
        $this->model->sort = 884;
        $this->model->name = 'Весы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1607;
        $this->model->sort = 885;
        $this->model->name = 'Души, душевые панели, гарнитуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1586;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1812;
        $this->model->sort = 888;
        $this->model->name = 'Септики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1877;
        $this->model->sort = 889;
        $this->model->name = 'Терминалы сбора данных';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1891;
        $this->model->sort = 891;
        $this->model->name = 'Витрины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1837;
        $this->model->sort = 893;
        $this->model->name = 'Ножницы и кусторезы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1934;
        $this->model->sort = 914;
        $this->model->name = 'Оборудование для салонов красоты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1964;
        $this->model->sort = 977;
        $this->model->name = 'Комплектующие для тележек и тачек';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1963;
        $this->model->sort = 980;
        $this->model->name = 'Тележки и тачки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2075;
        $this->model->sort = 993;
        $this->model->name = 'Стоматологическое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2072;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2090;
        $this->model->sort = 995;
        $this->model->name = 'Швейное производство';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2055;
        $this->model->sort = 1067;
        $this->model->name = 'Алкотестеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2095;
        $this->model->sort = 997;
        $this->model->name = 'Стружкоотсосы и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2199;
        $this->model->sort = 998;
        $this->model->name = 'Игры для компаний';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1932;
        $this->model->sort = 1001;
        $this->model->name = 'Дымоходы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2021;
        $this->model->sort = 1003;
        $this->model->name = '3D-технологии';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2008;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1927;
        $this->model->sort = 1005;
        $this->model->name = 'Инфракрасные сауны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2235;
        $this->model->sort = 1007;
        $this->model->name = 'Корпуса';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1948;
        $this->model->sort = 1008;
        $this->model->name = 'Субстраты, грунты, мульча';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1991;
        $this->model->sort = 1010;
        $this->model->name = ' Ручные опрыскиватели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2038;
        $this->model->sort = 1011;
        $this->model->name = 'GPS-трекеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2034;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2072;
        $this->model->sort = 1012;
        $this->model->name = 'Сфера услуг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1977;
        $this->model->sort = 1014;
        $this->model->name = 'Биотуалеты и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1952;
        $this->model->sort = 978;
        $this->model->name = 'Парники и теплицы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '6',
            '10',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2087;
        $this->model->sort = 1020;
        $this->model->name = '  Металлодетекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2086;
        $this->model->sort = 1021;
        $this->model->name = 'Средства индивидуальной бронезащиты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2104;
        $this->model->sort = 1023;
        $this->model->name = ' Промышленные миксеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2109;
        $this->model->sort = 1024;
        $this->model->name = 'Оборудование для звукозаписывающих студий ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2098;
        $this->model->sort = 1027;
        $this->model->name = '  Инкубаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2102;
        $this->model->sort = 1029;
        $this->model->name = ' Промышленные плиты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2100;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2108;
        $this->model->sort = 1031;
        $this->model->name = 'Сценическое и аудиооборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2112;
        $this->model->sort = 1033;
        $this->model->name = 'Радиосистемы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 376;
        $this->model->sort = 1035;
        $this->model->name = 'Утюги и парогенераторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 42;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2319;
        $this->model->sort = 1236;
        $this->model->name = '3D-принтеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2060;
        $this->model->sort = 1080;
        $this->model->name = 'Приборы ночного видения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2049;
        $this->model->sort = 1082;
        $this->model->name = 'Камеры заднего вида';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2004;
        $this->model->sort = 1084;
        $this->model->name = 'Фильтры и аэраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2002;
        $this->model->sort = 1085;
        $this->model->name = 'Насосы и комплекты для фонтанов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2024;
        $this->model->sort = 1088;
        $this->model->name = 'Умываль';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2019;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2025;
        $this->model->sort = 1090;
        $this->model->name = 'Средства против насекомых';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2164;
        $this->model->sort = 1092;
        $this->model->name = 'Оборудование для ремонта электроники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2134;
        $this->model->sort = 1094;
        $this->model->name = 'Акустические пианино';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2154;
        $this->model->sort = 1095;
        $this->model->name = 'Духовые инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2196;
        $this->model->sort = 1097;
        $this->model->name = 'Астрология, магия, эзотерика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1950;
        $this->model->sort = 974;
        $this->model->name = 'Шпалеры и опоры для растений';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1953;
        $this->model->sort = 975;
        $this->model->name = 'Аксессуары для полива';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2042;
        $this->model->sort = 982;
        $this->model->name = 'Автоакустика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1941;
        $this->model->sort = 984;
        $this->model->name = 'Камни для печей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2069;
        $this->model->sort = 986;
        $this->model->name = '  Бьюти-кейсы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2071;
        $this->model->sort = 987;
        $this->model->name = ' Автозагар и средства для солярия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2092;
        $this->model->sort = 991;
        $this->model->name = 'Упаковочное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2068;
        $this->model->sort = 1016;
        $this->model->name = 'Краска для бровей и ресниц';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2192;
        $this->model->sort = 1106;
        $this->model->name = 'Календари';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2202;
        $this->model->sort = 1119;
        $this->model->name = 'Настольные игры для компании';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2124;
        $this->model->sort = 1120;
        $this->model->name = 'Профессиональные пылесосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2122;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2241;
        $this->model->sort = 1135;
        $this->model->name = 'Звуковые карты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2259;
        $this->model->sort = 1136;
        $this->model->name = '    Мультимедиа-проекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2240;
        $this->model->sort = 1141;
        $this->model->name = '  Термопаста';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 758;
        $this->model->sort = 1534;
        $this->model->name = 'Ортопедические изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 738;
        $this->model->sort = 1536;
        $this->model->name = 'Глюкометры и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 786;
        $this->model->sort = 1538;
        $this->model->name = 'Технические средства реабилитации';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1906;
        $this->model->sort = 1541;
        $this->model->name = 'Этикет-пистолеты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1055;
        $this->model->sort = 1544;
        $this->model->name = 'Кремы и лосьоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1079;
        $this->model->sort = 1546;
        $this->model->name = 'Приборы для ухода за телом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 768;
        $this->model->sort = 1547;
        $this->model->name = 'Пояса и трикотаж для похудения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 103;
        $this->model->sort = 1552;
        $this->model->name = 'Игровые мыши и клавиатуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 512;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1282;
        $this->model->sort = 1554;
        $this->model->name = 'Автомобильные телевизоры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1278;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1361;
        $this->model->sort = 1555;
        $this->model->name = 'Витамины и добавки для кошек и собак';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1353;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2041;
        $this->model->sort = 1557;
        $this->model->name = 'Автомагнитолы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1771;
        $this->model->sort = 1559;
        $this->model->name = 'Шлемы и защита';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1764;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1442;
        $this->model->sort = 1561;
        $this->model->name = 'Тарифные планы и номера';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1738;
        $this->model->sort = 1563;
        $this->model->name = 'Топливные блоки и биотопливо';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2254;
        $this->model->sort = 1144;
        $this->model->name = ' Рули, джойстики, геймпады';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2253;
        $this->model->sort = 1146;
        $this->model->name = ' Компьютерная акустика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2262;
        $this->model->sort = 1151;
        $this->model->name = '   Принтеры и МФУ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2207;
        $this->model->sort = 1152;
        $this->model->name = 'Наборы для покера';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2301;
        $this->model->sort = 1154;
        $this->model->name = 'Квадрокоптеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2303;
        $this->model->sort = 1156;
        $this->model->name = 'Хобби и творчество';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2160;
        $this->model->sort = 1158;
        $this->model->name = 'Полиграфическое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2158;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2204;
        $this->model->sort = 1161;
        $this->model->name = 'Карточные игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 830;
        $this->model->sort = 1539;
        $this->model->name = 'Для детей до 3 лет';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = [
            'Для детей до 3 лет.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2256;
        $this->model->sort = 1149;
        $this->model->name = ' TV-тюнеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = [
            'TV-тюнеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2212;
        $this->model->sort = 1162;
        $this->model->name = 'Шахматы, шашки, нарды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2222;
        $this->model->sort = 1164;
        $this->model->name = 'Сувениры Сбербанк';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2217;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2292;
        $this->model->sort = 1169;
        $this->model->name = 'Билеты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2293;
        $this->model->sort = 1171;
        $this->model->name = 'Концерт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2299;
        $this->model->sort = 1172;
        $this->model->name = 'Гадания и предсказания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2268;
        $this->model->sort = 1174;
        $this->model->name = '3D-принтеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2305;
        $this->model->sort = 1177;
        $this->model->name = 'Шитье и вышивание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2295;
        $this->model->sort = 1180;
        $this->model->name = 'Театр';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2292;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2338;
        $this->model->sort = 1182;
        $this->model->name = 'Бестабачные смеси для кальянов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2329;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2355;
        $this->model->sort = 1184;
        $this->model->name = ' Винные шкафы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2455;
        $this->model->sort = 1287;
        $this->model->name = 'Wi-Fi и Bluetooth';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2170;
        $this->model->sort = 1104;
        $this->model->name = 'Аксессуары для струнных';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2178;
        $this->model->sort = 1108;
        $this->model->name = 'Искусство и культура';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2179;
        $this->model->sort = 1113;
        $this->model->name = 'Дом, семья, досуг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2176;
        $this->model->sort = 1114;
        $this->model->name = 'Компьютеры и интернет';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2201;
        $this->model->sort = 1117;
        $this->model->name = 'Семейные игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2205;
        $this->model->sort = 1118;
        $this->model->name = 'Стратегии и экономические игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2370;
        $this->model->sort = 1194;
        $this->model->name = 'Электровеники и электрошвабры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2365;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2312;
        $this->model->sort = 1197;
        $this->model->name = 'Квиллинг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2310;
        $this->model->sort = 1199;
        $this->model->name = 'Мыловарение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2391;
        $this->model->sort = 1215;
        $this->model->name = 'Комплектующие для кондиционеров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2396;
        $this->model->sort = 1218;
        $this->model->name = 'Управление климатом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2332;
        $this->model->sort = 1220;
        $this->model->name = 'Сумки и боксы для дисков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2405;
        $this->model->sort = 1222;
        $this->model->name = 'Встраиваемые вытяжки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2406;
        $this->model->sort = 1224;
        $this->model->name = 'Встраиваемые микроволновые печи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2287;
        $this->model->sort = 1226;
        $this->model->name = 'Режущие плоттеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2285;
        $this->model->sort = 1230;
        $this->model->name = '     Системные телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2266;
        $this->model->sort = 1234;
        $this->model->name = '    Копиры и дупликаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2327;
        $this->model->sort = 1238;
        $this->model->name = '  Расходники для 3D принтеров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2351;
        $this->model->sort = 1240;
        $this->model->name = ' Сумки и боксы для дисков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2376;
        $this->model->sort = 1241;
        $this->model->name = 'Сушильные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2372;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2411;
        $this->model->sort = 1242;
        $this->model->name = 'Встраиваемые винные шкафы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2412;
        $this->model->sort = 1243;
        $this->model->name = 'Подогреватели посуды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2443;
        $this->model->sort = 1245;
        $this->model->name = 'Приготовление блюд';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2437;
        $this->model->sort = 1248;
        $this->model->name = 'Приготовление напитков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2444;
        $this->model->sort = 1249;
        $this->model->name = 'Прочая техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2343;
        $this->model->sort = 1187;
        $this->model->name = 'Посудомоечные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = [
            'Посудомоечные машины.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2446;
        $this->model->sort = 1250;
        $this->model->name = 'Фены и фен-щётки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = [
            'Фены и фен-щётки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2447;
        $this->model->sort = 1254;
        $this->model->name = 'Щипцы, плойки и выпрямители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = [
            'Щипцы, плойки и выпрямители.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2276;
        $this->model->sort = 1167;
        $this->model->name = 'Уничтожители бумаг (шредеры)';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = [
            'Уничтожители бумаг (шредеры).png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2457;
        $this->model->sort = 1257;
        $this->model->name = 'Миостимуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2498;
        $this->model->sort = 1259;
        $this->model->name = ' Мобильные стенды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2461;
        $this->model->sort = 1266;
        $this->model->name = 'Электробигуди';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2424;
        $this->model->sort = 1267;
        $this->model->name = '  Защитные пленки и стекла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2407;
        $this->model->sort = 1269;
        $this->model->name = 'Встраиваемые морозильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2363;
        $this->model->sort = 1271;
        $this->model->name = '  Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2330;
        $this->model->sort = 1274;
        $this->model->name = ' Расходные материалы для брошюровщиков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2350;
        $this->model->sort = 1275;
        $this->model->name = ' Внешние жесткие диски и SSD';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2495;
        $this->model->sort = 1280;
        $this->model->name = 'Системы MultiRoom';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2454;
        $this->model->sort = 1282;
        $this->model->name = 'Сетевое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2481;
        $this->model->sort = 1284;
        $this->model->name = '  Офисные программы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2474;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2422;
        $this->model->sort = 1285;
        $this->model->name = ' Сумки и чехлы для ноутбуков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2359;
        $this->model->sort = 1188;
        $this->model->name = 'Фильтры и умягчители для воды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2367;
        $this->model->sort = 1190;
        $this->model->name = 'Роботы-пылесосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2365;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2369;
        $this->model->sort = 1191;
        $this->model->name = 'Аксессуары для пылесосов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2365;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2321;
        $this->model->sort = 1201;
        $this->model->name = 'Книги по рукоделию';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2306;
        $this->model->sort = 1203;
        $this->model->name = 'Сборные модели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2337;
        $this->model->sort = 1208;
        $this->model->name = 'Аксессуары для кальянов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2329;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2342;
        $this->model->sort = 1210;
        $this->model->name = 'Накопители данных';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2340;
        $this->model->sort = 1211;
        $this->model->name = 'Крупная техника для кухни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2339;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2474;
        $this->model->sort = 1293;
        $this->model->name = ' Программное обеспечение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2502;
        $this->model->sort = 1301;
        $this->model->name = ' Аксессуары для проекторов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2503;
        $this->model->sort = 1302;
        $this->model->name = 'Телевизоры и плазменные панели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2441;
        $this->model->sort = 1305;
        $this->model->name = 'Запчасти для принтеров и МФУ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2409;
        $this->model->sort = 1309;
        $this->model->name = 'Встраиваемые кофеварки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2410;
        $this->model->sort = 1310;
        $this->model->name = 'Встраиваемые пароварки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 609;
        $this->model->sort = 1314;
        $this->model->name = 'Овощная консервация';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 604;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 653;
        $this->model->sort = 1315;
        $this->model->name = 'Колбасы, сосиски, деликатесы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 649;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1417;
        $this->model->sort = 1425;
        $this->model->name = 'Скутеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2499;
        $this->model->sort = 1317;
        $this->model->name = 'Интерактивные доски и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2509;
        $this->model->sort = 1321;
        $this->model->name = ' Таблички';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 525;
        $this->model->sort = 1323;
        $this->model->name = 'Порционный кофе';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 476;
        $this->model->sort = 1324;
        $this->model->name = 'Внешние аккумуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 508;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2512;
        $this->model->sort = 1325;
        $this->model->name = '   Источники бесперебойного питания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1644;
        $this->model->sort = 1327;
        $this->model->name = 'Домашние помощники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 510;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1642;
        $this->model->sort = 1329;
        $this->model->name = 'Системы MultiRoom';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 510;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 508;
        $this->model->sort = 1331;
        $this->model->name = 'Аксессуары для наушников и гарнитур';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 487;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1638;
        $this->model->sort = 1333;
        $this->model->name = 'Мониторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 510;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1031;
        $this->model->sort = 1335;
        $this->model->name = 'Антивозрастной уход';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2479;
        $this->model->sort = 1337;
        $this->model->name = 'Климат';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2472;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2490;
        $this->model->sort = 1338;
        $this->model->name = 'Домашние кинотеатры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2449;
        $this->model->sort = 1255;
        $this->model->name = 'Электробритвы мужские';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = [
            'Электробритвы мужские.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2429;
        $this->model->sort = 1260;
        $this->model->name = ' Аксессуары для графических планшетов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = [
            'Аксессуары для графических планшетов.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2511;
        $this->model->sort = 1342;
        $this->model->name = ' Компьютерные стулья и кресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 659;
        $this->model->sort = 1344;
        $this->model->name = 'Рыба, морепродукты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 655;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1133;
        $this->model->sort = 1347;
        $this->model->name = 'Нишевая парфюмерия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1120;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 864;
        $this->model->sort = 1349;
        $this->model->name = 'Детское питание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 862;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1972;
        $this->model->sort = 1350;
        $this->model->name = 'Для парикмахеров и барберов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2074;
        $this->model->sort = 1351;
        $this->model->name = 'Оборудование и мебель для медучреждений';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2072;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2159;
        $this->model->sort = 1352;
        $this->model->name = 'Контрольно-измерительное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2158;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2064;
        $this->model->sort = 1353;
        $this->model->name = 'Стерилизация для салонов красоты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2080;
        $this->model->sort = 1355;
        $this->model->name = 'Средства самообороны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2311;
        $this->model->sort = 1357;
        $this->model->name = 'Шкатулки для рукоделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1082;
        $this->model->sort = 1360;
        $this->model->name = 'Ошейники и средства от блох и клещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2381;
        $this->model->sort = 1362;
        $this->model->name = 'Техника для ухода за одеждой';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2372;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1345;
        $this->model->sort = 1366;
        $this->model->name = 'Свернуть';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1168;
        $this->model->sort = 1369;
        $this->model->name = 'Видеорегистраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1093;
        $this->model->sort = 1370;
        $this->model->name = 'Ковры и ковровые дорожки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1199;
        $this->model->sort = 1372;
        $this->model->name = 'Искусственные растения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1101;
        $this->model->sort = 1374;
        $this->model->name = 'Витамины и добавки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1182;
        $this->model->sort = 1375;
        $this->model->name = 'Аппараты для маникюра и педикюра';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2468;
        $this->model->sort = 1292;
        $this->model->name = 'Сетевые карты и адаптеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2465;
        $this->model->sort = 1294;
        $this->model->name = ' Сетевые накопители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2505;
        $this->model->sort = 1296;
        $this->model->name = 'Проекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2492;
        $this->model->sort = 1298;
        $this->model->name = 'Мультимедиа-проекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2489;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 705;
        $this->model->sort = 1341;
        $this->model->name = 'Здоровье';
        $this->model->icon = 'fas fa-heartbeat';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1903;
        $this->model->sort = 1382;
        $this->model->name = 'Торговое оборудование для касс';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2466;
        $this->model->sort = 1391;
        $this->model->name = '  Прочее сетевое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 600;
        $this->model->sort = 1393;
        $this->model->name = 'Ванильный сахар, сахарная пудра';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 592;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 612;
        $this->model->sort = 1396;
        $this->model->name = 'Консервы из рыбы и морепродуктов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 604;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1582;
        $this->model->sort = 1398;
        $this->model->name = ' Рули, джойстики, геймпады';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1564;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 668;
        $this->model->sort = 1399;
        $this->model->name = 'Хлеб и хлебобулочные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1592;
        $this->model->sort = 1402;
        $this->model->name = 'Элементы систем отопления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1515;
        $this->model->sort = 1404;
        $this->model->name = 'ТВ-приставки и медиаплееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1500;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1444;
        $this->model->sort = 1407;
        $this->model->name = 'Аксессуары для умных часов и браслетов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1468;
        $this->model->sort = 1408;
        $this->model->name = 'Цифровые плееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1434;
        $this->model->sort = 1411;
        $this->model->name = 'Уход за стеклами и фарами';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1479;
        $this->model->sort = 1412;
        $this->model->name = 'Строительная техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1473;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1384;
        $this->model->sort = 1414;
        $this->model->name = 'Аккумуляторы и зарядные устройства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2020;
        $this->model->sort = 1416;
        $this->model->name = 'Декор и аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1993;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 544;
        $this->model->sort = 1419;
        $this->model->name = 'Фрукты и орехи в глазури, драже';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1220;
        $this->model->sort = 1421;
        $this->model->name = 'Искусственные растения для аквариумов и террариумов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1258;
        $this->model->sort = 1423;
        $this->model->name = 'Сено и наполнители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 665;
        $this->model->sort = 1564;
        $this->model->name = ' Мясо и птица замороженные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 661;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1302;
        $this->model->sort = 1426;
        $this->model->name = 'Тормозные жидкости';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2525;
        $this->model->sort = 1428;
        $this->model->name = ' Игровые комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1627;
        $this->model->sort = 1430;
        $this->model->name = 'Куклы и пупсы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1609;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1936;
        $this->model->sort = 1432;
        $this->model->name = 'Удобрения и уход за растениями';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1413;
        $this->model->sort = 1434;
        $this->model->name = 'Мототехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1647;
        $this->model->sort = 1435;
        $this->model->name = 'Компьютерные кресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1645;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1650;
        $this->model->sort = 1437;
        $this->model->name = 'Диваны и кушетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1645;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2610;
        $this->model->sort = 1439;
        $this->model->name = 'Микроскопы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2607;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1880;
        $this->model->sort = 1440;
        $this->model->name = 'Лежаки и шезлонги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1960;
        $this->model->sort = 1442;
        $this->model->name = 'Средства для защиты растений';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 509;
        $this->model->sort = 1443;
        $this->model->name = 'Аксессуары для ручных стабилизаторов и стедикамов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 502;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 662;
        $this->model->sort = 1446;
        $this->model->name = 'Замороженные блюда и полуфабрикаты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 661;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1414;
        $this->model->sort = 1450;
        $this->model->name = 'Снегоходы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1319;
        $this->model->sort = 1451;
        $this->model->name = 'Аксессуары и запчасти';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1309;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 731;
        $this->model->sort = 1452;
        $this->model->name = 'Противоопухолевые препараты и иммуномодуляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1366;
        $this->model->sort = 1455;
        $this->model->name = 'Туризм и отдых на природе';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2141;
        $this->model->sort = 1457;
        $this->model->name = 'Резчики швов и Стенорезные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2322;
        $this->model->sort = 1459;
        $this->model->name = 'Бисер и бисероплетение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2221;
        $this->model->sort = 1460;
        $this->model->name = 'Сувениры Яндекс.Маркета';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2217;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1509;
        $this->model->sort = 1463;
        $this->model->name = 'Аксессуары для ручных стабилизаторов и стедикамов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 843;
        $this->model->sort = 1380;
        $this->model->name = 'Товары для праздника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1566;
        $this->model->sort = 1386;
        $this->model->name = 'Мультимедиа-проекторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1513;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2517;
        $this->model->sort = 1388;
        $this->model->name = 'Всё для геймеров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1741;
        $this->model->sort = 1566;
        $this->model->name = 'Мойки высокого давления';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1736;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2518;
        $this->model->sort = 1385;
        $this->model->name = 'Игровые приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = [
            'Игровые приставки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1943;
        $this->model->sort = 1568;
        $this->model->name = 'Парогенераторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1925;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1542;
        $this->model->sort = 1570;
        $this->model->name = 'Тренажеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1539;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1209;
        $this->model->sort = 594;
        $this->model->name = 'Лечение и укрепление';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1421;
        $this->model->sort = 1470;
        $this->model->name = 'Грили, барбекю, коптильни';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2591;
        $this->model->sort = 1481;
        $this->model->name = '  Видеорегистраторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2585;
        $this->model->sort = 1482;
        $this->model->name = '  GPS-навигаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2035;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2578;
        $this->model->sort = 1483;
        $this->model->name = 'Рули, джойстики, геймпады';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2576;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2593;
        $this->model->sort = 1487;
        $this->model->name = 'Автоакустика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2577;
        $this->model->sort = 1489;
        $this->model->name = ' Игровые приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2576;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2583;
        $this->model->sort = 1490;
        $this->model->name = ' Игры для классических приставок';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2576;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2596;
        $this->model->sort = 1493;
        $this->model->name = ' FM-трансмиттеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1797;
        $this->model->sort = 1497;
        $this->model->name = 'Строительная техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1784;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1560;
        $this->model->sort = 1498;
        $this->model->name = 'Стиральные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1471;
        $this->model->sort = 1500;
        $this->model->name = 'Грузовые машины';
        $this->model->icon = 'fas fa-adjust';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1460;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1913;
        $this->model->sort = 1501;
        $this->model->name = 'Фильтры, насосы и хлоргенераторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1830;
        $this->model->sort = 1503;
        $this->model->name = 'Фильтры для воды и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2010;
        $this->model->sort = 1506;
        $this->model->name = 'Садовые щетки и метлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2576;
        $this->model->sort = 1509;
        $this->model->name = ' Игры и приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2361;
        $this->model->sort = 1511;
        $this->model->name = 'Средства для посудомоечных машин';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2091;
        $this->model->sort = 1512;
        $this->model->name = 'Грузоподъемное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1752;
        $this->model->sort = 1514;
        $this->model->name = 'Надставки для котлов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2587;
        $this->model->sort = 1516;
        $this->model->name = ' Карты и программы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2584;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2597;
        $this->model->sort = 1518;
        $this->model->name = '  Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1033;
        $this->model->sort = 1521;
        $this->model->name = 'Проблемная кожа';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1829;
        $this->model->sort = 1522;
        $this->model->name = 'Оборудование для магазинов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1802;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2605;
        $this->model->sort = 1524;
        $this->model->name = '              Радиостанции';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1135;
        $this->model->sort = 1525;
        $this->model->name = 'Парфюмерные наборы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1120;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2606;
        $this->model->sort = 1526;
        $this->model->name = ' Телевизоры и мониторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2065;
        $this->model->sort = 1571;
        $this->model->name = 'Принадлежности и аксессуары для тату';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2114;
        $this->model->sort = 1573;
        $this->model->name = 'Рекламные конструкции и материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2125;
        $this->model->sort = 1575;
        $this->model->name = 'Поломойные и подметальные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2122;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2140;
        $this->model->sort = 1577;
        $this->model->name = 'Резчики швов и Стенорезные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2139;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2317;
        $this->model->sort = 1580;
        $this->model->name = 'Цветная бумага и картон';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 457;
        $this->model->sort = 1582;
        $this->model->name = 'Тестовая категория';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '10',
            '11',
            '12',
            '14',
            '15',
            '16',
            '17',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 504;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 606;
        $this->model->sort = 1583;
        $this->model->name = 'Блюда готовые консервированные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 604;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 605;
        $this->model->sort = 1584;
        $this->model->name = 'Десертные соусы и топпинги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 604;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 713;
        $this->model->sort = 1586;
        $this->model->name = 'Витамины и минералы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 751;
        $this->model->sort = 1589;
        $this->model->name = ' Контактные линзы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 752;
        $this->model->sort = 1590;
        $this->model->name = ' Растворы для контактных линз';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1360;
        $this->model->sort = 1592;
        $this->model->name = 'Витамины и добавки для грызунов и хорьков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1353;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 597;
        $this->model->sort = 1597;
        $this->model->name = ' Мука и смеси для выпечки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 592;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 628;
        $this->model->sort = 1599;
        $this->model->name = 'Слабоалкогольные напитки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 618;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 748;
        $this->model->sort = 1600;
        $this->model->name = 'Гаджеты и изделия для сна';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 735;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 648;
        $this->model->sort = 1602;
        $this->model->name = 'Фрукты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 643;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1378;
        $this->model->sort = 1467;
        $this->model->name = ' Палатки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1666;
        $this->model->sort = 1472;
        $this->model->name = 'Тренажеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2524;
        $this->model->sort = 1474;
        $this->model->name = '  Игровые аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1633;
        $this->model->sort = 1476;
        $this->model->name = 'Газовые клапаны для котлов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1742;
        $this->model->sort = 1478;
        $this->model->name = 'Спасательные жилеты и круги';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1054;
        $this->model->sort = 1607;
        $this->model->name = 'Шлейки, ошейники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 601;
        $this->model->sort = 1612;
        $this->model->name = 'Пасхальные украшения, пищевые красители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 592;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1105;
        $this->model->sort = 1616;
        $this->model->name = ' Картины, постеры, гобелены, панно';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1106;
        $this->model->sort = 1619;
        $this->model->name = 'Ошейники от блох и клещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1090;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1147;
        $this->model->sort = 1622;
        $this->model->name = 'Для бороды и усов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1141;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1202;
        $this->model->sort = 1623;
        $this->model->name = 'База и верхнее покрытие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1178;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1207;
        $this->model->sort = 1624;
        $this->model->name = 'Кормушки для рыб и рептилий';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1261;
        $this->model->sort = 1626;
        $this->model->name = 'Уход за полостью рта';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1259;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1299;
        $this->model->sort = 1629;
        $this->model->name = ' Рюкзаки спортивные и городские';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1411;
        $this->model->sort = 1632;
        $this->model->name = 'Тормозная система';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1441;
        $this->model->sort = 1633;
        $this->model->name = 'Клеи, герметики и фиксаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1429;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1477;
        $this->model->sort = 1635;
        $this->model->name = '  Термосы и термокружки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1482;
        $this->model->sort = 1636;
        $this->model->name = 'Пульсометры и шагомеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1616;
        $this->model->sort = 1638;
        $this->model->name = 'Водяные тепловентиляторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 940;
        $this->model->sort = 1646;
        $this->model->name = 'Шкафы, тумбы, комоды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 936;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1674;
        $this->model->sort = 1650;
        $this->model->name = 'Спортивное питание';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 664;
        $this->model->sort = 1651;
        $this->model->name = 'Рыба и морепродукты замороженные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 661;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2018;
        $this->model->sort = 1654;
        $this->model->name = 'Радиоуправляемые модели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2008;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2096;
        $this->model->sort = 1656;
        $this->model->name = '  Станки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1999;
        $this->model->sort = 1657;
        $this->model->name = 'Аксессуары для канистр';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2135;
        $this->model->sort = 1659;
        $this->model->name = 'Детекторы и счетчики банкнот';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2131;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2183;
        $this->model->sort = 1661;
        $this->model->name = 'Техническая литература';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2315;
        $this->model->sort = 1663;
        $this->model->name = 'Кинетический песок';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2290;
        $this->model->sort = 1665;
        $this->model->name = ' Оборудование для конференций';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2452;
        $this->model->sort = 1667;
        $this->model->name = 'Аксессуары для электробритв и эпиляторов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2489;
        $this->model->sort = 1669;
        $this->model->name = 'Оборудование для презентаций';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2033;
        $this->model->sort = 1673;
        $this->model->name = 'Игры для классических приставок';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2026;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1726;
        $this->model->sort = 1675;
        $this->model->name = 'Аксессуары для плавания';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2147;
        $this->model->sort = 1677;
        $this->model->name = 'Комплектующие для бетономешалок';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1770;
        $this->model->sort = 1678;
        $this->model->name = 'Аксессуары для окон и дверей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1579;
        $this->model->sort = 1681;
        $this->model->name = 'Компьютерные гарнитуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1564;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1852;
        $this->model->sort = 1684;
        $this->model->name = 'Поплавковые выключатели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1909;
        $this->model->sort = 1688;
        $this->model->name = 'Шарики для сухих бассейнов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1899;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1568;
        $this->model->sort = 1690;
        $this->model->name = 'Кабеленесущие системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2334;
        $this->model->sort = 1692;
        $this->model->name = 'Диски, кассеты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2390;
        $this->model->sort = 1693;
        $this->model->name = 'Системы центрального кондиционирования';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 785;
        $this->model->sort = 1695;
        $this->model->name = ' Противопролежневые матрасы и подушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 780;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1439;
        $this->model->sort = 1696;
        $this->model->name = 'Аксессуары для палаток и тентов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 139;
        $this->model->sort = 1606;
        $this->model->name = 'Кресла для геймеров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 505;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1225;
        $this->model->sort = 1608;
        $this->model->name = 'Фоны для аквариумов и террариумов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1548;
        $this->model->sort = 1610;
        $this->model->name = 'Материалы и комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1083;
        $this->model->sort = 1618;
        $this->model->name = 'Чехлы для мебели';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1050;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1730;
        $this->model->sort = 1640;
        $this->model->name = 'Аксессуары для лодок, катеров и яхт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1718;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 886;
        $this->model->sort = 1642;
        $this->model->name = 'Опыты и исследования';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 878;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1664;
        $this->model->sort = 1644;
        $this->model->name = 'Мобильный гейминг';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1905;
        $this->model->sort = 1645;
        $this->model->name = 'Кресла и стулья';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1879;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2093;
        $this->model->sort = 1814;
        $this->model->name = 'Для производства и тиражирования CD и DVD дисков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1817;
        $this->model->sort = 1726;
        $this->model->name = 'Оголовки для скважины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2613;
        $this->model->sort = 1732;
        $this->model->name = 'Aксессуар';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2607;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1767;
        $this->model->sort = 1740;
        $this->model->name = 'Тренировочные снаряды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1764;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 986;
        $this->model->sort = 1790;
        $this->model->name = '  Люстры и потолочные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '6',
            '12',
            '9',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 978;
        $this->model->sort = 1753;
        $this->model->name = 'Разные товары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '6',
            '12',
            '9',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2619;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1931;
        $this->model->sort = 1757;
        $this->model->name = 'Фото- и видеокамеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2008;
        $this->model->sort = 1758;
        $this->model->name = 'Робототехника и Stem-игрушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2620;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 991;
        $this->model->sort = 1762;
        $this->model->name = 'Губы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 991;
        $this->model->image = [
            'orig.webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1121;
        $this->model->sort = 1766;
        $this->model->name = 'Товары для авто- и мототехники';
        $this->model->icon = 'fas fa-car';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '7',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1802;
        $this->model->sort = 1768;
        $this->model->name = 'Оборудование';
        $this->model->icon = 'fas fa-chalkboard-teacher';
        $this->model->shop_brand_ids = [
            '3',
            '9',
            '10',
            '11',
            '16',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 933;
        $this->model->sort = 1769;
        $this->model->name = 'Товары для дома';
        $this->model->icon = 'fas fa-home';
        $this->model->shop_brand_ids = [
            '3',
            '6',
            '11',
            '16',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 663;
        $this->model->sort = 1783;
        $this->model->name = 'Овощи, фрукты, грибы замороженные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 661;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1713;
        $this->model->sort = 1785;
        $this->model->name = 'Рыбная гастрономия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1708;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1044;
        $this->model->sort = 1792;
        $this->model->name = 'Аварийное и эвакуационное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1034;
        $this->model->sort = 1795;
        $this->model->name = 'Споты и трек-системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2110;
        $this->model->sort = 1699;
        $this->model->name = 'Аудиооборудование для концертных залов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 720;
        $this->model->sort = 1701;
        $this->model->name = 'Антибиотики, противомикробные и противопаразитарные средства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2397;
        $this->model->sort = 1704;
        $this->model->name = ' Аксессуары для климатического оборудования';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 790;
        $this->model->sort = 1708;
        $this->model->name = 'Питание специального назначения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 835;
        $this->model->sort = 1711;
        $this->model->name = 'Настольные игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1049;
        $this->model->sort = 1713;
        $this->model->name = 'Приборы для ухода за лицом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1020;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1126;
        $this->model->sort = 1714;
        $this->model->name = 'Шины и диски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1473;
        $this->model->sort = 1716;
        $this->model->name = 'Спецтехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1517;
        $this->model->sort = 1718;
        $this->model->name = ' Ножи и мультитулы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1822;
        $this->model->sort = 1720;
        $this->model->name = 'Электромагнитные клапаны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1993;
        $this->model->sort = 1721;
        $this->model->name = 'Фонтаны и пруды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1803;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1874;
        $this->model->sort = 1724;
        $this->model->name = 'Аксессуары и комплектующие для снаряжения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1844;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1658;
        $this->model->sort = 1778;
        $this->model->name = 'Игры для приставок и ПК';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 688;
        $this->model->sort = 1779;
        $this->model->name = 'Смеси из орехов и сухофруктов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 686;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 730;
        $this->model->sort = 1781;
        $this->model->name = 'Системные гормональные препараты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2223;
        $this->model->sort = 1730;
        $this->model->name = '  Ноутбуки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '4',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 357;
        $this->model->image = [
            'Ноутбуки.jpg',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 923;
        $this->model->sort = 1788;
        $this->model->name = 'Демисезонная одежда и обувь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = [
            'Демисезонная одежда и обувь.jpg',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1450;
        $this->model->sort = 1739;
        $this->model->name = 'Очки виртуальной реальности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2629;
        $this->model->image = [
            'Очки виртуальной реальности.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1510;
        $this->model->sort = 1742;
        $this->model->name = 'Портативная акустика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2629;
        $this->model->image = [
            'Портативная акустика.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1508;
        $this->model->sort = 1808;
        $this->model->name = 'Расходные материалы и оснастка';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1463;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1839;
        $this->model->sort = 1810;
        $this->model->name = 'Оснастка к садовой технике';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2066;
        $this->model->sort = 1816;
        $this->model->name = ' Принадлежности и оборудование для татуажа';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1934;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2127;
        $this->model->sort = 1818;
        $this->model->name = 'Лабораторное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2122;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2166;
        $this->model->sort = 1819;
        $this->model->name = 'Тюнеры и метрономы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2182;
        $this->model->sort = 1820;
        $this->model->name = 'Словари, справочники, энциклопедии';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2356;
        $this->model->sort = 1824;
        $this->model->name = 'Подогреватели посуды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1175;
        $this->model->sort = 561;
        $this->model->name = 'Террариумы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2333;
        $this->model->sort = 1825;
        $this->model->name = '  Расходные материалы для ламинаторов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2323;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2428;
        $this->model->sort = 1828;
        $this->model->name = 'Запасные части для планшетов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2393;
        $this->model->sort = 1830;
        $this->model->name = 'Цифровые метеостанции';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2423;
        $this->model->sort = 1831;
        $this->model->name = '   Кронштейны, держатели и подставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2433;
        $this->model->sort = 1835;
        $this->model->name = 'Аксессуары и запчасти для ноутбуков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2349;
        $this->model->sort = 1837;
        $this->model->name = 'Корпуса и док-станции для жестких дисков';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2342;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2251;
        $this->model->sort = 1839;
        $this->model->name = ' Комплекты клавиатур и мышей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2286;
        $this->model->sort = 1841;
        $this->model->name = '  Матричные принтеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2581;
        $this->model->sort = 1843;
        $this->model->name = 'Ретро консоли';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2576;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1916;
        $this->model->sort = 1846;
        $this->model->name = 'Книги, бланки, формы для ведения учета';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1544;
        $this->model->sort = 1849;
        $this->model->name = 'Стиральные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1522;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1778;
        $this->model->sort = 1851;
        $this->model->name = 'Лестницы и элементы лестниц';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1762;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1725;
        $this->model->sort = 1853;
        $this->model->name = 'Мужские ботинки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1714;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2439;
        $this->model->sort = 1855;
        $this->model->name = '  Компьютерные кабели, разъемы, переходники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2363;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 972;
        $this->model->sort = 1858;
        $this->model->name = ' Хозяйственные сумки-тележки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 963;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 593;
        $this->model->sort = 1860;
        $this->model->name = 'Посыпки и украшения для кондитерских изделий';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 592;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1967;
        $this->model->sort = 1861;
        $this->model->name = 'Цифровые фоторамки и фотоальбомы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1621;
        $this->model->sort = 1865;
        $this->model->name = 'Тепловые завесы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2562;
        $this->model->sort = 1867;
        $this->model->name = 'Освещение и электрика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2560;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1707;
        $this->model->sort = 1869;
        $this->model->name = 'BMX велосипеды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1700;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 590;
        $this->model->sort = 1872;
        $this->model->name = 'Растительное масло холодного отжима';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 560;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 687;
        $this->model->sort = 1873;
        $this->model->name = 'Сухофрукты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 686;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1239;
        $this->model->sort = 1800;
        $this->model->name = 'Освежители воздуха';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1303;
        $this->model->sort = 1802;
        $this->model->name = 'Витамины и минералы для спортсменов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1291;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1337;
        $this->model->sort = 1803;
        $this->model->name = 'Огнетушители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1313;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1362;
        $this->model->sort = 1804;
        $this->model->name = 'Витамины и добавки для птиц';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1353;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1398;
        $this->model->sort = 1806;
        $this->model->name = 'Запасные части для мобильных телефонов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1255;
        $this->model->sort = 1891;
        $this->model->name = 'Солярии';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2214;
        $this->model->sort = 1833;
        $this->model->name = 'Настольные игры для взрослых';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2199;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1694;
        $this->model->sort = 1888;
        $this->model->name = 'Массажные столы и стулья';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1690;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1170;
        $this->model->sort = 1889;
        $this->model->name = 'Подставки и держатели для украшений';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1205;
        $this->model->sort = 1892;
        $this->model->name = 'Разветвители прикуривателя';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1294;
        $this->model->sort = 1894;
        $this->model->name = 'Масло трансмиссионное';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1290;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1351;
        $this->model->sort = 1895;
        $this->model->name = 'Наборы инструментов и оснастки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1486;
        $this->model->sort = 1897;
        $this->model->name = 'Средства от комаров и клещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2130;
        $this->model->sort = 1904;
        $this->model->name = ' Предупредительные наклейки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2122;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2323;
        $this->model->sort = 1911;
        $this->model->name = 'Расходные материалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2413;
        $this->model->sort = 1913;
        $this->model->name = 'Измельчители пищевых отходов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2463;
        $this->model->sort = 1915;
        $this->model->name = 'VoIP-оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2462;
        $this->model->sort = 1916;
        $this->model->name = 'Проводные роутеры (маршрутизаторы) и коммутаторы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1640;
        $this->model->sort = 1918;
        $this->model->name = 'Спутниковое телевидение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 510;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1648;
        $this->model->sort = 1920;
        $this->model->name = 'Игровые приставки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1426;
        $this->model->sort = 1921;
        $this->model->name = 'Экипировка и защита';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1413;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1831;
        $this->model->sort = 1922;
        $this->model->name = 'Моторные масла для садовой техники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1805;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1415;
        $this->model->sort = 1923;
        $this->model->name = 'Ремешки для умных часов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1374;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 877;
        $this->model->sort = 1926;
        $this->model->name = 'Защита и безопасность';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 874;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2252;
        $this->model->sort = 1929;
        $this->model->name = ' Компьютерные гарнитуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1216;
        $this->model->sort = 1931;
        $this->model->name = 'Инвентарь для обслуживания аквариумов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1159;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1273;
        $this->model->sort = 1932;
        $this->model->name = 'Поилки и кормушки для грызунов, хорьков и кроликов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1734;
        $this->model->sort = 1934;
        $this->model->name = 'Встраиваемые конвекторы и решетки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1687;
        $this->model->sort = 1937;
        $this->model->name = 'Средства для ухода за кожей вокруг глаз';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1677;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2272;
        $this->model->sort = 1939;
        $this->model->name = 'Аксессуары для принтеров и МФУ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1887;
        $this->model->sort = 949;
        $this->model->name = 'Средства для розжига';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1290;
        $this->model->sort = 1941;
        $this->model->name = 'Беспроводные наушник';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1121;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2228;
        $this->model->sort = 1943;
        $this->model->name = ' Комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2595;
        $this->model->sort = 1593;
        $this->model->name = '  Усилители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2590;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1585;
        $this->model->sort = 852;
        $this->model->name = 'Комплектующие';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1564;
        $this->model->image = [
            'Комплектующие.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 513;
        $this->model->sort = 1445;
        $this->model->name = 'TV-тюнеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 504;
        $this->model->image = [
            'TV-тюнеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2476;
        $this->model->sort = 1290;
        $this->model->name = 'Операционные системы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2474;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 717;
        $this->model->sort = 1876;
        $this->model->name = 'Лечение сердца и сосудов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 793;
        $this->model->sort = 1877;
        $this->model->name = '  Лечебно-профилактическое питание для детей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 790;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 854;
        $this->model->sort = 1879;
        $this->model->name = 'Аксессуары для колясок и автокресел';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 903;
        $this->model->sort = 1882;
        $this->model->name = 'Книги по беременности и уходу за ребенком';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 887;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 988;
        $this->model->sort = 1883;
        $this->model->name = ' Настенно-потолочные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 532;
        $this->model->sort = 1885;
        $this->model->name = 'Шоколад и шоколадные изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 529;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1069;
        $this->model->sort = 1886;
        $this->model->name = 'Загар и защита от солнца';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2261;
        $this->model->sort = 1908;
        $this->model->name = '   Оргтехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2172;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2304;
        $this->model->sort = 1910;
        $this->model->name = 'Рисование и гравюры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1260;
        $this->model->sort = 620;
        $this->model->name = 'Сено и наполнители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1234;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1639;
        $this->model->sort = 649;
        $this->model->name = 'Колесные диски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1630;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1480;
        $this->model->sort = 715;
        $this->model->name = '   Тенты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1366;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1492;
        $this->model->sort = 731;
        $this->model->name = 'Аксессуары для цифровых плееров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1565;
        $this->model->sort = 766;
        $this->model->name = 'Автоматика и низковольтовое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1559;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1784;
        $this->model->sort = 834;
        $this->model->name = 'Строительная техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1452;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1803;
        $this->model->sort = 876;
        $this->model->name = '  Дача, сад и огород';
        $this->model->icon = 'fas fa-home';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2133;
        $this->model->sort = 1110;
        $this->model->name = 'Синтезаторы и MIDI-клавиатуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2061;
        $this->model->sort = 1124;
        $this->model->name = 'Лупы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2063;
        $this->model->sort = 1125;
        $this->model->name = 'Прицелы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2056;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2117;
        $this->model->sort = 1127;
        $this->model->name = 'Весы для животных';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2132;
        $this->model->sort = 1129;
        $this->model->name = 'Музыкальные инструменты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2123;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2226;
        $this->model->sort = 1132;
        $this->model->name = 'Промышленные';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2210;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2236;
        $this->model->sort = 1133;
        $this->model->name = '  Кулеры и системы охлаждения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2242;
        $this->model->sort = 1134;
        $this->model->name = 'Оптические приводы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2320;
        $this->model->sort = 1157;
        $this->model->name = 'Пазлы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2303;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2275;
        $this->model->sort = 1179;
        $this->model->name = ' Запчасти для принтеров и МФУ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2261;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2453;
        $this->model->sort = 1311;
        $this->model->name = 'Приборы для ухода за лицом';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2190;
        $this->model->sort = 1348;
        $this->model->name = 'Литература на иностранных языках';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2171;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 630;
        $this->model->sort = 1395;
        $this->model->name = 'Макароны, крупы, бакалея';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 517;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1773;
        $this->model->sort = 1409;
        $this->model->name = 'Аксессуары и принадлежности';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1764;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2579;
        $this->model->sort = 1494;
        $this->model->name = '  Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2576;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2082;
        $this->model->sort = 1508;
        $this->model->name = 'Противопожарное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2408;
        $this->model->sort = 1550;
        $this->model->name = 'Комплекты встраиваемой техники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 930;
        $this->model->sort = 388;
        $this->model->name = '   Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = [
            'Аксессуары.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1875;
        $this->model->sort = 1687;
        $this->model->name = 'Сканеры считывания штрих-кода';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2614;
        $this->model->sort = 1723;
        $this->model->name = 'Словари и фитнес ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2032;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2620;
        $this->model->sort = 1754;
        $this->model->name = 'Электроника';
        $this->model->icon = 'fas fa-laptop';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 723;
        $this->model->sort = 217;
        $this->model->name = 'Лечение сахарного диабета';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 725;
        $this->model->sort = 219;
        $this->model->name = 'Лечение зубов и полости рта';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 711;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1744;
        $this->model->sort = 299;
        $this->model->name = 'Вентиляционные решётки для каминов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1578;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 987;
        $this->model->sort = 413;
        $this->model->name = ' Настенно-потолочные светильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 982;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1063;
        $this->model->sort = 444;
        $this->model->name = 'Антицеллюлитные и моделирующие средства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1053;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1077;
        $this->model->sort = 502;
        $this->model->name = 'Игрушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1056;
        $this->model->sort = 505;
        $this->model->name = 'Ошейники от блох и клещей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2076;
        $this->model->sort = 990;
        $this->model->name = 'Оборудование для прачечной и химчистки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2072;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2094;
        $this->model->sort = 1017;
        $this->model->name = 'Производственно-техническое оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2088;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2149;
        $this->model->sort = 1066;
        $this->model->name = 'Вышки и строительные леса';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2138;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2471;
        $this->model->sort = 1288;
        $this->model->name = ' Аксессуары для сетевого оборудования';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2454;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2384;
        $this->model->sort = 1272;
        $this->model->name = 'Кондиционеры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = [
            'Кондиционеры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2388;
        $this->model->sort = 1214;
        $this->model->name = 'Очистители и увлажнители воздуха';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2383;
        $this->model->image = [
            'Очистители и увлажнители.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2357;
        $this->model->sort = 1672;
        $this->model->name = 'Кулеры для воды и питьевые фонтанчики';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = [
            'Кулеры для воды и питьевые фонтанчики.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1625;
        $this->model->sort = 1775;
        $this->model->name = 'Автокресла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1609;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 706;
        $this->model->sort = 1809;
        $this->model->name = 'Дезинфицирующие средства';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '2',
            '4',
            '5',
            '6',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = [
            'orig (3).webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1851;
        $this->model->sort = 1856;
        $this->model->name = 'Холодильное оборудование';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '11',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1829;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2341;
        $this->model->sort = 1212;
        $this->model->name = 'Холодильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2340;
        $this->model->image = [
            'Холодильники.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2415;
        $this->model->sort = 1262;
        $this->model->name = 'Кофеварки и кофемашины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = [
            'Кофеварки и кофемашины.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2615;
        $this->model->sort = 1862;
        $this->model->name = 'Наушники и Bluetooth-гарнитуры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2629;
        $this->model->image = [
            'orig (1).webp',
        ];
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2480;
        $this->model->sort = 1950;
        $this->model->name = 'Камера';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '11',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1569;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2632;
        $this->model->sort = 1951;
        $this->model->name = 'Умные колонки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_branch_id' => '9',
            ],
        ];
        $this->model->parent_id = 2629;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 870;
        $this->model->sort = 325;
        $this->model->name = ' Детский спорт';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = [
            'Детский спорт.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 834;
        $this->model->sort = 307;
        $this->model->name = 'Игровые наборы и фигурки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = [
            'Игровые наборы и фигурки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 828;
        $this->model->sort = 1535;
        $this->model->name = 'Игрушки и игры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = [
            'Игрушки и игры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 851;
        $this->model->sort = 1878;
        $this->model->name = 'Люльки и переноски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = [
            'Люльки и переноски.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 855;
        $this->model->sort = 317;
        $this->model->name = 'Матрасы и наматрасники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 845;
        $this->model->image = [
            'Матрасы и наматрасники.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 885;
        $this->model->sort = 1786;
        $this->model->name = ' Головоломки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 878;
        $this->model->image = [
            'Головоломки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 878;
        $this->model->sort = 345;
        $this->model->name = ' Развитие и обучение';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 821;
        $this->model->image = [
            'Развитие и обучение.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2229;
        $this->model->sort = 1949;
        $this->model->name = ' Видеокарты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = [
            'orig (1).webp',
            'Видеокарты.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2232;
        $this->model->sort = 1864;
        $this->model->name = '  Внутренние жесткие диски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = [
            'Внутренние жесткие диски.png',
        ];
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2233;
        $this->model->sort = 1138;
        $this->model->name = ' Внутренние твердотельные накопители (SSD)';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = [
            'Внутренние твердотельные накопители (SSD).png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2230;
        $this->model->sort = 1595;
        $this->model->name = 'Модули памяти';
        $this->model->icon = 'fas fa-address-book';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2228;
        $this->model->image = [
            'Screenshot_1 — копия.png',
            'Модули памяти.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 926;
        $this->model->sort = 410;
        $this->model->name = ' Для малышей';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 922;
        $this->model->image = [
            'Для малышей.png',
            'Для малышей.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1824;
        $this->model->sort = 825;
        $this->model->name = 'Женская спортивная одежда';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1821;
        $this->model->image = [
            'Женская.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1670;
        $this->model->sort = 684;
        $this->model->name = 'Рюкзаки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1662;
        $this->model->image = [
            'Рюкзаки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2172;
        $this->model->sort = 1772;
        $this->model->name = 'Компьютерная техника';
        $this->model->icon = ' fa-computer-classic';
        $this->model->shop_brand_ids = [
            '1',
            '9',
            '10',
            '11',
            '15',
            '16',
            '20',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2624;
        $this->model->sort = 1744;
        $this->model->name = ' Мобильные телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '3',
            '4',
            '5',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2619;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2398;
        $this->model->sort = 1709;
        $this->model->name = ' Встраиваемая техника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2339;
        $this->model->image = [
            'Встраиваемая техника.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2404;
        $this->model->sort = 1223;
        $this->model->name = 'Встраиваемые посудомоечные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = [
            'Встраиваемые посудомоечные машины.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2403;
        $this->model->sort = 1358;
        $this->model->name = 'Встраиваемые стиральные машины';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = [
            'Встраиваемые стиральные машины.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2402;
        $this->model->sort = 1705;
        $this->model->name = 'Встраиваемые холодильники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2398;
        $this->model->image = [
            'Встраиваемые холодильники.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2435;
        $this->model->sort = 992;
        $this->model->name = 'Мультиварки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = [
            'Мультиварки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2426;
        $this->model->sort = 1551;
        $this->model->name = 'Электрочайники и термопоты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = [
            'Электрочайники и термопоты.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1230;
        $this->model->sort = 564;
        $this->model->name = 'Фены и фен-щётки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = [
            'Фены и фен-щётки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1231;
        $this->model->sort = 604;
        $this->model->name = 'Щипцы, плойки и выпрямители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1227;
        $this->model->image = [
            'Щипцы, плойки и выпрямители.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2450;
        $this->model->sort = 1252;
        $this->model->name = 'Эпиляторы и женские электробритвы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2445;
        $this->model->image = [
            'Эпиляторы и женские электробритвы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2225;
        $this->model->sort = 1948;
        $this->model->name = 'Моноблоки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2210;
        $this->model->image = [
            'orig (1).webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2255;
        $this->model->sort = 1147;
        $this->model->name = ' Графические планшеты';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = [
            'Графические планшеты.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2626;
        $this->model->sort = 1745;
        $this->model->name = 'Кнопочные мобильные телефоны';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '3',
            '4',
            '5',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2619;
        $this->model->image = [
            'Кнопочные мобильные телефоны.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1937;
        $this->model->sort = 901;
        $this->model->name = 'Объективы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = [
            'Объективы.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1973;
        $this->model->sort = 1812;
        $this->model->name = 'Фотоаппараты моментальной печати';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1931;
        $this->model->image = [
            'Фотоаппараты.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101014;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->icon = '';
        $this->model->shop_brand_ids = 2;
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'is_combination' => '1',
                'shop_option_type_id' => '332',
                'shop_option_branch_id' => '9',
            ],
        ];
        $this->model->parent_id = 690;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'sadfsadfsadfsafdsadfasdf';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1867;
        $this->model->sort = 908;
        $this->model->name = 'Уголь';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1356;
        $this->model->sort = 665;
        $this->model->name = 'Плоскогубцы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1346;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1753;
        $this->model->sort = 794;
        $this->model->name = 'Бильярд';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1750;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1853;
        $this->model->sort = 905;
        $this->model->name = 'Мангалы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1846;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1864;
        $this->model->sort = 929;
        $this->model->name = 'Комплектующие водоснабжения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1807;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2044;
        $this->model->sort = 1038;
        $this->model->name = 'Усилители';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2039;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2001;
        $this->model->sort = 1044;
        $this->model->name = 'Аксессуары';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1997;
        $this->model->sort = 1047;
        $this->model->name = 'Канистры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1984;
        $this->model->sort = 1049;
        $this->model->name = 'Садовые пилы, ножовки и ножи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1959;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2115;
        $this->model->sort = 1121;
        $this->model->name = 'Информационные табло';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2108;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2417;
        $this->model->sort = 1244;
        $this->model->name = 'Микроволновые печи';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2414;
        $this->model->image = [
            'Микроволновые печи.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1194;
        $this->model->sort = 1365;
        $this->model->name = 'Зарядные устройства для телефонов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1163;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2582;
        $this->model->sort = 1496;
        $this->model->name = '   Карты ';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2576;
        $this->model->image = "";
        $this->model->active = null;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1540;
        $this->model->sort = 1637;
        $this->model->name = 'Унитазы, писсуары, биде';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1519;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2508;
        $this->model->sort = 1741;
        $this->model->name = ' Подставки для ног';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2506;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 474;
        $this->model->sort = 1838;
        $this->model->name = 'Защитные пленки и стекла';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 481;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 821;
        $this->model->sort = 1945;
        $this->model->name = 'Детские товары';
        $this->model->icon = 'fas fa-child';
        $this->model->shop_brand_ids = [
            '9',
            '15',
            '16',
            '17',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 524;
        $this->model->sort = 1752;
        $this->model->name = 'Молотый кофе';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 519;
        $this->model->image = [
            'orig.webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 960;
        $this->model->sort = 400;
        $this->model->name = 'Фильтры-кувшины для воды';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 949;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 836;
        $this->model->sort = 308;
        $this->model->name = 'Развивающие и обучающие игрушки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 828;
        $this->model->image = [
            'Развивающие и обучающие игрушки.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1115;
        $this->model->sort = 495;
        $this->model->name = ' Статуэтки и фигурки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2084;
        $this->model->sort = 1054;
        $this->model->name = ' Регулировка движения';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2078;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101011;
        $this->model->sort = 101011;
        $this->model->name = 'Планшетыsdds';
        $this->model->icon = 'ikonka';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '15',
            '16',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = [
            [
                'shop_option_branch_id' => '9',
            ],
        ];
        $this->model->parent_id = 1368;
        $this->model->image = [
            'orig.webp',
            'Планшеты.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101013;
        $this->model->sort = null;
        $this->model->name = 'asdsaf';
        $this->model->icon = 'asdasfdsafd';
        $this->model->shop_brand_ids = 7;
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '238',
                'shop_option_branch_id' => '5',
            ],
        ];
        $this->model->parent_id = 727;
        $this->model->image = [
            '3-Things-Great-Websites-Have-in-Common (3).png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1410;
        $this->model->sort = 709;
        $this->model->name = 'Датчики давления в шинах';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1382;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1512;
        $this->model->sort = 781;
        $this->model->name = 'Аудиотехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1500;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1901;
        $this->model->sort = 878;
        $this->model->name = 'Сувениры для геймеров';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1646;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2169;
        $this->model->sort = 1101;
        $this->model->name = 'Аксессуары для клавишных';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2132;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2366;
        $this->model->sort = 1185;
        $this->model->name = 'Вертикальные пылесосы';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2365;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2491;
        $this->model->sort = 1277;
        $this->model->name = 'ТВ-приставки и медиаплееры';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = [
            'ТВ-приставки и медиаплееры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2521;
        $this->model->sort = 1468;
        $this->model->name = 'Игры для приставок и ПК';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2517;
        $this->model->image = [
            'Игры для приставок и ПК.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2260;
        $this->model->sort = 1150;
        $this->model->name = '    Наушники';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2246;
        $this->model->image = [
            'Наушники и Bluetooth гарнитуры.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2628;
        $this->model->sort = 1748;
        $this->model->name = 'Аксессуары для телефонов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '3',
            '4',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2619;
        $this->model->image = [
            'Аксессуары для телефонов.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 916;
        $this->model->sort = 379;
        $this->model->name = ' Комната ученика';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 906;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1075;
        $this->model->sort = 485;
        $this->model->name = 'Миски';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1005;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1099;
        $this->model->sort = 486;
        $this->model->name = 'Интерьер';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 933;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1218;
        $this->model->sort = 1798;
        $this->model->name = 'Держатели для книг и журналов';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1099;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 772;
        $this->model->sort = 1875;
        $this->model->name = 'Физиотерапевтические изделия';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 758;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 709;
        $this->model->sort = 1947;
        $this->model->name = 'Перчатки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 705;
        $this->model->image = [
            'orig.webp',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1232;
        $this->model->sort = 1731;
        $this->model->name = 'Автомобильные видеоинтерфейсы и навигационные блоки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '15',
            '16',
            '17',
            '18',
            '19',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = 1232;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 1003;
        $this->model->sort = 1760;
        $this->model->name = 'Товары для животных';
        $this->model->icon = 'fas fal fa-dog';
        $this->model->shop_brand_ids = [
            '1',
            '4',
            '17',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = "";
        $this->model->parent_id = null;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 2493;
        $this->model->sort = 1312;
        $this->model->name = ' Аудиотехника';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 2486;
        $this->model->image = [
            'Аудиотехника.png',
        ];
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 801;
        $this->model->sort = 287;
        $this->model->name = 'Маски и шапочки';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 803;
        $this->model->sort = 290;
        $this->model->name = 'Материалы для анализов и инъекций';
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->parent_id = 796;
        $this->model->image = "";
        $this->model->active = 1;
        $this->save();


    }

}
