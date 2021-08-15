<?php

namespace zetsoft\inserts\eyuf;

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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 253';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->models = 'DynaChessItem';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 258';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageBlocks-/crud/page_blocks/system';
        $this->model->models = 'PageBlocks';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 263';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageWidgetType-/crud/page-widget-type/index';
        $this->model->models = 'PageWidgetType';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 254';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->models = 'DynaChessItem';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 259';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageBlocksType-/crud/page-blocks-type/index';
        $this->model->models = 'PageBlocksType';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 264';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageTheme-/crud/page_theme/system';
        $this->model->models = 'PageTheme';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 250';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->models = 'DynaChessItem';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 260';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DragApp-/crud/drag-app/index';
        $this->model->models = 'DragApp';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 251';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->models = 'DynaChessItem';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 256';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DragConfigDb-/crud/drag_config_db/system';
        $this->model->models = 'DragConfigDb';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 261';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageApi-/crud/page_api/system';
        $this->model->models = 'PageApi';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 221';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 211';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 222';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 159';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 227';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 158';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 186';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 232';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 182';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 206';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 246';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 155';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 198';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 193';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 218';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 163';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 235';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 244';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 226';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 151';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 248';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufCompatriot-/crud/eyuf_compatriot/index';
        $this->model->models = 'EyufCompatriot';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 220';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 153';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 170';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 238';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 208';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 180';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 192';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 171';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 184';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 177';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 207';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 156';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 173';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 236';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 239';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 202';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 189';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 212';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 247';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 237';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 229';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 161';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 216';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 228';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 241';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 185';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 210';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 217';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 234';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 201';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 154';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 172';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 249';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufCompatriot-/crud/eyuf_compatriot/index';
        $this->model->models = 'EyufCompatriot';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 245';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 224';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 190';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 174';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 183';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 214';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 167';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 157';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 195';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 200';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 203';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 175';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 242';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 165';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 209';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 169';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 178';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 240';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 196';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 89';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'date_approve';
        $this->model->start_time = '2020-06-01 00:05:00';
        $this->model->end_time = '2020-08-27 00:00:00';
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 194';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Статистика по магазинов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-09-15 13:45:00';
        $this->model->end_time = '2020-09-17 19:55:00';
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 191';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 188';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 199';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 179';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 213';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 219';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 215';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 225';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 187';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 204';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 230';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 197';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->models = 'PaysCurrency';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 152';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 176';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 223';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufManual-/eyuf/cores/man/index';
        $this->model->models = 'EyufManual';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 166';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 160';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 231';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 205';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->models = 'EyufNeed';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 181';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 164';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 233';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->models = 'EyufRequest';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 162';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 168';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ChatNotify-/eyuf/cores/notify/view';
        $this->model->models = 'ChatNotify';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 146';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufScholar-/eyuf/logics/monitor/index';
        $this->model->models = 'EyufScholar';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
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
        $this->model->start_time = '2020-08-26 00:00:00';
        $this->model->end_time = '2020-08-27 00:00:00';
        $this->model->depend_cols = "";
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
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 252';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->models = 'DynaChessItem';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 257';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageBlocks-/crud/page_blocks/system';
        $this->model->models = 'PageBlocks';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'Новая запись 262';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageBlocks-/crud/page_blocks/system';
        $this->model->models = 'PageBlocks';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


    }

}
