<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufInvoiceType;

class EyufInvoiceTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufInvoiceType();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Жами харажатлар';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Кунлик харажатлар';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Валюта бирлиги';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Таълим олиш';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Суғурта';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Виза';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Турар жой';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'Бошка харажатлар';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Авиачипта харажатлари';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


        $this->model = new EyufInvoiceType();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'nazvanie9809';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->save();


    }

}
