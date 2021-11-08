<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html>

    <head>

        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/css/all.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/cssall/css/font.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/app.css">
		<link rel="stylesheet" href="http://localhost/smart_healthcare/css/pro.css">
	<link rel="shortcut icon" href="http://localhost/smart_healthcare/images/logo1.png" type="image/ico" />


        <link href="http://localhost/smart_healthcare/css/cssall/css/demo.css" media="screen" rel="stylesheet" type="text/css" />



        <script src="http://localhost/smart_healthcare/css/cssall/js/demo.js" type="text/javascript"></script>

        

        

        
        <title>Nurse dashboard | Smart Healthcare</title>

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

                        Nurse dashboard </h3>

                    </div>


                </div>

            </div>

        </div>

        


		
	
  <div id="hexGridHeader">
    <div class="hexCrop">
	      <div class="hexContainer">
	  
	  
	  
         <div class="hex"></a><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="http://localhost/smart_healthcare/app/document/addxray.php" ><i class="fas fa-x-ray" style="font-size:70%"></i></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-procedures" style="font-size:70%"></i></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div></div>
        <div></div>
       <div></div>
        <div class="hex"><span><a href="#"></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div class="hex"><span><a href="nprescription.php" ><i class="fas fa-prescription" style="font-size:70%"></i></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-flask" style="font-size:70%"></i></a></span></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-laptop-medical" style="font-size:70%"></i></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div></div>
        <div></div>
     
      </div>
      </div>
   
    

    



  
	  
      

  

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