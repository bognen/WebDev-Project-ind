<!DOCTYPE html>
<html lang="en">
  <head>
		<!--The line below links font awesome-->
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="styles/styles.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->

		<!--The link below makes icons look full-->
		<link href="bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" type="text/css" href="styles/regformStyles.css" />
    <!--Link main.js-->
    <script type="text/javascript" src="js/onfocus.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
		<title>Registration Form</title>
	</head>
<body>

    <!--****************************************************************-->
    <!--Include two php files in order to upload header and menu bar  ---->
    <!--****************************************************************-->
    <?php
      include_once "header.php";
      include_once "menu.php";
    ?>
	  <!--************************************************************************************-->
    <!--Part responsibe for PopUp Window. Initially hidden ----------------------------------->
    <!--************************************************************************************-->
      <!-- The Submit PopUp Box -->
      <div id="popupbox" class="popupbox">
        <!-- Modal content -->
        <div class="popup-content">
          <span class="close" id="closespan" onclick="closeFunction()">&times;</span>
          <p id="popuptext">Will be changed to pop up text</p>
          <div class="row">
            <div class="form-group col-md-6">
              <button type="button" id="y-answer">Y</button>
            </div>
            <div class="form-group col-md-6">
              <button type="button" id="n-answer">N</button>
            </div>
          </div>
        </div>
      </div>
    <!--************************************************************************************-->
    <!--End of the part responsibe for PopUp Window------------------------------------------->
    <!--************************************************************************************-->
    <!--Hidden Div for registartion form hints ----------------------------------------------->
    <!--************************************************************************************-->
    <div>
      <p class="onfocuspar"  id="textForFname">Enter your first name only</p>
      <p class="onfocuspar"  id="textForLname">Enter your last name only</p>
      <p class="onfocuspar"  id="textForPwd">Create your password. It should contaon both letter and numbers</p>
      <p class="onfocuspar"  id="textForCpwd">Enter your password again</p>
      <p class="onfocuspar"  id="textForEmail">Email must be in format example@site.com</p>
      <p class="onfocuspar"  id="textForPhone">Phone number must contain numbers only</p>
      <p class="onfocuspar"  id="textForAge">Enter numbers only</p>
      <p class="onfocuspar"  id="textForDOB">Choose right date on calendar</p>
      <p class="onfocuspar"  id="textForAddress">Street addres including app number</p>
      <p class="onfocuspar"  id="textForCity">Enter city name starting with Capital letter</p>
      <p class="onfocuspar"  id="textForPostal">Postal Code should be in format: A1A1A1</p>
    </div>
    <!--************************************************************************************-->
    <!--End of Div for reg form hints -------------------------------------------------------->
    <!--************************************************************************************-->
    <!--Hidden Div for registartion Error Messagges ------------------------------------------>
    <!--************************************************************************************-->
    <div id="errorMessageBody">
      <div id="errorMessageContent">
        <span class="close" id="closeError" onclick="closeErrorMessage()">&times;</span>
        <p id="errorMessageText"> </p>
      </div>
    </div>
    <!--************************************************************************************-->
    <!-- Begining of the whole group Registrationform ---------------------------------------->
    <!--************************************************************************************-->
    <div class="wholegroup">
  	  <h4 style="text-align:center;font-weight: bold;color:white">Fill your information</h4>
  		<form name="regform" id="regForm" method="post" action="bouncer.php">
    <!--************************************************************************************-->
    <!--  First and Last Names --------------------------------------------------------------->
    <!--************************************************************************************-->
  		  <div class="form-row">
  			<div class="form-group col-md-6">
  				<label>First Name</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  					<input type="text" class="form-control" name="fname" id="fname" onfocus="displayDesc(this.id)"
                    onblur="hideDesc(this.id)" placeholder="Enter your First Name"/>
  				</div>
  			</div>
  			<div class="form-group col-md-6">
  				<label>Last Name</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
  					<input type="text" class="form-control" name="lname" id="lname" onfocus="displayDesc(this.id)"
                    onblur="hideDesc(this.id)" placeholder="Enter your Last Name"/>
  				</div>
  			</div>
  		  </div>
      <!--************************************************************************************-->
      <!--  Paaword and Confirm Password fields ------------------------------------------------>
      <!--************************************************************************************-->
  		  <div class="form-row">
  			<div class="form-group col-md-6">
  				<label>Password</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-unlock fa" aria-hidden="true"></i></span>
  					<input type="password" class="form-control" name="psw" id="psw" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Enter your Password"/>
  				</div>
  			</div>
  			<div class="form-group col-md-6">
  				<label>Confirm Password</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-unlock fa" aria-hidden="true"></i></span>
  					<input type="password" class="form-control" name="psw" id="cpsw" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Confirm your Password"/>
  				</div>
  			</div>
  		  </div>
      <!--************************************************************************************-->
      <!--  Email and Phone Number ------------------------------------------------------------->
      <!--************************************************************************************-->
  		  <div class="form-row">
  			<div class="form-group col-md-6">
  				<label>Email</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-at fa" aria-hidden="true"></i></span>
  					<input type="text" class="form-control" name="email" id="email" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Enter your Email"/>
  				</div>
  			</div>
  			<div class="form-group col-md-6">
  				<label>Phone Number</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
  					<input type="text" class="form-control" name="phone" id="phone" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Enter your Phone Number"/>
  				</div>
  			</div>
  		  </div>
      <!--************************************************************************************-->
      <!--  Age and Date of Birth -------------------------------------------------------------->
      <!--************************************************************************************-->
  		  <div class="form-row">
  			<div class="form-group col-md-6">
  				<label>Age</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-arrow-circle-up fa" aria-hidden="true"></i></span>
  					<input type="number" class="form-control" name="age" id="age" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Enter your age"/>
  				</div>
  			</div>
  			<div class="form-group col-md-6">
  				<label>Date of Birth</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-birthday-cake fa" aria-hidden="true"></i></span>
  					<input type="date" class="form-control" name="dob" id="dob" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Enter your Date of Birth"/>
  				</div>
  			</div>
  		  </div>
      <!--************************************************************************************-->
      <!--  Address line ----------------------------------------------------------------------->
      <!--************************************************************************************-->
  		  <div class="form-row">
  			<div class="form-group col-md-12">
  				<label>Street Address</label>
  				<div class="input-group">
  					<span class="input-group-addon"><i class="fa fa-address-card fa" aria-hidden="true"></i></span>
  					<input type="text" class="form-control" name="address" id="address" onfocus="displayDesc(this.id)"
                   onblur="hideDesc(this.id)" placeholder="Enter your Address"/>
  				</div>
  			</div>
  		  </div>
      <!--************************************************************************************-->
      <!--  City and Postal Code---------------------------------------------------------------->
      <!--************************************************************************************-->
          <div class="form-row">
          <div class="form-group col-md-6">
            <label>City</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-city fa" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="city" id="city" onfocus="displayDesc(this.id)"
                     onblur="hideDesc(this.id)" placeholder="City"/>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label>Postal Code</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="postal" id="postal" onfocus="displayDesc(this.id)"
                     onblur="hideDesc(this.id)" placeholder="Postal Code"/>
            </div>
          </div>
          </div>
    <!--*********************************************************************************************************************************-->
    <!-- Two button on the bottom of the form (in both cases types defined as "button" as we trigger proper function onEvent listener) ---->
    <!--*********************************************************************************************************************************-->
        <div class="form-row">
          <div class="form-group col-md-6">
            <button type="button" name="submitbtn" id="submitbtn" value="Register" onclick="validation(this.name, this.form)">Submit</button>  <!--return validate(this.form) -->
          </div>
          <div class="form-group col-md-6">
            <button type="button" name="resetbtn" id="resetbtn" value="Reset" onclick="displayPopUp(this.name)">Reset</button>
          </div>
        </div>
  		</form>
	  </div>
    <!--****************************************************************-->
    <!--PHP function which downloads footer ------------------------------>
    <!--****************************************************************-->
    <?php
      include_once "footer.php";
    ?>
    <!--************************************************************************************-->
    <!--  JavaScript---------------------------------------------------------------->
    <!--************************************************************************************-->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/onfocus.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
	</body>
</html>
