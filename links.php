<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Travel Experts</title>
	<link rel="stylesheet" href="styles.css">
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
	<header class="row">
		<a href="index.php"><img id="logo" src="images/travel-agency.png"></a>
	   	<h1>Travel Links</h1>
	</header>
    <?php
      print("<table>");
        for ($i=1;$i<=6;$i++){
          print("<tr><td class=\"linkTable\">$i</td><td class=\"linkTable\"><a href=\"dummy/page$i.php\"> Page$i.php</a></td></tr><br />");
        }
      print("</table>");
    ?>
 <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
