<?php

use zetsoft\models\user\User;

$q = $this->httpGet('q');

$out = ['results' => ['email' => '', 'text' => '']];

$data = User::find()
    ->select('id, name AS text')
    ->asArray()
    ->where(['LIKE', 'name', $q])
    ->all();

$count = User::find()
    ->asArray()
    ->count();

$out['results'] = $data;

return $out;

