<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopProduct;

class ShopProductNewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopProduct();

        $this->model->id = 1;
        $this->model->tranz = null;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = null;
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = null;
        $this->model->shop_option_ids = "";
        $this->model->shop_option = "";
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
        $this->model->tranz = null;
        $this->model->accepted = null;
        $this->model->name = 'sadfasf';
        $this->model->title = 'fsdasa';
        $this->model->user_company_id = 265;
        $this->model->package = 'fsdasda';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = 101043;
        $this->model->shop_option_ids = 516;
        $this->model->shop_option = "";
        $this->model->shop_brand_id = 10;
        $this->model->related = [
            '242',
            '245',
        ];
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = [
            'new',
        ];
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 3;
        $this->model->tranz = null;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = null;
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = null;
        $this->model->shop_option_ids = "";
        $this->model->shop_option = "";
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

        $this->model->id = 4;
        $this->model->tranz = null;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = null;
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = 101028;
        $this->model->shop_option_ids = "";
        $this->model->shop_option = "";
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

        $this->model->id = 5;
        $this->model->tranz = null;
        $this->model->accepted = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->user_company_id = 264;
        $this->model->package = '';
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_category_id = 101028;
        $this->model->shop_option_ids = "";
        $this->model->shop_option = "";
        $this->model->shop_brand_id = 46;
        $this->model->related = [
            '217',
            '241',
        ];
        $this->model->shelf_life = 13313;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->autocreate = null;
        $this->save();


    }

}
