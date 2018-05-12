<?php



require "vendor/autoload.php";

$access_token = 'PLXhyaxl5hdQ/EDzycfAmvv5RdkrX18IWhYMVl9zDVuaJNy84HbAe2wCREG/voLe1OR51zliFQPlgTR/F2qJkrDU+a9OJ5zMkTjwfGdozMtyaz7G+teEosY9BAb7jIGFqAmfob1wSWTmHkzVOje2/QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '98574869965c1de653b34e4411efbd97';

$pushID = 'Ue6775f7378c4e777b1cce91e6bbc9ef8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('คำเตือนดู youtube มากเกินไปอาจทำให้ความสามารถในการทำงานลดลง');
$response = $bot->pushMessage($pushID, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







