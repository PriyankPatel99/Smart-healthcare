<?php
session_start();
include('include/config.php');


	date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-m-d', time () );

if(!empty($_POST["D_id"])) 
{


 $sql=mysqli_query($con,"select p.F_Name,p.L_Name,p.P_id,a.D_id from patient p, appoinment a where Date='$currentTime' and p.P_id=a.P_id and a.D_id='".$_POST['D_id']."'"); ?>
 <option selected="selected"></option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['P_id']); ?>"><?php echo htmlentities($row['F_Name']); ?> &nbsp; <?php echo htmlentities($row['L_Name']); ?></option>
  <?php
}
}

if(!empty($_POST["P_id"])) 
{

 $sql=mysqli_query($con,"select MAX(C_id) num from appoinment where P_id='".$_POST['P_id']."' and Date='$currentTime'");?>
 
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['num']); ?>"></option>
  <?php
}
}


?>