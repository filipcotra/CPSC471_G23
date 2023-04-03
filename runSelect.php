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
	
	$entSelect = $_POST['par1'];
	$attrSelect = $_POST['par2'];
	$attrEnt = $_POST['par3'];
	
	//if(isset($attrEnt)){
	//	$sql = "SELECT $attrSelect FROM $entSelect WHERE $attrSelect = $attrEnt";
	//}
	//else{
	//	$sql = "SELECT $attrSelect FROM $entSelect";
	//}
	//return $conn->query($sql);
	echo "$entSelect : $attrSelect : $attrEnt";
?>