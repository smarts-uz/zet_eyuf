<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChessItem;

class DynaChessItemInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChessItem();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'unervisal_report';
        $this->model->title = 'UNIVERSIAL REPORT TEST';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 1;
        $this->model->service = "";
        $this->model->type = 'hasMulti';
        $this->model->formula = '';
        $this->model->models = 'WareEnterItem';
        $this->model->relate_attr = 'shop_catalog_ware_id';
        $this->model->attrib = 'amount';
        $this->model->process = 'sum';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'something_to_do';
        $this->model->title = 'for testing purpose';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 1;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'WareExitItem';
        $this->model->relate_attr = 'shop_catalog_ware_id';
        $this->model->attrib = 'shop_element_id';
        $this->model->process = 'count';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'amount_wares';
        $this->model->title = 'somehting';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 51;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'PlaceAdress';
        $this->model->relate_attr = 'place_adress_id';
        $this->model->attrib = 'created_at';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 61;
        $this->model->sort = 0;
        $this->model->name = 'asdsa';
        $this->model->title = 'Сумма';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'sales_amount';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'create_at';
        $this->model->title = 'for testing purpose';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 51;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'WareReturn';
        $this->model->relate_attr = 'ware_id';
        $this->model->attrib = 'total_price';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 15;
        $this->model->sort = 4;
        $this->model->name = 'amount_before';
        $this->model->title = 'Началный остаток';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'amount_history';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 20;
        $this->model->sort = 6;
        $this->model->name = 'attr11';
        $this->model->title = 'Отменено';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = [
            'args' => '',
            'method' => 'getEnterSrCancel',
            'service' => 'report',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 16;
        $this->model->sort = 5;
        $this->model->name = 'attr6';
        $this->model->title = 'Приход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = [
            'args' => '',
            'method' => 'getEnterSum',
            'service' => 'report',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'fhd';
        $this->model->title = 'Товарный состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 58;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 14;
        $this->model->sort = 3;
        $this->model->name = 'year';
        $this->model->title = 'Годен до';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'best_before';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 19;
        $this->model->sort = 7;
        $this->model->name = 'attr10';
        $this->model->title = 'Приход от обмен';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = [
            'args' => '',
            'method' => 'getEnterSrExchange',
            'service' => 'report',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'dre';
        $this->model->title = 'Всего';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'total';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'fd';
        $this->model->title = 'Курьер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopCourier';
        $this->model->relate_attr = 'shop_courier_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'adres';
        $this->model->title = 'Заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 58;
        $this->model->service = "";
        $this->model->type = 'hasMulti';
        $this->model->formula = '';
        $this->model->models = 'ShopShipment';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'dsfsdfs';
        $this->model->title = 'Товарный состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 59;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'vjkhg';
        $this->model->title = 'Выкуп процент';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercent',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 55;
        $this->model->sort = -6;
        $this->model->name = 'asad2';
        $this->model->title = 'Курьер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopCourier';
        $this->model->relate_attr = 'shop_courier_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 86;
        $this->model->sort = 2;
        $this->model->name = 'nhgfbdf';
        $this->model->title = 'Заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 63;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'gsagsad';
        $this->model->title = 'Переносы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'date_transfer';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 88;
        $this->model->sort = 4;
        $this->model->name = 'fwsd';
        $this->model->title = 'Номенклатура';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 63;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'ShopOrderItem';
        $this->model->relate_attr = 'shop_order_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 93;
        $this->model->sort = 3;
        $this->model->name = 'hgsg';
        $this->model->title = 'Результат доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 63;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'status_logistics';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'sdfasga';
        $this->model->title = 'Сумма реализация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'sales_amount';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'asdasds';
        $this->model->title = 'Товарный состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 60;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'zfcsd';
        $this->model->title = 'Товарный состав.Заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 57;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopOrder';
        $this->model->relate_attr = 'shop_order_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'sdas';
        $this->model->title = 'Результат доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 60;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'status_deliver';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 119';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 83;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 95;
        $this->model->sort = 1;
        $this->model->name = 'dfsdfsd';
        $this->model->title = 'Товарный состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 63;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 94;
        $this->model->sort = 5;
        $this->model->name = 'zssef';
        $this->model->title = 'колво';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 63;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'ShopOrderItem';
        $this->model->relate_attr = 'shop_order_id';
        $this->model->attrib = 'amount';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'bg';
        $this->model->title = 'Служба доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopCourier';
        $this->model->relate_attr = 'shop_courier_id';
        $this->model->attrib = 'user_company_id';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'jfdssf';
        $this->model->title = 'Отказ во время';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'refusal';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'sdre';
        $this->model->title = 'Выкуп';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 54;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'completed';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'gfgdf';
        $this->model->title = 'Заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 66;
        $this->model->service = [
            'args' => '',
            'method' => 'getShopOrderName',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'rdfsdf';
        $this->model->title = 'Номенклатура';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 66;
        $this->model->service = [
            'args' => '',
            'method' => 'getShopOrderItemName',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 21;
        $this->model->sort = 6;
        $this->model->name = 'attr12';
        $this->model->title = 'Приход от ВДС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = [
            'args' => '',
            'method' => 'getEnterSrReturn',
            'service' => 'report',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 70;
        $this->model->sort = 9;
        $this->model->name = 'vf';
        $this->model->title = 'Остаток';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'remain';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'attr1';
        $this->model->title = 'заказы, полученные курьером';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 49;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopShipment';
        $this->model->relate_attr = 'shop_shipment_id';
        $this->model->attrib = 'ware_accept_id';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 63;
        $this->model->sort = 2;
        $this->model->name = 'asfsad';
        $this->model->title = 'Терминал';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'terminal';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 69;
        $this->model->sort = 8;
        $this->model->name = 'cd';
        $this->model->title = 'Оплата ВДС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'refund_reward';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 64;
        $this->model->sort = 3;
        $this->model->name = 'sdfsd';
        $this->model->title = 'Безналичные';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'cashless';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 65;
        $this->model->sort = 4;
        $this->model->name = 'asd';
        $this->model->title = 'Доп доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'add_delivery';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 66;
        $this->model->sort = 5;
        $this->model->name = 's';
        $this->model->title = '\\\\\\\\\\\\\\\\\\\\\$';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'in_dollar';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 67;
        $this->model->sort = 6;
        $this->model->name = 'b';
        $this->model->title = 'Бонус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'bonus';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 68;
        $this->model->sort = 7;
        $this->model->name = 'asasd';
        $this->model->title = 'Сумма ВДС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'refund';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 58;
        $this->model->sort = -3;
        $this->model->name = 'a';
        $this->model->title = 'Процент';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercent',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 56;
        $this->model->sort = -5;
        $this->model->name = 'sda';
        $this->model->title = 'Всего';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'total';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 97;
        $this->model->sort = -6;
        $this->model->name = 'dvsdefw';
        $this->model->title = 'Заказ клиента';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 68;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 99;
        $this->model->sort = -4;
        $this->model->name = 'gedffd';
        $this->model->title = 'Ser. #';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 68;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 96;
        $this->model->sort = -3;
        $this->model->name = 'assdf';
        $this->model->title = 'Заказы переданные курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 68;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopShipment';
        $this->model->relate_attr = 'shop_shipment_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = 1;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 57;
        $this->model->sort = -4;
        $this->model->name = 'dsfsd';
        $this->model->title = 'Выкуп';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'completed';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 184;
        $this->model->sort = 184;
        $this->model->name = 'Новая запись 184';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 186;
        $this->model->sort = 181;
        $this->model->name = 'total';
        $this->model->title = 'total';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 74;
        $this->model->service = [
            'args' => '',
            'method' => 'getTotalSum',
            'service' => 'reportcatalog',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 188;
        $this->model->sort = 180;
        $this->model->name = 'Tovari';
        $this->model->title = 'Catalog';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 74;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 121;
        $this->model->sort = 2;
        $this->model->name = 'attr_daily_2';
        $this->model->title = 'Номенклатура';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'shop_catalog_id';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'esvcsd';
        $this->model->title = 'Результат доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 66;
        $this->model->service = [
            'args' => '',
            'method' => 'getStatusLogisticsFromShopOrder',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'wefsd';
        $this->model->title = 'колво';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 66;
        $this->model->service = [
            'args' => '',
            'method' => 'getShopOrderItemAmount',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'sdaefdwef';
        $this->model->title = 'Товарный состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 66;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 124;
        $this->model->sort = -6;
        $this->model->name = 'attr_2';
        $this->model->title = 'Список Заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 55;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = 1;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 120;
        $this->model->sort = 1;
        $this->model->name = 'attr_daily_1';
        $this->model->title = 'Склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'ware_id';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = 1;
        $this->model->sorting = 1;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 60;
        $this->model->sort = -1;
        $this->model->name = 'asdas';
        $this->model->title = 'Процент переносов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = [
            'args' => '',
            'method' => 'getTransferPercent',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 126;
        $this->model->sort = 126;
        $this->model->name = 'attr_1';
        $this->model->title = 'Заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 134;
        $this->model->sort = -4;
        $this->model->name = 'attr1234567';
        $this->model->title = 'Служба доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 125;
        $this->model->sort = -5;
        $this->model->name = 'attr_3';
        $this->model->title = 'Количество товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 55;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'ShopOrderItem';
        $this->model->relate_attr = 'shop_order_id';
        $this->model->attrib = 'amount';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 59;
        $this->model->sort = -2;
        $this->model->name = 'as';
        $this->model->title = 'Перенос';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'date_transfer';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 146;
        $this->model->sort = 10;
        $this->model->name = 'asdfsdsdsd';
        $this->model->title = 'Процент по закрытым';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercentageOnClosed',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = 'attr_daily_4';
        $this->model->title = 'Началный остаток';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 85;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'amount_history';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'attr_test1';
        $this->model->title = 'Названия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 82;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 127;
        $this->model->sort = 127;
        $this->model->name = 'attr_23';
        $this->model->title = 'Результат доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = 'children';
        $this->model->attrib = 'status_accept';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 62;
        $this->model->sort = 1;
        $this->model->name = 'afds';
        $this->model->title = 'Процент от общего';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercentageOfTotal',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 148;
        $this->model->sort = 148;
        $this->model->name = 'hfghgfh';
        $this->model->title = 'Товарный состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = 1;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = 'attr_test2';
        $this->model->title = 'asdfg';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 82;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopCoupon';
        $this->model->relate_attr = 'shop_coupon_id';
        $this->model->attrib = 'comment';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'dfwsds';
        $this->model->title = 'Служба доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 53;
        $this->model->service = [
            'args' => '',
            'method' => 'getUserCompanyName',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = 1;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = 'attr_test3';
        $this->model->title = 'wdefgg';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 82;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 185;
        $this->model->sort = 185;
        $this->model->name = 'a1a2';
        $this->model->title = 'Test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 12;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'attr123';
        $this->model->title = 'Проекты шоп';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 70;
        $this->model->service = "";
        $this->model->type = 'hasMulti';
        $this->model->formula = '';
        $this->model->models = 'ShopCourier';
        $this->model->relate_attr = 'shop_shipment_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 189;
        $this->model->sort = 189;
        $this->model->name = 'Новая запись 189';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 88;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 139;
        $this->model->sort = 0;
        $this->model->name = 'sdfcsfasd';
        $this->model->title = 'Отказ во время';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 140;
        $this->model->sort = 1;
        $this->model->name = 'sfsdfsd';
        $this->model->title = 'Переносы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'some_12';
        $this->model->title = 'ljklfjsd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 8;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'WareExitItem';
        $this->model->relate_attr = 'shop_catalog_ware_id';
        $this->model->attrib = 'ware_exit_id';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 141;
        $this->model->sort = 2;
        $this->model->name = 'sdfsrewfsd';
        $this->model->title = 'Сумма реализация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 149;
        $this->model->sort = -5;
        $this->model->name = 'fffsadfa';
        $this->model->title = 'Дата доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 68;
        $this->model->service = [
            'args' => '',
            'method' => 'getDeliveryCount',
            'service' => 'reportbahodir',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'sadfasdf';
        $this->model->title = 'Group1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 68;
        $this->model->service = [
            'args' => '',
            'method' => 'getDeliveryCountGroup',
            'service' => 'reportbahodir',
            'namespace' => 'market',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = 1;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 138;
        $this->model->sort = -1;
        $this->model->name = 'sfsdfsd';
        $this->model->title = 'Выкуп процент';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 160;
        $this->model->sort = 160;
        $this->model->name = 'sum_all_ware_accept';
        $this->model->title = 'Сумма';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getSalesAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 152;
        $this->model->sort = -6;
        $this->model->name = 'dsd';
        $this->model->title = 'Заказы переданные курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 72;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopShipment';
        $this->model->relate_attr = 'shop_shipment_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 133;
        $this->model->sort = -5;
        $this->model->name = 'attr123456';
        $this->model->title = 'Курьер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = "";
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 154;
        $this->model->sort = -4;
        $this->model->name = 'sdsd';
        $this->model->title = 'Дата доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 72;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'ShopShipment';
        $this->model->relate_attr = 'shop_shipment_id';
        $this->model->attrib = 'date_deliver';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 155;
        $this->model->sort = 155;
        $this->model->name = 'couries';
        $this->model->title = 'Курьер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getAmountSum',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 157;
        $this->model->sort = 157;
        $this->model->name = 'percentages_completed_shop_courier';
        $this->model->title = 'Процент';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercentageCompletedSum',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 177;
        $this->model->sort = 177;
        $this->model->name = 'report_couriers_name';
        $this->model->title = 'Курьер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = 1;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 136;
        $this->model->sort = -3;
        $this->model->name = 'asd2asdw';
        $this->model->title = 'Всего';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = 'WareAccept';
        $this->model->relate_attr = '';
        $this->model->attrib = 'total';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 137;
        $this->model->sort = -2;
        $this->model->name = 'dfsd';
        $this->model->title = 'Выкуп';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = 'WareAccept';
        $this->model->relate_attr = '';
        $this->model->attrib = 'completed';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 173;
        $this->model->sort = 10;
        $this->model->name = 'bonus_report_courier';
        $this->model->title = 'Бонус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getBonusAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 150;
        $this->model->sort = 150;
        $this->model->name = 'szdewdcsd';
        $this->model->title = 'Создан в';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 145;
        $this->model->sort = 145;
        $this->model->name = 'dascz';
        $this->model->title = 'колво';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'ShopOrderItem';
        $this->model->relate_attr = 'shop_order_id';
        $this->model->attrib = 'amount_partial';
        $this->model->process = 'sum';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 144;
        $this->model->sort = 144;
        $this->model->name = 'sdfsefs';
        $this->model->title = 'Номенклатура';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 69;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'ShopOrderItem';
        $this->model->relate_attr = 'shop_shipment_id';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 153;
        $this->model->sort = -5;
        $this->model->name = 'dsdf';
        $this->model->title = 'Заказ клиента';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 72;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'shop_courier_remains';
        $this->model->title = 'Остаток';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getRemainAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 17;
        $this->model->sort = 17;
        $this->model->name = 'attr7';
        $this->model->title = 'Расход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = [
            'args' => '',
            'method' => 'getExitSum',
            'service' => 'report',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 18;
        $this->model->sort = 18;
        $this->model->name = 'amount_after';
        $this->model->title = 'Конечный остаток';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 2;
        $this->model->service = "";
        $this->model->type = 'formula';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'amount_history';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 187;
        $this->model->sort = 182;
        $this->model->name = 'price_all';
        $this->model->title = 'price_all';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 74;
        $this->model->service = [
            'args' => '',
            'method' => 'getAmountSum',
            'service' => 'reportcatalog',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 169;
        $this->model->sort = 169;
        $this->model->name = 'terminal_amount_for_report_couirer';
        $this->model->title = 'Терминал';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getTerminalAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 190;
        $this->model->sort = 190;
        $this->model->name = 'Новая запись 190';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 88;
        $this->model->service = "";
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 132;
        $this->model->sort = -6;
        $this->model->name = 'attr1234';
        $this->model->title = 'Проекты шоп';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 71;
        $this->model->service = [
            'args' => '',
            'method' => 'getUserCompanyName',
            'service' => 'reportnurbek',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = 1;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 159;
        $this->model->sort = 159;
        $this->model->name = 'get_all_pernos_percentages';
        $this->model->title = 'Процент переносов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercentageDeliveryTransfer',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 180;
        $this->model->sort = 180;
        $this->model->name = 'a2a2';
        $this->model->title = 'Приёмка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 77;
        $this->model->service = [
            'args' => '',
            'method' => 'getAcceptanceName',
            'service' => 'reportreasonsforrefusals',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = 1;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 156;
        $this->model->sort = 156;
        $this->model->name = 'all_';
        $this->model->title = 'Всего';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getAmountSum',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 175;
        $this->model->sort = 12;
        $this->model->name = 'pay_dc_report_couirier';
        $this->model->title = 'Оплата ВДС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getRefundRewardAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 176;
        $this->model->sort = 14;
        $this->model->name = 'remainder_report_couirier';
        $this->model->title = 'Курьер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getRemainAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 174;
        $this->model->sort = 11;
        $this->model->name = 'return_report_courier';
        $this->model->title = 'Сумма ВДС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getDcReturnAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 172;
        $this->model->sort = 9;
        $this->model->name = 'dollor_report_couirer';
        $this->model->title = '\\\\\\\\\\\\\\\\\$';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getConvertedAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 170;
        $this->model->sort = 170;
        $this->model->name = 'cashless_for_report_courier';
        $this->model->title = 'Безналичные';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getCashlessAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 161;
        $this->model->sort = 161;
        $this->model->name = 'percentages_all_of_them1';
        $this->model->title = 'Процент от общего';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getPercentageFromAll',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'completed_product_shop_courier';
        $this->model->title = 'Выкуп';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getCompletedOrderSum',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 158;
        $this->model->sort = 158;
        $this->model->name = 'get_all_pernos';
        $this->model->title = 'Перенос';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getDeliveryTransferOrderSum',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 171;
        $this->model->sort = 171;
        $this->model->name = 'add_report_courier';
        $this->model->title = 'Доп доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 73;
        $this->model->service = [
            'args' => '',
            'method' => 'getAddDeliveryAmount',
            'service' => 'reportcourier',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 181;
        $this->model->sort = 181;
        $this->model->name = 'a1a1';
        $this->model->title = 'Причина отказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 77;
        $this->model->service = [
            'args' => '',
            'method' => 'getRejectionReason',
            'service' => 'reportreasonsforrefusals',
            'namespace' => 'market',
        ];
        $this->model->type = '';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = '';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 183;
        $this->model->sort = 183;
        $this->model->name = 'q1';
        $this->model->title = 'Результат доствки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 77;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'status_deliver';
        $this->model->process = '';
        $this->model->filter = 1;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaChessItem();

        $this->model->id = 182;
        $this->model->sort = 182;
        $this->model->name = 'a3a3';
        $this->model->title = 'Проект, Заказы.';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 77;
        $this->model->service = [
            'args' => '',
            'method' => '',
            'service' => '',
            'namespace' => '',
        ];
        $this->model->type = 'native';
        $this->model->formula = '';
        $this->model->models = '';
        $this->model->relate_attr = '';
        $this->model->attrib = 'name';
        $this->model->process = '';
        $this->model->filter = null;
        $this->model->filter_widget = '';
        $this->model->column_data = '';
        $this->model->group = null;
        $this->model->grouped_row = null;
        $this->model->sorting = null;
        $this->model->item_class = '';
        $this->model->item_attr = '';
        $this->model->summary = null;
        $this->model->summary_type = 'f_sum';
        $this->model->hide_null = null;
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
