<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCategory;

class ShopCategoryInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCategory();

        $this->model->id = 101028;
        $this->model->sort = 101028;
        $this->model->name = 'Смартфоны';
        $this->model->title = 'Смартфоны';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = ' phone_android';
        $this->model->shop_brand_ids = [
            '48',
            '54',
            '56',
            '57',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'shop_option_type_id' => '452',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '445',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '468',
                'shop_option_branch_id' => '134',
            ],
            [
                'shop_option_type_id' => '467',
                'shop_option_branch_id' => '134',
            ],
            [
                'shop_option_type_id' => '466',
                'shop_option_branch_id' => '134',
            ],
            [
                'shop_option_type_id' => '472',
                'shop_option_branch_id' => '136',
            ],
            [
                'shop_option_type_id' => '470',
                'shop_option_branch_id' => '136',
            ],
            [
                'shop_option_type_id' => '471',
                'shop_option_branch_id' => '136',
            ],
            [
                'shop_option_type_id' => '465',
                'shop_option_branch_id' => '131',
            ],
            [
                'shop_option_type_id' => '447',
                'shop_option_branch_id' => '131',
            ],
            [
                'shop_option_type_id' => '473',
                'shop_option_branch_id' => '140',
            ],
            [
                'shop_option_type_id' => '475',
                'shop_option_branch_id' => '140',
            ],
        ];
        $this->model->shop_category_id = 101042;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat2.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:55:03';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101058;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-16 12:30:30';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-04 12:20:31';
        $this->model->modified_at = '2021-01-04 12:20:31';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101031;
        $this->model->sort = 101031;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'speaker';
        $this->model->shop_brand_ids = [
            '54',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = 101038;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-18 13:40:53';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-18 13:40:52';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101029;
        $this->model->sort = 101029;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'camera_alt';
        $this->model->shop_brand_ids = [
            '54',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = 101038;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-18 13:40:53';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-18 13:40:13';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101059;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '464',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_branch_id' => '117',
            ],
        ];
        $this->model->shop_category_id = 101038;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-16 12:30:30';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-04 12:39:59';
        $this->model->modified_at = '2021-01-16 12:30:29';
        $this->model->created_by = 0;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101041;
        $this->model->sort = 101041;
        $this->model->name = 'Xolodilnik';
        $this->model->title = 'Xolodilnik';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '51',
            '56',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '',
                'shop_option_branch_id' => '',
            ],
        ];
        $this->model->shop_category_id = 101046;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-18 13:57:48';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-18 13:57:48';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101063;
        $this->model->sort = null;
        $this->model->name = 'Компьютерная техника';
        $this->model->title = 'Компьютерная техника';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '47',
            '48',
            '49',
            '52',
            '53',
            '54',
            '55',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '448',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '449',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '462',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '464',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '459',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '458',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '460',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '461',
                'shop_option_branch_id' => '130',
            ],
        ];
        $this->model->shop_category_id = 101046;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2021-01-16 14:09:31';
        $this->model->modified_at = '2021-01-21 09:44:42';
        $this->model->created_by = 409;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101039;
        $this->model->sort = 101039;
        $this->model->name = 'Бытовая техника';
        $this->model->title = 'Бытовая техника';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'devices';
        $this->model->shop_brand_ids = [
            '51',
            '56',
        ];
        $this->model->shop_review_option_ids = [
            '2',
        ];
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '',
                'shop_option_branch_id' => '',
            ],
        ];
        $this->model->shop_category_id = 101046;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat2.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:49:26';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101052;
        $this->model->sort = null;
        $this->model->name = 'Телефоны2';
        $this->model->title = 'Телефоны2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '10',
            '37',
            '46',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'shop_option_type_id' => '464',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '440',
                'shop_option_branch_id' => '116',
            ],
            [
                'shop_option_type_id' => '465',
                'shop_option_branch_id' => '131',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-18 13:36:51';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-18 13:36:50';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101046;
        $this->model->sort = 101046;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'is_combination' => '0',
                'shop_option_type_id' => '450',
                'shop_option_branch_id' => '130',
            ],
            [
                'is_combination' => '0',
                'shop_option_type_id' => '450',
                'shop_option_branch_id' => '130',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat2.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:52:28';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101045;
        $this->model->sort = 101045;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'switch_video';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat3.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:52:39';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101044;
        $this->model->sort = 101044;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'linked_camera';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:52:47';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101043;
        $this->model->sort = 101043;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'stay_current_portrait';
        $this->model->shop_brand_ids = [
            '10',
            '11',
            '37',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = 101038;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat2.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:52:55';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101042;
        $this->model->sort = 101042;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'app_settings_alt';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat3.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:53:01';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101040;
        $this->model->sort = 101040;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '51',
            '56',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = 101046;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:53:13';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101038;
        $this->model->sort = 101038;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'volume_mute';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat3.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:53:20';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101036;
        $this->model->sort = 101036;
        $this->model->name = 'Аудио и видео техника	';
        $this->model->title = 'Аудио и видео техника	';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'audiotrack';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = 101038;
        $this->model->shop_banner_id = null;
        $this->model->image = [
            'cat.webp',
        ];
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-21 09:53:28';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101053;
        $this->model->sort = null;
        $this->model->name = 'Смартфон 2';
        $this->model->title = 'Смартфон 2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '11',
            '37',
            '46',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '464',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '462',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '463',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '449',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'shop_option_type_id' => '452',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '438',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '437',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '476',
                'shop_option_branch_id' => '139',
            ],
            [
                'shop_option_type_id' => '477',
                'shop_option_branch_id' => '139',
            ],
            [
                'shop_option_type_id' => '460',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '483',
                'shop_option_branch_id' => '141',
            ],
            [
                'shop_option_type_id' => '459',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '446',
            ],
            [
                'shop_option_type_id' => '457',
            ],
            [
                'shop_option_type_id' => '445',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->shop_banner_id = null;
        $this->model->image = "";
        $this->model->deleted_at = '2021-01-18 13:36:27';
        $this->model->deleted_by = 409;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '2021-01-18 13:36:26';
        $this->model->created_by = null;
        $this->model->modified_by = 409;
        $this->save();


    }

}
