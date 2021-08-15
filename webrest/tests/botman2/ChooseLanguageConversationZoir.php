<?php

namespace zetsoft\webhtm\All\tester\botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use zetsoft\dbitem\core\WebItem;

$action = new WebItem();

$action->title = Azl . 'Потребности';
$action->icon = 'fal fa-graduation-cap';
$action->type = WebItem::type['ajax'];
$action->csrf = false;

if ($this->httpGet('spa'))
    $action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

class ChooseLanguageConversationZoir extends Conversation
{
    /*public function askLanguage()
    {
        $keyboard = [
            [['text'=>"🔍 Dorilarni izlash"], ['text'=>"Ro'yxatdan o'tish"]],
            [['text'=>"Qanday qo'llash mumkin❓"]],
            [['text'=>"📝 Izoh qoldirish"], ['text'=>"Axborot 📖"]],
            [['text' => "Рус. 🇷🇺 / 🇺🇿 O'zb."]]
        ];
        $question = Question::create('Tilni tanlang')
            ->fallback('Kechirasiz')
            ->callbackId('choose_language')
            ->addButtons([
                Button::create("O'zbekcha")->value('uz'),
                Button::create("Русский")->value('ru'),
                Button::create("english")->value('en'),
            ]);
            
        $this->ask($question, function (Answer $answer) use ($keyboard) {
            if ($answer->isInteractiveMessageReply()) {
                $selectedValue = $answer->getValue();
                $selectedText = $answer->getText();

                Az::$app->bot->userStorage()->save([
                    'language' => $selectedValue
                ]);
                //buni $this->userStorage()->find()->get('language'); deb olib ishlatsa bo'ladi
                $this->say("<b>".$selectedText . "</b> faollashtirildi", [
                    'reply_markup' => json_encode([
                        'keyboard' => $keyboard,
                        'one_time_keyboard' => true,
                        'resize_keyboard' => true
                    ]),
                    'parse_mode' => 'html'
                ]);
            }
        });
    } */

    public function run()
    {
        // This will be called immediately
       $this->say('salom');
       // $this->askLanguage();
    }
}
