<?php


$access_token = 'NGAf6eK6YULSoa1ZvdkhxrdS5uqVInFZceWsoX/f22k8Bcs8RCaVP2LTubiiiEf4y09Qlikusj/HD69GvK9MVu3xC58+v0M8FKz8F7Vw28usKK2Mr8tGPDpQmf53Ea0JqTlXV0RKblrmGuSkD9ZYTAdB04t89/1O/w1cDnyilFU=';

$userId = 'U0e2fa1dc3d290ddd2a5e81d406b3186b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

