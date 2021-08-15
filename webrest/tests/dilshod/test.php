<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
//return 1;
$model = ShopCategory::find()->where([
    'id' => 2522
])->one();
return [
    Az::$app->language,
    $model->name
    ];
