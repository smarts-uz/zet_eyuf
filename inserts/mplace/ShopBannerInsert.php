<?php

namespace zetsoft\inserts\mplace;

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
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'ro';
        $this->model->image = [
            'EC0N4o.jpg',
            'MUcdpu.jpg',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Romania';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 6;
        $this->model->sort = 2;
        $this->model->name = 'Banner_6';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'en';
        $this->model->image = [
            'statue_of_liberty_usa_america_sunset_sculpture_111594_1920x1080.jpg',
            'wp2963574.jpg',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/English';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 7;
        $this->model->sort = 3;
        $this->model->name = 'Banner_7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'lv';
        $this->model->image = [
            'riga-latviya-nebo-doma-reka.jpg',
            'unnamed (1).jpg',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Latvia';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 5;
        $this->model->sort = 4;
        $this->model->name = 'Banner_5';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'uz';
        $this->model->image = [
            'park-pamatnik.jpg',
            'priroda-gory-chimgan-3941.jpg',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Uzbekistan';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 1;
        $this->model->sort = 6;
        $this->model->name = 'Banner';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'ru';
        $this->model->image = [
            '5286d2988f4fe.jpg',
            'russia-2.jpg',
        ];
        $this->model->link = 'https://en.wikipedia.org/wiki/Russia';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 8;
        $this->model->sort = 8;
        $this->model->name = 'Banner_8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 263;
        $this->model->lang = 'ru';
        $this->model->image = [
            'cdd1f651-e0f2-44de-b1a1-304b7719f4d2.jpg',
            'unnamed.jpg',
        ];
        $this->model->link = 'https://uz.wikipedia.org/wiki/Uzbekistan';
        $this->model->common = null;
        $this->save();


    }

}
