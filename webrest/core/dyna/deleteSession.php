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
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
  
$sessionKey = $this->httpGet('sessionKey');
$this->sessionDel($sessionKey);
