<?php 
//EMS by Mariam, Samira, Sonia
  session_start();
  
  echo "<!DOCTYPE html>\n<html><head>";

  require_once 'functions.php';

  $userstr = ' (Guest)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;


  echo "<title>$appname$userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head><body>".            
       "<div class='appname'>$appname$userstr</div>" .
	   "<script src='javascript.js'></script>";
	    
	   ;
//login page will display these
  if ($loggedin)
  {
    echo "<br ><ul class='menu'>" .
		 
         "<li><a href='mainpage.php?view=$user'>Home</a></li>" .
         "<li><a href='mainpage.php'>Maintain Employee</a></li>"         .
         "<li><a href='Display.php'>Display Employees</a></li>"         .
         "<li><a href='logout.php'>Log out</a></li></ul><br>";
  }
 //home page will display these tabs
  else
  {
    echo ("<br><ul class='menu'>" .
          "<li><a href='index.php'>Home</a></li>"                .
          "<li><a href='signup.php'>Sign up</a></li>"            .
          "<li><a href='login.php'>Log in</a></li></ul><br>"     .
          "<span class='info'>&#8658; You must be logged in to " .
          "view this page.</span><br><br>");
  }
?>
