<?php
/**
 * Class    LibreOffice
 * @package zetsoft\service\office
 *
 * @author Asror Zakirov
 * @license DilshodKhudoyarov
 *
 * https://www.ip2location.com/
 * Class file Ip2Loacation mamlakat, mintaqa, shahar, kenglik va uzunlik, pochta indeksi,
 * vaqt zonasi, ulanish tezligi, Internet provayderini aniqlash uchun IP-yechim
 */
namespace zetsoft\service\geo;

use zetsoft\system\Az;
use zetsoft\system\kernels\ZFrame;
use yii\httpclient\Client;

class Ip2Loacation extends ZFrame
{

    #region Vars

    public $database = Root . '\vendor/torann/geoip/resources/geoip.mmdb';

    #endregion

    # region Cores
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
    # endregion

    #region Test

    public function test()
    {
        $this->getInfoTest();
    }

    #endregion

    #region Function
    public function getinfo($data)
    {

        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl($data)
            ->send();

        vd($response);
    }
     #endregion

    #test_region
    public function getInfoTest() {
        // enter here path
        $data= 'https://www.ip2location.com/94.158.52.244/&key=demo&package=WS1|WS2|WS3&addon=country';
        $res = Az::$app->geo->ip2Loacation->getinfo($data);
        vd($res);
    }
    #end_test_region
}
