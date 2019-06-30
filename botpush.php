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
    $g_txt = "ถ้าคุณทำได้ จงช่วยผู้อื่น ถ้าคุณทำไม่ได้ อย่างน้อยจงอย่าทำร้ายผู้อื่น //ดาไล ลามะ";
    break;
case 1:
    $g_txt =  "บ่อยครั้งเรามักเผลอเอาสายตาของคนอื่น มาเป็นเครื่องวัดคุณค่าของเรา//พระไพศาล วิสาโล";
    break;
case 2:
    $g_txt = "เจอคนเก่ง จงเรียนรู้จากเขา เจอคนงี่เง่า ให้เอามาสอนตัวเอง//นิรนาม";
    break;
case 3:
    $g_txt = "จงมีความสุขทุกครั้งที่เจอคนไม่ชอบขี้หน้าคุณ ความสุขของคุณจะฆ่าคนพวกนั้นให้ตายเอง//นิรนาม";
    break;
case 4:
    $g_txt = "ไม่มีอาชีพไหนที่ต่ำต้อย มีเพียงทัศนคติเท่านั้นที่ต้อยต่ำ//วิลเลียม เจ. เบรนแนน จูเนียร์";
    break;
case 5:
    $g_txt = "การหาความมั่นคงในชีวิต ก็เหมือนคาดหวังว่าดวงอาทิตย์จะอยู่บนท้องฟ้าตลอดเวลา//วินทร์ เลียววาริณ";
    break;
case 6:
    $g_txt = "ความซื่อสัตย์เป็นของขวัญราคาแพง อย่าคาดหวังว่าจะได้มันจากคนราคาถูก//วอร์เรน บัฟเฟตต์";
    break;
case 7:
    $g_txt = "คุณจะไม่ได้ในสิ่งที่คุณต้องการ หากคุณไม่ลงมือทำมัน...//หนังสือความฝันไม่ทีวันหยุด";
    break;
case 8:
    $g_txt = "ยิ่งบทเรียนยากขึ้นเท่าไหร่ ถ้าเราผ่านมันไปได้เราก็จะยิ่งเก่งขึ้นเท่านั้น";
    break;
case 9:
    $g_txt = "ไม่มียาตัวไหน รักษาแผลได้ดีเท่า ความเข้มแข็งของตัวเราเอง";
    break;
case 10:
    $g_txt = "เมื่ออายุเพิ่มขึ้น สิ่งที่ต้องเพิ่มขึ้นคือ เหตุผล สิ่งที่ต้องลดลงคือ อารมณ์";
    break;
case 11:
    $g_txt = "ทุกโอกาสในชีวิตให้คุ้มค่า เพราะบางสิ่งเกิดขึ้นเพียงครั้งเดียว และเวลาไม่สามารถย้อนคืนมาได้";
    break;
case 12:
    $g_txt = "ทุกคนได้ยินในสิ่งที่คุณพูด แต่เพื่อนที่ดีที่สุดจะได้ยินแม้ในสิ่งที่คุณไม่ได้พูด";
    break;
case 13:
    $g_txt = "อย่าเดินวนเหมือนนาฬิกา ให้เดินไปข้างหน้าเหมือนปฎิทิน";
    break;

case 14:
    $g_txt = "คนที่ขอโทษก่อน คือคนที่กล้าหาญที่สุด คนที่ให้อภัยก่อน คือคนที่เข้มแข็งที่สุด คนที่ลืมได้ก่อน คือคนที่มีความสุขที่สุด";
    break;

}

$sms = "สวัสดีค่ะ ".$card_name." ได้เข้ามาใช้บริการไปเมื่อวันที่ ". $pos_date ." เวลา " . $pos_time. " เป็นจำนวน ".$pos_total. " บาท ยอดเครดิตปัจจุบันคือ ".$current ." บาท "; 
$sms = $sms . "*** กำลังใจจาก LPG ค่ะ *** " . $g_txt ." ขอบคุณที่ใช้บริการค่ะ :)";
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($sms);
$response = $bot->pushMessage($pushID, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







