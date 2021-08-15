<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufReview;

class EyufReviewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufReview();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = 1;
        $this->model->scholar = 1;
        $this->model->review = 'fsdfsdfsdf';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = 84;
        $this->model->scholar = 87;
        $this->model->review = 'gngngvb';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = 2;
        $this->model->scholar = 2;
        $this->model->review = 'fsdfsdfs';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'asdasf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = 93;
        $this->model->scholar = 86;
        $this->model->review = 'czxczzdsdsd';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = 86;
        $this->model->scholar = 84;
        $this->model->review = '2122';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'asdad_14';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


        $this->model = new EyufReview();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'asdad';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->employer = null;
        $this->model->scholar = null;
        $this->model->review = '';
        $this->save();


    }

}
