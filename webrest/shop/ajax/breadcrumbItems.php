<?php
/**
 * @author AzimjonToirov
 *
 *
 */

use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\models\menu\Menu;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\navigat\ZBreadcrumbsWidget;
use function Dash\count;

/** @var ZView $this */
$categoryId = $this->httpGet('categoryId');

return Az::$app->market->breadcrumb->breadcrumbItems($categoryId);
