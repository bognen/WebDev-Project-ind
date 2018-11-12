


function displayDesc(id){
  //Retreive position of active element
  var thisInput = document.getElementById(id);
  var pos = thisInput.getBoundingClientRect();
  var posY = pos.top;


  var activePar = retreivePar(id);
  document.getElementById(activePar).style.marginTop = `${posY}px`;
  document.getElementById(activePar).style.display = "block";
}

function hideDesc(id) {
  var activePar = retreivePar(id);
  document.getElementById(activePar).style.display = "none";
}

// Get id of paragraph
function retreivePar(id) {
  var activePar;
  switch (id) {
    case "fname":
      activePar = "textForFname";
      break;
    case "lname":
      activePar = "textForLname";
      break;
    case "psw":
      activePar = "textForPwd";
      break;
    case "cpsw":
      activePar = "textForCpwd";
      break;
    case "email":
      activePar = "textForEmail";
      break;
    case "phone":
      activePar = "textForPhone";
      break;
    case "age":
      activePar = "textForAge";
      break;
    case "dob":
      activePar = "textForDOB";
      break;
    case "address":
      activePar = "textForAddress";
      break;
    case "city":
      activePar = "textForCity";
      break;
    case "postal":
      activePar = "textForPostal";
      break;
    default:
      alert("Something went wrong");
      break;
  }
  return activePar;
}
