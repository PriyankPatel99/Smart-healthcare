<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from doctor where D_id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }

if(isset($_POST['submit']))
{	
$h_id=$_SESSION['id'];
$f_name=$_POST['F_Name'];
$l_name=$_POST['L_Name'];
$Specialist=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$contect=$_POST['phone'];

$passmd5=md5($_POST['password']);
$passsha1=sha1($passmd5);

$sql=mysqli_query($con,"insert into doctor(H_id,F_Name,L_Name,Specialist,Address,City,Pincode,Email,Contect,Password) values('$h_id','$f_name','$l_name','$Specialist','$address','$city','$pincode','$email','$contect','$passsha1')");
if($sql)
{

header('location:doctor_list.php');
  $_SESSION['msg1']="Successfully Insert Record";
  
}
 else
      {
	     $_SESSION['msg1']="Unsuccessfully . ";
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

        

        
        <title>Doctor List | Smart Healthcare</title>
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
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

                         Manage Doctor </h3>

                    </div>
 <span style="color:red; font-size:12px;"><?php echo htmlentities($_SESSION['msg1']); ?><?php echo htmlentities($_SESSION['msg1']="");?></span>	 


                </div>

            </div>

        </div>

        


        

       
     <div class="container-fluid padded">

            <div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

        	
	

            
			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					Doctor list
                    	</a></li>

			<li>

            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>

					Add Doctor
                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	 <div class="box-content">

		<div class="tab-content">

        	

            

            <!----TABLE LISTING STARTS--->
			<div class="tab-pane box active " id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div>Doctor Name</div></th>
							
                    		<th><div>Specialist</div></th>

                    		<th><div>Address</div></th>
                    		<th><div>City</div></th>

                    		<th><div>Email</div></th>

                    		<th><div>options</div></th>

						</tr>

					</thead>

                    <tbody>
					<?php
					
$sql=mysqli_query($con,"select * from doctor where H_id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

                    	
                        <tr>

                            <td><?php echo $cnt;?>.</td>

							<td><?php echo $row['F_Name' ];?></td>
							
							<td><?php echo $row['Specialist'];?></td>

							<td><?php echo $row['Address'];?></td>
							
							<td><?php echo $row['City'];?></td>

							<td><?php echo $row['Email'];?></td>

							<td align="center">

                            	

                            	<a href="doctor_list.php?id=<?php echo $row['D_id']?>&del=delete" onclick="return confirm('Are you sure you want delete this record?')"

                                	rel="tooltip" data-placement="top" data-original-title="delete" class="btn btn-red">

                                		<i class="icon-trash"></i>

                                </a>

        					</td>

                        </tr>
<?php 
$cnt=$cnt+1;
											 }?>
                        

                        
                    </tbody>

                </table>

			</div>
           
            <!----TABLE LISTING ENDS--->
   

			<!----CREATION FORM STARTS---->

			<div class="tab-pane box" id="add" style="padding: 5px">
	 <div class="box-content">
               

                   <form name="registration" id="registration" method="post"  onSubmit="return valid();" action="doctor_list.php"   accept-charset="utf-8" class="form-horizontal login100-form validate-form">
                       <div class="padded">
						



                               
		                
                        
					
                       <!-- <div class="wrap-input100 validate-input" data-validate = "select Specialist Type">
						
						 <select style="outline:none;border:none" name=""  class="input100" tabindex=1/>
                                    	<option value=""></option>
<?php $ret=mysqli_query($con,"select specilization from doctorspecilization ");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>

                                    </select>
						
						

						<span class="focus-input100" data-placeholder="Specialist"></span>
					</div>-->
					
					 <div class="wrap-input100 validate-input" data-validate = "Insert Specialist">
						<input class="input100" type="text" name="name"  tabindex=1/>
						<span class="focus-input100" data-placeholder="Specialist"></span>
						</div>
					
					
					 <div class="wrap-input10 validate-input" data-validate = "Enter valid Email">
						<input class="input100" type="text" name="email" id="email" onBlur="userAvailability()" tabindex=7 />
						<span class="focus-input100" data-placeholder="Email"></span>
						<span id="user-availability-status1" style="font-size:12px;"></span>
					</div>
					 <div class="wrap-input1 validate-input" data-validate = "minimum 3 Disit Alphabetic Doctor Name">
						<input class="input100" type="text" name="F_Name" id="name" tabindex=2 value="Dr."/>
						<span class="focus-input100" data-placeholder="First Name"></span>
						</div>
                        <div class="wrap-input10 validate-input" data-validate = "Enter valid Phone No">
						<input class="input100" type="text" name="phone" tabindex=8 />
						<span class="focus-input100" data-placeholder="Phone"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate = "minimum 3 Disit Alphabetic Doctor Last_Name">
						<input class="input100" type="text" name="L_Name" id="name" tabindex=3/>
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					
					     <div class="wrap-input100 validate-input" data-validate = "10 character Long Address">
                         <input class="input100" type="text" name="address"tabindex=4/>
                         <span class="focus-input100" data-placeholder="Address"></span>
                    </div>
					 <div class="wrap-input10 validate-input" data-validate = "Enter 4-16 Disit long Password">
  						<span class="btn-show-pass">
					    <i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" tabindex=9 />
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					   <div class="wrap-input1 validate-input" data-validate = "minimum 3 Disit Alphabetic City Name">
						<input class="input100" type="text" name="city" id="name" tabindex=5 />
						<span class="focus-input100" data-placeholder="City"></span>
						</div>
					  <div class="wrap-input10 validate-input" data-validate = "Enter 4-16 Disit long Password">
  						<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password_again" id="password_again" tabindex=10/>
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>
					   
                      
					  
                        <div class="wrap-input2 validate-input" data-validate = "Enter valid pincord">
						<input class="input100" type="text" name="pincode"  tabindex=6 />
						<span class="focus-input100" data-placeholder="Pincode"></span>
					</div>
					
			
                        <div class="form-actions">

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
                            <button type="submit" name="submit" id="submit" class="login100-form-btn" tabindex=11>Add Doctor </button>

                        </div>
                        </div>

                    </form>                

                </div>                

			</div>

			<!----CREATION FORM ENDS--->

          
		</div>

	</div>

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
    
<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "doctor_availability.php",
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