<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = 'Artebio ';
        $this->model->title = 'Artebio ';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 167;
        $this->model->name = 'Flawless';
        $this->model->title = 'Flawless';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 170;
        $this->model->name = 'Blutzucker aktiv';
        $this->model->title = 'Blutzucker aktiv';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 168;
        $this->model->name = 'Minoxidil Premium';
        $this->model->title = 'Minoxidil Premium';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 171;
        $this->model->name = 'Gipertofort';
        $this->model->title = 'Gipertofort';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 156;
        $this->model->name = 'Uropro';
        $this->model->title = 'Uropro';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 155;
        $this->model->name = 'Genius';
        $this->model->title = 'Genius';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 154;
        $this->model->name = 'Parik off';
        $this->model->title = 'Parik off';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 157;
        $this->model->name = 'Maxisize';
        $this->model->title = 'Maxisize';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 158;
        $this->model->name = 'Alitabs';
        $this->model->title = 'Alitabs';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 159;
        $this->model->name = 'Nikostop';
        $this->model->title = 'Nikostop';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 160;
        $this->model->name = 'DieTonus';
        $this->model->title = 'DieTonus';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 161;
        $this->model->name = 'Maxisize Plus';
        $this->model->title = 'Maxisize Plus';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 162;
        $this->model->name = 'Sensex';
        $this->model->title = 'Sensex';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 163;
        $this->model->name = 'Genryou Puro';
        $this->model->title = 'Genryou Puro';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 164;
        $this->model->name = 'Artodex';
        $this->model->title = 'Artodex';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 165;
        $this->model->name = 'HANGOVER MOZG';
        $this->model->title = 'HANGOVER MOZG';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 169;
        $this->model->name = 'Perfect Skin';
        $this->model->title = 'Perfect Skin';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 5;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 172;
        $this->model->name = 'Dream Tonus';
        $this->model->title = 'Dream Tonus';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 173;
        $this->model->name = 'Fatality';
        $this->model->title = 'Fatality';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.25;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 174;
        $this->model->name = 'Erogan';
        $this->model->title = 'Erogan';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.5;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 175;
        $this->model->name = 'Parazitox';
        $this->model->title = 'Parazitox';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.4;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 2;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 178;
        $this->model->name = 'КБА золото';
        $this->model->title = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = null;
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'pcs';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 153;
        $this->model->name = 'KБA Золото';
        $this->model->title = 'KBA Золото';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = '1689';
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 2;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.35;
        $this->model->size = null;
        $this->model->offer = null;
        $this->model->rating = 4.5;
        $this->model->measure = 'pcs';
        $this->model->autocreate = 1;
        $this->save();


    }

}
