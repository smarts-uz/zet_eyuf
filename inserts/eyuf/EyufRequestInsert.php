<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufRequest;

class EyufRequestInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufRequest();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = '1313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '0',
            'title' => '0',
            'position' => '0',
            'specialty' => '0',
            'experiance' => '0',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'eyuf_request_id' => '1',
            'user_company_id' => '1',
            'place_country_id' => '0',
            'certificate_olimp' => '0',
        ];
        $this->model->deadline = '17-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = '3333';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\NeedCountForm';
        $this->model->value = "";
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = '13131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\NeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '30-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '';
        $this->model->lang = '';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '';
        $this->model->lang = '';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = 'one';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\NeedForm';
        $this->model->value = [
            'id' => '1',
            'email' => '1',
            'phone' => '1',
            'title' => '1',
            'position' => '1',
            'experiance' => '1',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'user_company_id' => '1',
            'certificate_olimp' => '0',
            'govs_speciality_ids' => '1',
        ];
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = '1313_130';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '0',
            'title' => '0',
            'position' => '0',
            'specialty' => '0',
            'experiance' => '0',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'eyuf_request_id' => '1',
            'user_company_id' => '1',
            'place_country_id' => '0',
            'certificate_olimp' => '0',
        ];
        $this->model->deadline = '17-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = '13131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = [
            'id' => '0',
            'email' => '0',
            'phone' => '1',
            'title' => '0',
            'position' => '0',
            'specialty' => '1',
            'experiance' => '1',
            'code_specialty' => '1',
            'recommendation' => '1',
            'education_field' => '1',
            'eyuf_request_id' => '1',
            'user_company_id' => '0',
            'place_country_id' => '1',
            'certificate_olimp' => '1',
        ];
        $this->model->deadline = '30-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCountForm';
        $this->model->value = [
            'id' => '0',
            'count' => '0',
            'program' => '0',
            'specialty' => '0',
        ];
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = '1313_131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '0',
            'title' => '0',
            'position' => '0',
            'specialty' => '0',
            'experiance' => '0',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'eyuf_request_id' => '1',
            'user_company_id' => '1',
            'place_country_id' => '0',
            'certificate_olimp' => '0',
        ];
        $this->model->deadline = '17-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = '1313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = '1313_132';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '0',
            'title' => '1',
            'position' => '1',
            'specialty' => '1',
            'experiance' => '0',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'eyuf_request_id' => '1',
            'user_company_id' => '1',
            'place_country_id' => '0',
            'certificate_olimp' => '0',
        ];
        $this->model->deadline = '17-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'HereWeGoAgain';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '0',
            'title' => '0',
            'position' => '0',
            'specialty' => '0',
            'experiance' => '0',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'eyuf_request_id' => '1',
            'user_company_id' => '1',
            'place_country_id' => '0',
            'certificate_olimp' => '0',
        ];
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'Test1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '26-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Test1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '26-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Test1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '26-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'Test1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '26-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'n233';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '28-01-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'n332';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '30-09-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'n332';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '30-09-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'n233';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = [
            'id' => '1',
            'email' => '1',
            'phone' => '1',
            'title' => '1',
            'position' => '1',
            'experiance' => '1',
            'code_specialty' => '1',
            'recommendation' => '1',
            'education_field' => '1',
            'user_company_id' => '1',
            'certificate_olimp' => '1',
            'govs_speciality_ids' => '1',
        ];
        $this->model->deadline = '28-01-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'Test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'Test';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = '3333';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'Ali';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '13-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Ali';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '13-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'DDD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '07-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'DDD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '07-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'DSA';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '07-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'DSA';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '07-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'nazvanie4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'nazvanie4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = [
            'id' => '0',
            'email' => '0',
            'phone' => '0',
            'title' => '0',
            'position' => '0',
            'specialty' => '0',
            'experiance' => '0',
            'code_specialty' => '0',
            'recommendation' => '0',
            'education_field' => '0',
            'eyuf_request_id' => '0',
            'user_company_id' => '0',
            'place_country_id' => '0',
            'certificate_olimp' => '0',
        ];
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '17-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '17-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'ASZ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCountForm';
        $this->model->value = "";
        $this->model->deadline = '07-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = 'ASZ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCountForm';
        $this->model->value = "";
        $this->model->deadline = '07-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '09-03-2021';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '09-03-2021';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'ASDASD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'ASDASD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'ASDAS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '09-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'ASDAS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '09-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'ASD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = 'ASD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '16-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '16-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'NMaa';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'NMaa';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '08-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '15-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'asdasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'asdasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'asd1111';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'asd1111';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '01-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '09-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '123';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '09-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'xxxxxxxxxx';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCountForm';
        $this->model->value = "";
        $this->model->deadline = '03-11-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'xxxxxxxxxx';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCountForm';
        $this->model->value = "";
        $this->model->deadline = '03-11-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'xxxxxx1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '02-11-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'xxxxxx1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '02-11-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'xxxxxxx2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = '';
        $this->model->value = "";
        $this->model->deadline = '15-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'nazvanie4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '03-11-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'nazvanie4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedCompatriotForm';
        $this->model->value = "";
        $this->model->deadline = '03-11-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'nazvanie4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '05-11-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'nazvanie4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = "";
        $this->model->deadline = '05-11-2020';
        $this->model->lang = 'lotin';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'xxxxxxxxxxx';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '1',
            'title' => '1',
            'position' => '0',
            'experiance' => '0',
            'code_specialty' => '1',
            'recommendation' => '0',
            'education_field' => '0',
            'user_company_id' => '0',
            'certificate_olimp' => '1',
            'govs_speciality_ids' => '1',
        ];
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'xxxxxxxxxxx_175';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '1',
            'title' => '1',
            'position' => '0',
            'experiance' => '0',
            'code_specialty' => '1',
            'recommendation' => '0',
            'education_field' => '0',
            'user_company_id' => '0',
            'certificate_olimp' => '1',
            'govs_speciality_ids' => '1',
        ];
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'krill';
        $this->save();


        $this->model = new EyufRequest();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'xxxxxxxxxxx_179asda';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->form = 'zetsoft\\former\\eyuf\\EyufNeedForm';
        $this->model->value = [
            'id' => '1',
            'email' => '0',
            'phone' => '1',
            'title' => '1',
            'position' => '0',
            'experiance' => '0',
            'code_specialty' => '1',
            'recommendation' => '0',
            'education_field' => '0',
            'user_company_id' => '0',
            'certificate_olimp' => '1',
            'govs_speciality_ids' => '1',
        ];
        $this->model->deadline = '23-10-2020';
        $this->model->lang = 'krill';
        $this->save();


    }

}
