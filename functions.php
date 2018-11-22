<?php

function insArray($myArray){
    $server="localhost";
    $user="root";
    $password="";
    $dbname="travelexperts";

    $conn = mysqli_connect($server,$user,$password,$dbname);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      //echo "DB connection was successful</br>";
    }
    $sql = "INSERT INTO `agents`(`AgtFirstName`,`AgtMiddleInitial`,`AgtLastName`,`AgtBusPhone`,
                        `AgtEmail`,`AgtPosition`,`AgencyId`,`AgtPsw`) VALUES (?,?,?,?,?,?,?,?)";

    //Sanitazing data (except password as itis encrypted) before input it into DataBase
    $AgtFirstName=mysqli_real_escape_string($conn,$myArray["AgtFirstName"]);
    $AgtMiddleInitial=mysqli_real_escape_string($conn,$myArray["AgtMiddleInitial"]);
    $AgtLastName=mysqli_real_escape_string($conn,$myArray["AgtLastName"]);
    $AgtBusPhone=mysqli_real_escape_string($conn,$myArray["AgtBusPhone"]);
    $AgtEmail=mysqli_real_escape_string($conn,$myArray["AgtEmail"]);
    $AgtPosition=mysqli_real_escape_string($conn,$myArray["AgtPosition"]);
    $AgencyId=mysqli_real_escape_string($conn,$myArray["AgencyId"]);

    //Hash the value of a Password
    $hasedPassword = password_hash($myArray["AgtPsw"], PASSWORD_BCRYPT);

    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"ssssssis",$AgtFirstName,$AgtMiddleInitial,
                           $AgtLastName,$AgtBusPhone,$AgtEmail, $AgtPosition,
                           $AgencyId,$hasedPassword);
    $result=mysqli_execute($stmt);

    if(!$result){
      $error_mes = mysqli_stmt_error($stmt);
      $myfile = file_put_contents('logs.txt', $error_mes , FILE_APPEND | LOCK_EX);
      return false;
    } else{
      return true;
    }


   mysqli_close($conn);
 }

function selectAgencies(){
  $server="localhost";
  $user="root";
  $password="";
  $dbname="travelexperts";

  $conn = mysqli_connect($server,$user,$password,$dbname);
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    $myfile = file_put_contents('logs.txt', mysqli_connect_error(), FILE_APPEND | LOCK_EX);
  } else {
    //echo "DB connection was successful</br>";
  }

  $sql="SELECT `AgencyId`,`AgncyAddress`,`AgncyCity` FROM `agencies`";
  $result = mysqli_query($conn,$sql);

  while($row=mysqli_fetch_assoc($result)){
    //echo($row["AgncyAddress"]);
    echo("<option value=\"$row[AgencyId]\">$row[AgncyCity]($row[AgncyAddress])</option>");
  }

  mysqli_close($conn);
}

function insAgentViaClass($myString){
    $server="localhost";
    $user="root";
    $password="";
    $dbname="travelexperts";

    $conn = mysqli_connect($server,$user,$password,$dbname);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      //echo "DB connection was successful</br>";
    }
    $sql = "INSERT INTO `agents`(`AgtFirstName`,`AgtMiddleInitial`,`AgtLastName`,`AgtBusPhone`,
                        `AgtEmail`,`AgtPosition`,`AgencyId`,`AgtPsw`) VALUES ($myString)";

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      return TRUE;
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      return FALSE;
    }

   mysqli_close($conn);
 }
?>
