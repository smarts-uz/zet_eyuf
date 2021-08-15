<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */




use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\DoctrineCache;
use BotMan\BotMan\Drivers\DriverManager;
$token = '1210680423:AAGqATmg4p3tqKpl1eoyd0wUR2gjJQxdU2k';
$config = [
    // Your driver-specific configuration
     "telegram" => [
       "token" => $token
     ]
];

// Load the driver(s) you want to use
DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

$doctrineCacheDriver = new \Doctrine\Common\Cache\PhpFileCache('cache'); // 'cache' is the cache folder

$botman = BotManFactory::create($config, new DoctrineCache($doctrineCacheDriver));

// Give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

// Start listening
$botman->listen();









  /*
use zetsoft\dbitem\grap\GrapeItem;
use zetsoft\models\core\PlaceCountry;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inptest\ZKSelect2AjaxWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$a = new GrapeItem();

$date = Az::$app->cores->date->date();
return [
    'aa' => 'asfafa',
    '11' => $a,
    'date' => $date,

];
    */
   // vdd(Root);
        $key = rand(0, 1000000);
        file_put_contents(Root . "/file".$key.".txt", "asdfasdfasfafsdaffsd");
