<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserCompany;

class UserCompanyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserCompany();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'REDTAG';
        $this->model->title = 'одежды';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very po';
        $this->model->text_short = 'RT';
        $this->model->phone = '+9978899454';
        $this->model->website = 'redtag-stores.com';
        $this->model->email = 'info@redtag-stores.com';
        $this->model->photo = [
            'redtag.png',
        ];
        $this->model->type = ' ';
        $this->model->rating = 4.3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = 'Kapital Bank';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Flu';
        $this->model->title = 'simple personality';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very po';
        $this->model->text_short = 'wear';
        $this->model->phone = '+9978899454';
        $this->model->website = 'www.terrapro.uz';
        $this->model->email = 'info@terrapro.uz';
        $this->model->photo = [
            'terra.jpeg',
        ];
        $this->model->type = '';
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = 'Aloqa Bank';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 6;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'Termiz Corporation';
        $this->model->title = 'Termiz Corporation UZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Term.uz';
        $this->model->phone = '+998971 777 07 71';
        $this->model->website = 'Termiz.uz';
        $this->model->email = 'Termiz@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '336 635 12';
        $this->model->okonx = '';
        $this->model->bank = 'Kapital bank';
        $this->model->bank_address = 'Turkiston.uz';
        $this->model->bank_account = '2024 2412 0102 2356 ';
        $this->model->mfo = 'Beruniy21';
        $this->model->patent = '7856 9548 62';
        $this->model->index = 100203;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'Itcompany';
        $this->model->title = 'Developer';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p><p>&nbsp;</p><p>&nbsp;</p>';
        $this->model->text_short = 'Impossible is possible';
        $this->model->phone = '+998971 777 07 71';
        $this->model->website = 'ITtash.uz';
        $this->model->email = 'ITcompany@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '777 545 26';
        $this->model->okonx = '';
        $this->model->bank = 'Agrobank';
        $this->model->bank_address = 'Agrabank.uz';
        $this->model->bank_account = '1202 2356 4589 7563';
        $this->model->mfo = 'Beruniy21';
        $this->model->patent = '2235 6654 48';
        $this->model->index = 100002;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'Навоий.Hard';
        $this->model->title = 'Навоий.Hardware';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Подсознание читателя сегодня крайне лениво: увидев большой и однообразный текст, оно подает читателю сигналы &ldquo;это скучно&rdquo;, &ldquo;это долго&rdquo;, &ldquo;уходим&rdquo;. И человек уходит.&nbsp;</p>';
        $this->model->text_short = 'Навоий.Hardware.uz';
        $this->model->phone = '+998902546580';
        $this->model->website = 'www.navoiy.hard.uz';
        $this->model->email = 'navoiy@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka';
        $this->model->bank_address = 'Asakabank.uz';
        $this->model->bank_account = '8600544862869245';
        $this->model->mfo = '';
        $this->model->patent = '1165405804';
        $this->model->index = 101605;
        $this->model->global = null;
        $this->model->place_adress_id = 30;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Samarqand Darvozal';
        $this->model->title = 'ТРЦ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very po';
        $this->model->text_short = 'ТРЦ ';
        $this->model->phone = '+9989745457788';
        $this->model->website = 'compassmall.uz';
        $this->model->email = 'info@compassmall.uz';
        $this->model->photo = [
            'compass.png',
        ];
        $this->model->type = 'warehouse';
        $this->model->rating = 4.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = 'Orient Finance Bank';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 6;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'Нукус.Net';
        $this->model->title = 'Нукус.Net.Uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Подсознание читателя сегодня крайне лениво: увидев большой и однообразный текст, оно подает читателю сигналы &ldquo;это скучно&rdquo;, &ldquo;это долго&rdquo;, &ldquo;уходим&rdquo;. И человек уходит.&nbsp;</p>';
        $this->model->text_short = 'Нукус.Net';
        $this->model->phone = '+998905024737';
        $this->model->website = 'Нукус.uz';
        $this->model->email = 'namangan12@gmail.com';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '54634425';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka';
        $this->model->bank_address = 'Asakabank.uz';
        $this->model->bank_account = '1020123654576321';
        $this->model->mfo = 'Gallaorol';
        $this->model->patent = '1165125463';
        $this->model->index = 103245;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = 'Наманган.soft';
        $this->model->title = 'Наманган.soft.ru';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Подсознание читателя сегодня крайне лениво: увидев большой и однообразный текст, оно подает читателю сигналы &ldquo;это скучно&rdquo;, &ldquo;это долго&rdquo;, &ldquo;уходим&rdquo;. И человек уходит.&nbsp;</p>';
        $this->model->text_short = 'Наманган.software';
        $this->model->phone = '+998901254637';
        $this->model->website = 'Наманган.soft.ru';
        $this->model->email = 'namangan12@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '54634980';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq Bank';
        $this->model->bank_address = 'xalqbank.uz';
        $this->model->bank_account = '1020123654521365';
        $this->model->mfo = 'Yassaviy';
        $this->model->patent = '1154629812';
        $this->model->index = 103504;
        $this->model->global = null;
        $this->model->place_adress_id = 16;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'SPS Company';
        $this->model->title = 'SPS';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'SPS';
        $this->model->phone = '+998971 170 00 70';
        $this->model->website = 'SPS.uz.go';
        $this->model->email = 'SPS@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '336 635 12';
        $this->model->okonx = '';
        $this->model->bank = 'Turkiston bank';
        $this->model->bank_address = 'Turkiston.uz';
        $this->model->bank_account = '5000 2563 4562 7895';
        $this->model->mfo = 'Yunusobod';
        $this->model->patent = '4747 7878 88';
        $this->model->index = 100203;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Ecobozor';
        $this->model->title = 'Ecobozor — это сеть рынков нового формата, модернизированные базары, по уровню комфорта не уступающие торговым центрам. Сеть была создана для того, чтобы жители Узбекистана могли покупать только свежие и натуральные фермерские продукты по доступным ценам.';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '<ul>	<li>контроль качества свежести продуктов: как и на традиционном базаре, покупателей ждут только свежие продукты, имеющие гигиенические сертификаты.</li>	<li>широкий ассортимент: выбирая среди десятков продавцов, потребитель всегда найдет именно то, что искал.</li>	<li>возможность торга: неотъемлемая часть культуры покупок нашего населения.</li>	<li>комфортные условия: просторный торговый зал, площадью до 10 000 кв. м, кондиционирование, отопление, аккуратные и чистые витрины, приятная атмосфера, наличие продуктовых тележек.</li>	<li>концентрация всех типов продуктов: овощи, фрукты, мясо, хлебобулочные изделия, напитки и все, что нужно, чтобы удовлетворить гастрономические потребности в одном месте.</li>	<li>бесплатная авто и вело стоянка</li></ul>';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = [
            'makro.jpg',
        ];
        $this->model->type = '';
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = 'asdasd123123';
        $this->model->okonx = 'asdasd';
        $this->model->bank = 'xalq banki';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '5785455';
        $this->model->patent = '1222000';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 6;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'Artel';
        $this->model->title = 'logistics zet';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'zo\'r';
        $this->model->phone = '904455555';
        $this->model->website = 'marketplace';
        $this->model->email = 'maxmud55@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '457235156';
        $this->model->okonx = '';
        $this->model->bank = 'Aloqa bank';
        $this->model->bank_address = 'Toshkent sh.';
        $this->model->bank_account = '8600111214152021';
        $this->model->mfo = 'Xolmatov Shkurullo G\'aybulla og\'li';
        $this->model->patent = '8500222356';
        $this->model->index = 1002001;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'Samarqand-Nusratillo.Go';
        $this->model->title = 'SAMNURGO';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>&nbsp;</p><p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'SAMNURGO';
        $this->model->phone = '+99871 170 50 20';
        $this->model->website = 'Samarqand.uz';
        $this->model->email = 'Samarkand@mail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '777 545 26';
        $this->model->okonx = '';
        $this->model->bank = 'Turkiston bank';
        $this->model->bank_address = 'Agrabank.uz';
        $this->model->bank_account = '2024 2412 0102 2356 ';
        $this->model->mfo = 'SAMNURGO';
        $this->model->patent = '7856 9548 62';
        $this->model->index = 140100;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'Avtocompany';
        $this->model->title = 'Speed';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Carspeed';
        $this->model->phone = '+99870 707 67 67';
        $this->model->website = 'Avtocompany.uz';
        $this->model->email = 'Avtocompany@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '777 248 26';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka bank';
        $this->model->bank_address = 'Asaka.uz';
        $this->model->bank_account = '2000 3654 0000 1577';
        $this->model->mfo = 'Andijon';
        $this->model->patent = '5408 8005 23';
        $this->model->index = 100222;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'sadasd';
        $this->model->title = 'Company';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '+998998855885';
        $this->model->website = 'mplace.zetsoft.uz';
        $this->model->email = 'ZetSoft123@gmail.com';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '123455';
        $this->model->okonx = '55876';
        $this->model->bank = 'Asaka';
        $this->model->bank_address = 'Yunusobod';
        $this->model->bank_account = '12345654123';
        $this->model->mfo = 'BLikkJi';
        $this->model->patent = '9856347';
        $this->model->index = 175634;
        $this->model->global = null;
        $this->model->place_adress_id = 51;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'Software';
        $this->model->title = 'Softwell';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p><p>&nbsp;</p>';
        $this->model->text_short = 'Go and go';
        $this->model->phone = '+99875 200 20 25';
        $this->model->website = 'Software.go';
        $this->model->email = 'Software@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '889 745 69';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '2000 3654 7894 1587';
        $this->model->mfo = 'Suxayil29';
        $this->model->patent = '5478 8965 23';
        $this->model->index = 1002002;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'Booknomy';
        $this->model->title = 'Z777Z';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Описание — композиционная форма';
        $this->model->phone = '+998995100203';
        $this->model->website = 'Booknomy.uz';
        $this->model->email = 'Booknomy@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '47689408';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka';
        $this->model->bank_address = 'Asaka.uz.go';
        $this->model->bank_account = '4002 2563 3665 47489';
        $this->model->mfo = 'Too Arnur Kredit';
        $this->model->patent = '4001 2563 48';
        $this->model->index = 1002001;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'Rovot Company';
        $this->model->title = 'Rovot CS';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'RCS';
        $this->model->phone = '+99871 700 00 01';
        $this->model->website = 'Rovot.uz';
        $this->model->email = 'Rovot@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '222 021 22';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq bank';
        $this->model->bank_address = 'Xalqbank.uz';
        $this->model->bank_account = '3000 0321 2100 4422';
        $this->model->mfo = 'RovotZiyokor';
        $this->model->patent = '5555 4454 32';
        $this->model->index = 100201;
        $this->model->global = null;
        $this->model->place_adress_id = 41;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = 'ТашОбласть.Gold';
        $this->model->title = 'ТашОбласть.Gold.Uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Не как обычно &ldquo;вот мы какие хорошие, а а теперь идите на другие страницы сайта&rdquo;, а &ldquo;вот мы какие хорошие, кстати, вот и товар здесь же&rdquo;.</p>';
        $this->model->text_short = 'ТашОбласть.Gold.Uz';
        $this->model->phone = '+997712564984';
        $this->model->website = 'ТашОбласть.Uz';
        $this->model->email = 'Tashoblast@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '58467548';
        $this->model->okonx = '';
        $this->model->bank = 'Turon Bank';
        $this->model->bank_address = 'Turonbank.uz';
        $this->model->bank_account = '2541203654521365';
        $this->model->mfo = 'Yassaviy12';
        $this->model->patent = '6547136520';
        $this->model->index = 651354;
        $this->model->global = null;
        $this->model->place_adress_id = 30;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'Rovot Corporation SN';
        $this->model->title = 'Rovot CS';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'RCS';
        $this->model->phone = '+99871 700 00 01';
        $this->model->website = 'Rovot.uz';
        $this->model->email = 'Rovot@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '222 021 22';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq bank';
        $this->model->bank_address = 'Xalqbank.uz';
        $this->model->bank_account = '3000 0321 2100 4422';
        $this->model->mfo = 'RovotZiyokor';
        $this->model->patent = '5555 4454 32';
        $this->model->index = 100201;
        $this->model->global = null;
        $this->model->place_adress_id = 41;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = 'SoCorporationUzb';
        $this->model->title = 'S.CR.UZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'S.CR.UZ';
        $this->model->phone = '+99871 170 50 20';
        $this->model->website = 'S.Corporation.UZ';
        $this->model->email = 'Scorporatin@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '555 523 25';
        $this->model->okonx = '';
        $this->model->bank = 'Asia Aliance bank';
        $this->model->bank_address = 'Asiaalincebank.uz';
        $this->model->bank_account = '9090 9669 6333 2451';
        $this->model->mfo = 'Mirobod11';
        $this->model->patent = '7856 9548 62';
        $this->model->index = 100203;
        $this->model->global = null;
        $this->model->place_adress_id = 56;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = 'ACT Smarkand';
        $this->model->title = 'ACTS';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Be Active Be Creative';
        $this->model->phone = '+99866 455 21 02';
        $this->model->website = 'Samarkand.uz';
        $this->model->email = 'Samarkand@mail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '365 558 47';
        $this->model->okonx = '';
        $this->model->bank = 'Kapital bank';
        $this->model->bank_address = 'Kapital.uz';
        $this->model->bank_account = '9596 6000 5225 3265';
        $this->model->mfo = 'SamarqandSochak';
        $this->model->patent = '2225 3215 41';
        $this->model->index = 140100;
        $this->model->global = null;
        $this->model->place_adress_id = 43;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = 'NukusCompany';
        $this->model->title = 'ANUC';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'ANuzCompany';
        $this->model->phone = '+99870 007 21 25';
        $this->model->website = 'Nukus.uz';
        $this->model->email = 'Andijan@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '747 858 78';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka bank';
        $this->model->bank_address = 'Nukus.uz';
        $this->model->bank_account = '2024 2412 0102 2356 ';
        $this->model->mfo = 'Nukus';
        $this->model->patent = '1230 4251 24';
        $this->model->index = 140100;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'QarshiTAC';
        $this->model->title = 'QTAC';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'QTAK';
        $this->model->phone = '+998971 777 07 71';
        $this->model->website = 'Qarshi.uz';
        $this->model->email = 'Qarshi@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '3561 2547';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq bank';
        $this->model->bank_address = 'Qarshi.Xalq.bak';
        $this->model->bank_account = '1002 2030 1526 2459';
        $this->model->mfo = 'Qarshi12';
        $this->model->patent = '2563 2254 44';
        $this->model->index = 180100;
        $this->model->global = null;
        $this->model->place_adress_id = 21;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'QoqondCompany';
        $this->model->title = 'QC';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'QC.ZU';
        $this->model->phone = '+99890 150 30 02';
        $this->model->website = 'Qoqond.22';
        $this->model->email = 'Qoqond@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '887 99 69';
        $this->model->okonx = '';
        $this->model->bank = 'Mini bank Qoqnd';
        $this->model->bank_address = 'Qoqond.uz';
        $this->model->bank_account = '2001 0220 3020 1551';
        $this->model->mfo = 'Qoqond22';
        $this->model->patent = '2526 3333 21';
        $this->model->index = 100150;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'SAMSD';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'SAMSD.uz';
        $this->model->phone = '+99891 125 24 52';
        $this->model->website = 'Samarqand.uz';
        $this->model->email = 'Samarqand@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '636 656 89';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy Bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '3003 3003 2564 7895';
        $this->model->mfo = 'SAMSAR';
        $this->model->patent = '2654349925';
        $this->model->index = 100160;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'Ташкент.LLC';
        $this->model->title = 'ТашкентLLC.uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Не как обычно &ldquo;вот мы какие хорошие, а а теперь идите на другие страницы сайта&rdquo;, а &ldquo;вот мы какие хорошие, кстати, вот и товар здесь же&rdquo;.</p>';
        $this->model->text_short = 'ТашкентLLC';
        $this->model->phone = '+998712451365';
        $this->model->website = 'Ташкент.uz';
        $this->model->email = 'Tashkent@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '54523645';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy Bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '2456313654521365';
        $this->model->mfo = 'Boshliq12';
        $this->model->patent = '1165245136';
        $this->model->index = 102354;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'SAMARQAND aliexpres';
        $this->model->title = 'SAMARQAND aliexpres';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Описание ';
        $this->model->phone = '+998900990099';
        $this->model->website = 'samali.iso';
        $this->model->email = 'samali@mail.ru';
        $this->model->photo = "";
        $this->model->type = 'main';
        $this->model->rating = 0.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '<p>aaaaaaaaaa</p>';
        $this->model->inn = '9999 000099990000';
        $this->model->okonx = 'hihjhslc';
        $this->model->bank = 'xzjczjxc';
        $this->model->bank_address = 'amsjcjaksc';
        $this->model->bank_account = 'sdcacazxccjmksxklc';
        $this->model->mfo = 'dc';
        $this->model->patent = 'kdcascs';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'Samarqand SardorDok';
        $this->model->title = 'SAMSD';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'SAMSD.uz';
        $this->model->phone = '+99891 125 24 52';
        $this->model->website = 'Samarqand.uz';
        $this->model->email = 'Samarqand@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '636 656 89';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy Bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '3003 3003 2564 7895';
        $this->model->mfo = 'SAMSAR';
        $this->model->patent = '2654349925';
        $this->model->index = 100160;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'Urgench Technalogy';
        $this->model->title = 'URGTECH';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>&nbsp;</p><p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'URGTECH';
        $this->model->phone = '+998971 170 00 70';
        $this->model->website = 'Urgench.uz';
        $this->model->email = 'urgench@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '336 635 12';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq bank';
        $this->model->bank_address = 'Asiaalincebank.uz';
        $this->model->bank_account = '5000 2563 4562 7895';
        $this->model->mfo = 'Yunusobod';
        $this->model->patent = '2225 3215 41';
        $this->model->index = 1002002;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'Бухара CAR';
        $this->model->title = 'БУХСAR';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>&nbsp;</p><p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'БУХСAR';
        $this->model->phone = '+998971 777 07 71';
        $this->model->website = 'Бухара.UZ';
        $this->model->email = 'Buxara@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '889 745 69';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq bank';
        $this->model->bank_address = 'Xalqbank.uz';
        $this->model->bank_account = '3000 0321 2100 4422';
        $this->model->mfo = 'Бухара12';
        $this->model->patent = '2235 6654 48';
        $this->model->index = 1002002;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'ДжизахLLC';
        $this->model->title = 'ДЖLLC';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'ДЖLLC';
        $this->model->phone = '+998971 170 00 70';
        $this->model->website = 'Jizax.uz';
        $this->model->email = 'jizax@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '555 523 25';
        $this->model->okonx = '';
        $this->model->bank = 'Asia Aliance bank';
        $this->model->bank_address = 'Asiaalincebank.uz';
        $this->model->bank_account = '1202 2356 4589 7563';
        $this->model->mfo = 'Jizax.uz';
        $this->model->patent = '2235 6654 48';
        $this->model->index = 1002001;
        $this->model->global = null;
        $this->model->place_adress_id = 16;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'Карши.Net';
        $this->model->title = 'Карши.Net.uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Карши.Net.uz';
        $this->model->phone = '+99875 200 20 25';
        $this->model->website = 'Карши.uz';
        $this->model->email = 'Qarshinet@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '889 745 69';
        $this->model->okonx = '';
        $this->model->bank = 'Qarshi Milliy bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '2000 3654 7894 1587';
        $this->model->mfo = 'Qarshi';
        $this->model->patent = '5478 8965 23';
        $this->model->index = 1002002;
        $this->model->global = null;
        $this->model->place_adress_id = 21;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = 'Коканд.Soft';
        $this->model->title = 'Коканд.Software';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>&nbsp;</p><p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Кок.Soft';
        $this->model->phone = '+99871 700 00 01';
        $this->model->website = 'Коканд.uz';
        $this->model->email = 'Qoqand@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '222 021 22';
        $this->model->okonx = '';
        $this->model->bank = 'Agrobank';
        $this->model->bank_address = 'Agrabank.uz';
        $this->model->bank_account = '5000 2563 4562 7895';
        $this->model->mfo = 'Yunusobod';
        $this->model->patent = '5478 8965 23';
        $this->model->index = 100201;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'ТашОблСирож.Compxx';
        $this->model->title = 'ТашОблСирож.Company';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Особенность в том</strong>, что здесь без графики не было бы ничего: она у нас не &ldquo;дополнительный элемент&rdquo;, а главный игрок.&nbsp; &nbsp;</p>';
        $this->model->text_short = 'ТашОблСирож.Comp.Uz';
        $this->model->phone = '+998712546584';
        $this->model->website = 'ТашОблСирож.Uz';
        $this->model->email = 'Taj@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '55416645';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy Bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '20150024121365';
        $this->model->mfo = 'AbdullaQodiriy14';
        $this->model->patent = '1251459812';
        $this->model->index = 201505;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'Термез SoftwareCompany.';
        $this->model->title = 'Термез SoftwareCompany.Uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Термез Sof.Com.Uz';
        $this->model->phone = '+99875 200 20 25';
        $this->model->website = 'Термез SoftwareCompany.Uz';
        $this->model->email = 'Termiz@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '555 523 25';
        $this->model->okonx = '';
        $this->model->bank = 'Asia Aliance bank';
        $this->model->bank_address = 'Asiaalincebank.uz';
        $this->model->bank_account = '2000 3654 7894 1587';
        $this->model->mfo = 'Mirobod11';
        $this->model->patent = '2225 3215 41';
        $this->model->index = 100201;
        $this->model->global = null;
        $this->model->place_adress_id = 16;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'Тухтахунов Бахтиер Company';
        $this->model->title = 'Тухтахунов Бахтиер Company.Uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'ТухБахт Company';
        $this->model->phone = '+99871 700 00 01';
        $this->model->website = 'Тухтахунов Бахтиер Company.uz';
        $this->model->email = 'baxtiyor@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '889 745 69';
        $this->model->okonx = '';
        $this->model->bank = 'Kapital bank';
        $this->model->bank_address = 'Kapital.uz';
        $this->model->bank_account = '3000 0321 2100 4422';
        $this->model->mfo = 'Suxayil29';
        $this->model->patent = '4747 7878 88';
        $this->model->index = 100002;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'УргенчITCompany';
        $this->model->title = 'УргенчITCompany.UZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'УргенчITCom';
        $this->model->phone = '+998971 777 07 71';
        $this->model->website = 'Urgench.uz';
        $this->model->email = 'urgench@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '555 523 25';
        $this->model->okonx = '';
        $this->model->bank = 'Agrobank';
        $this->model->bank_address = 'Agrabank.uz';
        $this->model->bank_account = '1202 2356 4589 7563';
        $this->model->mfo = 'Urgench';
        $this->model->patent = '2225 3215 41';
        $this->model->index = 140100;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'ФерганаITCompany';
        $this->model->title = 'ФерганаITCompany.UZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'ФерганаITCom';
        $this->model->phone = '+998971 777 07 71';
        $this->model->website = 'Fergana.uz';
        $this->model->email = 'fergana@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '336 635 12';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq bank';
        $this->model->bank_address = 'Xalqbank.uz';
        $this->model->bank_account = '5000 2563 4562 7895';
        $this->model->mfo = 'Yunusobod';
        $this->model->patent = '2225 3215 41';
        $this->model->index = 140100;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'Почта.Com';
        $this->model->title = 'Почта.Com.UZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Особенность в том</strong>, что здесь без графики не было бы ничего: она у нас не &ldquo;дополнительный элемент&rdquo;, а главный игрок. Здесь графика uber alles.&nbsp;</p>';
        $this->model->text_short = 'Почта.uz';
        $this->model->phone = '+998712456315';
        $this->model->website = 'Почта.uz';
        $this->model->email = 'pochta_1@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '12546324';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka';
        $this->model->bank_address = 'Asakabank.uz';
        $this->model->bank_account = '2541365879100200';
        $this->model->mfo = 'Mirobod36';
        $this->model->patent = '2547136520';
        $this->model->index = 102589;
        $this->model->global = null;
        $this->model->place_adress_id = 16;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'Шералиев Шукур корхонаси';
        $this->model->title = 'Шералиев Шукур корхонаси.UZ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Описание</strong>&nbsp;&mdash; композиционная форма, которую используют в литературоведении и лингвистике для подробной характеристики предметов или явлений в целях создания художественного образа. Эту композиционную форму разделяют на&nbsp;<strong>описание</strong>&nbsp;предметов,&nbsp;<strong>описание</strong>&nbsp;процессов,&nbsp;<strong>описание</strong>&nbsp;пережитого или&nbsp;<strong>описание</strong>&nbsp;жизни и характеристик человека.</p>';
        $this->model->text_short = 'Шералиев Шукур корхонаси';
        $this->model->phone = '+99875 200 20 25';
        $this->model->website = 'Шералиев Шукур корхонаси';
        $this->model->email = 'sheraliyev@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '336 635 12';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '2000 3654 7894 1587';
        $this->model->mfo = 'Шералиев Шукур корхонаси';
        $this->model->patent = '2225 3215 41';
        $this->model->index = 100201;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'Рахматулла.Company';
        $this->model->title = 'Рахматулла.Company.net';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Не как обычно &ldquo;вот мы какие хорошие, а а теперь идите на другие страницы сайта&rdquo;, а &ldquo;вот мы какие хорошие, кстати, вот и товар здесь же&rdquo;.</p>';
        $this->model->text_short = 'РахматуллаComp';
        $this->model->phone = '+998712315468';
        $this->model->website = 'Рахматулла.net';
        $this->model->email = 'raxmatulla@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '54523645';
        $this->model->okonx = '';
        $this->model->bank = 'Milliy Bank';
        $this->model->bank_address = 'Milliybank.uz';
        $this->model->bank_account = '2456314782101365';
        $this->model->mfo = 'Boshliq12';
        $this->model->patent = '5001425687';
        $this->model->index = 200150;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'Самарканд.Blog';
        $this->model->title = 'Самарканд.Blog.Uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Не как обычно &ldquo;вот мы какие хорошие, а а теперь идите на другие страницы сайта&rdquo;, а &ldquo;вот мы какие хорошие, кстати, вот и товар здесь же&rdquo;.</p>';
        $this->model->text_short = 'Самарканд.Blog.Uz';
        $this->model->phone = '+998662354687';
        $this->model->website = 'samarkand.uz';
        $this->model->email = 'samarkand123@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '54523645';
        $this->model->okonx = '';
        $this->model->bank = 'Xalq Bank';
        $this->model->bank_address = 'xalqbank.uz';
        $this->model->bank_account = '2456658741251365';
        $this->model->mfo = 'Саттепо';
        $this->model->patent = '5645451336';
        $this->model->index = 215050;
        $this->model->global = null;
        $this->model->place_adress_id = 21;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'ТашОблБунед.Comp';
        $this->model->title = 'ТашОблБунед.Company.uz';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Не как обычно &ldquo;вот мы какие хорошие, а а теперь идите на другие страницы сайта&rdquo;, а &ldquo;вот мы какие хорошие, кстати, вот и товар здесь же&rdquo;.</p>';
        $this->model->text_short = 'ТашОблБунед.Company';
        $this->model->phone = '+998712548495';
        $this->model->website = 'ТашОблБунед.uz';
        $this->model->email = 'Tashoblbunyod@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 2.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '<p>Не как обычно &ldquo;вот мы какие хорошие, а а теперь идите на другие страницы сайта&rdquo;, а &ldquo;вот мы какие хорошие, кстати, вот и товар здесь же&rdquo;.</p>';
        $this->model->inn = '65846215';
        $this->model->okonx = '';
        $this->model->bank = 'Asaka';
        $this->model->bank_address = 'Asakabank.uz';
        $this->model->bank_account = '3215623654521365';
        $this->model->mfo = 'Bunyod23';
        $this->model->patent = '1025245136';
        $this->model->index = 202589;
        $this->model->global = null;
        $this->model->place_adress_id = 24;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = 'ТашОблОйбек.Golddsdadads';
        $this->model->title = 'ТашОблОйбек.Gold.Nsdadet';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p><strong>Особенность в том</strong>, что здесь без графики не было бы ничего: она у нас не &ldquo;дополнительный элемент&rdquo;, а главный игрок. Здесь графика uber alles.&nbsp;&nbsp;</p>';
        $this->model->text_short = 'ТашОблОйбек.Gold';
        $this->model->phone = '+998902584615';
        $this->model->website = 'Tashobloybek.net';
        $this->model->email = 'Tashobloybek@gmail.com';
        $this->model->photo = "";
        $this->model->type = 'logistic';
        $this->model->rating = 3;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '25474123';
        $this->model->okonx = '';
        $this->model->bank = 'Turon Bank';
        $this->model->bank_address = 'Turonbank.uz';
        $this->model->bank_account = '5412313654521365';
        $this->model->mfo = 'Oybek11';
        $this->model->patent = '2151629812';
        $this->model->index = 201554;
        $this->model->global = null;
        $this->model->place_adress_id = 12;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'Ravshan Corporatiopn';
        $this->model->title = '444';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very po';
        $this->model->text_short = 'fccfcf';
        $this->model->phone = 'asddsadsa';
        $this->model->website = 'saddsasdadsa';
        $this->model->email = 'sadsdasdasd@asd.com';
        $this->model->photo = [
            'Screenshot_1.png',
        ];
        $this->model->type = 'market';
        $this->model->rating = 4;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = 'sadsda';
        $this->model->okonx = 'sdasdasda';
        $this->model->bank = 'sdasdasdasda';
        $this->model->bank_address = 'assdsad';
        $this->model->bank_account = 'sadsad';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 60;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Макро доставка';
        $this->model->title = 'online-market';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very po';
        $this->model->text_short = 'Makro Доставка';
        $this->model->phone = '+998946320624';
        $this->model->website = 'seller.com';
        $this->model->email = 'seller@seller.com';
        $this->model->photo = [
            'makro.png',
        ];
        $this->model->type = 'market';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '123';
        $this->model->okonx = '123';
        $this->model->bank = 'Infin Bank';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '123';
        $this->model->patent = '123';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 33;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'Korzinka.uz';
        $this->model->title = 'супермаркет';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Без преувеличения можно сказать, что сеть korzinka.uz является народной маркой. Наши магазины ежедневно посещают десятки тысяч покупателей, и мы постоянно работаем над привлечением новых клиентов. Доверие потребителей основывается на постоянной работе по улучшению качества обслуживания, выгодной ценовой политике, уникальной программе лояльности. Также наши супермаркеты привлекательны большим ассортиментом продуктов питания и непродовольственных товаров. В магазинах ежедневно проходят акции, скидки и дегустации.';
        $this->model->text_short = 'Компания Anglesey Food была основана в 1996 году и стала одним из первопроходцев на рынке розничной торговли формата «супермаркет» в Республике Узбекистан';
        $this->model->phone = '+998946320624';
        $this->model->website = 'korzinka.uz';
        $this->model->email = 'info@korzinka.uz';
        $this->model->photo = [
            'kor.png',
        ];
        $this->model->type = 'market';
        $this->model->rating = 4.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '213211232112231212132112321223';
        $this->model->okonx = '123123123';
        $this->model->bank = '123123123';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '1231231';
        $this->model->patent = '123123';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 33;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'Samarqand Darvoza';
        $this->model->title = 'ТОРГОВО-РАЗВЛЕКАТЕЛЬНЫЙ ЦЕНТР';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = '<p>Помимо оригинального экстерьера, отличительной чертой нашего</p>,<p>ТРЦ является уникальная для рынка Узбекистана концепция: среди арендаторов</p>,<p>Samarqand Darvoza представлены только монобрендовые магазины всемирно известных брендов.</p>,<p><img alt=\\\\\\\\\\\\\\\\\"\\\\\\\\\\\\\\\\\" src=\\\\\\\\\\\\\\\\\"https://picsum.photos/1200/600\\\\\\\\\\\\\\\\\" /></p>,<p>В ТРЦ Samarqand Darvoza работает крупный супермаркет сети Makro, единственная сеть магазинов с товарами для дома HomeMarket.</p>,<p>Большое разнообразие брендов и ассортимента: представлены ведущие узбекские и европейские бренды мужской, женской и детской одежды, аксессуаров, кожгалантереи, обуви, парфюмерии и косметики.</p>,<p>А также салон красоты и нэйл-бар.</p>,<p><img alt=\\\\\\\\\\\\\\\\\"\\\\\\\\\\\\\\\\\" src=\\\\\\\\\\\\\\\\\"https://picsum.photos/1200/500\\\\\\\\\\\\\\\\\" /></p>,<p>Представлены Европейские франшизовые магазины, такие как Colin&rsquo;s, U.S. Polo, Koton, Jennyfer, Cacharel, Morgan, Celio*, Bata и др.</p>,<p>Множество развлечений: кинотеатр, игровые автоматы, театр марионеток.</p>,<p>Здесь можно провести весь день с семьей, и никто не будет скучать: авторы продумали все, чтобы шопинг с семьей или вместе с друзьями превратился в приятное, даже веселое развлечение.</p>,<p><img alt=\\\\\\\\\\\\\\\\\"\\\\\\\\\\\\\\\\\" src=\\\\\\\\\\\\\\\\\"https://picsum.photos/1200/700\\\\\\\\\\\\\\\\\" /></p>,<p>Самый большой в республике фудкорт &mdash; на 565 посадочных мест. На котором представлен широкий ассортимент блюд и напитков. От европейской и домашней кухни, до паназиатской и китайской.</p>,';
        $this->model->text_short = 'ТОРГОВО-РАЗВЛЕКАТЕЛЬНЫЙ ЦЕНТР';
        $this->model->phone = '+9978899454';
        $this->model->website = 'sdmall.uz';
        $this->model->email = 'info@sdmall.uz';
        $this->model->photo = [
            'samdar.jpg',
        ];
        $this->model->type = 'market';
        $this->model->rating = 4.2;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = 'Buyuk Ipak Yuli Bank';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 33;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Nike';
        $this->model->title = 'торговый центр';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"de Finibus Bonorum et Malorum\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very po';
        $this->model->text_short = 'just do it';
        $this->model->phone = '(+99890) 0010080';
        $this->model->website = 'just.ru';
        $this->model->email = 'info@just.ru';
        $this->model->photo = [
            'nike.jpg',
        ];
        $this->model->type = '';
        $this->model->rating = 3.5;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $this->model->inn = '';
        $this->model->okonx = 'qwewqe';
        $this->model->bank = 'Sanoat Qurilish Bank';
        $this->model->bank_address = 'address123';
        $this->model->bank_account = 'bank 123';
        $this->model->mfo = 'ewqeqweqwe';
        $this->model->patent = 'ewqewqe';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = 6;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'The Dubai Mall';
        $this->model->title = 'Located throughout The Dubai Mall you will find eight guest service desks where our team will be delighted to assist you with any of your queries or questions.';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '<p>Located throughout The Dubai Mall you will find eight guest service desks where our team will be delighted to assist you with any of your queries or questions.</p>';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '<p>Located throughout The Dubai Mall you will find eight guest service desks where our team will be delighted to assist you with any of your queries or questions.fddsfsadf</p>,';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


        $this->model = new UserCompany();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = null;
        $this->model->text = '';
        $this->model->text_short = '';
        $this->model->phone = '';
        $this->model->website = '';
        $this->model->email = '';
        $this->model->photo = "";
        $this->model->type = '';
        $this->model->rating = null;
        $this->model->parent_id = null;
        $this->model->auth_key = '';
        $this->model->policy = '';
        $this->model->inn = '';
        $this->model->okonx = '';
        $this->model->bank = '';
        $this->model->bank_address = '';
        $this->model->bank_account = '';
        $this->model->mfo = '';
        $this->model->patent = '';
        $this->model->index = 0;
        $this->model->global = null;
        $this->model->place_adress_id = null;
        $this->model->postback_callcenter = "";
        $this->model->postback_logistics = "";
        $this->model->postback_accept = "";
        $this->save();


    }

}
