<?php
/**
 * @author: AzimjonToirov
 *
 */

/** @var ZView $this */

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use zetsoft\dbitem\data\Form;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\shop\ShopOption;
use zetsoft\models\shop\ShopOptionBranch;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\navigat\ZGAccordionWidget;
use zetsoft\widgets\navigat\ZMarketDropdownWidget;

return Az::$app->market->category->propertiesByCategory($this->httpGet('categoryId'));
