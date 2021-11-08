<?php
session_start();
//error_reporting(0);
include('include/config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>about us</title>
<link rel="stylesheet" type="text/css" href="css/about.css">
<link rel="stylesheet" type="text/css" href="http://localhost/smart_healthcare/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/logo1.png" type="image/ico" />
<style>
.fa-facebook-square{
	color:#3b5998;
	font-size:25px;
	background-image:linear-gradient( to bottom, transparent 20%, white 20%, white 93%, transparent 93%);
	background-size:55%;
	background-position:70% 0;
	background-repeat:no-repeat;
	
}
.fa-twitter-square{
	color:#3B83BD;
	background-image:radial-gradient(at center, #fff 50%, transparent 50%);
	font-size:25px;
	
	
}
.fa-google-plus-square{
	color:red;
	background-image:radial-gradient(at center, #fff 60%, transparent 60%);
	font-size:25px;
	
	
}
.fa-instagram{
	color:transparent;
	font-size:25px;
	background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fdf497 45%, #d6249f 60%, #285AEB 90%);
	background:-webkit-radient-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
	background-clip:text;
	-webkit-background-clip:text;
}
</style>

</head>
<body>
<section id="aboutus">
<div class="container"></br></br></br></br></br></br></br>
<div class="row">
<div class="col-sm-7">
<h2 class="text-center">about us</h2>

<p>The project was started as our learning experience which
really helped us as to how deal with real world solution. This was new but
wonderful experience of professional environment and many of the tools used,
but we thought “They know enough who know how to learn.”
</p>
<p>Since we are entering details of the patients electronically in the”
SMART HEALTHCARE”, data will be secured. Using this application we can
retrieve patient’s history with a single click. Thus processing information will be
faster. It guarantees accurate maintenance of All users details. It easily reduces
the book keeping task and thus reduces the human effort and increases accuracy
speed.

</p>

<p>
	 

    	<center><a href="index.php"><img src="images/logo1.png" alt="Smart Healthcare"></a></center>
</p>
<p>
<center><a href ="https://www.facebook.com/priyank.bhingaradiya"><i class="fa fa-facebook-square"></i></a>&nbsp;
<i class="fa fa-instagram"></i>&nbsp;
<i class="fa fa-twitter-square"></i>
<i class="fa fa-google-plus-square"></i>
</center>
</p>
</div>

<div class="col-sm-5">
<div class="img-wrap">
   <?php

$sql = "select Profile from admin where A_id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['Profile'];
$image_src = "app/admin/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' >

</div>
                       
</div>
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
</section>

</body>
</html>
