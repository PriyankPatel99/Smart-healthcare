<?php
session_start();
error_reporting(0);
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['F_Name'];
$lnmae=$_POST['L_Name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$blood_group=$_POST['blood_group'];
$disability=$_POST['Disability'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$passmd5=md5($_POST['password']);
$passsha1=sha1($passmd5);
$query=mysqli_query($con,"insert into patient(F_Name,L_Name,Gender,Dob,Blood_group,Disability,Address,City,Pincode,Email,Phone,Password) values('$fname','$lnmae','$gender','$dob','$blood_group','$disability','$address','$city','$pincode','$email','$phone','$passsha1')");
if($query)
{
	$_SESSION['msg1']="Successfully Registered. You can login now";

header('location:index.php');

}
else
{
	$_SESSION['msg1']="Unsuccessfully Registered. ";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/css/reg.css">
	<link href="bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">

	
	<script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>
<!--===============================================================================================-->
<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
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
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="registration" id="registration" accept-charset="utf-8"  method="post" onSubmit="return valid();">
					<span class="login100-form-title p-b-26">
						Patient Registration<br>
						<a href="../../index.php">	<img src="http://localhost/smart_healthcare/images/logo1.png"  style="height:50px; width:auto;" alt="Smart Healthcare"></a>
					</span>
<div id="div1" style="color:red; font-size:12px"><?php echo htmlentities($_SESSION['msg1']); ?></div>	
									 <div class="wrap-input1 validate-input" data-validate = "minimum 3 Disit Alphabetic  Name">
						<input class="input100" type="text" name="F_Name" id="name" tabindex=1/>
						<span class="focus-input100" data-placeholder="First Name"></span>
						</div>
						<div class="wrap-input2 validate-input" data-validate = "minimum 3 Disit Alphabetic Last_Name">
						<input class="input100" type="text" name="L_Name" id="name" tabindex=2/>
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					                       <div class="wrap-input8 validate-input" data-validate = "minimum 3 Disit Alphabetic City Name">
						<input class="input100" type="text" name="city" id="name" tabindex=8 />
						<span class="focus-input100" data-placeholder="City"></span>
						</div>
						  <div class="wrap-input9 validate-input" data-validate = "Enter valid pincord">
						<input class="input100" type="text" name="pincode"  tabindex=9 />
						<span class="focus-input100" data-placeholder="Pincode"></span>
					</div>
						

									 <div class="wrap-input1 validate-input" data-validate = "select Gender" >
						
						 <select name="gender" class="input100" tabindex=3 />
                                    	<option value=" "></option>
                                    	<option value="Male">Male</option>

                                        <option value="Female">Female</option>

                                       

                                    </select>
						<span class="focus-input100" data-placeholder="Gender"></span>
						</div>
						<div class="wrap-input2 validate-input" data-validate = "Must be select Dob">
						 <input  type="text" class="input100 datepicker" name="dob" tabindex=4/>
						<span class="focus-input100" data-placeholder="Date of Birth"></span>
					</div>
					
 
					        
						 <div class="wrap-input10 validate-input" data-validate = "Enter valid Email">
						<input class="input100" type="text" name="email" id="email" onBlur="userAvailability()" tabindex=10 />
						<span class="focus-input100" data-placeholder="Email"></span>
						<span id="user-availability-status1" style="font-size:12px;"></span>
					</div>
					
					
						 <div class="wrap-input1 validate-input" data-validate = "select Blood_group">
						
						 <select name="blood_group" class="input100" tabindex=5/>
                                    	<option value=" "></option>
                                    	<option value="A+">A+</option>

                                        <option value="A-">A-</option>

                                        <option value="B+">B+</option>

                                        <option value="B-">B-</option>

                                        <option value="AB+">AB+</option>

                                        <option value="AB-">AB-</option>

                                        <option value="O+">O+</option>

                                        <option value="O-">O-</option>

                                    </select>
						<span class="focus-input100" data-placeholder="Blood Group"></span>
						</div>
						 <div class="wrap-input2">
						<input class="input100" type="text" name="Disability" id="name" tabindex=6/>
						<span class="focus-input100" data-placeholder="Disability"></span>
					</div>
					                 <div class="wrap-input10 validate-input" data-validate = "Enter valid Phone No">
						<input class="input100" type="text" name="phone" tabindex=11/>
						<span class="focus-input100" data-placeholder="Phone"></span>
					</div>
									 
                     

					     <div class="wrap-input100 validate-input" data-validate = "10 character Long Address">
                         <input class="input100" type="text" name="address"tabindex=7/>
                         <span class="focus-input100" data-placeholder="Address"></span>
                    </div>
					<div class="wrap-input8 validate-input" data-validate = "Enter 4-16 Disit long Password">
  						<span class="btn-show-pass">
					    <i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" tabindex=12 />
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					  <div class="wrap-input9 validate-input" data-validate = "Enter 4-16 Disit long Password">
  						<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password_again" id="password_again" tabindex=13/>
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button  type="submit" class="login100-form-btn"id="submit" name="submit" tabindex=14>
								submit
							</button>
						</div>
					</div>

					
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="index.php">
							Log-in
						</a>
						
				</form>
			</div>
		</div>
	</div>
	

	
	
	

	<script src="bootstrap-datepicker.min.js"></script>

	<script src="js/main.js"></script>
<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "patient_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});

}
$('.datepicker').datepicker({
	
    format: 'yyyy-mm-dd',
    endDate: '-28d'
});
</script>

    
</body>
</html>