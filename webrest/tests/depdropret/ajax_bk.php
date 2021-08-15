<?php

use zetsoft\system\Az;

$select = Yii::$app->request->post("depdrop_parents");

$selected_id = $select[0];

$out = [];

if(isset($selected_id)){
    $controls = \zetsoft\models\page\PageControl::find()
        ->select(['id', 'name'])
        ->where(['page_module_id' => $selected_id])
        ->all();

    $out = Az::$app->inputs->depDrops->getData($controls);
}


return [
    'output' => $out,
];
