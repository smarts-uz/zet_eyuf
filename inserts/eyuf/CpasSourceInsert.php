<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasSource;

class CpasSourceInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasSource();

        $this->model->id = 1;
        $this->model->name = 'Веб-сайты';
        $this->model->created_at = '2020-09-07 10:42:36';
        $this->model->modified_at = '2020-09-07 10:42:36';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 2;
        $this->model->name = 'Дорвеи';
        $this->model->created_at = '2020-09-07 11:04:22';
        $this->model->modified_at = '2020-09-07 11:04:22';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 3;
        $this->model->name = 'Контекстная реклама';
        $this->model->created_at = '2020-09-07 11:04:33';
        $this->model->modified_at = '2020-09-07 11:04:33';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 4;
        $this->model->name = 'Контекстная реклама на бренд';
        $this->model->created_at = '2020-09-07 11:04:44';
        $this->model->modified_at = '2020-09-07 11:04:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 5;
        $this->model->name = 'Тизерная реклама';
        $this->model->created_at = '2020-09-07 11:04:56';
        $this->model->modified_at = '2020-09-07 11:04:56';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 6;
        $this->model->name = 'Таргетированная реклама';
        $this->model->created_at = '2020-09-07 11:10:54';
        $this->model->modified_at = '2020-09-07 11:10:54';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 7;
        $this->model->name = 'Социальные сети';
        $this->model->created_at = '2020-09-07 11:11:03';
        $this->model->modified_at = '2020-09-07 11:11:03';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 8;
        $this->model->name = 'Email-рассылка';
        $this->model->created_at = '2020-09-07 11:11:13';
        $this->model->modified_at = '2020-09-07 11:11:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 9;
        $this->model->name = 'CashBack';
        $this->model->created_at = '2020-09-07 11:11:22';
        $this->model->modified_at = '2020-09-07 11:11:22';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 10;
        $this->model->name = 'Clickunder / Popunder';
        $this->model->created_at = '2020-09-07 11:11:31';
        $this->model->modified_at = '2020-09-07 11:11:31';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 11;
        $this->model->name = 'Брокеры';
        $this->model->created_at = '2020-09-07 11:11:41';
        $this->model->modified_at = '2020-09-07 11:11:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 12;
        $this->model->name = 'Incentive';
        $this->model->created_at = '2020-09-07 11:39:24';
        $this->model->modified_at = '2020-09-07 11:39:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 13;
        $this->model->name = 'Веб-трафик';
        $this->model->created_at = '2020-09-07 11:45:13';
        $this->model->modified_at = '2020-09-07 11:45:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 14;
        $this->model->name = 'Мобильный трафик';
        $this->model->created_at = '2020-09-07 11:45:28';
        $this->model->modified_at = '2020-09-07 11:45:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 15;
        $this->model->name = 'PopUp-реклама';
        $this->model->created_at = '2020-09-07 11:46:06';
        $this->model->modified_at = '2020-09-07 11:46:06';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 16;
        $this->model->name = 'myTarget';
        $this->model->created_at = '2020-09-07 11:46:35';
        $this->model->modified_at = '2020-09-07 11:46:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 20;
        $this->model->name = 'Ретаргетинг';
        $this->model->created_at = '2020-09-07 11:47:34';
        $this->model->modified_at = '2020-09-07 11:47:34';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 21;
        $this->model->name = 'Мотивированный трафик';
        $this->model->created_at = '2020-09-07 11:47:44';
        $this->model->modified_at = '2020-09-07 11:47:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 22;
        $this->model->name = 'Push-уведомления';
        $this->model->created_at = '2020-09-07 11:48:14';
        $this->model->modified_at = '2020-09-07 11:48:14';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 23;
        $this->model->name = 'YouTube';
        $this->model->created_at = '2020-09-07 11:48:46';
        $this->model->modified_at = '2020-09-07 11:48:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
