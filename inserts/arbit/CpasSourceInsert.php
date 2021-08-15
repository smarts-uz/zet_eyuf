<?php

namespace zetsoft\inserts\arbit;

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
        $this->model->sort = null;
        $this->model->name = 'Веб-сайты';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Дорвеи';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Контекстная реклама';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Контекстная реклама на бренд';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Тизерная реклама';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Социальные сети';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Таргетированная реклама';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Email-рассылка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'CashBack';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Clickunder / Popunder';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = ' Брокеры';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new CpasSource();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Incentive';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->save();


    }

}
