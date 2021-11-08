<?php
session_start();
error_reporting(0);
include("include/config.php");
//<!---admin-1---->
$sql=mysqli_query($con,"select Email,A_id  from admin");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['A_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']="";
	header("location:http://localhost/smart_healthcare/app/admin/dashboard.php");
	
}
}
//<!---patient-2->
$sql=mysqli_query($con,"select Email,P_id  from patient");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['P_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']=" ";
	header("location:http://localhost/smart_healthcare/app/patient/dashboard.php");
	
}
}
//<!------doctor---3>
$sql=mysqli_query($con,"select Email,D_id  from doctor");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['D_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']=" ";
	header("location:http://localhost/smart_healthcare/app/doctor/dashboard.php");
	
}
}
//<!--------hospital-4---->
$sql=mysqli_query($con,"select Email,H_id  from hospital");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['H_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']=" ";
	header("location:http://localhost/smart_healthcare/app/hospital/dashboard.php");
	
}
}
//<!--------nurse---5--------->
$sql=mysqli_query($con,"select Email,N_id  from nurse");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['N_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']=" ";
	header("location:http://localhost/smart_healthcare/app/nurse/dashboard.php");
	
}
}
//----------------reseptionist-----6-------
$sql=mysqli_query($con,"select Email,R_id  from reseptionist");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['R_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']=" ";
	header("location:http://localhost/smart_healthcare/app/reseptionist/dashboard.php");
	
}
}
//------------------laboratory----------7---------
$sql=mysqli_query($con,"select Email,L_id  from laboratory");
while($row=mysqli_fetch_array($sql))
{
if(!isset($_COOKIE['smart']))
{
  header("location:home.php");
	
}
else if($_COOKIE['smart']==$row['Email'])
{
	$_SESSION['id']=$row['L_id'];
	$_SESSION['login']=$_COOKIE['smart'];
	$_SESSION['msg1']=" ";
	header("location:http://localhost/smart_healthcare/app/laboratory/dashboard.php");
	
}
}
?>