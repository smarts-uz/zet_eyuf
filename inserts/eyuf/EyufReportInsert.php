<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufReport;

class EyufReportInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufReport();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'asdasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'testeeere';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-Lab Maktab.docx',
        ];
        $this->model->eyuf_scholar_id = 35;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'sdfasdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            '1.png',
        ];
        $this->model->eyuf_scholar_id = 32;
        $this->model->need_verify = 1;
        $this->model->file_comment = [
            '1.png',
        ];
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = 'doc22';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-Lab Tikuvchi.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'doc2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '4- laboratoriya ishi.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'doc2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-Lab Tikuvchi.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            '1.png',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            'image_2020-09-21_10-46-03.png',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'asdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = 'sadf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'sdfasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'sdfsdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'Ariza21';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 3;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'hello';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'ghjhj';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = 1;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'asdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'doc2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '4- laboratoriya ishi.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            'ссылки (4).docx',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = [
            '1.png',
        ];
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = 'Ariza';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'doc2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-Lab Tikuvchi.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'sdfasd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'doc1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-Lab Maktab.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = 'Siir';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'E9xBra5kXU4wdFUQENHG73BePA7vtuaG.jpg',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'asdad';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = 'Ariza Oqish uchun';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 8;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            '1.png',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = [
            '1.png',
        ];
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'doc1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-Lab Tikuvchi.docx',
        ];
        $this->model->eyuf_scholar_id = 17;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            '1.png',
        ];
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = 1;
        $this->model->file_comment = [
            '1.png',
        ];
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'Ariza 8744_82';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'New Text Document.txt',
        ];
        $this->model->eyuf_scholar_id = 3;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'ewferfre';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '_2020-10-19_07-47-12.xlsx',
        ];
        $this->model->eyuf_scholar_id = 169;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'doc1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1 (2) (3).png',
        ];
        $this->model->eyuf_scholar_id = 169;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = 'doc1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1 (2) (3).png',
        ];
        $this->model->eyuf_scholar_id = 169;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = 'edef';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '_2020-10-19_07-47-12.xlsx',
        ];
        $this->model->eyuf_scholar_id = 169;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'adad';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '6. Илова № 5 10.08.2020.docx',
        ];
        $this->model->eyuf_scholar_id = 189;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = 'wecewew';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = [
            '_2020-10-19_07-47-12.xlsx',
        ];
        $this->model->eyuf_scholar_id = 180;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'report 1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '1-ON ni topshirish talablari.doc',
        ];
        $this->model->eyuf_scholar_id = 193;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'defre';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            '4- laboratoriya ishi.docx',
        ];
        $this->model->eyuf_scholar_id = 193;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Jamshid Ismailov';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = [
            'Picturesimg0.jpg',
        ];
        $this->model->eyuf_scholar_id = 205;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = 'Ismailov Jamshid';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = 205;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


        $this->model = new EyufReport();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->file = "";
        $this->model->eyuf_scholar_id = null;
        $this->model->need_verify = null;
        $this->model->file_comment = "";
        $this->save();


    }

}
