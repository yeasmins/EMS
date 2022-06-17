<!DOCTYPE html>
<html>

  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>
<?php 
//EMS
 require_once 'functions.php';

  createTable('Member',
              'user VARCHAR(16) PRIMARY KEY,
              pass VARCHAR(16),
              INDEX(user(6))');

  createTable('Employee', 
              'id INT PRIMARY KEY,
              EmployeeName VARCHAR(20) NOT NULL,
			  Designation VARCHAR(20),
			  ExtensionNo INT
			  ');

	
	
 

?>

    <br>...done.
  </body>
</html>
