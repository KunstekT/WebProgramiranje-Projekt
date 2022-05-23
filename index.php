<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/formStyle.css">
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
    <a href="home.php" class="active">Home</a>
	<?php
		if(!isset($_SESSION['username']))
		{
			echo '<a href="login.php">Log in</a>';
		}
		else
		{
			echo '<a href="login.php?logout=1">Log out</a>';
		}
	?>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>
<div class="header">
	<h2>Welcome!</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Nice to see you, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
		<p>Would you like to try our <a href="html/steg.html">steganography</a> now?</p>
    <?php endif ?>
</div>
		
</body>
</html>