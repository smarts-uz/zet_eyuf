<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageControl;

class PageControlInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageControl();

        $this->model->id = 2840;
        $this->model->name = 'eyuf/cruds/shop-option-branch';
        $this->model->data = 'cruds/shop-option-branch';
        $this->model->input = 'shop-option-branch';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2818;
        $this->model->name = 'eyuf/cruds/shop-catalog';
        $this->model->data = 'cruds/shop-catalog';
        $this->model->input = 'shop-catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2787;
        $this->model->name = 'eyuf/cruds/eyuf-university';
        $this->model->data = 'cruds/eyuf-university';
        $this->model->input = 'eyuf-university';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2770;
        $this->model->name = 'eyuf/cruds/drag-form-db';
        $this->model->data = 'cruds/drag-form-db';
        $this->model->input = 'drag-form-db';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2986;
        $this->model->name = 'eyuf/cruds/cpas-tracker';
        $this->model->data = 'cruds/cpas-tracker';
        $this->model->input = 'cpas-tracker';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2994;
        $this->model->name = 'eyuf/client/notify';
        $this->model->data = 'client/notify';
        $this->model->input = 'notify';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2679;
        $this->model->name = 'ALL/core/tester/register';
        $this->model->data = 'tester/register';
        $this->model->input = 'register';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2663;
        $this->model->name = 'ALL/core/tester/filepond';
        $this->model->data = 'tester/filepond';
        $this->model->input = 'filepond';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2661;
        $this->model->name = 'ALL/core/tester/elastic';
        $this->model->data = 'tester/elastic';
        $this->model->input = 'elastic';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2662;
        $this->model->name = 'ALL/core/tester/fileinput';
        $this->model->data = 'tester/fileinput';
        $this->model->input = 'fileinput';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2664;
        $this->model->name = 'ALL/core/tester/grapes';
        $this->model->data = 'tester/grapes';
        $this->model->input = 'grapes';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2665;
        $this->model->name = 'ALL/core/tester/hi';
        $this->model->data = 'tester/hi';
        $this->model->input = 'hi';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2666;
        $this->model->name = 'ALL/core/tester/holmat';
        $this->model->data = 'tester/holmat';
        $this->model->input = 'holmat';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2667;
        $this->model->name = 'ALL/core/tester/iframe';
        $this->model->data = 'tester/iframe';
        $this->model->input = 'iframe';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2669;
        $this->model->name = 'ALL/core/tester/ifreme_new4';
        $this->model->data = 'tester/ifreme_new4';
        $this->model->input = 'ifreme_new4';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2670;
        $this->model->name = 'ALL/core/tester/jmarket';
        $this->model->data = 'tester/jmarket';
        $this->model->input = 'jmarket';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2671;
        $this->model->name = 'ALL/core/tester/layout';
        $this->model->data = 'tester/layout';
        $this->model->input = 'layout';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2672;
        $this->model->name = 'ALL/core/tester/myapp';
        $this->model->data = 'tester/myapp';
        $this->model->input = 'myapp';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2673;
        $this->model->name = 'ALL/core/tester/nestable';
        $this->model->data = 'tester/nestable';
        $this->model->input = 'nestable';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2674;
        $this->model->name = 'ALL/core/tester/newpage';
        $this->model->data = 'tester/newpage';
        $this->model->input = 'newpage';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2675;
        $this->model->name = 'ALL/core/tester/omadbek';
        $this->model->data = 'tester/omadbek';
        $this->model->input = 'omadbek';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2676;
        $this->model->name = 'ALL/core/tester/phars';
        $this->model->data = 'tester/phars';
        $this->model->input = 'phars';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3042;
        $this->model->name = 'ALL/core/tester/radch';
        $this->model->data = 'tester/radch';
        $this->model->input = 'radch';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2988;
        $this->model->name = 'ALL/core/tester/ratched';
        $this->model->data = 'tester/ratched';
        $this->model->input = 'ratched';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2678;
        $this->model->name = 'ALL/core/tester/ravshan';
        $this->model->data = 'tester/ravshan';
        $this->model->input = 'ravshan';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2680;
        $this->model->name = 'ALL/core/tester/require';
        $this->model->data = 'tester/require';
        $this->model->input = 'require';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2681;
        $this->model->name = 'ALL/core/tester/retchat';
        $this->model->data = 'tester/retchat';
        $this->model->input = 'retchat';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2682;
        $this->model->name = 'ALL/core/tester/serialize';
        $this->model->data = 'tester/serialize';
        $this->model->input = 'serialize';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2683;
        $this->model->name = 'ALL/core/tester/session';
        $this->model->data = 'tester/session';
        $this->model->input = 'session';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2684;
        $this->model->name = 'ALL/core/tester/sessionCore';
        $this->model->data = 'tester/sessionCore';
        $this->model->input = 'sessionCore';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2685;
        $this->model->name = 'ALL/core/tester/shahzod';
        $this->model->data = 'tester/shahzod';
        $this->model->input = 'shahzod';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2686;
        $this->model->name = 'ALL/core/tester/shaxzod';
        $this->model->data = 'tester/shaxzod';
        $this->model->input = 'shaxzod';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2687;
        $this->model->name = 'ALL/core/tester/sunnat';
        $this->model->data = 'tester/sunnat';
        $this->model->input = 'sunnat';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2689;
        $this->model->name = 'ALL/core/tester/telegrambotj';
        $this->model->data = 'tester/telegrambotj';
        $this->model->input = 'telegrambotj';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2980;
        $this->model->name = 'ALL/core/tester/terrabayt';
        $this->model->data = 'tester/terrabayt';
        $this->model->input = 'terrabayt';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2690;
        $this->model->name = 'ALL/core/tester/test';
        $this->model->data = 'tester/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2691;
        $this->model->name = 'ALL/core/tester/tntSearch';
        $this->model->data = 'tester/tntSearch';
        $this->model->input = 'tntSearch';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2692;
        $this->model->name = 'ALL/core/tester/umid';
        $this->model->data = 'tester/umid';
        $this->model->input = 'umid';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2693;
        $this->model->name = 'ALL/core/tester/unpoly';
        $this->model->data = 'tester/unpoly';
        $this->model->input = 'unpoly';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2697;
        $this->model->name = 'eyuf/@/bozor';
        $this->model->data = '@/bozor';
        $this->model->input = 'bozor';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2705;
        $this->model->name = 'eyuf/admin/reports';
        $this->model->data = 'admin/reports';
        $this->model->input = 'reports';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2964;
        $this->model->name = 'eyuf/admin/shop-catalog';
        $this->model->data = 'admin/shop-catalog';
        $this->model->input = 'shop-catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2706;
        $this->model->name = 'eyuf/admin/shop-delay';
        $this->model->data = 'admin/shop-delay';
        $this->model->input = 'shop-delay';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2966;
        $this->model->name = 'eyuf/admin/shop-product';
        $this->model->data = 'admin/shop-product';
        $this->model->input = 'shop-product';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2725;
        $this->model->name = 'eyuf/blocks/infinite';
        $this->model->data = 'blocks/infinite';
        $this->model->input = 'infinite';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 7;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2845;
        $this->model->name = 'eyuf/cruds/shop-overview';
        $this->model->data = 'cruds/shop-overview';
        $this->model->input = 'shop-overview';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2848;
        $this->model->name = 'eyuf/cruds/shop-payment-type';
        $this->model->data = 'cruds/shop-payment-type';
        $this->model->input = 'shop-payment-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2860;
        $this->model->name = 'eyuf/cruds/stats-order-items';
        $this->model->data = 'cruds/stats-order-items';
        $this->model->input = 'stats-order-items';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2888;
        $this->model->name = 'eyuf/cruds/user';
        $this->model->data = 'cruds/user';
        $this->model->input = 'user';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2906;
        $this->model->name = 'eyuf/cruds/ware-trans';
        $this->model->data = 'cruds/ware-trans';
        $this->model->input = 'ware-trans';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2907;
        $this->model->name = 'eyuf/cruds/ware-trans-item';
        $this->model->data = 'cruds/ware-trans-item';
        $this->model->input = 'ware-trans-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2908;
        $this->model->name = 'eyuf/deliver/main';
        $this->model->data = 'deliver/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 10;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2909;
        $this->model->name = 'eyuf/deliver/shop-order';
        $this->model->data = 'deliver/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 10;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2660;
        $this->model->name = 'ALL/core/tester/DetailView';
        $this->model->data = 'tester/DetailView';
        $this->model->input = 'DetailView';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2658;
        $this->model->name = 'ALL/core/tester/detail';
        $this->model->data = 'tester/detail';
        $this->model->input = 'detail';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2657;
        $this->model->name = 'ALL/core/tester/depdrop';
        $this->model->data = 'tester/depdrop';
        $this->model->input = 'depdrop';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2656;
        $this->model->name = 'ALL/core/tester/csrf';
        $this->model->data = 'tester/csrf';
        $this->model->input = 'csrf';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2655;
        $this->model->name = 'ALL/core/tester/crm';
        $this->model->data = 'tester/crm';
        $this->model->input = 'crm';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2654;
        $this->model->name = 'ALL/core/tester/coreinput';
        $this->model->data = 'tester/coreinput';
        $this->model->input = 'coreinput';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2652;
        $this->model->name = 'ALL/core/tester/cookie';
        $this->model->data = 'tester/cookie';
        $this->model->input = 'cookie';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2651;
        $this->model->name = 'ALL/core/tester/chart';
        $this->model->data = 'tester/chart';
        $this->model->input = 'chart';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2650;
        $this->model->name = 'ALL/core/tester/bozor';
        $this->model->data = 'tester/bozor';
        $this->model->input = 'bozor';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2649;
        $this->model->name = 'ALL/core/tester/botman';
        $this->model->data = 'tester/botman';
        $this->model->input = 'botman';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2648;
        $this->model->name = 'ALL/core/tester/aziz';
        $this->model->data = 'tester/aziz';
        $this->model->input = 'aziz';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2647;
        $this->model->name = 'ALL/core/tester/azim';
        $this->model->data = 'tester/azim';
        $this->model->input = 'azim';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2646;
        $this->model->name = 'ALL/core/tester/axror';
        $this->model->data = 'tester/axror';
        $this->model->input = 'axror';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2645;
        $this->model->name = 'ALL/core/tester/asterisk1';
        $this->model->data = 'tester/asterisk1';
        $this->model->input = 'asterisk1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2644;
        $this->model->name = 'ALL/core/tester/asterisk';
        $this->model->data = 'tester/asterisk';
        $this->model->input = 'asterisk';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2643;
        $this->model->name = 'ALL/core/tester/asror';
        $this->model->data = 'tester/asror';
        $this->model->input = 'asror';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2642;
        $this->model->name = 'ALL/core/tester/ajaxwidget';
        $this->model->data = 'tester/ajaxwidget';
        $this->model->input = 'ajaxwidget';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2641;
        $this->model->name = 'ALL/core/tester/ajaxify';
        $this->model->data = 'tester/ajaxify';
        $this->model->input = 'ajaxify';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2640;
        $this->model->name = 'core/kernel/widgettest';
        $this->model->data = 'kernel/widgettest';
        $this->model->input = 'widgettest';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2624;
        $this->model->name = 'core/kernel/core-control';
        $this->model->data = 'kernel/core-control';
        $this->model->input = 'core-control';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2621;
        $this->model->name = 'core/kernel/blocks';
        $this->model->data = 'kernel/blocks';
        $this->model->input = 'blocks';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2620;
        $this->model->name = 'core/kernel/asror';
        $this->model->data = 'kernel/asror';
        $this->model->input = 'asror';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2707;
        $this->model->name = 'eyuf/admin/shop-order';
        $this->model->data = 'admin/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2965;
        $this->model->name = 'eyuf/admin/shop-element';
        $this->model->data = 'admin/shop-element';
        $this->model->input = 'shop-element';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2973;
        $this->model->name = 'eyuf/calls/shop-order';
        $this->model->data = 'calls/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 31;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2995;
        $this->model->name = 'eyuf/client/order';
        $this->model->data = 'client/order';
        $this->model->input = 'order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3045;
        $this->model->name = 'eyuf/cores/rate-chat';
        $this->model->data = 'cores/rate-chat';
        $this->model->input = 'rate-chat';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2619;
        $this->model->name = 'core/kernel/agent';
        $this->model->data = 'kernel/agent';
        $this->model->input = 'agent';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2738;
        $this->model->name = 'eyuf/complect/main';
        $this->model->data = 'complect/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 29;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2741;
        $this->model->name = 'eyuf/cores/faqs';
        $this->model->data = 'cores/faqs';
        $this->model->input = 'faqs';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2742;
        $this->model->name = 'eyuf/cores/info';
        $this->model->data = 'cores/info';
        $this->model->input = 'info';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2743;
        $this->model->name = 'eyuf/cores/man';
        $this->model->data = 'cores/man';
        $this->model->input = 'man';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2744;
        $this->model->name = 'eyuf/cores/news';
        $this->model->data = 'cores/news';
        $this->model->input = 'news';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2745;
        $this->model->name = 'eyuf/courier/main';
        $this->model->data = 'courier/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 32;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2746;
        $this->model->name = 'eyuf/cruds/auto';
        $this->model->data = 'cruds/auto';
        $this->model->input = 'auto';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2747;
        $this->model->name = 'eyuf/cruds/auto-model';
        $this->model->data = 'cruds/auto-model';
        $this->model->input = 'auto-model';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2748;
        $this->model->name = 'eyuf/cruds/auto-type';
        $this->model->data = 'cruds/auto-type';
        $this->model->input = 'auto-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2749;
        $this->model->name = 'eyuf/cruds/calls-cdr';
        $this->model->data = 'cruds/calls-cdr';
        $this->model->input = 'calls-cdr';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2750;
        $this->model->name = 'eyuf/cruds/calls-cel';
        $this->model->data = 'cruds/calls-cel';
        $this->model->input = 'calls-cel';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2751;
        $this->model->name = 'eyuf/cruds/calls-order';
        $this->model->data = 'cruds/calls-order';
        $this->model->input = 'calls-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2752;
        $this->model->name = 'eyuf/cruds/calls-queue';
        $this->model->data = 'cruds/calls-queue';
        $this->model->input = 'calls-queue';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2983;
        $this->model->name = 'eyuf/cruds/calls-stats';
        $this->model->data = 'cruds/calls-stats';
        $this->model->input = 'calls-stats';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2984;
        $this->model->name = 'eyuf/cruds/calls-status';
        $this->model->data = 'cruds/calls-status';
        $this->model->input = 'calls-status';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2754;
        $this->model->name = 'eyuf/cruds/chat-group';
        $this->model->data = 'cruds/chat-group';
        $this->model->input = 'chat-group';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2755;
        $this->model->name = 'eyuf/cruds/chat-mail';
        $this->model->data = 'cruds/chat-mail';
        $this->model->input = 'chat-mail';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2756;
        $this->model->name = 'eyuf/cruds/chat-message';
        $this->model->data = 'cruds/chat-message';
        $this->model->input = 'chat-message';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2758;
        $this->model->name = 'eyuf/cruds/chat-notify';
        $this->model->data = 'cruds/chat-notify';
        $this->model->input = 'chat-notify';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2759;
        $this->model->name = 'eyuf/cruds/chat-private';
        $this->model->data = 'cruds/chat-private';
        $this->model->input = 'chat-private';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2760;
        $this->model->name = 'eyuf/cruds/chat-subscribe';
        $this->model->data = 'cruds/chat-subscribe';
        $this->model->input = 'chat-subscribe';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2761;
        $this->model->name = 'eyuf/cruds/core-analytics';
        $this->model->data = 'cruds/core-analytics';
        $this->model->input = 'core-analytics';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2762;
        $this->model->name = 'eyuf/cruds/core-input';
        $this->model->data = 'cruds/core-input';
        $this->model->input = 'core-input';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2763;
        $this->model->name = 'eyuf/cruds/core-queue';
        $this->model->data = 'cruds/core-queue';
        $this->model->input = 'core-queue';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2764;
        $this->model->name = 'eyuf/cruds/core-setting';
        $this->model->data = 'cruds/core-setting';
        $this->model->input = 'core-setting';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2765;
        $this->model->name = 'eyuf/cruds/core-setting-type';
        $this->model->data = 'cruds/core-setting-type';
        $this->model->input = 'core-setting-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3043;
        $this->model->name = 'eyuf/cruds/cpas-land';
        $this->model->data = 'cruds/cpas-land';
        $this->model->input = 'cpas-land';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3035;
        $this->model->name = 'eyuf/cruds/cpas-offer';
        $this->model->data = 'cruds/cpas-offer';
        $this->model->input = 'cpas-offer';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2808;
        $this->model->name = 'eyuf/cruds/place-adress';
        $this->model->data = 'cruds/place-adress';
        $this->model->input = 'place-adress';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3025;
        $this->model->name = 'eyuf/seller/shop-order';
        $this->model->data = 'seller/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3034;
        $this->model->name = 'eyuf/admin/tracker';
        $this->model->data = 'admin/tracker';
        $this->model->input = 'tracker';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2967;
        $this->model->name = 'eyuf/admin/user';
        $this->model->data = 'admin/user';
        $this->model->input = 'user';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2960;
        $this->model->name = 'eyuf/admin/user-company';
        $this->model->data = 'admin/user-company';
        $this->model->input = 'user-company';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2709;
        $this->model->name = 'eyuf/admin/ware-accept';
        $this->model->data = 'admin/ware-accept';
        $this->model->input = 'ware-accept';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2717;
        $this->model->name = 'eyuf/agent/dashboard';
        $this->model->data = 'agent/dashboard';
        $this->model->input = 'dashboard';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2719;
        $this->model->name = 'eyuf/agent/manual';
        $this->model->data = 'agent/manual';
        $this->model->input = 'manual';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2997;
        $this->model->name = 'eyuf/client/test';
        $this->model->data = 'client/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2993;
        $this->model->name = 'eyuf/client/main';
        $this->model->data = 'client/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2992;
        $this->model->name = 'eyuf/client/checkout';
        $this->model->data = 'client/checkout';
        $this->model->input = 'checkout';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2720;
        $this->model->name = 'eyuf/agent/order';
        $this->model->data = 'agent/order';
        $this->model->input = 'order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2721;
        $this->model->name = 'eyuf/agent/other';
        $this->model->data = 'agent/other';
        $this->model->input = 'other';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2722;
        $this->model->name = 'eyuf/agent/progressive';
        $this->model->data = 'agent/progressive';
        $this->model->input = 'progressive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2723;
        $this->model->name = 'eyuf/agent/xolmat';
        $this->model->data = 'agent/xolmat';
        $this->model->input = 'xolmat';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2724;
        $this->model->name = 'eyuf/blocks/404';
        $this->model->data = 'blocks/404';
        $this->model->input = '404';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 7;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2718;
        $this->model->name = 'eyuf/agent/main';
        $this->model->data = 'agent/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2991;
        $this->model->name = 'eyuf/client/change-password';
        $this->model->data = 'client/change-password';
        $this->model->input = 'change-password';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2990;
        $this->model->name = 'eyuf/client/adress';
        $this->model->data = 'client/adress';
        $this->model->input = 'adress';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2989;
        $this->model->name = 'eyuf/client/!blocks';
        $this->model->data = 'client/!blocks';
        $this->model->input = '!blocks';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2975;
        $this->model->name = 'eyuf/calls/other';
        $this->model->data = 'calls/other';
        $this->model->input = 'other';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 31;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2969;
        $this->model->name = 'eyuf/calls/calls-cel';
        $this->model->data = 'calls/calls-cel';
        $this->model->input = 'calls-cel';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 31;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2968;
        $this->model->name = 'eyuf/calls/calls-cdr';
        $this->model->data = 'calls/calls-cdr';
        $this->model->input = 'calls-cdr';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 31;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2726;
        $this->model->name = 'eyuf/blocks/test5';
        $this->model->data = 'blocks/test5';
        $this->model->input = 'test5';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 7;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2704;
        $this->model->name = 'eyuf/admin/main';
        $this->model->data = 'admin/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2702;
        $this->model->name = 'eyuf/@/tester';
        $this->model->data = '@/tester';
        $this->model->input = 'tester';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2701;
        $this->model->name = 'eyuf/@/ravshan';
        $this->model->data = '@/ravshan';
        $this->model->input = 'ravshan';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2699;
        $this->model->name = 'eyuf/@/otabek';
        $this->model->data = '@/otabek';
        $this->model->input = 'otabek';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2698;
        $this->model->name = 'eyuf/@/logics';
        $this->model->data = '@/logics';
        $this->model->input = 'logics';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2696;
        $this->model->name = 'eyuf/@/Axmet';
        $this->model->data = '@/Axmet';
        $this->model->input = 'Axmet';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2695;
        $this->model->name = 'ALL/core/tester/xakim';
        $this->model->data = 'tester/xakim';
        $this->model->input = 'xakim';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2639;
        $this->model->name = 'core/kernel/widget';
        $this->model->data = 'kernel/widget';
        $this->model->input = 'widget';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2636;
        $this->model->name = 'core/kernel/region';
        $this->model->data = 'kernel/region';
        $this->model->input = 'region';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2635;
        $this->model->name = 'core/kernel/product';
        $this->model->data = 'kernel/product';
        $this->model->input = 'product';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2634;
        $this->model->name = 'core/kernel/menu';
        $this->model->data = 'kernel/menu';
        $this->model->input = 'menu';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2633;
        $this->model->name = 'core/kernel/grapes';
        $this->model->data = 'kernel/grapes';
        $this->model->input = 'grapes';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2632;
        $this->model->name = 'core/kernel/grape';
        $this->model->data = 'kernel/grape';
        $this->model->input = 'grape';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2631;
        $this->model->name = 'core/kernel/filter';
        $this->model->data = 'kernel/filter';
        $this->model->input = 'filter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2630;
        $this->model->name = 'core/kernel/error';
        $this->model->data = 'kernel/error';
        $this->model->input = 'error';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2629;
        $this->model->name = 'core/kernel/elfind';
        $this->model->data = 'kernel/elfind';
        $this->model->input = 'elfind';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2628;
        $this->model->name = 'core/kernel/edit';
        $this->model->data = 'kernel/edit';
        $this->model->input = 'edit';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2627;
        $this->model->name = 'core/kernel/dynasettings';
        $this->model->data = 'kernel/dynasettings';
        $this->model->input = 'dynasettings';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2626;
        $this->model->name = 'core/kernel/dynagrid';
        $this->model->data = 'kernel/dynagrid';
        $this->model->input = 'dynagrid';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2625;
        $this->model->name = 'core/kernel/core-module';
        $this->model->data = 'kernel/core-module';
        $this->model->input = 'core-module';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2809;
        $this->model->name = 'eyuf/cruds/place-adress-jamshid';
        $this->model->data = 'cruds/place-adress-jamshid';
        $this->model->input = 'place-adress-jamshid';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2810;
        $this->model->name = 'eyuf/cruds/place-adress-zoir';
        $this->model->data = 'cruds/place-adress-zoir';
        $this->model->input = 'place-adress-zoir';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2811;
        $this->model->name = 'eyuf/cruds/place-adress-zoir2';
        $this->model->data = 'cruds/place-adress-zoir2';
        $this->model->input = 'place-adress-zoir2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2812;
        $this->model->name = 'eyuf/cruds/place-adress2';
        $this->model->data = 'cruds/place-adress2';
        $this->model->input = 'place-adress2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2813;
        $this->model->name = 'eyuf/cruds/place-city';
        $this->model->data = 'cruds/place-city';
        $this->model->input = 'place-city';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2814;
        $this->model->name = 'eyuf/cruds/place-country';
        $this->model->data = 'cruds/place-country';
        $this->model->input = 'place-country';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2815;
        $this->model->name = 'eyuf/cruds/place-country2';
        $this->model->data = 'cruds/place-country2';
        $this->model->input = 'place-country2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2837;
        $this->model->name = 'eyuf/cruds/shop-offer';
        $this->model->data = 'cruds/shop-offer';
        $this->model->input = 'shop-offer';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2623;
        $this->model->name = 'core/kernel/core-blocks';
        $this->model->data = 'kernel/core-blocks';
        $this->model->input = 'core-blocks';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2819;
        $this->model->name = 'eyuf/cruds/shop-catalog-ware';
        $this->model->data = 'cruds/shop-catalog-ware';
        $this->model->input = 'shop-catalog-ware';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2820;
        $this->model->name = 'eyuf/cruds/shop-catalog2';
        $this->model->data = 'cruds/shop-catalog2';
        $this->model->input = 'shop-catalog2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2821;
        $this->model->name = 'eyuf/cruds/shop-category';
        $this->model->data = 'cruds/shop-category';
        $this->model->input = 'shop-category';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2822;
        $this->model->name = 'eyuf/cruds/shop-category2';
        $this->model->data = 'cruds/shop-category2';
        $this->model->input = 'shop-category2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2823;
        $this->model->name = 'eyuf/cruds/shop-channel';
        $this->model->data = 'cruds/shop-channel';
        $this->model->input = 'shop-channel';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2824;
        $this->model->name = 'eyuf/cruds/shop-coupon';
        $this->model->data = 'cruds/shop-coupon';
        $this->model->input = 'shop-coupon';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2825;
        $this->model->name = 'eyuf/cruds/shop-courier';
        $this->model->data = 'cruds/shop-courier';
        $this->model->input = 'shop-courier';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2827;
        $this->model->name = 'eyuf/cruds/shop-currency';
        $this->model->data = 'cruds/shop-currency';
        $this->model->input = 'shop-currency';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2828;
        $this->model->name = 'eyuf/cruds/shop-delay';
        $this->model->data = 'cruds/shop-delay';
        $this->model->input = 'shop-delay';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2829;
        $this->model->name = 'eyuf/cruds/shop-delay-cause';
        $this->model->data = 'cruds/shop-delay-cause';
        $this->model->input = 'shop-delay-cause';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2831;
        $this->model->name = 'eyuf/cruds/shop-discount';
        $this->model->data = 'cruds/shop-discount';
        $this->model->input = 'shop-discount';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2832;
        $this->model->name = 'eyuf/cruds/shop-element';
        $this->model->data = 'cruds/shop-element';
        $this->model->input = 'shop-element';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2833;
        $this->model->name = 'eyuf/cruds/shop-house';
        $this->model->data = 'cruds/shop-house';
        $this->model->input = 'shop-house';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2834;
        $this->model->name = 'eyuf/cruds/shop-house-item';
        $this->model->data = 'cruds/shop-house-item';
        $this->model->input = 'shop-house-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2835;
        $this->model->name = 'eyuf/cruds/shop-house-need';
        $this->model->data = 'cruds/shop-house-need';
        $this->model->input = 'shop-house-need';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2836;
        $this->model->name = 'eyuf/cruds/shop-house-trans';
        $this->model->data = 'cruds/shop-house-trans';
        $this->model->input = 'shop-house-trans';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2884;
        $this->model->name = 'eyuf/cruds/test_order';
        $this->model->data = 'cruds/test_order';
        $this->model->input = 'test_order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2807;
        $this->model->name = 'eyuf/cruds/page-module';
        $this->model->data = 'cruds/page-module';
        $this->model->input = 'page-module';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2806;
        $this->model->name = 'eyuf/cruds/page-control-rest';
        $this->model->data = 'cruds/page-control-rest';
        $this->model->input = 'page-control-rest';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2804;
        $this->model->name = 'eyuf/cruds/page-blocks-type';
        $this->model->data = 'cruds/page-blocks-type';
        $this->model->input = 'page-blocks-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2803;
        $this->model->name = 'eyuf/cruds/page-blocks';
        $this->model->data = 'cruds/page-blocks';
        $this->model->input = 'page-blocks';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2783;
        $this->model->name = 'eyuf/cruds/eyuf-review';
        $this->model->data = 'cruds/eyuf-review';
        $this->model->input = 'eyuf-review';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2785;
        $this->model->name = 'eyuf/cruds/eyuf-table';
        $this->model->data = 'cruds/eyuf-table';
        $this->model->input = 'eyuf-table';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2788;
        $this->model->name = 'eyuf/cruds/faqs';
        $this->model->data = 'cruds/faqs';
        $this->model->input = 'faqs';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2789;
        $this->model->name = 'eyuf/cruds/faqs-manual';
        $this->model->data = 'cruds/faqs-manual';
        $this->model->input = 'faqs-manual';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2790;
        $this->model->name = 'eyuf/cruds/faqs-type';
        $this->model->data = 'cruds/faqs-type';
        $this->model->input = 'faqs-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2791;
        $this->model->name = 'eyuf/cruds/govs-degree';
        $this->model->data = 'cruds/govs-degree';
        $this->model->input = 'govs-degree';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2792;
        $this->model->name = 'eyuf/cruds/govs-education';
        $this->model->data = 'cruds/govs-education';
        $this->model->input = 'govs-education';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2784;
        $this->model->name = 'eyuf/cruds/eyuf-student';
        $this->model->data = 'cruds/eyuf-student';
        $this->model->input = 'eyuf-student';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2802;
        $this->model->name = 'eyuf/cruds/page-action-rest';
        $this->model->data = 'cruds/page-action-rest';
        $this->model->input = 'page-action-rest';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2801;
        $this->model->name = 'eyuf/cruds/page-action';
        $this->model->data = 'cruds/page-action';
        $this->model->input = 'page-action';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2800;
        $this->model->name = 'eyuf/cruds/news-type';
        $this->model->data = 'cruds/news-type';
        $this->model->input = 'news-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2799;
        $this->model->name = 'eyuf/cruds/news';
        $this->model->data = 'cruds/news';
        $this->model->input = 'news';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2798;
        $this->model->name = 'eyuf/cruds/menu-image';
        $this->model->data = 'cruds/menu-image';
        $this->model->input = 'menu-image';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2817;
        $this->model->name = 'eyuf/cruds/shop-brand';
        $this->model->data = 'cruds/shop-brand';
        $this->model->input = 'shop-brand';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2797;
        $this->model->name = 'eyuf/cruds/menu';
        $this->model->data = 'cruds/menu';
        $this->model->input = 'menu';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2796;
        $this->model->name = 'eyuf/cruds/lang-nationality';
        $this->model->data = 'cruds/lang-nationality';
        $this->model->input = 'lang-nationality';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2777;
        $this->model->name = 'eyuf/cruds/eyuf-invoice-type';
        $this->model->data = 'cruds/eyuf-invoice-type';
        $this->model->input = 'eyuf-invoice-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2795;
        $this->model->name = 'eyuf/cruds/lang';
        $this->model->data = 'cruds/lang';
        $this->model->input = 'lang';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2793;
        $this->model->name = 'eyuf/cruds/govs-position';
        $this->model->data = 'cruds/govs-position';
        $this->model->input = 'govs-position';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2774;
        $this->model->name = 'eyuf/cruds/eyuf-document';
        $this->model->data = 'cruds/eyuf-document';
        $this->model->input = 'eyuf-document';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2773;
        $this->model->name = 'eyuf/cruds/eyuf-compatriot';
        $this->model->data = 'cruds/eyuf-compatriot';
        $this->model->input = 'eyuf-compatriot';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2772;
        $this->model->name = 'eyuf/cruds/dyna-filter';
        $this->model->data = 'cruds/dyna-filter';
        $this->model->input = 'dyna-filter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2771;
        $this->model->name = 'eyuf/cruds/dyna-config';
        $this->model->data = 'cruds/dyna-config';
        $this->model->input = 'dyna-config';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2769;
        $this->model->name = 'eyuf/cruds/drag-form';
        $this->model->data = 'cruds/drag-form';
        $this->model->input = 'drag-form';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2767;
        $this->model->name = 'eyuf/cruds/drag-config';
        $this->model->data = 'cruds/drag-config';
        $this->model->input = 'drag-config';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2766;
        $this->model->name = 'eyuf/cruds/drag-app';
        $this->model->data = 'cruds/drag-app';
        $this->model->input = 'drag-app';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3041;
        $this->model->name = 'eyuf/cruds/cpas-traffic';
        $this->model->data = 'cruds/cpas-traffic';
        $this->model->input = 'cpas-traffic';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2985;
        $this->model->name = 'eyuf/cruds/cpas-teaser';
        $this->model->data = 'cruds/cpas-teaser';
        $this->model->input = 'cpas-teaser';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3040;
        $this->model->name = 'eyuf/cruds/cpas-streams';
        $this->model->data = 'cruds/cpas-streams';
        $this->model->input = 'cpas-streams';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3038;
        $this->model->name = 'eyuf/cruds/cpas-sites';
        $this->model->data = 'cruds/cpas-sites';
        $this->model->input = 'cpas-sites';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3037;
        $this->model->name = 'eyuf/cruds/cpas-requisites';
        $this->model->data = 'cruds/cpas-requisites';
        $this->model->input = 'cpas-requisites';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3044;
        $this->model->name = 'eyuf/cruds/cpas-preland';
        $this->model->data = 'cruds/cpas-preland';
        $this->model->input = 'cpas-preland';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2974;
        $this->model->name = 'eyuf/agent/@ Archive';
        $this->model->data = 'agent/@ Archive';
        $this->model->input = '@ Archive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 20;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2716;
        $this->model->name = 'eyuf/admin/ware-trans';
        $this->model->data = 'admin/ware-trans';
        $this->model->input = 'ware-trans';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2715;
        $this->model->name = 'eyuf/admin/ware-send';
        $this->model->data = 'admin/ware-send';
        $this->model->input = 'ware-send';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2714;
        $this->model->name = 'eyuf/admin/ware-return';
        $this->model->data = 'admin/ware-return';
        $this->model->input = 'ware-return';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2713;
        $this->model->name = 'eyuf/admin/ware-exit_2';
        $this->model->data = 'admin/ware-exit_2';
        $this->model->input = 'ware-exit_2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2712;
        $this->model->name = 'eyuf/admin/ware-exit';
        $this->model->data = 'admin/ware-exit';
        $this->model->input = 'ware-exit';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2885;
        $this->model->name = 'eyuf/cruds/test3';
        $this->model->data = 'cruds/test3';
        $this->model->input = 'test3';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2886;
        $this->model->name = 'eyuf/cruds/test4';
        $this->model->data = 'cruds/test4';
        $this->model->input = 'test4';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2887;
        $this->model->name = 'eyuf/cruds/test5';
        $this->model->data = 'cruds/test5';
        $this->model->input = 'test5';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2889;
        $this->model->name = 'eyuf/cruds/user-blocked';
        $this->model->data = 'cruds/user-blocked';
        $this->model->input = 'user-blocked';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2890;
        $this->model->name = 'eyuf/cruds/user-company';
        $this->model->data = 'cruds/user-company';
        $this->model->input = 'user-company';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2891;
        $this->model->name = 'eyuf/cruds/user-contact';
        $this->model->data = 'cruds/user-contact';
        $this->model->input = 'user-contact';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2894;
        $this->model->name = 'eyuf/cruds/user-oauth';
        $this->model->data = 'cruds/user-oauth';
        $this->model->input = 'user-oauth';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2895;
        $this->model->name = 'eyuf/cruds/user-rbac';
        $this->model->data = 'cruds/user-rbac';
        $this->model->input = 'user-rbac';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2896;
        $this->model->name = 'eyuf/cruds/ware';
        $this->model->data = 'cruds/ware';
        $this->model->input = 'ware';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2897;
        $this->model->name = 'eyuf/cruds/ware-accept';
        $this->model->data = 'cruds/ware-accept';
        $this->model->input = 'ware-accept';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2898;
        $this->model->name = 'eyuf/cruds/ware-enter';
        $this->model->data = 'cruds/ware-enter';
        $this->model->input = 'ware-enter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2899;
        $this->model->name = 'eyuf/cruds/ware-enter-item';
        $this->model->data = 'cruds/ware-enter-item';
        $this->model->input = 'ware-enter-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2900;
        $this->model->name = 'eyuf/cruds/ware-exit';
        $this->model->data = 'cruds/ware-exit';
        $this->model->input = 'ware-exit';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2901;
        $this->model->name = 'eyuf/cruds/ware-exit-item';
        $this->model->data = 'cruds/ware-exit-item';
        $this->model->input = 'ware-exit-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2902;
        $this->model->name = 'eyuf/cruds/ware-need';
        $this->model->data = 'cruds/ware-need';
        $this->model->input = 'ware-need';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2710;
        $this->model->name = 'eyuf/admin/ware-enter';
        $this->model->data = 'admin/ware-enter';
        $this->model->input = 'ware-enter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2905;
        $this->model->name = 'eyuf/cruds/ware-series';
        $this->model->data = 'cruds/ware-series';
        $this->model->input = 'ware-series';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2998;
        $this->model->name = 'eyuf/shop/user/@';
        $this->model->data = 'user/@';
        $this->model->input = '@';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2999;
        $this->model->name = 'eyuf/shop/user/brand-index';
        $this->model->data = 'user/brand-index';
        $this->model->input = 'brand-index';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3001;
        $this->model->name = 'eyuf/shop/user/cpa';
        $this->model->data = 'user/cpa';
        $this->model->input = 'cpa';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3002;
        $this->model->name = 'eyuf/shop/user/filter-catalog';
        $this->model->data = 'user/filter-catalog';
        $this->model->input = 'filter-catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3003;
        $this->model->name = 'eyuf/shop/user/filter-common';
        $this->model->data = 'user/filter-common';
        $this->model->input = 'filter-common';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3004;
        $this->model->name = 'eyuf/shop/user/item-question';
        $this->model->data = 'user/item-question';
        $this->model->input = 'item-question';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3005;
        $this->model->name = 'eyuf/shop/user/item-review';
        $this->model->data = 'user/item-review';
        $this->model->input = 'item-review';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3006;
        $this->model->name = 'eyuf/shop/user/main';
        $this->model->data = 'user/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3008;
        $this->model->name = 'eyuf/shop/user/main-common';
        $this->model->data = 'user/main-common';
        $this->model->input = 'main-common';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2959;
        $this->model->name = 'eyuf/logistics/ware-send';
        $this->model->data = 'logistics/ware-send';
        $this->model->input = 'ware-send';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2883;
        $this->model->name = 'eyuf/cruds/test-z-place-adress-zoir211';
        $this->model->data = 'cruds/test-z-place-adress-zoir211';
        $this->model->input = 'test-z-place-adress-zoir211';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2892;
        $this->model->name = 'eyuf/cruds/user-friend';
        $this->model->data = 'cruds/user-friend';
        $this->model->input = 'user-friend';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2881;
        $this->model->name = 'eyuf/cruds/test-z-place-adress-z';
        $this->model->data = 'cruds/test-z-place-adress-z';
        $this->model->input = 'test-z-place-adress-z';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2880;
        $this->model->name = 'eyuf/cruds/test-tree-product';
        $this->model->data = 'cruds/test-tree-product';
        $this->model->input = 'test-tree-product';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2879;
        $this->model->name = 'eyuf/cruds/test-terrabayt';
        $this->model->data = 'cruds/test-terrabayt';
        $this->model->input = 'test-terrabayt';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2878;
        $this->model->name = 'eyuf/cruds/test-second6';
        $this->model->data = 'cruds/test-second6';
        $this->model->input = 'test-second6';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2877;
        $this->model->name = 'eyuf/cruds/test-second5';
        $this->model->data = 'cruds/test-second5';
        $this->model->input = 'test-second5';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2876;
        $this->model->name = 'eyuf/cruds/test-order';
        $this->model->data = 'cruds/test-order';
        $this->model->input = 'test-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2875;
        $this->model->name = 'eyuf/cruds/test-map-yandex-anvar';
        $this->model->data = 'cruds/test-map-yandex-anvar';
        $this->model->input = 'test-map-yandex-anvar';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2874;
        $this->model->name = 'eyuf/cruds/test-map-yandex';
        $this->model->data = 'cruds/test-map-yandex';
        $this->model->input = 'test-map-yandex';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2873;
        $this->model->name = 'eyuf/cruds/test-map-google-zoir';
        $this->model->data = 'cruds/test-map-google-zoir';
        $this->model->input = 'test-map-google-zoir';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2859;
        $this->model->name = 'eyuf/cruds/stats-order';
        $this->model->data = 'cruds/stats-order';
        $this->model->input = 'stats-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2861;
        $this->model->name = 'eyuf/cruds/test';
        $this->model->data = 'cruds/test';
        $this->model->input = 'test';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2862;
        $this->model->name = 'eyuf/cruds/test-adress-zoir';
        $this->model->data = 'cruds/test-adress-zoir';
        $this->model->input = 'test-adress-zoir';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2863;
        $this->model->name = 'eyuf/cruds/test-asror1';
        $this->model->data = 'cruds/test-asror1';
        $this->model->input = 'test-asror1';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2864;
        $this->model->name = 'eyuf/cruds/test-d';
        $this->model->data = 'cruds/test-d';
        $this->model->input = 'test-d';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2865;
        $this->model->name = 'eyuf/cruds/test-dep';
        $this->model->data = 'cruds/test-dep';
        $this->model->input = 'test-dep';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2872;
        $this->model->name = 'eyuf/cruds/test-map-google-odilov';
        $this->model->data = 'cruds/test-map-google-odilov';
        $this->model->input = 'test-map-google-odilov';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2869;
        $this->model->name = 'eyuf/cruds/test-map-google';
        $this->model->data = 'cruds/test-map-google';
        $this->model->input = 'test-map-google';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2868;
        $this->model->name = 'eyuf/cruds/test-google';
        $this->model->data = 'cruds/test-google';
        $this->model->input = 'test-google';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2867;
        $this->model->name = 'eyuf/cruds/test-file2';
        $this->model->data = 'cruds/test-file2';
        $this->model->input = 'test-file2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2858;
        $this->model->name = 'eyuf/cruds/stats-company';
        $this->model->data = 'cruds/stats-company';
        $this->model->input = 'stats-company';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2979;
        $this->model->name = 'eyuf/cruds/statistic';
        $this->model->data = 'cruds/statistic';
        $this->model->input = 'statistic';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2856;
        $this->model->name = 'eyuf/cruds/shop-status';
        $this->model->data = 'cruds/shop-status';
        $this->model->input = 'shop-status';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2855;
        $this->model->name = 'eyuf/cruds/shop-shipment';
        $this->model->data = 'cruds/shop-shipment';
        $this->model->input = 'shop-shipment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2854;
        $this->model->name = 'eyuf/cruds/shop-review-option';
        $this->model->data = 'cruds/shop-review-option';
        $this->model->input = 'shop-review-option';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2853;
        $this->model->name = 'eyuf/cruds/shop-review';
        $this->model->data = 'cruds/shop-review';
        $this->model->input = 'shop-review';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2852;
        $this->model->name = 'eyuf/cruds/shop-reject-cause';
        $this->model->data = 'cruds/shop-reject-cause';
        $this->model->input = 'shop-reject-cause';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2851;
        $this->model->name = 'eyuf/cruds/shop-question';
        $this->model->data = 'cruds/shop-question';
        $this->model->input = 'shop-question';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2850;
        $this->model->name = 'eyuf/cruds/shop-product';
        $this->model->data = 'cruds/shop-product';
        $this->model->input = 'shop-product';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2849;
        $this->model->name = 'eyuf/cruds/shop-policy';
        $this->model->data = 'cruds/shop-policy';
        $this->model->input = 'shop-policy';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2847;
        $this->model->name = 'eyuf/cruds/shop-payment';
        $this->model->data = 'cruds/shop-payment';
        $this->model->input = 'shop-payment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2846;
        $this->model->name = 'eyuf/cruds/shop-packaging';
        $this->model->data = 'cruds/shop-packaging';
        $this->model->input = 'shop-packaging';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2844;
        $this->model->name = 'eyuf/cruds/shop-order-status';
        $this->model->data = 'cruds/shop-order-status';
        $this->model->input = 'shop-order-status';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2843;
        $this->model->name = 'eyuf/cruds/shop-order-item';
        $this->model->data = 'cruds/shop-order-item';
        $this->model->input = 'shop-order-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2842;
        $this->model->name = 'eyuf/cruds/shop-order';
        $this->model->data = 'cruds/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2841;
        $this->model->name = 'eyuf/cruds/shop-option-type';
        $this->model->data = 'cruds/shop-option-type';
        $this->model->input = 'shop-option-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2839;
        $this->model->name = 'eyuf/cruds/shop-option';
        $this->model->data = 'cruds/shop-option';
        $this->model->input = 'shop-option';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2782;
        $this->model->name = 'eyuf/cruds/eyuf-request';
        $this->model->data = 'cruds/eyuf-request';
        $this->model->input = 'eyuf-request';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2781;
        $this->model->name = 'eyuf/cruds/eyuf-report';
        $this->model->data = 'cruds/eyuf-report';
        $this->model->input = 'eyuf-report';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2779;
        $this->model->name = 'eyuf/cruds/eyuf-need-compatriot';
        $this->model->data = 'cruds/eyuf-need-compatriot';
        $this->model->input = 'eyuf-need-compatriot';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2778;
        $this->model->name = 'eyuf/cruds/eyuf-need';
        $this->model->data = 'cruds/eyuf-need';
        $this->model->input = 'eyuf-need';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3019;
        $this->model->name = 'eyuf/seller/analytics';
        $this->model->data = 'seller/analytics';
        $this->model->input = 'analytics';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3031;
        $this->model->name = 'eyuf/seller/ware-enter';
        $this->model->data = 'seller/ware-enter';
        $this->model->input = 'ware-enter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3032;
        $this->model->name = 'eyuf/seller/ware-exit';
        $this->model->data = 'seller/ware-exit';
        $this->model->input = 'ware-exit';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3033;
        $this->model->name = 'eyuf/seller/ware-trans';
        $this->model->data = 'seller/ware-trans';
        $this->model->input = 'ware-trans';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2977;
        $this->model->name = 'eyuf/supervisor/@';
        $this->model->data = 'supervisor/@';
        $this->model->input = '@';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 24;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2957;
        $this->model->name = 'eyuf/supervisor/Archive';
        $this->model->data = 'supervisor/Archive';
        $this->model->input = 'Archive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 24;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2949;
        $this->model->name = 'eyuf/supervisor/main';
        $this->model->data = 'supervisor/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 24;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2950;
        $this->model->name = 'eyuf/supervisor/shop-order';
        $this->model->data = 'supervisor/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 24;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2981;
        $this->model->name = 'eyuf/supervisor/stats';
        $this->model->data = 'supervisor/stats';
        $this->model->input = 'stats';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 24;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2951;
        $this->model->name = 'eyuf/supervisor/user';
        $this->model->data = 'supervisor/user';
        $this->model->input = 'user';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 24;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2978;
        $this->model->name = 'eyuf/warehouse/archive';
        $this->model->data = 'warehouse/archive';
        $this->model->input = 'archive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 30;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2953;
        $this->model->name = 'eyuf/warehouse/ware-enter';
        $this->model->data = 'warehouse/ware-enter';
        $this->model->input = 'ware-enter';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 30;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2954;
        $this->model->name = 'eyuf/warehouse/ware-enter-item';
        $this->model->data = 'warehouse/ware-enter-item';
        $this->model->input = 'ware-enter-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 30;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3022;
        $this->model->name = 'eyuf/seller/other';
        $this->model->data = 'seller/other';
        $this->model->input = 'other';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2961;
        $this->model->name = 'eyuf/warehouse/ware-exit';
        $this->model->data = 'warehouse/ware-exit';
        $this->model->input = 'ware-exit';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 30;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2962;
        $this->model->name = 'eyuf/warehouse/ware-trans';
        $this->model->data = 'warehouse/ware-trans';
        $this->model->input = 'ware-trans';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 30;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2776;
        $this->model->name = 'eyuf/cruds/eyuf-invoice';
        $this->model->data = 'cruds/eyuf-invoice';
        $this->model->input = 'eyuf-invoice';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2904;
        $this->model->name = 'eyuf/cruds/ware-return';
        $this->model->data = 'cruds/ware-return';
        $this->model->input = 'ware-return';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3030;
        $this->model->name = 'eyuf/seller/shop-shipmentBackup';
        $this->model->data = 'seller/shop-shipmentBackup';
        $this->model->input = 'shop-shipmentBackup';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2653;
        $this->model->name = 'ALL/core/tester/cookieCore';
        $this->model->data = 'tester/cookieCore';
        $this->model->input = 'cookieCore';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2952;
        $this->model->name = 'eyuf/warehouse/ware';
        $this->model->data = 'warehouse/ware';
        $this->model->input = 'ware';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 30;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3009;
        $this->model->name = 'eyuf/shop/user/market-index';
        $this->model->data = 'user/market-index';
        $this->model->input = 'market-index';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3010;
        $this->model->name = 'eyuf/shop/user/product-single';
        $this->model->data = 'user/product-single';
        $this->model->input = 'product-single';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3011;
        $this->model->name = 'eyuf/shop/user/search';
        $this->model->data = 'user/search';
        $this->model->input = 'search';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3013;
        $this->model->name = 'eyuf/shop/user/session-compare';
        $this->model->data = 'user/session-compare';
        $this->model->input = 'session-compare';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3014;
        $this->model->name = 'eyuf/shop/user/session-viewed';
        $this->model->data = 'user/session-viewed';
        $this->model->input = 'session-viewed';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3015;
        $this->model->name = 'eyuf/shop/user/session-wish';
        $this->model->data = 'user/session-wish';
        $this->model->input = 'session-wish';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3016;
        $this->model->name = 'eyuf/core/user/user-auth';
        $this->model->data = 'user/user-auth';
        $this->model->input = 'user-auth';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3017;
        $this->model->name = 'eyuf/core/user/user-profile';
        $this->model->data = 'user/user-profile';
        $this->model->input = 'user-profile';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3018;
        $this->model->name = 'eyuf/shop/user/wish-viewed';
        $this->model->data = 'user/wish-viewed';
        $this->model->input = 'wish-viewed';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2955;
        $this->model->name = 'eyuf/logistics/Archive';
        $this->model->data = 'logistics/Archive';
        $this->model->input = 'Archive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2931;
        $this->model->name = 'eyuf/logistics/navigation';
        $this->model->data = 'logistics/navigation';
        $this->model->input = 'navigation';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2932;
        $this->model->name = 'eyuf/logistics/shop-order';
        $this->model->data = 'logistics/shop-order';
        $this->model->input = 'shop-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2958;
        $this->model->name = 'eyuf/logistics/shop-shipment';
        $this->model->data = 'logistics/shop-shipment';
        $this->model->input = 'shop-shipment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2933;
        $this->model->name = 'eyuf/logistics/tracking';
        $this->model->data = 'logistics/tracking';
        $this->model->input = 'tracking';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3057;
        $this->model->name = 'eyuf/logistics/ware-accept';
        $this->model->data = 'logistics/ware-accept';
        $this->model->input = 'ware-accept';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 27;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3024;
        $this->model->name = 'eyuf/seller/shop-catalog';
        $this->model->data = 'seller/shop-catalog';
        $this->model->input = 'shop-catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3012;
        $this->model->name = 'eyuf/shop/user/session-basket';
        $this->model->data = 'user/session-basket';
        $this->model->input = 'session-basket';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3021;
        $this->model->name = 'eyuf/seller/main';
        $this->model->data = 'seller/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3023;
        $this->model->name = 'eyuf/seller/settings';
        $this->model->data = 'seller/settings';
        $this->model->input = 'settings';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3026;
        $this->model->name = 'eyuf/seller/shop-order-item';
        $this->model->data = 'seller/shop-order-item';
        $this->model->input = 'shop-order-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2866;
        $this->model->name = 'eyuf/cruds/test-dilshod';
        $this->model->data = 'cruds/test-dilshod';
        $this->model->input = 'test-dilshod';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3055;
        $this->model->name = 'eyuf/cruds/dyna-multi-item';
        $this->model->data = 'cruds/dyna-multi-item';
        $this->model->input = 'dyna-multi-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2870;
        $this->model->name = 'eyuf/cruds/test-map-google-g';
        $this->model->data = 'cruds/test-map-google-g';
        $this->model->input = 'test-map-google-g';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3036;
        $this->model->name = 'eyuf/cruds/cpas-offer-item';
        $this->model->data = 'cruds/cpas-offer-item';
        $this->model->input = 'cpas-offer-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3048;
        $this->model->name = 'eyuf/cruds/terrabayt';
        $this->model->data = 'cruds/terrabayt';
        $this->model->input = 'terrabayt';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3047;
        $this->model->name = 'eyuf/cruds/dyna-multi';
        $this->model->data = 'cruds/dyna-multi';
        $this->model->input = 'dyna-multi';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2987;
        $this->model->name = 'eyuf/cruds/calls-status-time';
        $this->model->data = 'cruds/calls-status-time';
        $this->model->input = 'calls-status-time';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3060;
        $this->model->name = 'eyuf/cpas/block';
        $this->model->data = 'cpas/block';
        $this->model->input = 'block';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 34;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2739;
        $this->model->name = 'eyuf/cores/@';
        $this->model->data = 'cores/@';
        $this->model->input = '@';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3054;
        $this->model->name = 'eyuf/complect/shipment-ready';
        $this->model->data = 'complect/shipment-ready';
        $this->model->input = 'shipment_ready';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 29;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3027;
        $this->model->name = 'eyuf/seller/shop-product';
        $this->model->data = 'seller/shop-product';
        $this->model->input = 'shop-product';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3053;
        $this->model->name = 'eyuf/complect/on-complect';
        $this->model->data = 'complect/on-complect';
        $this->model->input = 'on-complect';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 29;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2893;
        $this->model->name = 'eyuf/cruds/user-group';
        $this->model->data = 'cruds/user-group';
        $this->model->input = 'user-group';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3028;
        $this->model->name = 'eyuf/seller/shop-question';
        $this->model->data = 'seller/shop-question';
        $this->model->input = 'shop-question';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2996;
        $this->model->name = 'eyuf/client/settings';
        $this->model->data = 'client/settings';
        $this->model->input = 'settings';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 8;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2903;
        $this->model->name = 'eyuf/cruds/ware-need-item';
        $this->model->data = 'cruds/ware-need-item';
        $this->model->input = 'ware-need-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2786;
        $this->model->name = 'eyuf/cruds/eyuf-ticket';
        $this->model->data = 'cruds/eyuf-ticket';
        $this->model->input = 'eyuf-ticket';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2982;
        $this->model->name = 'eyuf/admin/agent_stat';
        $this->model->data = 'admin/agent_stat';
        $this->model->input = 'agent_stat';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3039;
        $this->model->name = 'eyuf/cruds/cpas-stream-stats';
        $this->model->data = 'cruds/cpas-stream-stats';
        $this->model->input = 'cpas-stream-stats';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2805;
        $this->model->name = 'eyuf/cruds/page-control';
        $this->model->data = 'cruds/page-control';
        $this->model->input = 'page-control';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2857;
        $this->model->name = 'eyuf/cruds/shop-warehouse';
        $this->model->data = 'cruds/shop-warehouse';
        $this->model->input = 'shop-warehouse';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2703;
        $this->model->name = 'eyuf/admin/@ Archive';
        $this->model->data = 'admin/@ Archive';
        $this->model->input = '@ Archive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3046;
        $this->model->name = 'ALL/core/tester/workerman';
        $this->model->data = 'tester/workerman';
        $this->model->input = 'workerman';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3050;
        $this->model->name = 'ALL/core/tester/wordpdf';
        $this->model->data = 'tester/wordpdf';
        $this->model->input = 'wordpdf';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2688;
        $this->model->name = 'ALL/core/tester/telegrambot';
        $this->model->data = 'tester/telegrambot';
        $this->model->input = 'telegrambot';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2668;
        $this->model->name = 'ALL/core/tester/iframe2';
        $this->model->data = 'tester/iframe2';
        $this->model->input = 'iframe2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2659;
        $this->model->name = 'ALL/core/tester/detail-view';
        $this->model->data = 'tester/detail-view';
        $this->model->input = 'detail-view';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3061;
        $this->model->name = 'eyuf/cpas/finance';
        $this->model->data = 'cpas/finance';
        $this->model->input = 'finance';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 34;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3059;
        $this->model->name = 'eyuf/cpas/main';
        $this->model->data = 'cpas/main';
        $this->model->input = 'main';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 34;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3062;
        $this->model->name = 'eyuf/cpas/support';
        $this->model->data = 'cpas/support';
        $this->model->input = 'support';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 34;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3063;
        $this->model->name = 'eyuf/cpas/tools';
        $this->model->data = 'cpas/tools';
        $this->model->input = 'tools';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 34;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2753;
        $this->model->name = 'eyuf/cruds/calls-record';
        $this->model->data = 'cruds/calls-record';
        $this->model->input = 'calls-record';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2794;
        $this->model->name = 'eyuf/cruds/govs-speciality';
        $this->model->data = 'cruds/govs-speciality';
        $this->model->input = 'govs-speciality';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2816;
        $this->model->name = 'eyuf/cruds/place-region';
        $this->model->data = 'cruds/place-region';
        $this->model->input = 'place-region';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2826;
        $this->model->name = 'eyuf/cruds/shop-courier-order';
        $this->model->data = 'cruds/shop-courier-order';
        $this->model->input = 'shop-courier-order';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2882;
        $this->model->name = 'eyuf/cruds/test-z-place-adress-zoir2';
        $this->model->data = 'cruds/test-z-place-adress-zoir2';
        $this->model->input = 'test-z-place-adress-zoir2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3020;
        $this->model->name = 'eyuf/seller/archive';
        $this->model->data = 'seller/archive';
        $this->model->input = 'archive';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2622;
        $this->model->name = 'core/kernel/core-action';
        $this->model->data = 'kernel/core-action';
        $this->model->input = 'core-action';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 2;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3049;
        $this->model->name = 'ALL/core/tester/htmlpdf';
        $this->model->data = 'tester/htmlpdf';
        $this->model->input = 'htmlpdf';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2677;
        $this->model->name = 'ALL/core/tester/phpsocketio';
        $this->model->data = 'tester/phpsocketio';
        $this->model->input = 'phpsocketio';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2694;
        $this->model->name = 'ALL/core/tester/webaction';
        $this->model->data = 'tester/webaction';
        $this->model->input = 'webaction';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 3;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2708;
        $this->model->name = 'eyuf/admin/shop-shipment';
        $this->model->data = 'admin/shop-shipment';
        $this->model->input = 'shop-shipment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3052;
        $this->model->name = 'eyuf/complect/no-complect';
        $this->model->data = 'complect/no-complect';
        $this->model->input = 'no-complect';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 29;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2740;
        $this->model->name = 'eyuf/cores/chat-message';
        $this->model->data = 'cores/chat-message';
        $this->model->input = 'chat-message';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 9;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2757;
        $this->model->name = 'eyuf/cruds/chat-message-public';
        $this->model->data = 'cruds/chat-message-public';
        $this->model->input = 'chat-message-public';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2768;
        $this->model->name = 'eyuf/cruds/drag-config-db';
        $this->model->data = 'cruds/drag-config-db';
        $this->model->input = 'drag-config-db';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3056;
        $this->model->name = 'eyuf/cruds/place-location';
        $this->model->data = 'cruds/place-location';
        $this->model->input = 'place-location';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3058;
        $this->model->name = 'eyuf/cruds/shop-banner';
        $this->model->data = 'cruds/shop-banner';
        $this->model->input = 'shop-banner';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2871;
        $this->model->name = 'eyuf/cruds/test-map-google-lobar';
        $this->model->data = 'cruds/test-map-google-lobar';
        $this->model->input = 'test-map-google-lobar';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2910;
        $this->model->name = 'eyuf/deliver/shop-order-item';
        $this->model->data = 'deliver/shop-order-item';
        $this->model->input = 'shop-order-item';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 10;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3000;
        $this->model->name = 'eyuf/shop/user/category-index';
        $this->model->data = 'user/category-index';
        $this->model->input = 'category-index';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3007;
        $this->model->name = 'eyuf/shop/user/main-catalog';
        $this->model->data = 'user/main-catalog';
        $this->model->input = 'main-catalog';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 11;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2700;
        $this->model->name = 'eyuf/@/product-market';
        $this->model->data = '@/product-market';
        $this->model->input = 'product-market';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 4;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2711;
        $this->model->name = 'eyuf/admin/ware-enter_2';
        $this->model->data = 'admin/ware-enter_2';
        $this->model->input = 'ware-enter_2';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 6;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3064;
        $this->model->name = 'eyuf/cpas/sites';
        $this->model->data = 'cpas/sites';
        $this->model->input = 'sites';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 34;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2775;
        $this->model->name = 'eyuf/cruds/eyuf-document-type';
        $this->model->data = 'cruds/eyuf-document-type';
        $this->model->input = 'eyuf-document-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2780;
        $this->model->name = 'eyuf/cruds/eyuf-need-count';
        $this->model->data = 'cruds/eyuf-need-count';
        $this->model->input = 'eyuf-need-count';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2830;
        $this->model->name = 'eyuf/cruds/shop-delayed-deliver-cause';
        $this->model->data = 'cruds/shop-delayed-deliver-cause';
        $this->model->input = 'shop-delayed-deliver-cause';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 2838;
        $this->model->name = 'eyuf/cruds/shop-offer-type';
        $this->model->data = 'cruds/shop-offer-type';
        $this->model->input = 'shop-offer-type';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 19;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageControl();

        $this->model->id = 3029;
        $this->model->name = 'eyuf/seller/shop-shipment';
        $this->model->data = 'seller/shop-shipment';
        $this->model->input = 'shop-shipment';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->page_module_id = 17;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
