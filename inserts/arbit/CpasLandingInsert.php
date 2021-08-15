<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasLand;

class CpasLandingInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasLand();

        $this->model->id = 1;
        $this->model->name = 'Канада_выфвф';
        $this->model->cpas_offer_item_id = 38;
        $this->model->title = 'выфвф';
        $this->model->status = 'new';
        $this->model->path = '';
        $this->model->visit = null;
        $this->model->order = null;
        $this->model->cr = null;
        $this->model->created_at = '2020-09-05 17:41:56';
        $this->model->modified_at = '2020-09-05 17:41:56';
        $this->model->created_by = 302;
        $this->model->modified_by = 302;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 2;
        $this->model->name = 'Канада_qdwdwq';
        $this->model->cpas_offer_item_id = 38;
        $this->model->title = 'qdwdwq';
        $this->model->status = 'new';
        $this->model->path = '';
        $this->model->visit = null;
        $this->model->order = null;
        $this->model->cr = null;
        $this->model->created_at = '2020-09-05 17:53:30';
        $this->model->modified_at = '2020-09-05 17:53:30';
        $this->model->created_by = 341;
        $this->model->modified_by = 341;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 3;
        $this->model->name = 'Бразилия_qdwdwq';
        $this->model->cpas_offer_item_id = 40;
        $this->model->title = 'qdwdwq';
        $this->model->status = 'new';
        $this->model->path = '';
        $this->model->visit = null;
        $this->model->order = null;
        $this->model->cr = null;
        $this->model->created_at = '2020-09-05 17:54:54';
        $this->model->modified_at = '2020-09-05 17:54:54';
        $this->model->created_by = 341;
        $this->model->modified_by = 341;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 4;
        $this->model->name = 'Бразилия_nnnenoinwoineio';
        $this->model->cpas_offer_item_id = 40;
        $this->model->title = 'nnnenoinwoineio';
        $this->model->status = 'new';
        $this->model->path = '';
        $this->model->visit = null;
        $this->model->order = null;
        $this->model->cr = null;
        $this->model->created_at = '2020-09-05 18:03:31';
        $this->model->modified_at = '2020-09-05 18:03:31';
        $this->model->created_by = 341;
        $this->model->modified_by = 341;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 5;
        $this->model->name = 'Бразилия_wdqwqd';
        $this->model->cpas_offer_item_id = 41;
        $this->model->title = 'wdqwqd';
        $this->model->status = 'new';
        $this->model->path = '';
        $this->model->visit = null;
        $this->model->order = null;
        $this->model->cr = null;
        $this->model->created_at = '2020-09-06 11:21:29';
        $this->model->modified_at = '2020-09-06 11:21:29';
        $this->model->created_by = 341;
        $this->model->modified_by = 341;
        $this->save();


        $this->model = new CpasLand();

        $this->model->id = 6;
        $this->model->name = 'Канада_222222';
        $this->model->cpas_offer_item_id = 38;
        $this->model->title = '222222';
        $this->model->status = 'top';
        $this->model->path = '';
        $this->model->visit = null;
        $this->model->order = null;
        $this->model->cr = null;
        $this->model->created_at = '2020-09-06 12:20:48';
        $this->model->modified_at = '2020-09-06 12:20:48';
        $this->model->created_by = 341;
        $this->model->modified_by = 341;
        $this->save();


    }

}
