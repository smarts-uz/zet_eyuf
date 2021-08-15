<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChessQuery;

class DynaChessQueryInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChessQuery();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 6';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->group = 'and';
        $this->model->attr = 'shop_shipment_id';
        $this->model->models = 'ShopOrder';
        $this->model->operator = '!=';
        $this->model->val = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-29 14:17:02';
        $this->model->modified_at = '2020-09-29 17:17:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new DynaChessQuery();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 72;
        $this->model->group = 'and';
        $this->model->attr = '';
        $this->model->models = 'ShopOrder';
        $this->model->operator = '';
        $this->model->val = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-29 18:59:27';
        $this->model->modified_at = '2020-09-29 18:59:27';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
