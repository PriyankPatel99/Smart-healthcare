<?php 
session_start();
include('include/config.php');


if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysqli_query($con,"SELECT Email FROM patient WHERE Email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


if(!empty($_POST["appdate"])) {
	$appdate= $_POST["appdate"];
	
		$result =mysqli_query($con,"SELECT Date FROM appoinment where P_id='".$_SESSION['id']."' and Date='$appdate'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> already Exists Appoinment on This date.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Date available for your Account .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}




?>
