<?php

namespace zetsoft\botapi\progress;


use zetsoft\system\Az;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

class ProgressReminder extends Conversation
{
    protected $firstname;
    protected $chat_id;
    protected $email;
    public function test() {
        $this->reply("Sizning statusingiz  va siz mavjud bot buyruqlaridan foydalana olasiz");
     }
    public function run()
    {
        // This will be called immediately
        $this->test();
    }
}
