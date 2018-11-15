<?php

function insArray($tableName, $myArray){
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
      echo "DB connection was successful</br>";
    }
    //Declare variable for the loop
    $rawValue_list="";
    //Loop through received array in order create one string sutable for MySQL query
    foreach ($myArray as $field => $value) {
      $transData = "'".$value."'";
      $rawValue_list = $rawValue_list.",".$transData;
    }
    $field_list=implode(",",array_keys($myArray)); // Put all keys together in one string
    $value_list=substr($rawValue_list,1); //Subtracting the first element from generated string as getting extra ","
    $sqlInsAgert="INSERT INTO $tableName ($field_list) VALUES ($value_list)";

    //if ($conn->query($sqlInsAgert) === TRUE){
    if (mysqli_query($conn,$sqlInsAgert) === TRUE){
         echo "New record created successfully";
       } else {
        echo "Error: " . $sqlInsAgert . "<br>" . $conn->error;}

    mysqli_close($conn);
 }

// $sqlInsAgert = "INSERT INTO agents (AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail,AgtPosition)
//                 VALUES ('{$taInfo['AgtFirstName']}',
//                         '{$taInfo['AgtMiddleInitial']}',
//                         '{$taInfo['AgtLastName']}',
//                         '{$taInfo['AgtBusPhone']}',
//                         '{$taInfo['AgtEmail']}',
//                         '{$taInfo['AgtPosition']}')";

?>
