<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;



/** @var ZView $this */

/**
 *
 * Action Params
 */


            
$action = new WebItem();
$action->title = Azl . Az::l('create');
$action->icon = 'fal fa-calendar-edit';
$action->type = WebItem::type['html'];
$action->csrf = 1;
$action->cache = false;
$action->toolbar = false;
$action->debug = false;
$action->call = null;
$action->cacheHttp = false;

/**@var ZView $this*/

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();



/**
 *
 * Start Page
 */


$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    
<style>
</style>

    <?php

    require Root . '/webhtm/block/metas/main.php';
    require Root . '/webhtm/block/assets/main.php';

    $this->head();

    ?>

</head>


<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

echo ZNProgressWidget::widget([]);

?>





<?php


$model = $this->modelGet('zetsoft\models\core\CoreInput');        
        
echo zetsoft\widgets\inputes\ZKSelect2Widget::widget([
    'model' => $model,
    'id' => 'ZKSelect2Widget_453446',
    'attribute' => 'string_2',
    'config' => [
        'placeholder' => 'Add your location',
    ],
]); 





$model = $this->modelGet('zetsoft\models\core\CoreInput');        
        
echo zetsoft\widgets\inputes\ZKSelect2Widget::widget([
    'model' => $model,
    'id' => 'ZKSelect2Widget_307034',
    'attribute' => 'string_2',
    'config' => [
        'placeholder' => 'Add your location',
    ],
]); 


?>





<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
