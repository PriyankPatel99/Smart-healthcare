<?php
session_start();
//error_reporting(0);
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
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/val.css">

	<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/iconic/css/material-design-iconic-font.min.css">


        <link href="http://localhost/smart_healthcare/css/cssall/css/demo.css" media="screen" rel="stylesheet" type="text/css" />



       <script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>

        

        
        <title>Job / Work for Reseptionist | Smart Healthcare</title>
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

                         Add Invoice</h3>

                    </div>


                </div>

            </div>
<div id="div1" style="color:red; font-size:15px"><?php echo htmlentities($_SESSION['msg1']); ?></div>
        </div>

        


        

       
     <div class="container-fluid padded">

            <div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

            
			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="fas fa-briefcase"></i> 

					 Today Work
                    	</a></li>

			<li>

            	<a href="#pending" data-toggle="tab"><i class="fas fa-briefcase"></i>

					Pending....
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

                    		<th><div>Name</div></th>
							
                    		<th><div>Department</div></th>

                    		<th><div>Age</div></th>

                    		<th><div>Gender</div></th>
                    		<th><div>Total Payment</div></th>

                    		<th><div>Payment Status</div></th>

                    		<th><div>options</div></th>

						</tr>

					</thead>

                    <tbody>
			<?php
					
$sql=mysqli_query($con,"select a.P_id,a.C_id,p.F_Name,Specialist,TIMESTAMPDIFF(YEAR,Dob,Date) Age,Gender,Payment,Payment_status from appoinment a,patient p,doctor d where a.D_id=d.D_id and a.P_id=p.P_id and a.Date='$currentTime' and a.H_id=(select H_id from reseptionist where R_id='".$_SESSION['id']."')");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
				
                        <tr>

                            <td><?php echo $cnt;?>.</td>

							<td><?php echo $row['F_Name'];?></td>
							
							<td><?php echo $row['Specialist'];?></td>

							<td><?php echo $row['Age'];?></td>

							<td><?php echo $row['Gender'];?></td>
							
							<td><?php echo $row['Payment'];?></td>

							<td><?php echo $row['Payment_status'];?></td>

							<td align="center">

                            	

                            	<a href="bill.php?pid=<?php echo $row['P_id']?>&cid=<?php echo $row['C_id']?>"

                                	rel="tooltip" data-placement="top" data-original-title="Update Bill" class="btn btn-red">

                                	<i class="fas fa-money-bill-alt"></i>

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

				<div class="tab-pane box  " id="pending">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		
							
                    		<th><div>Name</div></th>

                    		<th><div>Department</div></th>
							<th><div>Gender</div></th>


                    		<th><div>Date</div></th>
                    		<th><div>Time</div></th>
                    		
                    		<th><div>Payment</div></th>

                    		<th><div>options</div></th>

						</tr>

					</thead>
					

                    <tbody>
					<?php
					
$sql=mysqli_query($con,"select a.P_id,a.C_id,p.F_Name,Date,Time,Specialist,Gender,Payment from appoinment a,patient p,doctor d where Payment_status='Unpaid' and a.D_id=d.D_id and a.P_id=p.P_id and a.H_id=(select H_id from reseptionist where R_id='".$_SESSION['id']."')");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

                    	
                        <tr>

                            <td><?php echo $cnt;?>.</td>

							<td><?php echo $row['F_Name'];?></td>
							
							<td><?php echo $row['Specialist'];?></td>

							<td><?php echo $row['Gender'];?></td>

							<td><?php echo $row['Date'];?></td>
							
							<td><?php echo $row['Time'];?></td>

							<td><?php echo $row['Payment'];?></td>

							<td align="center">

                            	

                            	<a href="bill.php?pid=<?php echo $row['P_id']?>&cid=<?php echo $row['C_id']?>" rel="tooltip" data-placement="top" data-original-title="Add Expected bill amount" class="btn btn-red"><!--?id=<?php echo $row['H_id']?>&del=delete" onclick="return confirm('Are you sure you want delete this record?')"-->

                                	

                                		<i class="fas fa-money-bill-alt"></i>


                                </a>

        					</td>

                        </tr>
<?php 
$cnt=$cnt+1;
											 }?>
                        

                        
                    </tbody>

                </table>

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
url: "hospital_availability.php",
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