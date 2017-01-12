<?php
session_start();
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "fbtest";
       $user=$_SESSION['username'];
       // Create connection

       $conn = new mysqli($servername, $username, $password, $dbname);

       // Check connection

       if ($conn->connect_error) {

           die("Connection failed: " . $conn->connect_error);

       }

       $sql = "SELECT * from user WHERE username!='{$user}'";
       $result=$conn->query($sql);


       while($extract = $result->fetch_assoc() )
	   {
		 echo "<div class=\"user\" id=\"$extract[username]\"onclick=\"getMessages()\"> $extract[username]</div>";
	   }

	   $result->free();
       $conn->close();
?>
