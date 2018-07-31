<?php
	//แปลงตัวเลขอารบิคเป็นไทย
	function arabic_to_thai($str_return){
		$numarabic = array("1","2","3","4","5","6","7","8","9","0");
		$numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
		$str_return = str_replace($numarabic,$numthai,$str_return);
		return $str_return;
	}
	function acc_num($str_return){//แปลงรูปแบบเป็นหมายเลขบัญชี
		$minus_sign ="-";
		$part1 = substr ( $str_return , 0 , -7 ) ;
		$part2 = substr ( $str_return , 3 , -4 ) ;//เริ่มตัวที่ 3 นับย้อนขึ้นมาจายท้าย 3  
		$part3 = substr ( $str_return , 6) ;
		$str_return = $part1. $minus_sign . $part2 . $minus_sign . $part3 ;
		return $str_return;
	}
	
	//แปลงตัวเลขไทยเป็นอารบิค
	function thai_to_arabic($str_return){
		$numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
		$numarabic = array("1","2","3","4","5","6","7","8","9","0");
		$str_return = str_replace($numthai,$numarabic,$str_return);
		return $str_return;
	}
	
	//แสดงวัน เดือน ปี เป็นไทย >> 10-09-2555
	function showdate($date){
		//$thai_m=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$exp_date=explode('-', $date);
		$d=$exp_date[2];
		$m=$exp_date[1];
		//$m=$thai_m[$m-1];
		$y=$exp_date[0];
		$y=$y+543;
		// echo $d."-".$m."-".$y;
		
		$showdate=$d."-".$m."-".$y;
		return $showdate;
	}
	
	//แสดงวัน เดือน ปี เป็นไทย >> 10-ก.ย.-2555
	function showthaidate($date){
		$thai_m=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$exp_date=explode('-', $date);
		$d=$exp_date[2];
		$m=$exp_date[1];
		$m=$thai_m[$m-1];
		$y=$exp_date[0];
		$y=$y+543;
		// echo $d."-".$m."-".$y;
		
		$showthaidate=$d."-".$m."-".$y;
		return $showthaidate;
	}
	
	//แสดงวัน เดือน ปี เป็นไทย และเวลา >> 10-09-2555 10:09:09
	function showdatetime($datetime){
		//$thai_m=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$exp_date=explode(' ', $datetime);
		$date=$exp_date[0];
		$time=$exp_date[1];
		// echo $date."<br />".$time;
		
		$exp_date=explode('-', $date);
		$d=$exp_date[2];
		$m=$exp_date[1];
		//$m=$thai_m[$m-1];
		$y=$exp_date[0];
		$y=$y+543;
		// echo $d."-".$m."-".$y;
		
		$showdatetime=$d."-".$m."-".$y." เวลา ".$time;
		return $showdatetime;
	}
	
	//แสดงวัน เดือน ปี เป็นไทย และเวลา >> 10-ก.ย.-2555 10:09:09
	function showthaidatetime($datetime){
		$thai_m=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$exp_date=explode(' ', $datetime);
		$date=$exp_date[0];
		$time=$exp_date[1];
		// echo $date."<br />".$time;
		
		$exp_date=explode('-', $date);
		$d=$exp_date[2];
		$m=$exp_date[1];
		$m=$thai_m[$m-1];
		$y=$exp_date[0];
		$y=$y+543;
		// echo $d."-".$m."-".$y;
		
		$showthaidatetime=$d."-".$m."-".$y." เวลา ".$time;
		return $showthaidatetime;
	}
	//แสดงวัน เดือน ปี เป็นไทย และเวลา >> 10-ก.ย.-2555 10:09:09
	function showtime($datetime){
		$exp_date=explode(' ', $datetime);
		$date=$exp_date[0];
		$time=$exp_date[1];
		$showtime=$time;
		return $showtime;
	}
		//แสดงวัน เดือน ปี เป็นไทย >> 10-ก.ย.-2555
	function showthaidateF($date){
		$thai_m=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$exp_date=explode('-', $date);
		$d=$exp_date[2];
		$m=$exp_date[1];
		$m=$thai_m[$m-1];
		$y=$exp_date[0];
		$y=$y+543;
		// echo $d."-".$m."-".$y;
		
		$showthaidateF=$d." ".$m." พ.ศ. ".$y;
		return $showthaidateF;
	}
	//แสดงวัน เดือน ปี เป็นไทย และเวลา >> 10-ก.ย.-2555 10:09:09
	function showthaidatetimeF($datetime){
		$thai_m=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$exp_date=explode(' ', $datetime);
		$date=$exp_date[0];
		$time=$exp_date[1];
		// echo $date."<br />".$time;
		
		$exp_date=explode('-', $date);
		$d=$exp_date[2];
		$m=$exp_date[1];
		$m=$thai_m[$m-1];
		$y=$exp_date[0];
		$y=$y+543;
		// echo $d."-".$m."-".$y;
		
		$showthaidatetimeF=$d." ".$m." พ.ศ. ".$y." เวลา ".$time;
		return $showthaidatetimeF;
	}
	
	//แสดงวัน เดือน ปีไทย เป็น ปี เดือน วัน ใน SQL 10-09-2555 >> 2012-09-10
	function ConvertDateTimeToMysqlFormat($dateStr){
		$exp_date=explode(' ', $dateStr);
		$date=$exp_date[0];
		$time=$exp_date[1];
		// echo $date."<br />".$time;
		
		$exp_date = explode('-', $dateStr);
		$day=$exp_date[0];
		$month=$exp_date[1];
		$year=$exp_date[2];
		$year=$year-543;
		
		$ConvertDateTimeToMysqlFormat=$year."-".$month."-".$day." ".$time;
		return $ConvertDateTimeToMysqlFormat;
	}
	//แสดงวัน เดือน ปีไทย เป็น ปี เดือน วัน ใน SQL 10-09-2555 >> 2012-09-10
	function ConvertDateToMysqlFormat($dateStr){
		$exp_date=explode(' ', $dateStr);
		$date=$exp_date[0];
		// echo $date."<br />".$time;
		
		$exp_date = explode('-', $dateStr);
		$day=$exp_date[0];
		$month=$exp_date[1];
		$year=$exp_date[2];
		$year=$year-543;
		
		$ConvertDateToMysqlFormat=$year."-".$month."-".$day;
		return $ConvertDateToMysqlFormat;
	}
?>