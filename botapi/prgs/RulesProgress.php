<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 * @copyright zhead, zstart, zend
 */
namespace zetsoft\botapi\prgs;

use zetsoft\system\Az;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;


class RulesProgress  extends Conversation
{

    public function checkUserStatus()
    {

        $this->say("Assalomu alekum, bot faollashtirildi");
        $this->ask('Faol dasturchilarni kiriting', function (Answer $answer) {
            $this->aktiveUsers = $answer->getText();//faqat shu conversationni oxirigacha kerak bo'lsa shunaqa saqlansa yaxshi.
           $users = Az::$app->bot->userStorage->testCase(' @zetsoft @MrAsrorZakirov @Terrabayt @Daho98  @a21mj0n @thelaz1z @Zoirjon_Sobirov @Ravshan014 @akahon_1222 @samandar_boymurodov Mirshod @bahodirdeveloper Sobirjon @abdurakhmonov_uX @developerbottle @R_Gringo 丂卄卂卄乙ㄖᗪ @ZayniddinovF ');
           
            $this->say("Dear active users below, \n Please provide your hourly Progress " .  $users);
        });
    }
    public function dataReturn(){

    }
    public function run()
    {
        // This will be called immediately
        $this->checkUserStatus();
    }
}
