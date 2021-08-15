<?php

namespace zetsoft\inserts\mplace;

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
        $this->model->accept = null;
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
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 159;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asda asd asd</p>';
        $this->model->virtues = 'asdasd';
        $this->model->drawbacks = 'asdasdasd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
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
        $this->model->experience = '0';
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
        $this->model->accept = null;
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
        $this->model->experience = '0';
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
        $this->model->accept = null;
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
        $this->model->experience = '1';
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
        $this->model->accept = null;
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

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asda asd asd</p>';
        $this->model->virtues = 'asdasd';
        $this->model->drawbacks = 'asdasdasd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>&uuml;gdfgdfg</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
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
        $this->model->experience = '0';
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
        $this->model->accept = null;
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
        $this->model->experience = '0';
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
        $this->model->accept = null;
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
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '12';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'trtrtr';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'tg';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'w';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'last review';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '5:51';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '5:51';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'last review 2';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '6:00';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'vdd';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'vdd';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'last vddv';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = 'test';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = null;
        $this->model->dislike = null;
        $this->model->photo = "";
        $this->model->user_id = 189;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asda asd asd</p>';
        $this->model->virtues = 'asdasd';
        $this->model->drawbacks = 'asdasdasd';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 41;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asda asd asd</p>';
        $this->model->virtues = 'asdasd';
        $this->model->drawbacks = 'asdasdasd';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 314;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\\\"1\\\\\\\\\\\" cellpadding=\\\\\\\\\\\"1\\\\\\\\\\\" cellspacing=\\\\\\\\\\\"1\\\\\\\\\\\" style=\\\\\\\\\\\"width:500px\\\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\\\"1\\\\\\\\\\\" cellpadding=\\\\\\\\\\\"1\\\\\\\\\\\" cellspacing=\\\\\\\\\\\"1\\\\\\\\\\\" style=\\\\\\\\\\\"width:500px\\\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\\\"1\\\\\\\\\\\" cellpadding=\\\\\\\\\\\"1\\\\\\\\\\\" cellspacing=\\\\\\\\\\\"1\\\\\\\\\\\" style=\\\\\\\\\\\"width:500px\\\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\\\"1\\\\\\\\\\\" cellpadding=\\\\\\\\\\\"1\\\\\\\\\\\" cellspacing=\\\\\\\\\\\"1\\\\\\\\\\\" style=\\\\\\\\\\\"width:500px\\\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 1.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdasdasd</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = ' asdasd asd a';
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 1.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdasdasdef</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = ' asdasd asd a';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 1.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdasdasdef</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = ' asdasd asd a';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 1;
        $this->model->dislike = 1;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 1.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdasdasdef</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = ' asdasd asd a';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>efsd</p>';
        $this->model->virtues = 'sdf';
        $this->model->drawbacks = 'sdf';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 1;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>efsd</p>';
        $this->model->virtues = 'sdf';
        $this->model->drawbacks = 'sdf';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asd</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = -1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 15;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASDASDSAD</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'ASD';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 24;
        $this->model->user_company_id = null;
        $this->model->rating = 0.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>51551</p>';
        $this->model->virtues = 'net';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 301;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>qweqwe</p>';
        $this->model->virtues = 'qwe';
        $this->model->drawbacks = 'eqwe';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 340;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>uihuih</p>';
        $this->model->virtues = 'qwe';
        $this->model->drawbacks = 'iuh';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>uihuih</p>';
        $this->model->virtues = 'qwe';
        $this->model->drawbacks = 'iuh';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>erferferggrt</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = 'asd asd';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>wd</p>';
        $this->model->virtues = 'wd';
        $this->model->drawbacks = 'dw';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ewfewfwe</p>';
        $this->model->virtues = 'ewew';
        $this->model->drawbacks = 'we';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>rhehhger</p>';
        $this->model->virtues = 're';
        $this->model->drawbacks = 'we';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>wefgwergwr</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ewfwqw</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ewfwqw</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>wedfwef</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 351;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asd</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>dasd</p>';
        $this->model->virtues = '';
        $this->model->drawbacks = '';
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 353;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>dasd</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asdasd';
        $this->model->experience = '0';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>dasdsdf sdf</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asdasd';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 356;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 40;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>qdqwe</p>';
        $this->model->virtues = 'qwe';
        $this->model->drawbacks = 'eqw';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 358;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 24;
        $this->model->user_company_id = null;
        $this->model->rating = 0.5;
        $this->model->parent_id = 337;
        $this->model->rating_option = "";
        $this->model->text = '<p>hjlbhjbh</p>';
        $this->model->virtues = 'net';
        $this->model->drawbacks = 'yesst';
        $this->model->experience = '1_4_week';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>ASDASD ASDA</p>';
        $this->model->virtues = 'sdf';
        $this->model->drawbacks = 'qweqwe qweqwe ';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 357;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 28;
        $this->model->user_company_id = null;
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p><s><u>kjjklkjs</u></s></p>';
        $this->model->virtues = 'net';
        $this->model->drawbacks = 'yesst';
        $this->model->experience = 'less_year';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = -1;
        $this->model->dislike = 2;
        $this->model->photo = "";
        $this->model->user_id = 115;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdds</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 31;
        $this->model->user_company_id = null;
        $this->model->rating = 1.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdasd</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = ' asdasd asd a';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asd</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'dasd';
        $this->model->experience = '1';
        $this->model->recommend = null;
        $this->model->anonymous = 1;
        $this->model->like = 1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 23;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asdasd</p>';
        $this->model->virtues = 'asdasd asdasd';
        $this->model->drawbacks = 'ds';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 114;
        $this->model->user_company_id = null;
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>asadasd</p>';
        $this->model->virtues = 'dasdad';
        $this->model->drawbacks = 'asdasd';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 2;
        $this->model->dislike = -1;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 32;
        $this->model->user_company_id = null;
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<p>q221212121</p>';
        $this->model->virtues = '21';
        $this->model->drawbacks = '21';
        $this->model->experience = '1';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 1;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'company';
        $this->model->shop_brand_id = 2;
        $this->model->shop_product_id = 167;
        $this->model->user_company_id = 125;
        $this->model->rating = 5;
        $this->model->parent_id = 302;
        $this->model->rating_option = [
            '5',
            '4',
            '2',
        ];
        $this->model->text = '<p>ffdfdg</p>';
        $this->model->virtues = 'netcdcd';
        $this->model->drawbacks = 'yesstfdfdfdf';
        $this->model->experience = 'less_year';
        $this->model->recommend = 1;
        $this->model->anonymous = 1;
        $this->model->like = 1;
        $this->model->dislike = 5;
        $this->model->photo = "";
        $this->model->user_id = 142;
        $this->save();


    }

}
