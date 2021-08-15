<?php
namespace zetsoft\botapi\progress;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\webhtm\All\tester\botman\ChooseLanguageConversation;
use zetsoft\webhtm\All\tester\botman\GiveInfoConversation;
use zetsoft\botapi\progress\RegisterConversationReminder;


$botman = Az::$app->bot->tgBotman->botman(
    "1277348798:AAEXBJt458qC3O8zwbzaYIvNoOdjEDVivXU"
);

$botman->hears("(/start|Рус. 🇷🇺 / 🇺🇿 O'zb.)", function ($bot) {
    $bot->startConversation(new ChooseLanguageConversationZoir());
});

$botman->hears('Axborot 📖', function ($bot) {
    $bot->startConversation(new GiveInfoConversationZoir());
});

$botman->hears("Ro'yxatdan o'tish", function ($bot) {
    $bot->startConversation(new RegisterConversationZoir());
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

            });
        });
    });
});

$botman->fallback(function($bot) {
    $bot->reply('Kechirasiz, Men sizning gapingizga tushunmadim');
});
//conversation ni to'xtatib cache dagi ma'lumotlarni o'chirib tashlaydi
$botman->hears('stop', function(BotMan $bot) {
    $bot->reply('stopped');
})->stopsConversation();

$botman->listen();
