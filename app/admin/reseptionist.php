<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from reseptionist where R_id = '".$_GET['id']."'");
                  $_SESSION['msgres']="Record deleted !!";
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

        

        
        <title>Reseptionist | Smart Healthcare</title>
		<script type="text/javascript">
		function showIt(){
   document.getElementById("div1").style.visibility="hidden";
  }
  setTimeout("showIt()",2000);
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

                         Manage Reseptionist </h3>

                    </div>


                </div>

            </div>
<div id="div1" style="color:red; font-size:15px"><?php echo htmlentities($_SESSION['msgres']); ?></div>
        </div>

        


        

       
     <div class="container-fluid padded">

                    <div class="box">
                <div class="box-header">

                    <span class="title">

                       <i class="fas fa-user-tie"></i> Reseptionist list
                    </span>

               
              
                </div>
			<div class="tab-pane box active " id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div>Reseptionist Name</div></th>
							
                    		<th><div>Address</div></th>
							
                    		<th><div>City</div></th>

                    		<th><div>Email</div></th>

                    		<th><div>options</div></th>

						</tr>

					</thead>

                    <tbody>
					<?php
					
$sql=mysqli_query($con,"select * from reseptionist");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

                    	
                        <tr>

                            <td><?php echo $cnt;?>.</td>

							<td><?php echo $row['F_Name'];?></td>
						

							<td><?php echo $row['Address'];?></td>
							
							<td><?php echo $row['City'];?></td>

							<td><?php echo $row['Email'];?></td>

							<td align="center">



                            	<a href="reseptionist.php?id=<?php echo $row['R_id']?>&del=delete" onclick="return confirm('Are you sure you want delete this record?')"

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