<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopBanner;

class ShopBannerInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopBanner();

        $this->model->id = 3;
        $this->model->sort = 1;
        $this->model->name = 'Banner_3';
        $this->model->user_company_id = 133;
        $this->model->lang = 'ro';
        $this->model->image = null;
        $this->model->link = 'https://en.wikipedia.org/wiki/Romania';
        $this->model->active = 1;
        $this->model->common = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 6;
        $this->model->sort = 2;
        $this->model->name = 'Banner_6';
        $this->model->user_company_id = 133;
        $this->model->lang = 'en';
        $this->model->image = null;
        $this->model->link = 'https://en.wikipedia.org/wiki/English';
        $this->model->active = 1;
        $this->model->common = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 7;
        $this->model->sort = 3;
        $this->model->name = 'Banner_7';
        $this->model->user_company_id = 133;
        $this->model->lang = 'lv';
        $this->model->image = null;
        $this->model->link = 'https://en.wikipedia.org/wiki/Latvia';
        $this->model->active = 1;
        $this->model->common = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 5;
        $this->model->sort = 4;
        $this->model->name = 'Banner_5';
        $this->model->user_company_id = 133;
        $this->model->lang = 'uz';
        $this->model->image = null;
        $this->model->link = 'https://en.wikipedia.org/wiki/Uzbekistan';
        $this->model->active = 1;
        $this->model->common = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 8;
        $this->model->sort = 5;
        $this->model->name = 'Banner_8';
        $this->model->user_company_id = 133;
        $this->model->lang = 'uzk';
        $this->model->image = null;
        $this->model->link = 'https://uz.wikipedia.org/wiki/Uzbekistan';
        $this->model->active = 1;
        $this->model->common = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 1;
        $this->model->sort = 6;
        $this->model->name = 'Banner';
        $this->model->user_company_id = 133;
        $this->model->lang = 'ru';
        $this->model->image = null;
        $this->model->link = 'https://en.wikipedia.org/wiki/Russia';
        $this->model->active = 1;
        $this->model->common = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
