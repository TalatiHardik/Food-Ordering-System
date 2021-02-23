<?php

$conn = new mysqli('localhost', 'root', '', 'foodsys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$name = $_SESSION['name'];
	$role = $_SESSION['role'];

$success=false;

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Administrator';");
while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
}
if($success == true)
{	
	session_start();
	$_SESSION['admin_sid']=session_id();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['role'] = $role;
	$_SESSION['name'] = $name;

	header("location: ../admin.php");
}
else
{
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Customer';");
	while($row = mysqli_fetch_array($result))
	{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
	}
	if($success == true)
	{
		session_start();
		$_SESSION['customer_sid']=session_id();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $name;			
		header("location: ../index.php");
	}
	else
	{
		header("location: ../login.php");
	}
}
?>