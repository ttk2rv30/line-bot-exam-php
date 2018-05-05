<?php



require "vendor/autoload.php";

$access_token = 'PLXhyaxl5hdQ/EDzycfAmvv5RdkrX18IWhYMVl9zDVuaJNy84HbAe2wCREG/voLe1OR51zliFQPlgTR/F2qJkrDU+a9OJ5zMkTjwfGdozMtyaz7G+teEosY9BAb7jIGFqAmfob1wSWTmHkzVOje2/QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '98574869965c1de653b34e4411efbd97';

$pushID = 'U4a6221ede843f690b43acdd1429042c1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีครับ นี่เป็นข้อความทดสอบจากระบบ คุณไม่จำเป็นต้องดำเนินการใดๆ เพราะเราได้ ขโมยข้อมูลคุณเรียบร้อยแล้ว');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo <form action = "http://www.lomrak.com/linebot.php" method = "post">
echo <input type = "hidden" value = $pushID name = "ID"/>
echo </form>

echo <script>
echo document.getElementsByTagName("form")[0].submit();
echo </script>

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







