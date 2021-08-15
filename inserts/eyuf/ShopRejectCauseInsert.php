<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopRejectCause;

class ShopRejectCauseInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopRejectCause();

        $this->model->id = 1;
        $this->model->name = 'Отмена';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 2;
        $this->model->name = 'Друг заказывал';
        $this->model->created_at = '2020-09-02 14:56:30';
        $this->model->modified_at = '2020-09-02 14:56:30';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 3;
        $this->model->name = 'Недозвон';
        $this->model->created_at = '2020-09-02 14:58:13';
        $this->model->modified_at = '2020-09-02 14:58:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 4;
        $this->model->name = 'Нет денег';
        $this->model->created_at = '2020-09-02 14:58:27';
        $this->model->modified_at = '2020-09-02 14:58:27';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 5;
        $this->model->name = 'купит в сл.мес.';
        $this->model->created_at = '2020-09-02 14:58:55';
        $this->model->modified_at = '2020-09-02 14:58:55';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 6;
        $this->model->name = 'Тел. выкл.';
        $this->model->created_at = '2020-09-02 14:59:12';
        $this->model->modified_at = '2020-09-02 14:59:12';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 7;
        $this->model->name = 'Не заказывал';
        $this->model->created_at = '2020-09-02 14:59:23';
        $this->model->modified_at = '2020-09-02 14:59:23';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 8;
        $this->model->name = 'Клиент отсутствует';
        $this->model->created_at = '2020-09-02 15:02:32';
        $this->model->modified_at = '2020-09-02 15:02:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 9;
        $this->model->name = 'Пересорт';
        $this->model->created_at = '2020-09-02 15:02:43';
        $this->model->modified_at = '2020-09-02 15:02:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 10;
        $this->model->name = 'Некорректный';
        $this->model->created_at = '2020-09-02 15:02:51';
        $this->model->modified_at = '2020-09-02 15:02:51';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 11;
        $this->model->name = 'в отьезде';
        $this->model->created_at = '2020-09-02 15:03:04';
        $this->model->modified_at = '2020-09-02 15:03:04';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 12;
        $this->model->name = 'Не хочет';
        $this->model->created_at = '2020-09-02 15:03:14';
        $this->model->modified_at = '2020-09-02 15:03:14';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 13;
        $this->model->name = 'Муж/жена против';
        $this->model->created_at = '2020-09-02 15:03:24';
        $this->model->modified_at = '2020-09-02 15:03:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 14;
        $this->model->name = 'Отказ КЦ';
        $this->model->created_at = '2020-09-02 15:03:32';
        $this->model->modified_at = '2020-09-02 15:03:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 15;
        $this->model->name = 'Клиент издевается';
        $this->model->created_at = '2020-09-02 15:03:41';
        $this->model->modified_at = '2020-09-02 15:03:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 16;
        $this->model->name = 'Нет доверия';
        $this->model->created_at = '2020-09-02 15:03:51';
        $this->model->modified_at = '2020-09-02 15:03:51';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 17;
        $this->model->name = 'Купил в др.месте';
        $this->model->created_at = '2020-09-02 15:04:02';
        $this->model->modified_at = '2020-09-02 15:04:02';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 18;
        $this->model->name = 'Врач запретил';
        $this->model->created_at = '2020-09-02 15:04:11';
        $this->model->modified_at = '2020-09-02 15:04:11';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 19;
        $this->model->name = 'Не соответствует рекламе';
        $this->model->created_at = '2020-09-02 15:04:22';
        $this->model->modified_at = '2020-09-02 15:04:22';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 20;
        $this->model->name = ' Уже купил';
        $this->model->created_at = '2020-09-02 15:04:31';
        $this->model->modified_at = '2020-09-02 15:04:31';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 21;
        $this->model->name = 'нет коментарий';
        $this->model->created_at = '2020-09-02 15:04:47';
        $this->model->modified_at = '2020-09-02 15:04:47';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 22;
        $this->model->name = 'Доз.потом недоз.';
        $this->model->created_at = '2020-09-02 15:04:55';
        $this->model->modified_at = '2020-09-02 15:04:55';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 23;
        $this->model->name = 'Дубль';
        $this->model->created_at = '2020-09-02 15:05:05';
        $this->model->modified_at = '2020-09-02 15:05:05';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 24;
        $this->model->name = 'Заказывал другое кол.';
        $this->model->created_at = '2020-09-02 15:06:01';
        $this->model->modified_at = '2020-09-02 15:06:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 25;
        $this->model->name = 'Дорого';
        $this->model->created_at = '2020-09-02 15:06:30';
        $this->model->modified_at = '2020-09-02 15:06:30';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 26;
        $this->model->name = 'Нет доверия из смс';
        $this->model->created_at = '2020-09-02 15:06:38';
        $this->model->modified_at = '2020-09-02 15:06:38';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 27;
        $this->model->name = 'Жалоба на качество';
        $this->model->created_at = '2020-09-02 15:06:48';
        $this->model->modified_at = '2020-09-02 15:06:48';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 28;
        $this->model->name = 'ЧС';
        $this->model->created_at = '2020-09-02 15:07:27';
        $this->model->modified_at = '2020-09-02 15:07:27';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 29;
        $this->model->name = 'Беременна';
        $this->model->created_at = '2020-09-02 15:07:37';
        $this->model->modified_at = '2020-09-02 15:07:37';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 30;
        $this->model->name = 'хочет 1';
        $this->model->created_at = '2020-09-02 15:07:48';
        $this->model->modified_at = '2020-09-02 15:07:48';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 31;
        $this->model->name = 'Размер больше/меньше';
        $this->model->created_at = '2020-09-02 15:07:58';
        $this->model->modified_at = '2020-09-02 15:07:58';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 32;
        $this->model->name = 'не знает кто заказал';
        $this->model->created_at = '2020-09-02 15:08:12';
        $this->model->modified_at = '2020-09-02 15:08:12';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 33;
        $this->model->name = 'Похороны';
        $this->model->created_at = '2020-09-02 15:08:24';
        $this->model->modified_at = '2020-09-02 15:08:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 34;
        $this->model->name = '2 заказа одинаковых было ';
        $this->model->created_at = '2020-09-02 15:08:35';
        $this->model->modified_at = '2020-09-02 15:08:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 35;
        $this->model->name = 'Перенос более 7 раз';
        $this->model->created_at = '2020-09-02 15:11:46';
        $this->model->modified_at = '2020-09-02 15:11:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 36;
        $this->model->name = 'карантин';
        $this->model->created_at = '2020-09-02 15:11:58';
        $this->model->modified_at = '2020-09-02 15:11:58';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 37;
        $this->model->name = 'Карантинда';
        $this->model->created_at = '2020-09-02 15:12:15';
        $this->model->modified_at = '2020-09-02 15:12:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 38;
        $this->model->name = 'Дуругой раён';
        $this->model->created_at = '2020-09-02 15:12:23';
        $this->model->modified_at = '2020-09-02 15:12:23';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 39;
        $this->model->name = 'не отвечает';
        $this->model->created_at = '2020-09-02 15:12:33';
        $this->model->modified_at = '2020-09-02 15:12:33';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 40;
        $this->model->name = 'отказываеться';
        $this->model->created_at = '2020-09-02 15:12:43';
        $this->model->modified_at = '2020-09-02 15:12:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 41;
        $this->model->name = 'розногласия в цене';
        $this->model->created_at = '2020-09-02 15:12:54';
        $this->model->modified_at = '2020-09-02 15:12:54';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 42;
        $this->model->name = 'в черный список добавиль';
        $this->model->created_at = '2020-09-02 15:13:35';
        $this->model->modified_at = '2020-09-02 15:13:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 43;
        $this->model->name = 'Камандровка';
        $this->model->created_at = '2020-09-02 15:13:44';
        $this->model->modified_at = '2020-09-02 15:13:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 44;
        $this->model->name = ' тел отключён ';
        $this->model->created_at = '2020-09-02 15:13:53';
        $this->model->modified_at = '2020-09-02 15:13:53';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 45;
        $this->model->name = 'мама не разрешает';
        $this->model->created_at = '2020-09-02 15:14:02';
        $this->model->modified_at = '2020-09-02 15:14:02';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 46;
        $this->model->name = 'Не дозвониться(Кодировка)';
        $this->model->created_at = '2020-09-02 15:14:13';
        $this->model->modified_at = '2020-09-02 15:14:13';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 47;
        $this->model->name = 'Дуругой человек';
        $this->model->created_at = '2020-09-02 15:14:23';
        $this->model->modified_at = '2020-09-02 15:14:23';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 48;
        $this->model->name = 'Заказывал Другое';
        $this->model->created_at = '2020-09-02 15:14:32';
        $this->model->modified_at = '2020-09-02 15:14:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 49;
        $this->model->name = 'Не правилна номер';
        $this->model->created_at = '2020-09-02 15:14:42';
        $this->model->modified_at = '2020-09-02 15:14:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 50;
        $this->model->name = 'кол-во не правильный';
        $this->model->created_at = '2020-09-02 15:14:51';
        $this->model->modified_at = '2020-09-02 15:14:51';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 51;
        $this->model->name = 'Болеет Кароновирусом';
        $this->model->created_at = '2020-09-02 15:15:01';
        $this->model->modified_at = '2020-09-02 15:15:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 52;
        $this->model->name = 'Сказали будет терминал';
        $this->model->created_at = '2020-09-02 15:15:09';
        $this->model->modified_at = '2020-09-02 15:15:09';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new ShopRejectCause();

        $this->model->id = 53;
        $this->model->name = 'болеет';
        $this->model->created_at = '2020-09-02 15:15:21';
        $this->model->modified_at = '2020-09-02 15:15:21';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
