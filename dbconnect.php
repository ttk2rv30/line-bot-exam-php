<?php 
$host = "203.146.127.100";
$user = "lomrak_lpg";
$passwd = "AG_LPG";
$dbname = "lomrak_lpg";
mysql_connect($host, $user, $passwd) or die ("not connect");
mysql_select_db($dbname) or die ("no table");
mysql_query("SET NAMES utf8")//ตั้งค่าภาษา
?>
