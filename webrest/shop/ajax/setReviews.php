<?php

/*
 * Author: Axrorbek Nisonboyev
 * */
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$posts = [];
$posts['rating'] = $this->httpPost('rating');
$posts['text'] = $this->httpPost('text');
$posts['anonym'] = $this->httpPost('anonym');
$posts['advantages'] = $this->httpPost('advantages');
$posts['disadvantages'] = $this->httpPost('disadvantages');
$posts['share'] = $this->httpPost('share');
$posts['experience'] = $this->httpPost('experience');
$posts['id'] = $this->httpPost('id');
$posts['reviewType'] = $this->httpPost('reviewType');

return Az::$app->market->review->setReviews($posts);