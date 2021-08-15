<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\chat\ChatMessage;

class ChatMessageInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ChatMessage();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'How are you?';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'I\'m great!';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'What are you doing?';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'Are you busy?';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'No, I\'m not';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'nma gap';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'hech gap yoq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'alo';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 154;
        $this->model->text = 'nma gap';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'dnavjldnjab';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 128;
        $this->model->receiver = 0;
        $this->model->text = 'I\'m fine thanks';
        $this->model->read = 1;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 128;
        $this->model->receiver = 0;
        $this->model->text = 'And you?';
        $this->model->read = 1;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 128;
        $this->model->receiver = 0;
        $this->model->text = 'qalesla';
        $this->model->read = 1;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 128;
        $this->model->receiver = 0;
        $this->model->text = 'nma gap';
        $this->model->read = 1;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 128;
        $this->model->receiver = 0;
        $this->model->text = 'Hello';
        $this->model->read = 1;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 154;
        $this->model->text = 'hello';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'abvdjlsva';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'ilfkdsb';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'bhkvs uala';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'uwgr';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'test message';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'test message 2';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'test message 3';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'test message 4';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 154;
        $this->model->text = 'abdvkaidvo';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'hi';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'adbadbf';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'adsbanjlq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'hello';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'bhkwegqa';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'bhkserxxl';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'akamalak';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'helloo';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'nma gap';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'test';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'test 2';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'test 3';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 143;
        $this->model->text = 'vaysdvkab';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'nma gap';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'hech gap yoq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = '50\\\\\\\\\\\$ olamza';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'oka yozin';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'bahdkvadbq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'asdvlq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'asdasda';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'njlasdv asdqg';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'boldi';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'yana yozin';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 0;
        $this->model->receiver = 128;
        $this->model->text = 'Hi';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'asdhubq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'ojlksfbd';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'stilini togilash';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'smilikla';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'userlani roli bilan chiqarish kere';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'ang';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 156;
        $this->model->receiver = 149;
        $this->model->text = 'asd';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 156;
        $this->model->receiver = 169;
        $this->model->text = 'asdasdasdasddsaasd';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 156;
        $this->model->receiver = 145;
        $this->model->text = 'asd';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'asdgbaf';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 154;
        $this->model->receiver = 158;
        $this->model->text = 'asdas';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 158;
        $this->model->receiver = 154;
        $this->model->text = 'asbdgukq';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 109;
        $this->model->receiver = 149;
        $this->model->text = 'helllo';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 109;
        $this->model->receiver = 149;
        $this->model->text = 'dasdasdas';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 156;
        $this->model->receiver = 180;
        $this->model->text = 'Mirbosit';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


        $this->model = new ChatMessage();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->sender = 156;
        $this->model->receiver = 180;
        $this->model->text = 'qalesiz';
        $this->model->read = null;
        $this->model->file = "";
        $this->model->time = null;
        $this->model->chat_group_id = null;
        $this->save();


    }

}
