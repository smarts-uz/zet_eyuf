<?php
/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */



use zetsoft\system\Az;



/*
 * /admin/core-blocked/export.aspx?modelClassName=Document&type=xlsx&ids=2|3|5
 * */

/*
    $model = new EyufScholar();
    $queryss = EyufScholar::find()
        ->where(['not',
            ['status' => 123]
        ])
        ->andWhere(['not',
            ['status' => null]
        ]);*/


$modelClassName = $this->httpGet('modelClassName');
$query = $this->httpGet('query');

if (empty($modelClassName))
    throw new \InvalidArgumentException('modelClassName required', 403);

$modelClass = $this->bootFull($modelClassName);

Az::$app->office->json->modelClass = $modelClass;

Az::$app->office->json->query = $query;
Az::$app->office->json->run();
