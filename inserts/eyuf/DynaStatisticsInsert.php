<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaStats;

class DynaStatisticsInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaStats();

        $this->model->id = 20;
        $this->model->name = 'Новая запись 20';
        $this->model->dynaId = '';
        $this->model->active = 1;
        $this->model->models = '';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 23;
        $this->model->name = 'Новая запись 23';
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/index';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'place_region_id';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-08-01 00:00:00';
        $this->model->end_time = '2020-08-04 05:35:00';
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 21;
        $this->model->name = 'Новая запись 21';
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/indexD';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'called_time';
        $this->model->start_time = '2019-11-12 14:50:22';
        $this->model->end_time = '2021-11-12 04:35:30';
        $this->model->depend_cols = [
            'operator',
        ];
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 19;
        $this->model->name = 'Новая запись 19';
        $this->model->dynaId = '';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'called_time';
        $this->model->start_time = '2020-05-31 21:30:40';
        $this->model->end_time = '2020-07-29 06:30:47';
        $this->model->depend_cols = [
            'operator',
        ];
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 24;
        $this->model->name = 'Новая запись 24';
        $this->model->dynaId = 'PlaceCountry-cruds/place-country/index';
        $this->model->active = 1;
        $this->model->models = 'PlaceCountry';
        $this->model->cols = 'continent';
        $this->model->rows = 'phone';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2019-05-03 14:35:22';
        $this->model->end_time = '2021-11-12 04:35:30';
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 33;
        $this->model->name = 'Новая запись 33';
        $this->model->dynaId = 'Ware-cruds/ware/system';
        $this->model->active = 1;
        $this->model->models = 'Ware';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 32;
        $this->model->name = 'Test stat';
        $this->model->dynaId = 'ShopOrder-supervisor/main/index';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-07-01 14:30:04';
        $this->model->end_time = '2020-08-04 09:30:25';
        $this->model->depend_cols = [
            'operator',
            'packaging',
        ];
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 31;
        $this->model->name = 'Магазин';
        $this->model->dynaId = 'ShopOrder-supervisor/main/index';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2020-02-04 05:25:46';
        $this->model->end_time = '2020-08-06 05:30:04';
        $this->model->depend_cols = [
            'operator',
        ];
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 26;
        $this->model->name = 'Новая запись 26';
        $this->model->dynaId = 'ShopProduct-cruds/shop-product/index';
        $this->model->active = 1;
        $this->model->models = 'ShopProduct';
        $this->model->cols = 'shelf_life_unit';
        $this->model->rows = 'shop_brand_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-08-01 00:00:00';
        $this->model->end_time = '2020-08-02 00:00:00';
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 22;
        $this->model->name = 'Новая запись 22';
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/indexD';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2019-07-28 04:20:35';
        $this->model->end_time = '2021-11-12 04:35:30';
        $this->model->depend_cols = [
            'operator',
        ];
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 25;
        $this->model->name = 'Новая запись 25';
        $this->model->dynaId = 'ShopCatalog-cruds/shop-catalog/index';
        $this->model->active = 1;
        $this->model->models = 'ShopCatalog';
        $this->model->cols = 'currency';
        $this->model->rows = 'user_company_id';
        $this->model->time_col = 'created_at';
        $this->model->start_time = '2019-09-02 09:45:00';
        $this->model->end_time = '2020-08-02 00:00:00';
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 30;
        $this->model->name = 'Новая запись 30';
        $this->model->dynaId = 'ShopOrder-cruds/shop-order/delete';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 34;
        $this->model->name = 'Новая запись 34';
        $this->model->dynaId = 'CpasOffer-cruds/cpas-offer/index';
        $this->model->active = 1;
        $this->model->models = 'CpasOffer';
        $this->model->cols = 'status';
        $this->model->rows = 'user_company_id';
        $this->model->time_col = '';
        $this->model->start_time = '2020-08-05 00:00:00';
        $this->model->end_time = '2020-08-06 00:00:00';
        $this->model->depend_cols = '';
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 35;
        $this->model->name = 'Новая запись 35';
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/shop-order/index';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'source';
        $this->model->rows = 'status_callcenter';
        $this->model->time_col = 'date';
        $this->model->start_time = '2020-02-25 23:50:45';
        $this->model->end_time = '2020-10-10 23:55:49';
        $this->model->depend_cols = [
            'operator',
        ];
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 37;
        $this->model->name = '';
        $this->model->dynaId = 'PlaceCountry-/web/crud/place-country/index';
        $this->model->active = 1;
        $this->model->models = 'PlaceCountry';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 38;
        $this->model->name = '';
        $this->model->dynaId = 'PlaceCountry-/web/crud/place-country/index';
        $this->model->active = 1;
        $this->model->models = 'PlaceCountry';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 40;
        $this->model->name = '';
        $this->model->dynaId = 'ShopOrderItem-/shop/admin/ware-accept/view-return';
        $this->model->active = 1;
        $this->model->models = 'ShopOrderItem';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 41;
        $this->model->name = '';
        $this->model->dynaId = 'CpasStreams-/web/crud/cpas-streams';
        $this->model->active = 1;
        $this->model->models = 'CpasStreams';
        $this->model->cols = '';
        $this->model->rows = '';
        $this->model->time_col = '';
        $this->model->start_time = null;
        $this->model->end_time = null;
        $this->model->depend_cols = "";
        $this->save();


        $this->model = new DynaStats();

        $this->model->id = 36;
        $this->model->name = 'Статистика по магазинов';
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->active = 1;
        $this->model->models = 'ShopOrder';
        $this->model->cols = 'status_callcenter';
        $this->model->rows = 'user_company_ids';
        $this->model->time_col = '';
        $this->model->start_time = '2019-11-11 04:20:00';
        $this->model->end_time = '2020-08-29 15:55:00';
        $this->model->depend_cols = [
            'operator',
        ];
        $this->save();


    }

}
