<?php

use rmrevin\yii\fontawesome\FAL;
use yii\caching\TagDependency;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\FormDb;
use zetsoft\dbitem\data\TabItem;
use zetsoft\former\auth\AuthRegisterForm;
use zetsoft\former\shop\ShopProductItemForm;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\models\faqs\Faqs;
use zetsoft\models\shop\ShopReview;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;

use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\cards\ZAzCardWidget;

use zetsoft\widgets\former\ZAccardionWidget;
use zetsoft\widgets\former\ZDynaWidgetPop;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZListViewWidget;
use zetsoft\widgets\incores\ZFaqAccordionWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZReviewInput2Widget;
use zetsoft\widgets\inputes\ZReviewInputWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;
use zetsoft\widgets\market\ZFooterAllWidgetOrg;
use zetsoft\widgets\market\ZMenuWidgetAbdulloh;
use zetsoft\widgets\market\ZMSwiperDbWidget;
use zetsoft\widgets\market\ZMSwiperWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\navigat\ZAAccordionWidget;
use zetsoft\widgets\navigat\ZAccLayWidget;
use zetsoft\widgets\navigat\ZAccLayWidget3;
use zetsoft\widgets\navigat\ZAccLayWidgetNew;
use zetsoft\widgets\navigat\ZAccLayWidgetTest;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidget;
use zetsoft\widgets\navigat\ZMarketDropdownWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZTabWidget;


$userId =$this->userIdentity()->id;




$item = ShopReview::findOne($reviewId);

if (!isset($item)) {
    $item = new ShopReview();
    $item->id = 1;
    $item->code = 4545;
    $item->type = 'asd';
    $item->shop_brand_id = 1;
    $item->shop_product_id = 4;
    $item->user_company_id = 4;
    $item->rating = 4.25;
    $item->parent_id = 'adasdas';
    $item->rating_option = json_encode('{"hey": 5},{"fix": 4}');
    $item->text = 'kajshdkjashdkaj';
    $item->virtues = 'asdas';
    $item->drawbacks = 'asdaskd';
    $item->experience = 'asdkjas';
    $item->recommend = true;
    $item->anonymous = true;
    $item->like = 45;
    $item->dislike = 45;
    $item->photo = null;
    $item->user_id = 1;
    $item->created_at = '2020-06-09 15:58:42';
    $item->modified_at = '2020-06-09 15:58:42';
}

$user = User::findOne($item->user_id);

$model = new ShopReview();

$model->columns['rating_option']->data = $item->rating_option;
$model->configs->replace = [
    'rating_option' => function (FormDb $column) use($item) {

        $column->title = Az::l('Рейтинг');
        $column->dbType = dbTypeJsonb;
        $column->widget = ZReviewInput2Widget::class;
        $column->options = [
                'data'=> $item->rating_option
        ];
        $column->filterWidget = ZReviewInput2Widget::class;
        $column->pageSummary = false;

        return $column;
    },
];

if ($this->modelSave($model)) {
  $model->user_id = $userId;
  

    $model->type = 'company';
    $model->shop_product_id = $item->shop_product_id;

    $model->rating = $item->rating;
    $model->columns['rating']->title = 'Общий рейтинг';
    $model->parent_id = $reviewId;
    //  $model->user_id = $userId;
    //$model->text = 'qwe';
    $model->like = 0;
    $model->dislike = 0;
    $model->save();
}


?>



    <?php

    echo $this->require( '\render\market\ZCommentWidget\clean\reviewJavohir.php', [
            'item' => $item,
            'user' => $user,
        ]);

    $form = $this->activeBegin();

        echo Az::l('Общая оценка :');

        $model->configs->nameOn =[
              'rating',
        ];
        $model->columns();

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ],
            'event' => [
                'formChange' => <<<JS
                function(event) {
                 
                     $(this).submit()
                  //   $('#form-modal').modal('hide');
                } 
             JS,
            ]
        ]);


    //    echo Az::l('Опыт использования :');

        $model->configs->nameOn =[
            'experience',
        ];
        $model->columns();

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ],
        ]);


    ?>
    <div class="row">
        <div class="col-md-6 border-right">
        <?php

        echo Az::l('Оценки по параметрам :');

        $model->configs->nameOn =[
            'rating_option',
        ];
        $model->columns();

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ],
        ]);


        ?>
        </div>
        <div class="col-md-6">
            <?php

            echo Az::l('Обшие параметры :');
            $model->configs->nameOn =[
                /*'rating',
                'experience',
                'rating_option',
                'text',*/
                'anonymous',
                'recommend',
            ];
            $model->columns();

            echo ZFormWidget::widget([
                'model' => $model,
                'form' => $form,
                'config' => [
                    'topBtn' => false,
                    'botBtn' => false,
                ],
            ]);


            ?>
        </div>
    </div>
     <?php

         $model->configs->nameOn =[
             'virtues',
             'drawbacks',
         ];
         $model->columns();

         echo ZFormWidget::widget([
             'model' => $model,
             'form' => $form,
             'config' => [
                 'topBtn' => false,
                 'botBtn' => false,
             ],
         ]);

         echo Az::l('Коммент:');

         $model->configs->nameOn =[
             'text'
         ];
         $model->columns();

         echo ZFormWidget::widget([
             'model' => $model,
             'form' => $form,
             'config' => [
                 'topBtn' => false,
                 'botBtn' => false,
             ],
         ]);

         

        $this->activeEnd();
        //return $this->urlRedirect(['/shop/user/review/review','id'=>$reviewId]);
        ?>

<style>
    .cke_contents{
        height :60%!important;
    }
    .file-drop-zone-title{padding: 10px!important;}
    .kv-fileinput-caption{
        margin-top: 0.8rem;
    }
    .input-group-append{
        margin: 0!important;
        padding: 0!important;
    }
</style>





