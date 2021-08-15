<?php

namespace zetsoft\apisys\select;

use Yii;
use Closure;
use yii\base\Action;
use yii\db\ActiveRecord;
use yii\web\Response;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageModule;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\kernels\ZAction;


    $query = null;
    $selected_id = null;

        Az::$app->response->format = Response::FORMAT_JSON;

        if(isset(Az::$app->request->queryParams['q']))
            $this->query = Az::$app->request->queryParams['q'];
        if(isset(Az::$app->request->queryParams['id']))
            $this->selected_id = Az::$app->request->queryParams['id'];

        $out = ['results' => ['id' => '', 'text' => '']];

        if (!is_null($this->query)) {
            $data = PageModule::find()
                ->select(["id", "name"])
                ->from(PageModule::tableName(). ' cm')
                ->where(['like', 'cm.name', $this->query])
                ->all();

            $out["results"] = [];
            foreach ($data as $d){
                $res = [
                    "id" => $d->id,
                    "text" => $d->name,
                ];
                array_push($out['results'], $res);
            }
        }
        elseif ($this->selected_id > 0) {
            return "";
//            $out['results'] = ['id' => $id, 'text' => School::find($id)->name];
        }
        return $out;

