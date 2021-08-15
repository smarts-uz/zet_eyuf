<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\tree\TreeProduct;

class TreeProductInsert extends ZInsert
{

    public function run()
    {

        $this->model = new TreeProduct();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Rav';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->root = 1212;
        $this->model->lft = 562;
        $this->model->rgt = 655123;
        $this->model->lvl = null;
        $this->model->icon = '';
        $this->model->icon_type = 1;
        $this->model->activeOrig = null;
        $this->model->selected = null;
        $this->model->disabled = null;
        $this->model->readonly = null;
        $this->model->visible = null;
        $this->model->collapsed = null;
        $this->model->movable_u = null;
        $this->model->movable_d = null;
        $this->model->movable_l = null;
        $this->model->movable_r = null;
        $this->model->removable = null;
        $this->model->removable_all = null;
        $this->model->child_allowed = null;
        $this->save();


    }

}
