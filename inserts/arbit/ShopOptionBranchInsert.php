<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOptionBranch;

class ShopOptionBranchInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOptionBranch();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Дополнительная информация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Особенности';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Прочее';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Технические характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Другие функции';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Подключение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Видео';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Устройства хранения данных';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Звук';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Слоты';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Память';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Экран';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Беспроводная связь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Беспроводная связь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = 'Подключение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Устройства ввода';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'Звук';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Люлька';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Связь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'Подробные характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Камера';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Тип продукта';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Дизайн';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Основные параметры';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Подробные характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Память и процессор';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Функциональные возможности';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Прогулочный блок';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = 'Устройства хранения данных';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Мультимедийные возможности';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = 'Дополнительно';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'Характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Функции и особенности';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Объектив';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Матрица';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Конструкция шасси';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Конструкция шасси';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Система';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'Экран';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Беспроводная связь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'Фотокамера';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Звук';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Функциональность';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Поддержка форматов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Подключение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Особенности конструкции';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'Питание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Беспроводная связь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Дополнительная информация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Экран';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Видео';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Процессор';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Подключение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'Устройства ввода';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Дополнительно';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Экран';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'Кейс для зарядки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'Питание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Функции';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Размеры и вес';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Подробные характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Подробные характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Дополнительно';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики  раствора';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'Комплектация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'Цвет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Конструкция';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'Установка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = 'Интерфейсы и связь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = 'Технические характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики кассого аппарата';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики холодильника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики гладилки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики Трансмиссионное масло';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Питание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'Питание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'Подробные характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = 'Подробные характеристики';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'Основные характеристики воздуходувки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики coffee';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики  Кофе в капсулах';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики (Антибактериальный гель для рук)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики (Перчатки медицинские)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики (Для маникюра и педикюра)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = 'Характеристики (Тату оборудование)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionBranch();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'Общие характеристики (Кофе растворимый)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->show = 1;
        $this->save();


    }

}
