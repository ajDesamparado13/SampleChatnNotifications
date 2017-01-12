
<?php
session_start();
$username = $_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$servername = "localhost";
$db_user = "root";
$db_password = "";
$dbname = "fbtest";

$con = new mysqli($servername, $db_user, $db_password, $dbname);
$result=$con->query("INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$password','$email')");
$con->commit();
$_SESSION['username']=$username;

header("location:index.php");

?>
