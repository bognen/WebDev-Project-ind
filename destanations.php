<?php
/****OOSD - Fall 2018. CPRG-210-OSD  Dima Bognen****/
/*** Document is responsible for displaying destations page (main menu) ***/

  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Popular Destanations</title>
	<link rel="stylesheet" href="styles/destStyles.css">
  <link rel="stylesheet" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body onload="destOnLoad()">
  <?php
		include_once "header.php";
	  include_once "menu.php";
	?>
	<!--****************************************************************-->
	<!--All required data is generated onload via js/destScript.js ------->
	<!--****************************************************************-->
    <div id="myList">
			<img id="flyingPlane" src="images/plane-right.png"/>
    </div>
<script src="js/destScript.js"></script>
 <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
