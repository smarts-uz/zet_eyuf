<?php
/** @var ZView $this */

use Illuminate\Support\Collection;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopProduct;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\incores\ZDynaCheckboxWidget;

$action = new WebItem();

$action->title = Azl . 'Веб-действия';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$requireUrl = $this->httpGet('requireUrl');
$pageGet = $this->httpGet('page');
$limitGet = $this->httpGet('limit');
$isTest = $this->httpGet('test');
$isCommon = $this->httpGet('isCommon');
$isAjax = $this->httpGet('ajax');
$pager = $this->httpGet('pager');
$namespace = $this->httpGet('namespace');
$service = $this->httpGet('service');
$method = $this->httpGet('method');

$arguments = explode('|', $this->httpGet('args'));

$category_id = ZArrayHelper::getValue($arguments, 0);
$company_id = ZArrayHelper::getValue($arguments, 1);
$page = ZArrayHelper::getValue($arguments, 2);
$limit = ZArrayHelper::getValue($arguments, 3);
$sort = ZArrayHelper::getValue($arguments, 4);
$brand_id = ZArrayHelper::getValue($arguments, 5);

$args1 = [$category_id, $company_id, $page, $limit, $sort, $brand_id];

$items = Az::$app->$namespace->$service->$method(...$args1);

$html = '';
foreach ($items as $item) {
    $html .= $this->require( $requireUrl, [
        'item' => $item,
    ]);
}

echo $this->requireHtmAjax($html);
