<?php
	$hostname = "mysql";//ชื่อ server ติดต่อฐานข้อมูล
	$username = "ssswin88";//ชื่อ รหัสผู้ใช้ ติดต่อฐานข้อมูล
	$password = "5s$vv1nn";//ชื่อ รหัสผ่าน ติดต่อฐานข้อมูล
	$database = "sampledb";//ชื่อ ฐานข้อมูล 
	$conn = mysql_connect($hostname,$username,$password) or die ("<br>".'ไม่สามารถเชื่อมต่อ Server ได้! เนื่องจาก : '.mysql_error());//เชื่อมต่อกับ server
	$sldb = mysql_select_db($database,$conn) or die("<br>".'ไม่สามารถใช้งาน Database ได้! เนื่องจาก: '.mysql_error());//เลือกฐานข้อมูล
	mysql_query("SET NAMES 'utf8'",$conn);//ตั้งค่าเพื่อให้เรียกข้อมูลขึ้นมาเป็นภาษาไทย
	include('functions.php');
	date_default_timezone_set('Asia/Bangkok');
?>