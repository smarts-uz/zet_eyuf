<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageWidgetType;

class PageWidgetTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageWidgetType();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'actions';
        $this->model->title = 'actions';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'ajaxify';
        $this->model->title = 'ajaxify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'animo';
        $this->model->title = 'animo';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'audios';
        $this->model->title = 'audios';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'blocks';
        $this->model->title = 'Блоки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'bozor';
        $this->model->title = 'bozor';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'cards';
        $this->model->title = 'cards';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'charts';
        $this->model->title = 'charts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'chates';
        $this->model->title = 'chates';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'columns';
        $this->model->title = 'Колонки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'consts';
        $this->model->title = 'consts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'former';
        $this->model->title = 'Формы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'grapes';
        $this->model->title = 'grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'iconers';
        $this->model->title = 'iconers';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'images';
        $this->model->title = 'images';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'incores';
        $this->model->title = 'incores';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'inptest';
        $this->model->title = 'inptest';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'inputes';
        $this->model->title = 'Инпуты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'market';
        $this->model->title = 'market';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'menus';
        $this->model->title = 'menus';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'navigat';
        $this->model->title = 'navigat';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'notifier';
        $this->model->title = 'notifier';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'phone';
        $this->model->title = 'phone';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'places';
        $this->model->title = 'places';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'sorter';
        $this->model->title = 'sorter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'themes';
        $this->model->title = 'themes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'values';
        $this->model->title = 'values';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageWidgetType();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'yandex';
        $this->model->title = 'yandex';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = '';
        $this->model->check = '1';
        $this->save();


    }

}
