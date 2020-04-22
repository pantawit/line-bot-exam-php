<?php



require "vendor/autoload.php";

$access_token = 'q881Zx3uaUZDhOpezUz0eAQX/9Ar5SD+K9J8DCwtNWEeyWQFOpy+EkTJzuXfXRTpyAEHRfmZu/OPX4BXs+ldoi8AQY3rBOLNHabaCiE5fCzooBKR5ke8/NDQ0HF1JhwndyUR02xVJoF8iaYz4eCvLgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '70c7442c8f8f98cec2698235fb5fa8b8';

$pushID = 'U0e2fa1dc3d290ddd2a5e81d406b3186b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







