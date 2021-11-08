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

					<span>dashboard</span>

				</a>

		</li>
		
		
		   <!------work----->

		<li class="">

			<span class="glow"></span>

				<a href="work.php" >

			<i class="fas fa-briefcase"style="font-size:25px"></i>
&nbsp;&nbsp;
					<span>Work</span>

				</a>

		</li>
		  <!------work----->

		<li class="">

			<span class="glow"></span>

				<a href="addxray.php" >

			<i class="fas fa-x-ray"style="font-size:24px"></i>
&nbsp;&nbsp;
					<span>X_Ray</span>

				</a>

		</li>
		
		

        

      

		<!------manage own profile--->

		<li class="">

			<span class="glow"></span>

				<a href="profile.php" >

				 <div class="avatar blue"><div class="img-wrap">
			<?php

$sql = "select Profile from doctor where D_id='".$_SESSION['id']."'";
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





