<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$name=$_POST['fname'];
$email=$_POST['email'];
$query=mysqli_query($con,"select P_id from  patient where F_Name='$name' and Email='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['name']=$name;
$_SESSION['email']=$email;
header('location:reset.php');
$_SESSION['msg1']="Hello..";
$_SESSION['relmsg']="...Create a New Password..";
} else {
$_SESSION['msg1']="Invalid details. Please try with valid details";
header('location:forgot.php');


}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient password Recovery</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/main.css">
<!--===============================================================================================-->
<script type="text/javascript">
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
			
				<form  method="post"  class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Forgot Password
					</span>
							
				<div id="div1" style="color:red; font-size:12px"><?php echo htmlentities($_SESSION['msg1']); ?></div>	
						
				<center>
					<a href="../../index.php">	<img src="http://localhost/smart_healthcare/images/logo1.png"  style="height:10vh; width:auto;" alt="Smart Healthcare"></a></center>
		

					<div class="wrap-input100 validate-input" data-validate = "Enter valid First Name">
						<input class="input100" type="text" name="fname" id="name">
						<span class="focus-input100" data-placeholder="Registred First Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						
						<input class="input100" type="text" name="email">
						
						<span class="focus-input100" data-placeholder="Registred Email"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
							<button  type="submit"  name="submit" class="login100-form-btn"> reset
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