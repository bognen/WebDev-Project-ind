<!--*** OOSD - Fall 2018. CPRG-210-OSD  Dima Bognen ***-->
<!--*** File is called from agentReg.php, receives new agent object and receives it into database ***-->
<?php
// This file is called as "action" from agentReg.php

if (!isset($_REQUEST['AgtFirstName'])){
  echo "There is nothing in this file";
  header('Location: agentReg.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <!--The line below links font awesome-->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/addagentStyles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Latest compiled and minified CSS -->

  <!--The link below makes icons look full-->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="styles/addagentStyles.css" />

  <title>Register New Agent</title>
</head>
<body>
<?php
  include_once("header.php");
  include_once("menu.php");
  // Retreive data from form agentReg.php
  foreach ($_REQUEST as $name => $value) {
   $data_array[$name]=$value;
}

include_once("Agent.php");
$agent = getAgent($data_array);

// Get rid of the last element in Array as it is the button
 end($data_array);
 $lastKey = key($data_array);
 unset($data_array[$lastKey]);

//Converting our array to a string
 $stringfyArray = $agent->toString($data_array);

 //Inserting data into the database
 include_once('functions.php');
 if (insAgentViaClass($stringfyArray)===TRUE){
   $myfile = file_put_contents('logs.txt', $stringfyArray , FILE_APPEND | LOCK_EX);
   include_once("snipents/agentRegCopy.php");
   echo "<div id=\"myModal\" class=\"modal\">
     <div class=\"modal-content\">
       <span class=\"close\">&times;</span>
       <p id=\"insertAgent\">New Agent's Information has been added successfuly</p>
     </div>
   </div>";
 } else{
     echo "Data was not inserted";
 }

//This function is used to set a new element of Agent classs
function getAgent(array $data) {
    $AgentEl = new Agent();
    $AgentEl->setAgentData($data);
    return $AgentEl;
}
 ?>
// <script>
   // When the user clicks on <span> (x), close the modal and redirect user to
   // agentReg.php
   var span = document.getElementsByClassName("close")[0];
   span.onclick = function() {
       location.href ="agentReg.php";
   }
 </script>
