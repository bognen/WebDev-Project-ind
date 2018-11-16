// Declare arrays and variables
var decription = new Array("Cancun, Mexico",
                           "Punta-Cana, Dominican Republic",
                           "Rio-De-Janeiro, Brazil",
                           "Banff, Canada");

//URL
var urlArray = new Array("https://wikitravel.org/en/Cancun",
                         "https://wikitravel.org/en/Punta_Cana",
                         "https://wikitravel.org/en/Rio_de_Janeiro",
                         "https://wikitravel.org/en/Banff");
// IMAGES
var images = new Array();

images[0] = new Image();
images[0].src = "images/cancun.jpg"

images[1] = new Image();
images[1].src = 'images/punta-cana.jpg';

images[2] = new Image();
images[2].src = 'images/rio-de-janeiro.jpeg';

images[3] = new Image();
images[3].src = 'images/banff.jpg';

var image; //Variable for showImage() function
var newWindow;
//***************************************************************************//
//** Function below creates list of descriptions along with images ang URLs**//
//***************************************************************************//
function printContent(){
  for (i=0; i<decription.length; i++){
    var newDivWrap = document.createElement("DIV");
    newDivWrap.setAttribute("id", `flexdiv${i}`);
    newDivWrap.setAttribute("class", "flexdiv");
    document.getElementById("myList").appendChild(newDivWrap)

      // Create a text element and add to wrap div
      var descDiv = document.createElement("DIV");
      descDiv.setAttribute("class","decription");
      var textnode = document.createTextNode(decription[i]);
      descDiv.appendChild(textnode);
      document.getElementById(`flexdiv${i}`).appendChild(descDiv);
      descDiv.setAttribute("onmouseover",`showImage(${i})`);
      descDiv.setAttribute("onmouseout",`hideImage(${i})`);
      descDiv.setAttribute("onclick",`openNewWind("${urlArray[i]}")`);
      descDiv.setAttribute("title","Click to Find Out More");

      // Create an image elementand add to wrap div
      var imgDiv = document.createElement("DIV");
      imgDiv.setAttribute("class","imagesDiv");
      var image = document.createElement("IMG");
      image.setAttribute("class","imagesArray");
      image.setAttribute("src", "");
      image.style.visibility = "hidden";
      imgDiv.appendChild(image);
      document.getElementById(`flexdiv${i}`).appendChild(imgDiv);


  }
}
//***************************************************************************//
//** Funtcion which triggers onmouseover*//
//***************************************************************************//
 function showImage(index){
   document.getElementsByClassName("imagesArray")[index].style.visibility = "visible";
   document.getElementsByClassName("imagesArray")[index].src = images[index].src;
 }
 //***************************************************************************//
 //** Funtcion which triggers onmouseout**//
 //***************************************************************************//
 function hideImage(index){
   document.getElementsByClassName("imagesArray")[index].style.visibility = "hidden";
   document.getElementsByClassName("imagesArray")[index].src = "";
 }
 //***************************************************************************//
 //** Funtcion which opens a new window and closes it in 30 sec**//
 //***************************************************************************//
 function openNewWind(myUrl){
   newWindow = window.open(myUrl);
   setTimeout(closeWindow, 30000, newWindow);
 }
 //***************************************************************************//
 //** Funtcion which closes a new window**//
 //***************************************************************************//
 function closeWindow(newWindow){
   newWindow.close();
 }
 //***************************************************************************//
 //** Funtcion which moves the plane image**//
 //***************************************************************************//
 var pos = 0;
 var goRight = true;
 var planeImg = document.getElementById("flyingPlane");

 function planeIntervals(){
   setInterval(movePlane,50);
 }

 function movePlane(){

   if (goRight){
     pos += 5;
     if (pos > window.innerWidth)  {
       goRight = false;
       planeImg.src = "images/plane-left.png"
     }
   } else{
     pos -= 5;
     if (pos < 0){
       goRight = true;
       planeImg.src = "images/plane-right.png"
     }
   }
   planeImg.style.left = pos + "px";
   //console.log(pos);
 }
 //***************************************************************************//
 //** Funtcion called onload**//
 //***************************************************************************//
function destOnLoad(){
  printContent();
  planeIntervals();
}
