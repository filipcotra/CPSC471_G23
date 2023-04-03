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
	$resultArray = array();
	
	if($entSelect == null){
		echo "Error";
	}
	else if($attrSelect != null && $attrEnt != null){
		$sql = "SELECT $attrSelect FROM $entSelect WHERE $attrSelect = $attrEnt";
		$searchResult = $conn->query($sql);
		while($row = mysqli_fetch_array($searchResult)){
			$resultArray[] = $row;
		}
		echo(json_encode($resultArray));	
	}
	else if($attrSelect != null && $attrEnt == null){
		$sql = "SELECT $attrSelect FROM $entSelect";
		$searchResult = $conn->query($sql);
		while($row = mysqli_fetch_array($searchResult)){
			$resultArray[] = $row;
		}
		echo(json_encode($resultArray));
	}
	else if($attrSelect == null && $attrEnt != null){
		echo "Error";
	}
	else{
		$sql = "SELECT * FROM $entSelect";
		$searchResult = $conn->query($sql);
		while($row = mysqli_fetch_array($searchResult)){
			$resultArray[] = $row;
		}
		echo(json_encode($resultArray));		
	}
?>