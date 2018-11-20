<?php
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
  <h1>Enter your Email and Password</h1>
  <form id="loginForm" name="loginForm" method="POST" action="verifylogin.php">
    <div class="row">
      <label>Email</label>
      <input type="text" class="form-control" id="loginEmail" name="loginEmail" />
    </div>
    <div class="row">
      <label>Password</label>
      <input class="form-control" type="password" id="loginPsw" name="loginPsw" />
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
 <footer style="font-size:12px">Copyright &copy; 2018 by Travel Experts</footer>
</body>
</html>
