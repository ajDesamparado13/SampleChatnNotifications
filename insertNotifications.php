<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fbtest";

$con = new mysqli($servername, $username, $password, $dbname);

$notification=$_POST['title']."\r\n".$_POST['message'];

if ($con->connect_error) {

   die("Connection failed: " . $conn->connect_error);

} 
	if (isset($_POST['title']) && isset($_POST['message']) ) {
	$con->query("INSERT INTO messagetest(`notification`, `status`) VALUES ('".$notification."', 'Unread')");
	$con->commit();
}
   $con->close();
?>﻿
