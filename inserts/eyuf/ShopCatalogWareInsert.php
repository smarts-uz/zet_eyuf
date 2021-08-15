<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCatalogWare;

class ShopCatalogWareInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCatalogWare();

        $this->model->id = 58;
        $this->model->shop_catalog_id = 12349;
        $this->model->ware_id = 61;
        $this->model->best_before = null;
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-02 17:11:53';
        $this->model->modified_at = '2020-09-02 17:11:53';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 59;
        $this->model->shop_catalog_id = 12350;
        $this->model->ware_id = 66;
        $this->model->best_before = '2020-10-08';
        $this->model->amount = 72;
        $this->model->created_at = '2020-09-02 17:12:25';
        $this->model->modified_at = '2020-09-02 17:12:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 60;
        $this->model->shop_catalog_id = 12351;
        $this->model->ware_id = 65;
        $this->model->best_before = '2020-09-16';
        $this->model->amount = 72;
        $this->model->created_at = '2020-09-02 17:12:47';
        $this->model->modified_at = '2020-09-02 17:12:47';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 61;
        $this->model->shop_catalog_id = 12352;
        $this->model->ware_id = 66;
        $this->model->best_before = '2020-09-16';
        $this->model->amount = 3;
        $this->model->created_at = '2020-09-02 17:13:30';
        $this->model->modified_at = '2020-09-02 17:13:30';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 63;
        $this->model->shop_catalog_id = 12353;
        $this->model->ware_id = 61;
        $this->model->best_before = '2020-09-16';
        $this->model->amount = 16;
        $this->model->created_at = '2020-09-02 18:24:58';
        $this->model->modified_at = '2020-09-02 18:24:58';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 64;
        $this->model->shop_catalog_id = 12354;
        $this->model->ware_id = 62;
        $this->model->best_before = '2020-10-03';
        $this->model->amount = 15;
        $this->model->created_at = '2020-09-02 18:25:24';
        $this->model->modified_at = '2020-09-02 18:25:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 66;
        $this->model->shop_catalog_id = 12355;
        $this->model->ware_id = 66;
        $this->model->best_before = '2020-10-09';
        $this->model->amount = 80;
        $this->model->created_at = '2020-09-02 18:26:26';
        $this->model->modified_at = '2020-09-02 18:26:26';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 69;
        $this->model->shop_catalog_id = 12356;
        $this->model->ware_id = 65;
        $this->model->best_before = '2020-09-23';
        $this->model->amount = 80;
        $this->model->created_at = '2020-09-02 18:27:45';
        $this->model->modified_at = '2020-09-02 18:27:45';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 71;
        $this->model->shop_catalog_id = 12357;
        $this->model->ware_id = 64;
        $this->model->best_before = '2020-10-01';
        $this->model->amount = 80;
        $this->model->created_at = '2020-09-02 18:29:07';
        $this->model->modified_at = '2020-09-02 18:29:07';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 73;
        $this->model->shop_catalog_id = 12358;
        $this->model->ware_id = 67;
        $this->model->best_before = '2022-01-08';
        $this->model->amount = 300;
        $this->model->created_at = '2020-09-03 09:40:43';
        $this->model->modified_at = '2020-09-03 09:40:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 75;
        $this->model->shop_catalog_id = 12359;
        $this->model->ware_id = 59;
        $this->model->best_before = '2023-07-07';
        $this->model->amount = 1000;
        $this->model->created_at = '2020-09-03 09:53:17';
        $this->model->modified_at = '2020-09-03 09:53:17';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 77;
        $this->model->shop_catalog_id = 12360;
        $this->model->ware_id = 64;
        $this->model->best_before = '2024-07-07';
        $this->model->amount = 2000;
        $this->model->created_at = '2020-09-03 10:00:27';
        $this->model->modified_at = '2020-09-03 10:00:27';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 78;
        $this->model->shop_catalog_id = 12361;
        $this->model->ware_id = 59;
        $this->model->best_before = '2021-07-22';
        $this->model->amount = 800;
        $this->model->created_at = '2020-09-03 10:00:37';
        $this->model->modified_at = '2020-09-03 10:00:37';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 79;
        $this->model->shop_catalog_id = 12362;
        $this->model->ware_id = 66;
        $this->model->best_before = '2021-07-29';
        $this->model->amount = 500;
        $this->model->created_at = '2020-09-03 10:11:04';
        $this->model->modified_at = '2020-09-03 10:11:04';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 80;
        $this->model->shop_catalog_id = 12363;
        $this->model->ware_id = 59;
        $this->model->best_before = '2022-06-27';
        $this->model->amount = 200;
        $this->model->created_at = '2020-09-03 10:23:39';
        $this->model->modified_at = '2020-09-03 10:23:39';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 85;
        $this->model->shop_catalog_id = 12364;
        $this->model->ware_id = 59;
        $this->model->best_before = '2025-02-27';
        $this->model->amount = 1000;
        $this->model->created_at = '2020-09-03 10:50:07';
        $this->model->modified_at = '2020-09-03 10:50:07';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 87;
        $this->model->shop_catalog_id = 12367;
        $this->model->ware_id = 62;
        $this->model->best_before = '2025-07-10';
        $this->model->amount = 1000;
        $this->model->created_at = '2020-09-03 11:12:16';
        $this->model->modified_at = '2020-09-03 11:12:16';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 81;
        $this->model->shop_catalog_id = 12368;
        $this->model->ware_id = 63;
        $this->model->best_before = '2025-02-27';
        $this->model->amount = 1000;
        $this->model->created_at = '2020-09-03 10:32:15';
        $this->model->modified_at = '2020-09-03 10:32:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 82;
        $this->model->shop_catalog_id = 12369;
        $this->model->ware_id = 63;
        $this->model->best_before = '2025-05-28';
        $this->model->amount = 2000;
        $this->model->created_at = '2020-09-03 10:35:13';
        $this->model->modified_at = '2020-09-03 10:35:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 83;
        $this->model->shop_catalog_id = 12370;
        $this->model->ware_id = 65;
        $this->model->best_before = '2026-07-08';
        $this->model->amount = 2000;
        $this->model->created_at = '2020-09-03 10:35:40';
        $this->model->modified_at = '2020-09-03 10:35:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 74;
        $this->model->shop_catalog_id = 12371;
        $this->model->ware_id = 65;
        $this->model->best_before = '2022-06-07';
        $this->model->amount = 1099;
        $this->model->created_at = '2020-09-03 09:48:21';
        $this->model->modified_at = '2020-09-03 10:42:10';
        $this->model->created_by = 156;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 89;
        $this->model->shop_catalog_id = 12372;
        $this->model->ware_id = 61;
        $this->model->best_before = '2022-06-29';
        $this->model->amount = 200;
        $this->model->created_at = '2020-09-03 11:25:43';
        $this->model->modified_at = '2020-09-03 11:25:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 91;
        $this->model->shop_catalog_id = 12373;
        $this->model->ware_id = 61;
        $this->model->best_before = '2021-12-16';
        $this->model->amount = 200;
        $this->model->created_at = '2020-09-03 12:07:27';
        $this->model->modified_at = '2020-09-03 12:07:28';
        $this->model->created_by = 156;
        $this->model->modified_by = 156;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 93;
        $this->model->shop_catalog_id = 12375;
        $this->model->ware_id = 63;
        $this->model->best_before = '2021-11-10';
        $this->model->amount = 200;
        $this->model->created_at = '2020-09-03 12:07:57';
        $this->model->modified_at = '2020-09-03 12:07:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 94;
        $this->model->shop_catalog_id = 12376;
        $this->model->ware_id = 59;
        $this->model->best_before = '2025-02-27';
        $this->model->amount = 10000;
        $this->model->created_at = '2020-09-03 12:11:48';
        $this->model->modified_at = '2020-09-03 12:11:48';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 54;
        $this->model->shop_catalog_id = 12377;
        $this->model->ware_id = 56;
        $this->model->best_before = '2020-09-16';
        $this->model->amount = 1000;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 96;
        $this->model->shop_catalog_id = 12379;
        $this->model->ware_id = 62;
        $this->model->best_before = '2022-07-21';
        $this->model->amount = 13;
        $this->model->created_at = '2020-09-03 14:27:34';
        $this->model->modified_at = '2020-09-03 14:28:12';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 68;
        $this->model->shop_catalog_id = 12380;
        $this->model->ware_id = 59;
        $this->model->best_before = '2020-09-30';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-02 18:27:16';
        $this->model->modified_at = '2020-09-03 14:31:54';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 97;
        $this->model->shop_catalog_id = 12381;
        $this->model->ware_id = 65;
        $this->model->best_before = '2021-06-30';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-03 14:45:43';
        $this->model->modified_at = '2020-09-03 14:45:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 98;
        $this->model->shop_catalog_id = 12382;
        $this->model->ware_id = 59;
        $this->model->best_before = '2021-02-01';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-03 14:45:45';
        $this->model->modified_at = '2020-09-03 14:45:45';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 99;
        $this->model->shop_catalog_id = 12383;
        $this->model->ware_id = 63;
        $this->model->best_before = '2021-03-09';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-03 14:50:57';
        $this->model->modified_at = '2020-09-03 15:05:56';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 100;
        $this->model->shop_catalog_id = 12384;
        $this->model->ware_id = 62;
        $this->model->best_before = '2021-12-31';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-03 15:08:17';
        $this->model->modified_at = '2020-09-03 15:08:17';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 72;
        $this->model->shop_catalog_id = 12385;
        $this->model->ware_id = 61;
        $this->model->best_before = '2025-10-29';
        $this->model->amount = 10199;
        $this->model->created_at = '2020-09-03 09:23:07';
        $this->model->modified_at = '2020-09-04 09:25:56';
        $this->model->created_by = 156;
        $this->model->modified_by = 263;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 101;
        $this->model->shop_catalog_id = 12386;
        $this->model->ware_id = 63;
        $this->model->best_before = '2021-03-03';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-03 15:24:14';
        $this->model->modified_at = '2020-09-03 15:24:14';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 102;
        $this->model->shop_catalog_id = 12387;
        $this->model->ware_id = 63;
        $this->model->best_before = '2021-03-31';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-03 15:24:20';
        $this->model->modified_at = '2020-09-03 15:24:20';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 56;
        $this->model->shop_catalog_id = 12388;
        $this->model->ware_id = 59;
        $this->model->best_before = '2020-09-08';
        $this->model->amount = 4;
        $this->model->created_at = '2020-09-02 17:08:32';
        $this->model->modified_at = '2020-09-03 18:32:38';
        $this->model->created_by = 0;
        $this->model->modified_by = 263;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 76;
        $this->model->shop_catalog_id = 12389;
        $this->model->ware_id = 62;
        $this->model->best_before = '2023-12-22';
        $this->model->amount = 998;
        $this->model->created_at = '2020-09-03 09:54:04';
        $this->model->modified_at = '2020-09-07 16:21:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 161;
        $this->model->shop_catalog_id = 12390;
        $this->model->ware_id = 64;
        $this->model->best_before = '2022-03-31';
        $this->model->amount = 20;
        $this->model->created_at = '2020-09-09 12:54:27';
        $this->model->modified_at = '2020-09-09 12:54:27';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 105;
        $this->model->shop_catalog_id = 12392;
        $this->model->ware_id = 4;
        $this->model->best_before = '2020-09-01';
        $this->model->amount = 4;
        $this->model->created_at = '2020-09-04 10:39:03';
        $this->model->modified_at = '2020-09-04 10:39:03';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 103;
        $this->model->shop_catalog_id = 12393;
        $this->model->ware_id = 6;
        $this->model->best_before = '2020-09-01';
        $this->model->amount = 11;
        $this->model->created_at = '2020-09-04 10:33:22';
        $this->model->modified_at = '2020-09-04 10:41:48';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 104;
        $this->model->shop_catalog_id = 12394;
        $this->model->ware_id = 4;
        $this->model->best_before = '2020-09-02';
        $this->model->amount = 6;
        $this->model->created_at = '2020-09-04 10:36:02';
        $this->model->modified_at = '2020-09-04 10:50:06';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 162;
        $this->model->shop_catalog_id = 12395;
        $this->model->ware_id = 58;
        $this->model->best_before = '2020-10-02';
        $this->model->amount = 10000;
        $this->model->created_at = '2020-09-10 11:45:14';
        $this->model->modified_at = '2020-09-10 11:45:14';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 138;
        $this->model->shop_catalog_id = 12396;
        $this->model->ware_id = 66;
        $this->model->best_before = '2022-08-11';
        $this->model->amount = 2;
        $this->model->created_at = '2020-09-09 12:34:13';
        $this->model->modified_at = '2020-09-10 13:33:17';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 107;
        $this->model->shop_catalog_id = 12397;
        $this->model->ware_id = 6;
        $this->model->best_before = '2020-09-01';
        $this->model->amount = 33;
        $this->model->created_at = '2020-09-04 10:43:30';
        $this->model->modified_at = '2020-09-04 13:17:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 62;
        $this->model->shop_catalog_id = 12399;
        $this->model->ware_id = 58;
        $this->model->best_before = '2020-09-10';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-02 18:13:55';
        $this->model->modified_at = '2020-09-02 18:13:55';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 67;
        $this->model->shop_catalog_id = 12400;
        $this->model->ware_id = 61;
        $this->model->best_before = '2020-10-07';
        $this->model->amount = 17;
        $this->model->created_at = '2020-09-02 18:26:47';
        $this->model->modified_at = '2020-09-11 13:16:26';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 113;
        $this->model->shop_catalog_id = 12222;
        $this->model->ware_id = 61;
        $this->model->best_before = '2022-10-04';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 13:10:36';
        $this->model->modified_at = '2020-09-07 13:10:36';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 114;
        $this->model->shop_catalog_id = 12307;
        $this->model->ware_id = 57;
        $this->model->best_before = '2020-09-30';
        $this->model->amount = 44;
        $this->model->created_at = '2020-09-07 16:08:47';
        $this->model->modified_at = '2020-09-07 16:08:47';
        $this->model->created_by = 348;
        $this->model->modified_by = 348;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 115;
        $this->model->shop_catalog_id = 12308;
        $this->model->ware_id = 59;
        $this->model->best_before = '2021-03-03';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 16:09:26';
        $this->model->modified_at = '2020-09-07 16:09:26';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 116;
        $this->model->shop_catalog_id = 12307;
        $this->model->ware_id = 62;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 16:13:09';
        $this->model->modified_at = '2020-09-07 16:13:09';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 117;
        $this->model->shop_catalog_id = 12309;
        $this->model->ware_id = 67;
        $this->model->best_before = '2021-03-03';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 16:14:51';
        $this->model->modified_at = '2020-09-07 16:14:51';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 118;
        $this->model->shop_catalog_id = 12310;
        $this->model->ware_id = 62;
        $this->model->best_before = '2021-03-03';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 16:15:43';
        $this->model->modified_at = '2020-09-07 16:15:43';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 119;
        $this->model->shop_catalog_id = 12311;
        $this->model->ware_id = 68;
        $this->model->best_before = '2021-04-01';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 16:16:47';
        $this->model->modified_at = '2020-09-07 16:16:47';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 120;
        $this->model->shop_catalog_id = 12312;
        $this->model->ware_id = 67;
        $this->model->best_before = '2021-03-03';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 16:47:59';
        $this->model->modified_at = '2020-09-07 16:47:59';
        $this->model->created_by = 314;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 121;
        $this->model->shop_catalog_id = 12313;
        $this->model->ware_id = 67;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 17:33:27';
        $this->model->modified_at = '2020-09-07 17:34:01';
        $this->model->created_by = 314;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 122;
        $this->model->shop_catalog_id = 12314;
        $this->model->ware_id = 59;
        $this->model->best_before = '2020-09-26';
        $this->model->amount = 2000;
        $this->model->created_at = '2020-09-07 18:03:44';
        $this->model->modified_at = '2020-09-07 18:06:21';
        $this->model->created_by = 314;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 124;
        $this->model->shop_catalog_id = 12314;
        $this->model->ware_id = 59;
        $this->model->best_before = '2020-09-18';
        $this->model->amount = 10000;
        $this->model->created_at = '2020-09-09 10:29:36';
        $this->model->modified_at = '2020-09-09 10:29:36';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 125;
        $this->model->shop_catalog_id = 12315;
        $this->model->ware_id = 61;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-09 11:14:39';
        $this->model->modified_at = '2020-09-09 11:14:39';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 126;
        $this->model->shop_catalog_id = 12316;
        $this->model->ware_id = 64;
        $this->model->best_before = '2022-08-11';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-09 11:15:57';
        $this->model->modified_at = '2020-09-09 11:15:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 127;
        $this->model->shop_catalog_id = 12317;
        $this->model->ware_id = 66;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-09 11:20:38';
        $this->model->modified_at = '2020-09-09 11:20:38';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 128;
        $this->model->shop_catalog_id = 12318;
        $this->model->ware_id = 67;
        $this->model->best_before = '2022-03-31';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-09 11:21:42';
        $this->model->modified_at = '2020-09-09 11:21:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 129;
        $this->model->shop_catalog_id = 12319;
        $this->model->ware_id = 62;
        $this->model->best_before = '2020-11-11';
        $this->model->amount = 3;
        $this->model->created_at = '2020-09-09 12:06:56';
        $this->model->modified_at = '2020-09-09 12:06:56';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 130;
        $this->model->shop_catalog_id = 12320;
        $this->model->ware_id = 63;
        $this->model->best_before = '2020-12-23';
        $this->model->amount = 7;
        $this->model->created_at = '2020-09-09 12:16:21';
        $this->model->modified_at = '2020-09-09 12:16:21';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 131;
        $this->model->shop_catalog_id = 12321;
        $this->model->ware_id = 63;
        $this->model->best_before = '2020-11-03';
        $this->model->amount = 8;
        $this->model->created_at = '2020-09-09 12:18:47';
        $this->model->modified_at = '2020-09-09 12:18:47';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 132;
        $this->model->shop_catalog_id = 12311;
        $this->model->ware_id = 63;
        $this->model->best_before = '2021-02-17';
        $this->model->amount = 20;
        $this->model->created_at = '2020-09-09 12:22:25';
        $this->model->modified_at = '2020-09-09 12:22:25';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 133;
        $this->model->shop_catalog_id = 12322;
        $this->model->ware_id = 67;
        $this->model->best_before = '2022-02-01';
        $this->model->amount = 100;
        $this->model->created_at = '2020-09-09 12:29:04';
        $this->model->modified_at = '2020-09-09 12:29:04';
        $this->model->created_by = 368;
        $this->model->modified_by = 368;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 134;
        $this->model->shop_catalog_id = 12316;
        $this->model->ware_id = 62;
        $this->model->best_before = '2021-07-14';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:30:06';
        $this->model->modified_at = '2020-09-09 12:30:06';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 135;
        $this->model->shop_catalog_id = 12323;
        $this->model->ware_id = 58;
        $this->model->best_before = '2021-12-01';
        $this->model->amount = 50;
        $this->model->created_at = '2020-09-09 12:31:29';
        $this->model->modified_at = '2020-09-09 12:31:29';
        $this->model->created_by = 368;
        $this->model->modified_by = 368;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 136;
        $this->model->shop_catalog_id = 12324;
        $this->model->ware_id = 65;
        $this->model->best_before = '2021-09-09';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:33:04';
        $this->model->modified_at = '2020-09-09 12:33:04';
        $this->model->created_by = 368;
        $this->model->modified_by = 368;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 139;
        $this->model->shop_catalog_id = 12327;
        $this->model->ware_id = 66;
        $this->model->best_before = '2021-04-29';
        $this->model->amount = 1;
        $this->model->created_at = '2020-09-09 12:35:28';
        $this->model->modified_at = '2020-09-09 12:35:28';
        $this->model->created_by = 368;
        $this->model->modified_by = 368;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 140;
        $this->model->shop_catalog_id = 12328;
        $this->model->ware_id = 66;
        $this->model->best_before = '2022-04-07';
        $this->model->amount = 15;
        $this->model->created_at = '2020-09-09 12:35:32';
        $this->model->modified_at = '2020-09-09 12:35:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 154;
        $this->model->shop_catalog_id = 12314;
        $this->model->ware_id = 65;
        $this->model->best_before = '2023-05-07';
        $this->model->amount = 15;
        $this->model->created_at = '2020-09-09 12:47:59';
        $this->model->modified_at = '2020-09-09 12:47:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 155;
        $this->model->shop_catalog_id = 12342;
        $this->model->ware_id = 61;
        $this->model->best_before = '2008-09-10';
        $this->model->amount = 20;
        $this->model->created_at = '2020-09-09 12:48:52';
        $this->model->modified_at = '2020-09-09 12:48:52';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 156;
        $this->model->shop_catalog_id = 12339;
        $this->model->ware_id = 66;
        $this->model->best_before = '2022-04-29';
        $this->model->amount = 20;
        $this->model->created_at = '2020-09-09 12:49:59';
        $this->model->modified_at = '2020-09-09 12:49:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 157;
        $this->model->shop_catalog_id = 12343;
        $this->model->ware_id = 62;
        $this->model->best_before = '2024-06-03';
        $this->model->amount = 20;
        $this->model->created_at = '2020-09-09 12:50:50';
        $this->model->modified_at = '2020-09-09 12:50:50';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 158;
        $this->model->shop_catalog_id = 12314;
        $this->model->ware_id = 65;
        $this->model->best_before = '2021-03-11';
        $this->model->amount = 13;
        $this->model->created_at = '2020-09-09 12:51:56';
        $this->model->modified_at = '2020-09-09 12:51:56';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 159;
        $this->model->shop_catalog_id = 12344;
        $this->model->ware_id = 67;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 20;
        $this->model->created_at = '2020-09-09 12:52:41';
        $this->model->modified_at = '2020-09-09 12:52:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 160;
        $this->model->shop_catalog_id = 12345;
        $this->model->ware_id = 61;
        $this->model->best_before = '2013-01-10';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:53:29';
        $this->model->modified_at = '2020-09-09 12:53:29';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 137;
        $this->model->shop_catalog_id = 12325;
        $this->model->ware_id = 67;
        $this->model->best_before = '2021-02-15';
        $this->model->amount = 1;
        $this->model->created_at = '2020-09-09 12:33:05';
        $this->model->modified_at = '2020-09-10 14:51:17';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 163;
        $this->model->shop_catalog_id = 12347;
        $this->model->ware_id = 61;
        $this->model->best_before = '2021-03-10';
        $this->model->amount = 12;
        $this->model->created_at = '2020-09-10 15:33:46';
        $this->model->modified_at = '2020-09-10 15:33:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 164;
        $this->model->shop_catalog_id = 12347;
        $this->model->ware_id = 61;
        $this->model->best_before = '2022-07-06';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-10 16:22:27';
        $this->model->modified_at = '2020-09-10 16:22:27';
        $this->model->created_by = 348;
        $this->model->modified_by = 348;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 109;
        $this->model->shop_catalog_id = 12401;
        $this->model->ware_id = null;
        $this->model->best_before = '2020-09-10';
        $this->model->amount = 4;
        $this->model->created_at = '2020-09-05 10:46:15';
        $this->model->modified_at = '2020-09-05 10:46:15';
        $this->model->created_by = 357;
        $this->model->modified_by = 357;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 110;
        $this->model->shop_catalog_id = 12402;
        $this->model->ware_id = null;
        $this->model->best_before = '2020-09-08';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-05 10:55:27';
        $this->model->modified_at = '2020-09-05 11:42:41';
        $this->model->created_by = 357;
        $this->model->modified_by = 359;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 108;
        $this->model->shop_catalog_id = 12403;
        $this->model->ware_id = null;
        $this->model->best_before = '2020-09-01';
        $this->model->amount = 5;
        $this->model->created_at = '2020-09-05 10:40:09';
        $this->model->modified_at = '2020-09-05 11:42:41';
        $this->model->created_by = 357;
        $this->model->modified_by = 359;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 111;
        $this->model->shop_catalog_id = 12404;
        $this->model->ware_id = 57;
        $this->model->best_before = '2020-07-30';
        $this->model->amount = 500;
        $this->model->created_at = '2020-09-05 15:06:33';
        $this->model->modified_at = '2020-09-05 15:07:03';
        $this->model->created_by = 314;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 112;
        $this->model->shop_catalog_id = 12405;
        $this->model->ware_id = 61;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 0;
        $this->model->created_at = '2020-09-07 12:53:29';
        $this->model->modified_at = '2020-09-07 12:53:29';
        $this->model->created_by = 315;
        $this->model->modified_by = 315;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 90;
        $this->model->shop_catalog_id = 12222;
        $this->model->ware_id = 59;
        $this->model->best_before = '2020-09-02';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-03 12:03:50';
        $this->model->modified_at = '2020-09-04 18:32:47';
        $this->model->created_by = 0;
        $this->model->modified_by = 314;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 106;
        $this->model->shop_catalog_id = 12229;
        $this->model->ware_id = 6;
        $this->model->best_before = '2020-09-02';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-04 10:40:57';
        $this->model->modified_at = '2020-09-04 10:45:47';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 65;
        $this->model->shop_catalog_id = 12241;
        $this->model->ware_id = 65;
        $this->model->best_before = '2020-09-24';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-02 18:25:43';
        $this->model->modified_at = '2020-09-03 18:41:30';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 165;
        $this->model->shop_catalog_id = 12406;
        $this->model->ware_id = 57;
        $this->model->best_before = '2036-01-10';
        $this->model->amount = 500;
        $this->model->created_at = '2020-09-13 13:54:59';
        $this->model->modified_at = '2020-09-13 13:54:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 141;
        $this->model->shop_catalog_id = 12329;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-01-19';
        $this->model->amount = 16;
        $this->model->created_at = '2020-09-09 12:35:57';
        $this->model->modified_at = '2020-09-09 12:35:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 142;
        $this->model->shop_catalog_id = 12330;
        $this->model->ware_id = 229;
        $this->model->best_before = '2022-08-04';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:37:03';
        $this->model->modified_at = '2020-09-09 12:37:03';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 143;
        $this->model->shop_catalog_id = 12331;
        $this->model->ware_id = 229;
        $this->model->best_before = '2020-10-10';
        $this->model->amount = 200;
        $this->model->created_at = '2020-09-09 12:37:30';
        $this->model->modified_at = '2020-09-09 12:37:30';
        $this->model->created_by = 368;
        $this->model->modified_by = 368;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 144;
        $this->model->shop_catalog_id = 12332;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-03-24';
        $this->model->amount = 18;
        $this->model->created_at = '2020-09-09 12:38:14';
        $this->model->modified_at = '2020-09-09 12:38:14';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 145;
        $this->model->shop_catalog_id = 12333;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-01-12';
        $this->model->amount = 150;
        $this->model->created_at = '2020-09-09 12:39:03';
        $this->model->modified_at = '2020-09-09 12:39:03';
        $this->model->created_by = 368;
        $this->model->modified_by = 368;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 146;
        $this->model->shop_catalog_id = 12334;
        $this->model->ware_id = 229;
        $this->model->best_before = '2022-04-14';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:39:09';
        $this->model->modified_at = '2020-09-09 12:39:09';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 147;
        $this->model->shop_catalog_id = 12335;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-02-22';
        $this->model->amount = 12;
        $this->model->created_at = '2020-09-09 12:39:28';
        $this->model->modified_at = '2020-09-09 12:39:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 148;
        $this->model->shop_catalog_id = 12336;
        $this->model->ware_id = 229;
        $this->model->best_before = '2022-06-07';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:42:40';
        $this->model->modified_at = '2020-09-09 12:42:40';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 149;
        $this->model->shop_catalog_id = 12337;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-06-07';
        $this->model->amount = 16;
        $this->model->created_at = '2020-09-09 12:43:40';
        $this->model->modified_at = '2020-09-09 12:43:40';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 150;
        $this->model->shop_catalog_id = 12338;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-07-06';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:44:43';
        $this->model->modified_at = '2020-09-09 12:44:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 151;
        $this->model->shop_catalog_id = 12339;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-04-07';
        $this->model->amount = 15;
        $this->model->created_at = '2020-09-09 12:45:34';
        $this->model->modified_at = '2020-09-09 12:45:34';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 152;
        $this->model->shop_catalog_id = 12340;
        $this->model->ware_id = 229;
        $this->model->best_before = '2022-03-08';
        $this->model->amount = 16;
        $this->model->created_at = '2020-09-09 12:46:24';
        $this->model->modified_at = '2020-09-09 12:46:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 153;
        $this->model->shop_catalog_id = 12341;
        $this->model->ware_id = 229;
        $this->model->best_before = '2021-07-07';
        $this->model->amount = 10;
        $this->model->created_at = '2020-09-09 12:47:09';
        $this->model->modified_at = '2020-09-09 12:47:09';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 86;
        $this->model->shop_catalog_id = 12366;
        $this->model->ware_id = 67;
        $this->model->best_before = '2025-02-26';
        $this->model->amount = 931;
        $this->model->created_at = '2020-09-03 11:02:56';
        $this->model->modified_at = '2020-09-13 15:58:02';
        $this->model->created_by = 0;
        $this->model->modified_by = 360;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 57;
        $this->model->shop_catalog_id = 12348;
        $this->model->ware_id = 58;
        $this->model->best_before = '2020-10-08';
        $this->model->amount = -5;
        $this->model->created_at = '2020-09-02 17:09:57';
        $this->model->modified_at = '2020-09-16 10:02:22';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 92;
        $this->model->shop_catalog_id = 12374;
        $this->model->ware_id = 59;
        $this->model->best_before = '2025-02-27';
        $this->model->amount = 9980;
        $this->model->created_at = '2020-09-03 12:07:48';
        $this->model->modified_at = '2020-09-17 11:03:30';
        $this->model->created_by = 0;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 166;
        $this->model->shop_catalog_id = 12349;
        $this->model->ware_id = 61;
        $this->model->best_before = '2021-07-13';
        $this->model->amount = 40;
        $this->model->created_at = '2020-09-17 14:24:45';
        $this->model->modified_at = '2020-09-17 14:25:34';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 167;
        $this->model->shop_catalog_id = 12351;
        $this->model->ware_id = 61;
        $this->model->best_before = '2021-07-14';
        $this->model->amount = 30;
        $this->model->created_at = '2020-09-17 14:27:46';
        $this->model->modified_at = '2020-09-17 14:27:46';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 95;
        $this->model->shop_catalog_id = 12378;
        $this->model->ware_id = 59;
        $this->model->best_before = '2025-05-24';
        $this->model->amount = 99980;
        $this->model->created_at = '2020-09-03 14:01:54';
        $this->model->modified_at = '2020-09-17 14:42:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 123;
        $this->model->shop_catalog_id = 12391;
        $this->model->ware_id = 67;
        $this->model->best_before = '2020-09-26';
        $this->model->amount = 2984;
        $this->model->created_at = '2020-09-07 18:06:21';
        $this->model->modified_at = '2020-09-17 18:11:14';
        $this->model->created_by = 314;
        $this->model->modified_by = 426;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 88;
        $this->model->shop_catalog_id = 12398;
        $this->model->ware_id = 63;
        $this->model->best_before = '2025-02-27';
        $this->model->amount = -5;
        $this->model->created_at = '2020-09-03 11:13:54';
        $this->model->modified_at = '2020-09-17 19:41:31';
        $this->model->created_by = 0;
        $this->model->modified_by = 76;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 84;
        $this->model->shop_catalog_id = 12365;
        $this->model->ware_id = 59;
        $this->model->best_before = '2024-11-26';
        $this->model->amount = 99493;
        $this->model->created_at = '2020-09-03 10:49:55';
        $this->model->modified_at = '2020-09-18 18:41:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 406;
        $this->save();


        $this->model = new ShopCatalogWare();

        $this->model->id = 168;
        $this->model->shop_catalog_id = 12351;
        $this->model->ware_id = 62;
        $this->model->best_before = '2020-09-16';
        $this->model->amount = 2;
        $this->model->created_at = '2020-09-18 18:52:01';
        $this->model->modified_at = '2020-09-18 18:52:01';
        $this->model->created_by = 406;
        $this->model->modified_by = 406;
        $this->save();


    }

}
