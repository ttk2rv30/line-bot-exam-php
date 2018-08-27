<?php



require "vendor/autoload.php";

$server = isset($_SERVER['HTTP_HOST'])?isset($_SERVER['HTTP_HOST']):"";
$pos_date = isset($_POST['pos_date'])?$_POST['pos_date']:"";
$pos_time = isset($_POST['pos_time'])?$_POST['pos_time']:"";
$card_name = isset($_POST['card_name'])?$_POST['card_name']:"";
$quanlity = isset($_POST['quanlity'])?$_POST['quanlity']:"";
$p_price = isset($_POST['p_price'])?$_POST['p_price']:"";
$pos_total = isset($_POST['pos_total'])?$_POST['pos_total']:"";
$current = isset($_POST['current'])?$_POST['current']:"";

$access_token = 'PLXhyaxl5hdQ/EDzycfAmvv5RdkrX18IWhYMVl9zDVuaJNy84HbAe2wCREG/voLe1OR51zliFQPlgTR/F2qJkrDU+a9OJ5zMkTjwfGdozMtyaz7G+teEosY9BAb7jIGFqAmfob1wSWTmHkzVOje2/QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '98574869965c1de653b34e4411efbd97';

$pushID = 'U4a6221ede843f690b43acdd1429042c1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$sms = "สวัสดีครับ นี่เป็นระบบอัตโนมัติ *** ".$card_name." ได้เข้ามาใช้บริการไปเมื่อวันที่ ". $pos_date ." เวลา " . $pos_time. " เป็นจำนวน ".$pos_total. " บาท ยอดเครดิตปัจจุบันคือ ".$current ." บาท ขอบคุณครับ"; 

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($sms);
$response = $bot->pushMessage($pushID, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







