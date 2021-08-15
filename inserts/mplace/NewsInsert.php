<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\news\News;

class NewsInsert extends ZInsert
{

    public function run()
    {

        $this->model = new News();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Хиаоми смартфонлари';
        $this->model->title = 'Бугунги рўйхатда';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Xiaomi smartfonlari butun bunyoda bo&lsquo;lgani kabi O&lsquo;zbekistonda, shu jumladan Terashop.uz internet-do&lsquo;konimizda ham eng xaridorgirlaridan hisoblanadi. Kompaniyaning eng arzon Redmi 7A smartfoni hamda yaqinda taqdim etilgan Mi 9T qurilmalari ham allaqachon onlayn do&lsquo;konimizda allaqachon savdoga qo&lsquo;yilgan. Onlayn do&lsquo;konimizda aksariyat Xiaomi smartfonlarining narxlari sezilarli darajada pasaygan. Bilasizki, Terashop.uz internet-do&lsquo;konimizda Xiaomi smartfonlarining barchasiga tegishli muddatli rasmiy kafolat beriladi va O&lsquo;zbekiston bo&lsquo;ylab barcha viloyatlar markazlariga yetkazib berish bepul!</p>';
        $this->model->image = [
            'img.jpg',
        ];
        $this->model->position = 'right';
        $this->model->news_type_id = 3;
        $this->save();


        $this->model = new News();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '1-апрелдан';
        $this->model->title = '2019-йил 1-январгачa';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Barcha fuqarolar uchun jismoniy shaxslardan olinadigan daromad soligʻining yagona stavkasi &mdash; 12 % miqdorida joriy etiladi, undan 0,1 foizini shaxsiy jamgʻarib boriladigan pensiya hisobvaraqlariga yoʻnaltiriladi. Byudjetdan tashqari Pensiya jamgʻarmasiga ushlab qolinadigan sugʻurta badallarini bekor qilinadi. Yagona ijtimoiy toʻlov miqdori davlat korxonalari va ustav kapitalining 50 %dan ortigʻi davlatga tegishli boʻlgan tashkilotlar uchun 25 %, qolgan yuridik shaxslar uchun pasaytirilgan 12-15 % stavka miqdorida belgilanadi. Read more: https://oz.sputniknews-uz.com/economy/20180630/8718574/Ozbekiston-yangi-Soliq-kodeksi-2019-1yanvardan-kuchga-kiradi.html</p>';
        $this->model->image = [
            'img.jpg',
        ];
        $this->model->position = 'center';
        $this->model->news_type_id = 3;
        $this->save();


        $this->model = new News();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Ўзбекистон аҳолиси';
        $this->model->title = 'Ўзбекистон аҳолиси 34 миллион кишидан ошди.';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Matbuot anjumanida yangi tahrirdagi Soliq kodeksidagi me&rsquo;yor va imtiyozlar haqida ham so&lsquo;z bordi. Unga muvofiq, Soliq kodeksining eski tahririda nazarda tutilgan imtiyozlar 2020-yil 1-aprelidan boshlab bekor qilinishi belgilangan. Bunda ijtimoiy ahamiyatga ega bo&lsquo;lgan ta&rsquo;lim, tibbiyot, madaniyat, maishiy xizmat bo&lsquo;yicha soliq imtiyozlari saqlanib qolindi.</p>';
        $this->model->image = [
            'img.jpg',
        ];
        $this->model->position = 'right';
        $this->model->news_type_id = 1;
        $this->save();


    }

}
