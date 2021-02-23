<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = new mysqli('localhost', 'root', '', 'foodsys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_SESSION['name']) && isset($_SESSION['role']))
{
	
}
else 
{
	$name = $_SESSION['name'];
	$role = $_SESSION['role'];
}


?>