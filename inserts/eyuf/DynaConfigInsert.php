<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaConfig;

class DynaConfigInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaConfig();

        $this->model->id = 471;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/admin/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 484;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopDelay-/shop/admin/shop-delay/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopDelay-/shop/admin/shop-delay/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 512;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 512';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 510;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufReport-/crud/eyuf_report/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufReport-/crud/eyuf_report/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 482;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/shipment-ready/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/shipment-ready/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 498;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufNeed-/eyuf/logics/needer/need-index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 488;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopShipment-/shop/logistics/shop-shipment/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopShipment-/shop/logistics/shop-shipment/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 469;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/main/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/main/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 511;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufInvoiceType-/crud/eyuf-invoice-type/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 500;
        $this->model->sort = "";
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufScholar-/eyuf/logics/accounter/index-full';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 480;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 480';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PlaceCountry-/shop/admin/place-country/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 486;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareEnter-/shop/admin/ware-enter/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareEnter-/shop/admin/ware-enter/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 497;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufNeed-/eyuf/logics/needer/need-all-index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 506;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufDocument-/eyuf/logics/scholar/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufDocument-/eyuf/logics/scholar/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 516;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 516';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 494;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufInvoiceType-/eyuf/admin/invoice-type/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufInvoiceType-/eyuf/admin/invoice-type/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 496;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PaysCurrency-/eyuf/logics/accounter/currency-index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 483;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/no-complect/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/no-complect/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 508;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufScholar-/eyuf/admin/main/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufScholar-/eyuf/admin/main/main';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 495;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufRequest-/eyuf/logics/needer/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/needer/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 505;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufRequest-/eyuf/logics/moderator/need-compatriot-request';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-compatriot-request';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 472;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/admin/place-country/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/admin/place-country/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 515;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 515';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 517;
        $this->model->sort = [
            'placeholder',
            'id',
            'created_at',
            'name',
            'modified_at',
            'created_by',
            'modified_by',
        ];
        $this->model->name = 'Новая запись 517';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->column = "";
        $this->model->config = [
            'theme' => null,
            'title' => 'Валюта бирлиги',
            'pageSize' => null,
        ];
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 518;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 518';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->column = "";
        $this->model->config = [
            'theme' => null,
            'title' => null,
            'pageSize' => null,
        ];
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 490;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopShipment-/shop/admin/shop-shipment/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopShipment-/shop/admin/shop-shipment/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 464;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/logistics/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/logistics/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 485;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareAccept-/shop/admin/ware-accept/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareAccept-/shop/admin/ware-accept/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 478;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 478';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/on-complect/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 503;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для GovsSpeciality-/crud/govs-speciality/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'GovsSpeciality-/crud/govs-speciality/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 491;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareEnter-/shop/admin/ware-enter/delete';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareEnter-/shop/admin/ware-enter/delete';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 513;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 514;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 514';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufInvoiceType-/crud/eyuf-invoice-type/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 470;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 502;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для CoreSetting-/eyuf/logics/compatriot/setting';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'CoreSetting-/eyuf/logics/compatriot/setting';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 479;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PlaceCountry-/shop/admin/place-country/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PlaceCountry-/shop/admin/place-country/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 504;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufRequest-/eyuf/logics/moderator/need-count-request';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 466;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareAccept-/shop/logistics/ware-accept/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareAccept-/shop/logistics/ware-accept/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 467;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareReturn-/shop/logistics/ware-return/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareReturn-/shop/logistics/ware-return/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 468;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PlaceRegion-/crud/place-region/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PlaceRegion-/crud/place-region/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 474;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/crud/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 475;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrderItem-/crud/shop-order-item/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrderItem-/crud/shop-order-item/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 501;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufScholar-/eyuf/logics/accounter/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufScholar-/eyuf/logics/accounter/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 507;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для DynaChessItem-/core/dynagrid/chess_item';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 519;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 519';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'DynaChessItem-/core/dynagrid/chess_item';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 522;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 522';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'DragConfigDb-/crud/drag_config_db/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 523;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PageApi-/crud/page-api/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PageApi-/crud/page-api/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 524;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PageApp-/crud/page_app/system';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PageApp-/crud/page_app/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 525;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PageBlocksType-/crud/page-blocks-type/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PageBlocksType-/crud/page-blocks-type/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 526;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PageApi-/crud/page_api/system';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PageApi-/crud/page_api/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 527;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PageApiType-/crud/page-api-type/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'PageApiType-/crud/page-api-type/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 530;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PageThemeType-/crud/page_theme_type/system';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PageThemeType-/crud/page_theme_type/system';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 531;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для PaysCurrency-/crud/pays-currency/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'PaysCurrency-/crud/pays-currency/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 509;
        $this->model->sort = [
            'placeholder',
            'name',
            'program',
            'passport',
            'id',
            'passport_give',
            'birthdate',
            'user_id',
            'place_country_id',
            'status',
            'edu_start',
            'age',
            'edu_end',
            'currency',
            'user_company_id',
            'company_type',
            'edu_area',
            'edu_sector',
            'edu_type',
            'speciality',
            'edu_place',
            'finance',
            'address',
            'phone',
            'home_phone',
            'email',
            'position',
            'experience',
            'completed',
        ];
        $this->model->name = 'Настройки по умолчанию для EyufScholar-/crud/eyuf_scholar/system';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufScholar-/crud/eyuf_scholar/system';
        $this->model->column = "";
        $this->model->config = [
            'theme' => null,
            'title' => 'fdgfd',
            'pageSize' => null,
        ];
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 532;
        $this->model->sort = [
            'placeholder',
            'id',
            'name',
            'lang',
        ];
        $this->model->name = 'Настройки по умолчанию для LangNationality-/crud/lang_nationality/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'LangNationality-/crud/lang_nationality/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 535;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 535';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'Menu-/crud/menu/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 534;
        $this->model->sort = [
            'placeholder',
            'id',
            'sort',
        ];
        $this->model->name = 'Настройки по умолчанию для Menu-/crud/menu/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'Menu-/crud/menu/index';
        $this->model->column = "";
        $this->model->config = [
            'theme' => 'panel-danger',
            'title' => '131313',
            'pageSize' => '9',
        ];
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 537;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 537';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'Menu-/crud/menu/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 536;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 536';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'Menu-/crud/menu/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 538;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufDocument-/crud/eyuf-document/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufDocument-/crud/eyuf-document/index';
        $this->model->column = "";
        $this->model->config = [
            'theme' => 'panel-danger',
            'title' => null,
            'pageSize' => null,
        ];
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 540;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufScholar-/crud/eyuf_scholar/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufScholar-/crud/eyuf_scholar/index';
        $this->model->column = "";
        $this->model->config = [
            'theme' => null,
            'title' => null,
            'isCard' => '0',
            'pageSize' => null,
            'headerIcon' => null,
        ];
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 542;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufScholar-/eyuf/admin/main/index_542';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'EyufScholar-/eyuf/admin/main/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 541;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для EyufScholar-/eyuf/admin/main/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'EyufScholar-/eyuf/admin/main/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->save();


    }

}
