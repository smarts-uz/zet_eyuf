<?php

namespace zetsoft\webhtm\All\tester\botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

class GiveInfoConversationZoir extends Conversation
{
    public function askInfoType()
    {
        $keyboard = [
            [['text'=>"ℹ️ Biz haqimizda"]],
            [['text'=>"📞 Aloqa"]],
            [['text'=>"⏪ Ortga"]]
        ];
            
        $this->ask("Kerakli <b>bo'limni</b> tanlang", function (Answer $answer) {
            switch ($answer->getText())
            {
                case "ℹ️ Biz haqimizda" :
                     $this->say(
                     "<a href=''>Biz haqimizda</a>",
                                ['parse_mode' => 'html']
                     );
                    $this->askInfoType();
                break;
                case "📞 Aloqa" :
                    $this->say(
                        "<a href=''>Haqimizda</a>",
                        ['parse_mode' => 'html']
                    );
                    $this->askInfoType();
                break;
                case "⏪ Ortga" :
                    $keyboard = [
                        [['text'=>"🔍 Dorilarni izlash"], ['text'=>"Ro'yxatdan o'tish"]],
                        [['text'=>"Qanday qo'llash mumkin❓"]],
                        [['text'=>"📝 Izoh qoldirish"], ['text'=>"Axborot 📖"]],
                        [['text' => "Рус. 🇷🇺 / 🇺🇿 O'zb."]]
                    ];
                    $this->say("Asosiy menyu",
                        [
                            'reply_markup' => json_encode([
                                'keyboard' => $keyboard,
                                'one_time_keyboard' => false, //false bo'lsa bosilganda yo'qolib qolmaydi
                                'resize_keyboard' => true
                            ]),
                            'parse_mode' => 'html'
                        ]
                    );
                break;
            }
        },
            [
                'reply_markup' => json_encode([
                    'keyboard' => $keyboard,
                    'one_time_keyboard' => false, //false bo'lsa bosilganda yo'qolib qolmaydi
                    'resize_keyboard' => true
                ]),
                'parse_mode' => 'html'
            ]
        );
    }

    public function run()
    {
        // This will be called immediately
        $this->askInfoType();
    }
}
