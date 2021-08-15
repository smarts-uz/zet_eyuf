<?php

namespace zetsoft\inserts\mplace;

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
        $this->model->group = 'not';
        $this->model->attr = 'shop_shipment_id';
        $this->model->models = 'ShopOrder';
        $this->model->operator = '=';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessQuery();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 16';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 72;
        $this->model->group = 'and';
        $this->model->attr = 'shop_shipment_id';
        $this->model->models = 'ShopOrder';
        $this->model->operator = '!=';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessQuery();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 18';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 74;
        $this->model->group = 'and';
        $this->model->attr = '';
        $this->model->models = 'ShopCatalog';
        $this->model->operator = '!=';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessQuery();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 77;
        $this->model->group = 'not';
        $this->model->attr = 'shop_shipment_id';
        $this->model->models = 'ShopOrder';
        $this->model->operator = '=';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessQuery();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 17';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 90;
        $this->model->group = 'not';
        $this->model->attr = 'shop_shipment_id';
        $this->model->models = 'ShopOrder';
        $this->model->operator = '=';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessQuery();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 15';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 2;
        $this->model->group = 'and';
        $this->model->attr = '';
        $this->model->models = 'ShopCatalogWare';
        $this->model->operator = '=';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
