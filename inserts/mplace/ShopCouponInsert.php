<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCoupon;

class ShopCouponInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCoupon();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Coupon Name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->type = 'one_percent';
        $this->model->price = 108787;
        $this->model->currency = 'EUR';
        $this->model->percent = 15;
        $this->model->useful_count = 1545;
        $this->model->min_price_order = 171;
        $this->model->coupon_code = '25252';
        $this->model->comment = '52537737373';
        $this->model->published_at = '2020-10-04 00:00:00';
        $this->model->expired_at = '2020-10-12 00:00:00';
        $this->model->status = 'used';
        $this->model->shop_category_id = 1634;
        $this->model->shop_product_id = 167;
        $this->save();


    }

}
