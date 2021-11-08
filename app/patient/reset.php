<?php
session_start();
//error_reporting(0);
include("include/config.php");
// Code for updating Password
if(isset($_POST['submit']))
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$passmd5=md5($_POST['password']);
$passsha1=sha1($passmd5);
$query=mysqli_query($con,"update patient set password='$passsha1' where F_Name='$name' and Email='$email'");
if ($query) {
$_SESSION['msg1']="Password successfully updated try to Login";
header('location:index.php');
}
else
{
	$_SESSION['msg1']="Password not update try Again";
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient password Reset</title>
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
 if(document.passwordreset.password.value!= document.passwordreset.conpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.passwordreset.conpassword.focus();
return false;
}
return true;
}

function showIt(){
   document.getElementById("div1").style.visibility="hidden";
  }
  setTimeout("showIt()",7000);
</script>
</head>
<body>
	<div class="tc-videobackground">
            <video src="http://localhost/smart_healthcare/images/Dna - 27019.mp4" autoplay loop muted></video>
        </div>
	
		<div class="container-login100">
			<div class="wrap-login100">
			
				<form  method="post"  class="login100-form validate-form" name="passwordreset" method="post" onSubmit="return valid();">
					<span class="login100-form-title p-b-26">
						Reset Password
					</span>
							
					<div id="div1" style="color:red; font-size:12px"><?php echo htmlentities($_SESSION['msg1']); ?><?php echo htmlentities($_SESSION['name']); ?><?php echo htmlentities($_SESSION['relmsg']); ?></div>		
						
				<center>
					<a href="../../index.php">	<img src="http://localhost/smart_healthcare/images/logo1.png"  style="height:10vh; width:auto;" alt="Smart Healthcare"></a></center>
		

					
					<div class="wrap-input100 validate-input" data-validate="Enter 4-16 Disit long Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password">
						
						<span class="focus-input100" data-placeholder="New Password"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Enter 4-16 Disit long Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="conpassword" id="conpassword">
						
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
							<button  type="submit"  name="submit" class="login100-form-btn"> Change
							</button>	
						
						</div>
					
					</div>
					
           
					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="index.php">
						  Log-in
						</a>
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