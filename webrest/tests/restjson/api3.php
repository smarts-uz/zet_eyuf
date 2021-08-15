<?php

use zetsoft\models\user\User;

$q = $this->httpGet('q');

$out = ['results' => ['email' => '', 'text' => '']];

$data = User::find()
    ->select('id,email ,photo ,role, phone, name AS text')
    ->asArray()
    ->where(['LIKE', 'name', $q])
    ->all();

$count = User::find()
    ->asArray()
    ->where(['LIKE', 'name', $q])
    ->count();

$out['total_count'] = $count;
$out['incomplete_results'] = true;
$out['items'] = array_values($data);
return $out;




