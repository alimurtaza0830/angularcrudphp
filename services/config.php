<?php 

	// Databse Variables and Connection ---->
	$servername = "localhost";
	$username = "angularcrud";
	$password = "ali30889";
	$dbname = "angularcrud";

	// New Connection Object ---> 
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// define('base_path', 'angularcrud/webservices');
	// define('dbhost', 'localhost');
	// define('dbname', 'angularcrud');
	// define('dbuser', 'angularcrud');
	// define('dbpass', 'ali30889');
	
	// $con = new mysqli(base_path, dbhost, dbname, dbuser, dbpass);
	// if(mysqli_connect_errno()){
	// 	echo('failed to connect'.mysqli_connect_error());
	// 	exit();
	// }

?>