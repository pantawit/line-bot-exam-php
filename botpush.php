<?php



require "vendor/autoload.php";

$access_token = 's55lZIbFjuV/+Xp+4RuYzZ67M1qAuMUmxEZI9IAF8nNA+qn3jCXaTRxZC+bXKGGTyAEHRfmZu/OPX4BXs+ldoi8AQY3rBOLNHabaCiE5fCzlch01HuZbBBa1rWsbjNmBvm9SDCfCHL9fGQi4iR5AcgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fb8064c0210e37ea0fc7248d8ee24917';

$pushID = 'U0e2fa1dc3d290ddd2a5e81d406b3186b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







