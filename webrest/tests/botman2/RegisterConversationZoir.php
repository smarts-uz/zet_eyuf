<?php

namespace zetsoft\webhtm\All\tester\botman;

use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Location;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

class RegisterConversationZoir  extends Conversation
{
    protected $firstname;
    protected $image;
    protected $video;
    protected $phone_number;
    protected $longitude;
    protected $latitude;

    public function file_force_contents($fullPath, $contents, $flags = 0)
    {
        $parts = explode('/', $fullPath);
        array_pop($parts);
        $dir = implode('/', $parts);

        if (!is_dir($dir))
            mkdir($dir, 0777, true);

        file_put_contents($fullPath, $contents, $flags);
    }

    public function askFirstname()
    {
        $this->ask('Ismingizni kiriting', function (Answer $answer) {
            $this->firstname = $answer->getText();//faqat shu conversationni oxirigacha kerak bo'lsa shunaqa saqlansa yaxshi.
            Az::$app->bot->userStorage()->save([
                'firstname' => $answer->getText()  // ma'lum vaqt(default 30 min) ichida xoxlagan joydan foydalanigh mumkin;
            ]);
            $this->say('Tanishganimdan xursandman ' . $this->firstname);
            $this->askPhoto();
        });
    }

    public function askPhoto()
    {
        $this->askForImages('Rasmingizni yuboring', function ($images) {

            foreach ($images as $image) {
                $url = $image->getUrl(); // The direct url
                $title = $image->getTitle(); // The title, if available
                $payload = $image->getPayload(); // The original payload

                $filename_pos = strrpos($url, "/file");
                $filename = substr($url, $filename_pos + 1);
                // save image on server

                $save_path = Root . "/exweb/eyuf/upload/botman/photos/$filename";
                $this->file_force_contents($save_path, file_get_contents($url), LOCK_EX);

                $this->image = $save_path;
                Az::$app->bot->userStorage()->save([
                    'image' => $save_path
                ]);
                // Create attachment
                Az::$app->bot->typesAndWaits(1);

                $image = Image::url("/upload/botman/photos/$filename")->title('sizning rasm');

                $message = OutgoingMessage::create('Sizning rasmingiz')->withAttachment($image);
                Az::$app->bot->reply($message);

                $this->askVideo();
            }
        }, function () {
            $this->say("<b>Rasm</b> yubormadingiz", ['parse_mode' => 'HTML']);
            $this->askPhoto();
        });
    }

    public function askVideo()
    {
        $this->askForVideos('video yuklang', function ($videos) {
            foreach ($videos as $video) {

                $url = $video->getUrl(); // The direct url

                $filename_pos = strrpos($url, "/file_");
                $filename = substr($url, $filename_pos + 1);

                $save_path = Root . "/exweb/eyuf/upload/botman/videos/$filename";
                $this->file_force_contents($save_path, file_get_contents($url), LOCK_EX);

                $this->video = $save_path;
                Az::$app->bot->userStorage()->save([
                    'video' => $save_path
                ]);

                // Create attachment
                Az::$app->bot->typesAndWaits(1);
                $attachment = new Video("/upload/botman/videos/$filename", [
                    'custom_payload' => true,
                ]);

                $message = OutgoingMessage::create('Sizning videongiz')
                    ->withAttachment($attachment);
                Az::$app->bot->reply($message);
                $this->askPhone();
            }
        }, function () {
            $this->say("<b>Video</b> yubormadingiz", ['parse_mode' => 'HTML']);
            $this->askVideo();
        });
    }

    public function askPhone()
    {
        $keyboard = [
            [['text' => "📞 Raqamni yuborish", 'request_contact' => true]]
        ];
        $this->ask('Telefon raqamingizni yuboring', function (Answer $answer) {
            $payload = Az::$app->bot->getMessage()->getPayload();
            $new_array = json_decode($payload, true);

            $this->phone_number = $new_array['contact']['phone_number'];
            Az::$app->bot->userStorage()->save([
                'phone_number' => $this->phone_number
            ]);

            $this->say("Sizning raqamingiz " . $this->phone_number);
            $this->askLocation();
        }, [
            'reply_markup' => json_encode([
                'keyboard' => $keyboard,
                'one_time_keyboard' => true,
                'resize_keyboard' => true
            ]),
            'parse_mode' => 'html'
        ]);
    }

    public function askLocation()
    {
        $keyboard = [
            [['text' => "📍 Manzilni yuborish", 'request_location' => true]]
        ];
        $this->askForLocation('Manzilingizni yuboring', function (Location $location) {
            $lat = $location->getLatitude();
            $lng = $location->getLongitude();

            $this->latitude = $lat;
            $this->longitude = $lng;

            Az::$app->bot->userStorage()->save([
                'latitude' => $lat,
                'longitude' => $lng
            ]);

            //Locationni yuborishga o'xshagan botmanda yo'q yoki siz topolmagan function bo'lsa siz telegramni base api larini quyidagicha ishlatsa bo'ladi
            $chat_id = Az::$app->bot->getMessage()->getPayload()['chat']['id'];
            Az::$app->bot->sendRequest('sendLocation', [
                'chat_id' => $chat_id,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude
                ]);

            $keyboard = [
                [['text'=>"🔍 Dorilarni izlash"], ['text'=>"Ro'yxatdan o'tish"]],
                [['text'=>"Qanday qo'llash mumkin❓"]],
                [['text'=>"📝 Izoh qoldirish"], ['text'=>"Axborot 📖"]],
                [['text' => "Рус. 🇷🇺 / 🇺🇿 O'zb."]]
            ];
                
            $this->say("Muvaffaqiyatkli ro'yxatga yozildingiz",
                [
                    'reply_markup' => json_encode([
                        'keyboard' => $keyboard,
                        'one_time_keyboard' => true,
                        'resize_keyboard' => true
                    ]),
                    'parse_mode' => 'html'
                ]
            );
        }, function () {
            $this->say('Kechirasiz, Siz manzil yubormadingiz');
            $this->askLocation();
        }, [
            'reply_markup' => json_encode([
                'keyboard' => $keyboard,
                'one_time_keyboard' => true,
                'resize_keyboard' => true
            ]),
            'parse_mode' => 'html'
        ]);
    }

    public function run()
    {
        // This will be called immediately
        $this->askFirstname();
    }
}
