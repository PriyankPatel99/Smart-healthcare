<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-m-d', time () );

if(isset($_POST['submit']))
{	
$pid=$_POST['patient'];
$cid=$_POST['cid'];
$caseh=$_POST['caseh'];
$medi=$_POST['medic'];
$med_f=$_POST['mfp'];
$desc=$_POST['desc'];
$bpre=$_POST['blp'];
$bsug=$_POST['bls'];
$opra=$_POST['oparetion'];
$sele=mysqli_query($con,"select  medication,med_f_phy from prescription  where P_id='$pid' and C_id='$cid' and description is not null");
                 $count=mysqli_num_rows($sele);
                 if($count>=1)
                 {
	              $_SESSION['pmsg']="Already Prescription Exist on this id";
	               header("location:nprescription.php");
                 }
                 else
                 {


$sql=mysqli_query($con,"INSERT INTO prescription (P_id,C_id,case_h,medication,med_f_phy,description,blood_pre,blood_sug,opration) VALUES
 ('$pid','$cid', '$caseh', '$medi', '$med_f', '$desc', '$bpre', '$bsug', '$opra')");
if($sql)
{
header("location:nprescription.php");
$_SESSION['pmsg']="successfull insert";
}
 else
 {
	           $_SESSION['pmsg']="Unsuccessful";
 }

}
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html>

    <head>

        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

				<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/css/all.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/cssall/css/font.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/val.css">

	<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">


        <link href="http://localhost/smart_healthcare/css/cssall/css/demo.css" media="screen" rel="stylesheet" type="text/css" />



       <script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>

        

        
        <title>Add Prescription | Smart Healthcare</title>
		
		  	<script>
function getpatient(val) {
	$.ajax({
	type: "POST",
	url: "get_patient.php",
	data:'D_id='+val,
	success: function(data){
		$("#patient").html(data);
	}
	});
}
		</script>
		
		
		  	<script>
function getcid(val) {
	$.ajax({
	type: "POST",
	url: "get_patient.php",
	data:'P_id='+val,
	success: function(data){
		$("#cid").html(data);
	}
	});
}
		</script>
<script type="text/javascript">
 function showIt(){
   document.getElementById("div1").style.visibility="hidden";
  }
  setTimeout("showIt()",5000);
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

                         Add Prescription </h3>

                    </div>


                </div>

            </div>
 <div id="div1" style="color:red; font-size:15px"><?php echo htmlentities($_SESSION['pmsg']); ?></div>
        </div>

        


        

       
    
        	

            

          
			<!----CREATION FORM STARTS---->
			 <div class="container-fluid padded">

			 

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="icon-plus"></i>  Add Prescription
                    </span>

                </div>

               


			<div class="tab-pane box" id="add" style="padding: 5px">

                					 <div class="box-content">


                   <form  method="post"  action="nprescription.php"  accept-charset="utf-8" class="form-horizontal login100-form validate-form">
                       <div class="padded">
						



          
					 <div class="wrap-input1 validate-input" data-validate = "Select Doctor">
						<select style="outline:none; border:none"  onChange="getpatient(this.value);" class="input100"   name="doc"  tabindex=1 />
						<option value=""></option>
						<?php $ret=mysqli_query($con,"select Specialist,d.F_Name,D_id from doctor d, nurse n where d.H_id=n.H_id and N_id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['D_id']);?>">
																	<?php echo htmlentities($row['F_Name']);?>-- [<?php echo htmlentities($row['Specialist']); ?>]
																</option>
																<?php } ?>
						</select>
						<span class="focus-input100" data-placeholder="Doctor"></span>
					</div>
					   
                   
					  
                        <div class="wrap-input2 validate-input" data-validate = "Select Patient">
						<select style="outline:none; border:none" class="input100"   onChange="getcid(this.value);" name="patient" id="patient"  tabindex=2 />
						<option value=""></option>
									
						</select>
						<span class="focus-input100" data-placeholder="Patient Name"></span>
					</div>

					<select  style="visibility:hidden"  name="cid" id="cid">
					<option value=""></option>
					</select>
					
			
				
		
					
					           
		               <div class="wrap-input200 closable-chat-box">
					   <br><br>
						<textarea style="outline:none; border:none" class="input100"   name="caseh" tabindex=3></textarea>
						<span class="focus-input100" data-placeholder="Case History"></span>
					
					</div>
					 <div class="wrap-input200 closable-chat-box">
					   <br><br>
						<textarea style="outline:none; border:none" class="input100"   name="medic" tabindex=4></textarea>
						<span class="focus-input100" data-placeholder="Medication"></span>
					
					</div>
					 <div class="wrap-input200 closable-chat-box">
					   <br><br>
						<textarea style="outline:none; border:none" class="input100"   name="mfp" tabindex=5></textarea>
						<span class="focus-input100" data-placeholder="Medication From Pharmacist"></span>
					
					</div>
				 <div class="wrap-input200 closable-chat-box">
					   <br><br>
						<textarea style="outline:none; border:none" class="input100"   name="desc" tabindex=6></textarea>
						<span class="focus-input100" data-placeholder="Description"></span>
					
					</div>
					
					 <div class="wrap-input1">
					
						<input style="outline:none; border:none" class="input100"   name="blp" tabindex=7>
						<span class="focus-input100" data-placeholder="Blood Pressure"></span>
					
					</div>
                     <div class="wrap-input2">
					
						<input style="outline:none; border:none" class="input100"   name="bls" tabindex=8>
						<span class="focus-input100" data-placeholder="Blood Sugar"></span>
					
					</div>
					  <div class="wrap-input2 validate-input" style="margin-left:48%" data-validate = "Select Oparetion">
					
						<select style="outline:none; border:none" class="input100"   name="oparetion" tabindex=9 >
						<option value=""></option>
						<option value="Normal">Normal</option>
						<option value="Dead">Dead</option>
						<option value="Birth">Birth</option>
						</select>
						<span class="focus-input100" data-placeholder="Oparetion"></span>
					
					</div>

                                        

                                 

                               
                        <div class="form-actions">

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=10>Add Prescri.. </button>

                        </div>
                        </div>

                    </form>                

                </div>                

			</div>

			<!----CREATION FORM ENDS--->

            

		</div>

	</div>

   

	  
   

	  
 
   
	

	<script src="js/main.js"></script>


    
<div style="clear:both;color:#000000; padding:10px;">

    	<hr /><center>&copy; <?php $query=mysqli_query($con,"select Copy from admin where A_id=1");

					while($row=mysqli_fetch_array($query))
{

   echo $row['Copy'] ;

}
							 							
?></center>
</div>

    

</script>	
</body>

</html>