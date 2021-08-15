<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaStats;

class DynaStatsInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaStats();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 20';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 23';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'place_region_id';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-08-01 00:00:00';
        $this->model->end_time = '2020-08-04 05:35:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 19';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'called_time';
        $this->model->start_time = '2020-05-31 21:30:40';
        $this->model->end_time = '2020-07-29 06:30:47';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 24';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PlaceCountry-cruds/place-country/index';
        $this->model->models = 'PlaceCountry';
        $this->model->cols = 'continent';
        $this->model->rows = 'phone';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2019-05-03 14:35:22';
        $this->model->end_time = '2021-11-12 04:35:30';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 33';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'Ware-cruds/ware/system';
        $this->model->models = 'Ware';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Test stat';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-07-01 14:30:04';
        $this->model->end_time = '2020-08-04 09:30:25';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Магазин';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-02-04 05:25:46';
        $this->model->end_time = '2020-08-06 05:30:04';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 26';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopProduct-cruds/shop-product/index';
        $this->model->models = 'ShopProduct';
        $this->model->cols = 'shelf_life_unit';
        $this->model->rows = 'shop_brand_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-08-01 00:00:00';
        $this->model->end_time = '2020-08-02 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 22';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/indexD';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2019-07-28 04:20:35';
        $this->model->end_time = '2021-11-12 04:35:30';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 25';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopCatalog-cruds/shop-catalog/index';
        $this->model->models = 'ShopCatalog';
        $this->model->cols = 'currency';
        $this->model->rows = 'user_company_id';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2019-09-02 09:45:00';
        $this->model->end_time = '2020-08-02 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 30';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/delete';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 34';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'CpasOffer-cruds/cpas-offer/index';
        $this->model->models = 'CpasOffer';
        $this->model->cols = 'status';
        $this->model->rows = 'user_company_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-08-05 00:00:00';
        $this->model->end_time = '2020-08-06 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 35';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'source';
        $this->model->rows = 'status_callcenter';
        $this->model->time_col = 'date';
        $this->model->start_time = '2020-02-25 23:50:45';
        $this->model->end_time = '2020-10-10 23:55:49';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PlaceCountry-/web/crud/place-country/index';
        $this->model->models = 'PlaceCountry';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PlaceCountry-/web/crud/place-country/index';
        $this->model->models = 'PlaceCountry';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'CpasStreams-/web/crud/cpas-streams';
        $this->model->models = 'CpasStreams';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 59';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 47';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'source';
        $this->model->rows = 'additional_deliver';
        $this->model->time_col = 'date';
        $this->model->start_time = '2020-08-21 00:00:00';
        $this->model->end_time = '2020-08-29 19:50:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 60';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 61';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 62';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 99';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = '';
        $this->model->start_time = '2020-08-27 00:00:00';
        $this->model->end_time = '2020-08-28 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 63';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 64';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 66';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 67';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 46';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/on-complect/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_logistics';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'date_deliver';
        $this->model->start_time = '2020-08-20 00:00:00';
        $this->model->end_time = '2020-08-21 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 68';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 48';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 69';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 70';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 71';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 72';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'da';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 73';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 74';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 75';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 76';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 77';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 49';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'User-/crud/user/index';
        $this->model->models = 'User';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 50';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'User-/crud/user/index';
        $this->model->models = 'User';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 51';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'User-/crud/user/index';
        $this->model->models = 'User';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 52';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/shipment-ready/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'contact_name';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 52_53';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/shipment-ready/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'contact_name';
        $this->model->time_col = '';
        $this->model->start_time = '2020-08-22 00:00:00';
        $this->model->end_time = '2020-08-23 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/indexD';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'called_time';
        $this->model->start_time = '2019-11-12 14:50:22';
        $this->model->end_time = '2021-11-12 04:35:30';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 56';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 57';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 58';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 78';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 79';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 134';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareEnter-/shop/warehouse/ware-enter/index';
        $this->model->models = 'WareEnter';
        $this->model->cols = 'source';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 161';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 80';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 79_81';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 82';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 83';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 84';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 85';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 86';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 87';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 88';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 90';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 158';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 91';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 92';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 93';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 94';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 95';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 96';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 97';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 100';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'CallsCel-/shop/supervisor/calls-cel/index';
        $this->model->models = 'CallsCel';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 101';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'CallsCel-/shop/supervisor/calls-cel/index';
        $this->model->models = 'CallsCel';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 162';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 104';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareTrans-/shop/warehouse/ware-trans/index';
        $this->model->models = 'WareTrans';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 108';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/logistics/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 109';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareEnter-/shop/warehouse/ware-enter/system';
        $this->model->models = 'WareEnter';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 110';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 112';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareExit-/shop/warehouse/ware-exit/index';
        $this->model->models = 'WareExit';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 114';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/shop-shipment/index';
        $this->model->models = 'ShopShipment';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 55';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/shop-shipment/index';
        $this->model->models = 'ShopShipment';
        $this->model->cols = 'shipment_type';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-07 00:00:00';
        $this->model->end_time = '2020-09-08 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 116';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 117';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 118';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 119';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'User-/shop/supervisor/user/index';
        $this->model->models = 'User';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 120';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'User-/shop/supervisor/user/index';
        $this->model->models = 'User';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 122';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/shop-shipment/index';
        $this->model->models = 'ShopShipment';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/shop-shipment/index';
        $this->model->models = 'ShopShipment';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 126';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopDelay-/shop/admin/shop-delay/index';
        $this->model->models = 'ShopDelay';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 132';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/ware-send/index';
        $this->model->models = 'ShopShipment';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 133';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/ware-send/index';
        $this->model->models = 'ShopShipment';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 54';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-07 00:00:00';
        $this->model->end_time = '2020-09-08 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 140';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_logistics';
        $this->model->rows = 'number';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-11 00:00:00';
        $this->model->end_time = '2020-09-12 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 139';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareReturn-/shop/logistics/ware-return/index';
        $this->model->models = 'WareReturn';
        $this->model->cols = 'status';
        $this->model->rows = 'shop_order_ids';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-15 00:00:00';
        $this->model->end_time = '2020-09-16 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 106';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareAccept-/shop/admin/ware-accept/index';
        $this->model->models = 'WareAccept';
        $this->model->cols = 'status';
        $this->model->rows = 'name';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-15 00:00:00';
        $this->model->end_time = '2020-09-16 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 102';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'User-/shop/supervisor/user/index';
        $this->model->models = 'User';
        $this->model->cols = 'gender';
        $this->model->rows = 'title';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-28 00:00:00';
        $this->model->end_time = '2020-09-29 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 157';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'CallsCdr-/shop/supervisor/calls-cdr/index';
        $this->model->models = 'CallsCdr';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 125';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareReturn-/shop/admin/ware-return/index';
        $this->model->models = 'WareReturn';
        $this->model->cols = 'status';
        $this->model->rows = 'shop_courier_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-22 00:00:00';
        $this->model->end_time = '2020-09-23 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 121';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'User-/shop/supervisor/user/index';
        $this->model->models = 'User';
        $this->model->cols = 'status';
        $this->model->rows = 'password';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-22 00:00:00';
        $this->model->end_time = '2020-09-23 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 107';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareEnter-/shop/admin/ware-enter/index';
        $this->model->models = 'WareEnter';
        $this->model->cols = 'source';
        $this->model->rows = 'user_company_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-08 00:00:00';
        $this->model->end_time = '2020-09-09 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareTrans-/shop/admin/ware-trans/index';
        $this->model->models = 'WareTrans';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 45';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_logistics';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'date_deliver';
        $this->model->start_time = '2020-04-06 04:20:00';
        $this->model->end_time = '2020-10-23 15:50:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareReturn-/shop/admin/ware-return/index';
        $this->model->models = 'WareReturn';
        $this->model->cols = 'status';
        $this->model->rows = 'shop_courier_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-28 00:00:00';
        $this->model->end_time = '2020-09-29 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 115';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/logistics/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'source_type';
        $this->model->rows = 'name';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-18 00:00:00';
        $this->model->end_time = '2020-09-19 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 111';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareExit-/shop/warehouse/ware-exit/index';
        $this->model->models = 'WareExit';
        $this->model->cols = 'source';
        $this->model->rows = 'ware_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-28 00:00:00';
        $this->model->end_time = '2020-09-29 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 138';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareExit-/shop/admin/ware-exit/index';
        $this->model->models = 'WareExit';
        $this->model->cols = 'source';
        $this->model->rows = 'name';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-16 00:00:00';
        $this->model->end_time = '2020-09-17 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 143';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareEnter-/shop/admin/ware-enter/delete';
        $this->model->models = 'WareEnter';
        $this->model->cols = 'source';
        $this->model->rows = 'source';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-16 00:00:00';
        $this->model->end_time = '2020-09-17 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 141';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_logistics';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-13 00:00:00';
        $this->model->end_time = '2020-09-14 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 118_144';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 118_145';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 118_146';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = '';
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 139_147';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareReturn-/shop/logistics/ware-return/index';
        $this->model->models = 'WareReturn';
        $this->model->cols = 'status';
        $this->model->rows = 'shop_order_ids';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-15 00:00:00';
        $this->model->end_time = '2020-09-16 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 148';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareReturn-/shop/logistics/ware-return/index';
        $this->model->models = 'WareReturn';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 136';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareAccept-/shop/logistics/ware-accept/index';
        $this->model->models = 'WareAccept';
        $this->model->cols = 'status';
        $this->model->rows = 'shop_courier_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-08 00:00:00';
        $this->model->end_time = '2020-09-09 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 149';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'User-/shop/admin/user/index';
        $this->model->models = 'User';
        $this->model->cols = 'role';
        $this->model->rows = 'title';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-20 00:00:00';
        $this->model->end_time = '2020-09-21 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 141_150';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_logistics';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-13 00:00:00';
        $this->model->end_time = '2020-09-14 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 151';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrderItem-/shop/admin/ware-accept/view-return';
        $this->model->models = 'ShopOrderItem';
        $this->model->cols = '';
        $this->model->rows = 'ware_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-22 00:00:00';
        $this->model->end_time = '2020-09-23 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 98';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'date_approve';
        $this->model->start_time = '2020-07-27 01:05:04';
        $this->model->end_time = '2021-03-11 10:50:04';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 137';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareReturn-/shop/admin/ware-return/index';
        $this->model->models = 'WareReturn';
        $this->model->cols = 'status';
        $this->model->rows = 'ware_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-22 00:00:00';
        $this->model->end_time = '2020-09-23 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 113';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareExit-/shop/warehouse/ware-exit/index';
        $this->model->models = 'WareExit';
        $this->model->cols = 'source';
        $this->model->rows = 'name';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-22 00:00:00';
        $this->model->end_time = '2020-09-23 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'Статистика по магазинов_152';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-08-31 18:35:00';
        $this->model->end_time = '2020-10-08 06:30:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 160';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 163';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 164';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'code';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 135';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareAccept-/shop/logistics/ware-accept/index';
        $this->model->models = 'WareAccept';
        $this->model->cols = 'status';
        $this->model->rows = 'dc_returns_group';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-28 00:00:00';
        $this->model->end_time = '2020-09-29 00:00:00';
        $this->model->depend_cols = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 105';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'WareAccept-/shop/admin/ware-accept/index';
        $this->model->models = 'WareAccept';
        $this->model->cols = 'status';
        $this->model->rows = 'status';
        $this->model->time_col = '';
        $this->model->start_time = '2020-09-28 00:00:00';
        $this->model->end_time = '2020-09-29 00:00:00';
        $this->model->depend_cols = "";
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
