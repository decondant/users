<?php

session_start();
if (isset($_SESSION['username'])) 
{
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];
?>	
<link rel="stylesheet" type="text/css" href="style.css">
<div class="welcome_msg">
	<h1 align="center">Welcome <?php echo "$username"; ?></h1>
	<a href="logout.php" class="directLogin">Logout</a>
</div><?php 
	
}
else{
	header("Location: index.html");
}

?>
