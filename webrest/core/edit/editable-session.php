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

namespace zetsoft\apisys\edit;


use Yii;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZAction;
use zetsoft\system\module\Models;


/** @var ZActiveRecord $modelClass */
/** @var Models $model */


$post = $this->httpPost();


if ($this->httpPost('hasEdit')) {

    $attribute = $this->httpPost('name');


    $value = $this->httpGet($attribute);


    $this->sessionSet($attribute, $value);

    if (is_array($value))
        $value = ZVarDumper::beauty($value);


    return ['output' => $value];
    vdd($value);


}

if ($post['hasEditable']) {
    $attribute = $this->httpGet('name');


    $value = $this->httpPost($attribute);


    $this->sessionSet($attribute, $value);

    if (is_array($value))
        $value = ZVarDumper::beauty($value);


    return ['output' => $value];
}
