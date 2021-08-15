<?php


?>



<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZViewWidget;

use ZFullClassName;


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->type = WebItem::type['ajax'];
$action->csrf = true;
$action->debug = false;



$this->paramSet(paramAction, $action);


?>
<div class="row">
    <div class="col-md-12">

        <?

        $id = $this->httpPost('expandRowKey');
        $model = ZClassName::findOne($id);

        echo ZViewWidget::widget([
            'model' => $model,
        ]);
        ?>

    </div>
</div>



