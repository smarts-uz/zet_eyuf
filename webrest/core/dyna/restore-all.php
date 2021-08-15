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


use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZAction;


$post = $this->httpPost();
$ids = ZArrayHelper::getValue($post, 'checkKeys');

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);

if (!empty($ids))
    foreach ($ids as $id) {
        $item = $modelClass::findOne($id);
        $item->deleted_at = null;
        $item->deleted_by = null;
        $item->deleted_text = null;
        $item->configs->rules = validatorSafe;
        $item->save();
    }

/*$keys = implode(',', $ids);*/

return $this->urlRedirect($this->urlGetBack(), false);
