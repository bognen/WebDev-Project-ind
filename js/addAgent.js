// *****************************************************************//
/// *** Function is meant to validate data before inserting into MySQL ***///
// *****************************************************************//
var errorMessage = document.getElementById('addAgErrorMessageText');
var errorMessageBody = document.getElementById('addAgeErMessageBody');

function addAgentValidation(myForm) {

  var fname = document.forms["addAgentForm"]["AgtFirstName"].value;
  var lname = document.forms["addAgentForm"]["AgtLastName"].value;
  var phone = document.forms["addAgentForm"]["AgtBusPhone"].value;
  var email = document.forms["addAgentForm"]["AgtEmail"].value;
  var title = document.forms["addAgentForm"]["AgtPosition"].value;


  if (fname==null || fname==""){
      document.forms["addAgentForm"]["AgtFirstName"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"First Name\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
   } else if (lname==null || lname=="") {
      document.forms["addAgentForm"]["AgtLastName"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"Last Name\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
    } else if (phone==null || phone=="") {
      document.forms["addAgentForm"]["AgtBusPhone"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"Phone\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
    } else if (email==null || email=="") {
      document.forms["addAgentForm"]["AgtEmail"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"Email\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
    } else if (title==null || title=="") {
      document.forms["addAgentForm"]["AgtPosition"].style.borderColor = "#ff1a1a";
      errorMessage.innerHTML = "Required field \"Title\" is not filled";
      errorMessageBody.style.display = "block";
      return false;
  } else{
      return true;
  }
}
// Function to close popup message
function closeErrorMessage() {
    errorMessageBody.style.display = "none";
}
