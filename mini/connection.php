<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "mini_project";
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	$db_conn = mysqli_select_db($conn,$db_name);
	if(!$db_conn){
		die("Connection to database is rejected");
	}
?>