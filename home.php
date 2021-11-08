<?php
session_start();
//error_reporting(0);
include('include/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>
<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Smart Healthcare</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link rel="shortcut icon" href="images/logo1.png" type="image/ico" />
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>

<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

</head>

<body>





<div class="grid-y grid-frame">
<div class="cell cell-block-container">
<div class="cell-block-y">
  <div id="hexGridHeader">
    <div class="hexCrop">
	   <div class="main">
	   <div class="logo">
	   <img src="images/logo.png" alt="Smart Healthcare">
	   </div>
   <ul>
   <li><a href="about.php">About Us</a></li>
   
   </ul>
   </div>

      <div class="hexContainer">
	  
	           <div class="hex"></a><span><a href="app/doctor" ><i class="fas fa-user-md"></i> </a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-ambulance"></i></a></span></div>
        <div class="hex"><span><a href="app/hospital" ><i class="far fa-hospital"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-microscope"></i></a></span></div>
        <div class="hex"><span><a href="app/nurse" ><i class="fas fa-user-nurse"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="far fa-eye"></i></a></span></div>
        <div class="hex"><span><a href="app/patient" ><i class="fas fa-user-injured"></i></a></span></div>
        <div></div>
        <div class="hex"><span><a href="app/laboratory" ><i class="fas fa-flask"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-briefcase-medical"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-money-bill-alt"></i></a></span></div>
        <div></div>
        <div></div>
       <div></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-tooth"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-stethoscope"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-pills"></i></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-heartbeat"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-brain"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-thermometer"></i></a></span></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-biohazard"></i></a></span></div>
        <div class="hex"><span><a href="app/reseptionist" ><i class="fas fa-user-tie"></i></a></span></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div class="hex"><span><a href="app/admin" ><i class="fas fa-cogs"></i></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-prescription"></i></a></span></div>
        <div></div>
        <div class="hex"><span><a href="#" ><i class="fas fa-x-ray"></i></a></span></div>
        <div></div>
      </div>
      </div>
	  </br>
	  </br>
	  </br>
	  </br>
	  </br>
	  </br>
	  </br>
	     
<div style="clear:both;color:#FFFFFF; padding:10px;">

    	<hr /><center>&copy; <?php $query=mysqli_query($con,"select Copy from admin where A_id=1");

					while($row=mysqli_fetch_array($query))
{

   echo $row['Copy'] ;

}
							 							
?></center>
</div>

      </div>
        
<div id="slideshow">


    <img src="images/image1.jpg" alt="Slideshow Image 1" class="active" />
    <img src="images/image2.jpg" alt="Slideshow Image 2" />
    <img src="images/image3.jpg" alt="Slideshow Image 3" />
    <img src="images/image4.jpg" alt="Slideshow Image 4" />
    <img src="images/image5.jpg" alt="Slideshow Image 5" />
    <img src="images/image6.jpg" alt="Slideshow Image 6" />
    <img src="images/image7.jpg" alt="Slideshow Image 7" />
	
	</div>






</body>
</html>