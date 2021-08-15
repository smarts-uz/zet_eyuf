<?php


use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;


$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');
$namespace = $this->httpGet('namespace');
$service = $this->httpGet('service');
$method = $this->httpGet('method');

$attr = $this->httpGet('attribute');
$val = $this->httpGet('value');

 vd(sdaf);

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);


$file = Az::$app->$namespace->$service->$method($ids);

if (!empty($ids)) {
    foreach ($ids as $id) {
        /** @var ZModel $model */
        $model = $modelClass::findOne($id);

        if (ZArrayHelper::keyExists($attr, $model->columns))
            $model->$attr = $val;


        $model->configs->rules = [
            [validatorSafe]
        ];
        $this->paramSet(paramNoEvent, true);
        if (!$model->save())
            return $model->errors();
    }
}


$this->urlRedirect('/' . $file, false);



