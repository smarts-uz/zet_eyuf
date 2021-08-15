<?php

use zetsoft\system\Az;

$select = Yii::$app->request->post("depdrop_parents");
$selected_id = $select[0];

$out = [];
if(isset($selected_id)) {
    $controls = \zetsoft\models\page\PageAction::find()
        ->where(['page_control_id' => $selected_id])
        ->one()
        ->attributes;
    $out = Az::$app->inputs->depDrops->getDbData($controls);
}
return [
    'output' => $out,
];
