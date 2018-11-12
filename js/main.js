  //Span element (to close PopUp)
  var span = document.getElementsByClassName("close")[0];

  //Get Pop Up Window and Content
  var popupbox = document.getElementById('popupbox');
  var contenttext = document.getElementById('popuptext');

  //Get buttons
  var ybutton = document.getElementById("y-answer");
  var nbutton = document.getElementById("n-answer");

  function displayPopUp(btnname) {

    if (btnname=="submitbtn"){
      contenttext.innerHTML = "You are about to submit your application. Do you want to proceed?";
      ybutton.innerHTML = "Proceed";
      nbutton.innerHTML = "Cancel";

      ybutton.setAttribute("onclick","confirmFunc()");
      nbutton.setAttribute("onclick","closeFunction()");
      popupbox.style.display = "block";
    } else if (btnname=="resetbtn") {
      contenttext.innerHTML = "Do you really want to clear your application?";
      ybutton.innerHTML = "Clear";
      nbutton.innerHTML = "No";

      ybutton.setAttribute("onclick","clearForm()");
      nbutton.setAttribute("onclick","closeFunction()");
      popupbox.style.display = "block";
    }
  }



  // When the user clicks on <span> (x), close the PopUp
  function closeFunction() {
      popupbox.style.display = "none";
  }

  function clearForm() {
      document.getElementById("regForm").reset();
      closeFunction();
  }

  function confirmFunc(){
    document.getElementById("regForm").submit();
  }

/*****************************************************************************/
// Validation function
/*****************************************************************************/
