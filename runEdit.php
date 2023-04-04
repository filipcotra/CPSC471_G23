<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "g23_bloodbank";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$table = $_POST['par1'];
	$col = $_POST['par2'];
	$newValue = $_POST['par3'];
	$keyCol = $_POST['par4'];
	$keyValue = $_POST['par5'];
	
	$sql = "UPDATE $table SET $col = '$newValue' WHERE $keyCol = '$keyValue'";
	
	if($conn->query($sql))
		echo "Successful";
	else
		echo "Not Successful";
?>