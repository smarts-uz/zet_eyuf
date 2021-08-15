<?php

namespace zetsoft\inserts\eyuf;

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
        $this->model->name = '';
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
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 302;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:29:10';
        $this->model->modified_at = '2020-08-27 14:29:10';
        $this->model->created_by = 293;
        $this->model->modified_by = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 260;
        $this->model->name = '';
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
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 255;
        $this->model->name = '';
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
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 254;
        $this->model->name = '';
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
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 263;
        $this->model->name = '';
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
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 303;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:29:12';
        $this->model->modified_at = '2020-08-27 14:29:12';
        $this->model->created_by = 293;
        $this->model->modified_by = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 304;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:40:08';
        $this->model->modified_at = '2020-08-27 14:40:08';
        $this->model->created_by = 293;
        $this->model->modified_by = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 276;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-24 12:16:12';
        $this->model->modified_at = '2020-08-24 12:16:12';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 278;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-24 13:30:20';
        $this->model->modified_at = '2020-08-24 13:30:20';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 279;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-24 13:34:13';
        $this->model->modified_at = '2020-08-24 13:34:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 280;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-24 14:44:12';
        $this->model->modified_at = '2020-08-24 14:44:12';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 281;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-24 18:12:06';
        $this->model->modified_at = '2020-08-24 18:12:06';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 282;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-24 18:23:10';
        $this->model->modified_at = '2020-08-24 18:23:10';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 283;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-25 12:33:28';
        $this->model->modified_at = '2020-08-25 12:33:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 291;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 17:24:57';
        $this->model->modified_at = '2020-08-26 17:24:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 293;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 17:51:32';
        $this->model->modified_at = '2020-08-26 17:51:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 294;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 17:52:35';
        $this->model->modified_at = '2020-08-26 17:52:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 292;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 17:27:10';
        $this->model->modified_at = '2020-08-26 17:27:10';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 295;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 18:00:21';
        $this->model->modified_at = '2020-08-26 18:00:21';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 296;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 18:03:59';
        $this->model->modified_at = '2020-08-26 18:03:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 297;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 18:12:59';
        $this->model->modified_at = '2020-08-26 18:12:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 298;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 18:14:42';
        $this->model->modified_at = '2020-08-26 18:14:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 299;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-26 18:16:11';
        $this->model->modified_at = '2020-08-26 18:16:11';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 300;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:28:26';
        $this->model->modified_at = '2020-08-27 14:28:26';
        $this->model->created_by = 293;
        $this->model->modified_by = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 301;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:28:26';
        $this->model->modified_at = '2020-08-27 14:28:26';
        $this->model->created_by = 293;
        $this->model->modified_by = 293;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 310;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:02';
        $this->model->modified_at = '2020-08-27 14:51:02';
        $this->model->created_by = 296;
        $this->model->modified_by = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 311;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:02';
        $this->model->modified_at = '2020-08-27 14:51:02';
        $this->model->created_by = 296;
        $this->model->modified_by = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 312;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:02';
        $this->model->modified_at = '2020-08-27 14:51:02';
        $this->model->created_by = 296;
        $this->model->modified_by = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 313;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:02';
        $this->model->modified_at = '2020-08-27 14:51:02';
        $this->model->created_by = 296;
        $this->model->modified_by = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 314;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:03';
        $this->model->modified_at = '2020-08-27 14:51:03';
        $this->model->created_by = 296;
        $this->model->modified_by = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 315;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:04';
        $this->model->modified_at = '2020-08-27 14:51:04';
        $this->model->created_by = 296;
        $this->model->modified_by = 296;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 320;
        $this->model->name = '';
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\"1\\\\\\\\\" cellpadding=\\\\\\\\\"1\\\\\\\\\" cellspacing=\\\\\\\\\"1\\\\\\\\\" style=\\\\\\\\\"width:500px\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->model->created_at = '2020-08-27 15:40:01';
        $this->model->modified_at = '2020-08-27 15:40:01';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 321;
        $this->model->name = '';
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\"1\\\\\\\\\" cellpadding=\\\\\\\\\"1\\\\\\\\\" cellspacing=\\\\\\\\\"1\\\\\\\\\" style=\\\\\\\\\"width:500px\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->model->created_at = '2020-08-27 15:40:01';
        $this->model->modified_at = '2020-08-27 15:40:01';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 322;
        $this->model->name = '';
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\"1\\\\\\\\\" cellpadding=\\\\\\\\\"1\\\\\\\\\" cellspacing=\\\\\\\\\"1\\\\\\\\\" style=\\\\\\\\\"width:500px\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->model->created_at = '2020-08-27 15:40:01';
        $this->model->modified_at = '2020-08-27 15:40:01';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 323;
        $this->model->name = '';
        $this->model->type = 'product';
        $this->model->shop_brand_id = null;
        $this->model->shop_product_id = 27;
        $this->model->user_company_id = null;
        $this->model->rating = 2;
        $this->model->parent_id = null;
        $this->model->rating_option = "";
        $this->model->text = '<table border=\\\\\\\\\"1\\\\\\\\\" cellpadding=\\\\\\\\\"1\\\\\\\\\" cellspacing=\\\\\\\\\"1\\\\\\\\\" style=\\\\\\\\\"width:500px\\\\\\\\\">	<tbody>		<tr>			<td>asd</td>			<td>&nbsp;</td>		</tr>		<tr>			<td>dasd</td>			<td>a</td>		</tr>		<tr>			<td>&nbsp;</td>			<td>asd</td>		</tr>	</tbody></table><p>&nbsp;</p>';
        $this->model->virtues = 'asd';
        $this->model->drawbacks = 'asd asd asd';
        $this->model->experience = '0';
        $this->model->recommend = null;
        $this->model->anonymous = null;
        $this->model->like = 0;
        $this->model->dislike = 0;
        $this->model->photo = "";
        $this->model->user_id = 294;
        $this->model->created_at = '2020-08-27 15:40:03';
        $this->model->modified_at = '2020-08-27 15:40:03';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 324;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:46';
        $this->model->modified_at = '2020-08-27 17:33:46';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 325;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:47';
        $this->model->modified_at = '2020-08-27 17:33:47';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 306;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:47:28';
        $this->model->modified_at = '2020-09-02 12:10:28';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 308;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:48:00';
        $this->model->modified_at = '2020-09-02 12:15:26';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 307;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:48:00';
        $this->model->modified_at = '2020-09-02 12:13:40';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 309;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:48:01';
        $this->model->modified_at = '2020-09-02 12:15:58';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 317;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 15:27:00';
        $this->model->modified_at = '2020-09-02 12:16:31';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 318;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 15:27:02';
        $this->model->modified_at = '2020-09-02 12:18:06';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 319;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 15:37:14';
        $this->model->modified_at = '2020-09-02 12:19:28';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 326;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:47';
        $this->model->modified_at = '2020-08-27 17:33:47';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 327;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:48';
        $this->model->modified_at = '2020-08-27 17:33:48';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 328;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:49';
        $this->model->modified_at = '2020-08-27 17:33:49';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 329;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:49';
        $this->model->modified_at = '2020-08-27 17:33:49';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 330;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:33:50';
        $this->model->modified_at = '2020-08-27 17:33:50';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 331;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:38:24';
        $this->model->modified_at = '2020-08-27 17:38:24';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 332;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:38:24';
        $this->model->modified_at = '2020-08-27 17:38:24';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 333;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:38:25';
        $this->model->modified_at = '2020-08-27 17:38:25';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 334;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:39:13';
        $this->model->modified_at = '2020-08-27 17:39:13';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 337;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:51:32';
        $this->model->modified_at = '2020-09-02 12:04:07';
        $this->model->created_by = 301;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 339;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:17:23';
        $this->model->modified_at = '2020-08-27 18:17:23';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 340;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:22:40';
        $this->model->modified_at = '2020-08-27 18:22:40';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 341;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:22:41';
        $this->model->modified_at = '2020-08-27 18:22:41';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 342;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:26:17';
        $this->model->modified_at = '2020-08-27 18:26:17';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 344;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:34:14';
        $this->model->modified_at = '2020-08-27 18:34:14';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 345;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:41:49';
        $this->model->modified_at = '2020-08-27 18:41:49';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 346;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:42:36';
        $this->model->modified_at = '2020-08-27 18:42:36';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 347;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:44:05';
        $this->model->modified_at = '2020-08-27 18:44:05';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 348;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:47:14';
        $this->model->modified_at = '2020-08-27 18:47:14';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 349;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:47:14';
        $this->model->modified_at = '2020-08-27 18:47:14';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 350;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:47:57';
        $this->model->modified_at = '2020-08-27 18:47:57';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 351;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:51:10';
        $this->model->modified_at = '2020-08-27 18:51:10';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 352;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:51:39';
        $this->model->modified_at = '2020-08-27 18:51:39';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 353;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:53:03';
        $this->model->modified_at = '2020-08-27 18:53:03';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 354;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:53:37';
        $this->model->modified_at = '2020-08-27 18:53:37';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 356;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-29 18:02:44';
        $this->model->modified_at = '2020-08-29 18:02:44';
        $this->model->created_by = 294;
        $this->model->modified_by = 294;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 358;
        $this->model->name = '';
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
        $this->model->created_at = '2020-09-02 12:04:44';
        $this->model->modified_at = '2020-09-02 12:04:45';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 335;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:40:01';
        $this->model->modified_at = '2020-09-02 12:09:08';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 357;
        $this->model->name = '';
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
        $this->model->created_at = '2020-09-02 11:39:17';
        $this->model->modified_at = '2020-09-02 12:05:05';
        $this->model->created_by = 115;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 359;
        $this->model->name = '';
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
        $this->model->created_at = '2020-09-02 12:05:23';
        $this->model->modified_at = '2020-09-02 12:05:23';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 336;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 17:41:58';
        $this->model->modified_at = '2020-09-02 12:13:13';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 305;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:44:42';
        $this->model->modified_at = '2020-09-02 12:18:12';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 343;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:32:36';
        $this->model->modified_at = '2020-09-03 15:46:36';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 355;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:58:18';
        $this->model->modified_at = '2020-09-03 15:46:41';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 338;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 18:15:18';
        $this->model->modified_at = '2020-09-03 16:29:46';
        $this->model->created_by = 294;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopReview();

        $this->model->id = 316;
        $this->model->name = '';
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
        $this->model->created_at = '2020-08-27 14:51:04';
        $this->model->modified_at = '2020-09-03 18:18:32';
        $this->model->created_by = 296;
        $this->model->modified_by = 163;
        $this->save();


    }

}
