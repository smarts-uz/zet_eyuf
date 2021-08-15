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

namespace zetsoft\apisys\dyna;


use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;

use zetsoft\system\control\ZCoreTrait;

$post = $this->httpPost();
$ids = $this->httpPost('checkKeys');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

$values = ZArrayHelper::getValue($post, 'value');

$namespace = $this->httpGet('namespace');
$service = $this->httpGet('service');
$method = $this->httpGet('method');

if (!empty($ids)) {

    $file = Az::$app->$namespace->$service->$method($ids);

    foreach ($ids as $id) {
        /** @var ShopOrder $model */
        $model = $modelClass::findOne($id);

        if ($model->weight === null)
            return 'update_button_' . $modelClassName . '_' . $model->id;

        //Az::$app->$namespace->$service->$method($id);
        foreach ($values as $attr => $value) {

            if (ZArrayHelper::keyExists($attr, $model->columns))
                $model->$attr = $value;

        }
        $model->configs->rules = [
            [validatorSafe]
        ];
        $this->paramSet(paramNoEvent, true);
        if (!$model->save())
            return $model->errors();

    }

    $this->urlRedirect('/' . $file, false);
}
