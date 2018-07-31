<?php
	session_start();
	if (isset($_SESSION["status"])){
		$status = $_SESSION["status"];
	}
		else {$status = 0;
	}
	if (isset($_SESSION["fname"])){
		$fname = $_SESSION["fname"];
	}
		else {$fname = "";
	}
	if (isset($_SESSION["lname"])){
		$lname = $_SESSION["lname"];
	}
		else {$lname = "";
	}
	if (isset($_SESSION["email"])){
		$email = $_SESSION["email"];
	}
		else {$email = "";
	}
	if (isset($_SESSION["pf"])){
		$pf = $_SESSION["pf"];
	}
		else {$pf = "";
	}
	if (isset($_SESSION["pt_name"])){
		$pt_name = $_SESSION["pt_name"];
	}
		else {$pt_name = "";
	}
	if (isset($_SESSION["pt_status"])){
		$pt_status = $_SESSION["pt_status"];
	}
		else {$pt_status = "";
	}
	if (isset($_SESSION["per_id"])){
		$per_id = $_SESSION["per_id"];
	}
		else {$per_id = "";
	}
	session_write_close();
	?>