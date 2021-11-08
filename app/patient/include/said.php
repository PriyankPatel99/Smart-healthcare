  <div class="sidebar-background">

	<div class="primary-sidebar-background">

	</div>

</div>

<div class="primary-sidebar">

	<!-- Main nav -->

 

	<ul class="nav nav-collapse collapse nav-collapse-primary">

    		<li class="">

			<span class="glow"></span>

			<img src="http://localhost/smart_healthcare/images/logo.png"  style="height:20vh; width:auto;" alt="Smart Healthcare">

		</li>

        

        <!------dashboard----->

		<li class="">

			<span class="glow"></span>

				<a href="dashboard.php" >

					<i class="icon-desktop icon-2x"></i>

					<span>Dashboard</span>

				</a>

		</li>

        

     
        <!------Book appoinment----->

		<li class="">

			<span class="glow"></span>

				<a href="book_app.php" >

					<i class="fas fa-calendar-alt" style="font-size:25px"></i>

             &nbsp;&nbsp;  

					<span>Book Appoinment</span>

				</a>

		</li>

		<!----Prescription---->
		
				<li class="">

			<span class="glow"></span>
			<?php 
$sql=mysqli_query($con,"select MIN(C_id)qwew from prescription where P_id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
			<a href="Prescription.php?id=<?php echo $data['qwew']?>&cide" >
		<i class="fas fa-prescription" style="font-size:25px"></i>
		             &nbsp;&nbsp;  
<?php }?>
					<span>Prescription</span>

				</a>

		</li>
      


		<!------manage own profile--->

		<li class="">

			<span class="glow"></span>

				<a href="profile.php" >

				 <div class="avatar blue"><div class="img-wrap">
			<?php

$sql = "select Profile from patient where P_id='".$_SESSION['id']."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['Profile'];
$image_src = "upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/def.jpg">
</div></div>

					&nbsp;&nbsp;&nbsp;<span>Profile</span>

				</a>

		</li>

		

	</ul>

	

</div>





