<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopProduct;

class ShopProductInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopProduct();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Samsung2';
        $this->model->title = 'Samsung2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->shop_category_id = 101052;
        $this->model->package = '';
        $this->model->shop_option = [
            [
                'shop_option_id' => [
                    '461',
                    '462',
                    '463',
                ],
                'shop_option_type_id' => '440',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Samsung A44';
        $this->model->title = 'Samsung A44';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->shop_category_id = 101028;
        $this->model->package = '';
        $this->model->shop_option = [
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '484',
                    '485',
                    '486',
                ],
                'shop_option_type_id' => '452',
            ],
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '502',
                ],
                'shop_option_type_id' => '470',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'pcs';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Samsung A992';
        $this->model->title = 'Samsung A992';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->shop_category_id = 101053;
        $this->model->package = 'Картонная';
        $this->model->shop_option = [
            [
                'shop_option_id' => [
                    '456',
                ],
                'shop_option_type_id' => '444',
            ],
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '484',
                    '485',
                ],
                'shop_option_type_id' => '452',
            ],
            [
                'shop_option_id' => [
                    '476',
                ],
                'shop_option_type_id' => '449',
            ],
            [
                'shop_option_id' => [
                    '520',
                    '522',
                ],
                'shop_option_type_id' => '483',
            ],
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '468',
                    '469',
                ],
                'shop_option_type_id' => '446',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'pcs';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Samsung';
        $this->model->title = 'Samsung';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 266;
        $this->model->shop_category_id = 101028;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Sam';
        $this->model->title = 'Sam';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = null;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = '2020-12-22 11:33:33';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-12-22 11:33:33';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'sadfsdaffs';
        $this->model->title = 'sadfsdaffs';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->shop_category_id = 101041;
        $this->model->package = '';
        $this->model->shop_option = [
            [
                'shop_option_type_id' => '',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'l';
        $this->model->deleted_at = '2020-12-22 11:33:33';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-12-22 11:33:33';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'TestProduct';
        $this->model->title = 'TestProduct';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = null;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = '2020-12-22 11:33:33';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-12-22 11:33:33';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = null;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = '2020-12-22 11:33:33';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-12-22 11:33:33';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '1111111111';
        $this->model->title = '1111111111';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->user_company_id = 266;
        $this->model->shop_category_id = 101028;
        $this->model->package = '';
        $this->model->shop_option = [
            [
                'shop_option_id' => [
                    '456',
                ],
                'shop_option_type_id' => '444',
            ],
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '484',
                    '485',
                    '486',
                ],
                'shop_option_type_id' => '452',
            ],
            [
                'shop_option_id' => [
                    '514',
                    '515',
                ],
                'shop_option_type_id' => '472',
            ],
            [
                'shop_option_id' => [
                    '503',
                ],
                'shop_option_type_id' => '470',
            ],
            [
                'shop_option_id' => [
                    '501',
                    '499',
                ],
                'shop_option_type_id' => '467',
            ],
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '460',
                    '458',
                ],
                'shop_option_type_id' => '445',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'pcs';
        $this->model->deleted_at = '2020-12-22 11:33:45';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-12-22 11:33:45';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 264;
        $this->model->shop_category_id = null;
        $this->model->package = 'sadfsdaf';
        $this->model->shop_option = [
            [
                'is_combination' => '1',
                'shop_option_id' => [
                    '474',
                ],
                'shop_option_type_id' => '437',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'pcs';
        $this->model->deleted_at = '2020-12-22 11:33:46';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2020-12-22 11:33:46';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 101041;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-12-22 12:57:36';
        $this->model->modified_at = '2020-12-22 12:57:40';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '13131';
        $this->model->title = '13131';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->user_company_id = 267;
        $this->model->shop_category_id = 101042;
        $this->model->package = '1313';
        $this->model->shop_option = [
            [
                'shop_option_type_id' => '440',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 1313;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = 'kg';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-12-22 12:57:49';
        $this->model->modified_at = '2020-12-22 13:00:38';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = null;
        $this->model->package = '';
        $this->model->shop_option = [
            [
                'shop_option_type_id' => '439',
            ],
        ];
        $this->model->text = '';
        $this->model->image = "";
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = null;
        $this->model->size = "";
        $this->model->offer = "";
        $this->model->rating = null;
        $this->model->measure = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-12-22 13:04:45';
        $this->model->modified_at = '2020-12-22 14:17:11';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


    }

}
