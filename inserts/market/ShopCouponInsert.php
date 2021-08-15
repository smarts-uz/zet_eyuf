<?php

namespace zetsoft\inserts\market;

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
        $this->model->type = 'Good';
        $this->model->price = 100000;
        $this->model->currency = 'Soum';
        $this->model->percent = null;
        $this->model->useful_count = null;
        $this->model->min_price_order = null;
        $this->model->coupon_code = '';
        $this->model->comment = '';
        $this->model->published_at = null;
        $this->model->expired_at = null;
        $this->model->status = '';
        $this->model->shop_category_id = null;
        $this->model->shop_product_id = null;
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
