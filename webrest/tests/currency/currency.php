<?php


/**
 *
 * Action Params
 */

use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\core\RestItem;
use zetsoft\system\control\ZControlRest;

$action = new RestItem();

$action->auth = true;
$action->authType = ZControlRest::authType['basicParam'];

$this->paramSet(paramAction, $action);


return [
'TEST' => [1,2,3,4,5]
];
