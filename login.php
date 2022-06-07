<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  	<title>Login</title>
  	<link rel="stylesheet" type="text/css" href="css/formStyle.css">
	<meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/navigationBar.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon lib-->
    <script src="scripts/script.js"></script>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a href="home.php" >Home</a>
	<?php
		if(!isset($_SESSION['username']))
		{
			echo '<a href="login.php" class="active">Log in</a>';
		}
		else
		{
			echo '<a href="login.php?logout=1" class="active">Log out</a>';
		}
	?>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
	<?php
    if(isset($_SESSION['username']))
    {
      echo '<a href="steg.php">Steganography</a>';
    }
    ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter your username here">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter your password here">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>