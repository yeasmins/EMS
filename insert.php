<?php
require_once "functions.php";
	queryMysql('INSERT INTO Member(user, pass)
	VALUES("Mariam", "Mariam123")');
	queryMysql('
	INSERT INTO Member(user, pass)
	VALUES("Mohammed", "Mohammed123")');
	queryMysql('INSERT INTO Member(user, pass)
	VALUES("Abdullah", "Abdullah123")');
	queryMysql('INSERT INTO Member(user, pass)
	VALUES("Fatima", "Fatima123");
	');
	queryMysql('INSERT INTO Employee(id, EmployeeName, Designation, ExtensionNo)
	VALUES(1000,"Peter", "Project Manager", 71082)');
	queryMysql('INSERT INTO Employee(id, EmployeeName, Designation, ExtensionNo)
	VALUES(1001,"James", "Technical Architect", 71070)');
	queryMysql('INSERT INTO Employee(id, EmployeeName, Designation, ExtensionNo)
	VALUES(1002,"Smith", "Technical Architect", 71022)');
	queryMysql('INSERT INTO Employee(id, EmployeeName, Designation, ExtensionNo)
	VALUES(1003,"Matthew", "Software Engineer", 71026)');
	queryMysql('INSERT INTO Employee(id, EmployeeName, Designation, ExtensionNo)
	VALUES(1004,"Mary", "Project Manager", 71034)');
	?>