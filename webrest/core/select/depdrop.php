<?php

namespace zetsoft\apisys\select;

use yii\db\ActiveRecord;
use yii\web\Response;
use zetsoft\system\Az;



$parentParam = 'depdrop_parents';


$otherParam = 'depdrop_params';


$allowEmpty = false;


Az::$app->response->format = Response::FORMAT_JSON;
$request = Az::$app->getRequest();
if (($selected = $request->post($this->parentParam)) && is_array($selected) && (!empty($selected[0]) || $this->allowEmpty)) {
    $params = $request->post($this->otherParam, []);

    $id = $selected[0];
    return ['output' => $this->outputCallback($id), 'selected' => $this->getSelected($id, $params)];
}
return ['output' => '', 'selected' => ''];



function getOutput($id, $params = [])
{
    return $this->parseCallback('outputCallback', $id, $params);
}

function getSelected($id, $params = [])
{
    return $this->parseCallback('selectedCallback', $id, $params);
}

function parseCallback($funcName, $id, $params = [])
{
    if (!isset($funcName)) {
        return '';
    }
    $func = $funcName;
    if (is_callable($func)) {
        return $func($id, $params);
    }
    return '';
}

function outputCallback($selectedId)
{
    $target = Az::$app->request->queryParams['target'];
    $app = $this->catModel($target);

    $sModelName = "\zetsoft\models\\" . $app . "\\" . $target;
    /** @var ActiveRecord $sModelName */
    $parent = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', Az::$app->request->queryParams['parent']));
    $models = $sModelName::find()->where([
        $parent . '_id' => $selectedId
    ])
        ->all();
    $out = [];
    foreach ($models as $model) {
        $out[] = [
            'id' => $model->id,
            'name' => $model->name,
        ];
    }
    return $out;
}



