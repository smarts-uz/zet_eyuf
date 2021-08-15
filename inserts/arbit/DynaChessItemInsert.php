<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaChessItem;

class DynaChessItemInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaChessItem();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'attr1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 4;
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

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'attr_of_1';
        $this->model->title = 'Оффери';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 5;
        $this->model->service = "";
        $this->model->type = 'hasOne';
        $this->model->formula = '';
        $this->model->models = 'CpasOffer';
        $this->model->relate_attr = 'cpas_offer_id';
        $this->model->attrib = 'title';
        $this->model->process = '';
        $this->model->filter = null;
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

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'attr_of_2';
        $this->model->title = 'Клики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 5;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'CpasStreamItem';
        $this->model->relate_attr = 'cpas_stream_id';
        $this->model->attrib = 'click';
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

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'attr_of_3';
        $this->model->title = 'Хити';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dyna_chess_id = 5;
        $this->model->service = "";
        $this->model->type = 'hasMany';
        $this->model->formula = '';
        $this->model->models = 'CpasStreamItem';
        $this->model->relate_attr = 'cpas_stream_id';
        $this->model->attrib = 'uniclick';
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

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'attr_of_4';
        $this->model->title = 'EPC';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 5;
        $this->model->service = [
            'args' => '',
            'method' => 'saveTrackLand',
            'service' => 'cpaslead',
            'namespace' => 'cpas',
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

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'attr_of_5';
        $this->model->title = 'CR';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 5;
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

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dyna_chess_id = 5;
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


    }

}
