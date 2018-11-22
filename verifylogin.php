<?php
  session_cache_expire(30);
  session_start();

  // check if any data arrived from login.php
  if (!isset($_REQUEST["loginPsw"])){
    $_SESSION["Message"]="Email and Password Required";
    header("location:login.php");
  }

  // Establish connevction to Database
  $server="localhost";
  $user="root";
  $password="";
  $dbname="travelexperts";
  $conn = mysqli_connect($server,$user,$password,$dbname);
  // Chaeck if conncetion to DB was successful
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    $myfile = file_put_contents('logs.txt', mysqli_connect_error(), FILE_APPEND | LOCK_EX);
    $_SESSION["Message"]="Database connection is failed";
    mysqli_close($conn);
    header("location:login.php");
  } else {
    //echo "DB connection was successful</br>";
  }

  //Store received data in separate variables
  $providedEmail = $_REQUEST["loginEmail"];
  $providedPsw = $_REQUEST["loginPsw"];

  //Build query to retrieve data from database
  $sql = "SELECT AgtPsw FROM agents WHERE AgtEmail='$providedEmail'";
  $result = mysqli_query($conn,$sql);
  $password = mysqli_fetch_array($result);

  //It requires define $_SESSION["returnpage"]
  $_SESSION["returnpage"]="agentReg.php";

  if(password_verify($providedPsw,$password[0])){
    $_SESSION["logged-in"] = TRUE;
    $_SESSION["login"] = $providedEmail;
    $returnpage=$_SESSION["returnpage"];
    unset($_SESSION["returnpage"]);
    mysqli_close($conn);
    header("location:$returnpage");
  }else{
    $_SESSION["Message"]="Email or Passwors is incorect";
    mysqli_close($conn);
    header("location:login.php");
  }

?>
