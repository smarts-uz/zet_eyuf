<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\govs\GovsEducation;

class GovsEducationInsert extends ZInsert
{

    public function run()
    {

        $this->model = new GovsEducation();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Послевузовское образование ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_knowledge_id = null;
        $this->save();


        $this->model = new GovsEducation();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Общее среднее образование';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_knowledge_id = null;
        $this->save();


        $this->model = new GovsEducation();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Дошкольное образование';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_knowledge_id = null;
        $this->save();


        $this->model = new GovsEducation();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Высшее образование ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_knowledge_id = null;
        $this->save();


        $this->model = new GovsEducation();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Среднее специальное, профессиональное образование ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->core_knowledge_id = null;
        $this->save();


    }

}
