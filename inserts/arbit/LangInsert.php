<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\lang\Lang;

class LangInsert extends ZInsert
{

    public function run()
    {

        $this->model = new Lang();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'Подобрать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Pick up';
        $this->model->ru = '';
        $this->model->uz = 'Termoq';
        $this->model->uzk = 'Термоқ';
        $this->model->lv = 'Pacelt';
        $this->model->ro = 'Ridica';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = '<b>this widget for selcted element</b>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZSelect2Widget3.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>this widget for selcted element</b>';
        $this->model->ru = '';
        $this->model->uz = '<b>tanlangan element uchun ushbu vidjet</b>';
        $this->model->uzk = '<б>танланган элемент учун ушбу виджет</б>';
        $this->model->lv = '<b>Šis logrīks atsevišķam elementam</b>';
        $this->model->ro = '<b>acest widget pentru elementul selectat</b>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'Элементы управление';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZFileInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Controls';
        $this->model->ru = '';
        $this->model->uz = 'Boshqarish vositalari';
        $this->model->uzk = 'Бошқариш воситалари';
        $this->model->lv = 'Kontroles';
        $this->model->ro = 'Controale';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b>zsdfszdfsdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZHHiddenInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> zsdfszdfsdf';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> zsdfszdfsdf';
        $this->model->uzk = '<б>сафасфса</б> зсдфсздфсдф';
        $this->model->lv = '<b>safasfsa</b> zsdfszdfsdf';
        $this->model->ro = '<b>safasfsa</b> zsdfszdfsdf';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = 'Выбрать все';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZSelectableTableWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'Choose all';
        $this->model->ru = '';
        $this->model->uz = 'Hammasini tanlang';
        $this->model->uzk = 'Ҳаммасини танланг';
        $this->model->lv = 'Izvēlieties visu';
        $this->model->ro = 'Alegeți toate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = 'Информация о сети';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/@Doubs/ZFooterMenuJam.php';
        $this->model->from = 'ru';
        $this->model->en = 'Network Information';
        $this->model->ru = '';
        $this->model->uz = 'Tarmoq haqida ma\'lumot';
        $this->model->uzk = 'Тармоқ ҳақида маълумот';
        $this->model->lv = 'Tīkla informācija';
        $this->model->ro = 'Informații despre rețea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'Add To Cart';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZMarketCardsJaxonWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Add To Cart';
        $this->model->ru = '';
        $this->model->uz = 'Savatchaga qo\'shish';
        $this->model->uzk = 'Саватчага қўшиш';
        $this->model->lv = 'Pievienot grozam';
        $this->model->ro = 'Adaugă în coș';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'По цене';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/ZProductTabsOnlyWidgetD.php';
        $this->model->from = 'ru';
        $this->model->en = 'By price';
        $this->model->ru = '';
        $this->model->uz = 'Narxi bo\'yicha';
        $this->model->uzk = 'Нарxи бўйича';
        $this->model->lv = 'Pēc cenas';
        $this->model->ro = 'După preț';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Индексировать по';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/actions/ZEasyViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Index by';
        $this->model->ru = '';
        $this->model->uz = 'Indeks by';
        $this->model->uzk = 'Индекс бй';
        $this->model->lv = 'Rādītājs';
        $this->model->ro = 'Indexează prin';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'Quantity';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZMCardItemWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Quantity';
        $this->model->ru = '';
        $this->model->uz = 'Miqdori';
        $this->model->uzk = 'Миқдори';
        $this->model->lv = 'Daudzums';
        $this->model->ro = 'Cantitate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Масштаб';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/actions/ZEasyViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Scale';
        $this->model->ru = '';
        $this->model->uz = 'Tarozi';
        $this->model->uzk = 'Тарози';
        $this->model->lv = 'Mērogs';
        $this->model->ro = 'Scară';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'Увеличить на';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/actions/ZEasyViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Zoom in';
        $this->model->ru = '';
        $this->model->uz = 'Kattalashtirish';
        $this->model->uzk = 'Катталаштириш';
        $this->model->lv = 'Pietuvināt';
        $this->model->ro = 'A mari';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Нет продуктов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/ajaxify/ZInfinityScrollAjaxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'No products';
        $this->model->ru = '';
        $this->model->uz = 'Mahsulotlar yo\'q';
        $this->model->uzk = 'Маҳсулотлар йўқ';
        $this->model->lv = 'Nav produktu';
        $this->model->ro = 'Fără produse';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'Блоки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/blocks/ALL.php';
        $this->model->from = 'ru';
        $this->model->en = 'Blocks';
        $this->model->ru = '';
        $this->model->uz = 'Bloklar';
        $this->model->uzk = 'Блоклар';
        $this->model->lv = 'Bloki';
        $this->model->ro = 'blocuri';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'Корзинка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZCartReviewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Basket';
        $this->model->ru = '';
        $this->model->uz = 'Savat';
        $this->model->uzk = 'Сават';
        $this->model->lv = 'Grozs';
        $this->model->ro = 'Coş';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'ПРОМЕЖУТОЧНЫЙ ИТОГ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZCartReviewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'SUBTOTAL';
        $this->model->ru = '';
        $this->model->uz = 'SUBTOTAL';
        $this->model->uzk = 'СУБТОТАЛ';
        $this->model->lv = 'SUBTOTAL';
        $this->model->ro = 'SUBTOTAL';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Закрыть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZCartReviewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Close';
        $this->model->ru = '';
        $this->model->uz = 'Yopish';
        $this->model->uzk = 'Ёпиш';
        $this->model->lv = 'Aizveriet';
        $this->model->ro = 'Închide';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'products';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZMCardItemWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'products';
        $this->model->ru = '';
        $this->model->uz = 'mahsulotlar';
        $this->model->uzk = 'маҳсулотлар';
        $this->model->lv = 'produkti';
        $this->model->ro = 'produse';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'Pay';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZMCardItemWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Pay';
        $this->model->ru = '';
        $this->model->uz = 'To\'lash';
        $this->model->uzk = 'Тўлаш';
        $this->model->lv = 'Maksā';
        $this->model->ro = 'A plati';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'Sale';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/ZHorizontalWidgetUMiD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Sale';
        $this->model->ru = '';
        $this->model->uz = 'Sotish';
        $this->model->uzk = 'Сотиш';
        $this->model->lv = 'Pārdošana';
        $this->model->ro = 'Vânzare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'Отправить сообщения';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/chates/@ Week/@ Week/ZChatsMain2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Send messages';
        $this->model->ru = '';
        $this->model->uz = 'Xabarlarni yuboring';
        $this->model->uzk = 'Хабарларни юборинг';
        $this->model->lv = 'Sūtiet ziņas';
        $this->model->ro = 'Trimite mesaje';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'Извините контакт не выбран';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/chates/@ Week/@ Week/ZChatsMain2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Sorry contact not selected';
        $this->model->ru = '';
        $this->model->uz = 'Kechirasiz, kontakt tanlanmadi';
        $this->model->uzk = 'Кечирасиз, контакт танланмади';
        $this->model->lv = 'Diemžēl kontaktpersona nav izvēlēta';
        $this->model->ro = 'Ne pare rău contactul nu a fost selectat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'ЧАТ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/chates/@ Week/@ Week/ZChatsMain2.php';
        $this->model->from = 'ru';
        $this->model->en = 'CHAT';
        $this->model->ru = '';
        $this->model->uz = 'CHAT';
        $this->model->uzk = 'ЧАТ';
        $this->model->lv = 'SATURS';
        $this->model->ro = 'CONVERSAȚIE';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'вы: \').\'</span>\'. Az::l(\'Помахать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/chates/ZChatUsersList.php';
        $this->model->from = 'ru';
        $this->model->en = 'you: \').\' \'. Az :: l (\'Wave';
        $this->model->ru = '';
        $this->model->uz = 'siz: \').\' \'. Az :: l (\'to\'lqin';
        $this->model->uzk = 'сиз: ъ).ъ ъ. Аз :: л (ътўлқин';
        $this->model->lv = 'tu: \').\' \'. Az :: l (\'Vilnis';
        $this->model->ro = 'tu: \').\' “. Az :: l (\'Val';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'Колонки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/columns/ALL.php';
        $this->model->from = 'ru';
        $this->model->en = 'Speakers';
        $this->model->ru = '';
        $this->model->uz = 'Ma\'ruzachilar';
        $this->model->uzk = 'Маърузачилар';
        $this->model->lv = 'Runātāji';
        $this->model->ro = 'Difuzoare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Назад</span>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetShakhrizod.php';
        $this->model->from = 'ru';
        $this->model->en = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Back</span>';
        $this->model->ru = '';
        $this->model->uz = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Orqaga</span>';
        $this->model->uzk = '<спан class=\\\\\\\\\\\\\\\\\"д-block\\\\\\\\\\\\\\\\\">Орқага</спан>';
        $this->model->lv = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Atpakaļ</span>';
        $this->model->ro = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Înapoi</span>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = '<b></b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZImageColorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b></b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b></b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б></б><имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZImageCheckboxWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b></b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b></b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 314;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZDrublicModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZDrublicModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Назад</spanclass>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetMirshod.php';
        $this->model->from = 'ru';
        $this->model->en = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Back</span> </spanclass>';
        $this->model->ru = '';
        $this->model->uz = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Orqaga</span> </spanclass>';
        $this->model->uzk = '<спан class=\\\\\\\\\\\\\\\\\"д-block\\\\\\\\\\\\\\\\\">Орқага</спан> </spanclass>';
        $this->model->lv = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Atpakaļ</span> </spanclass>';
        $this->model->ro = '<span class=\\\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\\\">Înapoi</span> </spanclass>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'Это тайтл';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetNorms.php';
        $this->model->from = 'ru';
        $this->model->en = 'This is the title';
        $this->model->ru = '';
        $this->model->uz = 'Bu sarlavha';
        $this->model->uzk = 'Бу сарлавҳа';
        $this->model->lv = 'Šis ir nosaukums';
        $this->model->ro = 'Acesta este titlul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = 'Test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/Dups/ZGrapesJsWidget_4_30_2020_16_00.php';
        $this->model->from = 'ru';
        $this->model->en = 'Test';
        $this->model->ru = '';
        $this->model->uz = 'Sinov';
        $this->model->uzk = 'Синов';
        $this->model->lv = 'Pārbaude';
        $this->model->ro = 'Test';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'Preview';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetRavshanPro.php';
        $this->model->from = 'ru';
        $this->model->en = 'Preview';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'rib chiqish';
        $this->model->uzk = 'Кўриб чиқиш';
        $this->model->lv = 'Priekšskatījums';
        $this->model->ro = 'previzualizare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = 'Должность';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDatatableWidgetM.php';
        $this->model->from = 'ru';
        $this->model->en = 'Position';
        $this->model->ru = '';
        $this->model->uz = 'Lavozim';
        $this->model->uzk = 'Лавозим';
        $this->model->lv = 'Pozīcija';
        $this->model->ro = 'Poziţie';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'Офис';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDatatableWidgetM.php';
        $this->model->from = 'ru';
        $this->model->en = 'Office';
        $this->model->ru = '';
        $this->model->uz = 'Idora';
        $this->model->uzk = 'Идора';
        $this->model->lv = 'Birojs';
        $this->model->ro = 'Birou';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'Расстояние';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDatatableWidgetM.php';
        $this->model->from = 'ru';
        $this->model->en = 'Distance';
        $this->model->ru = '';
        $this->model->uz = 'Masofa';
        $this->model->uzk = 'Масофа';
        $this->model->lv = 'Attālums';
        $this->model->ro = 'Distanţă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = 'Дата';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDatatableWidgetM.php';
        $this->model->from = 'ru';
        $this->model->en = 'date';
        $this->model->ru = '';
        $this->model->uz = 'sana';
        $this->model->uzk = 'сана';
        $this->model->lv = 'datums';
        $this->model->ro = 'Data';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = 'Цена';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDatatableWidgetM.php';
        $this->model->from = 'ru';
        $this->model->en = 'Price';
        $this->model->ru = '';
        $this->model->uz = 'Narxi';
        $this->model->uzk = 'Нарxи';
        $this->model->lv = 'Cena';
        $this->model->ro = 'Preț';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = 'Имя';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDatatableWidgetM.php';
        $this->model->from = 'ru';
        $this->model->en = 'Name';
        $this->model->ru = '';
        $this->model->uz = 'Ism';
        $this->model->uzk = 'Исм';
        $this->model->lv = 'Vārds';
        $this->model->ro = 'Nume';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Редактировать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetRav2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit';
        $this->model->ru = '';
        $this->model->uz = 'Tahrirlash';
        $this->model->uzk = 'Таҳрирлаш';
        $this->model->lv = 'Rediģēt';
        $this->model->ro = 'Editați | ×';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'Предупреждение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZCheckJavohirWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Warning';
        $this->model->ru = '';
        $this->model->uz = 'Ogohlantirish';
        $this->model->uzk = 'Огоҳлантириш';
        $this->model->lv = 'Brīdinājums';
        $this->model->ro = 'Avertizare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'Save';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZEditKartikWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save';
        $this->model->ru = '';
        $this->model->uz = 'Saqlash';
        $this->model->uzk = 'Сақлаш';
        $this->model->lv = 'Saglabāt';
        $this->model->ro = 'Salvați';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'Reset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'Reset';
        $this->model->ru = '';
        $this->model->uz = 'Qayta o\'rnatish';
        $this->model->uzk = 'Қайта ўрнатиш';
        $this->model->lv = 'Atiestatīt';
        $this->model->ro = 'Resetați';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'Экспортировать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Export';
        $this->model->ru = '';
        $this->model->uz = 'Eksport qilish';
        $this->model->uzk = 'Экспорт қилиш';
        $this->model->lv = 'Eksportēt';
        $this->model->ro = 'Export';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'XLSX';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Xlsx';
        $this->model->ru = '';
        $this->model->uz = 'Xlsx';
        $this->model->uzk = 'Хлсx';
        $this->model->lv = 'Xlsx';
        $this->model->ro = 'XLSX';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = 'Сохранить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZFormWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save';
        $this->model->ru = '';
        $this->model->uz = 'Saqlash';
        $this->model->uzk = 'Сақлаш';
        $this->model->lv = 'Saglabāt';
        $this->model->ro = 'Salvați';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Выдвинуть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetRav2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Push forward';
        $this->model->ru = '';
        $this->model->uz = 'Oldinga suring';
        $this->model->uzk = 'Олдинга суринг';
        $this->model->lv = 'Spiest uz priekšu';
        $this->model->ro = 'Impinge inainte';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'Это титле';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetRav2.php';
        $this->model->from = 'ru';
        $this->model->en = 'It is titled';
        $this->model->ru = '';
        $this->model->uz = 'U sarlavhali';
        $this->model->uzk = 'У сарлавҳали';
        $this->model->lv = 'Tas tiek nosaukts';
        $this->model->ro = 'Este intitulat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Полный экран';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Full Screen';
        $this->model->ru = '';
        $this->model->uz = 'To\'liq ekran';
        $this->model->uzk = 'Тўлиқ экран';
        $this->model->lv = 'Pilnekrāna režīmā';
        $this->model->ro = 'Ecran complet';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = 'Изменить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit';
        $this->model->ru = '';
        $this->model->uz = 'Tahrirlash';
        $this->model->uzk = 'Таҳрирлаш';
        $this->model->lv = 'Rediģēt';
        $this->model->ro = 'Editați | ×';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Просмотр';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'View';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'rinish';
        $this->model->uzk = 'Кўриниш';
        $this->model->lv = 'Skats';
        $this->model->ro = 'Vedere';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'Очистить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZKEditableWidgetNorm.php';
        $this->model->from = 'ru';
        $this->model->en = 'Clear';
        $this->model->ru = '';
        $this->model->uz = 'Aniq';
        $this->model->uzk = 'Аниқ';
        $this->model->lv = 'Skaidrs';
        $this->model->ro = 'clar';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'Apply';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZKEditableWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'Apply';
        $this->model->ru = '';
        $this->model->uz = 'Qo\'llash';
        $this->model->uzk = 'Қўллаш';
        $this->model->lv = 'Piesakies';
        $this->model->ro = 'aplica';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = 'Учатся за рубежом';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZTableWrapWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Study abroad';
        $this->model->ru = '';
        $this->model->uz = 'Chet elda o\'qish';
        $this->model->uzk = 'Чет элда ўқиш';
        $this->model->lv = 'Mācīties ārzemēs';
        $this->model->ro = 'A studia in strainatate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'Да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZCheckJavohirWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Yes';
        $this->model->ru = '';
        $this->model->uz = 'Ha';
        $this->model->uzk = 'Ҳа';
        $this->model->lv = 'Jā';
        $this->model->ro = 'da';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'Прошли обучение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZTableWrapWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Passed training';
        $this->model->ru = '';
        $this->model->uz = 'Treningdan o\'tdi';
        $this->model->uzk = 'Тренингдан ўтди';
        $this->model->lv = 'Nokārtota apmācība';
        $this->model->ro = 'Antrenament trecut';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'Всего';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZTableWrapWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Total';
        $this->model->ru = '';
        $this->model->uz = 'Jami';
        $this->model->uzk = 'Жами';
        $this->model->lv = 'Kopā';
        $this->model->ro = 'Total';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = 'Общая информация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'general information';
        $this->model->ru = '';
        $this->model->uz = 'umumiy ma\'lumot';
        $this->model->uzk = 'умумий маълумот';
        $this->model->lv = 'Galvenā informācija';
        $this->model->ro = 'informatii generale';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = 'View';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'View';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'rinish';
        $this->model->uzk = 'Кўриниш';
        $this->model->lv = 'Skats';
        $this->model->ro = 'Vedere';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'Select2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZSelect2Widget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Select2';
        $this->model->ru = '';
        $this->model->uz = '2-ni tanlang';
        $this->model->uzk = '2-ни танланг';
        $this->model->lv = 'Atlasiet2';
        $this->model->ro = 'Select2';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'Вы уверены ?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZCheckJavohirWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure ?';
        $this->model->ru = '';
        $this->model->uz = 'Ishonchingiz komilmi ?';
        $this->model->uzk = 'Ишончингиз комилми ?';
        $this->model->lv = 'Vai tu esi pārliecināts ?';
        $this->model->ro = 'Esti sigur ?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'Multi';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/values/ZMultiViewWidgetD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Multi';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'p';
        $this->model->uzk = 'Кўп';
        $this->model->lv = 'Vairāki';
        $this->model->ro = 'Multi';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'Ok';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDetailWidget_0403_8-52.php';
        $this->model->from = 'ru';
        $this->model->en = 'Ok';
        $this->model->ru = '';
        $this->model->uz = 'Ok';
        $this->model->uzk = 'Ок';
        $this->model->lv = 'Labi';
        $this->model->ro = 'O.K';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'Details';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidgetT.php';
        $this->model->from = 'ru';
        $this->model->en = 'Details';
        $this->model->ru = '';
        $this->model->uz = 'Tafsilotlar';
        $this->model->uzk = 'Тафсилотлар';
        $this->model->lv = 'Sīkāka informācija';
        $this->model->ro = 'Detalii';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'Общие';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_01_03-18-12.php';
        $this->model->from = 'ru';
        $this->model->en = 'General';
        $this->model->ru = '';
        $this->model->uz = 'Umumiy';
        $this->model->uzk = 'Умумий';
        $this->model->lv = 'Vispārīgi';
        $this->model->ro = 'General';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'Экспорт';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZExportWidget_2902.php';
        $this->model->from = 'ru';
        $this->model->en = 'Export';
        $this->model->ru = '';
        $this->model->uz = 'Eksport qilish';
        $this->model->uzk = 'Экспорт қилиш';
        $this->model->lv = 'Eksportēt';
        $this->model->ro = 'Export';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'Формы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ALL.php';
        $this->model->from = 'ru';
        $this->model->en = 'Forms';
        $this->model->ru = '';
        $this->model->uz = 'Shakllar';
        $this->model->uzk = 'Шакллар';
        $this->model->lv = 'Veidlapas';
        $this->model->ro = 'Formulare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 435;
        $this->model->sort = null;
        $this->model->name = 'Вы хотите восстановить этот элемент(ы)?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Do you want to restore this item (s)?';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu element (lar) ni tiklamoqchimisiz?';
        $this->model->uzk = 'Ушбу элемент (лар) ни тикламоқчимисиз?';
        $this->model->lv = 'Vai vēlaties atjaunot šo (-s) vienumu (-as)?';
        $this->model->ro = 'Doriți să restaurați acest articol?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'reset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZKEditableWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'reset';
        $this->model->ru = '';
        $this->model->uz = 'qayta o\'rnatish';
        $this->model->uzk = 'қайта ўрнатиш';
        $this->model->lv = 'atiestatīt';
        $this->model->ro = 'restabili';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = 'Просмотр {\\\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'View {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} ni ko\'rish';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} ни кўриш';
        $this->model->lv = 'Skatīt {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Vizualizați {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'Товары заказа \\\\\\\\\\\\\\\\\$model->name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetJ.php';
        $this->model->from = 'ru';
        $this->model->en = 'Order Items \\ \\\\\\\\\\\\\\\$ model-&gt; name';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtma buyumlari \\ \\\\\\\\\\\\\\\$ model-&gt; nomi';
        $this->model->uzk = 'Буюртма буюмлари \\ \\\\\\\\\\\\\\\$ модел-&гт; номи';
        $this->model->lv = 'Pasūtījumu vienības \\ \\\\\\\\\\\\\\\$ modelis-&gt; nosaukums';
        $this->model->ro = 'Comanda elemente \\ \\\\\\\\\\\\\\\$ model-&gt; nume';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'CheckRadioList';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCheckRadioListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Checkradiolist';
        $this->model->ru = '';
        $this->model->uz = 'Chekradiolist';
        $this->model->uzk = 'Чекрадиолист';
        $this->model->lv = 'Checkradiolist';
        $this->model->ro = 'Checkradiolist';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputLatinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZInputLatinWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'Update \\\\\\\\\\\\\\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Update \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = '\\ \\\\\\\\\\\\\\\$ This-&gt; modelClassName-ni yangilang';
        $this->model->uzk = '\\ \\\\\\\\\\\\\\\$ Тҳис-&гт; modelClassName-ни янгиланг';
        $this->model->lv = 'Atjaunināt \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Actualizați \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = '<b>Title</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZFileInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Title</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>Sarlavha</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>Сарлавҳа</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZFileInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>Nosaukums</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>Titlu</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'Категории';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZMegaMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Categories';
        $this->model->ru = '';
        $this->model->uz = 'Toifalar';
        $this->model->uzk = 'Тоифалар';
        $this->model->lv = 'Kategorijas';
        $this->model->ro = 'Categorii';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'Detail \\\\\\\\\\\\\\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Detail \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = 'Batafsil \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->uzk = 'Батафсил \\ \\\\\\\\\\\\\\\$ тҳис-&гт; modelClassName';
        $this->model->lv = 'Detalizēti \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Detaliu \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'Редактировать \\\\\\\\\\\\\\\\\$column->title';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZEditableIframeWidgetShahzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit \\ \\\\\\\\\\\\\\\$ column-&gt; title';
        $this->model->ru = '';
        $this->model->uz = '\\ \\\\\\\\\\\\\\\$ Ustun-&gt; sarlavhasini tahrirla';
        $this->model->uzk = '\\ \\\\\\\\\\\\\\\$ Устун-&гт; сарлавҳасини таҳрирла';
        $this->model->lv = 'Rediģēt kolonnu \\ \\\\\\\\\\\\\\\$-&gt; virsrakstu';
        $this->model->ro = 'Editați \\ \\\\\\\\\\\\\\\$ column-&gt; title';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = 'настройка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetShakhrizod.php';
        $this->model->from = 'ru';
        $this->model->en = 'customization';
        $this->model->ru = '';
        $this->model->uz = 'xususiylashtirish';
        $this->model->uzk = 'xусусийлаштириш';
        $this->model->lv = 'pielāgošana';
        $this->model->ro = 'personalizare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'Нет данных';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZListViewJaxonWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'No data';
        $this->model->ru = '';
        $this->model->uz = 'Ma\'lumot yo\'q';
        $this->model->uzk = 'Маълумот йўқ';
        $this->model->lv = 'Nav datu';
        $this->model->ro = 'Nu există date';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = 'Вход в систему';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZLoginWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Login';
        $this->model->ru = '';
        $this->model->uz = 'Kirish';
        $this->model->uzk = 'Кириш';
        $this->model->lv = 'Pieslēgties';
        $this->model->ro = 'Autentificare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'Настройка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZSettingBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Customization';
        $this->model->ru = '';
        $this->model->uz = 'Shaxsiylashtirish';
        $this->model->uzk = 'Шаxсийлаштириш';
        $this->model->lv = 'Pielāgošana';
        $this->model->ro = 'Personalizare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'WizardSteps';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZWizardStepsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Wizardsteps';
        $this->model->ru = '';
        $this->model->uz = 'Sehrgarlarning qadamlari';
        $this->model->uzk = 'Сеҳргарларнинг қадамлари';
        $this->model->lv = 'Wizardsteps';
        $this->model->ro = 'Wizardsteps';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'languages';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/iconers/ZLangPickerWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'languages';
        $this->model->ru = '';
        $this->model->uz = 'tillari';
        $this->model->uzk = 'тиллари';
        $this->model->lv = 'valodās';
        $this->model->ro = 'limbi';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'цвет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCheckRadioListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Colour';
        $this->model->ru = '';
        $this->model->uz = 'Rangi';
        $this->model->uzk = 'Ранги';
        $this->model->lv = 'Krāsa';
        $this->model->ro = 'Culoare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'imagecheckbox';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZImgRadioWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'imagecheckbox';
        $this->model->ru = '';
        $this->model->uz = 'Tasvir qutisi';
        $this->model->uzk = 'Тасвир қутиси';
        $this->model->lv = 'attēlu pārbaude';
        $this->model->ro = 'imagecheckbox';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'KEditor';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCKEditorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Keditor';
        $this->model->ru = '';
        $this->model->uz = 'Keditor';
        $this->model->uzk = 'Кедитор';
        $this->model->lv = 'Keditor';
        $this->model->ro = 'Keditor';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'Готовый текст';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZClockPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Ready text';
        $this->model->ru = '';
        $this->model->uz = 'Tayyor matn';
        $this->model->uzk = 'Тайёр матн';
        $this->model->lv = 'Gatavs teksts';
        $this->model->ro = 'Text gata';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'Размещение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZClockPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Accommodation';
        $this->model->ru = '';
        $this->model->uz = 'Turar joy';
        $this->model->uzk = 'Турар жой';
        $this->model->lv = 'Izmitināšana';
        $this->model->ro = 'Cazare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'Примечание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZSelect2Widget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Note';
        $this->model->ru = '';
        $this->model->uz = 'Eslatma';
        $this->model->uzk = 'Эслатма';
        $this->model->lv = 'Piezīme';
        $this->model->ro = 'Notă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = 'CheckboxButtonGroup';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZHCheckboxButtonGroupWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Checkboxbuttongroup';
        $this->model->ru = '';
        $this->model->uz = 'Checkboxbuttongroup';
        $this->model->uzk = 'Checkboxbuttongroup';
        $this->model->lv = 'Atzīmējiet izvēles rūtiņu Buttonongroup';
        $this->model->ro = 'Checkboxbuttongroup';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'InputLatin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputLatinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Inputlatin';
        $this->model->ru = '';
        $this->model->uz = 'Inputlatin';
        $this->model->uzk = 'Инпутлатин';
        $this->model->lv = 'Ievades tulks';
        $this->model->ro = 'Inputlatin';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'InputMask';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputMaskWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Inputmask';
        $this->model->ru = '';
        $this->model->uz = 'Kirish usuli';
        $this->model->uzk = 'Кириш усули';
        $this->model->lv = 'Ievades maska';
        $this->model->ro = 'Inputmask';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'RangeInput';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKRangeInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Rangeinput';
        $this->model->ru = '';
        $this->model->uz = 'Rangeinput';
        $this->model->uzk = 'Рангеинпут';
        $this->model->lv = 'Rangeinput';
        $this->model->ro = 'Rangeinput';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'Множественный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Multiple';
        $this->model->ru = '';
        $this->model->uz = 'Bir nechta';
        $this->model->uzk = 'Бир нечта';
        $this->model->lv = 'Vairāki';
        $this->model->ro = 'Multiplu';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'Ajax дата';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Ajax date';
        $this->model->ru = '';
        $this->model->uz = 'Ajax sana';
        $this->model->uzk = 'Ажаx сана';
        $this->model->lv = 'Ajax datums';
        $this->model->ro = 'Ajax data';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKPopoverXWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b>';
        $this->model->uzk = '<б>сафасфса</б>';
        $this->model->lv = '<b>safasfsa</b>';
        $this->model->ro = '<b>safasfsa</b>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 438;
        $this->model->sort = null;
        $this->model->name = 'Редактирование {\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Editing {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ This -&gt; _ config [\'title\']} tahrirlanmoqda';
        $this->model->uzk = '{\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} таҳрирланмоқда';
        $this->model->lv = 'Rediģēšana: {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Editarea {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'PasswordInput';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKPasswordInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'PasswordInput';
        $this->model->ru = '';
        $this->model->uz = 'Parol kiritish usuli';
        $this->model->uzk = 'Парол киритиш усули';
        $this->model->lv = 'Paroles ievadīšana';
        $this->model->ro = 'PasswordInput';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'HiddenInput';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZHHiddenInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'HiddenInput';
        $this->model->ru = '';
        $this->model->uz = 'HiddenInput';
        $this->model->uzk = 'ҲидденИнпут';
        $this->model->lv = 'Slēpta ievade';
        $this->model->ro = 'HiddenInput';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 496;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZModalWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'IconPicker';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZIconPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Iconpicker';
        $this->model->ru = '';
        $this->model->uz = 'Ikonpicker';
        $this->model->uzk = 'Ikonpicker';
        $this->model->lv = 'Ikona atlasītājs';
        $this->model->ro = 'Iconpicker';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = 'Choose your color ...';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKColorInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Choose your color ...';
        $this->model->ru = '';
        $this->model->uz = 'Rangingizni tanlang ...';
        $this->model->uzk = 'Рангингизни танланг ...';
        $this->model->lv = 'Izvēlieties krāsu ...';
        $this->model->ro = 'Alege-ți culoarea ...';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = 'Choose';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKColorInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Choose';
        $this->model->ru = '';
        $this->model->uz = 'Tanlang';
        $this->model->uzk = 'Танланг';
        $this->model->lv = 'Izvēlieties';
        $this->model->ro = 'Alege';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = 'more';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKColorInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'more';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'proq';
        $this->model->uzk = 'Кўпроқ';
        $this->model->lv = 'vairāk';
        $this->model->ro = 'Mai Mult';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'less';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKColorInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'less';
        $this->model->ru = '';
        $this->model->uz = 'Kamroq';
        $this->model->uzk = 'Камроқ';
        $this->model->lv = 'mazāk';
        $this->model->ro = 'Mai puțin';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = 'ColorInput';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKColorInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Colorinput';
        $this->model->ru = '';
        $this->model->uz = 'Colorinput';
        $this->model->uzk = 'Colorinput';
        $this->model->lv = 'Krāsu ievade';
        $this->model->ro = 'Colorinput';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Datepicker';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKDatepickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Datepicker';
        $this->model->ru = '';
        $this->model->uz = 'Sana tanlagich';
        $this->model->uzk = 'Сана танлагич';
        $this->model->lv = 'Datuma atlasītājs';
        $this->model->ro = 'DatePicker';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'Разрешить очистку';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Allow cleanup';
        $this->model->ru = '';
        $this->model->uz = 'Tozalashga ruxsat bering';
        $this->model->uzk = 'Тозалашга руxсат беринг';
        $this->model->lv = 'Atļaut tīrīšanu';
        $this->model->ro = 'Permite curățarea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'Тема';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Topic';
        $this->model->ru = '';
        $this->model->uz = 'Mavzu';
        $this->model->uzk = 'Мавзу';
        $this->model->lv = 'Temats';
        $this->model->ro = 'Subiect';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'URL';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'URL';
        $this->model->ru = '';
        $this->model->uz = 'URL manzili';
        $this->model->uzk = 'УРЛ манзили';
        $this->model->lv = 'URL';
        $this->model->ro = 'URL-';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKSelect2Widget/имаге/icon.жпг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'Тэги';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Tags';
        $this->model->ru = '';
        $this->model->uz = 'Teglar';
        $this->model->uzk = 'Теглар';
        $this->model->lv = 'Tagi';
        $this->model->ro = 'Etichete';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'Результат шаблона';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Template Result';
        $this->model->ru = '';
        $this->model->uz = 'Andoza natijasi';
        $this->model->uzk = 'Андоза натижаси';
        $this->model->lv = 'Veidnes rezultāts';
        $this->model->ro = 'Rezultatul șablonului';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'Выбор шаблона';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Template selection';
        $this->model->ru = '';
        $this->model->uz = 'Andoza tanlash';
        $this->model->uzk = 'Андоза танлаш';
        $this->model->lv = 'Veidņu izvēle';
        $this->model->ro = 'Selectarea șabloanelor';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = 'Добавить контент';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Add content';
        $this->model->ru = '';
        $this->model->uz = 'Tarkib qo\'shing';
        $this->model->uzk = 'Таркиб қўшинг';
        $this->model->lv = 'Pievienojiet saturu';
        $this->model->ro = 'Adauga continut';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = 'Скрыть поиск';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Hide search';
        $this->model->ru = '';
        $this->model->uz = 'Qidiruvni yashirish';
        $this->model->uzk = 'Қидирувни яшириш';
        $this->model->lv = 'Slēpt meklēšanu';
        $this->model->ro = 'Ascundeți căutarea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = 'Поддерживать порядок';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Keep order';
        $this->model->ru = '';
        $this->model->uz = 'Tartibni saqlang';
        $this->model->uzk = 'Тартибни сақланг';
        $this->model->lv = 'Uzturiet kārtību';
        $this->model->ro = 'Mențineți ordinea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'Содержание до';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Content up';
        $this->model->ru = '';
        $this->model->uz = 'Tarkib yuqoriga';
        $this->model->uzk = 'Таркиб юқорига';
        $this->model->lv = 'Saturs augšā';
        $this->model->ro = 'Conținut sus';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'Класс';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Class';
        $this->model->ru = '';
        $this->model->uz = 'Sinf';
        $this->model->uzk = 'Синф';
        $this->model->lv = 'Klase';
        $this->model->ro = 'Clasă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'Ajax результат';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Ajax result';
        $this->model->ru = '';
        $this->model->uz = 'Ajax natijasi';
        $this->model->uzk = 'Ажаx натижаси';
        $this->model->lv = 'Ajax rezultāts';
        $this->model->ro = 'Rezultat Ajax';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'Отключен';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'Disconnected';
        $this->model->ru = '';
        $this->model->uz = 'Uzilgan';
        $this->model->uzk = 'Узилган';
        $this->model->lv = 'Atvienots';
        $this->model->ro = 'Disconnected';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = 'Clear';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'Clear';
        $this->model->ru = '';
        $this->model->uz = 'Aniq';
        $this->model->uzk = 'Аниқ';
        $this->model->lv = 'Skaidrs';
        $this->model->ro = 'clar';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'TouchSpin';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTouchSpinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Touchpin';
        $this->model->ru = '';
        $this->model->uz = 'Sensorli panel';
        $this->model->uzk = 'Сенсорли панел';
        $this->model->lv = 'Piespraužamais';
        $this->model->ro = 'Touchpin';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'Typeahead';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTypeaheadWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Typeahead';
        $this->model->ru = '';
        $this->model->uz = 'Typeahead';
        $this->model->uzk = 'Тйпеаҳеад';
        $this->model->lv = 'Typeahead';
        $this->model->ro = 'Typeahead';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'TelInput';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTelInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'TelInput';
        $this->model->ru = '';
        $this->model->uz = 'TelInput';
        $this->model->uzk = 'ТелИнпут';
        $this->model->lv = 'TelInput';
        $this->model->ro = 'TelInput';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = 'верхний индекс';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'superscript';
        $this->model->ru = '';
        $this->model->uz = 'ustki satr';
        $this->model->uzk = 'устки сатр';
        $this->model->lv = 'virsraksts';
        $this->model->ro = 'superscript';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = 'индекс';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'index';
        $this->model->ru = '';
        $this->model->uz = 'indeks';
        $this->model->uzk = 'индекс';
        $this->model->lv = 'indekss';
        $this->model->ro = 'index';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'Код';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Code';
        $this->model->ru = '';
        $this->model->uz = 'Kod';
        $this->model->uzk = 'Код';
        $this->model->lv = 'Kods';
        $this->model->ro = 'Cod';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = 'Пункт';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Paragraph';
        $this->model->ru = '';
        $this->model->uz = 'Paragraf';
        $this->model->uzk = 'Параграф';
        $this->model->lv = 'Paragrāfs';
        $this->model->ro = 'Paragraf';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'Blockquote';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Blockquote';
        $this->model->ru = '';
        $this->model->uz = 'Bloknot';
        $this->model->uzk = 'Блокнот';
        $this->model->lv = 'Bloķēt';
        $this->model->ro = 'blockquote';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = 'Div';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Div';
        $this->model->ru = '';
        $this->model->uz = 'Div';
        $this->model->uzk = 'Див';
        $this->model->lv = 'Div';
        $this->model->ro = 'div';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = 'до';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'before';
        $this->model->ru = '';
        $this->model->uz = 'oldin';
        $this->model->uzk = 'олдин';
        $this->model->lv = 'pirms tam';
        $this->model->ro = 'inainte de';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 497;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZIframeWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = 'Личный кабинет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZFooterMenu.php';
        $this->model->from = 'ru';
        $this->model->en = 'Personal Area';
        $this->model->ru = '';
        $this->model->uz = 'Shaxsiy kabinet';
        $this->model->uzk = 'Шаxсий кабинет';
        $this->model->lv = 'Personīgā zona';
        $this->model->ro = 'Zona personală';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'SortableInput';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSortableInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Sortableinput';
        $this->model->ru = '';
        $this->model->uz = 'Sortableinput';
        $this->model->uzk = 'Сортаблеинпут';
        $this->model->lv = 'Sortableinput';
        $this->model->ro = 'Sortableinput';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'TextArea';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTextAreaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Textarea';
        $this->model->ru = '';
        $this->model->uz = 'Textarea';
        $this->model->uzk = 'Теxтареа';
        $this->model->lv = 'Textarea';
        $this->model->ro = 'textarea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'Заголовок 2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Heading 2';
        $this->model->ru = '';
        $this->model->uz = 'Sarlavha 2';
        $this->model->uzk = 'Сарлавҳа 2';
        $this->model->lv = '2. virsraksts';
        $this->model->ro = 'Rubrica 2';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'Заголовок 3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Heading 3';
        $this->model->ru = '';
        $this->model->uz = 'Sarlavha 3';
        $this->model->uzk = 'Сарлавҳа 3';
        $this->model->lv = '3. virsraksts';
        $this->model->ro = 'Titlul 3';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = 'Заголовок 5';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Header 5';
        $this->model->ru = '';
        $this->model->uz = 'Sarlavha 5';
        $this->model->uzk = 'Сарлавҳа 5';
        $this->model->lv = '5. galvene';
        $this->model->ro = 'Antetul 5';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = 'Заголовок 6';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Heading 6';
        $this->model->ru = '';
        $this->model->uz = '6-sarlavha';
        $this->model->uzk = '6-сарлавҳа';
        $this->model->lv = '6. pozīcija';
        $this->model->ro = 'Titlul 6';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = 'еще..';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZMenuWidgetUmid.php';
        $this->model->from = 'ru';
        $this->model->en = 'yet..';
        $this->model->ru = '';
        $this->model->uz = 'hali ..';
        $this->model->uzk = 'ҳали ..';
        $this->model->lv = 'vēl ..';
        $this->model->ro = 'inca..';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = 'Orders are empty';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZOrderSummaryWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Orders are empty';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtmalar bo\'sh';
        $this->model->uzk = 'Буюртмалар бўш';
        $this->model->lv = 'Pasūtījumi ir tukši';
        $this->model->ro = 'Comenzile sunt goale';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'Смелый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Brave';
        $this->model->ru = '';
        $this->model->uz = 'Jasur';
        $this->model->uzk = 'Жасур';
        $this->model->lv = 'Drosmīgs';
        $this->model->ro = 'Curajos';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = 'Закрыть этот диалог';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/@ Doub/ZSweetAlert2Widget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Close this dialog';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu oynani yoping';
        $this->model->uzk = 'Ушбу ойнани ёпинг';
        $this->model->lv = 'Aizveriet šo dialogu';
        $this->model->ro = 'Închideți acest dialog';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = 'BootstrapPopover';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZBootstrapPopoverWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Bootstrap popover';
        $this->model->ru = '';
        $this->model->uz = 'Bootstrap popover';
        $this->model->uzk = 'Бооцтрап поповер';
        $this->model->lv = 'Bootstrap popover';
        $this->model->ro = 'Popstart bootstrap';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'Подчеркнутый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Underlined';
        $this->model->ru = '';
        $this->model->uz = 'Belgilangan';
        $this->model->uzk = 'Белгиланган';
        $this->model->lv = 'Pasvītrots';
        $this->model->ro = 'subliniată';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = 'налево';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'left';
        $this->model->ru = '';
        $this->model->uz = 'chapga';
        $this->model->uzk = 'чапга';
        $this->model->lv = 'pa kreisi';
        $this->model->ro = 'stânga';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 269;
        $this->model->sort = null;
        $this->model->name = 'направо';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'right';
        $this->model->ru = '';
        $this->model->uz = 'to\'g\'ri';
        $this->model->uzk = 'тўғри';
        $this->model->lv = 'taisnība';
        $this->model->ro = 'dreapta';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = 'выровнить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'align';
        $this->model->ru = '';
        $this->model->uz = 'tekislang';
        $this->model->uzk = 'текисланг';
        $this->model->lv = 'izlīdzināt';
        $this->model->ro = 'alinia';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = 'TinyCloud';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Tinycloud';
        $this->model->ru = '';
        $this->model->uz = 'Tinycloud';
        $this->model->uzk = 'Tinycloud';
        $this->model->lv = 'Tinycloud';
        $this->model->ro = 'Tinycloud';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = ' ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZFooterMenu.php';
        $this->model->from = 'ru';
        $this->model->en = '';
        $this->model->ru = '';
        $this->model->uz = '';
        $this->model->uzk = '';
        $this->model->lv = '';
        $this->model->ro = '';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = 'Скидки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZCategoryListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Discounts';
        $this->model->ru = '';
        $this->model->uz = 'Chegirmalar';
        $this->model->uzk = 'Чегирмалар';
        $this->model->lv = 'Atlaides';
        $this->model->ro = 'reduceri';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = 'Информация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZFooterMenu.php';
        $this->model->from = 'ru';
        $this->model->en = 'Information';
        $this->model->ru = '';
        $this->model->uz = 'Ma `lumot';
        $this->model->uzk = 'Ма `лумот';
        $this->model->lv = 'Informācija';
        $this->model->ro = 'informație';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = 'Email';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZFooterMenu.php';
        $this->model->from = 'ru';
        $this->model->en = 'Email';
        $this->model->ru = '';
        $this->model->uz = 'Elektron pochta';
        $this->model->uzk = 'Электрон почта';
        $this->model->lv = 'E-pasts';
        $this->model->ro = 'E-mail';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = 'Subscribe';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZFooterMenu.php';
        $this->model->from = 'ru';
        $this->model->en = 'Subscribe';
        $this->model->ru = '';
        $this->model->uz = 'Obuna bo\'ling';
        $this->model->uzk = 'Обуна бўлинг';
        $this->model->lv = 'Abonēt';
        $this->model->ro = 'Abonati-va';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = 'Регистрация Продавцам';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZLangWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Registration for Sellers';
        $this->model->ru = '';
        $this->model->uz = 'Sotuvchilarni ro\'yxatdan o\'tkazish';
        $this->model->uzk = 'Сотувчиларни рўйxатдан ўтказиш';
        $this->model->lv = 'Reģistrācija pārdevējiem';
        $this->model->ro = 'Înregistrare pentru Vânzători';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = 'Регистрация Пользователям';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZLangWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Registration for Users';
        $this->model->ru = '';
        $this->model->uz = 'Foydalanuvchilar uchun ro\'yxatdan o\'tish';
        $this->model->uzk = 'Фойдаланувчилар учун рўйxатдан ўтиш';
        $this->model->lv = 'Reģistrācija lietotājiem';
        $this->model->ro = 'Înregistrare pentru utilizatori';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = 'Цена товара';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZOrderSummaryWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'The price of the product';
        $this->model->ru = '';
        $this->model->uz = 'Mahsulot narxi';
        $this->model->uzk = 'Маҳсулот нарxи';
        $this->model->lv = 'Produkta cena';
        $this->model->ro = 'Prețul produsului';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = 'JqueryCollapse';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZJqueryCollapseWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Jquerycollapse';
        $this->model->ru = '';
        $this->model->uz = 'Jquerycollaps';
        $this->model->uzk = 'Jquerycollaps';
        $this->model->lv = 'Jquerycollapse';
        $this->model->ro = 'Jquerycollapse';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = 'NewsCard';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZNewsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Newscard';
        $this->model->ru = '';
        $this->model->uz = 'Newscard';
        $this->model->uzk = 'Newscard';
        $this->model->lv = 'Avīžu kartīte';
        $this->model->ro = 'Newscard';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = 'DrublicModal';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZDrublicModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Drublicmodal';
        $this->model->ru = '';
        $this->model->uz = 'Drademmodal';
        $this->model->uzk = 'Драдеммодал';
        $this->model->lv = 'Drublicmodal';
        $this->model->ro = 'Drublicmodal';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = 'AccLay';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZYandexTabWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Acclay';
        $this->model->ru = '';
        $this->model->uz = 'Akkley';
        $this->model->uzk = 'Акклей';
        $this->model->lv = 'Acclay';
        $this->model->ro = 'Acclay';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 403;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZKTabXWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/навигат/ZKTabXWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = 'Iframe';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Iframe';
        $this->model->ru = '';
        $this->model->uz = 'Iframe';
        $this->model->uzk = 'Ифраме';
        $this->model->lv = 'Iframe';
        $this->model->ro = 'iframe';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = 'KPopoverX';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKPopoverXWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'KPopoverX';
        $this->model->ru = '';
        $this->model->uz = 'KPopoverX';
        $this->model->uzk = 'КПоповерХ';
        $this->model->lv = 'KPopoverX';
        $this->model->ro = 'KPopoverX';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = 'Submit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'Submit';
        $this->model->ru = '';
        $this->model->uz = 'Yuborish';
        $this->model->uzk = 'Юбориш';
        $this->model->lv = 'Iesniegt';
        $this->model->ro = 'Trimite';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = 'Modal';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetShahzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Modal';
        $this->model->ru = '';
        $this->model->uz = 'Modal';
        $this->model->uzk = 'Модал';
        $this->model->lv = 'Modāls';
        $this->model->ro = 'Modal';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = 'Validation';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZSweetAlertWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Validation';
        $this->model->ru = '';
        $this->model->uz = 'Tekshirish';
        $this->model->uzk = 'Текшириш';
        $this->model->lv = 'Validācija';
        $this->model->ro = 'Validare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 477;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSortableInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKSortableInputWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = 'Процесс';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/menus/ZSidebarWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Process';
        $this->model->ru = '';
        $this->model->uz = 'Jarayon';
        $this->model->uzk = 'Жараён';
        $this->model->lv = 'Process';
        $this->model->ro = 'Proces';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = '<img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZModalWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = '<img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = 'Транзит';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Transit';
        $this->model->ru = '';
        $this->model->uz = 'Tranzit';
        $this->model->uzk = 'Транзит';
        $this->model->lv = 'Tranzīts';
        $this->model->ro = 'Tranzit';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = 'Моя локация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'My location';
        $this->model->ru = '';
        $this->model->uz = 'Mening joylashuvim';
        $this->model->uzk = 'Менинг жойлашувим';
        $this->model->lv = 'Mana atrašanās vieta';
        $this->model->ro = 'Locatia mea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'There is no order';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/ZGoogleZoirReadyNavigation2.php';
        $this->model->from = 'ru';
        $this->model->en = 'There is no order';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtma yo\'q';
        $this->model->uzk = 'Буюртма йўқ';
        $this->model->lv = 'Nav pasūtījuma';
        $this->model->ro = 'Nu există nici o comandă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'Гость';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZCarolinaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'the guest';
        $this->model->ru = '';
        $this->model->uz = 'mehmon';
        $this->model->uzk = 'меҳмон';
        $this->model->lv = 'viesim';
        $this->model->ro = 'oaspetele';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 370;
        $this->model->sort = null;
        $this->model->name = 'Подобрать {\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetRav.php';
        $this->model->from = 'ru';
        $this->model->en = 'Pick up {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} ni tanlang';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} ни танланг';
        $this->model->lv = 'Paņemiet {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Ridica {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 362;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZBootstrapModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/формер/ZBootstrapModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = 'Добро пожаловать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Welcome';
        $this->model->ru = '';
        $this->model->uz = 'xush kelibsiz';
        $this->model->uzk = 'xуш келибсиз';
        $this->model->lv = 'Laipni lūdzam';
        $this->model->ro = 'Bine ati venit';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = 'Главное меню';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/menus/ZMmenuWidget_Z.php';
        $this->model->from = 'ru';
        $this->model->en = 'Main menu';
        $this->model->ru = '';
        $this->model->uz = 'Asosiy menyu';
        $this->model->uzk = 'Асосий меню';
        $this->model->lv = 'Galvenā izvēlne';
        $this->model->ro = 'Meniu principal';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = 'TabX';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZKTabXWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Tabx';
        $this->model->ru = '';
        $this->model->uz = 'Tabx';
        $this->model->uzk = 'Табx';
        $this->model->lv = 'Tabx';
        $this->model->ro = 'Tabx';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = 'LanguagePicker';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZLanguagePickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Languagepicker';
        $this->model->ru = '';
        $this->model->uz = 'Langagepicker';
        $this->model->uzk = 'Langagepicker';
        $this->model->lv = 'Valodu atlasītājs';
        $this->model->ro = 'Languagepicker';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'KAlert';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKAlertWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'KAlert';
        $this->model->ru = '';
        $this->model->uz = 'KAlert';
        $this->model->uzk = 'КАлерт';
        $this->model->lv = 'KAlerts';
        $this->model->ro = 'KAlert';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = 'KGrow';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKGrowlWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Krow';
        $this->model->ru = '';
        $this->model->uz = 'Krow';
        $this->model->uzk = 'Krow';
        $this->model->lv = 'Krow';
        $this->model->ro = 'Krow';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = 'Отменить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZModalWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'Cancel';
        $this->model->ru = '';
        $this->model->uz = 'Bekor qilish';
        $this->model->uzk = 'Бекор қилиш';
        $this->model->lv = 'Atcelt';
        $this->model->ro = 'Anulare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = 'Подтвердить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZModalWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'Confirm';
        $this->model->ru = '';
        $this->model->uz = 'Tasdiqlang';
        $this->model->uzk = 'Тасдиқланг';
        $this->model->lv = 'Apstiprināt';
        $this->model->ro = 'A confirma';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = 'Изменить градиент';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Change gradient';
        $this->model->ru = '';
        $this->model->uz = 'Gradientni o\'zgartiring';
        $this->model->uzk = 'Градиэнтни ўзгартиринг';
        $this->model->lv = 'Mainīt slīpumu';
        $this->model->ro = 'Schimbarea gradientului';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = 'На машине';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'By car';
        $this->model->ru = '';
        $this->model->uz = 'Mashinada';
        $this->model->uzk = 'Машинада';
        $this->model->lv = 'Ar mašīnu';
        $this->model->ro = 'Cu mașina';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = 'На велосипеде';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'On bicycle';
        $this->model->ru = '';
        $this->model->uz = 'Velosipedda';
        $this->model->uzk = 'Велосипедда';
        $this->model->lv = 'Uz velosipēda';
        $this->model->ro = 'Pe bicicletă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 373;
        $this->model->sort = null;
        $this->model->name = 'Создание {\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Create {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} yaratish';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} яратиш';
        $this->model->lv = 'Izveidot {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Creați {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 376;
        $this->model->sort = null;
        $this->model->name = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Назад</span>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetShakhrizod.php';
        $this->model->from = 'ru';
        $this->model->en = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Back</span>';
        $this->model->ru = '';
        $this->model->uz = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Orqaga</span>';
        $this->model->uzk = '<спан class=\\\\\\\\\\\\\\\"д-block\\\\\\\\\\\\\\\">Орқага</спан>';
        $this->model->lv = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Atpakaļ</span>';
        $this->model->ro = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Înapoi</span>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'Принять';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZFriendRequestsWidget_jamshid.php';
        $this->model->from = 'ru';
        $this->model->en = 'To accept';
        $this->model->ru = '';
        $this->model->uz = 'Qabul qilmoq';
        $this->model->uzk = 'Қабул қилмоқ';
        $this->model->lv = 'Akceptēt';
        $this->model->ro = 'A accepta';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'Вход / Регистрация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Login Registration';
        $this->model->ru = '';
        $this->model->uz = 'Kirishni ro\'yxatdan o\'tkazish';
        $this->model->uzk = 'Киришни рўйxатдан ўтказиш';
        $this->model->lv = 'Pieteikšanās Reģistrācija';
        $this->model->ro = 'Logare Inregistrare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'Мой Профиль';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'My profile';
        $this->model->ru = '';
        $this->model->uz = 'Mening profilim';
        $this->model->uzk = 'Менинг профилим';
        $this->model->lv = 'Mans profils';
        $this->model->ro = 'Profilul meu';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = 'Есть Аккаунт';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Have an Account';
        $this->model->ru = '';
        $this->model->uz = 'Hisobga ega bo\'ling';
        $this->model->uzk = 'Ҳисобга эга бўлинг';
        $this->model->lv = 'Ir konts';
        $this->model->ro = 'Are un cont';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = 'Войти через';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Sign in with';
        $this->model->ru = '';
        $this->model->uz = 'Bilan tizimga kiring';
        $this->model->uzk = 'Билан тизимга киринг';
        $this->model->lv = 'Pierakstieties ar';
        $this->model->ro = 'Logheaza-te cu';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = 'Регистрация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'check in';
        $this->model->ru = '';
        $this->model->uz = 'belgilanish';
        $this->model->uzk = 'белгиланиш';
        $this->model->lv = 'reģistrēties';
        $this->model->ro = 'verifica';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = 'Удалить Все';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_OLD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Delete everything';
        $this->model->ru = '';
        $this->model->uz = 'Hamma narsani o\'chirish';
        $this->model->uzk = 'Ҳамма нарсани ўчириш';
        $this->model->lv = 'Dzēst visu';
        $this->model->ro = 'Șterge totul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 377;
        $this->model->sort = null;
        $this->model->name = 'Создание {\\\\\\\\\\\\\\\$this->_config[\'defaultTitle\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeSpaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Create {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ This -&gt; _ config [\'defaultTitle\']} yaratish';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ъдефаултТитлеъ]} яратиш';
        $this->model->lv = 'Izveidot {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->model->ro = 'Creați {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 479;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTouchSpinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKTouchSpinWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 367;
        $this->model->sort = null;
        $this->model->name = 'Update \\\\\\\\\\\\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Update \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = '\\\\\\\\\\\\\\\$ This-&gt; modelClassName-ni yangilang';
        $this->model->uzk = '\\\\\\\\\\\\\\\$ Тҳис-&гт; modelClassName-ни янгиланг';
        $this->model->lv = 'Atjauniniet \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Actualizați \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 368;
        $this->model->sort = null;
        $this->model->name = 'Detail \\\\\\\\\\\\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Detail \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = 'Batafsil \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->uzk = 'Батафсил \\\\\\\\\\\\\\\$ тҳис-&гт; modelClassName';
        $this->model->lv = 'Sīkāka informācija \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Detaliu \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 384;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCheckRadioListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZCheckRadioListWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 387;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZIconPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZIconPickerWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 393;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKRangeInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKRangeInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 398;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTextAreaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZTextAreaWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 412;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKGrowlWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZKGrowlWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'Страница {\\\\\\\\\\\\\\\\\$current} из {\\\\\\\\\\\\\\\\\$pagination->getPageCount()}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZSwitchBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Page {\\ \\\\\\\\\\\\\\\$ current} of {\\ \\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ Joriy sahifaning {\\ \\\\\\\\\\\\\\\$ joriy sahifasi-&gt; getPageCount ()}';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Жорий саҳифанинг {\\ \\\\\\\\\\\\\\\$ жорий саҳифаси-&гт; getPageCount ()}';
        $this->model->lv = 'Vietnes {\\ \\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()} lapa {\\ \\\\\\\\\\\\\\\$ current}';
        $this->model->ro = 'Pagina {\\ \\\\\\\\\\\\\\\$ curent} din {\\ \\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = 'Применить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZKEditableWidgetNorm.php';
        $this->model->from = 'ru';
        $this->model->en = 'To apply';
        $this->model->ru = '';
        $this->model->uz = 'Topshirmoq';
        $this->model->uzk = 'Топширмоқ';
        $this->model->lv = 'Pieteikties';
        $this->model->ro = 'A aplica';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = 'Настройки DynaGrid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZSettingBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'DynaGrid Settings';
        $this->model->ru = '';
        $this->model->uz = 'DynaGrid sozlamalari';
        $this->model->uzk = 'ДйнаГрид созламалари';
        $this->model->lv = 'DynaGrid iestatījumi';
        $this->model->ro = 'Setări DynaGrid';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Удалить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZFriendRequestsWidget_jamshid.php';
        $this->model->from = 'ru';
        $this->model->en = 'Delete';
        $this->model->ru = '';
        $this->model->uz = 'Yo\'q qilish';
        $this->model->uzk = 'Йўқ қилиш';
        $this->model->lv = 'Dzēst';
        $this->model->ro = 'Șterge';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'Сохранить все изменения';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZStatisticsBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save All Changes';
        $this->model->ru = '';
        $this->model->uz = 'Barcha o\'zgarishlarni saqlang';
        $this->model->uzk = 'Барча ўзгаришларни сақланг';
        $this->model->lv = 'Saglabāt visas izmaiņas';
        $this->model->ro = 'Salvați toate modificările';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'Zcheckbox';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZImgRadioWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Zcheckbox';
        $this->model->ru = '';
        $this->model->uz = 'Zcheckbox';
        $this->model->uzk = 'Zcheckbox';
        $this->model->lv = 'Zcheckbox';
        $this->model->ro = 'Zcheckbox';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'Язык';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'Tongue';
        $this->model->ru = '';
        $this->model->uz = 'Til';
        $this->model->uzk = 'Тил';
        $this->model->lv = 'Mēle';
        $this->model->ro = 'Limbă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = '<b>asd</b>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZRadioGroupWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>asd</b>';
        $this->model->ru = '';
        $this->model->uz = '<b>asd</b>';
        $this->model->uzk = '<б>асд</б>';
        $this->model->lv = '<b>asd</b>';
        $this->model->ro = '<b>asd</b>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = 'Главная страница';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/menus/ZMmenuWidget_Z.php';
        $this->model->from = 'ru';
        $this->model->en = 'Home page';
        $this->model->ru = '';
        $this->model->uz = 'Bosh sahifa';
        $this->model->uzk = 'Бош саҳифа';
        $this->model->lv = 'Sākumlapa';
        $this->model->ro = 'pagina principala';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 353;
        $this->model->sort = null;
        $this->model->name = 'Выход';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Output';
        $this->model->ru = '';
        $this->model->uz = 'Chiqish';
        $this->model->uzk = 'Чиқиш';
        $this->model->lv = 'Izeja';
        $this->model->ro = 'producție';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = 'Мои заказы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'My orders';
        $this->model->ru = '';
        $this->model->uz = 'Mening buyurtmalarim';
        $this->model->uzk = 'Менинг буюртмаларим';
        $this->model->lv = 'Mani pasūtījumi';
        $this->model->ro = 'Comenzile mele';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 356;
        $this->model->sort = null;
        $this->model->name = 'Избранное';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Favorite';
        $this->model->ru = '';
        $this->model->uz = 'Sevimli';
        $this->model->uzk = 'Севимли';
        $this->model->lv = 'Mīļākā';
        $this->model->ro = 'Favorită';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 462;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTypeaheadWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKTypeaheadWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZLanguagePickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/навигат/ZLanguagePickerWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 413;
        $this->model->sort = null;
        $this->model->name = '<img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZModalWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = '<img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<имг src=\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 401;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZStickyElementsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/навигат/ZAccLayWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'По названию';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/ZProductTabsOnlyWidgetD.php';
        $this->model->from = 'ru';
        $this->model->en = 'By name';
        $this->model->ru = '';
        $this->model->uz = 'Nomi bo\'yicha';
        $this->model->uzk = 'Номи бўйича';
        $this->model->lv = 'Pēc vārda';
        $this->model->ro = 'Dupa nume';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = ' Are you sure you want to delete the setting?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure you want to delete the setting?';
        $this->model->ru = '';
        $this->model->uz = 'Haqiqatan ham sozlamani yo\'q qilmoqchimisiz?';
        $this->model->uzk = 'Ҳақиқатан ҳам созламани йўқ қилмоқчимисиз?';
        $this->model->lv = 'Vai tiešām vēlaties dzēst iestatījumu?';
        $this->model->ro = 'Sigur doriți să ștergeți setarea?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'trashRemove saved grid setting';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'trashRemove saved grid setting';
        $this->model->ru = '';
        $this->model->uz = 'trashRemove saqlangan panjara sozlamalari';
        $this->model->uzk = 'трашРемове сақланган панжара созламалари';
        $this->model->lv = 'trashRemove saglabāto režģa iestatījumu';
        $this->model->ro = 'trashRetați setarea salvată a grilei';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'Вы хотите клонировать этот элемент(ы)?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Do you want to clone this item (s)?';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu element (lar) ni klonlashni xohlaysizmi?';
        $this->model->uzk = 'Ушбу элемент (лар) ни клонлашни xоҳлайсизми?';
        $this->model->lv = 'Vai vēlaties klonēt šo (-s) vienumu (-as)?';
        $this->model->ro = 'Doriți să clonați acest articol (e)?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'Запустить команду cruds/run/apply для этой модели?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Run cruds / run / apply command for this model?';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu model uchun cruds / run / buyruqni ishlatish?';
        $this->model->uzk = 'Ушбу модел учун cruds / рун / буйруқни ишлатиш?';
        $this->model->lv = 'Vai palaist krāpšanu / palaist / lietot komandu šim modelim?';
        $this->model->ro = 'Rulează comanda cruds / run / apply pentru acest model?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'Выберите столбцы для экспорта';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Select columns to export';
        $this->model->ru = '';
        $this->model->uz = 'Eksport qilish uchun ustunlarni tanlang';
        $this->model->uzk = 'Экспорт қилиш учун устунларни танланг';
        $this->model->lv = 'Atlasiet eksportējamās kolonnas';
        $this->model->ro = 'Selectați coloane de exportat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Trashing all personalizations';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Trashing all personalizations';
        $this->model->ru = '';
        $this->model->uz = 'Barcha shaxsiylashtirishlarni axlatlash';
        $this->model->uzk = 'Барча шаxсийлаштиришларни аxлатлаш';
        $this->model->lv = 'Visu personalizāciju iznīcināšana';
        $this->model->ro = 'Ștergerea tuturor personalizărilor';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = 'Избежать разметки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Avoid markup';
        $this->model->ru = '';
        $this->model->uz = 'Belgilashdan saqlaning';
        $this->model->uzk = 'Белгилашдан сақланинг';
        $this->model->lv = 'Izvairieties no iezīmēšanas';
        $this->model->ro = 'Evitați marcarea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = 'Содержание после';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Content after';
        $this->model->ru = '';
        $this->model->uz = 'Keyin tarkib';
        $this->model->uzk = 'Кейин таркиб';
        $this->model->lv = 'Saturs pēc';
        $this->model->ro = 'Conținut după';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = 'Тип';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSortableWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'A type';
        $this->model->ru = '';
        $this->model->uz = 'Bir tur';
        $this->model->uzk = 'Бир тур';
        $this->model->lv = 'Veids';
        $this->model->ro = 'Un fel';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'В наличии';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZMarketCardsJaxonWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'In stock';
        $this->model->ru = '';
        $this->model->uz = 'Omborda mavjud; sotuvda mavjud';
        $this->model->uzk = 'Омборда мавжуд; сотувда мавжуд';
        $this->model->lv = 'Noliktavā';
        $this->model->ro = 'In stoc';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = 'Вход';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'entrance';
        $this->model->ru = '';
        $this->model->uz = 'Kirish';
        $this->model->uzk = 'Кириш';
        $this->model->lv = 'ieeja';
        $this->model->ro = 'Intrare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Нет контента';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/ajaxify/ZInfinityScrollAjaxWidget_1.php';
        $this->model->from = 'ru';
        $this->model->en = 'No content';
        $this->model->ru = '';
        $this->model->uz = 'Tarkib yo\'q';
        $this->model->uzk = 'Таркиб йўқ';
        $this->model->lv = 'Nav satura';
        $this->model->ro = 'Fara continut';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = 'Добавить в корзину';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/ZHMarketSuggestion.php';
        $this->model->from = 'ru';
        $this->model->en = 'Add to Shopping Cart';
        $this->model->ru = '';
        $this->model->uz = 'Savatga qo\'shish';
        $this->model->uzk = 'Саватга қўшиш';
        $this->model->lv = 'Pievienot iepirkumu grozam';
        $this->model->ro = 'Adauga in cosul de cumparaturi';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'Посмотреть все уведомления';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZFriendRequestsWidget_jamshid.php';
        $this->model->from = 'ru';
        $this->model->en = 'View all notifications';
        $this->model->ru = '';
        $this->model->uz = 'Barcha bildirishnomalarni ko\'rish';
        $this->model->uzk = 'Барча билдиришномаларни кўриш';
        $this->model->lv = 'Skatīt visus paziņojumus';
        $this->model->ro = 'Vizualizați toate notificările';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'Are you sure you want to delete this item?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDetailWidget_0403_8-52.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure you want to delete this item?';
        $this->model->ru = '';
        $this->model->uz = 'Haqiqatan ham ushbu narsani o‘chirib tashlamoqchimisiz?';
        $this->model->uzk = 'Ҳақиқатан ҳам ушбу нарсани ўчириб ташламоқчимисиз?';
        $this->model->lv = 'Vai tiešām vēlaties dzēst šo vienumu?';
        $this->model->ro = 'Sigur doriți să ștergeți acest articol?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'Элемент не выбран.';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/Dups/ZDynaCheckWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'No item selected.';
        $this->model->ru = '';
        $this->model->uz = 'Hech narsa tanlanmagan.';
        $this->model->uzk = 'Ҳеч нарса танланмаган.';
        $this->model->lv = 'Nav atlasīts neviens vienums.';
        $this->model->ro = 'Nu a fost selectat niciun element.';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 366;
        $this->model->sort = null;
        $this->model->name = 'Детали {\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Details {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = 'Tafsilotlar {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->uzk = 'Тафсилотлар {\\\\\\\\\\\\\\\$ тҳис -&гт; _ config [ътитлеъ]}';
        $this->model->lv = 'Sīkāka informācija {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Detalii {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 395;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKStarRatingWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 404;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZLanguagePickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/навигат/ZLanguagePickerWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Подобрать {\\\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetRav.php';
        $this->model->from = 'ru';
        $this->model->en = 'Pick up {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} ni tanlang';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} ни танланг';
        $this->model->lv = 'Saņemt {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Ridica {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZBootstrapModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/формер/ZBootstrapModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'Изменить {\\\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} tahrirla';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} таҳрирла';
        $this->model->lv = 'Rediģēt {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Editați {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 481;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTextAreaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZTextAreaWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'Детали {\\\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Details {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = 'Tafsilotlar {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->uzk = 'Тафсилотлар {\\ \\\\\\\\\\\\\\\$ тҳис -&гт; _ config [ътитлеъ]}';
        $this->model->lv = 'Sīkāka informācija {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Detalii {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'View \\\\\\\\\\\\\\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'View \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = '\\ \\\\\\\\\\\\\\\$ This-&gt; modelClassName-ni ko\'ring';
        $this->model->uzk = '\\ \\\\\\\\\\\\\\\$ Тҳис-&гт; modelClassName-ни кўринг';
        $this->model->lv = 'Skatīt \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Vizualizați \\ \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'Создание {\\\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Create {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} yaratish';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} яратиш';
        $this->model->lv = 'Izveidot {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Creați {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Are you sure you want DELETE columns?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZTabularWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure you want DELETE columns?';
        $this->model->ru = '';
        $this->model->uz = 'Haqiqatan ham DELETE ustunlari kerakligiga ishonchingiz komilmi?';
        $this->model->uzk = 'Ҳақиқатан ҳам ДЕЛЕТЕ устунлари кераклигига ишончингиз комилми?';
        $this->model->lv = 'Vai tiešām vēlaties izdzēst kolonnas?';
        $this->model->ro = 'Sigur doriți să ștergeți coloane?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'Экспорт данных с текущей страницы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportBtnWidget1.php';
        $this->model->from = 'ru';
        $this->model->en = 'Export data from the current page';
        $this->model->ru = '';
        $this->model->uz = 'Joriy sahifadan ma\'lumotlarni eksport qilish';
        $this->model->uzk = 'Жорий саҳифадан маълумотларни экспорт қилиш';
        $this->model->lv = 'Eksportēt datus no pašreizējās lapas';
        $this->model->ro = 'Exportul de date din pagina curentă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'This widget is for visual edit tables from Database';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'This widget is for visual edit tables from Database';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu vidjet Database-dan vizual tahrirlash jadvallari uchun';
        $this->model->uzk = 'Ушбу виджет Датабасе-дан визуал таҳрирлаш жадваллари учун';
        $this->model->lv = 'Šis logrīks ir paredzēts datu bāzes vizuālo rediģēšanas tabulu izveidošanai';
        $this->model->ro = 'Acest widget este destinat tabelelor de editare vizuală din baza de date';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = 'Card data not gound';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZSingleProductWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Card data not gound';
        $this->model->ru = '';
        $this->model->uz = 'Karta ma\'lumotlari juda muhim emas';
        $this->model->uzk = 'Карта маълумотлари жуда муҳим эмас';
        $this->model->lv = 'Kartes dati nav precīzi';
        $this->model->ro = 'Datele cardului nu se încadrează';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'Дополнить контент1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Add content1';
        $this->model->ru = '';
        $this->model->uz = 'Tarkibni qo\'shish1';
        $this->model->uzk = 'Таркибни қўшиш1';
        $this->model->lv = 'Pievienojiet saturu1';
        $this->model->ro = 'Adăugați conținut1';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'Размер';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'The size';
        $this->model->ru = '';
        $this->model->uz = 'Hajmi';
        $this->model->uzk = 'Ҳажми';
        $this->model->lv = 'Izmērs';
        $this->model->ro = 'Marimea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = '{rating} Stars';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = '{rating} Stars';
        $this->model->ru = '';
        $this->model->uz = '{reyting} Yulduzlar';
        $this->model->uzk = '{рейтинг} Юлдузлар';
        $this->model->lv = '{vērtējums} Zvaigznes';
        $this->model->ro = '{rating} Stele';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 482;
        $this->model->sort = null;
        $this->model->name = 'Page {\\\\\$current} of {\\\\\$pagination->getPageCount()}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZLeBazarBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Page {\\\\\$ current} of {\\\\\$ pagination-&gt; getPageCount ()}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ Pagination-&gt; getPageCount ()} ning {\\\\\$ joriy} sahifasi.';
        $this->model->uzk = '{\\\\\$ Пагинатион-&гт; getPageCount ()} нинг {\\\\\$ жорий} саҳифаси.';
        $this->model->lv = '{\\\\\$ Pagination-&gt; getPageCount ()} lapa {\\\\\$ current}';
        $this->model->ro = 'Pagina {\\\\\$ curent} din {\\\\\$ pagination-&gt; getPageCount ()}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = 'Создание {\\\\\\\\\\\\\\\\\$this->_config[\'defaultTitle\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeSpaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Create {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ This -&gt; _ config [\'defaultTitle\']} yaratish';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ъдефаултТитлеъ]} яратиш';
        $this->model->lv = 'Izveidot {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->model->ro = 'Creați {\\ \\\\\\\\\\\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'Посмотреть товары заказа';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetJ.php';
        $this->model->from = 'ru';
        $this->model->en = 'View order items';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtma buyumlarini ko‘rish';
        $this->model->uzk = 'Буюртма буюмларини кўриш';
        $this->model->lv = 'Skatīt pasūtījuma preces';
        $this->model->ro = 'Vizualizați articolele de comandă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'Grapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCheckRadioListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Grapes';
        $this->model->ru = '';
        $this->model->uz = 'Uzum';
        $this->model->uzk = 'Узум';
        $this->model->lv = 'Vīnogas';
        $this->model->ro = 'struguri';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'Edit';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZKEditableWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit';
        $this->model->ru = '';
        $this->model->uz = 'Tahrirlash';
        $this->model->uzk = 'Таҳрирлаш';
        $this->model->lv = 'Rediģēt';
        $this->model->ro = 'Editați | ×';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/формер/ZViewWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZWizardStepsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/формер/ZWizardStepsWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = '<b>Titile</b><img src=\\\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/values/ZMultiViewWidgetD.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Titile</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>Titusga oid</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>Титусга оид</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/формер/ZMultiWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>Tituls</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>Titile</b> <img src=\\\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inptest/ZImageCheckboxGroupWidgetX_18052020.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZImageCheckboxWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputMaskWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZInputMaskWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKPasswordInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKPasswordInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCheckRadioListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZCheckRadioListWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCheckRadioListWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCKEditorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZCKEditorWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = '<h4>Select2</h4>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZSelect2Widget3.php';
        $this->model->from = 'ru';
        $this->model->en = '<h4> Select2 </h4>';
        $this->model->ru = '';
        $this->model->uz = '<h4> 2-ni tanlang </h4>';
        $this->model->uzk = '<ҳ4> 2-ни танланг </ҳ4>';
        $this->model->lv = '<h4> Atlasiet2 </h4>';
        $this->model->ro = '<h4> Select2 </h4>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'StarRating';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'Starring';
        $this->model->ru = '';
        $this->model->uz = 'Bosh rolda';
        $this->model->uzk = 'Бош ролда';
        $this->model->lv = 'Lomās';
        $this->model->ro = 'In rolurile principale';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'Not Rated';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = 'Not rated';
        $this->model->ru = '';
        $this->model->uz = 'Baholanmagan';
        $this->model->uzk = 'Баҳоланмаган';
        $this->model->lv = 'Nav novērtēts';
        $this->model->ro = 'Nu a fost votat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 493;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/@ Doub/ZKPopoverXWidgetNew.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZKPopoverXWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 490;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZLanguagePickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/навигат/ZLanguagePickerWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZLanguagePickerWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'Заголовок 4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Heading 4';
        $this->model->ru = '';
        $this->model->uz = 'Sarlavha 4';
        $this->model->uzk = 'Сарлавҳа 4';
        $this->model->lv = '4. pozīcija';
        $this->model->ro = 'Rubrica 4';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = 'курсивный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'italic';
        $this->model->ru = '';
        $this->model->uz = 'kursiv';
        $this->model->uzk = 'курсив';
        $this->model->lv = 'slīpraksts';
        $this->model->ro = 'cursiv';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZHCheckboxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZHCheckboxWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 474;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKPasswordInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKPasswordInputWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZIconPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZIconPickerWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKCheckboxXWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKCheckboxXWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = 'Checkbox';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKCheckboxXWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Checkbox';
        $this->model->ru = '';
        $this->model->uz = 'Belgilash katakchasi';
        $this->model->uzk = 'Белгилаш катакчаси';
        $this->model->lv = 'Izvēles rūtiņa';
        $this->model->ro = 'Caseta de bifat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 475;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKRangeInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKRangeInputWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTypeaheadWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKTypeaheadWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKStarRatingWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTouchSpinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKTouchSpinWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTelInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZTelInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'Изменить прозрачность';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Change transparency';
        $this->model->ru = '';
        $this->model->uz = 'Shaffoflikni o\'zgartiring';
        $this->model->uzk = 'Шаффофликни ўзгартиринг';
        $this->model->lv = 'Mainiet caurspīdīgumu';
        $this->model->ro = 'Schimbă transparența';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'Включить тепловую карту';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Enable heatmap';
        $this->model->ru = '';
        $this->model->uz = 'Issiqlik xaritasini yoqish';
        $this->model->uzk = 'Иссиқлик xаритасини ёқиш';
        $this->model->lv = 'Iespējot siltuma karti';
        $this->model->ro = 'Activați harta de căldură';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 340;
        $this->model->sort = null;
        $this->model->name = 'Режим путешествия';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Travel mode';
        $this->model->ru = '';
        $this->model->uz = 'Sayohat rejimi';
        $this->model->uzk = 'Саёҳат режими';
        $this->model->lv = 'Ceļojuma režīms';
        $this->model->ro = 'Mod de călătorie';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 487;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZMDBAccordionWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/навигат/ZCollapsesWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = 'JqueryConfirm';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZJqueryConfirmWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Jqueryconfirm';
        $this->model->ru = '';
        $this->model->uz = 'Jqueryconfirm';
        $this->model->uzk = 'Jqueryconfirm';
        $this->model->lv = 'Jqueryconfirm';
        $this->model->ro = 'Jqueryconfirm';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKAlertWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZKAlertWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = 'Центр';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Center';
        $this->model->ru = '';
        $this->model->uz = 'Markaz';
        $this->model->uzk = 'Марказ';
        $this->model->lv = 'Centrs';
        $this->model->ro = 'Centru';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = 'Нет продукта';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZDilshodBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'No product';
        $this->model->ru = '';
        $this->model->uz = 'Hech qanday mahsulot yo\'q';
        $this->model->uzk = 'Ҳеч қандай маҳсулот йўқ';
        $this->model->lv = 'Nav produkta';
        $this->model->ro = 'Fără produs';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/@ Doub/ZKPopoverXWidgetNew.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZKPopoverXWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 284;
        $this->model->sort = null;
        $this->model->name = 'Page {\\\\\\\\\\\\\\\\\$current} of {\\\\\\\\\\\\\\\\\$pagination->getPageCount()}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZLeBazarBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Page {\\ \\\\\\\\\\\\\\\$ current} of {\\ \\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->model->ru = '';
        $this->model->uz = '{\\ \\\\\\\\\\\\\\\$ Joriy sahifaning {\\ \\\\\\\\\\\\\\\$ joriy sahifasi-&gt; getPageCount ()}';
        $this->model->uzk = '{\\ \\\\\\\\\\\\\\\$ Жорий саҳифанинг {\\ \\\\\\\\\\\\\\\$ жорий саҳифаси-&гт; getPageCount ()}';
        $this->model->lv = 'Vietnes {\\ \\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()} lapa {\\ \\\\\\\\\\\\\\\$ current}';
        $this->model->ro = 'Pagina {\\ \\\\\\\\\\\\\\\$ curent} din {\\ \\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = 'BreadCrumb';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZBreadCrumbWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Breadcrumb';
        $this->model->ru = '';
        $this->model->uz = 'Breadcrumb';
        $this->model->uzk = 'Breadcrumb';
        $this->model->lv = 'Maizes klucis';
        $this->model->ro = 'Breadcrumb';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZBreadCrumbWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/навигат/ZBreadCrumbWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZRegulationBadgeButton.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/навигат/ЗРегулатионБадгеБуттон/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZBootstrapPopoverWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZBootstrapPopoverWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZIframeWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZIframeWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 502;
        $this->model->sort = null;
        $this->model->name = 'Выбрать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZGrapesCardWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Choose';
        $this->model->ru = '';
        $this->model->uz = 'Tanlang';
        $this->model->uzk = 'Танланг';
        $this->model->lv = 'Izvēlieties';
        $this->model->ro = 'Alege';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = 'Поиск';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Search';
        $this->model->ru = '';
        $this->model->uz = 'Qidirmoq';
        $this->model->uzk = 'Қидирмоқ';
        $this->model->lv = 'Meklēt';
        $this->model->ro = 'Căutare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZKTabXWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/навигат/ZKTabXWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 503;
        $this->model->sort = null;
        $this->model->name = 'Смотреть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZGrapesCardWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Look';
        $this->model->ru = '';
        $this->model->uz = 'Qarang';
        $this->model->uzk = 'Қаранг';
        $this->model->lv = 'Skaties';
        $this->model->ro = 'Uite';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = 'Мой MarketPlace';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'My MarketPlace';
        $this->model->ru = '';
        $this->model->uz = 'Mening MarketPlace';
        $this->model->uzk = 'Менинг MarketPlace';
        $this->model->lv = 'Mana MarketPlace';
        $this->model->ro = 'Piața mea de piață';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 492;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZRegulationBadgeButton.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/навигат/ЗРегулатионБадгеБуттон/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 351;
        $this->model->sort = null;
        $this->model->name = 'Новый пользовател';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'New user';
        $this->model->ru = '';
        $this->model->uz = 'Yangi foydalanuvchi';
        $this->model->uzk = 'Янги фойдаланувчи';
        $this->model->lv = 'Jauns lietotājs';
        $this->model->ro = 'Utilizator nou';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 371;
        $this->model->sort = null;
        $this->model->name = '{\\\\\\\\\\\\\\\$count} из {\\\\\\\\\\\\\\\$total} записей показаны';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetRav.php';
        $this->model->from = 'ru';
        $this->model->en = '{\\\\\\\\\\\\\\\$ count} of {\\\\\\\\\\\\\\\$ total} entries shown';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'rsatilgan {\\\\\\\\\\\\\\\$ total} yozuvlarning {\\\\\\\\\\\\\\\$ count}';
        $this->model->uzk = 'Кўрсатилган {\\\\\\\\\\\\\\\$ тотал} ёзувларнинг {\\\\\\\\\\\\\\\$ count}';
        $this->model->lv = 'Parādīts {\\\\\\\\\\\\\\\$ count} no {\\\\\\\\\\\\\\\$ total} ierakstiem';
        $this->model->ro = '{\\\\\\\\\\\\\\\$ count} din {\\\\\\\\\\\\\\\$ total} înregistrări afișate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZMDBAccordionWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/навигат/ZCollapsesWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 430;
        $this->model->sort = null;
        $this->model->name = 'Страницы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Pages';
        $this->model->ru = '';
        $this->model->uz = 'Sahifalar';
        $this->model->uzk = 'Саҳифалар';
        $this->model->lv = 'Lapas';
        $this->model->ro = 'Pagini';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 364;
        $this->model->sort = null;
        $this->model->name = 'Просмотр {\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'View {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} ni ko\'rish';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} ни кўриш';
        $this->model->lv = 'Skatīt {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Vizualizați {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZStickyElementsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/навигат/ZAccLayWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetShahzod.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZPopoverWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = 'Collapses';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZMDBAccordionWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Collapses';
        $this->model->ru = '';
        $this->model->uz = 'Yiqilib tushadi';
        $this->model->uzk = 'Йиқилиб тушади';
        $this->model->lv = 'Sabrūk';
        $this->model->ro = 'Restrângerea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = 'Пешком';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/@ Doub/ZGoogleWidget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'On foot';
        $this->model->ru = '';
        $this->model->uz = 'Oyoqda';
        $this->model->uzk = 'Оёқда';
        $this->model->lv = 'Kājām';
        $this->model->ro = 'Pe jos';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = 'Страница {\\\\\\\\\\\\\\\$current} из {\\\\\\\\\\\\\\\$pagination->getPageCount()}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZSwitchBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Page {\\\\\\\\\\\\\\\$ current} of {\\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ Pagination-&gt; getPageCount ()} ning {\\\\\\\\\\\\\\\$ joriy} sahifasi.';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Пагинатион-&гт; getPageCount ()} нинг {\\\\\\\\\\\\\\\$ жорий} саҳифаси.';
        $this->model->lv = '{\\\\\\\\\\\\\\\$ Pagination-&gt; getPageCount ()} lapa {\\\\\\\\\\\\\\\$ current}';
        $this->model->ro = 'Pagina {\\\\\\\\\\\\\\\$ curent} din {\\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 360;
        $this->model->sort = null;
        $this->model->name = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Назад</spanclass>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetMirshod.php';
        $this->model->from = 'ru';
        $this->model->en = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Back</span> </spanclass>';
        $this->model->ru = '';
        $this->model->uz = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Orqaga</span> </spanclass>';
        $this->model->uzk = '<спан class=\\\\\\\\\\\\\\\"д-block\\\\\\\\\\\\\\\">Орқага</спан> </spanclass>';
        $this->model->lv = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Atpakaļ</span> </spanclass>';
        $this->model->ro = '<span class=\\\\\\\\\\\\\\\"d-block\\\\\\\\\\\\\\\">Înapoi</span> </spanclass>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 379;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZWizardStepsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/формер/ZWizardStepsWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 374;
        $this->model->sort = null;
        $this->model->name = 'Редактировать \\\\\\\\\\\\\\\$column->title';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZEditableIframeWidgetShahzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit \\\\\\\\\\\\\\\$ column-&gt; title';
        $this->model->ru = '';
        $this->model->uz = '\\\\\\\\\\\\\\\$ Ustun-&gt; sarlavhasini tahrirla';
        $this->model->uzk = '\\\\\\\\\\\\\\\$ Устун-&гт; сарлавҳасини таҳрирла';
        $this->model->lv = 'Rediģēt kolonnu \\\\\\\\\\\\\\\$-&gt; virsraksts';
        $this->model->ro = 'Editează \\\\\\\\\\\\\\\$ coloană-&gt; titlu';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 383;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTypeaheadWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKTypeaheadWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTypeaheadWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 357;
        $this->model->sort = null;
        $this->model->name = 'Уведомления';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Notifications';
        $this->model->ru = '';
        $this->model->uz = 'Bildirishnomalar';
        $this->model->uzk = 'Билдиришномалар';
        $this->model->lv = 'Paziņojumi';
        $this->model->ro = 'notificări';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 494;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZBootstrapPopoverWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZBootstrapPopoverWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZBootstrapPopoverWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Корзинке пока нет товаров';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZCartReviewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'You have no items in your shopping cart.';
        $this->model->ru = '';
        $this->model->uz = 'Savatda hech qanday buyum yo\'q.';
        $this->model->uzk = 'Саватда ҳеч қандай буюм йўқ.';
        $this->model->lv = 'Pirkumu grozā nav preču.';
        $this->model->ro = 'Nu aveți articole în coșul de cumpărături.';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 402;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZMDBAccordionWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/навигат/ZCollapsesWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZCollapsesWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 365;
        $this->model->sort = null;
        $this->model->name = 'Изменить {\\\\\\\\\\\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ This -&gt; _ config [\'title\']} tahrirla';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} таҳрирла';
        $this->model->lv = 'Rediģēt {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Editați {\\\\\\\\\\\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 375;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZSelect2Widget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'Show Details';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Show Details';
        $this->model->ru = '';
        $this->model->uz = 'Tafsilotlarni ko\'rsatish';
        $this->model->uzk = 'Тафсилотларни кўрсатиш';
        $this->model->lv = 'Parādīt detaļas';
        $this->model->ro = 'Arata detaliile';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 372;
        $this->model->sort = null;
        $this->model->name = 'Товары заказа \\\\\\\\\\\\\\\$model->name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetJ.php';
        $this->model->from = 'ru';
        $this->model->en = 'Order Items \\\\\\\\\\\\\\\$ model-&gt; name';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtma buyumlari \\\\\\\\\\\\\\\$ model-&gt; nomi';
        $this->model->uzk = 'Буюртма буюмлари \\\\\\\\\\\\\\\$ модел-&гт; номи';
        $this->model->lv = 'Pasūtījumu vienības \\\\\\\\\\\\\\\$ modelis-&gt; nosaukums';
        $this->model->ro = 'Comanda elemente \\\\\\\\\\\\\\\$ model-&gt; nume';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 380;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inptest/ZImageCheckboxGroupWidgetX_18052020.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZImageCheckboxWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 361;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKSelect2Widget/имаге/icon.жпг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 378;
        $this->model->sort = null;
        $this->model->name = '<b>Titile</b><img src=\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/values/ZMultiViewWidgetD.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Titile</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>Titusga oid</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>Титусга оид</б> <имг src=\\\\\\\\\\\\\\\"/рендер/формер/ZMultiWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>Tituls</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>Titile</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 369;
        $this->model->sort = null;
        $this->model->name = 'View \\\\\\\\\\\\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget__2.php';
        $this->model->from = 'ru';
        $this->model->en = 'View \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = '\\\\\\\\\\\\\\\$ This-&gt; modelClassName-ni ko\'ring';
        $this->model->uzk = '\\\\\\\\\\\\\\\$ Тҳис-&гт; modelClassName-ни кўринг';
        $this->model->lv = 'Skatīt \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Vizualizați \\\\\\\\\\\\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 363;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/формер/ZViewWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 381;
        $this->model->sort = null;
        $this->model->name = '<b>Title</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZFileInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Title</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>Sarlavha</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>Сарлавҳа</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZFileInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>Nosaukums</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>Titlu</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 386;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZHCheckboxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZHCheckboxWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 385;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCKEditorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZCKEditorWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 388;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputLatinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZInputLatinWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Общее';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/Dups/ZDynaWidget_17052020.php';
        $this->model->from = 'ru';
        $this->model->en = 'General';
        $this->model->ru = '';
        $this->model->uz = 'Umumiy';
        $this->model->uzk = 'Умумий';
        $this->model->lv = 'Vispārīgi';
        $this->model->ro = 'General';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 389;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputMaskWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZInputMaskWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 391;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKDatepickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKDatepickerWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 392;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKPasswordInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKPasswordInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKPasswordInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Посмотреть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/actions/ZEasyViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Look';
        $this->model->ru = '';
        $this->model->uz = 'Qarang';
        $this->model->uzk = 'Қаранг';
        $this->model->lv = 'Skaties';
        $this->model->ro = 'Uite';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 394;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSortableInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKSortableInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 406;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/@ Doub/ZKPopoverXWidgetNew.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZKPopoverXWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKPopoverXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 396;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKTouchSpinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKTouchSpinWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKTouchSpinWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 397;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTelInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZTelInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 399;
        $this->model->sort = null;
        $this->model->name = 'Page {\\\\\\\\\\\\\\\$current} of {\\\\\\\\\\\\\\\$pagination->getPageCount()}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZLeBazarBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Page {\\\\\\\\\\\\\\\$ current} of {\\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\\\\\\\\\\\$ Pagination-&gt; getPageCount ()} ning {\\\\\\\\\\\\\\\$ joriy} sahifasi.';
        $this->model->uzk = '{\\\\\\\\\\\\\\\$ Пагинатион-&гт; getPageCount ()} нинг {\\\\\\\\\\\\\\\$ жорий} саҳифаси.';
        $this->model->lv = '{\\\\\\\\\\\\\\\$ Pagination-&gt; getPageCount ()} lapa {\\\\\\\\\\\\\\\$ current}';
        $this->model->ro = 'Pagina {\\\\\\\\\\\\\\\$ curent} din {\\\\\\\\\\\\\\\$ pagination-&gt; getPageCount ()}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 408;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZDrublicModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZDrublicModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 411;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKAlertWidget.php';
        $this->model->from = 'test';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZKAlertWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'Нет продутков';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/ajaxify/ZInfinityScrollAjaxWidget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'No products';
        $this->model->ru = '';
        $this->model->uz = 'Mahsulotlar yo\'q';
        $this->model->uzk = 'Маҳсулотлар йўқ';
        $this->model->lv = 'Nav produktu';
        $this->model->ro = 'Fără produse';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = 'Pазмер шрифта';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/actions/ZEasyViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Font size';
        $this->model->ru = '';
        $this->model->uz = 'Shrift hajmi';
        $this->model->uzk = 'Шрифт ҳажми';
        $this->model->lv = 'Fonta izmērs';
        $this->model->ro = 'Marimea fontului';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 405;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZRegulationBadgeButton.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/навигат/ЗРегулатионБадгеБуттон/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZRegulationBadgeButton/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'BootstrapModal';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZBootstrapModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Bootstrapmodal';
        $this->model->ru = '';
        $this->model->uz = 'Bootstrapmodal';
        $this->model->uzk = 'Бооцтрапмодал';
        $this->model->lv = 'Bootstrapmodal';
        $this->model->ro = 'Bootstrapmodal';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Вы действительно хотите клонировать все эти данные?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/Dups/ZDynaWidget_17052020.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure you want to clone all this data?';
        $this->model->ru = '';
        $this->model->uz = 'Haqiqatan ham ushbu ma\'lumotlarni klonlashtirishni xohlaysizmi?';
        $this->model->uzk = 'Ҳақиқатан ҳам ушбу маълумотларни клонлаштиришни xоҳлайсизми?';
        $this->model->lv = 'Vai tiešām vēlaties klonēt visus šos datus?';
        $this->model->ro = 'Sunteți sigur că doriți să clonați toate aceste date?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'Вы действительно хотите удалить все эти данные?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/Dups/ZDynaWidget_17052020.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure you want to delete all this data?';
        $this->model->ru = '';
        $this->model->uz = 'Haqiqatan ham bu barcha ma\'lumotlarni yo\'q qilmoqchimisiz?';
        $this->model->uzk = 'Ҳақиқатан ҳам бу барча маълумотларни йўқ қилмоқчимисиз?';
        $this->model->lv = 'Vai tiešām vēlaties dzēst visus šos datus?';
        $this->model->ro = 'Sigur doriți să ștergeți toate aceste date?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Перезагрузить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZArrayWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Reload';
        $this->model->ru = '';
        $this->model->uz = 'Qayta yuklang';
        $this->model->uzk = 'Қайта юкланг';
        $this->model->lv = 'Pārlādēt';
        $this->model->ro = 'Reîncarcă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'Нормализовать эту Форму?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Normalize this form?';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu shakl normalizatsiya qilinsinmi?';
        $this->model->uzk = 'Ушбу шакл нормализация қилинсинми?';
        $this->model->lv = 'Normalizēt šo formu?';
        $this->model->ro = 'Normalizați această formă?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 443;
        $this->model->sort = null;
        $this->model->name = '{\\\\\$count} из {\\\\\$total} записей показаны';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = '{\\\\\$ count} of {\\\\\$ total} records are shown';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ total} yozuvlarining {\\\\\$ count} ko\'rsatilgan';
        $this->model->uzk = '{\\\\\$ тотал} ёзувларининг {\\\\\$ count} кўрсатилган';
        $this->model->lv = 'Tiek parādīti {\\\\\$ count} no {\\\\\$ total} ierakstiem';
        $this->model->ro = 'Se afișează {\\\\\$ count} din {\\\\\$ total} înregistrări';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = 'Confirm action';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Confirm action';
        $this->model->ru = '';
        $this->model->uz = 'Harakatni tasdiqlang';
        $this->model->uzk = 'Ҳаракатни тасдиқланг';
        $this->model->lv = 'Apstipriniet darbību';
        $this->model->ro = 'Confirmați acțiunea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = 'Are you want to DELETE this element';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you want to DELETE this element';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu elementni O\'chirishni xohlaysizmi?';
        $this->model->uzk = 'Ушбу элементни Ўчиришни xоҳлайсизми?';
        $this->model->lv = 'Vai vēlaties izdzēst šo elementu?';
        $this->model->ro = 'Doriți să ștergeți acest element';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = 'Save / edit grid filter';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save / edit grid filter';
        $this->model->ru = '';
        $this->model->uz = 'Panjara filtrini saqlash / tahrirlash';
        $this->model->uzk = 'Панжара филтрини сақлаш / таҳрирлаш';
        $this->model->lv = 'Saglabāt / rediģēt režģa filtru';
        $this->model->ro = 'Salvați / editați filtrul de grilă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = 'Save / edit grid sort';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save / edit grid sort';
        $this->model->ru = '';
        $this->model->uz = 'Panjara turini saqlash / tahrirlash';
        $this->model->uzk = 'Панжара турини сақлаш / таҳрирлаш';
        $this->model->lv = 'Saglabāt / rediģēt režģa kārtošanu';
        $this->model->ro = 'Salvați / editați sortarea grilei';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Saving and applying configuration';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Saving and applying configuration';
        $this->model->ru = '';
        $this->model->uz = 'Konfiguratsiyani saqlash va qo\'llash';
        $this->model->uzk = 'Конфигурацияни сақлаш ва қўллаш';
        $this->model->lv = 'Konfigurācijas saglabāšana un piemērošana';
        $this->model->ro = 'Salvarea și aplicarea configurației';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 444;
        $this->model->sort = null;
        $this->model->name = 'Возврат';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeSpaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Return';
        $this->model->ru = '';
        $this->model->uz = 'Qaytish';
        $this->model->uzk = 'Қайтиш';
        $this->model->lv = 'Atgriezties';
        $this->model->ro = 'Întoarcere';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Cancel';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKColorInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Cancel';
        $this->model->ru = '';
        $this->model->uz = 'Bekor qilish';
        $this->model->uzk = 'Бекор қилиш';
        $this->model->lv = 'Atcelt';
        $this->model->ro = 'Anulare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'вы: \') . \'</span>\' . Az::l(\'Помахать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZMessageWidget_jamshid.php';
        $this->model->from = 'ru';
        $this->model->en = 'you: \'). \'\'. Az :: l (\'Wave';
        $this->model->ru = '';
        $this->model->uz = 'siz: \'). \'\'. Az :: l (\'to\'lqin';
        $this->model->uzk = 'сиз: ъ). ъъ. Аз :: л (ътўлқин';
        $this->model->lv = 'tu: \'). \'\'. Az :: l (\'Vilnis';
        $this->model->ro = 'tu: \'). \'\'. Az :: l (\'Val';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 415;
        $this->model->sort = null;
        $this->model->name = 'Страница {\\\\\$current} из {\\\\\$pagination->getPageCount()}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZSwitchBoxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'The {\\\\\$ current} page of {\\\\\$ pagination-&gt; getPageCount ()}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ Pagination-&gt; getPageCount ()} ning {\\\\\$ joriy} sahifasi';
        $this->model->uzk = '{\\\\\$ Пагинатион-&гт; getPageCount ()} нинг {\\\\\$ жорий} саҳифаси';
        $this->model->lv = '{\\\\\$ Pagination-&gt; getPageCount ()} lapa {\\\\\$ current}';
        $this->model->ro = 'Pagina {\\\\\$ curent} din {\\\\\$ pagination-&gt; getPageCount ()}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'Добавить друзя';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/chates/@ Week/@ Week/ZChatsMain2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Add friends';
        $this->model->ru = '';
        $this->model->uz = 'Do\'stlar qo\'shing';
        $this->model->uzk = 'Дўстлар қўшинг';
        $this->model->lv = 'Pievienot draugus';
        $this->model->ro = 'Adăugați prieteni';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Показать ещё';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/ajaxify/ZInfinityScrollAjaxWidget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Show more';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'proq ko\'rsatish';
        $this->model->uzk = 'Кўпроқ кўрсатиш';
        $this->model->lv = 'Parādīt vairāk';
        $this->model->ro = 'Afișați mai multe';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Скидка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/cards/@Other/ZGridCardWidgetSalohAndAzizjon1.php';
        $this->model->from = 'ru';
        $this->model->en = 'A discount';
        $this->model->ru = '';
        $this->model->uz = 'Chegirma';
        $this->model->uzk = 'Чегирма';
        $this->model->lv = 'Atlaide';
        $this->model->ro = 'O reducere';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 409;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZModalWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 400;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZBreadCrumbWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/навигат/ZBreadCrumbWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 390;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKCheckboxXWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZKCheckboxXWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'Настройки sort DynaGrid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaSortWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'DynaGrid sort settings';
        $this->model->ru = '';
        $this->model->uz = 'DynaGrid saralash sozlamalari';
        $this->model->uzk = 'ДйнаГрид саралаш созламалари';
        $this->model->lv = 'DynaGrid kārtošanas iestatījumi';
        $this->model->ro = 'Setări de sortare DynaGrid';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = '{\\\\\\\\\\\\\\\\\$count} из {\\\\\\\\\\\\\\\\\$total} записей показаны';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetRav.php';
        $this->model->from = 'ru';
        $this->model->en = '{\\ \\\\\\\\\\\\\\\$ count} of the {\\ \\\\\\\\\\\\\\\$ total} entries shown';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'rsatilgan {\\ \\\\\\\\\\\\\\\$ total} yozuvlarning {\\ \\\\\\\\\\\\\\\$ count}';
        $this->model->uzk = 'Кўрсатилган {\\ \\\\\\\\\\\\\\\$ тотал} ёзувларнинг {\\ \\\\\\\\\\\\\\\$ count}';
        $this->model->lv = '{\\ \\\\\\\\\\\\\\\$ count} no parādītajiem {\\ \\\\\\\\\\\\\\\$ total} ierakstiem';
        $this->model->ro = '{\\ \\\\\\\\\\\\\\\$ count} din {\\ \\\\\\\\\\\\\\\$ total} intrări afișate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 425;
        $this->model->sort = null;
        $this->model->name = 'Внимание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZBanderolWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Attention';
        $this->model->ru = '';
        $this->model->uz = 'Diqqat';
        $this->model->uzk = 'Диққат';
        $this->model->lv = 'Uzmanību';
        $this->model->ro = 'Atenţie';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 416;
        $this->model->sort = null;
        $this->model->name = '<span class=\\\\\"d-block\\\\\">Назад</spanclass>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/Dups/ZGrapesJsWidget_4_30_2020_16_00.php';
        $this->model->from = 'ru';
        $this->model->en = '<span class=\\\\\"d-block\\\\\">Back to</span> </spanclass>';
        $this->model->ru = '';
        $this->model->uz = '<span class=\\\\\"d-block\\\\\">Orqaga</span> </spanclass>';
        $this->model->uzk = '<спан class=\\\\\"д-block\\\\\">Орқага</спан> </spanclass>';
        $this->model->lv = '<span class=\\\\\"d-block\\\\\">Atpakaļ uz</span> </spanclass>';
        $this->model->ro = '<span class=\\\\\"d-block\\\\\">Înapoi la</span> </spanclass>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'Настройки фильтра DynaGrid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaFilterWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'DynaGrid Filter Settings';
        $this->model->ru = '';
        $this->model->uz = 'DynaGrid Filtrni sozlash';
        $this->model->uzk = 'ДйнаГрид Филтрни созлаш';
        $this->model->lv = 'DynaGrid filtra iestatījumi';
        $this->model->ro = 'Setări filtru DynaGrid';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 434;
        $this->model->sort = null;
        $this->model->name = 'Домой';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidgetRav.php';
        $this->model->from = 'ru';
        $this->model->en = 'Home';
        $this->model->ru = '';
        $this->model->uz = 'Uy';
        $this->model->uzk = 'Уй';
        $this->model->lv = 'Mājas';
        $this->model->ro = 'Acasă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 436;
        $this->model->sort = null;
        $this->model->name = 'Статистика';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZStatisticsBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Statistics';
        $this->model->ru = '';
        $this->model->uz = 'Statistika';
        $this->model->uzk = 'Статистика';
        $this->model->lv = 'Statistika';
        $this->model->ro = 'Statistici';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 440;
        $this->model->sort = null;
        $this->model->name = 'Просмотр {\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'View {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ This -&gt; _ config [\'title\']} ni ko\'rish';
        $this->model->uzk = '{\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} ни кўриш';
        $this->model->lv = 'Skatīt {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Vizualizați {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 442;
        $this->model->sort = null;
        $this->model->name = 'Товары заказа \\\\\$model->name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Order items \\\\\$ model-&gt; name';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtmalarga \\\\\$ model-&gt; nomi';
        $this->model->uzk = 'Буюртмаларга \\\\\$ модел-&гт; номи';
        $this->model->lv = 'Pasūtiet preces \\\\\$ modelis-&gt; nosaukums';
        $this->model->ro = 'Comanda articole \\\\\$ model-&gt; nume';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = 'Save grid settings';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save grid settings';
        $this->model->ru = '';
        $this->model->uz = 'Panjara sozlamalarini saqlang';
        $this->model->uzk = 'Панжара созламаларини сақланг';
        $this->model->lv = 'Saglabājiet režģa iestatījumus';
        $this->model->ro = 'Salvați setările grilei';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 431;
        $this->model->sort = null;
        $this->model->name = 'Показать страницы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Show Pages';
        $this->model->ru = '';
        $this->model->uz = 'Sahifalarni ko\'rsatish';
        $this->model->uzk = 'Саҳифаларни кўрсатиш';
        $this->model->lv = 'Rādīt lapas';
        $this->model->ro = 'Afișați pagini';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 432;
        $this->model->sort = null;
        $this->model->name = 'Все';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'All';
        $this->model->ru = '';
        $this->model->uz = 'Hammasi';
        $this->model->uzk = 'Ҳаммаси';
        $this->model->lv = 'Visi';
        $this->model->ro = 'Toate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 437;
        $this->model->sort = null;
        $this->model->name = 'Создание {\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Creating {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ This -&gt; _ config [\'title\']} yaratish';
        $this->model->uzk = '{\\\\\$ Тҳис -&гт; _ config [ътитлеъ]} яратиш';
        $this->model->lv = 'Tiek izveidots {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Crearea {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 418;
        $this->model->sort = null;
        $this->model->name = 'Переместить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Move';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'chirish';
        $this->model->uzk = 'Кўчириш';
        $this->model->lv = 'Kustēties';
        $this->model->ro = 'Mișcare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 419;
        $this->model->sort = null;
        $this->model->name = 'Предпросмотр';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Preview';
        $this->model->ru = '';
        $this->model->uz = 'Ko\'rib chiqish';
        $this->model->uzk = 'Кўриб чиқиш';
        $this->model->lv = 'Priekšskatījums';
        $this->model->ro = 'previzualizare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 420;
        $this->model->sort = null;
        $this->model->name = 'Назад';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Back to';
        $this->model->ru = '';
        $this->model->uz = 'Orqaga';
        $this->model->uzk = 'Орқага';
        $this->model->lv = 'Atpakaļ uz';
        $this->model->ro = 'Înapoi la';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 421;
        $this->model->sort = null;
        $this->model->name = 'Вперёд';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Forward';
        $this->model->ru = '';
        $this->model->uz = 'Oldinga';
        $this->model->uzk = 'Олдинга';
        $this->model->lv = 'Uz priekšu';
        $this->model->ro = 'Redirecţiona';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 422;
        $this->model->sort = null;
        $this->model->name = 'Очистить Canvas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Clear Canvas';
        $this->model->ru = '';
        $this->model->uz = 'Tuvalni tozalang';
        $this->model->uzk = 'Тувални тозаланг';
        $this->model->lv = 'Notīrīt audekls';
        $this->model->ro = 'Canvas transparent';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 423;
        $this->model->sort = null;
        $this->model->name = 'Сохранить файл';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Save file';
        $this->model->ru = '';
        $this->model->uz = 'Faylni saqlash';
        $this->model->uzk = 'Файлни сақлаш';
        $this->model->lv = 'Saglabāt failu';
        $this->model->ro = 'Salvează fișierul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZSelect2Widget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKRangeInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKRangeInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKRangeInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 445;
        $this->model->sort = null;
        $this->model->name = 'Возврат \\\\\$model->name';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Returning \\\\\$ model-&gt; name';
        $this->model->ru = '';
        $this->model->uz = 'Qaytish \\\\\$ model-&gt; nom';
        $this->model->uzk = 'Қайтиш \\\\\$ модел-&гт; ном';
        $this->model->lv = 'Tiek atgriezts \\\\\$ modelis-&gt; nosaukums';
        $this->model->ro = 'Revenind \\\\\$ model-&gt; nume';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 451;
        $this->model->sort = null;
        $this->model->name = 'Показать рамки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetMirbosit.php';
        $this->model->from = 'ru';
        $this->model->en = 'Show frames';
        $this->model->ru = '';
        $this->model->uz = 'Freymlarni ko\'rsatish';
        $this->model->uzk = 'Фреймларни кўрсатиш';
        $this->model->lv = 'Rādīt kadrus';
        $this->model->ro = 'Afișează cadre';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 446;
        $this->model->sort = null;
        $this->model->name = 'Редактировать \\\\\$column->title';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZEditableIframeWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Edit \\\\\$ column-&gt; title';
        $this->model->ru = '';
        $this->model->uz = '\\\\\$ Ustun-&gt; sarlavhasini tahrirla';
        $this->model->uzk = '\\\\\$ Устун-&гт; сарлавҳасини таҳрирла';
        $this->model->lv = 'Rediģēt kolonnu \\\\\$&gt;&gt; virsraksts';
        $this->model->ro = 'Editează \\\\\$ coloană-&gt; titlu';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 448;
        $this->model->sort = null;
        $this->model->name = 'Бандероль';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZFormBuildWidget__.php';
        $this->model->from = 'ru';
        $this->model->en = 'Parcel post';
        $this->model->ru = '';
        $this->model->uz = 'Uydagi hamma qavatlar';
        $this->model->uzk = 'Уйдаги ҳамма қаватлар';
        $this->model->lv = 'Pakas pasts';
        $this->model->ro = 'Mesagerie';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 449;
        $this->model->sort = null;
        $this->model->name = 'Помощь';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetBosya.php';
        $this->model->from = 'ru';
        $this->model->en = 'Help';
        $this->model->ru = '';
        $this->model->uz = 'Yordam';
        $this->model->uzk = 'Ёрдам';
        $this->model->lv = 'Palīdzība';
        $this->model->ro = 'Ajutor';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 460;
        $this->model->sort = null;
        $this->model->name = '<b>Title</b><img src=\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZFileInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Title</b> <img src=\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>Sarlavha</b> <img src=\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>Сарлавҳа</б> <имг src=\\\\\"/рендер/инпутес/ZFileInputWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>Nosaukums</b> <img src=\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>Titlu</b> <img src=\\\\\"/render/inputes/ZFileInputWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 452;
        $this->model->sort = null;
        $this->model->name = 'Это Описание';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetRav.php';
        $this->model->from = 'ru';
        $this->model->en = 'This Description';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu Ta\'rif';
        $this->model->uzk = 'Ушбу Таъриф';
        $this->model->lv = 'Šis apraksts';
        $this->model->ro = 'Această descriere';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 450;
        $this->model->sort = null;
        $this->model->name = 'Параметры';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Parameters';
        $this->model->ru = '';
        $this->model->uz = 'Parametrlar';
        $this->model->uzk = 'Параметрлар';
        $this->model->lv = 'Parametri';
        $this->model->ro = 'Parametrii';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 498;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKAlertWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZKAlertWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKAlertWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 455;
        $this->model->sort = null;
        $this->model->name = 'Отмена';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZStatisticsBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Cancellation';
        $this->model->ru = '';
        $this->model->uz = 'Bekor qilish';
        $this->model->uzk = 'Бекор қилиш';
        $this->model->lv = 'Atcelšana';
        $this->model->ro = 'Anulare';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 456;
        $this->model->sort = null;
        $this->model->name = 'Подтверждение удаления';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZStatisticsBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Delete confirmation';
        $this->model->ru = '';
        $this->model->uz = 'Tasdiqlashni o\'chirish';
        $this->model->uzk = 'Тасдиқлашни ўчириш';
        $this->model->lv = 'Dzēst apstiprinājumu';
        $this->model->ro = 'Ștergeți confirmarea';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 458;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZWizardStepsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/формер/ZWizardStepsWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZWizardStepsWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'Автоматическое закрытие';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZClockPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Auto close';
        $this->model->ru = '';
        $this->model->uz = 'Avtomatik yopish';
        $this->model->uzk = 'Автоматик ёпиш';
        $this->model->lv = 'Automātiska aizvēršana';
        $this->model->ro = 'Închidere automată';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 466;
        $this->model->sort = null;
        $this->model->name = 'Опции Navbar';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZGrapeNavbarWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Navbar options';
        $this->model->ru = '';
        $this->model->uz = 'Navbar parametrlari';
        $this->model->uzk = 'Навбар параметрлари';
        $this->model->lv = 'Navbar opcijas';
        $this->model->ro = 'Opțiuni Navbar';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'Выберите язык';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCurrencyRadioWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Choose language';
        $this->model->ru = '';
        $this->model->uz = 'Tilni tanlang';
        $this->model->uzk = 'Тилни танланг';
        $this->model->lv = 'Izvēlieties valodu';
        $this->model->ro = 'Alege limba';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 463;
        $this->model->sort = null;
        $this->model->name = '<b>Title</b>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZGrapeParticlesWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Title</b>';
        $this->model->ru = '';
        $this->model->uz = '<b>Sarlavha</b>';
        $this->model->uzk = '<б>Сарлавҳа</б>';
        $this->model->lv = '<b>Nosaukums</b>';
        $this->model->ro = '<b>Titlu</b>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 465;
        $this->model->sort = null;
        $this->model->name = 'Опции Card';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZGrapeCardWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Card options';
        $this->model->ru = '';
        $this->model->uz = 'Karta imkoniyatlari';
        $this->model->uzk = 'Карта имкониятлари';
        $this->model->lv = 'Karšu iespējas';
        $this->model->ro = 'Opțiuni de carduri';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 467;
        $this->model->sort = null;
        $this->model->name = 'Опции Particles';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZGrapeParticlesWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Particles Options';
        $this->model->ru = '';
        $this->model->uz = 'Zarrachalar parametrlari';
        $this->model->uzk = 'Заррачалар параметрлари';
        $this->model->lv = 'Daļiņu iespējas';
        $this->model->ro = 'Opțiuni particule';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 471;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputMaskWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZInputMaskWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputMaskWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'Не задано';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/values/ZMultiViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Not set';
        $this->model->ru = '';
        $this->model->uz = 'O‘rnatilmagan';
        $this->model->uzk = 'Ўрнатилмаган';
        $this->model->lv = 'Nav uzstādīts';
        $this->model->ro = 'Nu este setat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'По умолчанию';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZStickyElementsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Default';
        $this->model->ru = '';
        $this->model->uz = 'Standart';
        $this->model->uzk = 'Стандарт';
        $this->model->lv = 'Noklusējums';
        $this->model->ro = 'Mod implicit';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'Основные опции ZSelect2Widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZSelect2Widget3.php';
        $this->model->from = 'ru';
        $this->model->en = 'Main options of ZSelect2Widget';
        $this->model->ru = '';
        $this->model->uz = 'ZSelect2Widget asosiy imkoniyatlari';
        $this->model->uzk = 'ZSelect2Widget асосий имкониятлари';
        $this->model->lv = 'Galvenās ZSelect2Widget iespējas';
        $this->model->ro = 'Principalele opțiuni ale ZSelect2Widget';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 491;
        $this->model->sort = null;
        $this->model->name = 'ZOnlyForGrapes';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZOnlyForGrapes.php';
        $this->model->from = 'ru';
        $this->model->en = 'ZOnlyForGrapes';
        $this->model->ru = '';
        $this->model->uz = 'ZOnlyForGrapes';
        $this->model->uzk = 'ЗОнлйФорГрапес';
        $this->model->lv = 'ZOnlyForGrapes';
        $this->model->ro = 'ZOnlyForGrapes';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = 'Все магазины';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/market/ZCategoryListWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'All shops';
        $this->model->ru = '';
        $this->model->uz = 'Barcha do\'konlar';
        $this->model->uzk = 'Барча дўконлар';
        $this->model->lv = 'Visi veikali';
        $this->model->ro = 'Toate magazinele';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'Основные опции ZKSelect2Widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = 'Main options of ZKSelect2Widget';
        $this->model->ru = '';
        $this->model->uz = 'ZKSelect2Widget-ning asosiy imkoniyatlari';
        $this->model->uzk = 'ZKSelect2Widget-нинг асосий имкониятлари';
        $this->model->lv = 'ZKSelect2Widget galvenās iespējas';
        $this->model->ro = 'Principalele opțiuni ale ZKSelect2Widget';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 476;
        $this->model->sort = null;
        $this->model->name = 'Опции виджета';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Widget options';
        $this->model->ru = '';
        $this->model->uz = 'Vidjet parametrlari';
        $this->model->uzk = 'Виджет параметрлари';
        $this->model->lv = 'Logrīku iespējas';
        $this->model->ro = 'Opțiuni pentru widget';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 488;
        $this->model->sort = null;
        $this->model->name = 'ZGAccordionWidget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZGAccordionWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'ZGAccordionWidget';
        $this->model->ru = '';
        $this->model->uz = 'ZGAccordionWidget';
        $this->model->uzk = 'ZGAccordionWidget';
        $this->model->lv = 'ZGAccordionWidget';
        $this->model->ro = 'ZGAccordionWidget';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 500;
        $this->model->sort = null;
        $this->model->name = '<img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZModalWidgetRavshan.php';
        $this->model->from = 'ru';
        $this->model->en = '<img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<имг src=\\\\\"/рендер/нотифиэр/ZModalWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<img src=\\\\\"/render/notifier/ZModalWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'Adding Location';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/places/ZGoogleZoirReadyNavigation2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Adding location';
        $this->model->ru = '';
        $this->model->uz = 'Joylashuv qo\'shilmoqda';
        $this->model->uzk = 'Жойлашув қўшилмоқда';
        $this->model->lv = 'Notiek atrašanās vietas pievienošana';
        $this->model->ro = 'Adăugarea locației';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'Скрыть элемент';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSortableWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Hide item';
        $this->model->ru = '';
        $this->model->uz = 'Elementni yashirish';
        $this->model->uzk = 'Элементни яшириш';
        $this->model->lv = 'Paslēpt vienumu';
        $this->model->ro = 'Ascundeți elementul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 478;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKStarRatingWidgetX.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKStarRatingWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKStarRatingWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 480;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTelInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZTelInputWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZTelInputWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = 'Заголовок 1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Heading 1';
        $this->model->ru = '';
        $this->model->uz = 'Sarlavha 1';
        $this->model->uzk = 'Сарлавҳа 1';
        $this->model->lv = '1. virsraksts';
        $this->model->ro = 'Rubrica 1';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = 'Зачеркнутый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTinyCloudWidgetMIRSHOD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Crossed out';
        $this->model->ru = '';
        $this->model->uz = 'Chizib tashlandi';
        $this->model->uzk = 'Чизиб ташланди';
        $this->model->lv = 'Izsvītrots';
        $this->model->ro = 'Încrucișat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 483;
        $this->model->sort = null;
        $this->model->name = 'Menu';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/menus/ZMmenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Menu';
        $this->model->ru = '';
        $this->model->uz = 'Menyu';
        $this->model->uzk = 'Меню';
        $this->model->lv = 'Izvēlne';
        $this->model->ro = 'Meniul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 484;
        $this->model->sort = null;
        $this->model->name = 'Меню';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/menus/ZMmenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Menu';
        $this->model->ru = '';
        $this->model->uz = 'Menyu';
        $this->model->uzk = 'Меню';
        $this->model->lv = 'Izvēlne';
        $this->model->ro = 'Meniul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = 'Неправильный формат файла';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZDownloadWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Invalid file format.';
        $this->model->ru = '';
        $this->model->uz = 'Fayl formati noto‘g‘ri.';
        $this->model->uzk = 'Файл формати нотўғри.';
        $this->model->lv = 'Nederīgs faila formāts.';
        $this->model->ro = 'Format de fișier nevalid.';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 489;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZKTabXWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/навигат/ZKTabXWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZKTabXWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = 'RegulationBadgeButton';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZRegulationBadgeButton.php';
        $this->model->from = 'ru';
        $this->model->en = 'RegulationBadgeButton';
        $this->model->ru = '';
        $this->model->uz = 'Tartibga solish tugmasi';
        $this->model->uzk = 'Тартибга солиш тугмаси';
        $this->model->lv = 'RegulationBadgeButton';
        $this->model->ro = 'RegulationBadgeButton';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 486;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZStickyElementsWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/навигат/ZAccLayWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZAccLayWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 495;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZDrublicModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZDrublicModalWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZDrublicModalWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = 'Обработка запроса ...';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZSweetAlertWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Processing request ...';
        $this->model->ru = '';
        $this->model->uz = 'So‘rov bajarilmoqda ...';
        $this->model->uzk = 'Сўров бажарилмоқда ...';
        $this->model->lv = 'Notiek pieprasījuma apstrāde ...';
        $this->model->ro = 'Se procesează cererea ...';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = 'Выдвинуть на верх';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetRav2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Push up';
        $this->model->ru = '';
        $this->model->uz = 'Tepaga itarish';
        $this->model->uzk = 'Тепага итариш';
        $this->model->lv = 'Atspiešanās';
        $this->model->ro = 'Împinge';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKDatepickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKDatepickerWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSortableInputWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZKSortableInputWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZKSortableInputWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZTextAreaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/инпутес/ZTextAreaWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/inputes/ZTextAreaWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'Пожалуйста выбирайте контакта из листа Пользователей';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/chates/@ Week/@ Week/ZChatsMain2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Please choose a contact from the Users list';
        $this->model->ru = '';
        $this->model->uz = 'Foydalanuvchilar ro\'yxatidan kontaktni tanlang';
        $this->model->uzk = 'Фойдаланувчилар рўйxатидан контактни танланг';
        $this->model->lv = 'Lūdzu, izvēlieties kontaktpersonu no lietotāju saraksta';
        $this->model->ro = 'Vă rugăm să alegeți un contact din lista de utilizatori';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'Связи';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Communications';
        $this->model->ru = '';
        $this->model->uz = 'Aloqa';
        $this->model->uzk = 'Алоқа';
        $this->model->lv = 'Sakari';
        $this->model->ro = 'Comunicații';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'Экспортировать\') . \'</li>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_OLD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Export \'). \'\' </li>';
        $this->model->ru = '';
        $this->model->uz = 'Eksport \'). \'\' </li>';
        $this->model->uzk = 'Экспорт ъ). ъъ </ли>';
        $this->model->lv = 'Eksportēt ”). \'\' </li>';
        $this->model->ro = 'Export \'). „“ </li>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'Посмотреть все сообщения';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZMessageWidget_jamshid.php';
        $this->model->from = 'ru';
        $this->model->en = 'View all posts';
        $this->model->ru = '';
        $this->model->uz = 'Barcha xabarlarni ko\'rish';
        $this->model->uzk = 'Барча xабарларни кўриш';
        $this->model->lv = 'Skatīt visas ziņas';
        $this->model->ro = 'Vizualizați toate postările';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'Экспорт таблицы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZExportWidget_01_03-18_12.php';
        $this->model->from = 'ru';
        $this->model->en = 'Export table';
        $this->model->ru = '';
        $this->model->uz = 'Eksport jadvali';
        $this->model->uzk = 'Экспорт жадвали';
        $this->model->lv = 'Eksporta tabula';
        $this->model->ro = 'Tabel de export';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 358;
        $this->model->sort = null;
        $this->model->name = 'Любимые магазины';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/themes/ZSignUpWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = 'Favorite Stores';
        $this->model->ru = '';
        $this->model->uz = 'Sevimli do\'konlar';
        $this->model->uzk = 'Севимли дўконлар';
        $this->model->lv = 'Iecienītākie veikali';
        $this->model->ro = 'Magazine preferate';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'Чтобы продолжить, нажмите OK?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'To continue, click OK?';
        $this->model->ru = '';
        $this->model->uz = 'Davom etish uchun OK ni bosing?';
        $this->model->uzk = 'Давом этиш учун ОК ни босинг?';
        $this->model->lv = 'Lai turpinātu, noklikšķiniet uz Labi?';
        $this->model->ro = 'Pentru a continua, faceți clic pe OK?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'HTML';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'HTML';
        $this->model->ru = '';
        $this->model->uz = 'HTML';
        $this->model->uzk = 'ҲТМЛ';
        $this->model->lv = 'HTML';
        $this->model->ro = 'HTML';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'Действия';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Actions';
        $this->model->ru = '';
        $this->model->uz = 'Harakatlar';
        $this->model->uzk = 'Ҳаракатлар';
        $this->model->lv = 'Darbības';
        $this->model->ro = 'acţiuni';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'Клонировать Все';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_OLD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Clone All';
        $this->model->ru = '';
        $this->model->uz = 'Barchasini klonlash';
        $this->model->uzk = 'Барчасини клонлаш';
        $this->model->lv = 'Klonēt visu';
        $this->model->ro = 'Clonează totul';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = 'CSV';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Csv';
        $this->model->ru = '';
        $this->model->uz = 'Csv';
        $this->model->uzk = 'Csv';
        $this->model->lv = 'Csv';
        $this->model->ro = 'csv';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = 'TXT';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Txt';
        $this->model->ru = '';
        $this->model->uz = 'Txt';
        $this->model->uzk = 'Тxт';
        $this->model->lv = 'Txt';
        $this->model->ro = 'Txt';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'ok to proceed?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_OLD.php';
        $this->model->from = 'ru';
        $this->model->en = 'ok to proceed?';
        $this->model->ru = '';
        $this->model->uz = 'davom etilsinmi?';
        $this->model->uzk = 'давом этилсинми?';
        $this->model->lv = 'labi turpināt?';
        $this->model->ro = 'ok sa continui?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = 'PDF';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Pdf';
        $this->model->ru = '';
        $this->model->uz = 'Pdf';
        $this->model->uzk = 'Пдф';
        $this->model->lv = 'Pdf';
        $this->model->ro = 'Pdf';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'XLS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Xls';
        $this->model->ru = '';
        $this->model->uz = 'Xls';
        $this->model->uzk = 'Хлс';
        $this->model->lv = 'Xls';
        $this->model->ro = 'xls';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'Клонировать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Clone';
        $this->model->ru = '';
        $this->model->uz = 'Klon';
        $this->model->uzk = 'Клон';
        $this->model->lv = 'Klons';
        $this->model->ro = 'Clone';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'Добавить';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Add';
        $this->model->ru = '';
        $this->model->uz = 'Qo\'shing';
        $this->model->uzk = 'Қўшинг';
        $this->model->lv = 'Pievienot';
        $this->model->ro = 'Adăuga';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKGrowlWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\\\\\\\\\\\\\"/рендер/нотифиэр/ZKGrowlWidget/имаге/icon.пнг\\\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\\\\\\\\\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Отключите все блокировщики всплывающих окон в вашем браузере, чтобы обеспечить правильную загрузку...';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Disable all pop-up blockers in your browser to ensure proper loading ...';
        $this->model->ru = '';
        $this->model->uz = 'To\'g\'ri yuklanishini ta\'minlash uchun brauzeringizdagi barcha qalqib chiquvchi blokerlarni o\'chirib qo\'ying ...';
        $this->model->uzk = 'Тўғри юкланишини таъминлаш учун браузерингиздаги барча қалқиб чиқувчи блокерларни ўчириб қўйинг ...';
        $this->model->lv = 'Atspējojiet visus uznirstošo logu bloķētājus savā pārlūkprogrammā, lai nodrošinātu pareizu ielādi ...';
        $this->model->ro = 'Dezactivați toate blocantele pop-up din browser pentru a vă asigura că se încarcă corect ...';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 382;
        $this->model->sort = null;
        $this->model->name = '<b></b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZImageColorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b></b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b></b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->uzk = '<б></б><имг src=\\\\\\\\\\\\\\\"/рендер/инпутес/ZImageCheckboxWidget/имаге/icon.пнг\\\\\\\\\\\\\\\"/>';
        $this->model->lv = '<b></b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->model->ro = '<b></b><img src=\\\\\\\\\\\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\\\\\\\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 414;
        $this->model->sort = null;
        $this->model->name = 'it is name Terrabayt updated';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = '';
        $this->model->from = '';
        $this->model->en = 'it is name Terrabayt updated';
        $this->model->ru = '';
        $this->model->uz = 'bu Terrabayt nomi yangilangan';
        $this->model->uzk = 'бу Террабайт номи янгиланган';
        $this->model->lv = 'tas ir nosaukums Terrabayt atjaunināts';
        $this->model->ro = 'este denumit Terrabayt actualizat';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'Are you sure you want CLONE columns?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Are you sure you want CLONE columns?';
        $this->model->ru = '';
        $this->model->uz = 'Haqiqatan ham CLONE ustunlarini xohlaysizmi?';
        $this->model->uzk = 'Ҳақиқатан ҳам CLONE устунларини xоҳлайсизми?';
        $this->model->lv = 'Vai tiešām vēlaties CLONE kolonnas?';
        $this->model->ro = 'Sunteți sigur că doriți coloane CLONE?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 426;
        $this->model->sort = null;
        $this->model->name = 'Для начала необходимо указать вес заказа';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZBanderolWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'First you need to indicate the weight of the order';
        $this->model->ru = '';
        $this->model->uz = 'Avval buyurtmaning og\'irligini ko\'rsatishingiz kerak';
        $this->model->uzk = 'Аввал буюртманинг оғирлигини кўрсатишингиз керак';
        $this->model->lv = 'Vispirms jums jānorāda pasūtījuma svars';
        $this->model->ro = 'Mai întâi trebuie să indicați greutatea comenzii';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 427;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZBootstrapModalWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/формер/ZBootstrapModalWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZBootstrapModalWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 428;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZViewWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/формер/ZViewWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/former/ZViewWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 439;
        $this->model->sort = null;
        $this->model->name = 'Детали {\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Details {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = 'Tafsilotlar {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->uzk = 'Тафсилотлар {\\\\\$ тҳис -&гт; _ config [ътитлеъ]}';
        $this->model->lv = 'Sīkāka informācija {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Detalii {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 441;
        $this->model->sort = null;
        $this->model->name = 'Подобрать {\\\\\$this->_config[\'title\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Match {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ru = '';
        $this->model->uz = 'Moslik {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->uzk = 'Мослик {\\\\\$ тҳис -&гт; _ config [ътитлеъ]}';
        $this->model->lv = 'Sakritiet {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->model->ro = 'Potrivire {\\\\\$ this -&gt; _ config [\'title\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 429;
        $this->model->sort = null;
        $this->model->name = 'Просмотр товаров заказа';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'View order items';
        $this->model->ru = '';
        $this->model->uz = 'Buyurtma buyumlarini ko‘rish';
        $this->model->uzk = 'Буюртма буюмларини кўриш';
        $this->model->lv = 'Skatīt pasūtījuma preces';
        $this->model->ro = 'Vizualizați articolele de comandă';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 433;
        $this->model->sort = null;
        $this->model->name = 'Показать все страницы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Show all pages';
        $this->model->ru = '';
        $this->model->uz = 'Barcha sahifalarni ko\'rsatish';
        $this->model->uzk = 'Барча саҳифаларни кўрсатиш';
        $this->model->lv = 'Rādīt visas lapas';
        $this->model->ro = 'Afișați toate paginile';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'DynaGrid widget';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'DynaGrid widget';
        $this->model->ru = '';
        $this->model->uz = 'DynaGrid vidjeti';
        $this->model->uzk = 'ДйнаГрид виджети';
        $this->model->lv = 'Logrīks DynaGrid';
        $this->model->ro = 'Widget DynaGrid';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = 'Направление';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZTableWrapWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Direction';
        $this->model->ru = '';
        $this->model->uz = 'Yo\'nalish';
        $this->model->uzk = 'Йўналиш';
        $this->model->lv = 'Virziens';
        $this->model->ro = 'Direcţie';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'Нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZCheckJavohirWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Not';
        $this->model->ru = '';
        $this->model->uz = 'Yo\'q';
        $this->model->uzk = 'Йўқ';
        $this->model->lv = 'Nē';
        $this->model->ro = 'Nu';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 417;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKSelect2Widget_Asror.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKSelect2Widget/имаге/icon.жпг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKSelect2Widget/image/icon.jpg\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 424;
        $this->model->sort = null;
        $this->model->name = 'Перейти на страницу';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZGrapesJsWidgetSherzod.php';
        $this->model->from = 'ru';
        $this->model->en = 'Go to page';
        $this->model->ru = '';
        $this->model->uz = 'Sahifaga o\'ting';
        $this->model->uzk = 'Саҳифага ўтинг';
        $this->model->lv = 'Iet uz lapu';
        $this->model->ro = 'Mergi la pagina';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 447;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZSelect2Widget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZSelect2Widget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Personalize grid settings';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZDynaWidget_.php';
        $this->model->from = 'ru';
        $this->model->en = 'Personalize grid settings';
        $this->model->ru = '';
        $this->model->uz = 'Panjara sozlamalarini shaxsiylashtirish';
        $this->model->uzk = 'Панжара созламаларини шаxсийлаштириш';
        $this->model->lv = 'Personalizējiet režģa iestatījumus';
        $this->model->ro = 'Personalizați setările grilei';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 461;
        $this->model->sort = null;
        $this->model->name = '<b></b><img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZImageColorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b></b><img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b></b><img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б></б><имг src=\\\\\"/рендер/инпутес/ZImageCheckboxWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b></b><img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b></b><img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 464;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZCKEditorWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZCKEditorWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZCKEditorWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 472;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKCheckboxXWidget2.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKCheckboxXWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKCheckboxXWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 457;
        $this->model->sort = null;
        $this->model->name = 'Вы хотите удалить настройки таблицы \\\\\$this->modelClassName';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZStatisticsBtnWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'You want to remove the table settings \\\\\$ this-&gt; modelClassName';
        $this->model->ru = '';
        $this->model->uz = '\\\\\$ This-&gt; modelClassName jadval sozlamalarini o\'chirishni xohlaysiz';
        $this->model->uzk = '\\\\\$ Тҳис-&гт; modelClassName жадвал созламаларини ўчиришни xоҳлайсиз';
        $this->model->lv = 'Jūs vēlaties noņemt tabulas iestatījumus \\\\\$ this-&gt; modelClassName';
        $this->model->ro = 'Doriți să eliminați setările tabelului \\\\\$ this-&gt; modelClassName';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 453;
        $this->model->sort = null;
        $this->model->name = 'Создание {\\\\\$this->_config[\'defaultTitle\']}';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZIframeSpaWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Creating {\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->model->ru = '';
        $this->model->uz = '{\\\\\$ This -&gt; _ config [\'defaultTitle\']} yaratish';
        $this->model->uzk = '{\\\\\$ Тҳис -&гт; _ config [ъдефаултТитлеъ]} яратиш';
        $this->model->lv = '{\\\\\$ This -&gt; _ config [\'defaultTitle\']} izveidošana';
        $this->model->ro = 'Crearea {\\\\\$ this -&gt; _ config [\'defaultTitle\']}';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'Вы хотите удалить этот элемент(ы)?';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZTabularWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'Do you want to delete this item (s)?';
        $this->model->ru = '';
        $this->model->uz = 'Ushbu mahsulot (lar) ni yo\'q qilmoqchimisiz?';
        $this->model->uzk = 'Ушбу маҳсулот (лар) ни йўқ қилмоқчимисиз?';
        $this->model->lv = 'Vai vēlaties izdzēst šo (-s) vienumu (-as)?';
        $this->model->ro = 'Doriți să ștergeți aceste articole?';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 459;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inptest/ZImageCheckboxGroupWidgetX_18052020.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZImageCheckboxWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZImageCheckboxWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'ZImageCheckbox';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZRadioGroupWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'ZImageCheckbox';
        $this->model->ru = '';
        $this->model->uz = 'ZImageCheckbox';
        $this->model->uzk = 'ZImageCheckbox';
        $this->model->lv = 'ZImageCheckbox';
        $this->model->ro = 'ZImageCheckbox';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 468;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZHCheckboxWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZHCheckboxWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZHCheckboxWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 469;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZIconPickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZIconPickerWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZIconPickerWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 470;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZInputLatinWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZInputLatinWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZInputLatinWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 473;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/inputes/ZKDatepickerWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/инпутес/ZKDatepickerWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/inputes/ZKDatepickerWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 454;
        $this->model->sort = null;
        $this->model->name = '<b>Titile</b><img src=\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/values/ZMultiViewWidgetD.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>Titile</b> <img src=\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>Titusga oid</b> <img src=\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>Титусга оид</б> <имг src=\\\\\"/рендер/формер/ZMultiWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>Tituls</b> <img src=\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>Titile</b> <img src=\\\\\"/render/former/ZMultiWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 485;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/navigat/ZBreadCrumbWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/навигат/ZBreadCrumbWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/navigat/ZBreadCrumbWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 499;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZKGrowlWidget.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZKGrowlWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZKGrowlWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 501;
        $this->model->sort = null;
        $this->model->name = '<b>safasfsa</b><img src=\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/notifier/ZPopoverWidgetShahzod.php';
        $this->model->from = 'ru';
        $this->model->en = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->ru = '';
        $this->model->uz = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->uzk = '<б>сафасфса</б> <имг src=\\\\\"/рендер/нотифиэр/ZPopoverWidget/имаге/icon.пнг\\\\\"/>';
        $this->model->lv = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\"/>';
        $this->model->ro = '<b>safasfsa</b> <img src=\\\\\"/render/notifier/ZPopoverWidget/image/icon.png\\\\\"/>';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = 'Disable any popup blockers in your browser to ensure proper download..';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_OLD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Disable any popup blockers in your browser to ensure proper download ..';
        $this->model->ru = '';
        $this->model->uz = 'To\'g\'ri yuklab olishni ta\'minlash uchun brauzeringizda qalqib chiquvchi qalqib chiquvchi oynalarni o\'chirib qo\'ying ..';
        $this->model->uzk = 'Тўғри юклаб олишни таъминлаш учун браузерингизда қалқиб чиқувчи қалқиб чиқувчи ойналарни ўчириб қўйинг ..';
        $this->model->lv = 'Lai nodrošinātu pareizu lejupielādi, pārlūkā atspējojiet visus uznirstošos bloķētājus.';
        $this->model->ro = 'Dezactivați orice blocante pop-up din browserul dvs. pentru a vă asigura o descărcare corectă.';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'Generating file. Please wait....All done! Click anywhere here to close this window, once you have downloaded the file..';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/@ Doub/ZDynaWidget_OLD.php';
        $this->model->from = 'ru';
        $this->model->en = 'Generating file. Please wait .... All done! Click anywhere here to close this window, once you have downloaded the file ..';
        $this->model->ru = '';
        $this->model->uz = 'Fayl yaratilmoqda. Iltimos, kuting .... Hammasi tugadi! Faylni yuklab olgandan so\'ng, bu oynani yopish uchun shu erni bosing ..';
        $this->model->uzk = 'Файл яратилмоқда. Илтимос, кутинг .... Ҳаммаси тугади! Файлни юклаб олгандан сўнг, бу ойнани ёпиш учун шу эрни босинг ..';
        $this->model->lv = 'Notiek faila ģenerēšana. Lūdzu, uzgaidiet .... Viss izdarīts! Pēc faila lejupielādes noklikšķiniet šeit jebkur, lai aizvērtu šo logu.';
        $this->model->ro = 'Generarea fișierului. Vă rugăm să așteptați .... Toate gata! Faceți clic oriunde aici pentru a închide această fereastră, după ce ați descărcat fișierul ..';
        $this->save();


        $this->model = new Lang();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'Генерация файла. Пожалуйста, подождите .... Все готово! Нажмите в любом месте здесь, чтобы закрыть это окно, как только вы загрузили файл.';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->file = 'widgets/former/ZExportMenuWidget.php';
        $this->model->from = 'ru';
        $this->model->en = 'File generation. Please wait .... Everything is ready! Click anywhere here to close this window as soon as you have downloaded the file.';
        $this->model->ru = '';
        $this->model->uz = 'Fayl yaratish. Iltimos kuting .... Hammasi tayyor! Faylni yuklab olishingiz bilanoq bu oynani yopish uchun shu erni bosing.';
        $this->model->uzk = 'Файл яратиш. Илтимос кутинг .... Ҳаммаси тайёр! Файлни юклаб олишингиз биланоқ бу ойнани ёпиш учун шу эрни босинг.';
        $this->model->lv = 'Failu ģenerēšana. Lūdzu, uzgaidiet .... Viss ir gatavs! Noklikšķiniet jebkur šeit, lai aizvērtu šo logu, tiklīdz esat lejupielādējis failu.';
        $this->model->ro = 'Generare de fișiere. Vă rugăm să așteptați .... Totul este gata! Faceți clic oriunde aici pentru a închide această fereastră imediat ce ați descărcat fișierul.';
        $this->save();


    }

}
