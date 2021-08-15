<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopBrand;

class ShopBrandInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopBrand();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'epson';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = [
            'xiaomi-Mi-red-banner-800x450.jpg',
        ];
        $this->model->rating = 3;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'bmw';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = [
            'bmw.jpg',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Levis';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'levis.png',
            'levis.jpg',
            'levis.png',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'mercedes-benz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'mercedesbenz.jpg',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Samsung';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'samsung.jpg',
        ];
        $this->model->rating = 5;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'lenovo';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = [
            'lenov.png',
        ];
        $this->model->rating = 5;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'HP';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'TomFord.png',
        ];
        $this->model->rating = null;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'mi';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'kisspng-motorola-droid-moto-x-logo-motorola-mobility-moto-5aca30f22308e0.5563296115232002421435.png',
        ];
        $this->model->rating = 5;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'TomFord';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = [
            'kisspng-chevrolet-corvette-general-motors-car-van-chevrolet-logo-5b0f0b11d3cca9.9483456515277125298675.png',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'электронная бритва';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'hyundai.png',
        ];
        $this->model->rating = 2.5;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = [
            'kisspng-twitch-tv-portable-network-graphics-streaming-medi-circle-gaming-round-icon-twitch-video-icon-5ca5efb3cc64d9.5706381915543786758372.png',
        ];
        $this->model->rating = 3;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = '1122';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = [
            'Screenshot_1 — копия (2).png',
        ];
        $this->model->rating = 3.5;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'gucci.png',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'ssssssssssss';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = "";
        $this->model->rating = null;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'lg';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'levis.png',
            'levis.jpg',
            'levis.png',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'TommyHilfiger';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'levis.png',
            'levis.jpg',
            'levis.png',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'LG';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'right';
        $this->model->image = [
            'levis.png',
            'levis.jpg',
            'levis.png',
        ];
        $this->model->rating = 4;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Takro';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = '';
        $this->model->image = "";
        $this->model->rating = null;
        $this->model->user_company_id = null;
        $this->save();


        $this->model = new ShopBrand();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'nomi';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->location = 'bottom';
        $this->model->image = "";
        $this->model->rating = 2.5;
        $this->model->user_company_id = null;
        $this->save();


    }

}
