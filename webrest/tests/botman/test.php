<?php

/**
 * @author   Zoirjon Sobirov
 * contact: https://t.me/zoirjon_sobirov
 * @license Zoirjon Sobirov
 */

use zetsoft\system\Az;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;




$botman = Az::$app->bot->tgBotman->botman(
    "1013710343:AAHvXesrbwTwtWQxiXEvstFamEXIYOq1PaA"
);

$botman->hears('salom', function ($bot) {
    $bot->reply("Va alaykum assalom");
});
//faqat shu pattern bilan xabar kelsa bot javob beradi

$botman->hears('Men ([0-9]+) ta (pitsa|muzqaymoq) xoxlayman', function ($bot, $x, $y) {
    $bot->reply("Siz $x ta $y buyurtma qildingiz");
});

$botman->fallback(function($bot) {
    $bot->reply('Kechirasiz, Men sizning gapingizga tushunmadim');
});
//conversation ni to'xtatib cache dagi ma'lumotlarni o'chirib tashlaydi
$botman->hears('stop', function(BotMan $bot) {
    $bot->reply('Biz bilan bog\'langaningiz uchun rahmat salomat bo\'ling :)');
})->stopsConversation();

$botman->listen();
