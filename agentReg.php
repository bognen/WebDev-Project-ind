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
  <script type="text/javascript" src="js/addAgent.js"></script>
  <title>Register New Agent</title>
</head>

<body>
	<?php
		include_once "header.php";
	  include_once "menu.php";
	?>
  <!--************************************************************************************-->
  <!--Hidden Div for registartion Error Messagges ------------------------------------------>
  <!--************************************************************************************-->
  <div id="addAgeErMessageBody">
    <div id="addAgEMessageContent">
      <span class="close" id="closeError" onclick="closeErrorMessage()">&times;</span>
      <p id="addAgErrorMessageText"> </p>
    </div>
  </div>
  <!--************************************************************************************-->
  <!-- Main form ------------------------------------------>
  <!--************************************************************************************-->
  <div id="addAgent">
    <h4 id="addAgentHeader">Enter New Agent's Info</h4>
    <form id="addAgentForm" name="addAgentForm" method="POST" action="test.php">
        <div class="row">
          <label  class="agentLabel" class="form-group col-md-4">First Name</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtFirstName" id="AgtFirstName" placeholder="Enter your Agent's First Name"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Middle Initials</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtMiddleInitial" id="AgtMiddleInitial" placeholder="Enter your Agent's Middle Initial"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Last Name</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtLastName" id="AgtLastName" placeholder="Enter your Agent's Last Name"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Business Phone</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtBusPhone" id="AgtBusPhone" placeholder="Enter your Agent's Business Phone"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Email</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtEmail" id="AgtEmail" placeholder="Enter your Agent's Email"/>
        </div>
        <div class="row">
          <label class="agentLabel" class="form-group col-md-4">Title</label>
          <input type="text" class="form-control" class="form-group col-md-8"
          name="AgtPosition" id="AgtPosition" placeholder="Enter your Agent's Title"/>
        </div>
        <input class="btn btn-primary btn-lg pull-right" type="submit"
        name="agentSubmit" id="agentSubmit" value="Register"  onclick="return addAgentValidation(this.form)"/>
    </form>
  </div>
  <?php
 		include_once "footer.php";
 	?>
  <script type="text/javascript" src="js/addAgent.js"></script>
</body>
</html>
