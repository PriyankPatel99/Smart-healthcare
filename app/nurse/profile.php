<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-M-yy h:i:s A', time () );
if(isset($_POST['submit']))
{
   $fname=$_POST['F_Name'];
   $lname=$_POST['L_Name'];
   $address=$_POST['address'];
   $city=$_POST['city'];
   $pincode=$_POST['pincode'];
   $email=$_POST['email'];
   $contact=$_POST['phone'];
   $sql=mysqli_query($con,"Update nurse set F_Name='$fname',L_Name='$lname',Address='$address',City='$city',Pincode='$pincode',Email='$email',Contect='$contact',updationDate='$currentTime' where N_id='".$_SESSION['id']."'");
   if($sql)
   {
   header('location:profile.php');
     $_SESSION['msgpro']="Profile update Successful";
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
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/pro.css">

	<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">


        <link href="http://localhost/smart_healthcare/css/cssall/css/demo.css" media="screen" rel="stylesheet" type="text/css" />



       <script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>


        
        <title>Nurse Profile | Smart Healthcare</title>
		<script type="text/javascript">
		function showIt(){
   document.getElementById("div1").style.visibility="hidden";
  }
  setTimeout("showIt()",5000);
</script>


    </head>
 <?php
	
 
    if(isset($_POST['but_upload'])){
		 
		   
        $name = $_FILES['file']['name'];
		if (empty($_FILES["file"]["name"])) 
{
	$_SESSION['msgpro']="Select  the Image";
}
else
{
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");
		 $micro=round(microtime(true) * 1000);
            $pro= $micro.$name;	
       
		$result =mysqli_query($con,"SELECT Profile FROM nurse WHERE Profile='$pro'");
		$count=mysqli_num_rows($result);
if($count>0)
{
	 $_SESSION['msgpro']="Not Upload Try Again";
}
else
{
       
        if( in_array($imageFileType,$extensions_arr) ){
			
			if($_FILES["file"]["size"]>2000000)
			{
				$_SESSION['msgpro']="Image size exceeds 2MB";
			}
            else
			{
			       
                 $query = "Update nurse set Profile='$pro',updationDate='$currentTime' where N_id='".$_SESSION['id']."'";
           
                   mysqli_query($con,$query) or die(mysqli_error($con));
              
             
                  move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$pro);
				  
			     $_SESSION['msgpro']="Upload Successful ";
				   header('location:profile.php');
            }
        }
		else
		{
			$_SESSION['msgpro']="Invalid Formet jpg,jpeg,png,gif only ";
		}
    
    }
    }
    }
    ?>
    

    

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

                        Nurse Profile </h3>

                    </div>


                </div>

            </div>
<div id="div1" style="color:red; font-size:15px; "><?php echo htmlentities($_SESSION['msgpro']); ?></div>
        </div>

	 <div class="box-content">
	

		<div class="tab-content">
		<?php $sql=mysqli_query($con,"select * from nurse where N_id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
                       





                   <form name="registration" id="registration" method="post"    accept-charset="utf-8" class="form-horizontal login100-form validate-form">
                       <div class="padded">
						


 
                               
		                
						<div class="img-wrap1">
                      <?php

$sql = "select Profile from nurse where N_id='".$_SESSION['id']."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['Profile'];
$image_src = "upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' onerror=this.src="http://localhost/smart_healthcare/images/def.jpg">

</div>

                      
					 <div class="wrap-input1 validate-input" data-validate = "minimum 3 Disit Alphabetic First Name">
						<input style="color:#000000" class="input100" type="text" name="F_Name" placeholder="First Name" id="name" tabindex=3 value="<?php echo htmlentities($data['F_Name']);?>"/>
                          <span class="focus-input100"></span>
						</div>
					  <div class="wrap-input2 validate-input" data-validate = "minimum 3 Disit Alphabetic  Last_Name">
						<input style="color:#000000" class="input100" type="text" placeholder="Last Name" name="L_Name" id="name" tabindex=4  value="<?php echo htmlentities($data['L_Name']);?>"/>
                          <span class="focus-input100"></span>
					</div>
					     <div class="wrap-input100 validate-input" data-validate = "10 character Long Address">
                         <input style="color:#000000" class="input100" type="text"  placeholder="Address" name="address"tabindex=5  value="<?php echo htmlentities($data['Address']);?>"/>
                          <span class="focus-input100"></span>
                    </div>
					
                       
					 
                       <div class="wrap-input3 validate-input" data-validate = "minimum 3 Disit Alphabetic City Name">
						<input style="color:#000000" class="input100" type="text" placeholder="City" name="city" id="name" tabindex=6  value="<?php echo htmlentities($data['City']);?>"/>
						<span class="focus-input100"></span>
						</div>
					  
                        <div class="wrap-input10 validate-input" data-validate = "Enter valid pincord">
						<input style="color:#000000" class="input100" type="text" placeholder="Pincode" name="pincode"  tabindex=7  value="<?php echo htmlentities($data['Pincode']);?>" />
						<span class="focus-input100"></span>
					</div>
					 <div class="wrap-input3 validate-input" data-validate = "Enter valid Email">
						<input style="color:#000000" class="input100" type="text" placeholder="Email" name="email" id="email" onBlur="userAvailability()" value="<?php echo htmlentities($data['Email']);?>" />
						<span class="focus-input100"></span>
						<span id="user-availability-status1" style="font-size:12px;"></span>
					</div>
			
					 <div class="wrap-input10 validate-input" data-validate = "Enter valid Phone No">
						<input style="color:#000000" class="input100" type="text" placeholder="Phone" name="phone" tabindex=8  value="<?php echo htmlentities($data['Contect']);?>"/>
						<span class="focus-input100"></span>
					</div>

                      <?php } ?>
					


                      
						<div style="margin-left:9%" class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=9>Update Pro.. </button>

                       
                  
                    
                        </div>

                    </form>                
					 


    
<div style="clear:both;color:#000000; padding:10px;">

    	<hr /><center>&copy; <?php $query=mysqli_query($con,"select Copy from admin where A_id=1");

					while($row=mysqli_fetch_array($query))
{

   echo $row['Copy'] ;

}
							 							
?></center>
</div>
                </div>                

			</div>

			<!----CREATION FORM ENDS--->

            
 <form method="post"id="upload" action="profile.php" enctype='multipart/form-data'>


<div class="wrap-input9">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <input type="file" name="file" class="login100-form-btn" tabindex=1>
 
                        </div>
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="but_upload" id="upload" class="login100-form-btn" tabindex=2>Update Pic.. </button>
                        
                        </div>
						 
                        </div>
                      
					</form>
   

	  
   

	  
 <script src="js/main.js"></script>
    <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "nurse_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	

</body>


</html>