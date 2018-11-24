<!--*** OOSD - Fall 2018. CPRG-210-OSD  Dima Bognen ***-->
<!--*** File is responsible for displaying Links page from main manu ***-->
<?php
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Travel Sites</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <style>
    table {
      border-collapse: collapse;
    }
    table, td {
    border: 1px solid black;
    margin: 15px;
    padding: 15px;
}
  </style>
</head>
<body>
  <?php
		include_once "header.php";
	  include_once "menu.php";
		include_once "variables.php";

      print("<table>");
				$i=1;
				foreach ($travelSites as $site => $siteLink){
					print("<tr><td class=\"linkTable\">$i</td><td class=\"linkTable\">
								 <a href=\"$siteLink\" target=\"_blank\">$site</a></td></tr><br />");
					$i++;
				}
      print("</table>");
    ?>
 <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
