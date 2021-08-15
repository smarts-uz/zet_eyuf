<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\test\TestDep;

class TestDepInsert extends ZInsert
{

    public function run()
    {

        $this->model = new TestDep();

        $this->model->id = 2;
        $this->model->name = '';
        $this->model->page_module_id = '7';
        $this->model->page_control_id = '472';
        $this->model->page_action_id = '874';
        $this->model->form = [
            'name' => '66',
            'page_action_id' => '2673',
            'page_module_id' => '3',
            'page_control_id' => '478',
        ];
        $this->model->multi = [
            [
                'name' => '11111',
                'page_action_id' => '2651',
                'page_module_id' => '3',
                'page_control_id' => '480',
            ],
            [
                'name' => '22222222',
                'page_action_id' => '2850',
                'page_module_id' => '17',
                'page_control_id' => '263',
            ],
            [
                'name' => '',
                'page_action_id' => '2673',
                'page_module_id' => '3',
                'page_control_id' => '478',
            ],
            [
                'name' => '',
                'page_action_id' => '2866',
                'page_module_id' => '7',
                'page_control_id' => '225',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestDep();

        $this->model->id = 1;
        $this->model->name = '';
        $this->model->page_module_id = '6';
        $this->model->page_control_id = '422';
        $this->model->page_action_id = '732';
        $this->model->form = [
            'name' => '423',
            'page_action_id' => '5057',
            'page_module_id' => '17',
            'page_control_id' => '263',
        ];
        $this->model->multi = [
            [
                'name' => '0000000000000',
                'page_action_id' => '3892',
                'page_module_id' => '2',
                'page_control_id' => '421',
            ],
            [
                'name' => '2229999999999999999',
                'page_action_id' => '5134',
                'page_module_id' => '17',
                'page_control_id' => '263',
            ],
            [
                'name' => '33367777777777777',
                'page_action_id' => '2673',
                'page_module_id' => '3',
                'page_control_id' => '478',
            ],
            [
                'name' => '555555555555555',
                'page_action_id' => '3892',
                'page_module_id' => '2',
                'page_control_id' => '421',
            ],
            [
                'name' => '5666666666666666',
                'page_action_id' => '6014',
                'page_module_id' => '23',
                'page_control_id' => '826',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new TestDep();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->page_module_id = '15';
        $this->model->page_control_id = '262';
        $this->model->page_action_id = '3077';
        $this->model->form = [
            'name' => '888888888888888',
            'page_action_id' => '6016',
            'page_module_id' => '23',
            'page_control_id' => '826',
        ];
        $this->model->multi = [
            [
                'name' => '3656666666666666666',
                'page_action_id' => '2866',
                'page_module_id' => '7',
                'page_control_id' => '225',
            ],
            [
                'name' => 'trrrggggggggg',
                'page_action_id' => '2863',
                'page_module_id' => '7',
                'page_control_id' => '226',
            ],
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
