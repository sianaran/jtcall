<?php session_start();
//$_SERVER['HTTP_HOST']
$server_or = "http://jtcall.ddns.net:3000";
if (!isset($_SESSION["id"])){$_SESSION["id"]="";}else{$id = $_SESSION["id"];}//กำหนดค่าเริ่มต้น  
if (!isset($_SESSION["name"])){$_SESSION["name"]="";}else{$name = $_SESSION["name"];}//กำหนดค่าเริ่มต้น
if (!isset($_SESSION["group"])){$_SESSION["group"]="";}else{$group = $_SESSION["group"];}//กำหนดค่าเริ่มต้น
if($_SESSION["id"]=="") {  
    echo "<META HTTP-EQUIV=Refresh content=0;URL=logout.php>";  
 }
session_write_close();
?> 