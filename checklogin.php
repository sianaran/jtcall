<?php session_start();
if (!isset($_SESSION["id"])){$_SESSION["id"]="";}//กำหนดค่าเริ่มต้น  
if($_SESSION["id"]=="") {  
    echo "<META HTTP-EQUIV=Refresh content=0;URL=login.php>";  
 }  else{echo "<META HTTP-EQUIV=Refresh content=0;URL=home.php>";}
session_write_close();
?>