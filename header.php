<!--*** File header.php is used to insert Header to all pages ***-->

<?php

    if(isset($_SESSION["logged-in"]) && $_SESSION["logged-in"]==TRUE){
      $user = $_SESSION["login"];
      echo "<div class=\"loginBar\">$user</div>";
    }else{
    echo "<a href=\"login.php\"><div class=\"loginBar\">Log In</div></a>";}

  echo "<header class=\"headerrow\">
      <a href=\"index.php\">
      <img id=\"logo\" src=\"images/travel-agency.png\">
    </a>
    <h1 style=\"font-family:'Dancing Script', cursive, bold;font-size: 450%;
         color: darkblue; padding-left: 80px;flex:90%;\">Welcome to Travel Experts</h1>
  </header>";
 ?>
