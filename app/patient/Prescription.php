<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-m-d', time () );
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html>

    <head>

        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/css/all.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/cssall/css/font.css">

		
        <link href="http://localhost/smart_healthcare/css/cssall/css/demo.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="http://localhost/smart_healthcare/css/pro.css" media="screen" rel="stylesheet" type="text/css" />

       <link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />

        <script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>

        

        

        
        <title>Prescription | Smart Healthcare</title>

    </head>

    

    

<body>
<div class="tc-videobackground">
            <video src="http://localhost/smart_healthcare/images/Dna - 27019.mp4" autoplay loop muted></video>
        </div>
<?php include('include/header.php');?>
<?php include('include/said.php');?>


   
    <div class="main-content">

		        <div class="container-fluid" >

            <div class="row-fluid">

                <div class="area-top clearfix">

                    <div class="pull-left header">

                        <h3 class="title">

                        <i class="icon-info-sign"></i>

                        Patient Prescription </h3>

                    </div>


                </div>

            </div>

        </div>

        




       
		<!-----NOTICEBOARD LIST STARTS-->

        <div class="span3">

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="far fa-handshake"></i>    Attempts
                    </span>

                </div>

                <div class="box-content scrollable" style="max-height:460px; overflow-y: auto">

                

                    
                 <?php 
$sql=mysqli_query($con,"select a.C_id,Profile,F_Name,Specialist,Date from doctor d,appoinment a where  d.D_id=a.D_id and a.P_id='".$_SESSION['id']."' and a.Date<='$currentTime' and a.Payment is not null and Payment_status='Paid'");
while($data=mysqli_fetch_array($sql))
{
?>
                    <a href="prescription.php?id=<?php echo $data['C_id']?>&cide">
                    <div class="box-section news with-icons">

                       <div class="avatar blue"><div class="img-wrap">
<?php

$image = $data['Profile'];
$image_src = "http://localhost/smart_healthcare/app/doctor/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/def.jpg">
</div></div>

                        <div class="news-time" style="color:#000000">

                            <?php echo $data['Date']; ?>
                        </div>

                        <div class="news-content">

                            <div class="news-title">

                              <?php echo $data['F_Name']; ?>
                            </div>

                           
                              <div class="news-text">

                                 [  <?php   echo $data['Specialist'];?>.]
                            </div>
						
                        </div>

                    </div>
<?php }?>



</a>
                    
                </div>

            </div>

        </div>

		
		
		
		
		
		
	  <div class="span10">

            <div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

            
			<li class="active">

            	<a href="#prescription" data-toggle="tab"><i class="fas fa-prescription" style="font-size:15px"></i>

					Prescription
                    	</a></li>

			<li>

            	<a href="#report" data-toggle="tab"><i class="fas fa-file-medical" style="font-size:15px"></i>

					Report
                    	</a></li>
			<li>

            	<a href="#xray" data-toggle="tab"><i class="fas fa-x-ray" style="font-size:15px"></i>

					X_Ray
                    	</a></li>
<li>

            	<a href="#invoice" data-toggle="tab"><i class="fas fa-money-bill-alt" style="font-size:15px"></i>

					Invoice
                    	</a></li>
		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	
		<div class="box-content padded">

		<div class="tab-content">     

        	
            

            <!----Prescription Start--->
			<div class="tab-pane box active " id="prescription">
 <div class="box-content scrollable" style="max-height:460px; overflow-y: auto">
 <?php
if(isset($_GET['cide']))
		  {
		          $sql1=mysqli_query($con,"SELECT Name,h.Profile,d.F_Name,Specialist,Date,TIMESTAMPDIFF(YEAR,Dob,Date) Age,case_h,medication,med_f_phy,pa.description FROM doctor d,hospital h, patient p,appoinment a, prescription pa WHERE a.D_id=d.D_id AND a.H_id=h.H_id AND a.P_id=pa.P_id AND a.C_id=pa.C_id AND p.P_id=a.P_id AND pa.P_id='".$_SESSION['id']."' AND pa.C_id='".$_GET['id']."'");
		  }
				  while($data1=mysqli_fetch_array($sql1))
				  {
		  
				       ?>
			                 <div class="form-horizontal ">
					          <div class="box-section news with-icons">

                               <div class="avatar blue">

                             <div class="img-wrap">
<?php

$image = $data1['Profile'];
$image_src = "http://localhost/smart_healthcare/app/hospital/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/hosdef.jpg">                        

                      
                        </div>
                        </div>

                        <div class="news-time" style="color:black">

                          Age:&nbsp;&nbsp;&nbsp; <?php echo $data1['Age']; ?>
                        </div>

                        <div class="news-content">

                            <div class="news-title">

                                <?php echo $data1['Name']; ?>
                            
                            </div>

                            <div class="news-text">

                                <?php echo $data1['F_Name']; ?>&nbsp;[<?php echo $data1['Specialist']; ?>]
                            </div>

                        </div>
                        </div>
						 <div class="control-group">

                                <label class="control-label">case history</label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $data1['case_h']; ?><br>
                                </div>

                            </div>
							<div class="control-group">

                                <label class="control-label">medication</label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $data1['medication']; ?><br>
                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label">medication from pharmacist</label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $data1['med_f_phy']; ?><br>
                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label">description</label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $data1['description']; ?><br>
                                </div>

                            </div>

                        </div>

                   
 <?php }?> 

               

			</div>
			</div>
         
            <!----Prescription ENDS--->
   

			<!----Report STARTS---->

		<div class="tab-pane box" id="report">
 <div class="box-content scrollable" style="max-height:460px; overflow-y: auto">
   <?php
if(isset($_GET['cide']))
		  {
		          $sql1=mysqli_query($con,"select F_Name,profile,Name,r_tital,r_description,p_tital,pdf from report r, laboratory l where r.L_id=l.L_id and C_id = '".$_GET['id']."'  and P_id='".$_SESSION['id']."'");
		  }
				  while($data1=mysqli_fetch_array($sql1))
				  {
		  
				       ?>
					          <div class="box-section news with-icons">

                               <div class="avatar blue">

                             <div class="img-wrap">
<?php

$image = $data1['profile'];
$image_src = "http://localhost/smart_healthcare/app/Laboratory/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/lebdef.jpg">
                        

                      
                        </div>
                        </div>
						 

                        <div class="news-content">

                            <div class="news-title">

                                <?php echo $data1['Name']; ?>
                            
                            </div>

                            <div class="news-text">

                                 <?php echo $data1['F_Name']; ?>
                            </div>

                        </div>
                        </div>
						      <div class="control-group">
                             <center style="font-size:20px">
                                  <?php echo $data1['r_tital']; ?>
								 </center>
                              </div>
							 <div class="control-group">
							 <?php echo $data1['r_description']; ?>
                              </div>

                            <div class="control-group">
                             <center style="font-size:20px">
                               <?php echo $data1['p_tital']; ?>
								 </center>
                              </div>

                           <div class="control-group">
						   <?php

$image = $data1['pdf'];
$image_src = "http://localhost/smart_healthcare/app/Laboratory/pdf/".$image;

?>
						   
                                <iframe src='<?php echo $image_src;  ?>' alt="not " width="100%" height="460px" onerror=this.src="http://localhost/smart_healthcare/images/def.jpg">
                              </iframe>				
							  </div>
							 <?php }?> 
		  
		

			</div>
			</div>
			<!----Report ENDS--->
			
			<!----X_Ray STARTS---->

		<div class="tab-pane box" id="xray">
 <div class="box-content scrollable" style="max-height:460px; overflow-y: auto">
 <?php
if(isset($_GET['cide']))
		  {
		          $sql1=mysqli_query($con,"SELECT Name,h.Profile,d.F_Name,Specialist,Date,TIMESTAMPDIFF(YEAR,Dob,Date)  Age,tital_1,img_1 FROM doctor d,hospital h, patient p,appoinment a, x_ray x WHERE a.D_id=d.D_id AND a.H_id=h.H_id AND a.P_id=x.P_id AND a.C_id=x.C_id AND p.P_id=a.P_id AND x.P_id='".$_SESSION['id']."' AND x.C_id='".$_GET['id']."'");
		  }
				  while($data1=mysqli_fetch_array($sql1))
				  {
		  
				       ?>
				
 
					          <div class="box-section news with-icons">

                               <div class="avatar blue">

                             <div class="img-wrap">
							<?php

$image = $data1['Profile'];
$image_src = "http://localhost/smart_healthcare/app/hospital/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/hosdef.jpg">                        

                    
                        

                      
                        </div>
                        </div>

                        <div class="news-time" style="color:black">

                          Age:&nbsp;&nbsp;&nbsp; <?php echo $data1['Age']; ?>
                        </div>

                        <div class="news-content">

                            <div class="news-title">

                               
                                <?php echo $data1['Name']; ?>
                            
                            </div>

                            <div class="news-text">

                                  <?php echo $data1['F_Name']; ?>&nbsp;[<?php echo $data1['Specialist']; ?>]
                            </div>

                        </div>
                        </div>
						            <div class="control-group">
                             <center style="font-size:15px">
                                 <?php echo $data1['tital_1']; ?><br>
								 </center>
                              </div>
							<div class="img-wrap2">
	  <?php

$image = $data1['img_1'];
$image_src = "http://localhost/smart_healthcare/app/document/xray/".$image;

?>

 <img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/def2.jpg"/>
  
  </div> 

                       <?php }?>   

			</div>
			</div>
			<!----X_Ray ENDS--->
			
<!----invoice STARTS---->

		<div class="tab-pane box" id="invoice">
 <div class="box-content scrollable" style="max-height:460px; overflow-y: auto">
  <?php
if(isset($_GET['cide']))
		  {
		          $sql1=mysqli_query($con,"SELECT Name,h.Profile,Payment,description FROM appoinment a, hospital h WHERE a.H_id=h.H_id and a.P_id='".$_SESSION['id']."' AND a.C_id='".$_GET['id']."'");
		  }
				  while($data1=mysqli_fetch_array($sql1))
				  {
		  
				       ?>

				  <div class="box-section news with-icons">

                               <div class="avatar blue">

                             <div class="img-wrap">
	<?php

$image = $data1['Profile'];
$image_src = "http://localhost/smart_healthcare/app/hospital/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/hosdef.jpg">                        

                    
                        

                      
                        </div>
                        </div>

                       
                        <div class="news-content">

                            <div class="news-title">

                                   <?php echo $data1['Name']; ?>
                            
                            </div>


                        </div>
                        </div>
						            <div class="control-group">
                             <center style="font-size:15px">
                               Invoice
								 </center>
                              </div>
							 <div class="control-group">
							   <?php echo $data1['description']; ?><br>
                              </div>
                          <div class="control-group">

                              

                                Total Amount:

                                      <?php echo $data1['Payment']; ?><br>
                                </div>

                          
  <?php }?> 
               

			</div>
			</div>
			<!----invoice ENDS--->

            
</div>

</div>

</div>
</div>        

	  

	  
<div style="clear:both;color:#000000; padding:10px;">

    	<hr /><center>&copy; <?php $query=mysqli_query($con,"select Copy from admin where A_id=1");

					while($row=mysqli_fetch_array($query))
{

   echo $row['Copy'] ;

}
							 							
?></center>
</div>

    

</body>

</html>