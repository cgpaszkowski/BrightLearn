<?php
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpw = "";
	$dbname = "2170";

	$conn = new mysqli($dbhost, $dbuser, $dbpw, $dbname);

	if ($conn->connect_error){
		die("Connection failed!" . $conn->connect_error);
	}

?>