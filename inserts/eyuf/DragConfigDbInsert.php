<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\drag\DragConfigDb;

class DragConfigDbInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DragConfigDb();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Настройки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreSettingType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Каталог';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test1';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Каталог';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test1';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Миграция';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreMigra';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = null;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Системные очереди';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreQueue';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Сессии';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreSession';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Настройки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreSetting';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Транспортные средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Транспортные средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsQueue';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Конфигурация таблицы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaConfig';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'DynaDynagrid таблицы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaDynagrid';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = null;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'DynaDynagridDtl';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaDynagridDtl';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = null;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Фильтрация и сортировка таблицы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaFilter';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Faqs';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'FaqsManual';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Категории ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'FaqsType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Национальность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'LangNationality';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Переводы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Lang';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageAction';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-API';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageActionRest';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-Блоки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageBlocks';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Типы Веб-блоков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageBlocksType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-контроллеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageControl';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-контроллеры API';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageControlRest';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-модули';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageModule';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'Test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'Test3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test3';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'Test4';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test4';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'TestD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test5';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestAdressZoir';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Тип транспортного средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'AutoType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Приложения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DragApp';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Системные формы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DragConfig';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Системные Модели';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DragConfigDb';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Колонки форм';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DragForm';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Колонки моделей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DragFormDb';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Основной модуль';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreMain';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Конфигурация таблицы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaConfig';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'TestD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestD';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'DynaDynagrid таблицы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaDynagrid';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = null;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'DynaDynagridDtl';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaDynagridDtl';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = null;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Faqs';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'FaqsManual';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Категории ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'FaqsType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Переводы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Lang';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Национальность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'LangNationality';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageAction';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-API';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageActionRest';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-Блоки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageBlocks';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Типы Веб-блоков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageBlocksType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Тестовые компоненты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreInput';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-контроллеры API';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageControlRest';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-модули';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageModule';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'Test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'Test3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test3';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'Test4';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test4';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = 'Сообщения';
        $this->model->title = 'TestD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Test5';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestAdressZoir';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleOdilov';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Пользователь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestTerrabayt';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = null;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = 'Потребности';
        $this->model->title = 'TreeProduct';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestTreeProduct';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Курьеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCourierOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Излишки или недостачи товаров в складе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopHouseNeed';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopHouseTrans';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Статусы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopStatus';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Сектор образования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestR';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'text';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserContact';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'text';
        $this->model->title = 'Друзья';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserFriend';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Аккаунты OAuth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserOauth';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Настройки RBAC';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserRbac';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Menu';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = 'title';
        $this->model->title = 'Рисунок Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'MenuImage';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Группы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatGroup';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Публичные Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatMessagePublic';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Уведомления';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatNotify';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Подписчики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatSubscribe';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Ученая степень';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsDegree';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Сектор образования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsEducation';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Специальность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsSpeciality';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'News';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Тип новостей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'NewsType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceAdress';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceCountry';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Регионы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceRegion';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopBrand';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Категории';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCategory';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Купоны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCoupon';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Курьеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCourier';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Валюты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCurrency';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Скидки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopDiscount';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopElement';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Специальные предложения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOffer';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Значения параметров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOption';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Категории параметров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOptionBranch';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Параметры продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOptionType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Обзоры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOverview';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Платежные шлюзы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopPayment';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopProduct';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Причины отказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopRejectCause';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Отзывы клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopReview';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Параметры для отзыва';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopReviewOption';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 314;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Доставка заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopShipment';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'StatsCompany';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufCompatriot';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Типы Документов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufDocumentType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestDep';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestDilshod';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestFile2';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestGoogle';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'TestMapGoogle';
        $this->model->title = 'TestMapGoogle';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogle';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleG';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleLobar';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleZoir';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapYandex';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapYandexAnvar';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestDilshod';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = 1;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestFile2';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestGoogle';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'TestMapGoogle';
        $this->model->title = 'TestMapGoogle';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogle';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleG';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleLobar';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleOdilov';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapGoogleZoir';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapYandex';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestMapYandexAnvar';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Сектор образования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestR';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Пользователь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestTerrabayt';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = null;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'Потребности';
        $this->model->title = 'TreeProduct';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestTreeProduct';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'text';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserContact';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'text';
        $this->model->title = 'Друзья';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserFriend';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserOauth';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Menu';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'title';
        $this->model->title = 'Рисунок Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'MenuImage';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Группы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatGroup';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Публичные Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatMessagePublic';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Уведомления';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatNotify';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Подписчики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatSubscribe';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Ученая степень';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsDegree';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Сектор образования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsEducation';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Специальность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsSpeciality';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'News';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Тип новостей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'NewsType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceAdress';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceCountry';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Регионы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceRegion';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopBrand';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Категории';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCategory';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Купоны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCoupon';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Курьеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCourier';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Курьеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCourierOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Валюты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCurrency';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Скидки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopDiscount';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopElement';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Излишки или недостачи товаров в складе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopHouseNeed';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 284;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopHouseTrans';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Специальные предложения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOffer';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Значения параметров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOption';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Категории параметров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOptionBranch';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Параметры продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOptionType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Обзоры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOverview';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Платежные шлюзы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopPayment';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Расходы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufInvoice';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Типы Расходов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufInvoiceType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufNeed';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Заблокированные пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserBlocked';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserCompany';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatMessage';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Приватные сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatPrivate';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Должности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'GovsPosition';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCatalog';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Каналы продаж';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopChannel';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Товары заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopOrderItem';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Тип упаковки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopPackaging';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Уведомления по E-mail';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ChatMail';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Типы платежей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopPaymentType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopProduct';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Причины отказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopRejectCause';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Отзывы клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopReview';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Параметры для отзыва';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopReviewOption';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopShipment';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Статусы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopStatus';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'StatsCompany';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufCompatriot';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Типы Документов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufDocumentType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Расходы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufInvoice';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Типы Расходов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufInvoiceType';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufNeed';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Транспортные средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Веб-контроллеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PageControl';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = 'Сектор образования';
        $this->model->title = 'TestFile2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestDep';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Заблокированные пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'UserBlocked';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Университет';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufUniversity';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Настройки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CoreAnalytics';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsCdr';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsCel';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Транспортные средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsRecord';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 351;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsStatus';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CallsStatusTime';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 353;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Конфигурации универсального фильтра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaMulti';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Каталог';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestAsror1';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 356;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestOrder';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 357;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestZPlaceAdressZ';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 358;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestZPlaceAdressZoir2';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'TestZPlaceAdressZoir211';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'title';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'User';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 360;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Лендинги';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasLand';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 361;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Офферы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasOffer';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 362;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Лендинги';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasOfferItem';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 363;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Транзитка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasPreland';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 364;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Лендинги';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasRequisites';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 365;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Лендинги';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasStreams';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 366;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Офферы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasStreamStats';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 367;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasTracker';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 368;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Лендинги';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'CpasTraffic';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 369;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Склады';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Ware';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 370;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareAccept';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 372;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Товары для поступления в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareEnterItem';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopQuestion';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Документ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufDocument';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Потребности Соотечественника';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufNeedCompatriot';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Количество потребностей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufNeedCount';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Репорт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufReport';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Запрос потребностей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufRequest';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Мнения о стипендианте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufReview';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 340;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Student';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufStudent';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufTable';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Билеты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufTicket';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Репорт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufReport';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Мнения о стипендианте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufReview';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Student';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufStudent';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Соотечественники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufTable';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Транспортные средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'Auto';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 269;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Каналы продаж';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopChannel';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopQuestion';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Потребности Соотечественника';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufNeedCompatriot';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Количество потребностей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufNeedCount';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Фильтрация и сортировка таблицы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'DynaFilter';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Модель транспортного средства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'AutoModel';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 371;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareEnter';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 373;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareExit';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 374;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Элемент списания товара из склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareExitItem';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 375;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareReturn';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 376;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Излишки или недостатки товаров в складе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareSeries';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 377;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareTrans';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 378;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Товары для перемещения между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'WareTransItem';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 379;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceAdress2';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceAdressZoir';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Билеты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufTicket';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Университет';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'EyufUniversity';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 380;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceAdressZoir2';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 381;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Регионы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'PlaceCity';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 382;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Каталог магазина распределенный по складам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopCatalogWare';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 383;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Перенос даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopDelay';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 384;
        $this->model->sort = null;
        $this->model->name = 'name';
        $this->model->title = 'Причины отказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = 'ShopDelayCause';
        $this->model->card = "";
        $this->model->dbase = 'db';
        $this->model->lang = 'ru';
        $this->model->addID = 1;
        $this->model->addBy = 1;
        $this->model->icon = '';
        $this->model->relationBtn = 1;
        $this->model->extraConfig = null;
        $this->model->extraColumn = 1;
        $this->model->genCrud = 1;
        $this->model->genName = null;
        $this->model->genInsert = 1;
        $this->save();


        $this->model = new DragConfigDb();

        $this->model->id = 385;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->class_name = '';
        $this->model->card = "";
        $this->model->dbase = '';
        $this->model->lang = '';
        $this->model->addID = null;
        $this->model->addBy = null;
        $this->model->icon = '';
        $this->model->relationBtn = null;
        $this->model->extraConfig = null;
        $this->model->extraColumn = null;
        $this->model->genCrud = null;
        $this->model->genName = null;
        $this->model->genInsert = null;
        $this->save();


    }

}