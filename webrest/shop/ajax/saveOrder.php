<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/**
 *
 * @author JaloliddinovSalohiddin
 * @author OtabekNosirov
 * @author AkromovAzizjon
 *
 */

/** @var ZView $this */
$action = new WebItem();

$action->debug = false;
$action->csrf = false;
$action->type = WebItem::type['ajax'];


$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$posts = [];

$posts['contact_name'] = $this->httpPost('contact_name');
$posts['place_adress_id'] = $this->httpPost('place_adress_id');
$posts['contact_phone'] = $this->httpPost('contact_phone');
$posts['payment_type'] = $this->httpPost('payment_type');
$posts['comment_user'] = $this->httpPost('comment_user');
$posts['date_deliver'] = $this->httpPost('date_deliver');

return Az::$app->market->order->saveOrders($posts);
