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
$Line_ID = isset($_POST['line_id'])?$_POST['line_id']:"";


$access_token = 'PLXhyaxl5hdQ/EDzycfAmvv5RdkrX18IWhYMVl9zDVuaJNy84HbAe2wCREG/voLe1OR51zliFQPlgTR/F2qJkrDU+a9OJ5zMkTjwfGdozMtyaz7G+teEosY9BAb7jIGFqAmfob1wSWTmHkzVOje2/QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '98574869965c1de653b34e4411efbd97';

$pushID = $Line_ID;//'U9bf72f20279f621e3642b1561a74957f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$t = rand(0,14);
switch ($t) {
case 0:
    $g_txt = "บางอย่าง…แค่คิด ก็มีความสุข   บางอย่าง…คิดแล้วสนุก ก็คิดกันไป  บางอย่าง…คิดแล้วทุกข์ จะคิดทำไม  ทุกอย่าง…ไม่ได้ขึ้นกับใคร  อยู่ที่ใจเรา…คิดไปเอง";
    break;
case 1:
    $g_txt =  "ปริมาณของ ..ความสุข.. ไม่ได้ขึ้นอยู่กับจำนวนของ ..สิ่งดี ๆ.. ที่เราได้รับ แต่อยู่ที่ ..มุมมอง.. ของเราที่มีต่อ ..สิ่งเหล่านั้น.. ต่างหาก";
    break;
case 2:
    $g_txt = "จงฝากชีวิตไว้กับ [สติและปัญญา] อย่าฝากไว้กับ [โชคชะตา ที่มองไม่เห็น]";
    break;
case 3:
    $g_txt = "อย่า (คาดหวัง) กับสิ่งที่..มีชีวิต อย่า (ยึดติด) กับสิ่งที่มีวัน..ดับสลาย อย่า (ยอมแพ้) หากยังมี..ลมหายใจ อย่า (ประมาท) มากไป..กับใจคน";
    break;
case 4:
    $g_txt = "ไม่มีความสำเร็จใด ที่จะไม่ใช้ความพยายามและเวลา";
    break;
case 5:
    $g_txt = "คืนที่ท้องฟ้า [มืดที่สุด] เราจะเห็นดาวได้ [ชัดที่สุด] และวันใดที่เรา [ทุกข์ที่สุด] เราจะได้เห็นว่า [ใครรักเราที่สุด]";
    break;
case 6:
    $g_txt = "ความสำคัญของการมี [เพื่อน] ไม่ได้อยู่ที่เรา…มีเพื่อนกี่คน แต่สำคัญที่…เราเหลือเพื่อนอยู่กี่คน ในยามที่เราต้องเจอกับ [วิกฤตของชีวิต]";
    break;
case 7:
    $g_txt = "วันนี้ ..ท้อ.. ไม่เป็นไรขอ ..ใจสู้.. ..พรุ่งนี้.. ยังมีอยู่ให้ ..แก้ไข..  มีความหลัง เป็นบทเรียนใช้สอนใจ ..อนาคต.. วันข้างหน้าเป็นอย่างไร อยู่ที่เรา..";
    break;
case 8:
    $g_txt = "ท้อแท้ได้ แต่อย่าท้อถอย  อิจฉาได้ แต่อย่าริษยา  พักได้ แต่อย่าหยุด  ทำให้ถึงที่สุด แล้วหยุดที่คำว่า ...พอ...";
    break;
case 9:
    $g_txt = "บางครั้ง…เรามองหา  ..สิ่งที่ขาด.. จนพลาด ..สิ่งที่มี..  และบางครั้งก็เฝ้าหา ..สิ่งที่ดี.. จนทำให้  ..สิ่งที่มี.. นั้นหายไป..";
    break;
case 10:
    $g_txt = "มี 3 ทางเลือกให้คุณในการทำอะไรสักอย่าง คือ ทางที่ถูก ทางที่ผิด และทางที่คุณเลือกทำ";
    break;
case 11:
    $g_txt = "วิธี ..เปลี่ยนคนอื่น.. ที่ดีที่สุด คือ ..เปลี่ยนมุมมอง.. ของ ..ตัวเรา.. เอง";
    break;
case 12:
    $g_txt = "การเสียใจเป็นเรื่องปกติ แต่อย่าเสียใจเรื่องเดิมซ้ำแล้วซ้ำเล่า เพราะจะกลายเป็นเสียเวลา";
    break;
case 13:
    $g_txt = "เมื่อคิดจะเดินไปข้างหน้า โปรดอย่าหันมองกลับหลังอย่างเสียดาย";
    break;

case 14:
    $g_txt = "มองปัญหา ให้เหมือนกับ ..เม็ดทราย.. ถึงจะเยอะมากมาย แต่ทรายก็เล็กแค่ ..นิดเดียว..";
    break;

}

$sms = "[Auto] สวัสดีค่ะ ".$card_name." ได้เข้ามาใช้บริการไปเมื่อวันที่ ". $pos_date ." เวลา " . $pos_time. " เป็นจำนวน ".$pos_total. " บาท ยอดเครดิตปัจจุบันคือ ".$current ." บาท "; 
$sms = $sms . "*** กำลังใจจาก LPG ค่ะ *** " . $g_txt;
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($sms);
$response = $bot->pushMessage($pushID, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







