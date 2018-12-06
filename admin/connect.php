<?php

$conn = new mysqli("localhost","root","akhilesh@123","txp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

if(!(isset($_SESSION['adminname']))){
	header('Location: login.php');
	die();
}
?>