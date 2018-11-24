// ****    OOSD - Fall 2018. CPRG-210-OSD  Dima Bognen    ***//
// ****    This file is called from index.php and register.php files and manages     ***//
// ****    pop up windows on registration page and changing popular destanations on main page   ***//

  //*************************************//
  //** Span element (to close PopUp)   **//
  //*************************************//
  var span = document.getElementsByClassName("close")[0];

  //*************************************//
  //**  Get Pop Up Window and Content  **//
  //*************************************//
  var popupbox = document.getElementById('popupbox');
  var contenttext = document.getElementById('popuptext');

  //*************************************//
  //**  Get buttons  **//
  //*************************************//
  var ybutton = document.getElementById("y-answer");
  var nbutton = document.getElementById("n-answer");

  //*********************************************************//
  //** Function creates Pop up Window **//
  //*********************************************************//
  function displayPopUp(btnname) {
    // Checks if clicked button is Submit
    if (btnname=="submitbtn"){
      contenttext.innerHTML = "You are about to submit your application. Do you want to proceed?";
      ybutton.innerHTML = "Proceed";
      nbutton.innerHTML = "Cancel";

      ybutton.setAttribute("onclick","confirmFunc()");
      nbutton.setAttribute("onclick","closeFunction()");
      popupbox.style.display = "block";
      // Checks if clicked button is Reset
    } else if (btnname=="resetbtn") {
      contenttext.innerHTML = "Do you really want to clear your application?";
      ybutton.innerHTML = "Clear";
      nbutton.innerHTML = "No";

      ybutton.setAttribute("onclick","clearForm()");
      nbutton.setAttribute("onclick","closeFunction()");
      popupbox.style.display = "block";
    }
  }

  //*********************************************************//
  //** When the user clicks on <span> (x), close the PopUp **//
  //*********************************************************//
  function closeFunction() {
      popupbox.style.display = "none";
  }

  //*********************************************************//
  //** Function triggers Form.reset method **//
  //*********************************************************//
  function clearForm() {
      document.getElementById("regForm").reset();
      closeFunction();
  }

  //*********************************************************//
  //** When the user clicks on <span> (x), close the PopUp **//
  //*********************************************************//
  function confirmFunc(){
    document.getElementById("regForm").submit();
  }

  //*********************************************************//
  //** Onmouse over function form index page **//
  //*********************************************************//
  var types = ["Tropical Vacation","Mountain Adventure","Ocean Cruises"];
  var typeImage = new Array;
  typeImage[0] = new Image();
  typeImage[0].src = "images/zanzibar.jpg"

  typeImage[1] = new Image();
  typeImage[1].src = 'images/swiss_alps.jpg';

  typeImage[2] = new Image();
  typeImage[2].src = 'images/cruise.jpg';

  var typeUrl = ["https://www.islands.com/20-best-caribbean-beach-resorts",
                 "https://crmr.com/",
                 "https://www.royalcaribbean.com/"];

  function setTypes(){
    for (i=0; i<types.length; i++) {
      var typeDiv = document.createElement("DIV");
      typeDiv.setAttribute("class","vacationTypesDesc");
      var textnode = document.createTextNode(types[i]);
      typeDiv.appendChild(textnode);
      typeDiv.setAttribute("onmouseover",`changeType(${i})`);
      document.getElementById("vacTypesDiv").appendChild(typeDiv);
    }
  }

  function changeType(index){
    var img = document.getElementById("vacTypeImg");
    img.setAttribute("onclick",`window.open("${typeUrl[index]}")`);
    img.src = typeImage[index].src;
  }
