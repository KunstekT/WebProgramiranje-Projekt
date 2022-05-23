<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigationBar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon lib-->
    <script src="scripts/script.js"></script>
    <title>Steganography</title>
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
      
  <div class="container">
      <div class="row">
        <div class="col-xs-4">
          <h3>Column 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-xs-8">
          <div class="row">
            <br>
            <br>
            <br>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h3>Column 2</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-xs-6">
              <div class="row">
                <br>
                <br>
                <br>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h3>Column 3</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
