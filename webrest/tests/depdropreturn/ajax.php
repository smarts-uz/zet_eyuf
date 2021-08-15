<?php

$items = [
    "parent_1" => [
        [
            "id" => 1,
            'name' => 'PaElectronics parent_1_1',
        ],
        [
            "id" => 2,
            'name' => 'Books parent_1_2',
        ],
        [
            "id" => 3,
            'name' => 'Home & Kitchen parent_1_3',
        ],
    ],
    "parent_2" => [
        [
            "id" => 1,
            'name' => 'PaElectronics parent_2_1',
        ],
        [
            "id" => 2,
            'name' => 'Books parent_2_2',
        ],
        [
            "id" => 3,
            'name' => 'Home & Kitchen parent_2_3',
        ],
    ],
    "parent_3" => [
        [
            "id" => 2,
            'name' => 'PaElectronics parent_3_1',
        ],
        [
            "id" => 2,
            'name' => 'Books parent_3_2',
        ],
        [
            "id" => 3,
            'name' => 'Home & Kitchen parent_3_3',
        ],
    ]
];
$select = Yii::$app->request->post("depdrop_parents");
$selected_id = $select[0];
return [
    'output' => $items["parent_" . $selected_id]
];
