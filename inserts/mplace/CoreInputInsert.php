<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreInput;

class CoreInputInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreInput();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = [
            0 => [
                'name' => 'sadfsadf',
            ],
            2 => [
                'name' => 'fsadsafsaf',
            ],
            3 => [
                'name' => '1111111111111111',
            ],
        ];
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = [
            [
                'name' => 'sdafsadsafsadfasd',
                'page_action_id' => '',
                'page_module_id' => '',
                'page_control_id' => '',
            ],
            [
                'name' => '',
                'page_action_id' => '',
                'page_module_id' => '',
                'page_control_id' => '',
            ],
        ];
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = [
            '1',
            '2',
        ];
        $this->model->jsonb_2 = [
            '2',
        ];
        $this->model->jsonb_3 = [
            '2',
        ];
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '1';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = [
            '2021-08-07,2021-10-09',
        ];
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = [
            '2004/01/20,2004/01/24',
        ];
        $this->model->jsonb_5 = [
            'jsonb_5',
        ];
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '2021/08/5|2021/08/13';
        $this->model->string_2 = '2021-03-17';
        $this->model->string_3 = '2021-03-25';
        $this->model->string_4 = '2020-10-06';
        $this->model->string_5 = '2020-10-16';
        $this->model->string_6 = '2021-02-17|2021-03-04';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '02:03 2020/07/24';
        $this->model->text_2 = '03:02 2020/08/28';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = '2020-09-01';
        $this->model->date_2 = '2020-10-21';
        $this->model->date_3 = null;
        $this->model->date_4 = '2023-03-15';
        $this->model->date_5 = '2023-03-30';
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = 'Yunesabad, دهستان حسین آبادجنوبی, بخش حسین آباد, Sanandaj County, Курдистан, Иран';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = [
            'photo_2020-09-05_16-09-10.jpg',
        ];
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = 'on';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = "";
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '';
        $this->model->string_2 = 'asd';
        $this->model->string_3 = '';
        $this->model->string_4 = '';
        $this->model->string_5 = '21-152-32-32';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


        $this->model = new CoreInput();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->jsonb_1 = "";
        $this->model->jsonb_2 = "";
        $this->model->jsonb_3 = "";
        $this->model->jsonb_4 = "";
        $this->model->jsonb_5 = "";
        $this->model->jsonb_6 = "";
        $this->model->jsonb_7 = "";
        $this->model->jsonb_8 = "";
        $this->model->jsonb_9 = [
            [
                'shop_option_branch_id' => '32',
            ],
            [
                'shop_option_branch_id' => '34',
            ],
            [
                'shop_option_branch_id' => '35',
            ],
            [
                'shop_option_branch_id' => '35',
            ],
            [
                'shop_option_branch_id' => '34',
            ],
        ];
        $this->model->jsonb_10 = "";
        $this->model->int_1 = null;
        $this->model->int_2 = null;
        $this->model->int_3 = null;
        $this->model->int_4 = null;
        $this->model->int_5 = null;
        $this->model->int_6 = null;
        $this->model->int_7 = null;
        $this->model->int_8 = null;
        $this->model->int_9 = null;
        $this->model->int_10 = null;
        $this->model->string_1 = '10';
        $this->model->string_2 = '';
        $this->model->string_3 = '';
        $this->model->string_4 = 'fab fa-forumbee';
        $this->model->string_5 = '';
        $this->model->string_6 = '';
        $this->model->string_7 = '';
        $this->model->string_8 = '';
        $this->model->string_9 = '';
        $this->model->string_10 = '';
        $this->model->bool_1 = null;
        $this->model->bool_2 = null;
        $this->model->bool_3 = null;
        $this->model->bool_4 = null;
        $this->model->bool_5 = null;
        $this->model->text_1 = '';
        $this->model->text_2 = '';
        $this->model->text_3 = '';
        $this->model->text_4 = '';
        $this->model->text_5 = '';
        $this->model->date_1 = null;
        $this->model->date_2 = null;
        $this->model->date_3 = null;
        $this->model->date_4 = null;
        $this->model->date_5 = null;
        $this->model->time_1 = null;
        $this->model->time_2 = null;
        $this->model->time_3 = null;
        $this->model->time_4 = null;
        $this->model->time_5 = null;
        $this->save();


    }

}
