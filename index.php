<?php
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Travel Experts</title>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body onload="setTypes()">
<!--****************************************************************-->
<!--Include two php files in order to upload header and menu bar  ---->
<!--****************************************************************-->
<?php
  include_once "header.php";
  include_once "menu.php";
?>
<!--****************************************************************-->
<!--Embedded PHP banner ---------------------------------------------->
<!--****************************************************************-->
<?php
  $currentHour=date("H");
  if ($currentHour>=0 && $currentHour<12){
    echo "<div class=\"banner\">
      <h2 class=\"greeting\" style=\"color:white;\">Good Morning</h2>
      <img src=\"images/morning.jpg\" style=\"width:100%\"/>
    </div>";
  } elseif ($currentHour>=12 && $currentHour<18) {
    echo "<div class=\"banner\" style=\"color:white;\">
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
  <!-- Block with Hot Deals ------------------------------>
  <!--****************************************************************-->
  <div class="row container-fluid" >
    <div class="col-xl-4 my-2 mr-2 bg-light hotdealcustom-div">
      <div align="center">
        <h3 class="hotDealsHeader">Bora-Bora</h3>
      </div>
      <img class="hotDeals" src="images/bora-bora.jpg">
      <p class="hotDealsContent">Bora Bora is a small South Pacific island northwest of Tahiti in French
        Polynesia. Surrounded by sand-fringed motus (islets) and a turquoise
        lagoon protected by a coral reef, it’s known for its scuba diving. It's
        also a popular luxury resort destination where some guest bungalows are
         perched over the water on stilts.</p>
    </div>

    <div class="col-xl-4 my-2 mx-4 bg-light hotdealcustom-div">
      <div align="center">
        <h3 class="hotDealsHeader">Costa-Rica</h3>
      </div>
      <img class="hotDeals" src="images/costa-rica.jpg">
      <p class="hotDealsContent">Costa Rica is a rugged, rainforested Central
        American country with coastlines on the Caribbean and Pacific. Though its capital,
        San Jose, is home to cultural institutions like the Pre-Columbian Gold Museum,
        Costa Rica is known for its beaches, volcanoes, and biodiversity.</p>
    </div>

    <div class="col-xl-4 my-2 ml-2 bg-light hotdealcustom-div">
      <div align="center">
        <h3 class="hotDealsHeader">Jamaica</h3>
      </div>
      <img class="hotDeals" src="images/jamaica.jpg">
      <p class="hotDealsContent">Jamaica, a Caribbean island nation, has a lush topography
        of mountains, rainforests and reef-lined beaches. Many of its all-inclusive
        resorts are clustered in Montego Bay, with its British-colonial architecture,
        and Negril, known for its diving and snorkeling sites.</p>
    </div>
  </div>
  <!--****************************************************************-->
  <!--Three links with Types of Vacation ---------------------------->
  <!--****************************************************************-->
  <img src="images/train.jpg" style="width:100%;margin: 5px;" />
  <h3 class="vacationTypesHeader">What Can We Offer</h3>
  <div class="row">
    <div id="vacTypesDiv" class="col-xl-4">
        <!-- Here Types Descriptions is put via main.js setTypes() function-->
    </div>
    <div class="col-xl-4">
      <img id="vacTypeImg" src="images/dummy.jpg" />
    </div>
  </div>
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
  <script src="js/main.js"></script>
</body>
</html>
