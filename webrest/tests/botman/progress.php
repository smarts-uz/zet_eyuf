<?php

/**
 *
 *
 * Author:  Zoirjon Sobirov
 * https://t.me/zoirjon_sobirov
 *
 */
namespace zetsoft\botapi\prgs;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use zetsoft\botapi\infos\GiveInfoConversation;
use zetsoft\system\Az;
use zetsoft\botapi\progress\ProgressReminder;
use zetsoft\botapi\prgs\RulesProgress;



$botman = Az::$app->bot->tgBotman->botman(
    "1013710343:AAHvXesrbwTwtWQxiXEvstFamEXIYOq1PaA"
);

$botman->hears("/start", function (BotMan $bot) {
    $bot->typesAndWaits(1);

    $user = $bot->getUser();
    $username = $user->getUsername();
    $userStatus = $user->getStatus();
    if ($userStatus == 'creator'){
        $bot->startConversation(new RulesProgress());
    }elseif ($userStatus == 'administrator'){
        $bot->reply("Sizning statusingiz ".$userStatus." va siz barcha bot buyruqlaridan foydalana olasiz");
    }elseif ($userStatus == 'member'){
        $bot->reply("Sizning statusingiz ".$userStatus." va afsus siz mavjud bot buyruqlaridan foydalanish imkonyatingiz mavjud emas !");
    }


});

$botman->hears('Axborot 📖', function (Botman $bot) {
    $bot->typesAndWaits(1);
    //$bot->startConversation(new GiveInfoConversation());
});
$botman->hears("start ▶️", function (Botman $bot) {
    $bot->typesAndWaits(1);
    //$bot->startConversation(new RegisterConversation());
});




$botman->hears('salom', function ($bot) {
    $bot->reply("Va alaykum assalom");
});
//faqat shu pattern bilan xabar kelsa bot javob beradi
$botman->hears('Men ([0-9]+) ta (pitsa|muzqaymoq) xoxlayman', function ($bot, $x, $y) {
    $bot->reply("Siz $x ta $y buyurtma qildingiz");
});
//$botman->hears('Men {product} xoxlayman', function ($bot, $x) {
//    $bot->reply("$x bizda mavjud emas");
//});

//alohida fayl qilmasdan ham conversation qilsa bo'ladi
$botman->hears('/test_suhbat', function (BotMan $bot){
    $bot->typesAndWaits(1);
    $bot->ask('ismingiz nima', function(Answer $answer, $bot){
        $bot->say("tanishganimdan xursandman ". $answer->getText());
        $bot->ask("elektrok pochtangizni kiritish", function(Answer $answer, $bot){
            $bot->say("elektron pochta ". $answer->getText() . " sifatida qabul qilindi");
            $bot->ask("Telefon raqamingizni kiriting: ", function (Answer $answer, $bot){
                $bot->say("telefon raqam ". $answer->getText() . " sifatida qabul qilindi");
                     $bot->say("Ma'lumotlaringiz qabul qilindi suhbatni yakunlash uchun iltimos stop db yozin");
            });
        });
    });
});

$botman->fallback(function($bot) {
    $bot->reply('Kechirasiz, Men sizning gapingizga tushunmadim');
});
//conversation ni to'xtatib cache dagi ma'lumotlarni o'chirib tashlaydi
$botman->hears('stop', function(BotMan $bot) {
    $bot->reply('Biz bilan bog\'langaningiz uchun rahmat salomat bo\'ling :)');
})->stopsConversation();

$botman->listen();
