<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 29.06.2017 19:06
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */

namespace zetsoft\cncmd\tester;



use zetsoft\system\Az;
use zetsoft\system\control\ZControlCmd;


//require Root . '/ventest/phar/vendor/autoload.php';

class DilmurodController extends ZControlCmd
{

    public function actionRun()
    {
        //Az::$app->calls->fillCdr->run();
          //$this->timeZone();

        Az::$app->calls->fop->test();
    }

    public function timeZone(){
           vdd(date_default_timezone_get());
    }
    

}
