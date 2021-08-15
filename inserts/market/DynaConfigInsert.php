<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\dyna\DynaConfig;

class DynaConfigInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DynaConfig();

        $this->model->id = 593;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 593';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/core/tester/asror/main';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 581;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для CallsCel-/shop/supervisor/calls-cel/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'CallsCel-/shop/supervisor/calls-cel/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 574;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareEnter-/shop/warehouse/ware-enter/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareEnter-/shop/warehouse/ware-enter/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 568;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/on-complect/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/on-complect/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 562;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrderCopy-/crud/shop-order-copy/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrderCopy-/crud/shop-order-copy/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 583;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/admin/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/admin/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 595;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 595';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/core/tester/asror/main';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 576;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrderItem-/crud/shop-order-item/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrderItem-/crud/shop-order-item/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 560;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/crud/shop-order/indexR';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/indexR';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 580;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareReturn-/shop/admin/ware-return/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareReturn-/shop/admin/ware-return/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 567;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для CallsCdr-/shop/supervisor/calls-cdr/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'CallsCdr-/shop/supervisor/calls-cdr/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 564;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/supervisor/main/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/supervisor/main/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 590;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopElement-/crud/shop-element/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopElement-/crud/shop-element/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 597;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/shipment-ready/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/shipment-ready/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 596;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/crud/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 594;
        $this->model->sort = "";
        $this->model->name = 'Новая запись 594';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->dynaId = 'ShopOrder-/core/tester/asror/main';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 589;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOptionType-/crud/shop-option-type/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOptionType-/crud/shop-option-type/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 587;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для User-/core/tester/asror/main';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'User-/core/tester/asror/main';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 586;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для UserCompany-/core/read/multiItems';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'UserCompany-/core/read/multiItems';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 585;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareAccept-/crud/ware-accept/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareAccept-/crud/ware-accept/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 582;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrder-/shop/complect/shop-order/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/shop/complect/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 578;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для DynaChessQuery-/core/dynagrid/chess_query';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'DynaChessQuery-/core/dynagrid/chess_query';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 575;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для WareTrans-/shop/warehouse/ware-trans/index';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'WareTrans-/shop/warehouse/ware-trans/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 559;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для TestOrder-/crud/test-order/indexR';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'TestOrder-/crud/test-order/indexR';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 572;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopCourier-/shop/logistics/shop-courier/index_572';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopCourier-/shop/logistics/shop-courier/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 566;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для User-/shop/supervisor/user/index_566';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'User-/shop/supervisor/user/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 563;
        $this->model->sort = "";
        $this->model->name = 'Настройки по умолчанию для ShopOrderCopy-/crud/shop-order-copy/indexR';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrderCopy-/crud/shop-order-copy/indexR';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 598;
        $this->model->sort = "";
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopElement-/crud/shop-element/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 599;
        $this->model->sort = "";
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopOrder-/crud/shop-order/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new DynaConfig();

        $this->model->id = 600;
        $this->model->sort = "";
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->dynaId = 'ShopElement-/crud/shop-element/index';
        $this->model->column = "";
        $this->model->config = "";
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
