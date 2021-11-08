<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from appoinment where C_id = '".$_GET['id']."' and P_id='".$_SESSION['id']."'");
                  $_SESSION['msg1']="Cancel Appoinment Successful !!";
		  }
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-m-d', time () );

$cas=mysqli_query($con,"select MAX(C_id) num from appoinment where P_id='".$_SESSION['id']."'");
while($dat=mysqli_fetch_array($cas))
{
	
	$dat['num']; 
	$numb=$dat['num']+1;
}
if(isset($_POST['submit']))
{
$pid=$_SESSION['id'];
$hid=$_POST['hospital'];
$did=$_POST['specialization'];
$date=$_POST['appdate'];
$time=$_POST['apptime'];
$ill=$_POST['ill'];
 
		 $query=mysqli_query($con,"select D_id ,COUNT(Date) dcou FROM appoinment GROUP BY Date HAVING D_id='$did' AND Date='$date' AND dcou>=(select App_num from doctor where D_id='$did')");
         $row=mysqli_num_rows($query);
if($row>=1)
{
	$_SESSION['msg1']="Doctor Are not Available on This Date Choice Another Date. ";
	 header('location:book_app.php');
         
}
 $query1=mysqli_query($con,"select D_id ,Time FROM appoinment GROUP BY Date HAVING D_id='$did' AND Date='$date' and  Time='$time'");
         $row1=mysqli_num_rows($query1);
 if($row1>=1)
{
	$_SESSION['msg1']="Doctor Are not Available on This Time Choice Another Time. ";
	 header('location:book_app.php');
}

else
   {
       $query=mysqli_query($con,"insert into appoinment(P_id,C_id,H_id,D_id,Date,Time,Illness) values('$pid','$numb','$hid','$did','$date','$time','$ill')");
       if($query)
       {


           $_SESSION['msg1']="Your appointment successfully booked";
           header('location:book_app.php');
      }
      else
      {
	     $_SESSION['msg1']="Unsuccessfully Appoinment. ";
		  header('location:book_app.php');
      }
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/css/all.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/cssall/css/font.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/pro.css">

	<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">
    <link href="bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">

        <link href="http://localhost/smart_healthcare/css/cssall/css/demo.css" media="screen" rel="stylesheet" type="text/css" />

		<link href="bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
       <script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>


	<title>Book Appoinment || Smart Healthcare</title>
      	<script>
function gethospital(val) {
	$.ajax({
	type: "POST",
	url: "get_hospital.php",
	data:'city='+val,
	success: function(data){
		$("#hospital").html(data);
	}
	});
}
</script>	


<script>
function getSpecialization(val) {
	$.ajax({
	type: "POST",
	url: "get_hospital.php",
	data:'hospital='+val,
	success: function(data){
		$("#specialization").html(data);
	}
	});
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
	<?php include('include/header.php');?>
<?php include('include/said.php');?>
  <div class="main-content">

		        <div class="container-fluid" >

            <div class="row-fluid">

                <div class="area-top clearfix">

                    <div class="pull-left header">

                        <h3 class="title">

                        <i class="icon-info-sign"></i>

                        Book Appoinment </h3>

                    </div>


                </div>

            </div>
<div id="div1" style="color:red; font-size:15px"><?php echo htmlentities($_SESSION['msg1']); ?></div>	
        </div>

		
		
		 <div class="box-content">
	

		<div class="tab-content">
		
                       





                  
 
                               
		                
						 <div class="span4">

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="far fa-handshake"></i>    Appoinment
                    </span>

                </div>

                <div class="box-content scrollable" style="max-height:460px; overflow-y: auto">

                
<?php 
$sql=mysqli_query($con,"select h.Profile,Name,d.F_Name,Specialist,Date,C_id,Payment,Payment_status,Time from hospital h,doctor d,appoinment a where h.H_id=a.H_id and d.D_id=a.D_id and a.P_id='".$_SESSION['id']."' and Date>='$currentTime' order by Date");
while($data=mysqli_fetch_array($sql))
{
?>
                    
                    <div class="box-section news with-icons">

                       <div class="avatar blue"><div class="img-wrap">
<?php

$image = $data['Profile'];
$image_src = "http://localhost/smart_healthcare/app/hospital/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/def.jpg">
</div></div>

                        <div class="news-time" style="color:#000000">

                            Rs.<?php echo $data['Payment'];?> <br><div style="color:#000000;font-size:10px"><?php echo $data['Payment_status'];?><br><?php echo $data['Date']; ?><br><?php echo $data['Time']; ?></div>
                        </div>
						
                      
                        <div class="news-content">

                            <div class="news-title">

                              <?php echo $data['Name']; ?>
                            </div>

                            <div class="news-text">

                            <?php   echo $data['F_Name'];?>
                             </div>
                              <div class="news-text">

                                 [  <?php   echo $data['Specialist'];?>.]<br><br><a href="book_app.php?id=<?php echo $data['C_id']?>&del=delete" onclick="return confirm('Are you sure you want Cancel this Appoinment ?')"

                                	rel="tooltip" data-placement="top" data-original-title="cancel Appoinment" class="btn btn-red">

                                		Cancel

                                </a>
                            </div>
						
                        </div>

                    </div>
<?php }?>


                    
                </div>

            </div>

        </div>
		 <div class="span7">

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="fas fa-calendar-alt"></i>   Book Appoinment
                    </span>

                </div>

                <div class="box-content scrollable" style="max-height:550px; overflow-y: auto">


		
<form name="registration" id="registration" method="post"    accept-charset="utf-8" class="form-horizontal login100-form validate-form" >
                       <div class="padded">
						

			   
					  
				 <div class="wrap-input3 validate-input" style="margin-left:15%" data-validate = "select City">
						<select style="outline:none; border:none" onChange="gethospital(this.value);" class="input100"   name="city"  tabindex=1 />
						<option value=""></option>
						<?php $ret=mysqli_query($con,"select City from hospital  group by City order by City");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['City']);?>">
																	<?php echo htmlentities($row['City']);?>
																</option>
																<?php } ?>
						</select>
						<span class="focus-input100" data-placeholder="City"></span>
					</div>
					 
                       <div class="wrap-input100 validate-input"" style="margin-left:15%" data-validate = "select Hospital">
						<select   style="outline:none; border:none"  class="input100"  onChange="getSpecialization(this.value);"  id="hospital" name="hospital"  tabindex=2/>
						<option value=""></option>
						
						</select>
						<span class="focus-input100" data-placeholder="Hospital"></span>
					</div>
					<div class="wrap-input100 validate-input" style="margin-left:15%"  data-validate = "select Doctor">
						<select style="outline:none; border:none" class="input100"  name="specialization" id="specialization"    tabindex=3 />
						<option value=""></option>
						
						</select>
						<span class="focus-input100" data-placeholder="Specialist"></span>
					</div>
					
					<div class="wrap-input3 validate-input" style="margin-left:15%"  data-validate = "select Date">
						<input  class="input100 datepicker" name="appdate" id="appdate" onBlur="dateAvailability()"  tabindex=4/>
						<span class="focus-input100" data-placeholder="Date"></span>
						<span id="user-availability-status1" style="font-size:12px;"></span>
					</div>
					<div class="wrap-input10 validate-input" style="margin-left:45%"  data-validate = "select Time">
						<input  class="input100" name="apptime" id="apptime"   tabindex=5/>
						<span class="focus-input100"></span>
		
					</div>
					
					

					  <div class="wrap-input100" style="margin-left:15%" >
						<input type="text" class="input100"  name="ill" tabindex=6 />
						
						<span class="focus-input100" data-placeholder=" Illness"></span>
					</div>
			
                    
					


                      
						<div style="margin-left:15%" class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=7>ADD Appoin..</button>

                        
                     
                       
                        </div>

                    </form>                
					          

			</div>
			</div>
			</div>
			</div>

			<!----CREATION FORM ENDS--->


    
<div style="clear:both;color:#FFFFFF; padding:10px;">

    	<hr /><center>&copy; <?php $query=mysqli_query($con,"select Copy from admin where A_id=1");

					while($row=mysqli_fetch_array($query))
{

   echo $row['Copy'] ;

}
							 							
?></center>
</div>

                         
                  <script src="bootstrap-timepicker.min.js"></script>  
	  
<script src="bootstrap-datepicker.min.js"></script>
	
	<script src="js/main.js"></script>
<script>

function dateAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "patient_availability.php",
data:'appdate='+$("#appdate").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});


}




$('.datepicker').datepicker({
	
    format: 'yyyy-m-dd',
    startDate: '0d'
});
</script>

<script type="text/javascript">
            $('#apptime').timepicker();
        </script>
    
</body>
</html>