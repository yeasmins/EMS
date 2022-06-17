<?php 
//EMS by Mariam, Samira and Sonia
 echo "<p  id = 'btnHead' class='topHead'>Main Page</p>";
//this is the file the user will be lead to
//upon clicking on click here in the successful login page
  require_once 'header.php';
   if(isset($_POST['update'])){
	echo "<script> document.getElementById('btnHead').innerHTML = 'Update Page';</script>";
  if (
	  isset($_POST['id'])   &&
      isset($_POST['name'])    &&
      isset($_POST['designation']) &&
      isset($_POST['noExt']))
  {// taking them to temporary variables before modifying
  //this is a good programming practice
  //sanitizeString is defined in functions.php, it is for security
     $id = sanitizeString( $_POST['id']);
	 $name = sanitizeString($_POST['name']);
	 $designation = sanitizeString($_POST['designation']);
	 $noExt = sanitizeString( $_POST['noExt']);
	 $resultC = queryMysql ("SELECT id FROM Employee WHERE id = '$id'");
	 if (!(mysqli_num_rows ($resultC))) echo "Sorry, you haven't entered a valid Employee ID";
	 else {
	 queryMysql("UPDATE Employee SET EmployeeName = '$name', Designation = '$designation', ExtensionNo = '$noExt'
	WHERE id = '$id'");
  echo "Record Updated.";}
	
	

  }}
  //delete btn functionality
   if (isset($_POST['delete']) && isset($_POST['id'])){
	  echo "<script> document.getElementById('btnHead').innerHTML = 'Delete Page';</script>";
	  $id   = sanitizeString($_POST['id']);
	  queryMysql("DELETE FROM Employee WHERE id = '$id'");
  } 
  //this provides the functionality of the find button
    if (isset($_POST['search']) && isset($_POST['id']))
  { echo "<script> document.getElementById('btnHead').innerHTML = 'Find Page';</script>";
    $id   = sanitizeString($_POST['id']);
    $resultA  = queryMysql("SELECT * FROM Employee WHERE id='$id'");
    $rows = $resultA->num_rows;
	if (!(mysqli_num_rows ($resultA))) echo "Sorry, no Employee exists with that ID. <br>";
	else {
	
		$resultA->data_seek(0);
		$row = $resultA->fetch_array(MYSQLI_NUM);
		echo  "<pre> 
		Employee ID $row[0]
		Employee Name $row[1]
		Designation $row[2]
		ExtensionNo $row[3] </pre>";
	
  	}
  }
 

 
  //$_POST is safer
  //Because $_GET displays the info in the url 
  //isset means a value has been entered/"set"
if(isset($_POST['add'])){
	echo "<script> document.getElementById('btnHead').innerHTML = 'Add Page';</script>";
  if (
	  isset($_POST['id'])   &&
      isset($_POST['name'])    &&
      isset($_POST['designation']) &&
      isset($_POST['noExt']))
  {// taking them to temporary variables before modifying
  //this is a good programming practice
  //sanitizeString is defined in functions.php, it is for security
     $id = sanitizeString( $_POST['id']);
	 $name = sanitizeString($_POST['name']);
	 $designation = sanitizeString($_POST['designation']);
	 $noExt = sanitizeString( $_POST['noExt']);
	queryMysql("INSERT INTO Employee (id, EmployeeName, Designation, ExtensionNo) 
	VALUES ('" . $id . "','$name','$designation','" . $noExt . "')");
	echo "Record Added.";
	

  }}
//whatever is below will be taken literally
  echo <<<_END
  <form action="mainpage.php" method="post"><pre>
    Employee ID       : <input type="text" name="id">
    Employee Name  : <input type="text" name="name" id="name" list = "employeeName">
	<datalist id= 'employeeName'>  <option>Peter</option>
    <option >Matthew</option>
    <option >Smith</option>
	 <option >James </option>
    <option >Mary</option>
    </datalist>
    Designation        : <input type="text" name="designation">
    Extension  No.    : <input type="text" name="noExt">
           <input type="submit" class = 'btn4' name = "add" value="Add"> <input type="submit" class = "btn4"  name= "update" value="Update"> <input type="submit" class = "btn4" name = "delete" value="Delete"> <input type="submit" class = "btn4"  name = "search" value="Find">
  </pre></form>
_END;
?>