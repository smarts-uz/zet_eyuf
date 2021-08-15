<?php


?>


<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopElement;
use zetsoft\models\shop\ShopProduct;
use zetsoft\models\ware\WareEnterItem;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\system\module\Models;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZViewWidget;
use zetsoft\models\ware\WareEnter;

/** @var ZView $this */
$modelClassName = $this->httpPost('modelClassName');
$modelName = $this->bootFull($modelClassName);

$shop_element_id = $this->httpGet('shop_element_id');

$shop_element = ShopElement::findOne($shop_element_id);
$shop_product = ShopProduct::findOne($shop_element->shop_product_id);

if ($shop_product) {
    return [
        'output' => $shop_product->measure
    ];
} else {
    vdd();
}
