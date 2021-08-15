<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\news\News;

class NewsInsert extends ZInsert
{

    public function run()
    {

        $this->model = new News();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Коронавирус бутун бошли мамлакатни банкротликка олиб келди';
        $this->model->title = 'Агарда Замбиянинг уч миллиард долларлик облигацияларига эга бўлган инвесторлар ҳукуматнинг тўловларни тўхтатиб туриш тўғрисидаги илтимосини рад этадиган бўлса, мамлакат инқирозга учрайди.';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Замбия Африкадаги дефолт эълон қилган биринчи мамлакат бўлиши мумкин. Коронавирус пандемияси бутун бошли мамлакатни банкротликка олиб келди,&nbsp;<a href=\\\\\\\\\"https://lenta.ru/news/2020/10/15/zamb/\\\\\\\\\" target=\\\\\\\\\"_blank\\\\\\\\\">деб ёзади</a>&nbsp;Financial Times.</p>
        $this->model->image = [
            '7fbcsIcKHP7Z6LR9-dODhtQhJe7uuEX5.jpg',
        ];
        $this->model->position = 'center';
        $this->model->news_type_id = 2;
        $this->save();


        $this->model = new News();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Қирғизистон президенти истеъфога чиқди ';
        $this->model->title = 'Қирғизистон президенти Сооронбай Жээнбеков истеъфога чиқди. Бу истеъфо амалда янги бош вазир Садир Жапаровнинг талаби билан рўй берди';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Жапаров 14 октябрь куни Жээнбеков билан учрашув ўтказган ва талабини билдирган, аммо президент лавозимини тарк этишни истамаганди. Бу ўзгаришлар Жапаров қамоқхонадан озод этилган намойишлар фонида бўлмоқда.</p>
        $this->model->image = [
            '7SErGD-jpAS9WP0DGKcXfqnU4c6RkUz_.jpg',
        ];
        $this->model->position = 'center';
        $this->model->news_type_id = 1;
        $this->save();


        $this->model = new News();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Apple янги iPhone’ни тақдим этди';
        $this->model->title = 'Apple iPhone 12 смартфони ва уйга мўлжалланган овоз кучайтиргич – HomePod\'нинг мини версияси тақдимотини ўтказди.';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Apple компанияси Калифорниянинг Купертино шаҳридаги бош штаб-квартирасида асосий флагман маҳсулоти &ndash; iPhone смартфонининг 12-талқини тақдимотини ўтказди. Тадбир компания расмий сайтида трансляция қилинди.</p>
        $this->model->image = [
            'myWNnfPkOVPfB105cbKDWkeOhNdBtbQ9.jpg',
        ];
        $this->model->position = 'right';
        $this->model->news_type_id = 4;
        $this->save();


        $this->model = new News();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Рафаэль Надаль Roland Garros’нинг 13 карра ғолиби бўлди';
        $this->model->title = '“Катта дубулға” сериясига кирувчи мусобақанинг 13 карра ғолибига айланди';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Надаль мусобақанинг ҳал қилувчи учрашувида жаҳоннинг биринчи рақамли теннисчиси, сербиялик Новак Жоковични 6:0, 6:2, 7:5 ҳисобида&nbsp;<a href=\\\\\\\"https://www.sport-interfax.ru/731008\\\\\\\" target=\\\\\\\"_blank\\\\\\\">мағлуб этди</a>. Учрашув 2 соат 43 дақиқа давом этган.</p>
        $this->model->image = [
            'WCpOKzmuKRo5wjfUy8cxYA-s4qLrTVcb.jpg',
        ];
        $this->model->position = 'center';
        $this->model->news_type_id = 2;
        $this->save();


        $this->model = new News();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Экспорт  режалари ва инвестиция лойиҳаларининг бажарилиши танқидий таҳлил қилинди';
        $this->model->title = 'Экспорт режалари ва инвестиция лойиҳаларининг бажарилиши танқидий таҳлил қилинди';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>14 октябрь куни Ўзбекистон Республикаси президенти Шавкат Мирзиёев Хитой Халқ Республикаси ҳамда Корея Республикаси билан ҳамкорликдаги савдо-иқтисодий, инвестициявий ва гуманитар лойиҳалар ижросини танқидий кўриб чиқиш, янги ўсиш нуқталарини белгилашга бағишланган йиғилиш ўтказди.</p>
        $this->model->image = [
            'JfEO5-BaOLWqWeN_GMT9KLC8-i85tjXo.jpg',
        ];
        $this->model->position = 'right';
        $this->model->news_type_id = 1;
        $this->save();


        $this->model = new News();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Криштиану Роналду коронавирус юқтириб олди';
        $this->model->title = '«Ювентус» ва Португалия миллий жамоаси голеадори Криштиану Роналду коронавирус юқтириб олди, дея хабар бермоқда A Bola.';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->text = '<p>Манбанинг ёзишича, Португалия миллий жамоаси ихтиёрида бўлган Роналдунинг тест натижалари мусбат чиққан бўлса-да, у коронавирусни аломатларсиз ўтказмоқда. Футболчининг соғлиғида муаммолар йўқ. Шунга қарамай, Роналду Португалия миллий жамоасининг 14 октябрь кунги Швецияга қарши ўйинини ўтказиб юборади.</p>
        $this->model->image = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->position = 'right';
        $this->model->news_type_id = 3;
        $this->save();


    }

}