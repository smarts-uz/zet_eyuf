<?php


/** @var ZView $this */

use zetsoft\system\kernels\ZView;

$modelClassname = $this->httpGet('model');

$data = [
    [
        'id' => '0',
        'text' => 'WEB',
        'children' => [
            [
                'id' => 'uz',
                'text' => 'Uzbekistan'
            ],

            [
                'id' => 'ad',
                'text' => 'Andora'
            ]
        ]

    ],

    [
        'id' => 'ae',
        'text' => 'United Arab Emirates'
    ],

    ['id' => 'af',
        'text' => 'Afganistan'
    ],

    ['id' => 'ag',
        'text' => 'Antigua and Barbuda'
    ],

    [
        'id' => 'ai',
        'text' => 'Anguilla'
    ],

];

$out['results'] = $data;

return $out;

