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
         $pid=$_POST['patient'];
        $cid=$_POST['cid'];
        $tit=$_POST['blp'];
        $name = $_FILES['file']['name'];
	    if (empty($_FILES["file"]["name"])) 
       {
	    $_SESSION['pmsg']="Select  the PDF";
       }
       else
       {
         $target_dir = "pdf/";
         $target_file = $target_dir .basename($_FILES["file"]["name"]);
         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $extensions_arr = array("pdf");
		 $micro=round(microtime(true) * 1000);
         $pro= $micro.$name;	
		 $result =mysqli_query($con,"SELECT pdf FROM report WHERE pdf='$pro'");
		 $count2=mysqli_num_rows($result);
         if($count2>0)
         {
	      $_SESSION['pmsg']="Not Upload Try Again";
         }
         else
         {
            if( in_array($imageFileType,$extensions_arr) ){
			if($_FILES["file"]["size"]>8000000)
			{
				$_SESSION['pmsg']="Image size exceeds 8MB";
				 
			}
            else
			{
				

                 $sele=mysqli_query($con,"select  p_tital ,pdf from report  where P_id='$pid' and C_id='$cid' and pdf is not null");
                 $count=mysqli_num_rows($sele);
                 if($count>=1)
                 {
	              $_SESSION['pmsg']="Already Report pdf Exist on this id";
	               header("location:addpdf.php");
                 }
                 else
                 {
	              $pfd=mysqli_query($con,"select r_tital ,r_description from report where P_id='$pid' and C_id='$cid'");
	              $count1=mysqli_num_rows($pfd);
                  if($count1>=1)
	              {
					    $query ="Update report set L_id='$lid',p_tital='$tit',pdf='$pro'  where P_id='$pid' and C_id='$cid'";
           
                          mysqli_query($con,$query) or die(mysqli_error($con));
            
             
                        move_uploaded_file($_FILES['file']['tmp_name'],'pdf/'.$pro);
			            $_SESSION['pmsg']="Successfull Uploaded  update";
				         header('location:addpdf.php');
				  }
		          else
	              {
				  $query ="insert into report(L_id,P_id,C_id,p_tital,pdf)values('$lid','$cid','$cid','$tit','$pro')";
           
                   mysqli_query($con,$query) or die(mysqli_error($con));
            
             
                  move_uploaded_file($_FILES['file']['tmp_name'],'pdf/'.$pro);
			     $_SESSION['pmsg']="Successfull Uploaded  insert";
				  header('location:addpdf.php');
			     }
				}
			}
			}
           else
           {
			$_SESSION['pmsg']="Invalid Formet PDF only ";
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

        

        
        <title>Add Report PDF | Smart Healthcare</title>
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

                         Add Report PDF </h3> <span style="color:red; font-size:12px;">

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

                        <i class="fas fa-file-pdf"></i>  Add Report PDF
                    </span>

                </div>

               


			<div class="tab-pane box" id="add" style="padding: 5px">

                					 <div class="box-content">


                   <form  method="post"    accept-charset="utf-8" class="form-horizontal login100-form validate-form"  enctype='multipart/form-data'>
                       <div class="padded">
						 <div class="wrap-input1 validate-input" data-validate = "Enate patient id which provided by doctor">
					
						<input  class="input100"   name="patient" tabindex=1 />
						<span class="focus-input100" data-placeholder="Patient Id"></span>
					
					</div>
					 <div class="wrap-input2 validate-input" data-validate = "Enate patient case id which provided by doctor">
					
						<input  class="input100"   name="cid" tabindex=2/>
						<span class="focus-input100" data-placeholder="Case Id"></span>
					
					</div>
					 <div class="wrap-input100  validate-input" data-validate = "Give Proper Title for Report PDF">
					
						<input style="outline:none; border:none" class="input100"   name="blp" tabindex=3/>
						<span class="focus-input100" data-placeholder="Report PDF Title"></span>
					
					</div>
<div class="wrap-login100-form-btn" style="margin-left:4%">
							<div class="login100-form-bgbtn">
							</div>
                            <input type="file" name="file" class="login100-form-btn" tabindex=4>
 
                        </div>


		
					
					           
		             
					          


                                        

                                 

                               
                        <div class="form-actions">

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=10>Add PDF </button>

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