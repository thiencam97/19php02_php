<?php 
	$server = 'localhost';
	$username = 'root';
	$password = ''; // 
	$database = '19php02';
	$connect = mysqli_connect($server, $username, $password, $database);
	// Check connection
	if ($connect){
		echo ' <h3 style="color:green"> Connected success!</h3>';
	} else {
		echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
	}
?>