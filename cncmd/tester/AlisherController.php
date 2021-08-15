<?php
/**
 *
 * Author:  Umid Muminov
 * Created: 28.07.2020 14:15
 */

namespace zetsoft\cncmd\tester;

use zetsoft\dbitem\App\eyuf\AutoDialItem;
use zetsoft\dbitem\shop\BannerItem;
use zetsoft\dbitem\shop\CatalogItem;
use zetsoft\dbitem\shop\HomeItem;
use zetsoft\dbitem\shop\MarketItem;
use zetsoft\models\App\eyuf\db3\CxpanelUsers;
use zetsoft\models\App\eyuf\db3\Devices;
use zetsoft\models\App\eyuf\db3\Sip;
use zetsoft\models\App\eyuf\db3\Users;
use zetsoft\system\control\ZControlCmd;
use zetsoft\system\Az;

class AlisherController extends ZControlCmd
{
    public function actionRun(){

        $homePage = new HomeItem();

        $homePage->exists = true;
        $homePage->title = "Eng zo'r magazin";


        /**
         *
         * Best Offers
         */

        $catalogItem = new CatalogItem();
        $catalogItem->image = '';
        $catalogItem->name = '';
        $catalogItem->title = '';

        $homePage->bestOffers[] = $catalogItem;

        $catalogItem = new CatalogItem();
        $catalogItem->image = '';
        $catalogItem->name = '';
        $catalogItem->title = '';

        $homePage->bestOffers[] = $catalogItem;
        
        $catalogItem = new CatalogItem();
        $catalogItem->image = '';
        $catalogItem->name = '';
        $catalogItem->title = '';

        $homePage->bestOffers[] = $catalogItem;


        /**
         *
         * Best Offers
         */

        $catalogItem = new CatalogItem();
        $catalogItem->image = '';
        $catalogItem->name = '';
        $catalogItem->title = '';

        $homePage->newItems[] = $catalogItem;


        $bannerBig = [];

        $bannerItem = new BannerItem();
        $bannerItem->image = '';
        $bannerItem->link = 'http>://';
        $bannerBig = [];
        
        $homePage->bannerBig[] = $bannerBig;
        
        $homePage->delayed[] = $bannerBig;



//        Az::$app->parser->shuchkinSimplexlsExcel97Parser->xlsToArrayExample();
//        Az::$app->parser->rodenastyleStreamParser->exampleXML();
//        Az::$app->parser->rodenastyleStreamParser->exampleJSON();
//        Az::$app->parser->rodenastyleStreamParser->exampleCSV();
//        Az::$app->parser->nikicPhpParser->example();
//        Az::$app->optima->wyrihaximusHtmlCompress->basicExample();
//        Az::$app->optima->wyrihaximusHtmlCompress->advancedExample();
//        Az::$app->optima->tinyHtmlMinifier->exampleMinifierOptions();
//        Az::$app->optima->tinyHtmlMinifier->simpleExample();
//        Az::$app->optima->marcocesaratoMinifier->sample();
//        Az::$app->optima->vokuHtmlMin->example();

        return $homePage;

    }
}
