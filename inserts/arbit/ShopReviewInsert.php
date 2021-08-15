<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopReview;

class ShopReviewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopReview();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 28;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = 0;
        $this->model->rating_option = "";
        $this->model->text = 'tovar yoqmadi';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1_4_week';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 159;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 28;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = 259;
        $this->model->rating_option = "";
        $this->model->text = 'nmasi yopmadi ?';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 159;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 245;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = 254;
        $this->model->rating_option = "";
        $this->model->text = 'reply';
        $this->model->virtues = 'reply';
        $this->model->drawbacks = 'reply';
        $this->model->experience = 'less_week';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 153;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 245;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = 0;
        $this->model->rating_option = "";
        $this->model->text = 'simple';
        $this->model->virtues = 'simple';
        $this->model->drawbacks = 'simple';
        $this->model->experience = '1_4_week';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 153;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 21;
        $this->model->user_company_id = null;
        $this->model->rating = 0.5;
        $this->model->parent_id = 0;
        $this->model->rating_option = "";
        $this->model->text = 'yomon';
        $this->model->virtues = '';
        $this->model->drawbacks = 'bomapti';
        $this->model->experience = '2';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'hammasi norm';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = 'Более года';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '11111111111';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = 'Менее года';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '123123';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = 'Менее года';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


    }

}
