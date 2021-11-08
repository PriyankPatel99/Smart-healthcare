<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-M-d', time () );

if(isset($_POST['submit']))
{	
$lid=$_SESSION['id'];
$pid=$_POST['pid'];
$cid=$_POST['cid'];
$caseh=$_POST['rtit'];
$medi=$_POST['desc'];

$sele=mysqli_query($con,"select  r_tital ,r_description from report  where P_id='$pid' and C_id='$cid' and r_description is not null");
$count=mysqli_num_rows($sele);
if($count>=1)
{
	$_SESSION['msg1']="Already Report Exist on this id";
	header("location:addreport.php");
}
else
{
	$pfd=mysqli_query($con,"select p_tital ,pdf from report where P_id='$pid' and C_id='$cid'");
	$count1=mysqli_num_rows($pfd);
    if($count1>=1)
	{
		$sql=mysqli_query($con,"Update report set L_id='$lid',r_tital='$caseh',r_description='$medi'  where P_id='$pid' and C_id='$cid'");
        if($sql)
        {
          
          $_SESSION['msg1']="Update successfull";
		  header("location:addreport.php");
        }
		else
		{
			$_SESSION['msg1']="unsuccessfull update Try Again";
			header("location:addreport.php");
		}
		
	}
	else
	{
		$ins=mysqli_query($con,"insert into report(L_id,P_id,C_id,r_tital,r_description) values('$lid','$pid','$cid','$caseh','$medi')");
		if($ins)
		{
			
            $_SESSION['msg1']="successfull insert";
			header("location:addreport.php");
			
		}
		else
		{
			$_SESSION['msg1']="unsuccessfull insert!!! Enter Proper Patient id adn case id";
			header("location:addreport.php");
		
		}
		
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

        

        
        <title>Add Report | Smart Healthcare</title>
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
				

                         Add Report </h3>	

                    </div>


                </div>

            </div>
<div id="div1" style="color:red; font-size:15px"><?php echo htmlentities($_SESSION['msg1']); ?></div>
        </div>

        


        

       
    
        	

            

          
			<!----CREATION FORM STARTS---->
			 <div class="container-fluid padded">

			 

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="fas fa-file-medical-alt"></i>  Add Report 
                    </span>

                </div>

               


			<div class="tab-pane box" id="add" style="padding: 5px">

                					 <div class="box-content">


                   <form  method="post"  action="addreport.php"  accept-charset="utf-8" class="form-horizontal login100-form validate-form">
                       <div class="padded">
					    <div class="wrap-input1 validate-input" data-validate = "Enate patient id which provided by doctor">
						<input class="input100" type="text" name="pid" tabindex=1/>
						<span class="focus-input100" data-placeholder="Patient Id"></span>
					</div>
					 <div class="wrap-input2 validate-input" data-validate = "Enate patient case id which provided by doctor">
						<input class="input100" type="text" name="cid" tabindex=1/>
						<span class="focus-input100" data-placeholder="Case id"></span>
					</div>
					   
						 
					
					          
		                <div class="wrap-input200 validate-input" data-validate = "Give Proper Title for Report">
						<input class="input100" type="text" name="rtit" tabindex=1/>
						<span class="focus-input100" data-placeholder="Report Title"></span>
					</div>
					
		               <div class="wrap-input200 closable-chat-box">
					   <br><br>
						<textarea style="outline:none; border:none" class="input100"   name="desc" tabindex=3></textarea>
						<span class="focus-input100" data-placeholder="Report Description"></span>
					
					</div>
			
					          


                                        

                                 

                               
                        <div class="form-actions">

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=10>Add Report </button>

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

    

	
</body>

</html>
