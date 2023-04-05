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
	$valuesToInsert = $_POST['par2'];
	
	$i = 0;
	$sql = "INSERT INTO $entSelect VALUES (";
	while($i < count($valuesToInsert)){
		$toAdd = $valuesToInsert[$i];
		$sql .= "'$toAdd'";
		if($i + 1 < count($valuesToInsert)){
			$sql .= ", ";
		}
		else{
			$sql .= ")";
		}
		$i++;
	}
	
	if($conn->query($sql))
		echo "Successful";
	else
		echo $sql;		
?>