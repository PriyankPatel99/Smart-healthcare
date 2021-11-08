<?php error_reporting(0);?>

 <div class="navbar navbar-top navbar-inverse">

	<div class="navbar-inner">

		<div class="container-fluid">

			<div class="brand">Smart Healthcare
			</div>

			<!-- the new toggle buttons -->
		

			<ul class="nav pull-right">

				<li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>

				<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>

			</ul>

		
              






	
									
								
	  <div class="nav-collapse nav-collapse-top collapse">

			<ul class="nav pull-right">

				<li class="dropdown">
					                    


<li class="dropdown">


					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><?php $query=mysqli_query($con,"select Name from admin where A_id='".$_SESSION['id']."'");

					while($row=mysqli_fetch_array($query))
{

   echo $row['Name'] ;

}
							 							
?>
					<b class="caret"></b></a>

					<!-- Account Selector -->

                    <ul class="dropdown-menu">

                    	<li class="with-image">

                        	<span>

                            Administrator
                            </span>

                        </li>

                    	<li class="divider"></li>

						

						<li><a href="change_password.php">

                        						<i class="icon-lock icon-1x"></i><span>Change Password</span></a></li>
														<li><a href="logout.php">

                        		<i class="icon-off"></i><span>logout</span></a></li>
								

</ul>



			</div>

		</div>

	</div>

</div>