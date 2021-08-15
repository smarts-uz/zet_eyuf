<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasLead;

class CpasLeadInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasLead();

        $this->model->id = 1;
        $this->model->name = 'Заказ клиента №1 от 2020-08-22 11:20:10. ФИО ';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = '';
        $this->model->contact_phone = '';
        $this->model->shop_order_id = 5;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'trash';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-22 11:20:10';
        $this->model->modified_at = '2020-08-22 14:03:53';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 2;
        $this->model->name = 'Заказ клиента №2 от . ФИО ';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = '';
        $this->model->contact_phone = '';
        $this->model->shop_order_id = 468;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = '';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 4;
        $this->model->name = 'Заказ клиента №4 от 2020-08-26 14:29:52. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 665;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 14:29:52';
        $this->model->modified_at = '2020-08-26 14:29:52';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 5;
        $this->model->name = 'Заказ клиента №5 от 2020-08-26 14:30:43. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 666;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 14:30:43';
        $this->model->modified_at = '2020-08-26 14:30:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 6;
        $this->model->name = 'Заказ клиента №6 от 2020-08-26 14:53:43. ФИО nameda';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameda';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 669;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 14:53:43';
        $this->model->modified_at = '2020-08-26 14:53:43';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 7;
        $this->model->name = 'Заказ клиента №7 от 2020-08-26 14:54:40. ФИО nameda%D1%84';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameda%D1%84';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 670;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 14:54:40';
        $this->model->modified_at = '2020-08-26 14:54:40';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 8;
        $this->model->name = 'Заказ клиента №8 от 2020-08-26 14:55:01. ФИО namedaaa';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'namedaaa';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 671;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 14:55:01';
        $this->model->modified_at = '2020-08-26 14:55:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 9;
        $this->model->name = 'Заказ клиента №9 от 2020-08-26 14:56:15. ФИО namedaaaaaaa';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'namedaaaaaaa';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 672;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 14:56:15';
        $this->model->modified_at = '2020-08-26 14:56:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 10;
        $this->model->name = 'Заказ клиента №10 от 2020-08-26 15:03:36. ФИО ';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = '';
        $this->model->contact_phone = '';
        $this->model->shop_order_id = 680;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-26 15:03:36';
        $this->model->modified_at = '2020-08-26 19:04:24';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 11;
        $this->model->name = 'Заказ клиента №11 от 2020-08-27 09:53:40. ФИО new user';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new user';
        $this->model->contact_phone = '998909877655';
        $this->model->shop_order_id = 718;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 09:53:40';
        $this->model->modified_at = '2020-08-27 09:53:40';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 12;
        $this->model->name = 'Заказ клиента №12 от 2020-08-27 09:56:07. ФИО new user';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new user';
        $this->model->contact_phone = '998909877655';
        $this->model->shop_order_id = 721;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 09:56:07';
        $this->model->modified_at = '2020-08-27 09:56:07';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 13;
        $this->model->name = 'Заказ клиента №13 от 2020-08-27 09:56:55. ФИО new user';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new user';
        $this->model->contact_phone = '998909877655';
        $this->model->shop_order_id = 722;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 09:56:55';
        $this->model->modified_at = '2020-08-27 09:56:55';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 14;
        $this->model->name = 'Заказ клиента №14 от 2020-08-27 10:00:32. ФИО buyurtma';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'buyurtma';
        $this->model->contact_phone = '123211';
        $this->model->shop_order_id = 723;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 10:00:32';
        $this->model->modified_at = '2020-08-27 10:00:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 15;
        $this->model->name = 'Заказ клиента №15 от 2020-08-27 10:00:53. ФИО buyurtmaa';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'buyurtmaa';
        $this->model->contact_phone = '123211';
        $this->model->shop_order_id = 724;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 10:00:53';
        $this->model->modified_at = '2020-08-27 10:00:53';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 16;
        $this->model->name = 'Заказ клиента №16 от 2020-08-27 10:22:36. ФИО cliant';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'cliant';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 725;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 10:22:36';
        $this->model->modified_at = '2020-08-27 10:22:36';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 17;
        $this->model->name = 'Заказ клиента №17 от 2020-08-27 13:17:15. ФИО kimdirda';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'kimdirda';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 730;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 13:17:15';
        $this->model->modified_at = '2020-08-27 13:17:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 18;
        $this->model->name = 'Заказ клиента №18 от 2020-08-27 13:49:42. ФИО yangi+buyurtma';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'yangi+buyurtma';
        $this->model->contact_phone = '998909876765';
        $this->model->shop_order_id = 731;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 13:49:42';
        $this->model->modified_at = '2020-08-27 13:49:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 19;
        $this->model->name = 'Заказ клиента №19 от 2020-08-27 13:50:34. ФИО qwfwqcrqcwr';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'qwfwqcrqcwr';
        $this->model->contact_phone = '12312312312';
        $this->model->shop_order_id = 732;
        $this->model->cpas_streams_id = 1;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 13:50:34';
        $this->model->modified_at = '2020-08-27 13:50:34';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 20;
        $this->model->name = 'Заказ клиента №20 от 2020-08-27 15:26:35. ФИО Hyu+Jackman';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'Hyu+Jackman';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 739;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-27 15:26:35';
        $this->model->modified_at = '2020-08-27 15:26:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 21;
        $this->model->name = 'Заказ клиента №21 от 2020-08-29 11:49:49. ФИО new user';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new user';
        $this->model->contact_phone = '998909877655';
        $this->model->shop_order_id = 905;
        $this->model->cpas_streams_id = 3;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 11:49:49';
        $this->model->modified_at = '2020-08-29 11:49:49';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 22;
        $this->model->name = 'Заказ клиента №22 от 2020-08-29 11:59:08. ФИО new user2222';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new user2222';
        $this->model->contact_phone = '998909877655';
        $this->model->shop_order_id = 906;
        $this->model->cpas_streams_id = 3;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 11:59:08';
        $this->model->modified_at = '2020-08-29 11:59:08';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 23;
        $this->model->name = 'Заказ клиента №23 от 2020-08-29 12:01:41. ФИО new request';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new request';
        $this->model->contact_phone = '89897';
        $this->model->shop_order_id = 907;
        $this->model->cpas_streams_id = 3;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 12:01:41';
        $this->model->modified_at = '2020-08-29 12:01:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 24;
        $this->model->name = 'Заказ клиента №24 от 2020-08-29 12:47:45. ФИО new request';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new request';
        $this->model->contact_phone = '89897';
        $this->model->shop_order_id = 908;
        $this->model->cpas_streams_id = 3;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 12:47:45';
        $this->model->modified_at = '2020-08-29 12:47:45';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 25;
        $this->model->name = 'Заказ клиента №25 от 2020-08-29 12:48:36. ФИО new request';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new request';
        $this->model->contact_phone = '89897';
        $this->model->shop_order_id = 909;
        $this->model->cpas_streams_id = 3;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 12:48:36';
        $this->model->modified_at = '2020-08-29 12:48:36';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 26;
        $this->model->name = 'Заказ клиента №26 от 2020-08-29 12:48:59. ФИО new request';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new request';
        $this->model->contact_phone = '89897';
        $this->model->shop_order_id = 910;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 12:48:59';
        $this->model->modified_at = '2020-08-29 12:48:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 27;
        $this->model->name = 'Заказ клиента №27 от 2020-08-29 14:07:17. ФИО new request';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new request';
        $this->model->contact_phone = '89897';
        $this->model->shop_order_id = 919;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:07:17';
        $this->model->modified_at = '2020-08-29 14:07:17';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 28;
        $this->model->name = 'Заказ клиента №28 от 2020-08-29 14:07:46. ФИО new request1';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new request1';
        $this->model->contact_phone = '89897';
        $this->model->shop_order_id = 920;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:07:46';
        $this->model->modified_at = '2020-08-29 14:07:46';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 29;
        $this->model->name = 'Заказ клиента №29 от 2020-08-29 14:08:28. ФИО newrequest2';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'newrequest2';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 921;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:08:28';
        $this->model->modified_at = '2020-08-29 14:08:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 30;
        $this->model->name = 'Заказ клиента №30 от 2020-08-29 14:08:59. ФИО test+ism';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+ism';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 922;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:08:59';
        $this->model->modified_at = '2020-08-29 14:08:59';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 31;
        $this->model->name = 'Заказ клиента №31 от 2020-08-29 14:13:03. ФИО test+ism2';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+ism2';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 923;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:13:03';
        $this->model->modified_at = '2020-08-29 14:13:03';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 32;
        $this->model->name = 'Заказ клиента №32 от 2020-08-29 14:13:55. ФИО test+ism3';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+ism3';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 924;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:13:55';
        $this->model->modified_at = '2020-08-29 14:13:55';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 33;
        $this->model->name = 'Заказ клиента №33 от 2020-08-29 14:21:10. ФИО test4';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test4';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 925;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:21:10';
        $this->model->modified_at = '2020-08-29 14:21:10';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 34;
        $this->model->name = 'Заказ клиента №34 от 2020-08-29 14:21:25. ФИО test4';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test4';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 926;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:21:25';
        $this->model->modified_at = '2020-08-29 14:21:25';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 35;
        $this->model->name = 'Заказ клиента №35 от 2020-08-29 14:25:48. ФИО test5';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test5';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 927;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 14:25:48';
        $this->model->modified_at = '2020-08-29 14:25:48';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 36;
        $this->model->name = 'Заказ клиента №36 от 2020-08-29 15:25:35. ФИО eyu';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'eyu';
        $this->model->contact_phone = '6538654';
        $this->model->shop_order_id = 929;
        $this->model->cpas_streams_id = 2;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-29 15:25:35';
        $this->model->modified_at = '2020-08-29 15:25:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 37;
        $this->model->name = 'Заказ клиента №37 от 2020-08-31 11:34:18. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 958;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:34:18';
        $this->model->modified_at = '2020-08-31 11:34:18';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 38;
        $this->model->name = 'Заказ клиента №38 от 2020-08-31 11:36:53. ФИО nameButton';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 959;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:36:53';
        $this->model->modified_at = '2020-08-31 11:36:53';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 39;
        $this->model->name = 'Заказ клиента №39 от 2020-08-31 11:37:39. ФИО nameButton';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 960;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:37:39';
        $this->model->modified_at = '2020-08-31 11:37:39';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 40;
        $this->model->name = 'Заказ клиента №40 от 2020-08-31 11:38:01. ФИО nameButton';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 961;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:38:01';
        $this->model->modified_at = '2020-08-31 11:38:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 41;
        $this->model->name = 'Заказ клиента №41 от 2020-08-31 11:38:37. ФИО nameButton';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 962;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:38:37';
        $this->model->modified_at = '2020-08-31 11:38:37';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 42;
        $this->model->name = 'Заказ клиента №42 от 2020-08-31 11:38:48. ФИО nameButton';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 963;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:38:48';
        $this->model->modified_at = '2020-08-31 11:38:48';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 43;
        $this->model->name = 'Заказ клиента №43 от 2020-08-31 11:38:57. ФИО nameButton';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 964;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:38:57';
        $this->model->modified_at = '2020-08-31 11:38:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 44;
        $this->model->name = 'Заказ клиента №44 от 2020-08-31 11:39:27. ФИО nameButton1';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton1';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 965;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:39:27';
        $this->model->modified_at = '2020-08-31 11:39:27';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 45;
        $this->model->name = 'Заказ клиента №45 от 2020-08-31 11:40:10. ФИО nameButton1';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton1';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 966;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:40:10';
        $this->model->modified_at = '2020-08-31 11:40:10';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 46;
        $this->model->name = 'Заказ клиента №46 от 2020-08-31 11:43:05. ФИО nameButton1';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton1';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 967;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:43:05';
        $this->model->modified_at = '2020-08-31 11:43:05';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 47;
        $this->model->name = 'Заказ клиента №47 от 2020-08-31 11:43:28. ФИО nameButton1';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton1';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 968;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:43:28';
        $this->model->modified_at = '2020-08-31 11:43:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 48;
        $this->model->name = 'Заказ клиента №48 от 2020-08-31 11:44:05. ФИО nameButton11';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton11';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 969;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:44:05';
        $this->model->modified_at = '2020-08-31 11:44:05';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 72;
        $this->model->name = 'Заказ клиента №72 от 2020-09-01 10:23:44. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 999;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:23:44';
        $this->model->modified_at = '2020-09-01 10:23:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 49;
        $this->model->name = 'Заказ клиента №49 от 2020-08-31 11:44:58. ФИО nameButton11';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton11';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 970;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:44:58';
        $this->model->modified_at = '2020-08-31 11:44:58';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 50;
        $this->model->name = 'Заказ клиента №50 от 2020-08-31 11:45:54. ФИО nameButton111';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton111';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 972;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:45:54';
        $this->model->modified_at = '2020-08-31 11:45:54';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 73;
        $this->model->name = 'Заказ клиента №73 от 2020-09-01 10:24:05. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1000;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:24:05';
        $this->model->modified_at = '2020-09-01 10:24:05';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 51;
        $this->model->name = 'Заказ клиента №51 от 2020-08-31 11:46:41. ФИО nameButton1111';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'nameButton1111';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 973;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:46:41';
        $this->model->modified_at = '2020-08-31 11:46:41';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 52;
        $this->model->name = 'Заказ клиента №52 от 2020-08-31 11:50:19. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998909768765';
        $this->model->shop_order_id = 975;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:50:19';
        $this->model->modified_at = '2020-08-31 11:50:19';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 74;
        $this->model->name = 'Заказ клиента №74 от 2020-09-01 10:24:10. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1001;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:24:10';
        $this->model->modified_at = '2020-09-01 10:24:10';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 53;
        $this->model->name = 'Заказ клиента №53 от 2020-08-31 11:50:53. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998909768765';
        $this->model->shop_order_id = 976;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:50:53';
        $this->model->modified_at = '2020-08-31 11:50:53';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 54;
        $this->model->name = 'Заказ клиента №54 от 2020-08-31 11:51:12. ФИО name111';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name111';
        $this->model->contact_phone = '998909768765';
        $this->model->shop_order_id = 977;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:51:12';
        $this->model->modified_at = '2020-08-31 11:51:12';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 75;
        $this->model->name = 'Заказ клиента №75 от 2020-09-01 10:27:11. ФИО ewffew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'ewffew';
        $this->model->contact_phone = '234343243';
        $this->model->shop_order_id = 1007;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:27:11';
        $this->model->modified_at = '2020-09-01 10:27:11';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 55;
        $this->model->name = 'Заказ клиента №55 от 2020-08-31 11:51:37. ФИО name11111';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name11111';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 978;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:51:37';
        $this->model->modified_at = '2020-08-31 11:51:37';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 56;
        $this->model->name = 'Заказ клиента №56 от 2020-08-31 11:52:49. ФИО wefew1111';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefew1111';
        $this->model->contact_phone = '998909768765';
        $this->model->shop_order_id = 979;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-08-31 11:52:49';
        $this->model->modified_at = '2020-08-31 11:52:49';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 76;
        $this->model->name = 'Заказ клиента №76 от 2020-09-01 10:28:09. ФИО ewffew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'ewffew';
        $this->model->contact_phone = '234343243';
        $this->model->shop_order_id = 1009;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:28:09';
        $this->model->modified_at = '2020-09-01 10:28:09';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 57;
        $this->model->name = 'Заказ клиента №57 от 2020-09-01 09:37:01. ФИО wefew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefew';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 995;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 09:37:01';
        $this->model->modified_at = '2020-09-01 09:37:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 58;
        $this->model->name = 'Заказ клиента №58 от 2020-09-01 09:53:34. ФИО ewffew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'ewffew';
        $this->model->contact_phone = '234343243';
        $this->model->shop_order_id = 998;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 09:53:34';
        $this->model->modified_at = '2020-09-01 09:53:34';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 77;
        $this->model->name = 'Заказ клиента №77 от 2020-09-01 10:36:50. ФИО name+new';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name+new';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 970;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:36:50';
        $this->model->modified_at = '2020-09-01 10:36:50';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 59;
        $this->model->name = 'Заказ клиента №59 от 2020-09-01 10:04:54. ФИО wefew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefew';
        $this->model->contact_phone = '123211';
        $this->model->shop_order_id = 999;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:04:54';
        $this->model->modified_at = '2020-09-01 10:04:54';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 60;
        $this->model->name = 'Заказ клиента №60 от 2020-09-01 10:09:35. ФИО wefew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefew';
        $this->model->contact_phone = '123211';
        $this->model->shop_order_id = 1001;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:09:35';
        $this->model->modified_at = '2020-09-01 10:09:35';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 78;
        $this->model->name = 'Заказ клиента №78 от 2020-09-01 10:48:07. ФИО ewffew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'ewffew';
        $this->model->contact_phone = '234343243';
        $this->model->shop_order_id = 971;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:48:07';
        $this->model->modified_at = '2020-09-01 10:48:07';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 61;
        $this->model->name = 'Заказ клиента №61 от 2020-09-01 10:10:28. ФИО wefewdwqqwwe';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefewdwqqwwe';
        $this->model->contact_phone = '1232111223';
        $this->model->shop_order_id = 1002;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:10:28';
        $this->model->modified_at = '2020-09-01 10:10:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 62;
        $this->model->name = 'Заказ клиента №62 от 2020-09-01 10:17:34. ФИО dww';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'dww';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1003;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:17:34';
        $this->model->modified_at = '2020-09-01 10:17:34';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 79;
        $this->model->name = 'Заказ клиента №79 от 2020-09-01 10:50:18. ФИО ewffew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'ewffew';
        $this->model->contact_phone = '234343243';
        $this->model->shop_order_id = 972;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:50:18';
        $this->model->modified_at = '2020-09-01 10:50:18';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 63;
        $this->model->name = 'Заказ клиента №63 от 2020-09-01 10:20:01. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1005;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:20:01';
        $this->model->modified_at = '2020-09-01 10:20:01';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 64;
        $this->model->name = 'Заказ клиента №64 от 2020-09-01 10:20:15. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1007;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:20:15';
        $this->model->modified_at = '2020-09-01 10:20:15';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 80;
        $this->model->name = 'Заказ клиента №80 от 2020-09-01 10:51:49. ФИО new order';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'new order';
        $this->model->contact_phone = '234343243';
        $this->model->shop_order_id = 973;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:51:49';
        $this->model->modified_at = '2020-09-01 10:51:49';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 65;
        $this->model->name = 'Заказ клиента №65 от 2020-09-01 10:20:37. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1008;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:20:37';
        $this->model->modified_at = '2020-09-01 10:20:37';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 66;
        $this->model->name = 'Заказ клиента №66 от 2020-09-01 10:21:02. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 1009;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:21:02';
        $this->model->modified_at = '2020-09-01 10:21:02';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 81;
        $this->model->name = 'Заказ клиента №81 от 2020-09-01 11:12:32. ФИО name+rrrr';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name+rrrr';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 974;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 11:12:32';
        $this->model->modified_at = '2020-09-01 11:12:32';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 67;
        $this->model->name = 'Заказ клиента №67 от 2020-09-01 10:22:09. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 994;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:22:09';
        $this->model->modified_at = '2020-09-01 10:22:09';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 68;
        $this->model->name = 'Заказ клиента №68 от 2020-09-01 10:22:26. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 995;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:22:26';
        $this->model->modified_at = '2020-09-01 10:22:26';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 82;
        $this->model->name = 'Заказ клиента №82 от 2020-09-01 11:12:58. ФИО name+rrrr222';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name+rrrr222';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 975;
        $this->model->cpas_streams_id = null;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 11:12:58';
        $this->model->modified_at = '2020-09-01 11:12:58';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 69;
        $this->model->name = 'Заказ клиента №69 от 2020-09-01 10:22:31. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 996;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:22:31';
        $this->model->modified_at = '2020-09-01 10:22:31';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 70;
        $this->model->name = 'Заказ клиента №70 от 2020-09-01 10:22:42. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 997;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:22:42';
        $this->model->modified_at = '2020-09-01 10:22:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 83;
        $this->model->name = 'Заказ клиента №83 от 2020-09-01 11:16:28. ФИО yangi+buyurtma';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'yangi+buyurtma';
        $this->model->contact_phone = '998908977667';
        $this->model->shop_order_id = 976;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 11:16:28';
        $this->model->modified_at = '2020-09-01 11:16:28';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 71;
        $this->model->name = 'Заказ клиента №71 от 2020-09-01 10:23:19. ФИО s';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 's';
        $this->model->contact_phone = '24234234';
        $this->model->shop_order_id = 998;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 10:23:19';
        $this->model->modified_at = '2020-09-01 10:23:19';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 84;
        $this->model->name = 'Заказ клиента №84 от 2020-09-01 11:22:18. ФИО test+request';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+request';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 977;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 11:22:18';
        $this->model->modified_at = '2020-09-01 11:22:18';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 85;
        $this->model->name = 'Заказ клиента №85 от 2020-09-01 11:23:21. ФИО test2';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test2';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 978;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-01 11:23:21';
        $this->model->modified_at = '2020-09-01 11:23:21';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 86;
        $this->model->name = 'Заказ клиента №86 от 2020-09-02 10:19:50. ФИО test222+222';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test222+222';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 977;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 10:19:50';
        $this->model->modified_at = '2020-09-02 10:19:50';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 87;
        $this->model->name = 'Заказ клиента №87 от 2020-09-02 10:20:18. ФИО test33333';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test33333';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 978;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 10:20:18';
        $this->model->modified_at = '2020-09-02 10:20:18';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 88;
        $this->model->name = 'Заказ клиента №88 от 2020-09-02 10:24:42. ФИО test+21';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+21';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 979;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 10:24:42';
        $this->model->modified_at = '2020-09-02 10:24:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 89;
        $this->model->name = 'Заказ клиента №89 от 2020-09-02 10:25:29. ФИО test+17';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+17';
        $this->model->contact_phone = '998909768765';
        $this->model->shop_order_id = 980;
        $this->model->cpas_streams_id = 17;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 10:25:29';
        $this->model->modified_at = '2020-09-02 10:25:29';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 90;
        $this->model->name = 'Заказ клиента №90 от 2020-09-02 10:30:02. ФИО test+333';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+333';
        $this->model->contact_phone = '998908908989';
        $this->model->shop_order_id = 981;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 10:30:02';
        $this->model->modified_at = '2020-09-02 10:30:02';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 91;
        $this->model->name = 'Заказ клиента №91 от 2020-09-02 12:44:37. ФИО test+lend';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+lend';
        $this->model->contact_phone = '998909876756';
        $this->model->shop_order_id = 988;
        $this->model->cpas_streams_id = 17;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 12:44:37';
        $this->model->modified_at = '2020-09-02 12:44:37';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 92;
        $this->model->name = 'Заказ клиента №92 от 2020-09-02 12:47:33. ФИО test+track';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+track';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 989;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 12:47:33';
        $this->model->modified_at = '2020-09-02 12:47:33';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 93;
        $this->model->name = 'Заказ клиента №93 от 2020-09-02 16:14:51. ФИО wefew';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefew';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 997;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:14:51';
        $this->model->modified_at = '2020-09-02 16:14:51';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 94;
        $this->model->name = 'Заказ клиента №94 от 2020-09-02 16:15:44. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 998;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:15:44';
        $this->model->modified_at = '2020-09-02 16:15:44';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 95;
        $this->model->name = 'Заказ клиента №95 от 2020-09-02 16:20:36. ФИО wefewfdfddgfdg';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'wefewfdfddgfdg';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 999;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:20:36';
        $this->model->modified_at = '2020-09-02 16:20:36';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 96;
        $this->model->name = 'Заказ клиента №96 от 2020-09-02 16:27:38. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '5465465';
        $this->model->shop_order_id = 1000;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:27:38';
        $this->model->modified_at = '2020-09-02 16:27:38';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 97;
        $this->model->name = 'Заказ клиента №97 от 2020-09-02 16:28:33. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '54';
        $this->model->shop_order_id = 1001;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:28:33';
        $this->model->modified_at = '2020-09-02 16:28:33';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 98;
        $this->model->name = 'Заказ клиента №98 от 2020-09-02 16:28:42. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998908765656';
        $this->model->shop_order_id = 1002;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:28:42';
        $this->model->modified_at = '2020-09-02 16:28:42';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 99;
        $this->model->name = 'Заказ клиента №99 от 2020-09-02 16:39:38. ФИО sdfsdf';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'sdfsdf';
        $this->model->contact_phone = '56454';
        $this->model->shop_order_id = 1003;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:39:38';
        $this->model->modified_at = '2020-09-02 16:39:38';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 100;
        $this->model->name = 'Заказ клиента №100 от 2020-09-02 16:42:57. ФИО name';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'name';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 1004;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:42:57';
        $this->model->modified_at = '2020-09-02 16:42:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 101;
        $this->model->name = 'Заказ клиента №101 от 2020-09-02 16:53:11. ФИО test';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 1006;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:53:11';
        $this->model->modified_at = '2020-09-02 16:53:11';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 102;
        $this->model->name = 'Заказ клиента №102 от 2020-09-02 16:53:57. ФИО test2';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test2';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 1007;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 16:53:57';
        $this->model->modified_at = '2020-09-02 16:53:57';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 103;
        $this->model->name = 'Заказ клиента №103 от 2020-09-02 17:26:05. ФИО test+333';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+333';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 1008;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 17:26:05';
        $this->model->modified_at = '2020-09-02 17:26:05';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


        $this->model = new CpasLead();

        $this->model->id = 104;
        $this->model->name = 'Заказ клиента №104 от 2020-09-02 17:28:56. ФИО test+44';
        $this->model->code = '';
        $this->model->check = '';
        $this->model->contact_name = 'test+44';
        $this->model->contact_phone = '998906786767';
        $this->model->shop_order_id = 1009;
        $this->model->cpas_streams_id = 21;
        $this->model->amount = null;
        $this->model->cash = '';
        $this->model->status = 'new';
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '2020-09-02 17:28:56';
        $this->model->modified_at = '2020-09-02 17:28:56';
        $this->model->created_by = 0;
        $this->model->modified_by = 0;
        $this->save();


    }

}
