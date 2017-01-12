<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fbtest";

$con = new mysqli($servername, $username, $password, $dbname);


if ($con->connect_error) {

   die("Connection failed: " . $conn->connect_error);

} 
	if ($con->connect_error) {
	 
			   die("Connection failed: " . $con->connect_error);
	 
		   } 
	$con->query("UPDATE messagetest SET status='read'");
	$con->commit();
  
   
   $con->close();
 ?>﻿
