<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageModule;

class PageModuleInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageModule();

        $this->model->id = 2;
        $this->model->name = 'core/kernel';
        $this->model->data = 'kernel';
        $this->model->input = 'kernel';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 3;
        $this->model->name = 'ALL/tester';
        $this->model->data = 'tester';
        $this->model->input = 'tester';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 28;
        $this->model->name = 'eyuf/.idea';
        $this->model->data = '.idea';
        $this->model->input = '.idea';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 4;
        $this->model->name = 'eyuf/@';
        $this->model->data = '@';
        $this->model->input = '@';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 6;
        $this->model->name = 'eyuf/admin';
        $this->model->data = 'admin';
        $this->model->input = 'admin';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 20;
        $this->model->name = 'eyuf/agent';
        $this->model->data = 'agent';
        $this->model->input = 'agent';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 7;
        $this->model->name = 'eyuf/blocks';
        $this->model->data = 'blocks';
        $this->model->input = 'blocks';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 31;
        $this->model->name = 'eyuf/calls';
        $this->model->data = 'calls';
        $this->model->input = 'calls';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 8;
        $this->model->name = 'eyuf/client';
        $this->model->data = 'client';
        $this->model->input = 'client';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 29;
        $this->model->name = 'eyuf/complect';
        $this->model->data = 'complect';
        $this->model->input = 'complect';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 9;
        $this->model->name = 'eyuf/cores';
        $this->model->data = 'cores';
        $this->model->input = 'cores';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 32;
        $this->model->name = 'eyuf/courier';
        $this->model->data = 'courier';
        $this->model->input = 'courier';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 34;
        $this->model->name = 'eyuf/cpas';
        $this->model->data = 'cpas';
        $this->model->input = 'cpas';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 19;
        $this->model->name = 'eyuf/cruds';
        $this->model->data = 'cruds';
        $this->model->input = 'cruds';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 10;
        $this->model->name = 'eyuf/deliver';
        $this->model->data = 'deliver';
        $this->model->input = 'deliver';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 11;
        $this->model->name = 'eyuf/user';
        $this->model->data = 'user';
        $this->model->input = 'user';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 27;
        $this->model->name = 'eyuf/logistics';
        $this->model->data = 'logistics';
        $this->model->input = 'logistics';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 17;
        $this->model->name = 'eyuf/seller';
        $this->model->data = 'seller';
        $this->model->input = 'seller';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 24;
        $this->model->name = 'eyuf/supervisor';
        $this->model->data = 'supervisor';
        $this->model->input = 'supervisor';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 33;
        $this->model->name = 'eyuf/tracks';
        $this->model->data = 'tracks';
        $this->model->input = 'tracks';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PageModule();

        $this->model->id = 30;
        $this->model->name = 'eyuf/warehouse';
        $this->model->data = 'warehouse';
        $this->model->input = 'warehouse';
        $this->model->check = 1;
        $this->model->clone = null;
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
