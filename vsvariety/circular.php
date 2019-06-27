<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>V&S Variety</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/vsvariety.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css">
	<link rel="stylesheet" href="css/circular.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.pack.js"></script>
	<script type="text/javascript" src="script.js"></script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<br />
	<div class="container" id="divborder">
	
		<!-- Headder -->
		<div class="container">
			<div class="six columns">
			<img src="images/vsvarietylogo.jpg" width="100%" height="100%" alt="" title="" border="0" />
			</div>
			<div>
			<h6>&nbsp;</h6>
			<h3 align="center">(207) 367-5570 </h2>
			<h4 align="center">1 Burnt Cove Road, Stonington, ME 04681</h3>
			<h6 align="center">N 44° 10' 01" </h6>
			<h6 align="center">W 68° 41' 30" </h6>
			</div>
			<hr>
			<div class="container">
				<h4>
				<a href="vsvariety.html"><div class="three columns" align="center" id="headmenu">Home</div></a>
				<a href="services.html"><div class="three columns" align="center" id="headmenu">Our Services</div></a>
				<a href="contact.html"><div class="three columns" align="center" id="headmenu">Store Hours</div></a>
				<a href="www.iecoop.org"><div class="three columns" align="center" id="headmenu">About IEC</div></a>
				</h4>
			</div>
			<hr>
		</div>
		
		<!-- Top Section -->
		<div class="container">
			<h4 align="center">WEEKLY CIRCULAR</h4>
			<h6 align="center" class="italic">Click for larger image</h6>
		</div>

		<!-- Middle Section -->
		<!-- Circular Thumbnails -->
		<div class="container">

			<?php

			$directory = 'content/circular/';

			$allowed_types=array('jpg','jpeg','gif','png');
			$file_parts=array();
			$ext='';
			$title='';
			$i=0;

			$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

			while ($file = readdir($dir_handle)) 
			{
				if($file=='.' || $file == '..') continue;
				
				$file_parts = explode('.',$file);
				$ext = strtolower(array_pop($file_parts));

				$title = implode('.',$file_parts);
				$title = htmlspecialchars($title);
				
				$nomargin='';
				
				if(in_array($ext,$allowed_types))
				{
					if(($i+1)%4==0) $nomargin='nomargin';
				
					echo '
					<div class="pic '.$nomargin.'" style="background-image:url('.$directory.'/'.$file.');">
					<a href="'.$directory.'/'.$file.'">'.$title.'</a>
					</div>';
					
					$i++;
				}
			}

			closedir($dir_handle);

			?>
			
			<div class="clear"></div>
		</div>
		
		<!-- Bottom Section -->
		<div class="container" id="menu">
			<div class="three columns" align="center"><a href="services.html#hardware">Hardware</a></div>
			<div class="three columns" align="center"><a href="services.html#crafts">Crafts</a></div>
			<div class="three columns" align="center"><a href="services.html#houseware">Houseware</a></div>
			<div class="three columns" align="center"><a href="contact.html">Contact</a></div>
			<div class="three columns" align="center"><a href="services.html#toys">Toys</a></div>
			<div class="three columns" align="center"><a href="services.html">Seasonal</a></div>
			<div class="three columns" align="center"><a href="services.html#cards">Greeting Cards</a></div>
			<div class="three columns" align="center"><a href="contact.html">Hours</a></div>
			<div class="three columns" align="center"><a href="services.html#cards">Yankee Candle</a></div>
			<div class="three columns" align="center"><a href="services.html#clothing">Clothing</a></div>
			<div class="three columns" align="center"><a href="services.html">Appliances</a></div>
			<div class="three columns" align="center"><a href="https://www.facebook.com/IECDIS?fref=ts&ref=br_tf" target="_blank">Facebook</a></div>
			<div class="three columns" align="center"><a href="services.html#balloons">Party Balloons</a></div>
			<div class="three columns" align="center"><a href="services.html#watch">Watch Repair</a></div>
			<div class="three columns" align="center"><a href="services.html#office">Printer Ink</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org/employment.html" target="_blank">Employment</a></div>
			<div class="three columns" align="center"><a href="services.html#lawn">Lawn & Garden</a></div>
			<div class="three columns" align="center"><a href="services.html#office">School Supplies</a></div>
			<div class="three columns" align="center"><a href="services.html#toys">Sporting Goods</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org" target="_blank">Co-Op</a></div>
		</div>
						
		<!-- Footer Section -->
		<div class="twelve columns" align="center">
			 <hr>
			 <footer>Copyright © 2015 Island Employee Cooperative, All rights reserved.<br />
			 V&S Variety is an Island Employee Cooperative Company.</footer>
		</div>
		
	</div><!-- container -->

<br />
	
<!-- End Document
================================================== -->
</body>
</html>