<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'yy-m-d', time () );
 


 if(isset($_POST['submit'])){
	
	
	    $pid=$_POST['patient'];
        $cid=$_POST['cid'];
        $tit=$_POST['bls'];
        $name = $_FILES['file']['name'];
		if (empty($_FILES["file"]["name"])) 
{
	$_SESSION['msg']="Select  the X_Ray";
}
else
{
        $target_dir = "xray/";
         $target_file = $target_dir .basename($_FILES["file"]["name"]);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       
        $extensions_arr = array("jpg","jpeg","png","gif");
		 $micro=round(microtime(true) * 1000);
            $pro= $micro.$name;	
       
		$result =mysqli_query($con,"SELECT img_1 FROM x_ray WHERE img_1='$pro'");
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
				$_SESSION['msg']="Image size exceeds 2MB";
				 
			}
            else
			{

                 $query ="insert into x_ray(P_id,C_id,tital_1,img_1)values('$pid','$cid','$tit','$pro')";
           
                   mysqli_query($con,$query) or die(mysqli_error($con));
            
             
                  move_uploaded_file($_FILES['file']['tmp_name'],'xray/'.$pro);
			     $_SESSION['msg']="Successfull Uploaded ";
				  header('location:addxray.php');
				 
            }
        }
		else
		{
			$_SESSION['msg']="Invalid Formet jpg,jpeg,png,gif only ";
			
			
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

        

        
        <title>Add X_Ray | Smart Healthcare</title>
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

                         Add X_Ray </h3> 

                    </div>


                </div>

            </div>
<div id="div1" style="color:red; font-size:15px; "><?php echo htmlentities($_SESSION['msg']); ?></div>
        </div>

        


        

       
    
        	

            

          
			<!----CREATION FORM STARTS---->
			 <div class="container-fluid padded">

			 

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="fas fa-x-ray"></i>  Add X_Ray
                    </span>

                </div>

               


			<div class="tab-pane box" id="add" style="padding: 5px">

                					 <div class="box-content">


                   <form  method="post"   id="upload" accept-charset="utf-8" class="form-horizontal login100-form validate-form" enctype='multipart/form-data'>
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
					
			 <div class="wrap-input100 validate-input" data-validate="Enter Proper Title">
						<input  class="input100" type="text" name="bls" id="name" tabindex=3 />
                          <span class="focus-input100" data-placeholder="X_Ray Title"></span>
						</div>
				
		
				
                    
					<div class="wrap-login100-form-btn" style="margin-left:4%" >
							<div class="login100-form-bgbtn">
							
							</div>
                            <input type="file" name="file" class="login100-form-btn" tabindex=1/>
 
                        </div>
			

                                 

                               
                        <div class="form-actions">

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="upload" class="login100-form-btn" tabindex=10>Add X_Ray </button>

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