<!DOCTYPE html>
<html>
  <head>
    <title>Display Employees</title>
    <style>
    table, th, td{
      border: 1px solid blue;
      text-align: center;
      margin-right: auto;
      margin-left: auto;
    }
  </style>
  </head>
  <body>
  	<?php
     echo "<p  class='topHead'>Display Employees</p>";
  	require_once 'header.php';
  $result = queryMysql("SELECT id, EmployeeName, Designation, ExtensionNo from Employee");
  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Designation</th><th>ExtensionNo</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["EmployeeName"]. "</td><td>" . $row["Designation"].
        "</td><td>". $row["ExtensionNo"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
<br><br>
<footer>&copy;SMS</footer>
  </body>
  </html>
