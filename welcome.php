<?php

session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
echo "welcome ".$username;

?>