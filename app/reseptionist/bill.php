<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-m-d', time () );
if(isset($_POST['submit']) &&!empty($_GET['pid']) AND  isset($_GET['cid']) &&!empty($_GET['cid']))
{
   $descri=$_POST['desc'];
   $amoun=$_POST['amt'];
   $opra=$_POST['oparetion'];
   
   $sql=mysqli_query($con,"Update appoinment set description='$descri',Payment='$amoun',Payment_status='$opra' where P_id='".$_GET['pid']."' and C_id='".$_GET['cid']."'");
   if($sql)
   {
   header('location:work.php');
   $_SESSION['msg1']="  Update Successful";

   }
   else
   {
	           $_SESSION['msg1']="not insert";
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

        

        
        <title>Add Bill | Smart Healthcare</title>
		
		 

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

                         Add Bill/invoice </h3> <span style="color:red; font-size:12px;"><?php echo  $msg1; ?><?php echo  $msg1="" ;?></span>

                    </div>


                </div>

            </div>

        </div>

        


        

       
    
        	

            

          
			<!----CREATION FORM STARTS---->
			 <div class="container-fluid padded">

			 

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="fas fa-money-bill-alt"></i>  Add Bill/invoice 
                    </span>

                </div>

               


			<div class="tab-pane box" id="add" style="padding: 5px">

                					 <div class="box-content">
<?php $sql=mysqli_query($con,"select description,Payment,Payment_status from appoinment where  P_id='".$_GET['pid']."' and C_id='".$_GET['cid']."'");
while($data=mysqli_fetch_array($sql))
{
?>
            

                   <form  method="post"    accept-charset="utf-8" class="form-horizontal login100-form validate-form">
                       <div class="padded">
						



		
					
					           
		               <div class="wrap-input200  active patel">
					   <br><br>
						<textarea style="outline:none; border:none; height:150px" placeholder="Bill Description" class="input100"   name="desc" tabindex=3 /><?php echo htmlentities($data['description']);?>
						
			</textarea>
						
						<span class="focus-input100 "></span>
					
					</div>
			
					
					 <div class="wrap-input1 validate-input" data-validate = "Enter Total Amount">
					
						<input style="outline:none; border:none" class="input100"  placeholder="Total Payment" name="amt" tabindex=7   value="<?php echo htmlentities($data['Payment']);?>"/>
						<span class="focus-input100" ></span>
					
					</div>
                   
					  <div class="wrap-input2 validate-input" data-validate = "Select Payment_staatus">
					
						<select  style="outline:none; border:none" class="input100"   name="oparetion" tabindex=9/>
						<option value=""></option>
						<option value="Paid">Paid</option>
						<option value="Unpaid">Unpaid</option>
						</select>
						<span class="focus-input100" data-placeholder="Payment Status"></span>
					
					</div>

                                        

                              <?php } ?>    

                               
                        <div class="form-actions">

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=10>Add invoice </button>

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