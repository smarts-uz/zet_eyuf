<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufTicket;

class EyufTicketInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufTicket();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '323';
        $this->model->payment_file = "";
        $this->model->start_date = '04-10-2020';
        $this->model->end_date = '29-09-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 83;
        $this->model->visa = '';
        $this->model->payment_file = [
            'id_cache.db-wal',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '30-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 83;
        $this->model->visa = '';
        $this->model->payment_file = [
            'id_cache.db-wal',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '30-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 83;
        $this->model->visa = '';
        $this->model->payment_file = [
            'id_cache.db-wal',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '30-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 83;
        $this->model->visa = '1231245654';
        $this->model->payment_file = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->start_date = '18-10-2020';
        $this->model->end_date = '06-11-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 83;
        $this->model->visa = '21313555';
        $this->model->payment_file = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->start_date = '30-10-2020';
        $this->model->end_date = '14-01-2021';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '1231313';
        $this->model->payment_file = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 83;
        $this->model->visa = '131232666';
        $this->model->payment_file = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 3;
        $this->model->visa = '12313';
        $this->model->payment_file = [
            'jqA7Gts8MC7J3K8zy5kD9dFF9ktXmZxx.jpg',
        ];
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 3;
        $this->model->visa = '0';
        $this->model->payment_file = [
            '_2020-10-20_09-42-34.xlsx',
        ];
        $this->model->start_date = '29-09-2020';
        $this->model->end_date = '30-09-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 3;
        $this->model->visa = '1232123123';
        $this->model->payment_file = [
            'New Text Document (1).txt',
        ];
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 3;
        $this->model->visa = '21312321';
        $this->model->payment_file = [
            '3-Things-Great-Websites-Have-in-Common.png',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '23-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 37;
        $this->model->visa = '21312321';
        $this->model->payment_file = [
            '3-Things-Great-Websites-Have-in-Common.png',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '07-11-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 37;
        $this->model->visa = '21312321';
        $this->model->payment_file = [
            '3-Things-Great-Websites-Have-in-Common (3).png',
        ];
        $this->model->start_date = '01-10-2020';
        $this->model->end_date = '23-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 37;
        $this->model->visa = '21312321';
        $this->model->payment_file = [
            '3-Things-Great-Websites-Have-in-Common (3).png',
        ];
        $this->model->start_date = '01-10-2020';
        $this->model->end_date = '30-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 37;
        $this->model->visa = '21312321';
        $this->model->payment_file = [
            '3-Things-Great-Websites-Have-in-Common.png',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '30-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'asd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 37;
        $this->model->visa = '21312321';
        $this->model->payment_file = [
            '3-Things-Great-Websites-Have-in-Common (3).png',
        ];
        $this->model->start_date = '30-09-2020';
        $this->model->end_date = '30-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'adsdad';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 32;
        $this->model->visa = '132423534252';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = null;
        $this->model->visa = '';
        $this->model->payment_file = "";
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '1313131';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 179;
        $this->model->visa = '131313131';
        $this->model->payment_file = [
            '_2020-10-16_12-19-55.xlsx',
        ];
        $this->model->start_date = '01-10-2020';
        $this->model->end_date = '31-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = '131313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 177;
        $this->model->visa = '131313';
        $this->model->payment_file = [
            '_2020-10-16_12-19-55.xlsx',
        ];
        $this->model->start_date = '03-10-2020';
        $this->model->end_date = '31-10-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = 'sdafdsaf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 179;
        $this->model->visa = 'safsaf';
        $this->model->payment_file = [
            '_2020-10-16_12-19-55.xlsx',
        ];
        $this->model->start_date = '09-10-2020';
        $this->model->end_date = '06-11-2020';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'bdvesd';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 179;
        $this->model->visa = '';
        $this->model->payment_file = [
            'ссылки (4).docx',
        ];
        $this->model->start_date = '';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = 'fasdasdf';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 98;
        $this->model->visa = 'asfsdafsaf';
        $this->model->payment_file = [
            '5. Илова № 4 10.08.2020.docx',
        ];
        $this->model->start_date = '02-10-2020';
        $this->model->end_date = '';
        $this->save();


        $this->model = new EyufTicket();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = '1313';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->eyuf_scholar_id = 196;
        $this->model->visa = '13313';
        $this->model->payment_file = [
            'Fullscreen capture 4232020 84435 PM.bmp',
        ];
        $this->model->start_date = '30-10-2020';
        $this->model->end_date = '20-11-2020';
        $this->save();


    }

}
