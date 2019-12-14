<?php

	$servername = "localhost";
	$dbname = "jquery_crud";
	$username = "root";
	$password = "";
	
try{
	$con = mysqli_connect($servername, $username, $password, $dbname);
	if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
	}
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

?>