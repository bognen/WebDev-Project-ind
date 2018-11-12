
var decription = new Array("Cancun, Mexico",
                           "Punta-Cana, Dominican Republic",
                           "Rio-De-Janeiro, Brazil",
                           "Banff, Canada");
var images = new Array();

images[0] = new Image();
images[0].src = "images/cancun.jpg"

images[1] = new Image();
images[1].src = 'images/punta-cana.jpg';

images[2] = new Image();
images[2].src = 'images/rio-de-janeiro.jpeg';

images[3] = new Image();
images[3].src = 'images/banff.jpg';

//Variables for showImage function
var image;
var i;

function printContent(){
  for (i=0; i<decription.length; i++){
    var newDivWrap = document.createElement("DIV");
    newDivWrap.setAttribute("id", `flexdiv${i}`);
    newDivWrap.setAttribute("class", "flexdiv");
    document.getElementById("myList").appendChild(newDivWrap)

      var newDiv2 = document.createElement("DIV");
      newDiv2.setAttribute("class","decription");
      var textnode = document.createTextNode(decription[i]);
      newDiv2.appendChild(textnode);
      document.getElementById(`flexdiv${i}`).appendChild(newDiv2);

      var newDiv = document.createElement("DIV");
      newDiv.setAttribute("class","imagesDiv");
      var image = document.createElement("IMG");
      image.setAttribute("class","imagesArray");
      image.setAttribute("src", "");
      image.style.visibility = "hidden";
      newDiv.appendChild(image);
      document.getElementById(`flexdiv${i}`).appendChild(newDiv);

     newDiv2.setAttribute("onmouseover",`showImage(${i})`);
     newDiv2.setAttribute("onmouseout",`hideImage(${i})`);
  }
}

 function showImage(index){
   document.getElementsByClassName("imagesArray")[index].style.visibility = "visible";
   document.getElementsByClassName("imagesArray")[index].src = images[index].src;
 }

 function hideImage(index){
   document.getElementsByClassName("imagesArray")[index].style.visibility = "hidden";
   document.getElementsByClassName("imagesArray")[index].src = "";
 }
