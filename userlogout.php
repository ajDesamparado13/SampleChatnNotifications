<?php
session_start();
session_unset();
setcookie();
session_destroy();

header("location:login.php");
exit;

?>
