<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufDocument;

class EyufDocumentInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufDocument();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'safd';
        $this->model->title = 'safd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'sadfsdaf';
        $this->model->title = 'sadfsdaf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4162020 10642 PM.bmp',
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = 96;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = [
            'Fullscreen capture 4232020 84438 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->comment = 'asdfasdasdfsdaf';
        $this->model->eyuf_document_type_id = 13;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = 'asdfsadf';
        $this->model->title = 'asdfsadf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'asdfasdfsf131333131';
        $this->model->title = 'asdfasdfsf131333131';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 8;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = '_17';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'safd_19';
        $this->model->title = 'safd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'sadf';
        $this->model->title = 'sadf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'safdsadf';
        $this->model->title = 'safdsadf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'sdfsdf';
        $this->model->title = 'safd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'safdsasdafasdd1313';
        $this->model->title = 'safdsasdafasdd1313';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'sadfasasdf';
        $this->model->title = 'sadfasasdf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'asdf';
        $this->model->title = 'asdf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 8;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '1313';
        $this->model->title = '1313';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 13;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'sadfsdf';
        $this->model->title = 'sadfsdf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 11;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'sadfsadsadfa1313';
        $this->model->title = 'sadfsadsadfa1313';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 11;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'sadfassafassadfas';
        $this->model->title = 'sadfassafassadfas';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 13;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'passort';
        $this->model->title = 'passort';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = 216;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 5;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'safsadf';
        $this->model->title = 'safsadf';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4162020 10642 PM.bmp',
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = 216;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 8;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = null;
        $this->save();


        $this->model = new EyufDocument();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'sadfsad';
        $this->model->title = 'sadfsad';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
            'Fullscreen capture 4232020 84438 PM.bmp',
        ];
        $this->model->eyuf_scholar_id = 147;
        $this->model->status = null;
        $this->model->need_verify = null;
        $this->model->verified = null;
        $this->model->file_comment = "";
        $this->model->comment = '';
        $this->model->eyuf_document_type_id = 13;
        $this->save();


    }

}
