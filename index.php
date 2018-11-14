<!DOCTYPE html>
<html>
<head>
	<title>Travel Experts</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header class="row">
    	<a href="index.php">
		  <img id="logo" src="images/travel-agency.png">
		</a>
		<h1>Welcome to Travel Experts</h1>
	</header>
	<!--****************************************************************-->
	<!--Navigation bar --------------------------------------------------->
	<!--****************************************************************-->
	  <nav>
		<a class="navbar" href="">VACATIONS</a>
		<a class="navbar" href="">FLIGHTS</a>
		<a class="navbar" href="links.php">CRUISES</a>
		<a class="navbar" href="destanations.php">DESTANATIONS</a>
		<a class="navbar" href="template.php">WEDDINGS</a>
	  </nav>
	<br />
	<!--****************************************************************-->
	<!--Second Line: Row of Images --------------------------------------->
	<!--****************************************************************-->
	<div class="row">
		<div class="indeximage">
			<img src="images/zanzibar.jpg" style="width:100%"/>
		</div>
		<div class="indeximage">
			<img src="images/swiss_alps.jpg" style="width:100%"/>
		</div>
		<div class="indeximage">
			<img src="images/cruise.jpg" style="width:100%"/>
		</div>
	</div>
	<!--****************************************************************-->
	<!--Embedded PHP banner ---------------------------------------------->
	<!--****************************************************************-->
	<?php
		$currentHour = date("H");
		if ($currentHour>=0 && $currentHour<12){
			echo "<div class=\"banner\">
				<h2 class=\"greeting\">Good Morning</h2>
				<img src=\"images/morning.jpg\" style=\"width:100%\"/>
			</div>";
		} elseif ($currentHour>=12 && $currentHour<18) {
			echo "<div class=\"banner\">
				<h2 class=\"greeting\">Good Afternoon</h2>
				<img src=\"images/afternon.jpg\" style=\"width:100%\"/>
			</div>";
		} else {
			echo "<div class=\"banner\">
				<h2 class=\"greeting\">Good Evening</h2>
				<img src=\"images/evening.jpg\" style=\"width:100%\"/>
			</div>";
		}
	?>
	<!--****************************************************************-->
	<!--Contact Us and Register buttons ---------------------------------->
	<!--****************************************************************-->
	<div class="buttons">
		<a href="contact.php"><img src="images/contact.jpg"/></a>
		<a href="register.php"><img src="images/register.jpg"/></a>
	</div>

  <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
