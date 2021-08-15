<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopProduct;

class ShopProductInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopProduct();

        $this->model->id = 166;
        $this->model->accepted = null;
        $this->model->name = 'Artebio ';
        $this->model->title = 'Artebio ';
        $this->model->user_company_id = '257';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'super_offer',
        ];
        $this->model->rating = 4.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 167;
        $this->model->accepted = null;
        $this->model->name = 'Flawless';
        $this->model->title = 'Flawless';
        $this->model->user_company_id = '249';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 170;
        $this->model->accepted = null;
        $this->model->name = 'Blutzucker aktiv';
        $this->model->title = 'Blutzucker aktiv';
        $this->model->user_company_id = '246';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'super_offer',
        ];
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 168;
        $this->model->accepted = null;
        $this->model->name = 'Minoxidil Premium';
        $this->model->title = 'Minoxidil Premium';
        $this->model->user_company_id = '256';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
            'discount',
        ];
        $this->model->rating = 5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 171;
        $this->model->accepted = null;
        $this->model->name = 'Gipertofort';
        $this->model->title = 'Gipertofort';
        $this->model->user_company_id = '247';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'new',
        ];
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 156;
        $this->model->accepted = null;
        $this->model->name = 'Uropro';
        $this->model->title = 'Uropro';
        $this->model->user_company_id = '261';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'super_offer',
        ];
        $this->model->rating = 5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 155;
        $this->model->accepted = null;
        $this->model->name = 'Genius';
        $this->model->title = 'Genius';
        $this->model->user_company_id = '236';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'popular',
        ];
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 154;
        $this->model->accepted = null;
        $this->model->name = 'Parik off';
        $this->model->title = 'Parik off';
        $this->model->user_company_id = '236';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 157;
        $this->model->accepted = null;
        $this->model->name = 'Maxisize';
        $this->model->title = 'Maxisize';
        $this->model->user_company_id = '237';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 158;
        $this->model->accepted = null;
        $this->model->name = 'Alitabs';
        $this->model->title = 'Alitabs';
        $this->model->user_company_id = '260';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 159;
        $this->model->accepted = null;
        $this->model->name = 'Nikostop';
        $this->model->title = 'Nikostop';
        $this->model->user_company_id = '238';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 160;
        $this->model->accepted = null;
        $this->model->name = 'DieTonus';
        $this->model->title = 'DieTonus';
        $this->model->user_company_id = '239';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 161;
        $this->model->accepted = null;
        $this->model->name = 'Maxisize Plus';
        $this->model->title = 'Maxisize Plus';
        $this->model->user_company_id = '240';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 162;
        $this->model->accepted = null;
        $this->model->name = 'Sensex';
        $this->model->title = 'Sensex';
        $this->model->user_company_id = '259';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 163;
        $this->model->accepted = null;
        $this->model->name = 'Genryou Puro';
        $this->model->title = 'Genryou Puro';
        $this->model->user_company_id = '258';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'new',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 164;
        $this->model->accepted = null;
        $this->model->name = 'Artodex';
        $this->model->title = 'Artodex';
        $this->model->user_company_id = '241';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 165;
        $this->model->accepted = null;
        $this->model->name = 'HANGOVER MOZG';
        $this->model->title = 'HANGOVER MOZG';
        $this->model->user_company_id = '234';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 4.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 169;
        $this->model->accepted = null;
        $this->model->name = 'Perfect Skin';
        $this->model->title = 'Perfect Skin';
        $this->model->user_company_id = '260';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 5;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 172;
        $this->model->accepted = null;
        $this->model->name = 'Dream Tonus';
        $this->model->title = 'Dream Tonus';
        $this->model->user_company_id = '255';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'deal_of_day',
            'top_sell',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 173;
        $this->model->accepted = null;
        $this->model->name = 'Fatality';
        $this->model->title = 'Fatality';
        $this->model->user_company_id = '233';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.25;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 3;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 174;
        $this->model->accepted = null;
        $this->model->name = 'Erogan';
        $this->model->title = 'Erogan';
        $this->model->user_company_id = '251';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.5;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 153;
        $this->model->accepted = null;
        $this->model->name = 'KБA Золото';
        $this->model->title = 'KBA Золото';
        $this->model->user_company_id = '262';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 4.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 16;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 1;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = 'sfsdasadf';
        $this->model->user_company_id = '';
        $this->model->package = '131313';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 2;
        $this->model->accepted = null;
        $this->model->name = 'sadfsadf';
        $this->model->title = 'asdfdsafsadf';
        $this->model->user_company_id = '260';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 3;
        $this->model->accepted = null;
        $this->model->name = 'asdfsadf';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1631';
        $this->model->shop_option_ids = [
            '12',
            '11',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'month';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '13',
            'height' => '13',
            'length' => '13',
        ];
        $this->model->offer = [
            'popular',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'l';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 5;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 6;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 7;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 8;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 9;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 10;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 11;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 12;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 13;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 14;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 15;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 17;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 18;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 19;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 20;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 21;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 22;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 23;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 24;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 25;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 26;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 27;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 28;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 29;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 30;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 31;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 32;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 33;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 34;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 35;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 36;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 37;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 38;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 39;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 40;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 41;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 175;
        $this->model->accepted = null;
        $this->model->name = 'Parazitox';
        $this->model->title = 'Parazitox';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.4;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'top_sell',
        ];
        $this->model->rating = 2;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 178;
        $this->model->accepted = null;
        $this->model->name = 'КБА золото';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '123';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1626';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'pcs';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 197;
        $this->model->accepted = 1;
        $this->model->name = 'asdfsadfas';
        $this->model->title = '';
        $this->model->user_company_id = '';
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '690';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'l';
        $this->model->autocreate = null;
        $this->save();


    }

}
