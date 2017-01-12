<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "fbtest";
 
       // Create connection
 
       $conn = new mysqli($servername, $username, $password, $dbname);
 
       // Check connection
 
       if ($conn->connect_error) {
 
           die("Connection failed: " . $conn->connect_error);

       } 
 
       $sql = "SELECT * from messagetest ORDER BY id DESC";
       $result=$conn->query($sql);
	  
	   
       while($extract = $result->fetch_assoc() )
	   {
		   echo '<div class="notifications notifications_'.$extract['status'].'" id=notification'.$extract['id'].'>'.$extract['notification'].'</div>';
	   }
	 
	   $result->free();
	  
       $conn->close();
?>