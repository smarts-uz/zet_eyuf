<?php
/*
 * Author: Axrorbek Nisonboyev
 *
 */
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */

$product_id = $this->httpGet('id');
$return = [];
$answer =  Az::$app->market->question->getAnswersByQuestionId($product_id);
$question =  Az::$app->market->question->getQuestionsByProductId($product_id);

$return['question'] = $question;

return $return;