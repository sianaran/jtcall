<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script language="javascript">
function check()
			  {
				  if(document.frmMain.emp_user.value=="")
				  {
					  alert('กรุณากรอกยูสเซอร์!');
					  document.frmMain.emp_user.focus();
					  return false;
				  }
				  if(document.frmMain.emp_pass.value=="")
				  {
					  alert('กรุณากรอกรหัสผ่าน!');
					  document.frmMain.emp_pass.focus();
					  return false;
				  }				
				  return true;
			  }
		</script>
    <meta charset="utf-8" />
    <title>Login :: Cs Admin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <link rel="shortcut icon" href="img/Login.png" />
	<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	
	<link href="./css/font-awesome.min.css" rel="stylesheet" />
    
    <link href="./css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet" />    
    
    <link href="./css/base-admin-2.css" rel="stylesheet" />
    <link href="./css/base-admin-2-responsive.css" rel="stylesheet" />
	
    <link href="./css/pages/signin.css" rel="stylesheet" type="text/css" />

    <link href="./css/custom.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		
		<div class="container">
				<?php
      include('inc/connect.php');
      if (!isset($_POST["Action"])){$_POST["Action"]="";}//กำหนดค่าเริ่มต้น
      if($_POST["Action"] == "login")
                              {    
                              $rslogin = mysql_query("select * from employees where emp_user = '".$_POST["emp_user"]."' and emp_pass = '".$_POST["emp_pass"]."' and emp_status = '1'");  
                              $rowlogin = mysql_fetch_array($rslogin);  
                              $num_rows = mysql_num_rows($rslogin);   //เช็คว่าค่า user และ password ที่กรอกเข้ามามีอยู่หรือไม่ ถ้าเจอก็ login ได้ 
                              if(empty($num_rows)) {  // ถ้าไม่เจอ record เลย
                                  echo "<script>alert('ยูสเซอร์-รหัสผ่านไม่ถูกต้อง หรือ ยูสเซอร์ยังไม่เปิดใช้งาน');window.location='login.php';</script>";  
                                  exit;
                              } else {  
                                  	$_SESSION["id"] = $rowlogin['emp_id'];
                                  	$_SESSION["name"] = $rowlogin['emp_name']; 
                                  	$_SESSION["group"] = $rowlogin['emp_group'];
									session_write_close();
                                  echo "<script>window.location='home.php';</script>";
                                  exit;  
                              }  
                          }
			?>
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>
			
			<a class="brand" href="./index.php">
				Cs Admin <sup>2.0</sup>				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="./signup.php" class="">
							สร้างยูสเซอร์
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container stacked">
	
	<div class="content clearfix">
		
		<form name="frmMain" action="login.php" method="post" />
		
			<h1>Sign In</h1>		
			
			<div class="login-fields">
				
				<p>ใช้ยูสเซอร์ที่คุณลงทะเบียนไว้ เข้าสู่ระบบ:</p>
				
				<div class="field">
					<label for="username">ยูสเซอร์:</label>
					<input type="text" id="emp_user" name="emp_user" value="" placeholder="ยูสเซอร์" class="login username-field" /><input type="hidden" name="Action" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">รหัสผ่าน:</label>
					<input type="password" id="emp_pass" name="emp_pass" value="" placeholder="รหัสผ่าน" class="login password-field" />
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
									
				<button OnClick="JavaScript:if(check()){frmMain.Action.value='login';frmMain.submit();}" class="button btn btn-warning btn-large">Sign In</button>
				
			</div> <!-- .actions -->

		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<!-- Text Under Box -->
<div class="login-extra">
	คุณยังไม่มียูสเซอร์ใช่หรือไม่? <a href="./signup.php">Register</a><br />
</div> <!-- /login-extra -->

<?php  require('footer.php');?>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/libs/jquery-1.8.3.min.js"></script>
<script src="./js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="./js/libs/bootstrap.min.js"></script>
<script src="./js/Application.js"></script>
</body>
</html>
