<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM doctor WHERE Email='".$_POST['email']."' and Password='".sha1(md5($_POST['password']))."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['id']=$num['D_id'];
$_SESSION['login']=$_POST['email'];
$_SESSION['msg1']="";
$cooknam='smart';
$cook=$_POST['email'];
setcookie($cooknam,$cook, time()+(86400 *30),"/");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['msg1']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="tc-videobackground">
            <video src="http://localhost/smart_healthcare/images/Dna - 27019.mp4" autoplay loop muted></video>
        </div>	
	
		<div class="container-login100">
			<div class="wrap-login100">
			
				<form  method="post"  class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Doctor Login
					</span>
							
					<span style="color:red; font-size:12px;"><?php echo htmlentities($_SESSION['msg1']); ?><?php echo htmlentities($_SESSION['msg1']="");?></span>	
						
				<center>
					<a href="../../index.php">	<img src="http://localhost/smart_healthcare/images/logo1.png"  style="height:10vh; width:auto;" alt="Smart Healthcare"></a></center>
		

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Enter 4-16 Disit long Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
							<button  type="submit"  name="submit" class="login100-form-btn"> Login
							</button>	
						
						</div>
					
					</div>
					
           <a href="forgot.php" style="margin=right:0px; font-size:13px;
 font-family:Tahoma,Geneva,sans-serif;">Forgot
password</a>
					<div class="text-center p-t-115">
					<!--	<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>-->
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>

	

	<script src="js/main.js"></script>

</body>
</html>