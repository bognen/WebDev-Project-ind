var errorMessage = document.getElementById('errorMessageText');
var errorMessageBlock = document.getElementById('errorMessageBody');

// The main validation function checks:
//   1. If all required fields filled
//   2. If Entered Postal Code is valid
//   3. If items 1,2 are true we trigger popup window where user can choose whether
//      proceed or not

function validation(btnname, myForm) {
   var validFields = formValidation();
   var validPO = validatePO(myForm);

   console.log(validFields);
   console.log(validPO);

   if (validFields==true && validPO==true){
     displayPopUp(btnname);
    }
 }

// Function to validate if all requred fields filled
function formValidation() {

  var fname = document.forms["regform"]["fname"].value;
  var lname = document.forms["regform"]["lname"].value;
  var email = document.forms["regform"]["email"].value;

  if (fname==null || fname==""){
      document.forms["regform"]["fname"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"First Name\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
  } else if (lname==null || lname=="") {
      document.forms["regform"]["lname"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"Last Name\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
  } else if (email==null || email=="") {
      document.forms["regform"]["email"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"Email\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
  } else{
      return true;
  }
}

// Function to validate Postal Code
function validatePO(myForm) {
  //await formValidation();
  var reg = /^[A-Z]\d[A-Z]\d[A-Z]\d$/;
  if (!reg.test(myForm.postal.value)) {
    document.forms["regform"]["postal"].style.borderColor = "#ff1a1a";
    errorMessage.innerHTML = "The postal you entered is not valid";
    errorMessageBody.style.display = "block";
    return false;
  } else{
    return true;
   }
  }

// Function to close Erroe Message
function closeErrorMessage() {
    errorMessageBody.style.display = "none";
}
