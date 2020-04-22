<?php



require "vendor/autoload.php";

$access_token = 'NGAf6eK6YULSoa1ZvdkhxrdS5uqVInFZceWsoX/f22k8Bcs8RCaVP2LTubiiiEf4y09Qlikusj/HD69GvK9MVu3xC58+v0M8FKz8F7Vw28usKK2Mr8tGPDpQmf53Ea0JqTlXV0RKblrmGuSkD9ZYTAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5b7939a103bfd4459843924c6d58f694';

$pushID = 'U0e2fa1dc3d290ddd2a5e81d406b3186b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







