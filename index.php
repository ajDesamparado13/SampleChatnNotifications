

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
      header("location:login.php");
      exit;
      }
      ?>

<nav class="navbar navbar-default">
  <div class="containear-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="login.php" onclick=Logout()>Logout</a></li>
    </ul>
  </div>
</nav>
<form id="notification_form" method="post">
<h3> Create Notification</h3>
  <div class="form-group">
    <label for="name">Title:</label>
    <input type="text" class="form-control" placeholder="Title" id="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" rows="3" id="message"></textarea>
  </div>
	<input id="submit" class="btn btn-default" onclick="submitNotification()" type="button" value="Submit">
</form>
	<div>
	<a href="#" id="updateNotification">Notification</a>
	<div id="HTMLnoti" style="textalign:center"></div>
	</div>

	<div class="notification_box">
	<div class="notification_head" onclick="selectNotifications()"> <span id="notification_count"></span>Notifications</div>
	<div class="notification_body" id="notification_body">
	<!--- insert notifications here<div class="notifications"> Freedom Genesis</div>-->
	</div>
<div class="container">

    <div class="chat_box">
  	<div class="chat_head" onclick="getUsers()"> Chat Box</div>
  	<div class="chat_body">
  	<div class="user" id="1" onclick="getMessages()"> Freedom Genesis</div>
  	</div>
    </div>

    <div class="msg_box" style="right:290px">
    	<div class="msg_head">
            &nbsp;
        <div class="recipient">
        </div>
    	<div class="close">x</div>
    	</div>
    	<div class="msg_wrap">
    		<div class="msg_body">
    			<div class="msg_push"></div>
    		</div>
    </div>
    	<div class="msg_footer">
    	<form name="messageForm">
    	<textarea class="msg_input" rows="4" name="msg"></textarea>
    	</form>
    	</div>
    </div>
</div>
</body>
</html>
