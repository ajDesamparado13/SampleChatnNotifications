

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="facivon.ico">

    <title>Facebook-like chat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="script.js"></script>

  </head>


  <body>
      <?php

      session_start();
      if(!isset($_SESSION['username'])){
      echo '<form name="login" action="userlogin.php" method="post">';
      echo '<div class="header">';
      echo '</div>';
      echo '<div class="form-group">';
      echo '<label for="Username">Username:</label>';
      echo '<input type="text" name="username"  class="form-control"><br>'	;
      echo '<label for="password">Password:</label>'	;
      echo '<input type="password" name="password"  class="form-control"><br>'	;
      echo '</div>'	;
      echo '<input id="submit" class="btn btn-default" name="submit" type="submit" value="Login">';
       echo '<a href="registration.php" class="btn btn-default">Register here</a>';
      echo '</form>';

      exit;
      }
      ?>
</body>
</html>
