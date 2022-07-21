<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";


$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_error()) {
	# code...
	die('Connect Error('. mysqli_connect_error().')'. mysqli_connect());
} else{


	$sql = "select * from register where email=? Limit 1"; 
	
//prepare statement
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->store_result();
	$rnum = $stmt->num_rows;

	if($rnum==1)
	{
		echo "Logged in";
	}else{

		echo "Not logged ";
	}
}
?>