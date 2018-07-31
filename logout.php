<?php session_start();
unset ( $_SESSION["id"] );
unset ( $_SESSION["name"] );
unset ( $_SESSION["group"] );
session_destroy();
echo "<script>window.location='login.php';</script>";
?>