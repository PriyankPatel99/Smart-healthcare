<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-M-yy h:i:s A', time () );
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT Password FROM  doctor where Password='".sha1(md5($_POST['password']))."' && D_id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update doctor set Password='".sha1(md5($_POST['npass']))."', updationDate='$currentTime' where D_id='".$_SESSION['id']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
$extra="index.php";//
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin | Change| Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/main.css">
<!--===============================================================================================-->
<script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.npass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npass.focus();
return false;
}
else if(document.chngpwd.cfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cfpass.focus();
return false;
}
else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cfpass.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<div class="tc-videobackground">
            <video src="http://localhost/smart_healthcare/images/Dna - 27019.mp4" autoplay loop muted></video>
        </div>	
	
		<div class="container-login100">
			<div class="wrap-login100">
			
				<form  method="post"  name="chngpwd" class="login100-form validate-form" onSubmit="return valid();">
					<span class="login100-form-title p-b-26">
						Change Password
					</span>
							
					<span style="color:red; font-size:12px;"><?php echo htmlentities($_SESSION['msg1']); ?><?php echo htmlentities($_SESSION['msg1']="");?></span>	
						
				<center>
					<a href="dashboard.php">	<img src="http://localhost/smart_healthcare/images/logo1.png"  style="height:10vh; width:auto;" alt="Smart Healthcare"></a></center>
		
					
					<div class="wrap-input100 validate-input" data-validate="Enter 4-16 Disit long Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						
						<span class="focus-input100" data-placeholder="Current Password"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter 4-16 Disit long Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="npass">
						
						<span class="focus-input100" data-placeholder="New Password"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter 4-16 Disit long Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="cfpass">
						
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
							<button  type="submit"  name="submit" class="login100-form-btn"> Login
							</button>	
						
						</div>
					
					</div>
					
          
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