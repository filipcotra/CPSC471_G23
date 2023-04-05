<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "g23_bloodbankfinal";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$entSelect = $_POST['par1'];
	$resultArray = array();
	
	$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname' AND TABLE_NAME = '$entSelect'";
	$searchResult = $conn->query($sql);
	if(!$searchResult){
		echo $sql;
	}
	while($row = mysqli_fetch_array($searchResult)){
		$resultArray[] = $row;
	}
	echo(json_encode($resultArray));		
?>