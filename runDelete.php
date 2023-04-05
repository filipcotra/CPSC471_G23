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
	
	$table = $_POST['par1'];
	$columns= $_POST['par2'];
	$rowValues = $_POST['par3'];
	
	$sql = "DELETE FROM $table WHERE ";
	$i = 0;
	while($i < count($columns)){
		$toAdd1 = $columns[$i];
		$toAdd2 = $rowValues[$i];
		$sql .= "$toAdd1 = '$toAdd2'";
		if($i + 1 < count($columns)){
			$sql .= " AND ";
		}
		$i++;
	}
	
	if($conn->query($sql))
		echo "Successful";
	else
		echo "Unsuccessful";
?>