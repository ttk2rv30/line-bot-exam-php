<?php 
$host ="203.146.127.100";//ชื่อโฮส
$user ="lomrak_lpg";//ชื่อผู้ใช้
$pass ="AG_LPG";//รหัสผ่าน
$db ="lomrak_lpg";//ชื่อฐานข้อมูลที่เราสร้างไว้
mysql_connect ($host,$user,$pass) or die ("ติดต่อเครื่อง Database Server ไม่สำเร็จ");//ติดต่อ Database Server
mysql_select_db($db) or die ("ติดต่อฐานข้อมูลไม่สำเร็จ");//ติอต่อฐานข้อมูล
mysql_query("SET NAMES utf8")//ตั้งค่าภาษา
?>
