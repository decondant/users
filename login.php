<?php

$email = $_POST['email'];
$password = $_POST['password'];


$conn=mysqli_connect("localhost","root","","test");
if (!$conn) {
	# code...
	die('Connect Error('. mysqli_connect_error().')'. mysqli_connect());
} else{

$sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";


$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) 
{
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$id = $row["id"];
		$email = $row["email"];
		$username = $row["username"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $username;
	}	
	header("Location: welcome.php");
}else{
	echo "Invalid email or password";
}}

?>