<?php

use zetsoft\system\Az;

$amount = $this->httpPost('amount');

$all_currency = Az::$app->payer->currency2->listCurrencies();
$currency = $all_currency['USD'];
$amount_sum = round($amount * $currency,2);



return [
    'currency' => $currency,
    'amount' => $amount_sum
];
