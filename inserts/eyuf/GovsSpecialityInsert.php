<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\govs\GovsSpeciality;

class GovsSpecialityInsert extends ZInsert
{

    public function run()
    {

        $this->model = new GovsSpeciality();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'tashkent';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_education_id = null;
        $this->save();


        $this->model = new GovsSpeciality();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Педагогика';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_education_id = null;
        $this->save();


        $this->model = new GovsSpeciality();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Компьютерная Инженерия';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_education_id = null;
        $this->save();


        $this->model = new GovsSpeciality();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_education_id = null;
        $this->save();


        $this->model = new GovsSpeciality();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Транспортная логистика';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_education_id = null;
        $this->save();


        $this->model = new GovsSpeciality();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'qwd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_education_id = null;
        $this->save();


    }

}
