<?php
  if (!isset($_REQUEST['agentUpdateText'])){
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!--The link below makes icons look full-->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="styles/addagentStyles.css" />
  <!--Link main.js-->
  <script type="text/javascript" src="js/main.js"></script>
  <!--<script type="text/javascript" src="js/addAgent.js"></script> -->
  <title>Update Agent</title>
<head>
<body>
  <?php
    $server="localhost";
    $user="root";
    $password="";
    $dbname="travelexperts";
    $conn = mysqli_connect($server,$user,$password,$dbname);
    $id=$_REQUEST['agentUpdateText'];

    $sql = "SELECT agents.AgentId, agents.AgtFirstName, agents.AgtMiddleInitial,
    agents.AgtLastName, agents.AgtBusPhone, agents.AgtEmail, agents.AgtPosition,
    agents.AgencyId, agencies.AgncyAddress, agencies.AgncyCity, agents.AgtPsw
    FROM agents INNER JOIN agencies ON agents.AgencyId=agencies.AgencyId
    WHERE agents.AgentId='$id'";
    include_once("functions.php");

    $result = mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
       $AgentId=$row['AgentId'];
       $AgtFirstName=$row['AgtFirstName'];
       $AgtMiddleInitial=$row['AgtMiddleInitial'];
       $AgtLastName=$row['AgtLastName'];
       $AgtBusPhone=$row['AgtBusPhone'];
       $AgtEmail=$row['AgtEmail'];
       $AgtPosition=$row['AgtPosition'];
       $AgencyId=$row['AgencyId'];
       $AgncyAddress=$row['AgncyAddress'];
       $AgncyCity=$row['AgncyCity'];
       $AgtPsw=$row['AgtPsw'];
     }
     mysqli_close($conn);
  ?>
  <div id="addAgent">
    <h4 id="addAgentHeader">Update Agent's Info</h4>
    <form id="addAgentForm" name="addAgentForm" method="POST" action="updateAgentAction.php">
        <div style="display: none">
          <input type="text" name="AgentId" id="AgentId" value="<?php echo($AgentId)?>"/>
        </div>
        <div class="row">
          <label  class="agentLabel" class="form-group col-md-4">First Name</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtFirstName" id="AgtFirstName" value="<?php echo($AgtFirstName); ?>"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Middle Initials</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtMiddleInitial" id="AgtMiddleInitial" value="<?php echo( $AgtMiddleInitial); ?>"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Last Name</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtLastName" id="AgtLastName" value="<?php echo($AgtLastName);?>"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Business Phone</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtBusPhone" id="AgtBusPhone" value="<?php echo($AgtBusPhone); ?>"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Email</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtEmail" id="AgtEmail" value="<?php echo($AgtEmail); ?>"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Title</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtPosition" id="AgtPosition" value="<?php echo($AgtPosition); ?>"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Agency</label>
          <select class="form-control" class="form-group col-md-8"
          name="AgencyId" id="AgencyId">
            <?php echo"<option value=\"$AgencyId\">$AgncyCity($AgncyAddress)</option>" ?>
            <?php
              include_once "functions.php";
              selectAgencies();
            ?>
          </select>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Title</label>
          <input type="password" class="form-control" class="form-group col-md-8"
          name="AgtPsw" id="AgtPsw" value="<?php echo($AgtPsw); ?>"/>
        </div>
        <div class="col-md-12">
          <input class="btn btn-primary btn-lg pull-right" type="submit"
          name="agentSubmit" id="agentSubmit" value="Update"/>
        </div>
    </form>
  </div>
</body>
</html>
