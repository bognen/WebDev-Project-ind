<!DOCTYPE html>
<html>
<head>
  <title>Travel Experts</title>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

</body>
<!--****************************************************************-->
<!--Include two php files in order to upload header and menu bar  ---->
<!--****************************************************************-->
<?php
  include_once "header.php";
  include_once "menu.php";
?>
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
      <h2 class=\"greeting\" style=\"color:darkgrey;\">Good Morning</h2>
      <img src=\"images/morning.jpg\" style=\"width:100%\"/>
    </div>";
  } elseif ($currentHour>=12 && $currentHour<18) {
    echo "<div class=\"banner\" style=\"color:black;\">
      <h2 class=\"greeting\">Good Afternoon</h2>
      <img src=\"images/afternoon.jpg\" style=\"width:100%\"/>
    </div>";
  } else {
    echo "<div class=\"banner\" style=\"color:white;\">
      <h2 class=\"greeting\">Good Evening</h2>
      <img src=\"images/evening.jpg\" style=\"width:100%\"/>
    </div>"; }
  ?>
	<!--****************************************************************-->
	<!--Register and Contact us buttons ------------------------------>
	<!--****************************************************************-->
  <div class="buttons">
    <a href="contact.php"><img src="images/contact.jpg"/></a>
    <a href="register.php"><img src="images/register.jpg"/></a>
  </div>
	<!--****************************************************************-->
	<!--PHP function which downloads footer ------------------------------>
	<!--****************************************************************-->
	<?php
	  include_once "footer.php";
	?>
</body>
</html>
