<?php
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Travel Experts</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/loginStyles.css">
  <!--The line below links font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!--The link below makes icons look full-->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
	<?php
		include_once "header.php";
	  include_once "menu.php";
	?>
  <div class="loginGroup">
  <h3 id="loginHeader">Enter your Email and Password</h3>
  <form id="loginForm" name="loginForm" method="POST" action="verifylogin.php">
    <div class="row loginRow">
      <div class="col-lg-4">
        <label>Email</label>
      </div>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="loginEmail" name="loginEmail" />
      </div>
    </div>
    <div class="row loginRow">
      <div class="col-lg-4">
       <label>Password</label>
     </div>
      <div class="col-lg-8">
       <input class="form-control" type="password" id="loginPsw" name="loginPsw" />
     </div>
    </div>
    <input type="submit" class="btn btn-primary btn-lg pull-right"
            id="loginSubmit" name="loginSubmit" value="Submit"/>
  </form>
  <?php
    if (isset($_SESSION["message"])){
      print($_SESSION["message"]);
      $_SESSION["message"] = "";
    }
  ?>
</div>
 <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
