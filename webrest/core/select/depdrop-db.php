<?php

namespace zetsoft\apisys\select;

use yii\web\Response;
use zetsoft\system\Az;




        Az::$app->response->format = Response::FORMAT_JSON;
        $request = Az::$app->getRequest();
        if (($selected = $request->post($this->parentParam)) && is_array($selected) && (!empty($selected[0]) || $this->allowEmpty)) {
            $params = $request->post($this->otherParam, []);

            $id = $selected[0];

            return [
                'output' => Az::$app->select->DepdropDb->outputCallback($id),
                'selected' => Az::$app->select->DepdropDb->getSelected($id, $params)
                ];
        }
        return ['output' => '', 'selected' => ''];

