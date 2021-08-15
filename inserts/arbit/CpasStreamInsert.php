<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasStream;

class CpasStreamInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasStream();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Fatality_new test flow';
        $this->model->title = 'new test flow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 350;
        $this->model->counter = [
            'vk' => '',
            'mail' => '',
            'google' => '',
            'yandex' => '',
            'facebook' => '',
        ];
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '0',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => 'http://mplace.zetsoft.uz/api/cpas/lead/set-lead.aspx?status={status}',
            'trash' => '123',
            'cancel' => '123',
            'method' => 'get',
            'approve' => '123',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Fatality_FataTest';
        $this->model->title = 'FataTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = [
            'vk' => '',
            'mail' => '',
            'google' => '',
            'yandex' => '',
            'facebook' => '',
        ];
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '0',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'FataTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = "";
        $this->model->widget = "";
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'post',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'FataTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = "";
        $this->model->widget = "";
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'post',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'FataTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = "";
        $this->model->widget = "";
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'post',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'Fatality_myfatality';
        $this->model->title = 'myfatality';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 372;
        $this->model->counter = [
            'vk' => '',
            'mail' => '',
            'google' => '',
            'yandex' => '',
            'facebook' => '',
        ];
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '0',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => 'http://mplace.zetsoft.uz/api/cpas/lead/set-lead.aspx?status={status}',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'FataTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = "";
        $this->model->widget = "";
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'post',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'FataTest';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = "";
        $this->model->widget = "";
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'Fatality_new flow';
        $this->model->title = 'new flow';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 372;
        $this->model->counter = [
            'vk' => '',
            'mail' => '',
            'google' => '',
            'yandex' => '',
            'facebook' => '',
        ];
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '0',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Fatality_my fatality test';
        $this->model->title = 'my fatality test';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 370;
        $this->model->counter = [
            'vk' => '',
            'mail' => '',
            'google' => '',
            'yandex' => '',
            'facebook' => '',
        ];
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '0',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


        $this->model = new CpasStream();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'Fatality_test fatality';
        $this->model->title = 'test fatality';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->cpas_offer_id = 19;
        $this->model->user_id = 372;
        $this->model->counter = [
            'vk' => '',
            'mail' => '',
            'google' => '',
            'yandex' => '',
            'facebook' => '',
        ];
        $this->model->widget = [
            'online' => '0',
            'ordered' => '0',
            'comeback' => '0',
            'last_day' => '0',
            'pricehold' => '0',
        ];
        $this->model->postback = [
            'new' => '',
            'trash' => '',
            'cancel' => '',
            'method' => 'get',
            'approve' => '',
        ];
        $this->model->trafficback = null;
        $this->model->sub1 = '';
        $this->model->sub2 = '';
        $this->model->sub3 = '';
        $this->model->sub4 = '';
        $this->model->sub5 = '';
        $this->model->utm_source = '';
        $this->model->utm_company = '';
        $this->model->utm_content = '';
        $this->model->utm_term = '';
        $this->save();


    }

}
