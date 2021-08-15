<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChess;

class DynaChessInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChess();

        $this->model->id = 90;
        $this->model->sort = 90;
        $this->model->name = 'выгрузка данных приемок Заказы операторов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 12;
        $this->model->sort = 12;
        $this->model->name = 'Расчет прибыли';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopCatalog';
        $this->model->model_query = "";
        $this->model->rols = [
            'admin',
        ];
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 74;
        $this->model->sort = 74;
        $this->model->name = 'Выкупленные заказы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopCatalog';
        $this->model->model_query = "";
        $this->model->rols = [
            'admin',
            'logistics',
            'warehouse',
        ];
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 89;
        $this->model->sort = 89;
        $this->model->name = 'выгрузка данных приемок  OK';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'WareAccept';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 69;
        $this->model->sort = 69;
        $this->model->name = 'Для проверки документа ПРИЕМКА ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->model_query = "";
        $this->model->rols = [
            'admin',
            'logistics',
            'logistics_region',
            'warehouse',
            'warehouse_region',
        ];
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Отчет по курьерам ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopCourier';
        $this->model->model_query = "";
        $this->model->rols = [
            'logistics',
        ];
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 72;
        $this->model->sort = 72;
        $this->model->name = 'Для проверки документа ПЕРЕДАЧА';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->model_query = "";
        $this->model->rols = [
            'admin',
            'cpa',
        ];
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 77;
        $this->model->sort = 77;
        $this->model->name = 'Причины отказов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->model_query = "";
        $this->model->rols = [
            'admin',
            'logistics',
            'warehouse',
        ];
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = 'Test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'ShopOrder';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 2;
        $this->model->sort = 2;
        $this->model->name = 'Ежедневный отчёт ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'ShopCatalogWare';
        $this->model->model_query = "";
        $this->model->rols = [
            'admin',
            'complect',
            'warehouse',
        ];
        $this->model->allow = 1;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'ShopOrderItem';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'ShopOrderItem';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'UserCompany';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChess();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->models = 'DynaMulti';
        $this->model->model_query = "";
        $this->model->rols = "";
        $this->model->allow = null;
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
