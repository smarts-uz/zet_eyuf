<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\App\eyuf\EyufDocumentType;

class EyufDocumentTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new EyufDocumentType();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'Паспорт нусхаси';
        $this->model->title = 'Паспорт нусхаси;';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'intern',
            'doctors',
            'masters',
            'qualify',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = 'Хорижда таълим олишдан кўзланган мақсад ва таълим олиш тугагач олинган билимларни Ўзбекистонда қўллаш имкониятлари ҳақида эссе (ёзма иш).';
        $this->model->title = 'Хорижда таълим олишдан кўзланган мақсад ва таълим олиш тугагач олинган билимларни Ўзбекистонда қўллаш имкониятлари ҳақида эссе (ёзма иш).';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'masters',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'Иш жойидан тавсия хати;';
        $this->model->title = 'Иш жойидан тавсия хати;';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'intern',
            'masters',
            'qualify',
            'doctors',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = 'Ўзбекистонда ёки хориждаги илмий журналларда эълон қилинган илмий мақолалари рўйхати ҳамда уларнинг электрон вариантлари;';
        $this->model->title = 'Ўзбекистонда ёки хориждаги илмий журналларда эълон қилинган илмий мақолалари рўйхати ҳамда уларнинг электрон вариантлари;';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'masters',
            'doctors',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = 'Танланган соҳани ривожлантириш ҳамда унинг натижаларини Ўзбекистонда қўллаш учун номзод тадқиқотининг долзарблиги тўғрисида тегишли таълим, илмий ёки бошқа муассаса раҳбарининг тавсия хати;';
        $this->model->title = 'Танланган соҳани ривожлантириш ҳамда унинг натижаларини Ўзбекистонда қўллаш учун номзод тадқиқотининг долзарблиги тўғрисида тегишли таълим, илмий ёки бошқа муассаса раҳбарининг тавсия хати;';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'doctors',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 16;
        $this->model->sort = null;
        $this->model->name = 'CEFR тизими бўйича В2 даражасидан паст бўлмаган амалдаги миллий ёки халқаро сертификат (IELTS, TOEFL ва бошқалар);';
        $this->model->title = 'CEFR тизими бўйича В2 даражасидан паст бўлмаган амалдаги миллий ёки халқаро сертификат (IELTS, TOEFL ва бошқалар);';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'masters',
            'doctors',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = 'Режалаштирилаётган илмий тадқиқотнинг мақсадлари, услублари ва натижалари, уларни Ўзбекистонда қўллаш имкониятлари ҳақидаги эссе (ёзма иш).';
        $this->model->title = 'Режалаштирилаётган илмий тадқиқотнинг мақсадлари, услублари ва натижалари, уларни Ўзбекистонда қўллаш имкониятлари ҳақидаги эссе (ёзма иш).';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'doctors',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = 'Хорижий таълим, илмий ёки бошқа муассасага ўқишга қабул қилинганлиги ёки шартли қабул қилинганлиги тўғрисидаги таклифнома-хат (Lеtter of acceptance ёки Letter of conditional acceptance);';
        $this->model->title = 'Хорижий таълим, илмий ёки бошқа муассасага ўқишга қабул қилинганлиги ёки шартли қабул қилинганлиги тўғрисидаги таклифнома-хат (Lеtter of acceptance ёки Letter of conditional acceptance);';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = [
            'masters',
            'doctors',
        ];
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 17;
        $this->model->sort = null;
        $this->model->name = 'CEFR тизими бўйича В1 даражасидан паст бўлмаган амалдаги миллий ёки халқаро сертификат (IELTS, TOEFL ва бошқалар).';
        $this->model->title = 'CEFR тизими бўйича В1 даражасидан паст бўлмаган амалдаги миллий ёки халқаро сертификат (IELTS, TOEFL ва бошқалар).';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = "";
        $this->save();


        $this->model = new EyufDocumentType();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'Стажировка ўташ шартлари ва дастури тўғрисида хорижий муассаса билан дастлабки келишув;';
        $this->model->title = 'Стажировка ўташ шартлари ва дастури тўғрисида хорижий муассаса билан дастлабки келишув;';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->program = "";
        $this->save();


    }

}
