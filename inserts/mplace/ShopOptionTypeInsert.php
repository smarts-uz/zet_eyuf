<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOptionType;

class ShopOptionTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOptionType();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 12;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Тип устройства';
        $this->model->title = 'Тип устройства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 11;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'Операционная система';
        $this->model->title = 'Операционная система';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'Тип экрана';
        $this->model->title = 'Тип экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Процессор';
        $this->model->title = 'Процессор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Количество ядер';
        $this->model->title = 'Количество ядер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'Вычислительное ядро';
        $this->model->title = 'Вычислительное ядро';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Техпроцесс';
        $this->model->title = 'Техпроцесс';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Встроенная память';
        $this->model->title = 'Встроенная память';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'Оперативная память';
        $this->model->title = 'Оперативная память';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Слот для карт памяти';
        $this->model->title = 'Слот для карт памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Количество основных (тыловых) камер';
        $this->model->title = 'Количество основных (тыловых) камер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Количество основных (тыловых) камер';
        $this->model->title = 'Количество основных (тыловых) камер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Экран';
        $this->model->title = 'Экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'Широкоформатный экран';
        $this->model->title = 'Широкоформатный экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'Микрофон';
        $this->model->title = 'Микрофон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 11;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Тип экрана';
        $this->model->title = 'Тип экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 11;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Технология';
        $this->model->title = 'Технология';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 11;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Сенсорный экран';
        $this->model->title = 'Сенсорный экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'Полностью беспроводные (True wireless)';
        $this->model->title = 'Полностью беспроводные (True wireless)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 22;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'Число пикселей на дюйм (PPI)';
        $this->model->title = 'Число пикселей на дюйм (PPI)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'Видеопроцессор';
        $this->model->title = 'Видеопроцессор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Тип крепления';
        $this->model->title = 'Тип крепления';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 22;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Диаметр мембраны';
        $this->model->title = 'Диаметр мембраны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 22;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Стандарт';
        $this->model->title = 'Стандарт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 32;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Поддержка Wi-Fi';
        $this->model->title = 'Поддержка Wi-Fi';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 15;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Светодиодный индикатор';
        $this->model->title = 'Светодиодный индикатор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 22;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Поддержка Bluetooth';
        $this->model->title = 'Поддержка Bluetooth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 15;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Процессор';
        $this->model->title = 'Процессор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 33;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Тип SIM-карты';
        $this->model->title = 'Тип SIM-карты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 24;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Тип беспроводного соединения';
        $this->model->title = 'Тип беспроводного соединения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 15;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = 'Версия Bluetooth';
        $this->model->title = 'Версия Bluetooth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 15;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Количество SIM-карт';
        $this->model->title = 'Количество SIM-карт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 24;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'Поддержка профилей работы';
        $this->model->title = 'Поддержка профилей работы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 15;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Вызов голосового ассистента';
        $this->model->title = 'Вызов голосового ассистента';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 27;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'Мобильная связь';
        $this->model->title = 'Мобильная связь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 24;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Емкость аккумулятора';
        $this->model->title = 'Емкость аккумулятора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'Ответить/закончить разговор';
        $this->model->title = 'Ответить/закончить разговор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 27;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = 'Количество основных (тыловых) камер';
        $this->model->title = 'Количество основных (тыловых) камер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 16;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = 'Автоматическое парное соединение';
        $this->model->title = 'Автоматическое парное соединение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 27;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'Разрешение основной (тыловой) камеры';
        $this->model->title = 'Разрешение основной (тыловой) камеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 16;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'Особенности камеры';
        $this->model->title = 'Особенности камеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 16;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'Фронтальная камера';
        $this->model->title = 'Фронтальная камера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 16;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Емкость аккумулятора';
        $this->model->title = 'Емкость аккумулятора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'Время работы в режиме ожидания';
        $this->model->title = 'Время работы в режиме ожидания';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 23;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'Встроенный динамик';
        $this->model->title = 'Встроенный динамик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 17;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'Время работы в режиме разговора';
        $this->model->title = 'Время работы в режиме разговора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 23;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Встроенный микрофон';
        $this->model->title = 'Встроенный микрофон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 17;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Время работы от аккумулятора в кейсе';
        $this->model->title = 'Время работы от аккумулятора в кейсе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 23;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Кейс для зарядки';
        $this->model->title = 'Кейс для зарядки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 29;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'GPS';
        $this->model->title = 'GPS';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 18;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'ГЛОНАСС';
        $this->model->title = 'ГЛОНАСС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 18;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Чехол/футляр в комплекте';
        $this->model->title = 'Чехол/футляр в комплекте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Сменные амбушюры';
        $this->model->title = 'Сменные амбушюры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Вес';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'Память';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 5;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'Цвет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 5;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'razmer';
        $this->model->title = 'razmer';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 9;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Тип экрана';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 6;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Размеры';
        $this->model->title = 'Размеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Особенности';
        $this->model->title = 'Особенности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 26;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Год анонсирования';
        $this->model->title = 'Год анонсирования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 26;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Подключение к компьютеру по USB';
        $this->model->title = 'Подключение к компьютеру по USB';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'Аккумулятор';
        $this->model->title = 'Аккумулятор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 38;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'Тип разъема для зарядки';
        $this->model->title = 'Тип разъема для зарядки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'Функция беспроводной зарядки';
        $this->model->title = 'Функция беспроводной зарядки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'Функция быстрой зарядки';
        $this->model->title = 'Функция быстрой зарядки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Громкая связь (встроенный динамик)';
        $this->model->title = 'Громкая связь (встроенный динамик)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'Управление';
        $this->model->title = 'Управление';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'Режим полета';
        $this->model->title = 'Режим полета';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = 'Датчики';
        $this->model->title = 'Датчики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Комплектация';
        $this->model->title = 'Комплектация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 26;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Особенности';
        $this->model->title = 'Особенности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 26;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = 'Дата начала продаж';
        $this->model->title = 'Дата начала продаж';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Версия ОС на начало продаж';
        $this->model->title = 'Версия ОС на начало продаж';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'Частота процессора';
        $this->model->title = 'Частота процессора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 13;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = 'Тип корпуса';
        $this->model->title = 'Тип корпуса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = 'Количество SIM-карт';
        $this->model->title = 'Количество SIM-карт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Тип SIM-карты';
        $this->model->title = 'Тип SIM-карты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'Режим работы нескольких SIM-карт';
        $this->model->title = 'Режим работы нескольких SIM-карт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'Бесконтактная оплата';
        $this->model->title = 'Бесконтактная оплата';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'Вес';
        $this->model->title = 'Вес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = 'Тип сенсорного экрана';
        $this->model->title = 'Тип сенсорного экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'Диагональ';
        $this->model->title = 'Диагональ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'Размер изображения';
        $this->model->title = 'Размер изображения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'Число пикселей на дюйм (PPI)';
        $this->model->title = 'Число пикселей на дюйм (PPI)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'FM-тюнер';
        $this->model->title = 'FM-тюнер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 17;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'Соотношение сторон';
        $this->model->title = 'Соотношение сторон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'Автоматический поворот экрана';
        $this->model->title = 'Автоматический поворот экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 14;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = 'Разрешения основных (тыловых) камер';
        $this->model->title = 'Разрешения основных (тыловых) камер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'Диафрагмы основных (тыловых) камер';
        $this->model->title = 'Диафрагмы основных (тыловых) камер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'Фотовспышка';
        $this->model->title = 'Фотовспышка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = 'Функции основной (тыловой) фотокамеры';
        $this->model->title = 'Функции основной (тыловой) фотокамеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = 'Подключение внешних устройств по USB';
        $this->model->title = 'Подключение внешних устройств по USB';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = 'Запись видеороликов';
        $this->model->title = 'Запись видеороликов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = 'Макс. разрешение видео';
        $this->model->title = 'Макс. разрешение видео';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = 'Фронтальная камера';
        $this->model->title = 'Фронтальная камера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'USB 3.1 Type-C';
        $this->model->title = 'USB 3.1 Type-C';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'Аудио';
        $this->model->title = 'Аудио';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 31;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = 'Выход аудио/наушники';
        $this->model->title = 'Выход аудио/наушники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = 'Выход аудио/наушники';
        $this->model->title = 'Выход аудио/наушники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = 'Выход аудио/наушники';
        $this->model->title = 'Выход аудио/наушники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = 'Выход аудио/наушники';
        $this->model->title = 'Выход аудио/наушники';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'Поддержка диапазонов LTE';
        $this->model->title = 'Поддержка диапазонов LTE';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 32;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = 'Интерфейсы';
        $this->model->title = 'Интерфейсы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 32;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Поддержка iPhone';
        $this->model->title = 'Поддержка iPhone';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Аудио';
        $this->model->title = 'Аудио';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 20;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Емкость аккумулятора';
        $this->model->title = 'Емкость аккумулятора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 28;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Видео';
        $this->model->title = 'Видео';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 20;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Вес';
        $this->model->title = 'Вес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 25;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Материал корпуса';
        $this->model->title = 'Материал корпуса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 26;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Размеры (ДхШхГ)';
        $this->model->title = 'Размеры (ДхШхГ)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 25;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Стилус в комплекте';
        $this->model->title = 'Стилус в комплекте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 26;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'Фонарик';
        $this->model->title = 'Фонарик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'Размеры (ШxВxТ)';
        $this->model->title = 'Размеры (ШxВxТ)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 36;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'Размеры (ШxВxТ)';
        $this->model->title = 'Размеры (ШxВxТ)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 19;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'Комплектация';
        $this->model->title = 'Комплектация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 37;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'Особенности';
        $this->model->title = 'Особенности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 37;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'Дата анонсирования';
        $this->model->title = 'Дата анонсирования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 37;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Дата начала продаж';
        $this->model->title = 'Дата начала продаж';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 37;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 40;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'Операционная система';
        $this->model->title = 'Операционная система';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 40;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'Ultrabook';
        $this->model->title = 'Ultrabook';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 38;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'Операционная система';
        $this->model->title = 'Операционная система';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 38;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'Диагональ экрана';
        $this->model->title = 'Диагональ экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'Частота процессора';
        $this->model->title = 'Частота процессора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 42;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'Объем оперативной памяти';
        $this->model->title = 'Объем оперативной памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 44;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = 'Тип памяти';
        $this->model->title = 'Тип памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 44;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = 'Разрешение экрана';
        $this->model->title = 'Разрешение экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'Широкоформатный экран';
        $this->model->title = 'Широкоформатный экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = 'Частота памяти';
        $this->model->title = 'Частота памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 44;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'Тип матрицы экрана';
        $this->model->title = 'Тип матрицы экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'Сенсорный экран';
        $this->model->title = 'Сенсорный экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'Диагональ экрана';
        $this->model->title = 'Диагональ экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'Разрешение экрана';
        $this->model->title = 'Разрешение экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'Мультитач-экран';
        $this->model->title = 'Мультитач-экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'Светодиодная подсветка экрана';
        $this->model->title = 'Светодиодная подсветка экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'Поддержка 3D';
        $this->model->title = 'Поддержка 3D';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 46;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'Тип видеокарты';
        $this->model->title = 'Тип видеокарты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 50;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'Тип матрицы экрана';
        $this->model->title = 'Тип матрицы экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'Видеокарта';
        $this->model->title = 'Видеокарта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 50;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'Две видеокарты';
        $this->model->title = 'Две видеокарты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 50;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = 'Тип покрытия экрана';
        $this->model->title = 'Тип покрытия экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = 'Сенсорный экран';
        $this->model->title = 'Сенсорный экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'Мультитач-экран';
        $this->model->title = 'Мультитач-экран';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'Светодиодная подсветка экрана';
        $this->model->title = 'Светодиодная подсветка экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'Поддержка 3D';
        $this->model->title = 'Поддержка 3D';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 39;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'Конфигурация накопителей';
        $this->model->title = 'Конфигурация накопителей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 51;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'Оптический привод';
        $this->model->title = 'Оптический привод';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 51;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'Тип видеокарты';
        $this->model->title = 'Тип видеокарты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 41;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'Слоты расширения/карты памяти';
        $this->model->title = 'Слоты расширения/карты памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 45;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = 'Видеокарта';
        $this->model->title = 'Видеокарта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 41;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'Две видеокарты';
        $this->model->title = 'Две видеокарты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 41;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'Wi-Fi';
        $this->model->title = 'Wi-Fi';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 53;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Стандарт Wi-Fi';
        $this->model->title = 'Стандарт Wi-Fi';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 53;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = 'Тип видеопамяти';
        $this->model->title = 'Тип видеопамяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 41;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'Bluetooth';
        $this->model->title = 'Bluetooth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 53;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = 'Разъем для док-станции';
        $this->model->title = 'Разъем для док-станции';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 21;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'Количество ядер процессора';
        $this->model->title = 'Количество ядер процессора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 33;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'Объем встроенной памяти';
        $this->model->title = 'Объем встроенной памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 33;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'Видеопроцессор';
        $this->model->title = 'Видеопроцессор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 33;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'Тип сенсорного экрана';
        $this->model->title = 'Тип сенсорного экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Число пикселей на дюйм (PPI)';
        $this->model->title = 'Число пикселей на дюйм (PPI)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'Объем оперативной памяти';
        $this->model->title = 'Объем оперативной памяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 33;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Соотношение сторон';
        $this->model->title = 'Соотношение сторон';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = 'Наличие сабвуфера';
        $this->model->title = 'Наличие сабвуфера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 58;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'Wi-Fi';
        $this->model->title = 'Wi-Fi';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 47;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = 'Наличие микрофона';
        $this->model->title = 'Наличие микрофона';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 58;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'Стандарт Wi-Fi';
        $this->model->title = 'Стандарт Wi-Fi';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 47;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = 'GPS';
        $this->model->title = 'GPS';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'Bluetooth';
        $this->model->title = 'Bluetooth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 47;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = 'ГЛОНАСС';
        $this->model->title = 'ГЛОНАСС';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'Версия Bluetooth';
        $this->model->title = 'Версия Bluetooth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 47;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'Веб-камера';
        $this->model->title = 'Веб-камера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = '4G LTE';
        $this->model->title = '4G LTE';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 47;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = 'ТВ-тюнер';
        $this->model->title = 'ТВ-тюнер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = '3G';
        $this->model->title = '3G';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 47;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = 'Пульт ДУ';
        $this->model->title = 'Пульт ДУ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'Стилус';
        $this->model->title = 'Стилус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = 'Время работы';
        $this->model->title = 'Время работы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 48;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'Металлический корпус';
        $this->model->title = 'Металлический корпус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'Тип аккумулятора';
        $this->model->title = 'Тип аккумулятора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 34;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'Ударопрочный корпус';
        $this->model->title = 'Ударопрочный корпус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'Устройства позиционирования';
        $this->model->title = 'Устройства позиционирования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 49;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'Влагозащищенный корпус';
        $this->model->title = 'Влагозащищенный корпус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'Подсветка клавиатуры';
        $this->model->title = 'Подсветка клавиатуры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 49;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'Пассивное охлаждение';
        $this->model->title = 'Пассивное охлаждение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 59;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = 'Сенсорная панель Touch Bar';
        $this->model->title = 'Сенсорная панель Touch Bar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 49;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 52;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = 'Диагональ экрана';
        $this->model->title = 'Диагональ экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 60;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'Разрешение экрана';
        $this->model->title = 'Разрешение экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 60;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'Тип покрытия экрана';
        $this->model->title = 'Тип покрытия экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 60;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = 'Тип матрицы экрана';
        $this->model->title = 'Тип матрицы экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 60;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'Объем кэша L2';
        $this->model->title = 'Объем кэша L2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 60;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'Сезонность';
        $this->model->title = 'Сезонность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 61;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'Ширина профиля';
        $this->model->title = 'Ширина профиля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 61;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'Высота профиля';
        $this->model->title = 'Высота профиля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 61;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'Диаметр';
        $this->model->title = 'Диаметр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 61;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'Шипы';
        $this->model->title = 'Шипы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 61;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'Назначение';
        $this->model->title = 'Назначение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 62;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = 'Сезонность';
        $this->model->title = 'Сезонность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 62;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'Диаметр';
        $this->model->title = 'Диаметр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 62;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'Ширина профиля';
        $this->model->title = 'Ширина профиля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 62;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'Высота профиля';
        $this->model->title = 'Высота профиля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 62;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = 'Шипы';
        $this->model->title = 'Шипы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 63;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'Технология RunFlat';
        $this->model->title = 'Технология RunFlat';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 63;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = 'Тип камеры';
        $this->model->title = 'Тип камеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 64;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = 'Поддержка сменных объективов';
        $this->model->title = 'Поддержка сменных объективов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 65;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'Общее число пикселей';
        $this->model->title = 'Общее число пикселей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 66;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 5;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'Число эффективных пикселей';
        $this->model->title = 'Число эффективных пикселей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 66;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 69;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'Размер';
        $this->model->title = 'Размер';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 66;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'Вес коляски';
        $this->model->title = 'Вес коляски';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 69;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = '3G';
        $this->model->title = '3G';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 53;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'Встроенная сетевая карта';
        $this->model->title = 'Встроенная сетевая карта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 55;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = 'Устройства позиционирования';
        $this->model->title = 'Устройства позиционирования';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 57;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'Общий объем накопителей';
        $this->model->title = 'Общий объем накопителей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 43;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'Сенсорная панель Touch Bar';
        $this->model->title = 'Сенсорная панель Touch Bar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 57;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = 'Наличие колонок';
        $this->model->title = 'Наличие колонок';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 58;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'Общий объем накопителей SSD';
        $this->model->title = 'Общий объем накопителей SSD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 43;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = 'Оптический привод';
        $this->model->title = 'Оптический привод';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 43;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'Длина спального места';
        $this->model->title = 'Длина спального места';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 72;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = 'Особенности конструкции';
        $this->model->title = 'Особенности конструкции';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 72;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '  Материал рамы';
        $this->model->title = '  Материал рамы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = 'Материал капюшона';
        $this->model->title = 'Материал капюшона';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 74;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = 'Количество микрофонов';
        $this->model->title = 'Количество микрофонов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 22;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Автоматическая ориентация экрана';
        $this->model->title = 'Автоматическая ориентация экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 18;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = 'Колеса';
        $this->model->title = 'Колеса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 70;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'Механизм складывания';
        $this->model->title = 'Механизм складывания';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = 'Количество колес';
        $this->model->title = 'Количество колес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'Аксессуары в комплекте';
        $this->model->title = 'Аксессуары в комплекте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 74;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'Графический процессор';
        $this->model->title = 'Графический процессор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 75;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = 'Код производителя';
        $this->model->title = 'Код производителя';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 75;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'Интерфейс';
        $this->model->title = 'Интерфейс';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 75;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = 'Частота графического процессора';
        $this->model->title = 'Частота графического процессора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 76;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'type of material';
        $this->model->title = 'type of material';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'Расположение сканера отпечатка пальца';
        $this->model->title = 'Расположение сканера отпечатка пальца';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = '4G LTE';
        $this->model->title = '4G LTE';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 53;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'Конфигурация накопителей';
        $this->model->title = 'Конфигурация накопителей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 43;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'Количество ядер процессора';
        $this->model->title = 'Количество ядер процессора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 60;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'Система амортизации';
        $this->model->title = 'Система амортизации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 70;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'Размеры сиденья (ШxГ)';
        $this->model->title = 'Размеры сиденья (ШxГ)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 72;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = 'Объем видеопамяти';
        $this->model->title = 'Объем видеопамяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 76;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = 'Геопозиционирование';
        $this->model->title = 'Геопозиционирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 32;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'Автоматический поворот экрана';
        $this->model->title = 'Автоматический поворот экрана';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 30;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'Максимальный допустимый вес ребенка';
        $this->model->title = 'Максимальный допустимый вес ребенка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 69;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = 'Материал капюшона';
        $this->model->title = 'Материал капюшона';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 74;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = 'Тип видеопамяти';
        $this->model->title = 'Тип видеопамяти';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 76;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = 'Разъемы';
        $this->model->title = 'Разъемы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 77;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 269;
        $this->model->sort = null;
        $this->model->name = 'Версия HDMI';
        $this->model->title = 'Версия HDMI';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 77;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Датчики';
        $this->model->title = 'Датчики';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 18;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = ' Расположение сканера отпечатка пальца сбоку Фонарик';
        $this->model->title = ' Расположение сканера отпечатка пальца сбоку Фонарик';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = 'Версия DisplayPort';
        $this->model->title = 'Версия DisplayPort';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 77;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'Размер';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = 'Материал рамы';
        $this->model->title = 'Материал рамы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 70;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'Оптическая сила';
        $this->model->title = 'Оптическая сила';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 78;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = 'Вид зерен';
        $this->model->title = 'Вид зерен';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 80;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = 'Обжарка';
        $this->model->title = 'Обжарка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 80;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = 'Радиус кривизны';
        $this->model->title = 'Радиус кривизны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 79;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = 'Тип линз';
        $this->model->title = 'Тип линз';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 82;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = 'Частота замены';
        $this->model->title = 'Частота замены';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 82;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = 'Страна происхождения';
        $this->model->title = 'Страна происхождения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 80;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = 'Баланс белого';
        $this->model->title = 'Баланс белого';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 73;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'Рекомендуемый возраст';
        $this->model->title = 'Рекомендуемый возраст';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = 'Солнцезащитный козырек';
        $this->model->title = 'Солнцезащитный козырек';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 74;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'Максимальный допустимый вес ребенка';
        $this->model->title = 'Максимальный допустимый вес ребенка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = 'Вспышка';
        $this->model->title = 'Вспышка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 73;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = 'Механизм складывания';
        $this->model->title = 'Механизм складывания';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 70;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Громкая связь (встроенный динамик)';
        $this->model->title = 'Громкая связь (встроенный динамик)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 35;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = 'Упаковка';
        $this->model->title = 'Упаковка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 82;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = 'Диаметр';
        $this->model->title = 'Диаметр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 82;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = 'Состав';
        $this->model->title = 'Состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 82;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = 'Срок годности';
        $this->model->title = 'Срок годности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 81;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = 'Влагосодержание';
        $this->model->title = 'Влагосодержание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 82;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = 'Вид раствора';
        $this->model->title = 'Вид раствора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 83;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = 'Полотна';
        $this->model->title = 'Полотна';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 85;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = 'Оптическая сила';
        $this->model->title = 'Оптическая сила';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 79;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = 'Для жестких контактных линз';
        $this->model->title = 'Для жестких контактных линз';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 83;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = 'Для чувствительных глаз';
        $this->model->title = 'Для чувствительных глаз';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 83;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = 'Контейнер в комплекте';
        $this->model->title = 'Контейнер в комплекте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 83;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = 'Крепление';
        $this->model->title = 'Крепление';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = 'Высота';
        $this->model->title = 'Высота';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = 'Ширина';
        $this->model->title = 'Ширина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = 'Цвет';
        $this->model->title = 'Цвет';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 86;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = 'Группа';
        $this->model->title = 'Группа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = 'Опции';
        $this->model->title = 'Опции';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = 'Опции';
        $this->model->title = 'Опции';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 87;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = 'В комплекте';
        $this->model->title = 'В комплекте';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 88;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = 'Внутренние ремни';
        $this->model->title = 'Внутренние ремни';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 88;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = 'Регулировка';
        $this->model->title = 'Регулировка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 88;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = 'Число положений высоты подголовника';
        $this->model->title = 'Число положений высоты подголовника';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 88;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = 'Число положений наклона спинки';
        $this->model->title = 'Число положений наклона спинки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 88;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = 'Крепление';
        $this->model->title = 'Крепление';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 89;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = 'Особенности установки';
        $this->model->title = 'Особенности установки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 89;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = 'Установка';
        $this->model->title = 'Установка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 89;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = 'Внешние ремни';
        $this->model->title = 'Внешние ремни';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 89;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 90;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = 'Вид печати';
        $this->model->title = 'Вид печати';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 90;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = 'Вид печати';
        $this->model->title = 'Вид печати';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 90;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = 'Тип печатаемых штрих-кодов';
        $this->model->title = 'Тип печатаемых штрих-кодов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 90;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = 'Комплектация';
        $this->model->title = 'Комплектация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 90;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = 'USB';
        $this->model->title = 'USB';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 91;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 314;
        $this->model->sort = null;
        $this->model->name = 'Совместимость с операционной системой';
        $this->model->title = 'Совместимость с операционной системой';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 92;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = 'Разрешение печати';
        $this->model->title = 'Разрешение печати';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 92;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = 'Максимальная ширина печати';
        $this->model->title = 'Максимальная ширина печати';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 92;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = 'Источник питания';
        $this->model->title = 'Источник питания';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 92;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = 'Тип устройства';
        $this->model->title = 'Тип устройства';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 93;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = 'Интерфейсы';
        $this->model->title = 'Интерфейсы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 93;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'Особенности';
        $this->model->title = 'Особенности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 93;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = 'Соответствие законодательству';
        $this->model->title = 'Соответствие законодательству';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 93;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = 'Тип печати';
        $this->model->title = 'Тип печати';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 93;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 94;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = 'Тип управления';
        $this->model->title = 'Тип управления';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 94;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = 'Функции';
        $this->model->title = 'Функции';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 94;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = 'Оттайка';
        $this->model->title = 'Оттайка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 94;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = 'Общий объем';
        $this->model->title = 'Общий объем';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 94;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = 'Потребление электроэнергии';
        $this->model->title = 'Потребление электроэнергии';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 94;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = 'sadf';
        $this->model->title = 'sadf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'sadf';
        $this->model->title = 'sadfsdaf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 9;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = 'Напиток';
        $this->model->title = 'Напиток описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 9;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'Тип кофейного напитка';
        $this->model->title = 'Тип кофейного напитка описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 9;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = 'Объем чашки';
        $this->model->title = 'Объем чашки описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 9;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = 'maxachkala';
        $this->model->title = 'maxachkala';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = 'maxachkala';
        $this->model->title = 'maxachkala';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = 'shop_option_type';
        $this->model->title = 'it is shop_option_type';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = 'Мобильные аксессуары ';
        $this->model->title = 'аксессуары ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 5;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = 'Мобильные телефоны';
        $this->model->title = ' телефоны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 6;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'Тип гладилки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'Вид гладилки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'Форма полотна';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'Материал полотна';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'Длина рабочей части';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'Ширина рабочей части';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'Материал рукоятки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = 'Вес гладилки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 96;
        $this->model->show = null;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = 'корм';
        $this->model->title = 'корм';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 28;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = 'Тип средства';
        $this->model->title = 'Big class eye';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 100;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = 'Подходит для шеи и декольте';
        $this->model->title = 'Big hous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 100;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 356;
        $this->model->sort = null;
        $this->model->name = 'Вес';
        $this->model->title = 'Kiloggram';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 100;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 357;
        $this->model->sort = null;
        $this->model->name = 'Тип кожи';
        $this->model->title = 'Maket';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 100;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 358;
        $this->model->sort = null;
        $this->model->name = 'Эффект';
        $this->model->title = 'Effect type';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 100;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = 'SPF-фактор';
        $this->model->title = 'Many child';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 100;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 361;
        $this->model->sort = null;
        $this->model->name = 'Средство';
        $this->model->title = 'Zo\'r';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 5;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 362;
        $this->model->sort = null;
        $this->model->name = 'Эффект';
        $this->model->title = 'Big lib';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 23;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 363;
        $this->model->sort = null;
        $this->model->name = 'Финиш';
        $this->model->title = 'Big maus';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 101;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 364;
        $this->model->sort = null;
        $this->model->name = 'Активный ингредиент';
        $this->model->title = 'Beauty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 101;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 365;
        $this->model->sort = null;
        $this->model->name = 'Не содержит';
        $this->model->title = 'girls';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 101;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 366;
        $this->model->sort = null;
        $this->model->name = 'Форма выпуска';
        $this->model->title = 'Это средство для глаза ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 10;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 367;
        $this->model->sort = null;
        $this->model->name = 'Разрешение экрана';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 104;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 368;
        $this->model->sort = null;
        $this->model->name = 'Вид зерен';
        $this->model->title = 'Вид зерен';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 105;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 369;
        $this->model->sort = null;
        $this->model->name = 'Обжарка';
        $this->model->title = 'Обжарка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 105;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 370;
        $this->model->sort = null;
        $this->model->name = 'Помол';
        $this->model->title = 'Помол';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 105;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 371;
        $this->model->sort = null;
        $this->model->name = 'Страна происхождения';
        $this->model->title = 'Страна происхождения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 105;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 372;
        $this->model->sort = null;
        $this->model->name = 'Упаковка';
        $this->model->title = 'Упаковка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 105;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 373;
        $this->model->sort = null;
        $this->model->name = 'Тип ( Кофе в капсулах)';
        $this->model->title = 'Тип ( Кофе в капсулах)';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 374;
        $this->model->sort = null;
        $this->model->name = 'Напиток';
        $this->model->title = 'Напиток';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 375;
        $this->model->sort = null;
        $this->model->name = 'Тип кофейного напитка';
        $this->model->title = 'Тип кофейного напитка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 376;
        $this->model->sort = null;
        $this->model->name = 'Система';
        $this->model->title = 'Система';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 377;
        $this->model->sort = null;
        $this->model->name = 'Объем чашки';
        $this->model->title = 'Объем чашки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 378;
        $this->model->sort = null;
        $this->model->name = 'Вкус';
        $this->model->title = 'Вкус';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 379;
        $this->model->sort = null;
        $this->model->name = 'Название модели';
        $this->model->title = 'Название модели';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 106;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 380;
        $this->model->sort = null;
        $this->model->name = 'Страна происхождения';
        $this->model->title = 'Страна происхождения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 107;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 381;
        $this->model->sort = null;
        $this->model->name = 'Упаковка';
        $this->model->title = 'Упаковка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 107;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 382;
        $this->model->sort = null;
        $this->model->name = 'Дополнительная информация';
        $this->model->title = 'Дополнительная информация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 107;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 383;
        $this->model->sort = null;
        $this->model->name = 'Состав';
        $this->model->title = 'Состав';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 107;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 384;
        $this->model->sort = null;
        $this->model->name = 'Форма выпуска';
        $this->model->title = 'Форма выпуска';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 108;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 386;
        $this->model->sort = null;
        $this->model->name = 'Назначение';
        $this->model->title = 'Назначение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 108;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 388;
        $this->model->sort = null;
        $this->model->name = 'Дополнительная информация';
        $this->model->title = 'Дополнительная информация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 108;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 389;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 109;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 390;
        $this->model->sort = null;
        $this->model->name = 'Назначение';
        $this->model->title = 'Назначение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 109;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 391;
        $this->model->sort = null;
        $this->model->name = 'Материал';
        $this->model->title = 'Материал';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 109;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 392;
        $this->model->sort = null;
        $this->model->name = 'Стерильность';
        $this->model->title = 'Стерильность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 109;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 393;
        $this->model->sort = null;
        $this->model->name = 'Опудренность';
        $this->model->title = 'Опудренность';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 109;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 394;
        $this->model->sort = null;
        $this->model->name = 'Особенности';
        $this->model->title = 'Особенности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 109;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 395;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = 'Тип';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 110;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 396;
        $this->model->sort = null;
        $this->model->name = 'Дополнительная информация';
        $this->model->title = 'Дополнительная информация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 110;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 397;
        $this->model->sort = null;
        $this->model->name = 'Назначение';
        $this->model->title = 'Назначение';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 111;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 398;
        $this->model->sort = null;
        $this->model->name = 'Тип питания';
        $this->model->title = 'Тип питания';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 111;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 399;
        $this->model->sort = null;
        $this->model->name = 'Регулятор скорости';
        $this->model->title = 'Регулятор скорости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 111;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 401;
        $this->model->sort = null;
        $this->model->name = 'Бренд';
        $this->model->title = 'Бренд';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 111;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 402;
        $this->model->sort = null;
        $this->model->name = 'Страна';
        $this->model->title = 'Страна';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 111;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = 'Текстура';
        $this->model->title = 'About Us';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = null;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 403;
        $this->model->sort = null;
        $this->model->name = 'Тип питания_403';
        $this->model->title = 'Тип питанияgfgf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 4;
        $this->model->show = 1;
        $this->save();


        $this->model = new ShopOptionType();

        $this->model->id = 400;
        $this->model->sort = null;
        $this->model->name = 'Тип игл';
        $this->model->title = 'Тип игл';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->shop_option_branch_id = 75;
        $this->model->show = 1;
        $this->save();


    }

}
