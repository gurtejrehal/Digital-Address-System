<?php

include "db_connect.php";

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Fullscreen Background Image Slideshow with CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../../logotitle.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link href="../../css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		<script src="../../js/jquery-3.3.1.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
    </head>
    <body id="page">
	<div class="container">
		<div id="behind">
			<ul class="cb-slideshow">
				<li><span>Image 01</span><div><h3>INDIA'S FIRST DIGITAL ADDRESSEE SYSTEM</h3></div></li>
				<li><span>Image 02</span><div><h3>GET YOUR OWN UNIQUE DIGITAL ADDRESS</h3></div></li>
				<li><span>Image 03</span><div><h3>#DigitalIndia</h3></div></li>
				<li><span>Image 04</span><div><h3>Ministry of State(IC) of Communications Department</h3></div></li>
				<li><span>Image 05</span><div><h3>#AcheDin</h3></div></li>
				<li><span>Image 06</span><div><h3>TEAM KARAMBIT</h3></div></li>
			</ul>
		</div>
		
		<div id="front">
			
				<div class="col col-2" style="margin-left:22%;margin-top:20%;">
					<div class="box"><div class="content2" style="font-family:CalibreWeb-Bold;font-size:40px">DIGITAL ADDRESS</div>
					<div class="content1"><h1 class="lead display-4" style="color:#61b4f3;"> <?php 
						if(isset($_GET['msg']))
						{
							if($_GET['msg']==0)
							{
								echo "Digital Code Already Exists";
							}
							else if($_GET['msg']==2)
							{
								echo "Some Error Occured.";
							}
							else
							{
								   $code = str_replace('%20',' ',$_GET['msg']);
								   echo $code;
							}
							
						}
						?>
						</h1></div>
						
						<a href="../../index.html" class="btn btn-secondary" style="margin-top:30px;">HOME</a>
					</div>

			
		  
			</div>
		</div>
		
       </div>
    </body>
</html>