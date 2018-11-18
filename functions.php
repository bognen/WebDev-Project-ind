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
                        `AgtEmail`,`AgtPosition`,`AgencyId`) VALUES (?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"ssssssi",$myArray["AgtFirstName"],$myArray["AgtMiddleInitial"],
                           $myArray["AgtLastName"],$myArray["AgtBusPhone"],$myArray["AgtEmail"],
                           $myArray["AgtPosition"],$myArray["AgencyId"]);
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
?>
