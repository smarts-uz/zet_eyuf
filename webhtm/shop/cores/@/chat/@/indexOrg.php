<?php

use http\QueryString;
use rmrevin\yii\fontawesome\FA;
use yii\authclient\signature\HmacSha1;
use yii\helpers\Html;
use yii\helpers\Url;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\chates\ZChatUsersLIst;
use zetsoft\widgets\chates\ZFriendAddWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\chates\ZUserMessageWidget;
use zetsoft\widgets\actions\ZFilterWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;

/* @var ZView $this */


Az::$app->forms->zPjax->begin();


$userId = $this->httpGet('userId');
$recId = $this->userIdentity()->id;

if (isset($_POST['message'])) {
    Az::$app->App->eyuf->chat->Insert($_POST['message'], $userId);

}
if (!empty($userId))
    Az::$app->App->eyuf->chat->updateRead($userId, $recId);

?>


<div id="streamTitle"></div>
<div class="container-fluid" style="width: 100% !important;">

    <div id="pjaxFor" class="card blue-gradient rare-wind-gradient chat-room">
        <div class="card-body">

            <!-- Grid row -->
            <div class="row px-lg-2 px-4">
                <!-- Grid column -->
                <div class="col-md-6 col-xl-4 px-0 ">

                    <?php


                    echo ZFilterWidget::widget([
                        'config' => [
                            'itemselector' => 'li',
                        ]
                    ]);

                    echo ZChatUsersLIst::widget([
                        'config' => [
                            'picture' => '',
                            'height' => '90%',
                            'railVisible' => false,
                        ]
                    ]);

                    ?>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">
                    <div style="width: 100%;z-index: 20 ;background-color:rgba(255,255,255,.9);border-radius: 5px;margin-bottom: 10px;"
                         class="messageBlog d-flex input-box">

                        <?php
                        if (!empty($userId)) {
                            $url = Az::$app->App->eyuf->chat->getUserPhoto($userId);
                            $currName = Az::$app->App->eyuf->chat->getUserName();

                            $userInfo =
                                "<div style='margin-top: -15px;'><img src='$url' class='avatar rounded-circle mr-2 ml-lg-3 ml-0   z-depth-1'></div>
                              <h3 >$currName</h3>";

                            echo $userInfo;
                        }
                        ?>
                        <?php
                        if (!empty($userId)):?>
                            <span onclick="blocked()" style="right: 15px;position: absolute;top:15px;cursor:pointer ">
                                <img src="/zetimg/<?=App?>/user_lock-512.png" width="30" height="30">
                            </span>
                       <?php endif; ?>
                    </div>
                    <div>

                        <div class="chat-message">
                            <ul class="list-unstyled chat-1 scrollbar-light-blue" id="ul_chat">

                                <?php

                                if (isset($userId)) {
                                    if ($userId != null && isset($recId)) {

                                        $messages = Az::$app->App->eyuf->chat->getMessage();

                                        $userName = Az::$app->App->eyuf->chat->getName();

                                        foreach ($messages as $key => $value) {
                                            if ($value->sender == $recId) {
                                                $cmdk = true;
                                                $Name = $this->userIdentity()->name;
                                            } else {
                                                $Name = $userName;
                                                $cmdk = false;
                                            }
                                            echo ZUserMessageWidget::widget([
                                                'config' => [
                                                    'name' => $Name,
                                                    'picture' => "$url",
                                                    'time' => $value->time,
                                                    'text' => $value->text,
                                                    'mine' => $cmdk,
                                                    'userId' => $userId
                                                ]
                                            ]);
                                        }
                                    }
                                }
                                ?>

                            </ul>
                        </div>

                        <form method="POST" action="" class="d-flex input-box dontSee isGuest">
                            <div class="messageBlog">
                                <div class="input-group">

                                    <input name="message" style="height: 50px" id="sendInput" type="textarea"
                                           class="form-control"
                                           placeholder="Отправить сообщение" autocomplete="off" name="search">

                                    <div class="input-group-btn">

                                    </div>
                                </div>
                            </div>

                            <div class="p-0 m-0">
                                <button id="send" class="btn btn-default m-0" style="height: 50px" type="submit">
                                    send
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</div>
</div>

<script>
function blocked()
{
    $.ajax({
        url: '/core/tester/chat/blocked.aspx',
        type: 'GET',
        data: {'userId': <?=$userId ?>},
        success: function (res) {
             
        },
    });
    
}
    $(function () {
        var id = <?=$userId?>;
        $("#ul_chat").animate({scrollTop: $('#ul_chat').prop("scrollHeight")});
        $("#b" + id).css('cssText', 'background: lightgrey !important');
    });

</script>


<script>
    setTimeout(online, 2000);

    function online() {
        $.ajax({
            url: '/core/tester/chat/useronline.aspx',
            type: 'GET',
            data: {'id': <?=$recId?>},
            success: function (res) {
                setTimeout(online, 5000);
            },
        });
    }

</script>

<style>
    .input-box {
        padding-top: 25px;
    }

    .card.chat-room .members-panel-1,
    .card.chat-room .chat-1 {
        position: relative;
        overflow-y: scroll;
    }

    .card.chat-room .members-panel-1 {
        height: 80vh;

    }

    .card.chat-room .chat-1 {
        height: 64vh;
    }

    .card.chat-room .friend-list li {
        border-bottom: 1px solid #e0e0e0;
    }

    .card.chat-room .friend-list li:last-of-type {
        border-bottom: none;
    }

    .scrollbar-light-blue::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .scrollbar-light-blue::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .scrollbar-light-blue::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #82B1FF;
    }

    .rare-wind-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
        background-image: -webkit-linear-gradient(bottom, #a8edea 0%, #fed6e3 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
    }

    #w2 i:hover {
        opacity: 0.5;
    }

    #w0 i:hover {
        opacity: 0.5;
    }

    .messageBlog {
        width: 85%;
        height: 60px !important;
        min-height: 15px;
        overflow-y: hidden;
    }
</style>

<?php Az::$app->forms->zPjax->end();    ?>
