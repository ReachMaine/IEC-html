<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Burnt Cove Market</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/burntcove.css">
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
			<img src="images/bcmlogo.jpg" width="100%" height="100%" alt="" title="" border="0" />
			</div>
			<div>
			<h6>&nbsp;</h6>
			<h3 align="center">(207) 367-2681 </h2>
			<h4 align="center">1 Burnt Cove Road, Stonington, ME 04681</h3>
			<h6 align="center">N 44° 10' 01" </h6>
			<h6 align="center">W 68° 41' 30" </h6>
			</div>
			<hr>
			<div class="container">
				<h4>
				<a href="burntcove.html"><div class="three columns" align="center" id="headmenu">Home</div></a>
				<a href="services.html"><div class="three columns" align="center" id="headmenu">Our Services</div></a>
				<a href="contact.html"><div class="three columns" align="center" id="headmenu">Store Hours</div></a>
				<a href="http://www.iecoop.org/about.html" target="_blank"><div class="three columns" align="center" id="headmenu">About IEC</div></a>
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

			$directory = 'content/circular';

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
			<div class="three columns" align="center"><a href="circular.php">Circular</a></div>
			<div class="three columns" align="center"><a href="services.html#deli">Deli</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org/about.html" target="_blank">About IEC</a></div>
			<div class="three columns" align="center"><a href="http://www.facebook.com/BurntCoveMarket" target="_blank">Facebook</a></div>
			<div class="three columns" align="center"><a href="services.html#hbc">Health & Beauty</a></div>
			<div class="three columns" align="center"><a href="services.html#grocery">Grocery</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org\community.html" target="_blank">Community</a></div>
			<div class="three columns" align="center"><a href="contact.html">Contact</a></div>
			<div class="three columns" align="center"><a href="services.html#gasoline">Gas</a></div>
			<div class="three columns" align="center"><a href="services.html#produce">Produce</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org/employment.html" target="_blank">Employment</a></div>
			<div class="three columns" align="center"><a href="contact.html">Hours</a></div>
			<div class="three columns" align="center"><a href="services.html#wine">Beer & Wine</a></div>
			<div class="three columns" align="center"><a href="services.html#meat">Meat</a></div>
			<div class="three columns" align="center"><a href="services.html">Services</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org" target="_blank">Locations</a></div>
			<div class="three columns" align="center"><a href="services.html#pizza">Pizza</a></div>
			<div class="three columns" align="center"><a href="services.html#wine">Liquor</a></div>
			<div class="three columns" align="center"><a href="http://www.iecoop.org" target="_blank">Co-Op</a></div>
			<div class="three columns" align="center"><a href="contact.html">Directions</a></div>
		</div>
						
		<!-- Footer Section -->
		<div class="twelve columns" align="center">
			 <hr>
			 <footer>Copyright © 2015 Island Employee Cooperative, All rights reserved.<br />
			 Burnt Cove Market is an Island Employee Cooperative Company.</footer>
		</div>
		
	</div><!-- container -->

<br />
	
<!-- End Document
================================================== -->
</body>
</html>