<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaDynagrid;

class DynaDynagridInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaDynagrid();

        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->id = 0;
        $this->model->filter_id = null;
        $this->model->sort_id = null;
        $this->model->data = '{\\\"page\\\":\\\"300\\\",\\\"theme\\\":\\\"panel-info\\\",\\\"keys\\\":[\\\"2df35d79\\\",\\\"e04112b1\\\",\\\"fc0227ba\\\",\\\"61999f22\\\",\\\"16cfc86b\\\",\\\"6dc71a41\\\",\\\"ecc4e499\\\",\\\"9348e592\\\",\\\"87c8c747\\\",\\\"f6516a2f\\\",\\\"aee8e2bc\\\",\\\"79158bbf\\\",\\\"1fa83a3a\\\",\\\"2d8b015b\\\",\\\"bb3ad563\\\",\\\"9dd649f0\\\",\\\"3c611d99\\\",\\\"b03fa0c1\\\",\\\"7277d9bb\\\",\\\"02769ddf\\\",\\\"148fc3ce\\\",\\\"8784adff\\\",\\\"285a6928\\\",\\\"5498e52d\\\",\\\"8f208261\\\",\\\"ba32f585\\\",\\\"3345331c\\\",\\\"94fd4b9a\\\",\\\"b2981062\\\",\\\"6cd39033\\\",\\\"b9f2d6c4\\\",\\\"a278d8af\\\",\\\"db9de7b6\\\",\\\"6110023a\\\",\\\"d03b3302\\\",\\\"095061bf\\\",\\\"6fbc150f\\\",\\\"2ba808d2\\\",\\\"2c6b9e8b\\\",\\\"43bba381\\\",\\\"e987d8a8\\\",\\\"96182b48\\\",\\\"f3234d01\\\",\\\"f9082c55\\\",\\\"9a4a2ba4\\\",\\\"8c711999\\\",\\\"020198bf\\\",\\\"b949ad05\\\",\\\"9441d9e6\\\",\\\"48203be9\\\",\\\"c4425527\\\",\\\"711f315a\\\",\\\"d0cff2b6\\\",\\\"923ccd12\\\",\\\"f98c378a\\\",\\\"7328892a\\\",\\\"be331653\\\",\\\"f85666fd\\\",\\\"f88f40be\\\",\\\"97dc4cb2\\\",\\\"92daa30a\\\",\\\"912bb63f\\\",\\\"92038549\\\",\\\"91f2907c\\\"],\\\"filter\\\":null,\\\"sort\\\":\\\"\\\"}';
        $this->save();


    }

}
