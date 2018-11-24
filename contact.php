<?php
/****OOSD - Fall 2018. CPRG-210-OSD  Dima Bognen****/
/*** Document is responsible for displaying Contact Us page ***/

  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Travel Experts</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
  <?php
		include_once "header.php";
	  include_once "menu.php";
	?>
	<!--***********************************************************************-->
	<!--Visit Us block with company address and Phone --------------------------->
	<!--***********************************************************************-->
	<h4>VISIT US</h4>
		<p>2115 W Farwell Ave, Chicago, IL, 60645</p>
		<p>or call us</p>
		<p>Tel: 1 (800) 839 3815</p>
	<!--***********************************************************************-->
	<!--Our Team block with infomation on particular employees ------------------>
	<!--***********************************************************************-->
	<h4>OUR TEAM</h4>
	<ul class="mainrow">
		<li>Igor Babak
			<ul class="secrow">
				<li class="location">Location: Chicago</li>
				<li class="tel">Tel: 773 632 1514</li>
			</ul>
		</li>
		<li>Sam Schesnick
			<ul class="secrow">
				<li class="location">Location: Schamburg</li>
				<li class="tel">Tel: 773 618 9874</li>
			</ul>
		</li>
		<li>Viktor Saurez
			<ul class="secrow">
				<li class="location">Location: Hana</li>
				<li class="tel">Tel: 607 102 2257`</li>
			</ul>
		</li>
	</ul>
		<!--***********************************************************************-->
  <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
