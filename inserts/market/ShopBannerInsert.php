<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopBanner;

class ShopBannerInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopBanner();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'carauselBanner';
        $this->model->title = 'carauselBanner';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->lang = 'ru';
        $this->model->image = [
            'carauselBanner.jpg',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 14:34:45';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 14:07:37';
        $this->model->modified_at = '2021-01-19 14:34:45';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 8;
        $this->model->sort = 8;
        $this->model->name = 'aaa';
        $this->model->title = 'aaa';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'uzk';
        $this->model->image = [
            'Fullscreen capture 4162020 10642 PM.bmp',
        ];
        $this->model->link = 'https://uz.wikipedia.org/wiki/Uzbekistan';
        $this->model->common = null;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 14:34:55';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-19 14:34:55';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 7;
        $this->model->sort = 7;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'lv';
        $this->model->image = [
            'Fullscreen capture 4162020 10642 PM.bmp',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Latvia';
        $this->model->common = null;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 14:35:01';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-19 14:35:01';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 6;
        $this->model->sort = 6;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'en';
        $this->model->image = [
            'Fullscreen capture 4162020 10642 PM.bmp',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/English';
        $this->model->common = null;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 14:35:09';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-19 14:35:09';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 5;
        $this->model->sort = 5;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'uz';
        $this->model->image = [
            'Fullscreen capture 4162020 10642 PM.bmp',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Uzbekistan';
        $this->model->common = null;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 14:35:15';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-19 14:35:15';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 3;
        $this->model->sort = 3;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'ro';
        $this->model->image = [
            'Fullscreen capture 4162020 10642 PM.bmp',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Romania';
        $this->model->common = null;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 14:35:22';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-19 14:35:22';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'bannerSectionOne_2';
        $this->model->title = 'bannerSectionOne_2';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->lang = 'uz';
        $this->model->image = [
            'bannerSectionOne_2.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionOne';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:10:00';
        $this->model->modified_at = '2021-01-19 16:10:00';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'bannerSectionOne_3';
        $this->model->title = 'bannerSectionOne_3';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->lang = 'uz';
        $this->model->image = [
            'bannerSectionOne_3.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionOne';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:11:09';
        $this->model->modified_at = '2021-01-19 16:11:09';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'bannerSectionOne_1';
        $this->model->title = 'bannerSectionOne_1';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->lang = 'uz';
        $this->model->image = [
            'bannerSectionOne_1.webp',
        ];
        $this->model->link = '';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionOne';
        $this->model->deleted_at = '2021-01-19 16:14:23';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:08:37';
        $this->model->modified_at = '2021-01-19 16:14:22';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'carauselBanner2';
        $this->model->title = 'carauselBanner2';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->lang = 'ru';
        $this->model->image = "";
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 16:14:28';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 14:38:20';
        $this->model->modified_at = '2021-01-19 16:14:28';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'carauselBanner1';
        $this->model->title = 'carauselBanner1';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->lang = 'ru';
        $this->model->image = [
            'carauselBanner.jpg',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = '';
        $this->model->deleted_at = '2021-01-19 16:14:32';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 14:37:20';
        $this->model->modified_at = '2021-01-19 16:14:31';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'bannerSectionOne_3';
        $this->model->title = 'bannerSectionOne_3';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->lang = 'uz';
        $this->model->image = [
            'bannerSectionOne_3.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionOne';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:15:33';
        $this->model->modified_at = '2021-01-19 16:15:33';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'carauselBanner_1';
        $this->model->title = 'carauselBanner_1';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->lang = 'ru';
        $this->model->image = [
            'carauselBanner1.jpg',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'carouselBanner';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:16:24';
        $this->model->modified_at = '2021-01-19 16:16:24';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'carauselBanner_2';
        $this->model->title = 'carauselBanner_2';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->lang = 'ru';
        $this->model->image = [
            'carauselBanner2.jpg',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'carouselBanner';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:16:57';
        $this->model->modified_at = '2021-01-19 16:16:57';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'carauselBanner_3';
        $this->model->title = 'carauselBanner_3';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->lang = 'ru';
        $this->model->image = [
            'carauselBanner3.jpg',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'carouselBanner';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:18:04';
        $this->model->modified_at = '2021-01-19 16:18:04';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'BannerSectionFour_1';
        $this->model->title = 'BannerSectionFour_1';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->lang = 'en';
        $this->model->image = [
            'BannerSectionFour_1.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionFour';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:27:17';
        $this->model->modified_at = '2021-01-19 16:27:17';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'BannerSectionFour_2';
        $this->model->title = 'BannerSectionFour_2';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->lang = 'en';
        $this->model->image = [
            'BannerSectionFour_2.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionFour';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:29:51';
        $this->model->modified_at = '2021-01-19 16:29:51';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'BannerSectionFour_3';
        $this->model->title = 'BannerSectionFour_3';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->lang = 'en';
        $this->model->image = [
            'BannerSectionFour_3.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerSectionFour';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:31:27';
        $this->model->modified_at = '2021-01-19 16:31:27';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'bannerDivider';
        $this->model->title = 'bannerDivider';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->lang = 'ru';
        $this->model->image = [
            'bannerDivider.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerDivider';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:42:13';
        $this->model->modified_at = '2021-01-19 16:42:13';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'bannerTwo';
        $this->model->title = 'bannerTwo';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->lang = 'uz';
        $this->model->image = [
            'bannerTwo.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerTwo';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 16:52:19';
        $this->model->modified_at = '2021-01-19 16:52:19';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'bannerOne';
        $this->model->title = 'bannerOne';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->lang = 'ru';
        $this->model->image = [
            'bannerOne.webp',
        ];
        $this->model->link = 'google.com';
        $this->model->common = 1;
        $this->model->type = 'bannerOne';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-19 17:01:38';
        $this->model->modified_at = '2021-01-19 17:01:38';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


    }

}
