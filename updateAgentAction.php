<?php
  if (!isset($_REQUEST['AgentId'])){
    echo "There is nothing in this file";
    header('Location: agentReg.php');
  }
  //Establish connection to DB
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
  } else {
    //echo "DB connection was successful</br>";
  }

  // Check if Password on Update page has been hashed (it is not hashed only in case
  // only when user updated password as well). If it is NOT we encrypt it
  $pswCheck = password_get_info($_REQUEST['AgtPsw']);
  if (!$pswCheck['algoName'] == 'unknown'){
    $AgtPsw = mysqli_real_escape_string($conn,$_REQUEST['AgtPsw']);
} else{
    $rawAgtPsw = mysqli_real_escape_string($conn,$_REQUEST['AgtPsw']);
    $AgtPsw=password_hash($rawAgtPsw,PASSWORD_BCRYPT);
}

  //Get and screen all data from post functions
  $AgentId = (int)($_REQUEST['AgentId']);
  $AgtFirstName = mysqli_real_escape_string($conn,$_REQUEST['AgtFirstName']);
  $AgtMiddleInitial = mysqli_real_escape_string($conn,$_REQUEST['AgtMiddleInitial']);
  $AgtLastName = mysqli_real_escape_string($conn,$_REQUEST['AgtLastName']);
  $AgtBusPhone = mysqli_real_escape_string($conn,$_REQUEST['AgtBusPhone']);
  $AgtEmail = mysqli_real_escape_string($conn,$_REQUEST['AgtEmail']);
  $AgtPosition = mysqli_real_escape_string($conn,$_REQUEST['AgtPosition']);
  $AgencyId = mysqli_real_escape_string($conn,$_REQUEST['AgencyId']);


  $sql = "UPDATE agents SET AgentId='$AgentId', AgtFirstName='$AgtFirstName',
  AgtMiddleInitial='$AgtMiddleInitial',AgtLastName='$AgtLastName',
  AgtBusPhone='$AgtBusPhone',AgtEmail='$AgtEmail',AgtPosition='$AgtPosition',
  AgencyId='$AgencyId', AgtPsw='$AgtPsw' WHERE AgentId='$AgentId'";

  if ($conn->query($sql) === TRUE) {
    mysqli_close($conn);
    // header('Location: agentReg.php');
    // The PopUp Box which is being shown for 2.5 sec
    echo
   "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/upDateAgent.css\" />
    <div id=\"updateAgentPopup\" class=\"updateAgentPopup\">
        <div class=\"updateAgentPopup-content\">
        <p>Record updated successfully</p>
      </div>
    </div>";
    echo "<script>setTimeout(\"location.href='agentReg.php';\",2500);</script>";
} else {
    echo "Error updating record: " . $conn->error;
    mysqli_close($conn);
    header('Location: agentReg.php');
}
//  <span class="closeAgUpdate" id="closeAgUpdate" onclick="closeFunction()">&times;</span>
?>
