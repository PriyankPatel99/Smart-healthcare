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

        

        <!------department----->


        <!------doctor----->

		<li class="">

			<span class="glow"></span>

				<a href="doctor_list.php" >

					<i class="icon-user-md icon-2x"></i>

					<span>Doctor</span>

				</a>

		</li>

           <!------nurse----->

		<li class="">

			<span class="glow"></span>

				<a href="nurse_list.php" >

				<i class="fas fa-user-nurse" style="font-size:25px"></i>&nbsp; &nbsp;

					<span>Nurse</span>

				</a>

		</li>
		
		           <!------Reseptionist----->

		<li class="">

			<span class="glow"></span>

				<a href="reseptionist.php" >

			<i class="fas fa-user-tie" style="font-size:25px"></i>&nbsp; &nbsp;

					<span>Reseptionist</span>

				</a>

		</li>

        
        <!------patient-----
		
		
						<li class="dark-nav ">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu" >
			
			
								<i class="fas fa-user-injured" style="font-size:25px"></i> &nbsp; &nbsp;



                <span>patient<i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="settings_submenu" class="collapse ">

                <!--<li class="">

                  <a href="http://localhost/hms/index.php?admin/manage_email_template">

                      <i class="icon-envelope"></i> manage email template
                  </a>

                </li>--

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/manage_noticeboard">

                      <i class="icon-columns"></i> manage noticeboard
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/system_settings">

                      <i class="icon-h-sign"></i> system settings
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/manage_language">

                      <i class="icon-globe"></i> manage language
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/backup_restore">

                      <i class="icon-download-alt"></i> backup restore
                  </a>

                </li>

            </ul>

		</li>



	
        <!------pharmacist----->






        

        <!------accountant----->



        

        

		<!------manage hospital------

		<li class="dark-nav ">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#view_hospital_submenu" >

                		<i class="far fa-hospital" style="font-size:25px"></i>

             &nbsp;&nbsp;   <span>hospital<i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="view_hospital_submenu" class="collapse ">

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_appointment">

                      <i class="icon-exchange"></i> view appointment
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_payment">

                      <i class="icon-money"></i> view payment
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_bed_status">

                      <i class="icon-hdd"></i> view bed status
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_blood_bank">

                      <i class="icon-tint"></i> view blood bank
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_medicine">

                      <i class="icon-medkit"></i> view medicine
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_report/operation">

                      <i class="icon-reorder"></i> view operation
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_report/birth">

                      <i class="icon-github-alt"></i> view birth report
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/view_report/death">

                      <i class="icon-user"></i> view death report
                  </a>

                </li>

            </ul>

		</li>

		
		        <!------laboratorist-----
		
		
		
		
				<li class="dark-nav ">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#laboratorist" >

                					<i class="icon-beaker icon-2x"></i>

                <span>laboratorist<i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="laboratorist" class="collapse ">

                <!--<li class="">

                  <a href="http://localhost/hms/index.php?admin/manage_email_template">

                      <i class="icon-envelope"></i> manage email template
                  </a>

                </li>--

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/manage_noticeboard">

                      <i class="icon-columns"></i> manage noticeboard
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/system_settings">

                      <i class="icon-h-sign"></i> system settings
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/manage_language">

                      <i class="icon-globe"></i> manage language
                  </a>

                </li>

                <li class="">

                  <a href="http://localhost/hms/index.php?admin/backup_restore">

                      <i class="icon-download-alt"></i> backup restore
                  </a>

                </li>

            </ul>

		</li>


        

        

        <!------system settings------>



		<!------manage own profile--->

		<li class="">

			<span class="glow"></span>
<a href="profile.php" >

				 <div class="avatar blue"><div class="img-wrap">
			<?php

$sql = "select Profile from hospital where H_id='".$_SESSION['id']."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['Profile'];
$image_src = "upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/def.jpg">
</div></div>

					&nbsp;&nbsp;&nbsp;<span>profile</span>

				</a>
		</li>

		

	</ul>

	

</div>





