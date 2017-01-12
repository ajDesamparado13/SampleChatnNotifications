
<?php
session_start();
$username = $_POST['username'];
$password=$_POST['password'];

$servername = "localhost";
$db_user = "root";
$db_password = "";
$dbname = "fbtest";

$con = new mysqli($servername, $db_user, $db_password, $dbname);
$result=$con->query("SELECT * FROM user where username='".$username."' AND password='".$password."'");

if($result->num_rows){
	$res = $result->fetch_assoc();

	$_SESSION['username']=$username;
	echo "You are now login. click <a href=\"index.php\"> here</a> to go back to chat window";
}
else{
echo "Sorry Invalid login please try again here by clicking <a href=\"index.php\"> here</a> to go back to main window";
}

?>
