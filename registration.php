

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
<div class="container">
    <form name="login" action="userRegister.php" method="post">
    <div class="header">
    </div>
    <label for="email">Email:</label>
    <input type="email" name="email"  class="form-control"><br>
    <div class="form-group">
    <label for="Username">Username:</label>
    <input type="text" name="username"  class="form-control"><br>
    <label for="password">Password:</label>
    <input type="password" name="password"  class="form-control"><br>
    </div>
    <input id="submit" class="btn btn-default" name="submit" type="submit" value="submit">
    </form>
</div>
</body>
</html>
