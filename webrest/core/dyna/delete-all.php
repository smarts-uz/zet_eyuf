<?php

namespace zetsoft\apisys\dyna;

use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\kernels\ZView;

$post = $this->httpPost();
$ids = $this->httpPost('checkKeys');
     
$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);
if (!empty($ids))
    foreach ($ids as $id) {
        /** @var ZActiveRecord $item */
        $item = $modelClass::findOne($id);
        $item->configs->showDeleted = $this->httpGet('isTrash')/*ZArrayHelper::getValue($post, 'value')*/;
        $item->columns();
        
        if ($item->isAddColumn('Del') && !$item->configs->showDeleted ) {
            $item->deleted_text = ZArrayHelper::getValue($post, 'comment');
            $item->configs->rules = [[validatorSafe]];
            $item->save();
        }

        $item->delete();

    }

$keys = implode(',', $ids);
$this->notifySuccess('Данные успешно удалены!', $keys);

/** @var ZView $this */
return $this->urlRedirect($this->urlGetBack(), true);

