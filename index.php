<?php //db YU
//this is the page that is first to be executed
  echo "<p class='topHead'>Home Page</p>";
  require_once 'header.php';
  
  echo "<br><span class='main'>Welcome to $appname,";

  if ($loggedin) echo " $user, you are logged in.";
  else           echo ' please sign up and/or log in to join in.';
?>

    </span><br><br>
  </body>
</html>
