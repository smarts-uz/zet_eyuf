<?php

use kartik\form\ActiveForm;
use zetsoft\dbdata\ALL\RoleData;
use zetsoft\models\page\PageAction;
use zetsoft\models\menu\Menu;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\helpers\ZJsonHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2WidgetOLD;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


$this->fileCss('https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.css');
$this->fileCss('https://cdn.jsdelivr.net/npm/bootstrap-iconpicker@1.8.2/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css');

$this->fileJs('https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js');
$this->fileJs('https://cdn.jsdelivr.net/npm/jquery-sortable-lists@1.4.0/jquery-sortable-lists.js');
$this->fileJs('https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js');
$this->fileJs('https://cdn.jsdelivr.net/npm/bootstrap-iconpicker@1.8.2/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js');
$this->fileJs('https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js');


/** @var ZView $this */
$id = $this->httpGet('id');

if (empty($id))
    return $this->alertDanger( $this->httpGet(), 'Please put an ID');

$model = Menu::findOne($id);
$json = Az::$app->App->shop->json->run($model);

$actions = PageAction::find()
    ->select([
        'id',
        'icon',
        'title',
        'data',
    ])
    ->all();


if (Az::$app->request->isPost && $model->load(Az::$app->request->post())) {

    $model->json = json_decode($model->json);

    if ($model->save())
        Az::$app->controller->refresh();
}


$titles = ZArrayHelper::map($actions, 'id', 'title');
$datas = ZArrayHelper::map($actions, 'id', 'data');
$icons = ZArrayHelper::map($actions, 'id', 'icon');
$iconsJS = ZJsonHelper::encode($icons);
require Root . '/webhtm/core/menu/blocks/cssStyles.php';

?>

<div class="row">

    <!--    left card  -->
    <div class="col-md-6">
        <?
        ZCardWidget::begin([
            'config' => [
                'title' => 'Меню ' . $model->name . $model->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);
        ?>

        <ul id="myEditor" class="sortableLists list-group">
        </ul>

        <?

        ZCardWidget::end();
        ?>
        <button id="btnOutput" style="visibility: hidden" class="btn"></button>

    </div><!--    left card end -->

    <input id="text1" type="hidden">
    <input id="text2" type="hidden">
    <input id="actionName" type="hidden">
    <input id="paramVal" type="hidden">


    <!--    right card  -->
    <div class="col-md-6">
        <?
        ZCardWidget::begin([
            'config' => [
                'title' => 'Изменить элемент',
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);
        $form = ActiveForm::begin(['id' => 'frmEdit']) ?>

        <div>
            <div class="form-group" style="display: flex;width: 100%; margin-top: 20px; margin-right:20px;">

                <label for="action"></label>
                <input type="hidden" class="form-control item-menu" id="action" name="action"
                       placeholder="action...">
                <div>
                    <?
                    echo ZButtonWidget::widget([
                        'id' => 'ac_btn',
                        'config' => [
                            'btnType' => ZButtonWidget::btnType['button'],
                            'btnRounded' => false,
                            'btnFloating' => false,
                            'icon' => 'far fa-copy',
                            'iconSize' => ZButtonWidget::iconSize['1x'],
                            'hasIcon' => true,
                            'btnSize' => ZButtonWidget::btnSize['btn-sm'],
                            'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
                        ],
                    ]);
                    ?>
                </div>
              <!-- <select class="js-example-programmatic " style="width:50%;" name="action" id="vall">
                    <option></option>
                    <?/*

                    foreach ($datas as $key => $action):
                        */?>
                        <option value="<?/*= $key */?>"><?/*= $action */?></option>
                    <?/*
                    endforeach;

                    */?>
                </select>-->

                <?

                echo ZSelect2WidgetOLD::widget([
                    'id' => 'vall',
                    'options' => [
                        'data' => $datas,
                        'config' => [
                            'class' => 'js-example-programmatic w-50',
                        ]
                    ],

                ])

                ?>


                <label for="param" style="margin-right: 10px; margin-left: 5px;"></label>
                <i class="fas fa-cubes iconn"></i>
                <input type="text" class="form-control item-menu"
                       style="width:45%;height: 35px; margin-right: 20px !important;" id="param" name="param"
                       placeholder="Параметр">

            </div>
        </div>


        <div>
            <div class="form-group" style="margin-left:2px;">
                <label for="text"></label>
                <div class="input-group">
                    <div>
                        <button type="button" class="btn btn-sm btn-primary" id="bta"><i class="far fa-copy"></i>
                        </button>
                    </div>

                    <select style="width:43%; margin-top: 20px !important;" id="text_vall">
                        <option></option>
                        <?


                        foreach ($titles as $key => $action):
                            ?>

                            <option value="<?= $key ?>"><?= $action ?></option>

                        <?
                        endforeach;
                        ?>
                    </select>

                    <i id="ico"></i><input type="text"
                                           style="height: 35px !important; margin-left: 20px; width: 35%; border: 0; border-bottom: 1px solid gray;"
                                           id="icon_value">
                </div>
            </div>
        </div>

        <input type="hidden" id="text_value" name="text_value">
        <input type="hidden" id="action_value" name="action_value">

        <?
        require Root . '/webhtm/core/menu/blocks/styles.php';
        ?>


        <div class="form-group d-flex ml-2">
            <label for="target"></label>
            <input type="hidden" class="form-control item-menu" id="target" name="target"
                   placeholder="target...">
            <i class="fas fa-bullseye iconn"></i>
            <select name="target" id="val__tar" class="js-example-programmatic-2" style="width:90%;">
                <option></option>
                <option value="_self">Self</option>
                <option value="_blank">Blank</option>
                <option value="_top">Top</option>
            </select>
        </div>

        <div class="form-group d-flex ml-2">
            <label for="role"></label>
            <input type="hidden" class="form-control item-menu" id="role" name="role" placeholder="role...">
            <i class="fas fa-eye iconn"></i>
            <select name="role" id="val__vis" multiple class="js-example-programmatic-3" style="width:90%;">
                <?
                $roles = (new RoleData)->lang();

                foreach ($roles as $key => $value) :
                    ?>

                    <option value="<?= $key ?>"><?= $value ?></option>
                <?
                endforeach;
                ?>
            </select>
        </div>

        <? ActiveForm::end() ?>
    </div><!--card body end-->

    <div class="card-footer d-flex col-lg-12" style="padding:1.75rem !important;">
        <div class="btn-group">
            <button type="button" id="btnUpdate" title="Обновить" class="btn btn-rounded  btn-outline-success" disabled
                    style="" aria-label="tooltip">
                <i class="fas fa-sync-alt ft"></i>
            </button>
            <?php
            $form = ActiveForm::begin(['id' => 'menuform']);


            echo $form->field($model, 'json')->hiddenInput(['value' => $json])->label(false);

            echo ZHTML::submitButton('<i class="fas fa-save ft"></i>', ['class' => 'btn btn-outline-primary', 'title' => 'Сохранить', 'id' => 'valueIc']);

            ActiveForm::end();

            ?>
            <button type="button" class="btn btn-rounded btn-outline-dark" title="Добавить" style=""
                    id="btnAdd"><i class="fas fa-plus ft"></i>
            </button>
        </div>
        <div class="ml-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-rounded btn-outline-danger" title="Удалить меню"
                        id="delMen">
                    <i class="far fa-trash-alt ft"></i>
                </button>
                <button type="button" class="btn btn-rounded btn-outline-primary" title="Примерное меню"
                        id="setDat">
                    <i class="fas fa-code"></i>
                </button>

            </div>
        </div>
    </div>

    <div class="form-group" style="visibility: hidden; overflow:scroll;">
        <textarea id="out" class="form-control" cols="1" rows="1"></textarea>
    </div>

    <?
    ZCardWidget::end();
    ?><!--card end-->
</div>


<?php


$titles = ZArrayHelper::map($actions, 'id', 'title');
$action = ZArrayHelper::map($actions, 'id', 'data');
$icons = ZArrayHelper::map($actions, 'id', 'icon');

$titleJS = ZJsonHelper::encode($titles);
$iconJS = ZJsonHelper::encode($icons);
$actionJS = ZJsonHelper::encode($action);

$menutable = 'coremenu';


$jsCode = <<<JS

jQuery(document).ready(function () {

    var titles = {titles};
    var icons = {icons};
    var actions = {action};
    var json = '{json}';
    var texts = '{texts}';
    var t_val = '';
    var ac_val = '';
    
        var icon = $('#myEditor_icon').children()[0];
        var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};

        var sortableListOptions = {
            placeholderCss: {'background-color': "#cccccc"}
        };
        
        var arrayjson = [
   {
      "icon":"fa fa-line-chart",
      "role":"user",
      "text":"Просмотр  Тип новостей",
      "class":"mt,btn-lg,btn-warning",
      "param":"asror=2",
      "action":"1681",
      "target":"_blank"
   },
   {
      "icon":"fa fa-th",
      "role":"",
      "text":"Редактирование  Мнения о стипендианте",
      "class":"",
      "param":"",
      "action":"734",
      "target":""
   },
   {
      "icon":"fa fa-line-chart",
      "role":"",
      "text":"Просмотр  Тип новостей",
      "class":"",
      "param":"",
      "action":"707",
      "target":""
   },
   {
      "icon":"fa fa-gears",
      "role":"",
      "text":"Изменениe пароля",
      "class":"",
      "param":"",
      "action":"548",
      "target":"_blank"
   }
];

        var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
        editor.setForm($('#frmEdit'));
        editor.setUpdateButton($('#btnUpdate'));
        editor.setData({json});
        
        /*
        * 
        * Action select2
        * */
        $('#vall').on('select2:select', function () {
           // document.getElementById('href').setAttribute('disabled', 'disabled');
            
            var actionVal = $('#vall').val();
            var actionName = $('#actionName').val(actions[actionVal]);
            ac_val = actionName.val();
            $('#action_value').val(ac_val);
            
            
            
             $('#text_vall').val(actionVal).select2().trigger('change');
             
             var aVal = $('#text_vall').val();
           var txt_v = $('#text2').val(aVal);
            txt_v.val();
            var txt_val =  $('#text1').val(titles[aVal]);
            t_val = txt_val.val();
            
            $('#text_value').val(t_val);
            console.log($('#text_value').val());
    
            var icon = $('#myEditor_icon').children()[0];
            
            $(icon).removeClass();            
            $(icon).addClass(icons[actionVal]);
            
            $('#iconValue').val(icons[actionVal]);
            $('#icon_value').val(icons[actionVal]);
            $('#ico').removeClass();
            $('#ico').addClass(icons[actionVal]);
            
        }).on('select2:clear', function () {
        var icon = $('#myEditor_icon').children()[0]; 
           // var x = document.getElementById('href').removeAttribute('disabled');
            $('#text').val('');
            $('#title').val('');
            $(icon).removeClass();            
        });
        
        
        /*
        * Text select2
        * */
        $('#text_vall').on('select2:select', function () {
            
            var aVal = $('#text_vall').val();
           var txt_v = $('#text2').val(aVal);
            txt_v.val();
            
              $('#vall').val(aVal).select2().trigger('change');
            var txt_val =  $('#text1').val(titles[aVal]);
            t_val = txt_val.val();
            
            $('#text_value').val(t_val);
            
         
           
            var icon = $('#myEditor_icon').children()[0];
            
            $(icon).removeClass();            
            $(icon).addClass(icons[aVal]);
            
            $('#iconValue').val(icons[aVal]);
             $('#icon_value').val(icons[aVal]);
             $('#ico').removeClass();
             $('#ico').addClass(icons[aVal]);
        });

        $('#setDat').on('click', function () {
            editor.setData(arrayjson);
        });
        $('#btnReload').on('click', function () {

        });

        $('#btnOutput').on('click', function () {
            var str = editor.getString();
            $("#out").text(str);
        });

        $("#btnUpdate").click(function () {
            $("#$menutable-json").val(editor.getString());
            var action_v = $('#vall').val();
            $('#action').val(action_v);

            var target_v = $('#val__tar').val();
            $('#target').val(target_v);
            
            var text = $('#text_vall').val();
            var nameText =  $('#text1').val(titles[text]);
            var text_val =  nameText.val();
           
            $('#text_value').val(text_val);
            
            var actionVal = $('#vall').val();
            var actionName = $('#actionName').val(actions[actionVal]);
            ac_val = actionName.val();
            $('#action_value').val(ac_val);
            
            
            
            var paramValue = $('#param').val();
            $('#paramVal').val(paramValue);


            var class_v = $('#clas-val').val();
            $('#class').val(class_v);


            var role_v = $('#val__vis').val();
            $('#role').val(role_v);
                                    
            var actionVal = $('#vall').val();
            $('#icon_value').val(icons[actionVal]);
            $('#ico').removeClass();
            $('#ico').addClass(icons[actionVal]);
            $('#ico').removeClass();
            editor.update();

            $('.js-example-programmatic').val(null).trigger("change");
            $('.js-example-programmatic-5').val(null).trigger("change");
            $('.js-example-programmatic-3').val(null).trigger("change");
            $('.js-example-programmatic-2').val(null).trigger("change");
            $('#text_vall').val(null).trigger("change");
            $('#btnOutput').click();
        });

        $('#delMen').click(function () {
            $('#myEditor').empty();
        });




        $('#btnAdd').click(function () {
    
            var action = $('#vall').val();
            $('#action').val(action);
            
            var target = $('#val__tar').val();
            $('#target').val(target);
            
            var text = $('#text_vall').val();
            var nameText =  $('#text1').val(titles[text]);
            var text_val =  nameText.val();
            $('#text_value').val(text_val);
            
            var class_val = $('#clas-val').val();
            $('#class').val(class_val);
            
            var actionVal = $('#vall').val();
            var actionName = $('#actionName').val(actions[actionVal]);
            ac_val = actionName.val();
            $('#action_value').val(ac_val);
            
            var paramValue = $('#param').val();
            $('#paramVal').val(paramValue);
            
            var role_val = $('#val__vis').val();
            $('#role').val(role_val);
            
            var actionVal = $('#vall').val();
            $('#icon_value').val(icons[actionVal]);
            $('#ico').addClass(icons[actionVal]);
            $('#ico').removeClass();
            
            var icon = $('#myEditor_icon').children()[0];
            editor.add();
            
            $('.js-example-programmatic').val(null).trigger("change");
            $('.js-example-programmatic-5').val(null).trigger("change");
            $('.js-example-programmatic-3').val(null).trigger("change");
            $('.js-example-programmatic-2').val(null).trigger("change");
            $('#text_vall').val(null).trigger("change");
            $('#btnOutput').click();
            $("#$menutable-json").val(editor.getString());

        });
        
 
 
                
        $('#menuform').submit(function () {
            $("#$menutable-json").val(editor.getString());
            return true;
        });

        var example = $('.js-example-programmatic').select2({
            allowClear: true,
            placeholder: "Веб действия",

        }).trigger('change');
        var example8 = $('#text_vall').select2({
            allowClear: true,
            placeholder: "Текст",

        }).trigger('change');

        var example3 = $('#val__vis').select2({
            allowclear: true,
            multiple: true,
            placeholder: 'Доступ запрешён для ..'
        }).trigger('change');
        var example2 = $('.js-example-programmatic-2').select2({
            allowClear: true,
            placeholder: "Веб цель",

        }).trigger('change');
        $('.js-example-programmatic-5').select2({
            placeholder: "Сss класс",

        }).trigger('change');
        $('#class-val').select2({
            allowClear: true,
            multipe: true,
            placeholder: "Выбрать Css класс",
        }).trigger('change');


        /* ====================================== */

        /** PAGE ELEMENTS **/
        $('[data-toggle="tooltip"]').tooltip();
        $.getJSON("https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function (data) {
            $('#btnStars').html(data.stargazers_count);
            $('#btnForks').html(data.forks_count);
        });
             $('#bta').on('click', function () {
                 copyToClipboard($('#text_value').val());
             });
             $('#ac_btn').on('click', function () {
                 copyToClipboard($('#action_value').val());
             });
          
        });
      
JS;


$js = strtr($jsCode, [
    '{titles}' => $titleJS,
    '{action}' => $actionJS,
    '{icons}' => $iconJS,
    '{json}' => $json,
]);


$createMenuJS = file_get_contents(Root . '/webhtm/core/menu/assets/jQuery-Menu-Editor-master/jquery-menu-editor_shoxruh.js');

$createMenuJS = str_replace('{titles}', $titleJS, $createMenuJS);
$createMenuJS = str_replace('{action}', $actionJS, $createMenuJS);
$createMenuJS = str_replace('{icons}', $iconJS, $createMenuJS);
$createMenuJS = str_replace('{json}', $json, $createMenuJS);

$this->registerJs($createMenuJS);
$this->registerJs($js);

?>









