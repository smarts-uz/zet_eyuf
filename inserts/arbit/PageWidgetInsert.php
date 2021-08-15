<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageWidget;

class PageWidgetInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageWidget();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\audios\\ZAudioWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 4;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZFormEndWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZArrayWidget';
        $this->model->title = 'DynaGrid widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-table';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZBootstrapModalWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/former/ZBootstrapModalWidget/image/icon.png';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZDatatableWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/former/ZViewWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/former/ZViewWidget/image/icon.png';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZDynaWidget';
        $this->model->title = 'DynaGrid widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-table';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZDynaWidgetRav';
        $this->model->title = 'DynaGrid widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-table';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZDynaWidgetS';
        $this->model->title = 'DynaGrid widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-table';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 351;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZDynaWidgetShah';
        $this->model->title = 'DynaGrid widget';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-table';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZExportMenuWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 353;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZFormBeginWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZFormWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCheckboxGroupWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCheckColorImgWidget';
        $this->model->title = 'ZImageCheckbox';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCheckRadioListWidget';
        $this->model->title = 'CheckRadioList';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZCheckRadioListWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCKEditor2Widget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZCKEditorWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCKeditorJsWidget';
        $this->model->title = '<b>safasfsa</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZCKeditorJsWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCKeditorJsWidgetM';
        $this->model->title = '<b>safasfsa</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZCKeditorJsWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCKEditorWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZCKEditorWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZCurrencyRadioWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropClassWidget';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidget';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidget2';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidget2805';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidget3';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidgetM';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 284;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidgetNorm';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidgetRav';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidgetRavshan';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZDepdropWidgetTerrabayt';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZFileInputWidget';
        $this->model->title = '<b>Title</b><img src=\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZFileInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZGrapeBootstrapSiteWidget';
        $this->model->title = '<b>Title</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZFileInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZGrapeCardWidget';
        $this->model->title = '<b>Title</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZFileInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZGrapeNavbarWidget';
        $this->model->title = '<b>Title</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZFileInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZGrapeParticlesWidget';
        $this->model->title = '<b>Title</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZFileInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZHCheckboxButtonGroupWidget';
        $this->model->title = '<b>safasfsa</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZHCheckboxButtonGroupWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZHCheckboxWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZHCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZHHiddenInputWidget';
        $this->model->title = '<b>safasfsa</b>zsdfszdfsdf';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZHHiddenInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZHInputWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZIconPickerWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZIconPickerWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZImageColorWidget';
        $this->model->title = '<b></b><img src=\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZImgCheckboxGroupWidget';
        $this->model->title = 'imagecheckbox';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZcheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZImgCheckboxWidget';
        $this->model->title = 'imagecheckbox';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZcheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZImgCheckboxWidgetAz';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZImgRadioGroupWidget';
        $this->model->title = 'imagecheckbox';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZcheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZImgRadioWidget';
        $this->model->title = 'imagecheckbox';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZcheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZInputLatinWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZInputLatinWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZInputMaskWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZInputMaskWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKCheckboxXWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKCheckboxXWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKCheckboxXWidget2';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKCheckboxXWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKColorInputWidget';
        $this->model->title = '<b>safasfsa</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKColorInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKDatepickerWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKDatepickerWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKPasswordInputWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKPasswordInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKRangeInputWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKRangeInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKSelect2Widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKSelect2Widget2';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZKSelect2Widget/image/icon.jpg';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 314;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKSelect2WidgetRav';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKSelect2Widget_Asror';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZKSelect2Widget/image/icon.jpg';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKSortableInputWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKSortableInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKStarRatingOnlyWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKStarRatingWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKStarRatingWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKStarRatingWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKStarRatingWidgetX';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKStarRatingWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKTouchSpinWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZKTouchSpinWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZKTypeaheadWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZKTypeaheadWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZLangCheckWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZMImageRadioCompanyWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZMImageRadioGroupWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZMImageRadioGroupWidget2';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZMImageRadioItemGroupWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZMImageRadioWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZMImageRadioWidget2';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZPeriodPickerSingleWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZPeriodPickerWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZPeriodPickerWidgetNew';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZPeriodPickerWidgetNew2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZRadioGroupWidget';
        $this->model->title = '<b>asd</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-save';
        $this->model->image = '/render/inputes/ZImageCheckboxWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZRelatedSelect2Widget';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZSelect2AjaxingWidget';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZSelect2LangWidget';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZSelect2Widget';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZSelect2Widget2';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZSelect2Widget3';
        $this->model->title = '<h4>Select2</h4>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = 'fa-down';
        $this->model->image = '';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 340;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZTelInputWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZTelInputWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZTextAreaWidget';
        $this->model->title = '<b>safasfsa</b><img src=\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\"/>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZTextAreaWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZTinyCloudWidget';
        $this->model->title = '<b>safasfsa</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZTinyCloudWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\inputes\\ZTinyCloudWidgetMIRSHOD';
        $this->model->title = '<b>safasfsa</b>';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '/render/inputes/ZTinyCloudWidget/image/icon.png';
        $this->model->page_widget_type_id = 18;
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidget();

        $this->model->id = 356;
        $this->model->sort = null;
        $this->model->name = 'zetsoft\\widgets\\former\\ZKEditableWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->image = '';
        $this->model->page_widget_type_id = 12;
        $this->model->check = '1';
        $this->save();


    }

}
