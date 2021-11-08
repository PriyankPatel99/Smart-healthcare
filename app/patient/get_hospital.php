<?php
include('include/config.php');
if(!empty($_POST["city"])) 
{

 $sql=mysqli_query($con,"select Name,H_id from hospital where City='".$_POST['city']."' order by Name");?>
 <option selected="selected"></option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['H_id']); ?>"><?php echo htmlentities($row['Name']); ?></option>
  <?php
}
}


if(!empty($_POST["hospital"])) 
{

 $sql=mysqli_query($con,"select  F_Name,Specialist,D_id from doctor where H_id='".$_POST['hospital']."' order by Specialist" );?>
 <option selected="selected"></option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['D_id']); ?>"><?php echo htmlentities($row['F_Name']); ?>-- [<?php echo htmlentities($row['Specialist']); ?>]</option>
  <?php
}
}


?>

