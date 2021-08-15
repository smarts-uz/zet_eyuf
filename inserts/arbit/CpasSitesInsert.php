<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasLand;

class CpasSitesInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasLand();

        $this->model->id = 99;
        $this->model->name = 'американское Самоа_new';
        $this->model->title = 'new';
        $this->model->cr = 0;
        $this->model->status = 'new';
        $this->model->path = [
            'lend3.zip',
        ];
        $this->model->type = 'landing';
        $this->model->cpas_offer_item_id = '29';
        $this->model->created_at = '2020-08-27 16:53:10';
        $this->model->modified_at = '2020-08-27 16:53:10';
        $this->model->created_by = 297;
        $this->model->modified_by = 297;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 100;
        $this->model->name = 'американское Самоа_new site';
        $this->model->title = 'new site';
        $this->model->cr = 0;
        $this->model->status = 'new';
        $this->model->path = [
            'lend3.zip',
        ];
        $this->model->type = 'landing';
        $this->model->cpas_offer_item_id = '29';
        $this->model->created_at = '2020-08-29 12:45:38';
        $this->model->modified_at = '2020-08-29 12:45:38';
        $this->model->created_by = 297;
        $this->model->modified_by = 297;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 101;
        $this->model->name = 'андорра_cddsc';
        $this->model->title = 'cddsc';
        $this->model->cr = 0;
        $this->model->status = 'new';
        $this->model->path = [
            'lend3.zip',
        ];
        $this->model->type = 'landing';
        $this->model->cpas_offer_item_id = '30';
        $this->model->created_at = '2020-08-29 22:35:40';
        $this->model->modified_at = '2020-08-29 22:35:40';
        $this->model->created_by = 297;
        $this->model->modified_by = 297;
        $this->save();


    }

}
